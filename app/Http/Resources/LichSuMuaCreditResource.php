<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LichSuMuaCreditResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'nguoi_choi_id'=>$this->nguoi_choi_id,
            'goi_credit_id'=>$this->goi_credit_id,
            'credit'=>$this->credit,
            'so_tien'=>$this->so_tien,
            'created_at'=>$this->created_at,
            'updated_at'=>$this->updated_at,
        ];
      
    }
}
