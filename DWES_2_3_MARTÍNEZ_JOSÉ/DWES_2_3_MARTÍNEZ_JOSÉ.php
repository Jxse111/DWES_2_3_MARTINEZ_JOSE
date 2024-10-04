<html>
    <head>
        <meta charset="UTF-8">
        <title>DWES_2_3_MARTÍNEZ_JOSÉ</title>
    </head>
    <body>
        <?php
        require_once './funciones.inc.php';
        //definicion de variables
        $num1 = "5";
        $num2 = 3;
        ?>
        <h3>El resultado de la suma de las variables num1 y num2 es: </h3>
        <?php
        print "La suma de $num1 + $num2 da como resultado: ";
        echo suma($num1, $num2);
        ?>

        <h3>El resultado de la resta de las variables num1 y num2 es: </h3>
        <?php
        print "La resta de $num1 -  $num2 da como resultado: ";
        echo resta($num1, $num2);
        ?>

        <h3>El resultado de la suma de las variables num1 y num2 es: </h3>
        <?php
        print "La multiplicación de $num1 *  $num2 da como resultado: ";
        echo multiplicacion($num1, $num2);
        ?>

        <h3>El resultado de la suma de las variables num1 y num2 es: </h3>
        <?php
        print "La división de $num1 / $num2 da como resultado: ";
        echo division($num1, $num2);
        ?>

        <h3>El resultado del resto de las variables num1 y num2 es: </h3>
        <?php
        print "El resto  de $num1 % $num2 da como resultado: ";
        echo resto($num1, $num2);
        ?>

        <h3>El resultado del incremento de la variable num1 es: </h3>
        <?php
        print "El incremento  de \$num1 cuyo valor es $num1, es: ";
        echo incremento($num1);
        ?>

    </body>
</html>
