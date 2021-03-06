<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class homeworkRequest extends FormRequest
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
            'title'=>'required',
            'deadline'=>'date|required|date_format:Y-m-d',
            'email'=>'email|required'
        ];
    }
}
