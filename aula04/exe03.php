<?php
//FUNÇAO SEM PARAMETROS E SEM RETORNO
     function calculadora_quadrado($a){
        $x = $a * $a;

          echo "$x <br>";
       
     }

     
     calculadora_quadrado(4);
     calculadora_quadrado(3);
     calculadora_quadrado(5);
     calculadora_quadrado(7);

     echo "<hr>";

      function soma($x,$y){
        $soma = $x + $y;
        echo "A soma é: $soma <br>";
      }    
      
      $n1 = 5;
      $n2 = 8;



      soma($n1,$n2);
     ?>