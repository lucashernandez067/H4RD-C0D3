<?php 
    $pregunta1=$_POST['pregunta1'];
    $pregunta2=$_POST['pregunta2'];
    $pregunta3=$_POST['pregunta3'];
    $pregunta4=$_POST['pregunta4'];
    $pregunta5=$_POST['pregunta5'];
    $pregunta6=$_POST['pregunta6'];
    $pregunta7=$_POST['pregunta7'];
    $pregunta8=$_POST['pregunta8'];
    $pregunta9=$_POST['pregunta9'];
    $pregunta10=$_POST['pregunta10'];

    $total=$pregunta1+$pregunta2+$pregunta3+$pregunta4+$pregunta5+$pregunta6+$pregunta7+$pregunta8+$pregunta9+$pregunta10;
    
    echo $total;

    if($total>=7){
        echo "<br>aprobo";
    }
    if($total<7){
        echo "<br>reprobo";
    }

?>