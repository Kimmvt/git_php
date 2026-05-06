<?php
$aluno=["nota1"=>readline("Nota 1: "),
    "nota2"=>readline("Nota 2: "),
    "nota3"=>readline("Nota 3: "),
    "nota4"=>readline("Nota 4: "),
    "freq"=>readLine("Frequencia(100-0): ")];
$media=0;
$media=($media+$aluno["nota1"]+$aluno["nota2"]+$aluno["nota3"]+$aluno["nota4"])/4;
echo "Media: $media\n";
if($aluno["freq"]<75){
    echo "Reprovado por Falta";
}else{
    if($media<6){
        $notaRec=readline("Nota da recuperação: ");
        $medFinal=$notaRec+$media;
        if($medFinal>5){
            echo"Aprovado na recuperação";
        }
        else{
            echo "Reprovado ate ano que vem";
        }
    }
    else{
        echo "Aprovado";
    }
}

?>