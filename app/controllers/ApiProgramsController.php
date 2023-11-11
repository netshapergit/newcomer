<?php

class ApiProgramsController extends BaseController {

    public function all() {
        $data = Page::where('layout_id', '17')
            ->with(['coursesByProgramId' => function ($q) {
                $q->select('id')->with(['lessonsByCourseId' => function($l) {
                    $l->select('id');
                }]);
            }])
            ->get()->toArray();
        $success = true;
        return $success
            ? Response::json(array(
                'data' => $data
            ))
            : App::abort(400, array('errors'=> array()));
    }

    public function show($programId) {
        $data = array();
        $allCourses = Page::where('layout_id', '19')->select('id', 'field_header')->get();
        $page = Page::where('id', $programId)->with('coursesByProgramId')->first();
        $data['program'] = $page;
        $data['courses'] = $allCourses;

        $success = true;
        return $success
            ? Response::json(array(
                'data' => $data
            ))
            : App::abort(400, array('errors'=> array()));
    }

}