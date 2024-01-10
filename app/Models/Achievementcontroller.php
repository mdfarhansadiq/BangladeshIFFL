<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class achievementcontroller extends Sximo  {
	
	protected $table = 'vmsl_achievement';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT vmsl_achievement.* FROM vmsl_achievement  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE vmsl_achievement.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
