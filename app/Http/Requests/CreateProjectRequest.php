<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateProjectRequest extends Request
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
     * @return array
     */
    public function rules()
    {
        return [
             'title'=> 'required', 'unique'| 'max:25'
             'telephone'=> 'required'| 'max:10'
             'street'=> 'required'
             'startdate'=> 'required|date'
             'enddate' => 'required|date'
        ];
    }
}
