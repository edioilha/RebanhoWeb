<?php

namespace rebanhoweb;

use Illuminate\Database\Eloquent\Model;

class Leite extends Model
{
    protected $table = 'leite';
	public $timestamps = false;
	
	protected $fillable = array('data','litros');
}
