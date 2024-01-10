<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class ourpartnersadmin extends Sximo  {
	
	protected $table = 'our_partner';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT our_partner.* FROM our_partner  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE our_partner.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
