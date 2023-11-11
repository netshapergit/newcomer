<?php

class Course extends Model {

	protected $table = TABLE_COURSES;
    protected $fillable = ['field_header'];

    public function show($programId) {
        $data = Course::whereIn($programId, 'programs')->get()->toArray();
        $success = true;
        return $success
            ? Response::json(array(
                'data' => $data
            ))
            : App::abort(400, array('errors'=> array()));
    }

    public function pages()
    {
        return $this->belongsToMany('Page', TABLE_COURSE_PAGE, 'course_id', 'page_id');
    }

}