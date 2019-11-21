<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class QuanTriVienResource extends JsonResource
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
            'ho_ten'=>$this->ho_ten,
            'xoa'=>$this->xoa,
            'create_at'=>$this->create_at,
            'update_at'=>$this->update_at,
        ];  
    }
}
