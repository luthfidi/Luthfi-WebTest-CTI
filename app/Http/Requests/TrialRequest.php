<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TrialRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'job_title' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'industry' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'agreement' => 'required|accepted',
        ];
    }

    public function messages()
    {
        return [
            'agreement.required' => 'You must agree to be contacted by our team.',
            'agreement.accepted' => 'You must agree to be contacted by our team.',
        ];
    }
}