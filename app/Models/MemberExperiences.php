<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class memberexperiences extends Model  {
	use SoftDeletes; protected $softDelete = true;
	protected $table = 'member_experiences';
}
