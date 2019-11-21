<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CauHinhTroGiupResource extends JsonResource
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
            'loai_tro_giup'=>$this->loai_tro_giup,
            'thu_tu'=>$this->thu_tu,
            'credit'=>$this->credit,
            'xoa'=>$this->xoa,
            'create_at'=>$this->create_at,
            'update_at'=>$this->update_at,
        ];
     
    }
}
