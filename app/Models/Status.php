<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class status extends Model  {
	use SoftDeletes;
	protected $table = 'statuses';
	protected $softDelete = true;

}
