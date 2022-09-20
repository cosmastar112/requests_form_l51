<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateRequestRequest extends Request
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
            'per_id' => 'required|integer|not_equals_zero',
            'from' => 'required|email',
            'body' => 'required'
        ];
    }
}
