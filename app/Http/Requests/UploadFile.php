<!-- <?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UploadFile extends FormRequest
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
        'file' => 'required|max:10240'
        ];
    }
    public function messages()
    {
      return [            
        'file.required' => "You must use the 'Choose file' button to select which file you wish to upload",
        'file.max' => "Maximum file size to upload is 8MB (8192 KB). If you are uploading a photo, try to reduce its resolution to make it under 8MB"
      ];
    }
} -->
