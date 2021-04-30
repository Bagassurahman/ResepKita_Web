<?php

namespace App\Http\Requests;

use App\Resep;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateResepRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('resep_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'nama_resep'    => [
                'string',
                'required',
            ],
            'kategori.*' => [
                'integer',
            ],
            'kategori'   => [
                'array',
            ],
            'users.*' => [
                'integer',
            ],
            'users'   => [
                'array',
            ],
        ];
    }
}
