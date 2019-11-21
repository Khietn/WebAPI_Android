<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CauHoiResource extends JsonResource
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
            'noi_dung'=>$this->noi_dung,
            'linh_vuc_id'=>$this->linh_vuc_id,
            'phuong_an_a'=>$this->phuong_an_a,
            'phuong_an_b'=>$this->phuong_an_b,
            'phuong_an_c'=>$this->phuong_an_c,
            'phuong_an_d'=>$this->phuong_an_d,
            'dap_an'=>$this->dap_an,
            'xoa'=>$this->xoa,
            'created_at'=>$this->created_at,
            'updated_at'=>$this->updated_at,
        ];

        //return parent::toArray($request);
    }
}
