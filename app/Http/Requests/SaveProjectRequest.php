<?php

namespace App\Http\Requests;

use Illuminate\validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class SaveProjectRequest extends FormRequest
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
            'title' => 'required',
            'url' => [
                'required',
                Rule::unique('projects')->ignore( $this->route('project') )
            ],
            'category_id' => [
                'required',
                'exists:categories,id'
            ],
            'image' => [
                $this->route('project') ? 'nullable' : 'required',
                'mimes:jpeg,png'
            ],
            'description' => 'required',
        ];
    }
}
