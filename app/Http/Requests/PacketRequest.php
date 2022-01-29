<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class PacketRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // only allow updates if the user is logged in
        return backpack_auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'packet_code' => 'required|min:5|max:25|unique:packets',
            'packet_name' => 'required|min:5|max:255',
            'description' => 'required',
            'sender' => 'required|min:5|max:50',
            'receiver' => 'required|min:5|max:50',
            'source' => 'required|min:5|max:50',
            'destination' => 'required|min:5|max:50',
            'status' => 'required|min:5|max:50',
        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            //
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            //
        ];
    }
}
