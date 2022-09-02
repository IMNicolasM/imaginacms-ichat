<?php

namespace Modules\Ichat\Http\Requests;

use Modules\Core\Internationalisation\BaseFormRequest;

class CreateProviderMessageRequest extends BaseFormRequest
{
  public function rules()
  {
    return [
      'provider' => 'required',
      'conversationId' => 'required',
      'message' => 'required',
    ];
  }

  public function translationRules()
  {
    return [];
  }

  public function authorize()
  {
    return true;
  }

  public function messages()
  {
    return [];
  }

  public function translationMessages()
  {
    return [];
  }
}
