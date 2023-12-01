<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SolicitudPresupuestoRequest extends FormRequest
{
    protected $redirectRoute = 'home.contact'; 
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nombre'=>'required',
            'email'=>'required|email',
            'telefono'=>'required|integer',
            'rubro'=>'required',
            'm2'=>'required',
            'direccion'=>'required',
            'tramite'=>'required'
        ];
    }

    public function messages()
    {
        return[
            'nombre.required' => 'Este campo es obligatorio',
            'email.required' => 'Este campo es obligatorio',
            'telefono.required' => 'Este campo es obligatorio',
            'rubro.required' => 'Este campo es obligatorio',
            'm2.required' => 'Este campo es obligatorio',
            'direccion.required' => 'Este campo es obligatorio',
            'tramite.required' => 'Este campo es obligatorio',
        ];
    }
}

// return [
//     'nombre'=>'required',
//     'email'=>'required|email',
//     'telefono'=>'required|integer|size:10',
//     'rubro'=>'required',
//     'm2'=>'required|size:8',
//     'direccion'=>'required',
//     'tramite'=>'required'
// ];
