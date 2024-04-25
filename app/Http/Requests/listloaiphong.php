<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class listloaiphong extends FormRequest
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
        // dd($this->all());
       
        $rules = [
            "namedm" => "required",
            "avatar" => "required"


        ];
        
        if ($this->path()=="admin/update") {
          
            if (!$this->hasFile("avatar")) {
                $rules['avatar'] = "nullable";
            }
            
        }
       

        return $rules;
       
    }
    public function messages()
    {
        return [
            "namedm.required" => ":attribute phòng bắt buộc phải nhập",
            "avatar.required" => ":attribute phòng bắt buộc phải nhập",

        ];
    }
    public function attributes()
    {
        return [
            "namedm" => "tên danh mục",
            "avatar" => "ảnh danh mục"
        ];
    }
}
