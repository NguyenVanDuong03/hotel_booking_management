<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookingStoreRequest extends FormRequest
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
            'booking_guest' => ['required','max:50', 'regex:/^[a-zA-Z\s]+$/'],
            'booking_checkin' => ['required', 'date'],
        ];
    }

    public function messages(): array
    {
        return [
            'booking_guest.max' => 'Tên khách hàng không quá 50 ký tự',
            'booking_guest.regex' => 'Tên khách hàng chỉ được chứa các chữ cái và dấu cách.',
            'booking_checkin.date' => 'Ngày nhận phòng phải là một ngày hợp lệ',
            'required' => 'Vui lòng điền thông tin vào trường này.'
        ];
    }
}
