<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LichSuMuaCreditModel extends Model
{
    //
  //  protected $table ='lich_su_mua_credit'; 
  //  public $timestams=false;

    protected $table='lich_su_mua_credit';
    public function credit(){
        return $this->belongsTo("App\GoiCreditModel");
    }
}
