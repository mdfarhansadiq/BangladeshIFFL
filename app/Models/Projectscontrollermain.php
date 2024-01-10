<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class projectscontrollermain extends Sximo  {
	
	protected $table = 'vsml_project';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT vsml_project.* FROM vsml_project  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE vsml_project.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
