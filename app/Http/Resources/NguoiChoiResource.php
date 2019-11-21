<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class NguoiChoiResource extends JsonResource
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
            'ten_dang_nhap'=>$this->ten_dang_nhap,
            'mat_khau'=>$this->mat_khau,
            'email'=>$this->email,
            'hinh_dai_dien'=>$this->hinh_dai_dien,
            'diem_cao_nhat'=>$this->diem_cao_nhat,
            'credit'=>$this->credit,
            'xoa'=>$this->xoa,
            'create_at'=>$this->create_at,
            'update_at'=>$this->update_at,
        ];
     
        //return parent::toArray($request);
    }
}
