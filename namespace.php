<?php
    use App\ClientesNamespace; //esto permite usar la clase en el codigo del namespace App
    use App\DetallesNamespace;
    function my_autoloadear ($clase){
        echo $clase."<br>";
        $fileClass = explode('\\', $clase); //el '\\' se usa para indica un sola barra invertida
        var_dump($fileClass);
        /**
         * $fileClass = explode('\\', $clase); esta parte lo que se hace es que si $clase='DetallesNamespace\ClientesNamespace'
         * $clase toma valores:
         * $clase='App\DetallesNamespace', $clase='App\ClientesNamespace'
         * crea luego un array:
         * $fileClass = explode('\\', 'App\DetallesNamespace'); 
         * $fileClass[0] = "App"
         * $fileClass[1] = "DetallesNamespace"
         * 
         * $fileClass = explode('\\', 'App\ClientesNamespace'); 
         * $fileClass[0] = "App"
         * $fileClass[1] = "ClientesNamespace"
        */
        require __DIR__.'/clase_con_namespace/'.$fileClass[1].'.php';
    }
    spl_autoload_register('my_autoloadear');
    $detallesNamespace=new DetallesNamespace();
    $clientesNamespace=new ClientesNamespace(); 
    var_dump($detallesNamespace);
    var_dump($clientesNamespace);

?>