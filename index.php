<?php
$notas=["nota1"=>readline("Nota 1: "),
    "nota2"=>readline("Nota 2: "),
    "nota3"=>readline("Nota 3: "),
    "nota4"=>readline("Nota 4: ")];
$media=0;
foreach($notas as $chave =>$valor){
$media=$media+$valor;
};
$media=$media/4;
echo $media;

?>