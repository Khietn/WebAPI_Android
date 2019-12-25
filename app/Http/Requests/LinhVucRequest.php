<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LinhVucRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
         //   'ten'=>'unique:linh_vuc',
            'ten_linh_vuc'=>'required|unique:linh_vuc'

        ];
    }
    public function messages()
    {
        return [
            
            'ten_linh_vuc.required'=>'Tên Lĩnh Vực Không Được Để Trống !',
            'ten_linh_vuc.unique'=>'Lĩnh Vực đã tồn tại'
            
        ];
    }
}
