<?php date_default_timezone_set("America/Sao_Paulo");
       
       function escreva_texto(){
           echo "<p style='text-align: center;'>Minha Primeira função em PHP</p>";
        }
        
        function escreva_texto2($qualquer_coisa){
            echo "<p style='text-align: center;'>$qualquer_coisa</p>";
        }
        
        function hoje(){
            $agora = date('d/m/y H:i');
            echo "<p style='text-align: center;'>$agora</p>";
            
        }
        function pula_linha($pula){
            $i = 1;
            while($i <= $pula){
                echo "<br>";
                $i++;
            }
        }
        function soma($soma1, $soma2){
            $total = $soma1+$soma2;
            echo " O total da soma de $soma1 + $soma2 é :" .$total;
            pula_linha(1);
        }
        function divisao($div1, $div2){
            $total = $div1/$div2;
            echo " O total da divisao de $div1 por $div2 é :" .$total;
            pula_linha(1);
        }
        function sub($sub1, $sub2){
            $total = $sub1-$sub2;
            echo " $sub1- $sub2 :" .$total;
            pula_linha(1);
        }

        
        