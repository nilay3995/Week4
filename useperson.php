<?php
require_once 'person.php';
$p=new person('Marie','female', '23');
$p->setName('Nilay');
$p->setGender(person::MALE);
$display = $p->displayperson();
echo $display;
echo person::getCounr();