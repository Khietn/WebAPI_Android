<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LinhVucResource extends JsonResource
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
            'ten'=>$this->ten,
            'xoa'=>$this->xoa,
            'create_at'=>$this->create_at,
            'update_at'=>$this->update_at,
        ];
        // return parent::toArray($request);
    }
}
