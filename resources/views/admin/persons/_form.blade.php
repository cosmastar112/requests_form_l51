<?php

/** @var \App\Person $person */
/** @var array $route */

echo Form::model($person, ['route' => $route, 'id' => 'person-form']);
    echo '<p>';
        echo Form::label('name', 'Name: ');
        echo Form::text('name');
    echo '</p>';

    echo '<p>';
        echo Form::label('login', 'Login: ');
        echo Form::text('login');
    echo '</p>';

    echo '<p>';
        echo Form::label('email', 'Email: ');
        echo Form::text('email');
    echo '</p>';

    echo Form::submit('Save');

?>

@include('partials._errors')