<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CauHinhDiemCauHoiResource extends JsonResource
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
            'thu_tu'=>$this->thu_tu,
            'diem'=>$this->diem,
            'create_at'=>$this->create_at,
            'update_at'=>$this->update_at,
        ];
    }
}
