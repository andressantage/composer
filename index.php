<?php
    /**
     * 14) Json_encode y json_decode
     * 
     */
    $productos=[
        [
            'nombre'=>'Ricardo ☕',
            'edad'=>21
        ]
    ];
    echo "La estructura array de datos<br>";
    echo "<pre>";
    var_dump($productos);
    echo "</pre>";

    $json=json_encode($productos); //convierte una estructura de datos en PHP en una cadena JSON
    echo "Cadena de json convertida (de array a json)<br>";
    //aqui no sale el caracter de la tasa por ser CARACTER UNICODE revisar mas abajo encontrara la solucion al problema
    echo "<pre>";
    var_dump($json);
    echo "</pre>";

    $objeto=json_decode($json); //convierte una cadena JSON en una estructura de datos de PHP
    //se usa $json=json_decode($json) para retornar un objeto PHP
    echo "Cadena de json convertida (de json a objeto)<br>";
    echo "<pre>";
    var_dump($objeto);
    echo "</pre>";
    //se puede acceder a un atributo del objeto:
    echo "<pre>";
    var_dump($objeto[0]->nombre);
    echo "</pre>";

    echo "Cadena de json convertida (de json a array)<br>";
    echo "<pre>";
    var_dump(json_decode($json,true)); //asi es para que retorne un arreglo asociativo
    echo "</pre>";

    echo "Cadena de json convertida (completo con JSON_UNESCAPED_UNICODE)<br>";
    //se usa para caracteres expeciales de UNICODE como ☕
    echo "<pre>";
    var_dump(json_encode($productos,JSON_UNESCAPED_UNICODE));//asi se usar cuando los caracteres Unicode se mantienen sin escapar en la cadena JSON final
    echo "</pre>";
?>