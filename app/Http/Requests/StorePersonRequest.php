<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class StorePersonRequest extends Request
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
        /**
         * При обновлении записи логин должен быть уникальным. Простой unique-валидатор не позволяет обновить запись,
         * т.к. фактически логин уже занят. Третий параметр валидатора unique - id записи, значение в поле login у
         * которой будет исключением в этой проверке. Это позволит обновить запись, оставляя логин без изменений или
         * указав логин, которого ещё нет в таблице.
         * То же самое касается почты (email).
         */
        /** @var array $segments All of the segments for the request path. */
        $segments = $this->segments();
        if (count($segments) === 4 && $segments[0] === "admin" && $segments[1] === "persons" && $segments[3] === 'update') {
            $personId = $segments[2];
        } else {
            $personId = '';
        }

        return [
            'name' => 'required',
            'login' => 'required|unique:persons,login,'.$personId,
            'email' => 'required|email|unique:persons,email,'.$personId,
        ];
    }
}
