<?php

namespace App\Http\Requests\Backend\Auth\User;

use App\Rules\ReportLimitGateRule;
use App\Rules\ValidateBadWordsRule;
use App\Rules\ValidateReportUrlRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreReportRequest extends FormRequest
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
            'url' => ['bail', 'required', 'max:2048', 'url', new ValidateReportUrlRule($this)]
        ];
    }
}
