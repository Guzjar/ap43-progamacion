<?php
$city="Tokyo,Mexico City,New York City,Mumbai,Seoul,Shanghai,Lagos,Buenos Aires,Cairo,London";
$country="Japan,Mexico,USA,India,Korea,China,Nigeria,Argentina,Egypt,England";
$ciudad= explode(",", $city);
$paises=explode(",", $country);
$mundo=array_combine($ciudad,$paises);

var_dump($mundo);