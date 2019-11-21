<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LuotChoiResource extends JsonResource
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
            'so_cau'=>$this->so_cau,
            'diem'=>$this->diem,
            'ngay_gio'=>$this->ngay_gio,
            'create_at'=>$this->create_at,
            'update_at'=>$this->update_at,
        ];
      
    }
}
