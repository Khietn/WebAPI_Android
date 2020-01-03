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
           
            'ten'=>'unique:linh_vuc'

        ];
    }
    public function messages()
    {
        return [
            
            
            'ten.unique'=>'Lĩnh Vực đã tồn tại'
            
        ];
    }
}
