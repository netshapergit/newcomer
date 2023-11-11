<?php

class ApiMessagesController extends BaseController {

    public function all() {
        
        $data = array();
        $data['items'] = Message::with(array('fromUser' => function($query) {
            $query->select('id', 'field_fullname');
        }, 'toUser' => function($query) {
            $query->select('id', 'field_fullname');
        }, 'page'))->get();
        
        //$data['teachers'] = User::where('field_role_id', '9')->select('id', 'field_fullname')->get();
        //$data['students'] = User::where('field_role_id', '10')->select('id', 'field_fullname')->get();

        $success = true;
        return $success
            ? Response::json($data)
            : App::abort(400, array('errors'=> array()));
    }

    public function readMy() {
        $user = Auth::user()->get();
        if(!$user) return Response::json($this->newError('access denied', 'logicError'), 401);
        $data = array();

        $from_id = Input::get('from_id');

        $messages = Message::where('from_id', $from_id)->where('to_id', $user['id'])->update(['is_read' => '1']);
        
        $success = true;//Message::where('from_id', $from_id)->where('to_id', $user['id'])->update(['is_read' => '1']);
        return $success
            ? Response::json($data)
            : App::abort(400, array('errors'=> array()));
    }

    public function my() {
        $user = Auth::user()->get();
        if(!$user) return Response::json($this->newError('access denied', 'logicError'), 401);

        $data = array();

        $data['items'] = Message::where('from_id', $user['id'])->orWhere('to_id', $user['id'])
            ->with(array('fromUser' => function($query) {
                $query->select('id', 'field_fullname');
            }, 'toUser' => function($query) {
                $query->select('id', 'field_fullname');
            }, 'page' => function($query) {
                //$query->select('id', 'field_fullname');
            }))->get();
        
        //$data['teachers'] = User::where('field_role_id', '9')->select('id', 'field_fullname')->get();
        //$data['students'] = User::where('field_role_id', '10')->select('id', 'field_fullname')->get();

        $success = true;
        return $success
            ? Response::json($data)
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
        

        $message = new Message();
        $message->fill(Input::all());
        $message->from_id = $user['id'];

        $success = $message->save();

        return $success
            ? Response::json(array(
                'data' => $message
            ))
            : Response::json(array(
                'errors' => $this->newError('Saving error', 'db error')
            ), 500);
    }

}