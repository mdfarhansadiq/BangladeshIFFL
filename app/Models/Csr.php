<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class csr extends Sximo  {
	
	protected $table = 'vmsl_csr';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT vmsl_csr.* FROM vmsl_csr  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE vmsl_csr.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
