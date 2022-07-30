<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class MicroPackagesf extends Model  {
	
	protected $table = 'settings';

	public function __construct() {
		parent::__construct();
		
	}

}
