<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class policyandguidelinesadmin extends Sximo  {
	
	protected $table = 'vsml_guidelines';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT vsml_guidelines.* FROM vsml_guidelines  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE vsml_guidelines.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
