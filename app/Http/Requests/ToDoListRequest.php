<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ToDoListRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     * 
     * This can be used in the Controller file as the parameter for the $request
     * These files are for complex form validations
     *
     * @return array
     */
    public function rules()
    {
        return [
            'description' => 'required|max:255'
        ];
    }
}
