<?php

/** @var \App\Request $request */
/** @var array $personsIds */
/** @var array $route */

?>

<?= Form::model($request, ['route' => $route]) ?>

    <div class="form-group">
        <?= Form::label('per_id', 'To (person): ') ?>
        <?= Form::select('per_id', $personsIds, null, ['class'=> 'form-control']) ?>
    </div>

    <div class="form-group">
        <?= Form::label('from', 'From: ') ?>
        <?= Form::text('from', null, ['class'=> 'form-control']) ?>
    </div>

    <div class="form-group">
        <?= Form::label('body', 'Request: ') ?>
        <?= Form::textarea('body', null, ['class'=> 'form-control']) ?>
    </div>

    <?= Form::submit('Save', ['type' => 'default', 'class' => 'btn btn-primary'])?>

@include('partials._errors')