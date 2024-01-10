<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class documenttype extends Sximo  {
	
	protected $table = 'vmsl_document_type';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT vmsl_document_type.* FROM vmsl_document_type  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE vmsl_document_type.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
