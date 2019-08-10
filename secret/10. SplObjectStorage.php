<?php

$s = new SplObjectStorage(); // создаем хранилище

$o1 = new StdClass;
$o2 = new StdClass;
$o3 = new StdClass;

$s->attach($o1); // прикрепляем к хранилищу объект
$s->attach($o2);

var_dump($s->contains($o1)); // bool(true)
var_dump($s->contains($o2)); // bool(true)
var_dump($s->contains($o3)); // bool(false)

$s->detach($o2); // открепляем объект от хранилища

var_dump($s->contains($o1)); // bool(true)
var_dump($s->contains($o2)); // bool(false)
var_dump($s->contains($o3)); // bool(false)
