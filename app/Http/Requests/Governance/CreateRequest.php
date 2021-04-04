<?php

namespace App\Http\Requests\Governance;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
            'name' => 'required',
            'discription'=> 'required',
            'file' => 'required|mimes:pdf,xlx,csv|max:2048',
        ];
    }
}
