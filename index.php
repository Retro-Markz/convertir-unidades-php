<?php

$valor = "";
$desde= "";
$hasta = "";


//convertir medida estandar Metros

function convertirAMetros($valor, $unidad_desde){
    switch($unidad_desde){

        case 'Milimetro':
            return ($valor / 1000);
        break;
        case 'Centimetro':
            return ($valor / 100);
        break;
        case 'Decimetro':
            return ($valor / 10);
        break;
        case 'Metro':
            return ($valor / 1);
        break;
        case 'Decametro':
            return ($valor * 10);
        break;
        case 'Hectometro':
            return ($valor * 100);
        break;
        case 'Kilometro':
            return ($valor * 1000);
        break;
        default:
            return 'Unidad de medida no soportada';
        break;
    }
}



function convertirDesdeMetros($valor, $unidad_hasta){

    switch ($unidad_hasta) {
        case 'Milimetro':
            return ($valor * 1000);
        break;
        case 'Centimetro':
            return ($valor * 100);
        break;
        case 'Decimetro':
            return ($valor * 10);
        break;
        case 'Metro':
            return ($valor * 1);
        break;
        case 'Decametro':
            return ($valor / 10);
        break;
        case 'Hectometro':
            return ($valor / 100);
        break;
        case 'Kilometro':
            return ($valor / 1000);
        break;
        default:
            return 'Unidad de medida no soportada';
        break;
    }
}



if(isset($_POST["convertir"])){

    //obtener valores

    $valor = $_POST['valor'];
    $desde = $_POST['desde'];
    $hasta = $_POST['hasta'];


    $calculoDesde = convertirAMetros($valor, $desde);

    $calcularHasta =  convertirDesdeMetros($calculoDesde, $hasta);

    $resultado = $calcularHasta;

}

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Home</title>
</head>
<body>
    
<h1 class="text-center font-bold p-8 text-4xl">Convertidor de Longitud
</h1>

<main>
    <div class="container">

        <form method="POST">

            <div class="content values p-12 flex flex-col gap-12 w-[30vw]  justify-between items-start mx-auto">

                <div class="value">
                    <label for="value"  class=" text-xl p-2">Valor:</label>
                    <input type="number" class="p-2 border  rounded-lg" placeholder="enter a value" name="valor" />
                </div>

                <div class="from">
                    <label for="from" class="from-label text-xl p-2">Desde:</label>
                    <select name="desde" id="from-sel" class="from-sel text-xl p-2 bg-blue-200 rounded-lg text-black shadow-lg">
                        <option value="">--Selecciona una unidad--</option>
                        <option value="Milimetro">Milimetro </option>
                        <option value="Centimetro">Centimetro</option>
                        <option value="Decimetro">Decimetro</option>
                        <option value="Metro">Metro</option>
                        <option value="Decametro">Decametro</option>
                        <option value="Hectometro">Hectometro</option>
                        <option value="Kilometro">Kilometro</option>
                    </select>
                </div>


                <div class="hasta ">
                    <label for="hasta" class="from-label text-xl p-2">Hasta:</label>
                    <select name="hasta" id="from-sel" class="from-sel text-xl p-2 bg-blue-200 rounded-lg text-black shadow-lg">
                        <option value="">--Selecciona una unidad--</option>
                        <option value="Milimetro">Milimetro </option>
                        <option value="Centimetro">Centimetro</option>
                        <option value="Decimetro">Decimetro</option>
                        <option value="Metro">Metro</option>
                        <option value="Decametro">Decametro</option>
                        <option value="Hectometro">Hectometro</option>
                        <option value="Kilometro">Kilometro</option>
                    </select>
                </div>

                <button type="submit" class="text-center w-72 mx-auto py-2 px-12 bg-blue-700 text-white font-bold rounded-lg shadow-lg transition hover:text-black hover:bg-blue-400" name="convertir">CONVERTIR</button>





            </div>


            <div class="resultado text-center">
                <label for="resultado" class="text-xl p-2">Resultado:</label>
                <input type="text" name="resultado" class="form-control p-2 border  rounded-lg" value="<?php if(isset($resultado)) echo $resultado;  ?>"/>
            </div>



        </form>


    </div>
</main>
</body>
</html>