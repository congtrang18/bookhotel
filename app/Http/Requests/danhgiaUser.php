<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class danhgiaUser extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize():bool
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
            'ten' =>'required',
            'email' =>'required',
            'dia_chi' =>'required',
            'tieu_de' =>'required',
            'ghi_chu' =>'required',
        ];
    }
    public function messages()
    {
        return [
            'ten.required'=>'tên bắt buộc phải nhập',
            'email.required'=>'email bắt buộc phải nhập',
            'dia_chi.required'=>'địa chỉ bắt buộc phải nhập',
            'tieu_de.required'=>'tiêu đề bắt buộc phải nhập',
            'ghi_chu.required'=>'ghi chú bắt buộc phải nhập',

        ];
    }
}
