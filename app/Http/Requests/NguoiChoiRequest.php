<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NguoiChoiRequest extends FormRequest
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
            'ten_dang_nhap' =>'required|unique:nguoi_choi',
            'mat_khau'=>'required|min:8'
        ];
    }
    public function messages(){
        return [
            'ten_dang_nhap.required'=>'Chưa nhập Tài Khoản',
            'ten_dang_nhap.unique'=>'Tài Khoản đã tồn tại',
            'mat_khau.required'=>'chưa nhập Mật khẩu',
            'mat_khau.min'=>'mật khẩu ít nhất 8 ký tự'

         //   'ten_dang_nhap.min'=>'tên đăng nhập ít nhất 7 kí tự',
          //  'ten_dang_nhap.max'=>'tên đăng nhập ít nhất 7 kí tự'
        ];
    }
}
