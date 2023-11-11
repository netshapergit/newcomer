<?php

class ApiCoursesController extends BaseController {

    public function all() {
        $page = new Page();
        $data = array();
        /*$data['courses'] = array();
        if(Input::get('query')) {
            $data['courses'] = $page::where('layout_id', Page::$layout['course'])->where('field_header', 'like', '%' . Input::get('query') . '%')->get();
        } else {
            $data['courses'] = $page->courses();
        }*/

        $data['courses'] = Page::where('layout_id', Page::$layout['course'])
            ->with(['lessonsByCourseId' => function ($q) {
                $q->select('id');
            }])->get();
        $data['programs'] = $page->programs();
        $success = true;
        return $success
            ? Response::json($data)
            : App::abort(400, array('errors'=> array()));
    }



    public function show($courseId) {
        $data = array();
        $page = Page::where('id', $courseId)->with('programsByCourseId', 'lessonsByCourseId')->first();
        $programs = Page::where('layout_id', '17')->select('id', 'field_header')->get();
        $data['page'] = $page;
        $data['programs'] = $programs;

        $teachersIds = $page['field_teachers'];//explode(',', $page['field_teachers']);

        $data['teachers'] = User::where('field_role_id', '9')->select('id', 'field_fullname')->get();
        
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