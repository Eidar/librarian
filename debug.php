<?php

include 'class/member.php';

$member = new Member;

$result = $member->setData(array(
	'name' => 'Matija',)
	'lname' => 'Katic',
	'email' => 'matkatic@gmail.com',
	'phone' => '0998219507',
	'sex' => 'M';
	);

echo $result;