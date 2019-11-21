<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CauHinhAppResource extends JsonResource
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
            'co_hoi_sai'=>$this->co_hoi_sai,
            'thoi_gian_tra_loi'=>$this->thoi_gian_tra_loi,
            'create_at'=>$this->create_at,
            'update_at'=>$this->update_at,
        ];
    }
}
