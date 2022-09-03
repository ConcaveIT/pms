<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Sidemenu;

class sidemenu extends Model  {
	
	protected $table = 'core_menu';
	protected $primaryKey 	= 'menu_id';

	public function __construct() {
		parent::__construct();		
	} 

	public function submenues(){
        return $this->hasMany(Sidemenu::class, 'parent_id')->orderBy('ordering', 'asc');
    }


}
