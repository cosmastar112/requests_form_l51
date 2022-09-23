<?php

/** @var \App\Person $person */
/** @var array $route */

?>

<?= Form::model($person, ['route' => $route, 'id' => 'person-form']) ?>

    <div class="form-group">
        <?= Form::label('name', 'Name: ') ?>
        <?= Form::text('name', null, ['class'=> 'form-control']) ?>
    </div>

    <div class="form-group">
        <?= Form::label('login', 'Login: ') ?>
        <?= Form::text('login', null, ['class'=> 'form-control']) ?>
    </div>

    <div class="form-group">
        <?= Form::label('email', 'Email: ') ?>
        <?= Form::text('email', null, ['class'=> 'form-control']) ?>
    </div>

    <?= Form::submit('Save', ['type' => 'default', 'class' => 'btn btn-primary'])?>

@include('partials._errors')