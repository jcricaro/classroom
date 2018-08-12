<?php

namespace App\Http\Requests\Student;

use Illuminate\Foundation\Http\FormRequest;

class AttendMeeting extends FormRequest
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
            'code' => ['required', function($attribute, $value, $fail) {
                if($value !== $this->meeting->code) {
                    return $fail($attribute . ' is invalid.');
                }
            }]
        ];
    }
}
