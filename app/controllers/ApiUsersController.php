<?php

class ApiUsersController extends BaseController {

    public function all() {
        $data = array();

        $data['users'] = User::all();
        $data['roles'] = User::$ROLES;

        $success = true;
        return $success
            ? Response::json($data)
            : App::abort(400, $item->validator->messages());
    }

    public function show($userId) {
        $data = array();

        $data['user'] = User::find($userId);
        $data['roles'] = User::$ROLES;

        $success = true;
        return $success
            ? Response::json($data)
            : App::abort(400, $item->validator->messages());
    }

    public function update($userId) {
        $data = array();

        $user = User::find($userId);

        if(Input::has('active')) {
            $user['active'] = Input::get('active');
        }

        if(Input::get('field_role_id')) {
            $user->field_role_id = Input::get('field_role_id');
        }

        //$data['user'] = User::find($userId);
        //$data['roles'] = User::$ROLES;

        $success = $user->save();
        return $success
            ? Response::json($user)
            : App::abort(400, $item->validator->messages());
    }

    public function test() {
        $data = Order::all()->toArray();
        return Response::json(array(
            'data' => $data
        ));
    }


}