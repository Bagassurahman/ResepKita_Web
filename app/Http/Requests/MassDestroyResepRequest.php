<?php

namespace App\Http\Requests;

use App\Resep;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyResepRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('resep_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:reseps,id',
        ];
    }
}
