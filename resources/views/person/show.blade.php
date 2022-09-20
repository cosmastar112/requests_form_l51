<?php

/** @var \App\Person $person */
/** @var \App\Request $request */
/** @var array $personsIds */

?>

<h1>Person</h1>

<p>Name: {{ $person->name }}</p>
<p>Login: {{ $person->login }}</p>
<p>Email: {{ $person->email }}</p>

<h2>Create request</h2>
@include('request._form', ['request' => $request, 'personsIds' => $personsIds])