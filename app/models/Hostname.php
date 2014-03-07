<?php

class Hostname extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'hostname' => 'required',
		'block' => 'required'
	);
}
