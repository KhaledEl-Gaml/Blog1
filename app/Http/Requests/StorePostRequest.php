<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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

    
        $rules =  [
            'description'   => 'required|min:10',
            'user_id'       => 'required|exists:users,id',
            'title'      => 'required|min:3|'
        ];
     
        if ($this->getMethod() == 'POST') {
            $rules += ['title'    => 'required|min:3|'];
        }
        else {
           $rules += ['title'    => 'required|min:3|'.$this->post->id];
        }
        return $rules;

    }

    public function messages()
    {
        return  [
            'title.required' => 'show this message',
            'title.min' => 'override min validation rule default message',
        ];
    }

}
