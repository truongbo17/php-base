<?php

$phone = '0929848937'; //CHuỗi cần so ssanh

$pattern = '/^0[0-9]{9}$/'; //Pattern

$check = preg_match($pattern, $phone);

var_dump($check);