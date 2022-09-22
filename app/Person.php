<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    /**
     * @var string[]
     */
    protected $fillable = ['name', 'login', 'email'];

    /**
     * @var string
     */
    protected $table = 'persons';

    /**
     * Список пользователей для select-поля. Первый элемент пустой.
     *
     * @param self $person
     * @return array
     */
    public static function getList(self $person = null)
    {
        if ($person) {
            return [$person->id => $person->name];
        }

        $personsIds = \App\Person::lists('name', 'id')->toArray();
        //добавить пустой элемент в начало для выбора по умолчанию
        array_unshift($personsIds, NULL);

        return $personsIds;
    }
}
