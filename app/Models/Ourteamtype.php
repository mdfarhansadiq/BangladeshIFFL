<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class ourteamtype extends Sximo  {
	
	protected $table = 'vmsl_team_type';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT vmsl_team_type.* FROM vmsl_team_type  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE vmsl_team_type.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
