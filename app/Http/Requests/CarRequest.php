<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarRequest extends FormRequest
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
        'brand' => 'required',
        'model' => 'required',
        'year' => 'required',
        'maxSpeed' => 'numeric|max:300|min:20',
        'isAutomatic' => 'boolean',
        'engine' => 'required',
        'numberOfDoors' => 'required|numeric|max:5|min:2'
        ];
    }
}
