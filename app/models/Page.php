<?php

use \Illuminate\Database\Eloquent\Collection;

// TODO find better way instead of PageCustom
class Page extends PageCustom {

	const MAX_DEPTH = 32;

	protected $table = TABLE_PAGE;

	public static $layout = array(
		'course' => 19,
		'lesson' => 22,
		'program' => 17
	);

	public function getFieldTestQuestionsAttribute($value) {
		if(!$value) return $value;
		if(!json_decode($value, true)) return $value;

		$user = Auth::user()->get();
		if(!$user) return array();
        $user['role'] = User::getRole($user['field_role_id']);

		if($user['role']['name'] == 'student') {

			$result = json_decode($value, true);

			foreach($result as $key => $item) {
				unset($result[$key]['rate']);
				//$question['id'] = 'dada';
				foreach($item['question']['items'] as $qKey => $question) {
					//$result[$key]['question']['items'][$qKey]['answers'] = [];
					unset($result[$key]['question']['items'][$qKey]['answers']);
				}
				foreach($item['variants'] as $vKey => $variant) {
					//$result[$key]['variants'][$vKey]['rate'] = null;
					//$result[$key]['variants'][$vKey]['isCorrect'] = false;
					unset($result[$key]['variants'][$vKey]['rate']);
					unset($result[$key]['variants'][$vKey]['isCorrect']);
				}
				//foreach($question['variants'] as $key => $variant) {
					//$variant['rate'] = null;
					//unset($question['variants'][$key]['rate']);
					//unset($variant['isCorrect']);
				//}
			}

			return json_encode($result);
		}
		return $value;
    }

	public function getFieldTeachersAttribute($value) {
		$result = explode(',', $value);
        return $result;
    }

	public $additionalFields = array(
		'path',
	);

	public function parentPage()
	{
		return $this->belongsTo('Page');
	}

	public function layout()
	{
		return $this->belongsTo('Layout');
	}

	public function subPages()
	{
		return $this->hasMany('Page', 'parent_page_id');
	}

	public function modules()
	{
		return $this->belongsToMany('Module', TABLE_PAGE_OF_MODULE);
	}

	public function courses() {
        return Page::where('layout_id', $this::$layout['course'])->get();
    }

	public function programs() {
        return Page::where('layout_id', $this::$layout['program'])->get();
    }

	public function lessons() {
        return Page::where('layout_id', $this::$layout['lesson'])->get();
    }

	public function coursesCount() {
		return $this->coursesByProgramId()->count();
	}

	public function coursesByProgramId() {
		return $this->belongsToMany('Page', 'v_es__ru$_page_page_field_programs_courses', 'page_id', 'owner_page_id');
	}

	public function programsByCourseId() {
		return $this->belongsToMany('Page', 'v_es__ru$_page_page_field_programs_courses', 'owner_page_id', 'page_id');
	}

	public function lessonsByCourseId() {
		return $this->belongsToMany('Page', 'v_es__ru$_page_page_field_courses_lessons', 'page_id', 'owner_page_id');
	}

	public function coursesByLessonId() {
		return $this->belongsToMany('Page', 'v_es__ru$_page_page_field_courses_lessons', 'owner_page_id', 'page_id');
	}

	protected function rules()
	{
		$rules = array(
			'parent_page_id' => $this->alias ? 'required|' : '' . 'integer|exists:' . TABLE_PAGE . ',id',
			'layout_id' => 'required|integer|exists:' . TABLE_LAYOUT . ',id',
			'alias' => 'regex:#^[a-z\\d\\-]*$#',
			'order' => 'numeric',
		);

		if ($this->layout)
		{
			foreach ($this->layout->fields as $field)
			{
				if ($field->pivot->required && !in_array($field->fieldType->alias, array('options', 'pages')))
				{
					$rules['field_' . $field->alias] = 'required';
				}
			}
		}

		return $rules;
	}

	public function getActiveSubPagesAttribute()
	{
		return $this->subPages
			->filter(function($page)
			{
				return $page->isAvailable(null, false);
			});
	}

	public function getParentsAttribute()
	{
		$pages = array();

		$page = $this;

		$counter = 0;

		do
		{
			$pages[] = $page;

			$page = $page->parentPage;

			if (++$counter > Page::MAX_DEPTH)
			{
				throw new Error('Recursive path for page ID ' . $this->id);
			}
		}
		while($page);

		return new Collection(array_reverse($pages));
	}

	public function getPathAttribute()
	{
		$path = '';

		foreach ($this->parents->reverse() as $page)
		{
			if ($page->alias)
			{
				$path = '/' . $page->alias . $path;
			}
		}

		return $path ?: '/';
	}

	public function isAvailable(User $user = null, $nested = true)
	{
		if (!$user)
		{
			$user = Auth::user()->get();
		}

		$available = true;

		$pages = $nested ? $this->parents : array($this);

		foreach ($pages as $page)
		{
			if (!$page->active
				|| $page->access_level == 'guest' && $user
				|| $page->access_level == 'user' && !$user
			) {
				$available = false;
				break;
			}
		}

		return $available;
	}

	public static function findByPath($path)
	{
		$user = Auth::user()->get();

		$path = trim($path, '/');
		$segments = $path ? explode('/', $path) : array();
		array_unshift($segments, '');

		$page = null;
		do
		{
			$alias = array_shift($segments);

			$query = Page::where('alias', $alias)->where('active', true);

			if ($page)
			{
				$query->where('parent_page_id', $page->id);
			}
			else
			{
				$query->whereNull('parent_page_id');
			}

			if (count($segments) === 0)
			{
				$query->with('layout');
			}

			$page = $query->first();

			if ($page && !$page->isAvailable($user, false)) {
				$page = null;

				// TODO
//				App::abort(403);
			}
		}
		while ($page && count($segments) > 0);

		return $page;
	}

}
