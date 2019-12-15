<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CauHoiReQuest extends FormRequest
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
            'noi_dung'=>'required',
            'phuong_an_a'=>'required',
            'phuong_an_b'=>'required',
            'phuong_an_c'=>'required',
            'phuong_an_d'=>'required',
        ];
    }
    public function messages(){
        return[
            'noi_dung.required'=>'Nội dung không được để trống',
            'phuong_an_a.required'  =>'Phương án A không được để trống',
            'phuong_an_b.required'=>'Phương án B không được để trống',
            'phuong_an_c.required'=>'Phương án C không được để trống',
            'phuong_an_d.required'=>'Phương án D không được để trống',
        ];
    }
}
