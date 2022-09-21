<?php

/** @var \App\Request $request */
/** @var array $personsIds */
/** @var bool $isRequestPage */

echo Form::model($request, ['route' => 'request.create', 'id' => 'create-request']);

    echo '<p>';
        echo Form::label('per_id', 'To (person): ');
        echo Form::select('per_id', $personsIds);
    echo '</p>';

    if ($isRequestPage) {
        echo Form::hidden('isRequestPage', true);
    }

?>

@if($isRequestPage)
    <div class="person-info">
        <h2>Person</h2>
        @include('person._info', ['person' => new \App\Person])
    </div>
@endif

<?php

    echo '<p>';
        echo Form::label('from', 'From: ');
        echo Form::text('from');
    echo '</p>';

    echo '<p>';
        echo Form::label('body', 'Request: ');
        echo Form::textarea('body');
    echo '</p>';

    echo Form::submit('Send');

?>

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <p>Errors:</p>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif