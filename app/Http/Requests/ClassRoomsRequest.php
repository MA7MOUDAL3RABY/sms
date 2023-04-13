<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClassRoomsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

    public function rules()
    {
        return [
            'name.*' => 'required',
            'grade' => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'name.ar' => trans('admin.grades.create.arabic_name'),
            'name.en' => trans('admin.grades.create.english_name'),
            'grade' => trans('admin.grade'),
        ];
    }
}
