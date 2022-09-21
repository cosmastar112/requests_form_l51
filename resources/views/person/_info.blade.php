<?php

/** @var \App\Person $person */

?>

<p class="person-info__name">Name: <span class="person-info__name-value">{{ $person->name }}</span></p>
<p class="person-info__login">Login: <span class="person-info__login-value">{{ $person->login }}</span></p>
<p class="person-info__email">Email: <span class="person-info__email-value">{{ $person->email }}</span></p>