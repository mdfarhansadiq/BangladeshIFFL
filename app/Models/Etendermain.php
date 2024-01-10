<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class etendermain extends Sximo  {
	
	protected $table = 'vsml_e_tender';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT vsml_e_tender.* FROM vsml_e_tender  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE vsml_e_tender.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
