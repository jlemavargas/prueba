<?php
    $i=0; $n=0; $s=0;

    if (isset($_POST["btnCalcular"])) {
        $n1=(int)$_POST["num1"];
        $n2=(int)$_POST["num2"];

        for ($i=$n1;$i<=$n2;$i++) { 
             $s=$s+$i;
                //0=0+1
            }
        }
    echo "La suma del intervalo [".$n1." ".$n2."] es ".$s;
    ?>