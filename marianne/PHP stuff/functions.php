<?php
    #php functions

    function message()
    {
        echo "My First User-Defined Function";
    }

    message();

    #PHP function arguments

    function studname($name)
    {
        echo "$name <br/>";
    }

    studname ("Marianne Edic");
    studname ("Vem Marasigan");
    studname ("David Roderos");
    studname ("Aaron Rubinos");

    #PHP Functions with Returning Values

    function addthis ($num1, $num2,$num3)
    {
        $sumis = $num1 + $num2 + $num3;
        return $sumis;
    }

    echo addthis(5,2,5);

    #PHP Arrays

    $color = array("green", "pink", "yellow");

    echo count ($color);

    echo "<br/>";

    echo "May favorite colors are "." ".$color[0]." ".$color[1]." ".$color[2];

    echo "<br/>";
    echo "<br/>";
    echo "<br/>";
    echo "<br/>";

    $noarray = count($color);

    for($x = 0; $x < $noarray; $x++)
    {
        echo $color[$x];
        echo "<br/>";
    }
?>