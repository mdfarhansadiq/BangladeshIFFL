<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class pdfdocuments extends Sximo  {
	
	protected $table = 'vmsl_documents';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT vmsl_documents.* FROM vmsl_documents  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE vmsl_documents.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
