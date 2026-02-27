<?php


function Calcular($calculo){

    if(!strcmp("Suma", $calculo)){
        global $num1;
        global $num2;

        echo "El resultado es: " . ($num1+$num2);

    }
    if(!strcmp("Resta", $calculo)){
        global $num1;
        global $num2;

        echo "El resultado es: " . ($num1-$num2);

    }
    if(!strcmp("Multiplicacion", $calculo)){
        global $num1;
        global $num2;

        echo "El resultado es: " . ($num1*$num2);

    }
    if(!strcmp("Division", $calculo)){
        global $num1;
        global $num2;

        echo "El resultado es: " . ($num1/$num2);

    }
    if(!strcmp("Modulo", $calculo)){
        global $num1;
        global $num2;

        echo "El resultado es: " . ($num1%$num2);

    }
    if(!strcmp("Incremento", $calculo)){
        global $num1;

        $num1++;

        $resultado=$num1;

        echo "El resultado es: $resultado";

    }
    if(!strcmp("Decremento", $calculo)){
        global $num1;

        $num1--;
        
        $resultado=$num1;

        echo "El resultado es: $resultado";

    }
}

?>
