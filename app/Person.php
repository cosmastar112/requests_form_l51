<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    /**
     * @var string
     */
    protected $table = 'persons';

    /**
     * Список пользователей для select-поля. Первый элемент пустой.
     *
     * @return array
     */
    public static function getList()
    {
        $personsIds = \App\Person::lists('name', 'id')->toArray();
        //добавить пустой элемент в начало для выбора по умолчанию
        array_unshift($personsIds, NULL);

        return $personsIds;
    }
}
