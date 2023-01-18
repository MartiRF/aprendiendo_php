<?php
#Tipo escalar
$peliculas = ['La mascara',3,'Superman',1,'El gato con Botas',1];

$estiduantes = array('pepe','peppe2','vanesa');
$estiduantes[1] = 'Pepote';

#tipos asociativo
$tutor=['nombre' => "Carlos", 'apellido' => 'Reyes','edad' => 22];
echo $tutor['edad'];

#Multiples dimensiones
$tutor_2=[
    'nombre' => 'Pancho',
    'apellido' => 'Villa',
    'edad' => 'Alc nose',
    'cursos' => ['php','python', 'css']
];
echo $tutor_2['cursos'][0];
echo $estiduantes[1];

echo count($tutor_2, COUNT_RECURSIVE);


