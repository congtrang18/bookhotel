<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class khachhangUser extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
           "ten"=>"required",
        //    "sdt"=>"required|regex:/^(\+84|0)\d{9,10}$/",

           "email"=>"required|email",
           "mat_khau"=>"required|min:5",
           "avatar"=>"required",

           

        ];
    } 
    public function messages()
    {
        return [
            "ten.required"=>"tên bắt buộc phải nhập",
            // "sdt"=>[

            //     'required'=>"số điện thoại bắt buộc phải nhập",
            //    'regex'=>"số điện thoại chưa đúng định dạng"
            // ],


            "avatar.required"=>"ảnh bắt buộc phải nhập",

            "email.required"=>"email bắt buộc phải nhập",
            "email.email"=>"email sai định dạng",
            "mat_khau.required"=>"mật khẩu bắt buộc phải nhập",
            "mat_khau.min"=>"mật khẩu tối thiểu phải 5 kí tự",
           



        ];
    }
}
