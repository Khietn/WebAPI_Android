<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ChiTietLuotChoiResource extends JsonResource
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
            'luot_choi_id'=>$this->luot_choi_id,
            'cau_hoi_id'=>$this->cau_hoi_id,
            'phuong_an'=>$this->phuong_an,
            'diem'=>$this->diem,
            'created_at'=>$this->created_at,
            'updated_at'=>$this->updated_at,
        ];
     
    }
}
