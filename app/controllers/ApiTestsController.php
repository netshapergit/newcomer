<?php

class ApiTestsController extends BaseController {

    public function all() {
        $page = new Page();
        $data = array();
        //$data['courses'] = $page->courses()->toArray();
        //$data['lessons'] = $page->lessons()->toArray();
        $data['tests'] = Page::where('layout_id', '27')->get();
        $success = true;
        return $success
            ? Response::json(array(
                'data' => $data
            ))
            : App::abort(400, array('errors'=> array()));
    }

    public function show($lessonId) {
        $user = Auth::user()->get();
        if(!$user) return Response::json($this->newError('access denied', 'logicError'), 401);

        $data = array();
        $page = Page::find($lessonId);
        $data['page'] = $page;
        //$data['courses'] = Page::where('layout_id', '19')->select('id', 'field_header')->get();
        //$data['teachers'] = User::where('field_role_id', '9')->select('id', 'field_fullname')->get();
        //$data['homework'] = Homework::where('user_id', $user['id'])->where('lesson_id', $page['id'])->first();

        $success = true;
        return $success
            ? Response::json(array(
                'data' => $data
            ))
            : App::abort(400, array('errors'=> array()));
    }

    public function create() {
        $course = new Course();
        $course->field_header = Input::get('field_header');

        $success = $course->save();

        if(Input::get('programs')) {
            $course->pages()->attach(Input::get('programs'));
        }

        return $success
            ? Response::json(array(
                'data' => $course
            ))
            : Response::json(array(
                'errors' => $this->newError('Saving error', 'db error')
            ), 500);
    }

}