<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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

protected function prepareForValidation()
{
    $data = $this->validationData();
    if(array_key_exists('time', $data))
    {
        $data['time'] = array_map('intval', $data['time']);

        $this->replace($data);
    }
}

/**
 * Get the validation rules that apply to the request.
 *
 * @return array
 */
public function rules()
{
        return [
            'memo' => 'max:500',
            'time.*' => 'integer | between:0,999',
        ];
    }

    public function attributes()
    {
        return[
            'memo' => '本文',
            'time.*' => '勉強時間',
        ];
    }
}
