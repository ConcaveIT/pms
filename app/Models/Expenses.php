<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class expenses extends Model  {
	use SoftDeletes; protected $softDelete = true;
	protected $table = 'expenses';
}
