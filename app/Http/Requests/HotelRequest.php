<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HotelRequest extends FormRequest
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
            'hotel_name' => ['required', 'max:50', 'regex:/^[a-zA-Z\s]+$/'],
            'hotel_address' => ['required', 'max:80'],
            'hotel_description' => ['required', 'max:100'],
            'hotel_price' => ['required', 'numeric', 'max:999']
        ];
    }

    public function messages(): array
    {
        return [
            'hotel_name.max' => 'Tên phòng không được vượt quá 50 ký tự.',
            'hotel_name.regex' => 'Tên phòng chỉ chứa ký tự chữ cái và khoảng trắng.',
            'hotel_address.max' => 'Địa chỉ phòng không được vượt quá 80 ký tự.',
            'hotel_description.max' => 'Mô tả phòng không được vượt quá 100 ký tự.',
            'hotel_price.max' => 'Giá phòng không được vượt quá 999 $.',
            'required' => 'Vui lòng điền thông tin vào trường này.'
        ];
    }
}
