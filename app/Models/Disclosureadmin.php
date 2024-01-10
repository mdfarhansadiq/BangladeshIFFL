<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class disclosureadmin extends Sximo  {
	
	protected $table = 'vsml_disclosure';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT vsml_disclosure.* FROM vsml_disclosure  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE vsml_disclosure.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
