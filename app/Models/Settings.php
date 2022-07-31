<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class settings extends Model  {
	use SoftDeletes;
	protected $table = 'settings';
	protected $softDelete = true;

}
