<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class promoter extends Sximo  {
	
	protected $table = 'promoters';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT promoters.* FROM promoters  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE promoters.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
