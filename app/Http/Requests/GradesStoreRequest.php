<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GradesStoreRequest extends FormRequest
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
            'name.*' => 'required',
            'name.*' => 'required',
            'notes.*' => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'name.ar' => trans('admin.grades.create.arabic_name'),
            'name.en' => trans('admin.grades.create.english_name'),
            'notes.ar' => trans('admin.grades.create.notes_in_arabic'),
            'notes.en' => trans('admin.grades.create.note_in_english'),
        ];
    }
}
