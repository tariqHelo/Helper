<?php

namespace App\Http\Requests\Mangment;

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
            'status' => 'required',
            'subject'=> 'required',
            'inhernRisk'=> 'required' ,
            'submissionDate'=> 'required' ,
            'migrationPlanned' => 'required',
            'mangmantReview'=> 'required' ,

        ];
    }

    // public function messages()
    // {
    //     return [
    //         'name.required' => 'Please enter a name for your app!',
    //         'numberId.required' => 'Please enter a numberId for your app!',
    //     ];
    // }
}
