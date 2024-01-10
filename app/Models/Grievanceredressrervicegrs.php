<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class grievanceredressrervicegrs extends Sximo  {
	
	protected $table = 'grs_form';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT grs_form.* FROM grs_form  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE grs_form.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
