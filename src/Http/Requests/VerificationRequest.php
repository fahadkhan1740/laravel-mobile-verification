<?php

namespace Fouladgar\MobileVerifier\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VerificationRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        $tokenLength = config('mobile_verifier.token_length');

        return [
            'token' => 'required|string|size:' . $tokenLength
        ];
    }
}