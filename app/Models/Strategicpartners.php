<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class strategicpartners extends Sximo  {
	
	protected $table = 'vmsl_strategic_partners';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT vmsl_strategic_partners.* FROM vmsl_strategic_partners  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE vmsl_strategic_partners.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
