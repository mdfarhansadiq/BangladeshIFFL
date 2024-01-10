<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class portfolios extends Sximo  {
	
	protected $table = 'vmsl_portfolios';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT vmsl_portfolios.* FROM vmsl_portfolios  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE vmsl_portfolios.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
