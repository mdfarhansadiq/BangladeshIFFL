<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class complaincellcategory extends Sximo  {
	
	protected $table = 'vmsl_complain_cell_category';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT vmsl_complain_cell_category.* FROM vmsl_complain_cell_category  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE vmsl_complain_cell_category.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
