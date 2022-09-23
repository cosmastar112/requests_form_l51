<?php

/** @var \App\Request $request */
/** @var array $personsIds */
/** @var array $route */

echo Form::model($request, ['route' => $route]);

    echo '<p>';
    echo Form::label('per_id', 'To (person): ');
    echo Form::select('per_id', $personsIds);
    echo '</p>';

    echo '<p>';
    echo Form::label('from', 'From: ');
    echo Form::text('from');
    echo '</p>';

    echo '<p>';
    echo Form::label('body', 'Request: ');
    echo Form::textarea('body');
    echo '</p>';

    echo Form::submit('Save');

?>

@include('partials._errors')