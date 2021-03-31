<?php

namespace App\Http\Requests\Risk;

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
              'description'=> 'required',
              'affected'=> 'required' ,
              'affectedProperty' => 'required',
              'likelihood'=> 'required' ,
              'impact'=> 'required' ,
              'inherentRiskScore'=> 'required',
              'treatmentOption'=> 'required',
              'control'=> 'required',
              'treatmentDescription'=> 'required',
              'riskCustodian'=> 'required' ,
              'riskOwner' => 'required',
              'treatmentDueDate' => 'required',
              'status'=> 'required' ,
              'residualRiskScore'=> 'required' ,
              'riskValue' =>'required'
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
