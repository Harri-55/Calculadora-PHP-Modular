<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Calculadora PHP</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #dbdbdd;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .calculadora-card {
            background-color: #ffffff;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            width: 350px;
            text-align: center;
        }

        h2 { color: #1a73e8; margin-bottom: 1.5rem; }

        .input-group { margin-bottom: 1rem; text-align: left; }

        /* Estilo para los inputs */
        input[type="text"], select {
            width: 100%;
            padding: 12px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-sizing: border-box;
            font-size: 16px;
        }

        input[type="submit"] {
            width: 100%;
            background-color: #1a73e8;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            transition: 0.3s;
        }

        input[type="submit"]:hover { background-color: #1557b0; }

        .resultado {
            margin-top: 2rem;
            padding: 15px;
            background-color: #e8f0fe;
            border-radius: 8px;
            color: #1967d2;
            font-size: 18px;
            font-weight: bold;
            border-left: 5px solid #1a73e8;
        }

        /* Estilo para cuando un campo no es necesario */
        .campo-deshabilitado {
            opacity: 0.5;
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>

<?php
    // CAPTURA DE DATOS INICIAL PARA PERSISTENCIA
    // Si ya se enviaron datos, los guardamos en variables, si no, quedan vacíos
    $num1 = isset($_POST["num1"]) ? $_POST["num1"] : "";
    $num2 = isset($_POST["num2"]) ? $_POST["num2"] : "";
    $operacion = isset($_POST["operacion"]) ? $_POST["operacion"] : "Suma";
?>

<div class="calculadora-card">
    <h2>Mi Calculadora PHP</h2>
    
    <form name="form1" method="post" action="">
        <div class="input-group">
            <input type="text" name="num1" id="num1" placeholder="Número 1" value="<?php echo $num1; ?>" required />
        </div>
        
        <div class="input-group">
            <input type="text" name="num2" id="num2" placeholder="Número 2" value="<?php echo $num2; ?>" 
            class="<?php echo ($operacion == 'Incremento' || $operacion == 'Decremento') ? 'campo-deshabilitado' : ''; ?>" />
        </div>
        
        <div class="input-group">
            <select name="operacion" id="operacion" onchange="this.form.submit()">
                <option <?php if($operacion == 'Suma') echo 'selected'; ?>>Suma</option>
                <option <?php if($operacion == 'Resta') echo 'selected'; ?>>Resta</option>
                <option <?php if($operacion == 'Multiplicacion') echo 'selected'; ?>>Multiplicacion</option>
                <option <?php if($operacion == 'Division') echo 'selected'; ?>>Division</option>
                <option <?php if($operacion == 'Modulo') echo 'selected'; ?>>Modulo</option>
                <option <?php if($operacion == 'Incremento') echo 'selected'; ?>>Incremento</option>
                <option <?php if($operacion == 'Decremento') echo 'selected'; ?>>Decremento</option>
            </select>
        </div>

        <input type="submit" name="button" id="button" value="Calcular Ahora" />
    </form>

    <?php
        include ("calculadora.php");
        if(isset($_POST["button"])){
            echo "<div class='resultado'>";
            // Llamamos a la función que ya tienes en calculadora.php
            Calcular($operacion);
            echo "</div>";
        }
    ?>
</div>

</body>
</html>