<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class phong extends FormRequest
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
        $data = [
            "ten" => [
                "required"
            ],
            "imgroom" => [
                "required"
            ],
            "gia" => "required|numeric|min:1",
            "dien_tich" => "required|numeric|min:1",
            "huong_nhin" => "required",
            "giuong" => "required",
            "sl_nguoilon" => "required|numeric|min:1",
            "sl_treem" => "required|numeric|min:1",

            "mo_ta" => "required",
            "id_loai_phong" => "required",
        ];
        // dd($this->path());
        if ($this->path() == "admin/updatephong") {
            $data['imgroom'] = "nullable";
        }
        // die;
        return $data;
    }
    public function messages()
    {
        // if () {
        //     # code...
        // }
        return [
            "ten.required" => "tên bắt buộc phải nhập",
            "imgroom.required" => "ảnh bắt buộc phải nhập",

            "gia" => [
                "required" => "giá bắt buộc phải nhập",
                "numeric" => "giá phải là số ",
                "min" => "giá tiền phải là số dương"
            ],
            "dien_tich" => [
                "required" => "diện tích bắt buộc phải nhập",
                "numeric" => "diện tích phải là số",
                "min" => "diện tích phải là số dương"

            ],
            "sl_nguoi" => [
                "required" => "số lượng người bắt buộc phải nhập",
                "numeric" => "số lượng người phải là số",
                "min" => "số lượng người phải là số dương"


            ],
            "huong_nhin.required" => "hướng nhìn bắt buộc phải nhập",
            "giuong.required" => "giường bắt buộc phải nhập",
            "mo_ta.required" => "mô tả bắt buộc phải nhập",
        ];
    }
}
