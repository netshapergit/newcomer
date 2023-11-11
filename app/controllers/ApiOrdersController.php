<?php

class ApiOrdersController extends BaseController {

     public function test3() {
          echo file_get_contents('https://disk.v-es.ru/sharing/GzPaigl1S');
          return;
      $ch = curl_init();

        $headers = array(
            
        );

        curl_setopt($ch, CURLOPT_URL,'https://disk.v-es.ru/sharing/GzPaigl1S');
        //curl_setopt($ch, CURLOPT_URL,'https://google.com');
        //curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        //curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
        $server_output = curl_exec($ch);
        //$parsed = get_string_between($server_output, '<div id="welcome">', '<!--welcome-->');
        print_r($server_output);
        curl_close($ch);
     
     }

    public function all() {
        $data = Order::all()->toArray();
        $success = true;
        return $success
            ? Response::json(array(
                'data' => $data
            ))
            : App::abort(400, array('errors'=> array()));
    }

    public function my() {
        $user = Auth::user()->get();//User::find(1);//
        if(!$user) return Response::json($this->newError('access denied', 'logicError'), 401);

        $data = Order::where('user_id', $user['id'])->get()->toArray();
        $success = true;
        return $success
            ? Response::json(array(
                'data' => $data
            ))
            : App::abort(400, array('errors'=> array()));
    }

    public function myOrderArchivation() {
        $user = Auth::user()->get();//User::find(1);//
        if(!$user) return Response::json($this->newError('access denied', 'logicError'), 401);
        $userId = $user['id'];
        $orderId = Input::get('id');

        $order = Order::find($orderId);
        if(!$order) return Response::json($this->newError('order not found', 'logicError'), 404);

        $msg = 'Заявка отправлена в архив';

        if($order['is_archived'] == 0) {
            $order['is_archived'] = 1;
        } else {
            $order['is_archived'] = 0;
            $msg = 'Заявка убрана из архива';
        }

        $success = $order->save();

        return $success
            ? Response::json(array(
                'data' => $order,
                'msg' => $msg
            ))
            : App::abort(500, array('errors'=> array()));

    }

    public function myRequestedOrdersUnDenied() {
        $user = Auth::user()->get();//User::find(1);//
        if(!$user) return Response::json($this->newError('access denied', 'logicError'), 401);

        $userId = $user['id'];
        $orderId = Input::get('id');

        $order = Order::find($orderId);
        if(!$order) return Response::json($this->newError('order not found', 'logicError'), 404);

        if($order['substitutor'] == $userId) {
            $order['substitutor_denied'] = 0;
        }

        if($order['coordinator'] == $userId) {
            $order['coordinator_denied'] = 0;
        }

        if($order['acceptor'] == $userId) {
            $order['hr_denied'] = 0;
        }
        /*
        if($user["field_is_hr"]) {
            $order['hr_denied'] = 0;
        }
        */

        $success = $order->save();

        return $success
            ? Response::json(array(
                'data' => $order
            ))
            : App::abort(500, array('errors'=> array()));
    }

    public function myRequestedOrdersDenied() {
        $user = Auth::user()->get();//User::find(1);//
        if(!$user) return Response::json($this->newError('access denied', 'logicError'), 401);

        $userId = $user['id'];
        $orderId = Input::get('id');

        $order = Order::find($orderId);
        if(!$order) return Response::json($this->newError('order not found', 'logicError'), 404);

        if($order['substitutor'] == $userId) {
            $order['substitutor_denied'] = 1;
        }

        if($order['coordinator'] == $userId) {
            $order['coordinator_denied'] = 1;
        }

        if($order['acceptor'] == $userId) {
            $order['hr_denied'] = 1;
        }
        /*
        if($user["field_is_hr"]) {
            $order['hr_denied'] = 1;
        }
        */

        $success = $order->save();

        return $success
            ? Response::json(array(
                'data' => $order
            ))
            : App::abort(500, array('errors'=> array()));
    }

    public function myRequestedOrdersDeny() {
        $user = Auth::user()->get();//User::find(1);//
        if(!$user) return Response::json($this->newError('access denied', 'logicError'), 401);

        $userId = $user['id'];
        $orderId = Input::get('id');

        $order = Order::find($orderId);
        if(!$order) return Response::json($this->newError('order not found', 'logicError'), 404);

        if($order['substitutor'] == $userId) {
            $order['substitutor_accepted'] = 0;
        }

        if($order['coordinator'] == $userId) {
            $order['coordinator_accepted'] = 0;
        }

        if($order['acceptor'] == $userId) {
            $order['hr_accepted'] = 0;
        }

        /*
        if($user["field_is_hr"]) {
            $order['hr_accepted'] = 0;
        }
        */

        $success = $order->save();

        return $success
            ? Response::json(array(
                'data' => $order
            ))
            : App::abort(500, array('errors'=> array()));
    }

    public function myRequestedOrdersAccept() {
        $user = Auth::user()->get();//User::find(1);//
        if(!$user) return Response::json($this->newError('access denied', 'logicError'), 401);

        $userId = $user['id'];
        $orderId = Input::get('id');

        $order = Order::find($orderId);
        if(!$order) return Response::json($this->newError('order not found', 'logicError'), 404);

        if($order['substitutor'] == $userId) {
            $order['substitutor_accepted'] = 1;
        }

        if($order['coordinator'] == $userId) {
            $order['coordinator_accepted'] = 1;
        }

        if($order['acceptor'] == $userId) {
            $order['hr_accepted'] = 1;
        }

        /*
        if($user["field_is_hr"]) {
            $order['hr_accepted'] = 1;
        }
        */

        $success = $order->save();

        return $success
            ? Response::json(array(
                'data' => $order
            ))
            : App::abort(500, array('errors'=> array()));
    }

    public function myRequestedOrders() {
        $user = Auth::user()->get();//User::find(1);//
        if(!$user) return Response::json($this->newError('access denied', 'logicError'), 401);

        $userId = $user->id;

        $data = array();

        if(false) {//if($user["field_is_hr"]) {
            $data = Order::where(function($query) use ($userId) {
                    $query->where('coordinator_accepted', 1)
                          ->where('substitutor_accepted', 1);
                })
                ->get();
        } else {
            $data = Order::where('substitutor', '=', $userId)
                ->orWhere(function($query) use ($userId) {
                    $query->where('coordinator', '=', $userId)
                          ->where('substitutor_accepted', 1);
                })
                ->orWhere(function($query) use ($userId) {
                    $query->where('acceptor', '=', $userId)
                          ->where('substitutor_accepted', 1)
                          ->where('coordinator_accepted', 1);
                })
                ->get();
        }

        //$data = Order::where('user_id', $user['id'])->get()->toArray();
        
        
        $success = true;
        return $success
            ? Response::json(array(
                'data' => $data
            ))
            : App::abort(400, array('errors'=> array()));
    }

    public function test2() {
        print_r(Config::get('settings.site.field_request_btrip_group'));
    }

    public function create() {

        $user = Auth::user()->get();//User::find(1);//
        if(!$user) return Response::json($this->newError('access denied', 'logicError'), 401);

        $clientData = Input::all();

        $newOrder = new Order();
        $newOrder->user_id = $user['id'];

        if(!isset(Order::$ORDER_TYPES[$clientData['type']])) return Response::json($this->newError('request type is not found', 'logicError'), 404);
        $orderType = Order::$ORDER_TYPES[$clientData['type']];
        $newOrder->type = $orderType;

        $newOrder->vacation_type = $clientData['vacation_type'];
        if(isset($clientData['description'])) {
            $newOrder->description = $clientData['description'];
        }

        if(isset($clientData['location'])) {
            $newOrder->location = $clientData['location'];
        }

        $substitutor = User::find($clientData['substitutor']);
        if(!$substitutor) return Response::json($this->newError('substitutor is not found', 'logicError'), 404);
        $newOrder->substitutor = $substitutor['id'];

        $coordinator = User::find($clientData['coordinator']);
        if(!$coordinator) return Response::json($this->newError('coordinator is not found', 'logicError'), 404);
        $newOrder->coordinator = $coordinator['id'];

        

        if($orderType == 'business_trip') {
            $groupStr = Config::get('settings.site.field_request_btrip_group');
            $group = explode(",", $groupStr);
            if(count($group) == 3) {
                $newOrder->substitutor = $group[0];
                $newOrder->coordinator = $group[1];
                $newOrder->acceptor = $group[2];
            }
        }

        if($orderType == 'equipment') {
            $newOrder->substitutor_accepted = 1;
            $newOrder->coordinator_accepted = 1;
        }

        if(!isset($newOrder['acceptor'])) {
            $acceptor = User::find($clientData['acceptor']);
            if(!$acceptor) return Response::json($this->newError('acceptor is not found', 'logicError'), 404);
            $newOrder->acceptor = $acceptor['id'];
        }

        $newOrder->dates = json_encode($clientData['dates']);

        $success = $newOrder->save();

        return $success
            ? Response::json(array(
                'data' => $newOrder
            ))
            : Response::json($this->newError('db error', 'logicError'), 500);
    }

    public function myOrderDelete() {
        $user = Auth::user()->get();//User::find(1);//
        if(!$user) return Response::json($this->newError('access denied', 'logicError'), 401);
        $userId = $user['id'];
        $orderId = Input::get('id');

        $order = Order::find($orderId);
        if(!$order) return Response::json($this->newError('order not found', 'logicError'), 404);

        //$orderToDelete = Order::where('id', '=', Input::get("id"))->where('user_id', '=', $user["id"]);
        //if(!$orderToDelete) return Response::json($this->newError('order not found', 'logicError'), 404);
        
        $success = $order->delete();

        return $success
            ? Response::json(array(
                'data' => array(
                    'id' => $orderId
                )
            ))
            : Response::json($this->newError('db error', 'logicError'), 500);

    }

    public function test() {
        $data = Order::all()->toArray();
        return Response::json(array(
            'data' => $data
        ));
    }


}