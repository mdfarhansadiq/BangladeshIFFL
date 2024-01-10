<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class portfoliocategory extends Sximo  {
	
	protected $table = 'vmsl_portfolio_category';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT vmsl_portfolio_category.* FROM vmsl_portfolio_category  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE vmsl_portfolio_category.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
