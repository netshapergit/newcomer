<?php

class Homework extends Model {

	protected $table = TABLE_HOMEWORKS;
    protected $fillable = array('text', 'file', 'lesson_id', 'user_id');

    public function show($programId) {
        $data = Course::whereIn($programId, 'programs')->get()->toArray();
        $success = true;
        return $success
            ? Response::json(array(
                'data' => $data
            ))
            : App::abort(400, array('errors'=> array()));
    }

    public function all3($programId) {
        $data = Course::whereIn($programId, 'programs')->get()->toArray();
        $success = true;
        return $success
            ? Response::json(array(
                'data' => $data
            ))
            : App::abort(400, array('errors'=> array()));
    }

    public function student()
    {
        return $this->belongsTo('User', 'user_id', 'id');
    }

    public function lesson()
    {
        return $this->belongsTo('Page', 'lesson_id', 'id');
    }

}