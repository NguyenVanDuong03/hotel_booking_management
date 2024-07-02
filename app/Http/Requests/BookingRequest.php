<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookingRequest extends FormRequest
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
            'booking_checkout' => ['required', 'date', 'after:booking_checkin'],
        ];
    }

    public function messages(): array
    {
        return [
            'booking_guest.max' => 'Tên khách hàng không quá 50 ký tự',
            'booking_guest.regex' => 'Tên khách hàng chỉ được chứa các chữ cái và dấu cách.',
            'booking_checkin.date' => 'Ngày nhận phòng phải là một ngày hợp lệ',
            'booking_checkout.date' => 'Ngày trả phòng phải là một ngày hợp lệ',
            'booking_checkout.after' => 'Ngày trả phòng phải sau ngày nhận phòng',
            'required' => 'Vui lòng điền thông tin vào trường này.'
        ];
    }
}
