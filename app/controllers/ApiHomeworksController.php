<?php

class ApiHomeworksController extends BaseController {

    public function all() {
        $page = new Page();
        $data = array();
        $data['items'] = Homework::with('lesson', 'lesson.coursesByLessonId', 'student')->get();
        
        $data['teachers'] = User::where('field_role_id', '9')->select('id', 'field_fullname')->get();
        $data['students'] = User::where('field_role_id', '10')->select('id', 'field_fullname')->get();

        $success = true;
        return $success
            ? Response::json(array(
                'data' => $data
            ))
            : App::abort(400, array('errors'=> array()));
    }

    public function my() {
        $user = Auth::user()->get();
        $user['role'] = User::getRole($user['field_role_id']);

        if($user['role']['name'] == 'admin') return $this->all();
        if($user['role']['name'] == 'teacher') return $this->teacherHomeworks($user);
        return $this->studentHomeworks($user);
    }

    public function teacherHomeworks($user) {

        //$user = Auth::user()->get();
        //$user['role'] = User::getRole($user['field_role_id']);

        //if($user['role']['name'] == 'admin') return $this->all();

        $data = array();
        $items = Homework::with('lesson', 'lesson.coursesByLessonId', 'student')->get()->toArray();

        $filteredItems = array_filter($items, function($v) use ($user) {
            //print_r($v['lesson']);
            $lesson = $v['lesson'];
            return in_array($user['id'], $lesson['field_teachers']);
        });

        $data['items'] = array_values($filteredItems);//(array) $filteredItems;
        $data['teachers'] = User::where('field_role_id', '9')->select('id', 'field_fullname')->get();
        $data['students'] = User::where('field_role_id', '10')->select('id', 'field_fullname')->get();

        $success = true;
        return $success
            ? Response::json(array(
                'data' => $data
            ))
            : App::abort(400, array('errors'=> array()));
    }

    public function studentHomeworks($user) {

        $data = array();
        $items = Homework::where('user_id', $user['id'])->with('lesson', 'lesson.coursesByLessonId', 'student')->get()->toArray();

        $data['items'] = $items;
        $data['teachers'] = User::where('field_role_id', '9')->select('id', 'field_fullname')->get();
        $data['students'] = User::where('field_role_id', '10')->select('id', 'field_fullname')->get();

        $success = true;
        return $success
            ? Response::json(array(
                'data' => $data
            ))
            : App::abort(400, array('errors'=> array()));
    }

    public function show($lessonId) {
        $data = array();
        $page = Page::where('id', $lessonId)->with('coursesByLessonId')->first();
        $data['page'] = $page;
        $data['courses'] = Page::where('layout_id', '19')->select('id', 'field_header')->get();
        $data['teachers'] = User::where('field_role_id', '9')->select('id', 'field_fullname')->get();

        $success = true;
        return $success
            ? Response::json(array(
                'data' => $data
            ))
            : App::abort(400, array('errors'=> array()));
    }

    public function update() {
        
        $user = Auth::user()->get();
        if(!$user) return Response::json($this->newError('access denied', 'logicError'), 401);

        $homework = Homework::find(Input::get('id'));
        if(!$homework) return Response::json($this->newError('homework not found', 'logicError'), 404);

        $homework->grade = Input::get('grade');
        $homework->is_checked = Input::get('is_checked');

        $success = $homework->save();

        return $success
            ? Response::json(array(
                'data' => $homework
            ))
            : App::abort(400, array('errors'=> array()));
    }

    public function delete() {
        
        $user = Auth::user()->get();
        if(!$user) return Response::json($this->newError('access denied', 'logicError'), 401);

        $homework = Homework::find(Input::get('id'));
        if(!$homework) return Response::json($this->newError('homework not found', 'logicError'), 404);


        $success = $homework->delete();

        return $success
            ? Response::json(array(
                'data' => $success
            ))
            : App::abort(400, array('errors'=> array()));
    }

    public function create() {
        
        $user = Auth::user()->get();
        //$homework->fill(Input::all());
        //print_r(Input::all());

        $homework = new Homework();
        /*
        $homework->lesson_id = Input::get('lesson_id');
        $homework->text = Input::get('text');
        $homework->file = Input::get('file');
        */
        $homework->fill(Input::all());
        $homework->user_id = $user['id'];

        $success = $homework->save();

        return $success
            ? Response::json(array(
                'data' => $homework
            ))
            : Response::json(array(
                'errors' => $this->newError('Saving error', 'db error')
            ), 500);
    }

}