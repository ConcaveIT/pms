<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class project extends Model  {
	use SoftDeletes;
	protected $table = 'projects';
	protected $softDelete = true;

}
