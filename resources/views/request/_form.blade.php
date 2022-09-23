<?php

/** @var \App\Request $request */
/** @var array $personsIds */
/** @var bool $isRequestPage */

?>

<?= Form::model($request, ['route' => 'request.create', 'id' => 'create-request']) ?>

    @if ($isRequestPage)
        {!! Form::hidden('isRequestPage', true) !!}
        <div class="person-info">
            {!! Form::label('per_id', 'To (person): ')  !!}
            {!! Form::select('per_id', $personsIds, null, ['class'=> 'form-control']) !!}
        </div>
    @else
        {!! Form::select('per_id', $personsIds, null, ['class' => 'create-request__hidden-field form-control']) !!}
    @endif

    @if($isRequestPage)
        <div class="person-info">
            <h2>Person</h2>
            @include('person._info', ['person' => new \App\Person])
        </div>
    @endif

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