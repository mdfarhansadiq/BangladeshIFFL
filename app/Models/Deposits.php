<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class deposits extends Sximo  {
	
	protected $table = 'vmsl_deposit';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT vmsl_deposit.* FROM vmsl_deposit  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE vmsl_deposit.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
