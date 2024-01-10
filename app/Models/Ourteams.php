<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class ourteams extends Sximo  {
	
	protected $table = 'vmsl_management_team';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT vmsl_management_team.* FROM vmsl_management_team  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE vmsl_management_team.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
