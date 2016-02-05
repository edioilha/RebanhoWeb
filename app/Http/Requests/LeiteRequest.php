<?php

namespace rebanhoweb\Http\Requests;

use rebanhoweb\Http\Requests\Request;

class LeiteRequest extends Request
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
            'litros'=>'required|numeric|min:0|max:9999'
        ];
    }
}
