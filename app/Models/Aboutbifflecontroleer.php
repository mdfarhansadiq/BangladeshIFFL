<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class aboutbifflecontroleer extends Sximo  {
	
	protected $table = 'about_biffl';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT about_biffl.* FROM about_biffl  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE about_biffl.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
