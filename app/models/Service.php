<?php

class Service extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		//'id' => 'required',
		'data' => 'required'
	);
}
