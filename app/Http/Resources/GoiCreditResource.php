<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GoiCreditResource extends JsonResource
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
            'ten_goi'=>$this->ten_goi,
            'credit'=>$this->credit,
            'so_tien'=>$this->so_tien,
            'xoa'=>$this->xoa,
            'create_at'=>$this->create_at,
            'update_at'=>$this->update_at,
        ];
        // return parent::toArray($request);
    }
}
