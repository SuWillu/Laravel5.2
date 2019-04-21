<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ContactFormRequest extends Request
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
			'name' => 'min:3',
			'email'=> 'required|email',
			'message' => 'required|min:10',
			'website' => 'url',
			'bot' => 'max:1'
		];
    }
	
	/**
	 * Get the error messages for the defined validation rules.
	 *fi
	 * @return array
	 */
	public function messages()
	{
		return [
			'bot.max' => 'Please turn off auto-fill.',
		];
	}
}
