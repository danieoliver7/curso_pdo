<?php

use app\models\User;

$user = new User;

$userEncontrado = $user->find('id', 1);
dd($userEncontrado);

