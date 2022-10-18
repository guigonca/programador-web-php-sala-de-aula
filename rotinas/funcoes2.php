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
                echo "<br> $i";
                $i++;
            }
        }
        function soma($soma1, $soma2){
            $total = $soma1+$soma2;
            echo " O total da soma é :$total";
        }

        
        