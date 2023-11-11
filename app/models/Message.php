<?php

class Message extends Model {

	protected $table = TABLE_MESSAGES;
    protected $fillable = array('text', 'to_id', 'page_id');
    protected $appends = ['room'];
    public $timestamps = ['created_at'];
    const UPDATED_AT = null;

    public function getRoomAttribute($value) {
        $arr = array(intval($this->attributes['from_id']), intval($this->attributes['to_id']));
        rsort($arr);
        return implode('-', $arr);
    }

    public function fromUser() {
        return $this->belongsTo('User', 'from_id', 'id');
    }

    public function toUser() {
        return $this->belongsTo('User', 'to_id', 'id');
    }

    public function page() {
        return $this->belongsTo('Page', 'page_id', 'id');
    }

}