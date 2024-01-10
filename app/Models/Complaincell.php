<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class complaincell extends Sximo  {
	
	protected $table = 'vmsl_complain_cell';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT vmsl_complain_cell.* FROM vmsl_complain_cell  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE vmsl_complain_cell.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
