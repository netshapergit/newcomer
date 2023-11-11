<?php

class Order extends Model {

	protected $table = TABLE_REQUESTS;

	//protected $fillable = ['user_id', 'field2'];

	public static $ORDER_TYPES = array(
		'VACATION' => 'vacation',
		'BUSINESS_TRIP' => 'business_trip',
		'EQUIPMENT' => 'equipment'
	);

}