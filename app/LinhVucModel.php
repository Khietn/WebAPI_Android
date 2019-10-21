<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LinhVucModel extends Model
{
    
    protected $table ='linh_vuc'; 
    public $timestams=false;

/*Ánh xạ*/
  /*  public function linhVuc(){
    	return $this->belongsTo('App\LinhVuc');
    }*/
}
