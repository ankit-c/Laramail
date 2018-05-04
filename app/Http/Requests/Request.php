<?php

namespace Laramail\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Request extends FormRequest
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

                'name' => 'required',
                'from' => 'required|email',
                'subject' => 'required',
                'to' => 'required|email',
                'msgbody' => 'required',
        ];
    }
}
