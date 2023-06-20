<?php
    /**
     * 2. PHP Intermedio
     */

    /**
     * 2.1. Programación Orientada a objetos
    **Objeto: tiene atributos (propiedades) y metodos (acciones)
    *?Clase: Es una plantilla o definición que describe las características y comportamientos de los
    *objetos que se pueden crear a partir de ella.
    *?Objeto: Es una instancia de una clase. Representa un individuo o entidad específica y tiene
    *sus propias propiedades y comportamientos.
    *?Atributos: Son las propiedades o características de un objeto. Definen el estado de un objeto
    *y se representan mediante variables en la clase.
    *?Métodos: Son las acciones o comportamientos que un objeto puede realizar. Representan las
    *operaciones que pueden realizarse con un objeto y se definen como funciones en la clase.
    *?Encapsulación: Es el principio que establece que los atributos y métodos relacionados deben
    *agruparse en una clase para ocultar los detalles internos y exponer solo una interfaz pública.
    *Esto se logra mediante la especificación de niveles de acceso (público, privado, protegido)
    *para los atributos y métodos.
    *?Herencia: Es un mecanismo que permite crear nuevas clases basadas en clases existentes. La
    *clase que se utiliza como base se denomina "clase padre" o "superclase", y la clase que se
    *deriva se llama "clase hija" o "subclase". La herencia permite la reutilización de código y la
    *creación de jerarquías de clases.
    *?Polimorfismo: Es la capacidad de un objeto de tomar diferentes formas o comportarse de
    *diferentes maneras según el contexto. Permite utilizar una interfaz común para objetos de
    *diferentes clases y proporciona flexibilidad y extensibilidad en el diseño de programas.
    */

    /**
     * 2.1.1. Modificadores de acceso en PHP
     * Modificadores: palabras clave utilizadas en POO para controlar la visibilidad y el acceso a atributos y métodos de una clase.
     * Estos son:
     * *public: Son visibles para todos.
     * *private: No pueden ser accedidos desde fuera de la clase, ni siquiera por las clases heredadas.
     * *protected: No pueden ser accedidos desde fuera de la clase directamente. Solo dentro de la misma clase y clases heredadas
     */

    /**
     * 2.2. Clases
     * instanciar una clase es crear un objeto
     */
    echo "Ejemplo de clase en PHP<br>";
    class Persona{
        private $nombre; //se puso el nombre como atributo privado
        protected $edad; //se puso la edad como atributo protegido

        public function __construct($nombre, $edad){
            $this->nombre=$nombre;
            $this->edad=$edad;
        }
        public function getNombre(){
            return $this->nombre;
        }
        public function setNombre($nombre){
            $this->nombre=$nombre;
        }
        public function getEdad(){
            return $this->edad;
        }
        public function setEdad($edad){
            $this->edad=$edad;
        }
        private function saludar(){
            echo "Hola, mi nombre es ".$this->nombre;
        }
    }
    /**
     * Aqui se instancia la clase Persona
     */
    $alumno=new Persona('Jose', 17);
    echo "Se imprime un objeto de la instacia Persona<br>";
    echo "<pre>";
    var_dump($alumno); //imprimo todo el objeto
    echo "</pre>";
    echo $alumno->getNombre()."<br>"; //se usa el metodo getNombre de Persona con los datos de la instancia alumno
    echo $alumno->getEdad()."<br>"; //se usa el metodo getEdad de Persona con los datos de la instancia alumno

    /**
     * Debido a las mejoras que se hacen cada dia PHP tiene varias versiones y esta es otra forma de armar una clase:
     */
    echo "Atributos de clases en php version 8° o superior<br>";
    class PersonaV8{
        //se define nombre como privado y de tipo string
        //se define edad como protegida y de tipo int
        public function __construct(private string $nombre, protected int $edad){
            $this->nombre=$nombre;
            $this->edad=$edad;
        }
        public function getNombre(){
            return $this->nombre;
        }
        public function setNombre($nombre){
            $this->nombre=$nombre;
        }
        public function getEdad(){
            return $this->edad;
        }
        public function setEdad($edad){
            $this->edad=$edad;
        }
        private function saludar(){
            echo "Hola, mi nombre es ".$this->nombre;
        }
    }
        /**
     * Aqui se instancia la clase Persona
     */
    $alumnoV8=new Persona('Jose', 17);
    echo "Se imprime un objeto de la instacia Persona<br>";
    echo "<pre>";
    var_dump($alumnoV8); //imprimo todo el objeto
    echo "</pre>";
    echo $alumnoV8->getNombre()."<br>"; //se usa el metodo getNombre de Persona con los datos de la instancia alumno
    echo $alumnoV8->getEdad()."<br>"; //se usa el metodo getEdad de Persona con los datos de la instancia alumno

    /**
     * 2.2.1. Métodos estáticos
     * Método estático: método que pertenece a la clase en sí y no a una instancia específica de la clase,
     * estos se pueden llamar directamente en la clase sinn necesidad de crear un objeto o instancia de esta
     * 
     * Carateriticas:
     * *No requieren una instancia
     * *Se invocan de esta forma: Clase::metodoEstatico()
     * *No pueden acceder a propiedades de instancia
     * *No pueden utilizar $this, debido a que no hay instancia asociada
     * *Utiles para definir funciones o utildades que no dependen del estado de una instancia como: operaciones globales y otros
     */
    echo "Ejemplo de clase estatica<br>";
    class PersonaEstatica{
        private string $nombre;
        protected int $edad;
        private static string $nombreAux; //propiedad estatica: es decir es solo de la clase
        public function __construct($nombre, $edad){
            $this->nombre=$nombre;
            $this->edad=$edad;
            self::$nombreAux=$nombre;
        }
        public function getNombre(){
            return $this->nombre;
        }
        public function setNombre($nombre){
            $this->nombre=$nombre;
        }
        public function getEdad(){
            return $this->edad;
        }
        public function setEdad($edad){
            $this->edad=$edad;
        }
        //se cambia de private a public para poderse llamar
        public static function saludoEstatico(){ //por el static lo convierte en un metodo estatico
            return "<br>Hola, como estas ".self::$nombreAux."?";
        }
    }
    $alumnoEstatica=new PersonaEstatica("Jose",28);
    echo "Se imprime un objeto de la instacia PersonaEstatica<br>";
    echo "<pre>";
    var_dump($alumnoEstatica); //imprimo todo el objeto
    echo "</pre>";
    echo $alumnoEstatica->getNombre()."<br>"; //se usa el metodo getNombre de Persona con los datos de la instancia alumno
    echo $alumnoEstatica->getEdad()."<br>"; //se usa el metodo getEdad de Persona con los datos de la instancia alumno
    echo PersonaEstatica::saludoEstatico()."<br>"; //llamado desde la clase saludoEstatico
    $alumnoEstatica2=new PersonaEstatica("Manuel",38);
    echo PersonaEstatica::saludoEstatico()."<br>"; //llamado desde la clase saludoEstatico

    /**
     * 2.3. Herencia
     * Herencia: concepto permite crear nuevas clases (derivadas o hijas) basadas en clases existentes (clase basse o padre)
     * Clase padre: define atributos y metodos que seran heredados
     * Clase hija: hereda atributos y metodos de la clase padre y se pueden agregar a ella nuevos atributos y metodos tambien modificar o ampliar las existentes
     * Herencia simple y herencia múltiple: clase hija se hereda a otras eso es multple y sencilla es igual a solo hacer clase hijas
     * Polimorfismo: capacidad de un objeto de una clase hija de ser tratado como un objeto de su clase padre, lo que permite usar una referencia de la clase padre para manipular objetos de diferentes clases hijas si conocer la clase concrete
     */
    echo "Ejemplo de clase padre e hija: herencia<br>";
    /*Clase padre: Transporte*/
    class Transporte{
        public function __construct(protected int $ruedas, protected int $capacidad){

        }
        public function getInfo():string{
            return "El transporte tiene ".$this->ruedas." ruedas y una capacidad de ".$this->capacidad." personas ";
        }
        public function getRuedas():int{ //el : se utiliza para indicar el tipo de retorno de este metodo (PHP7), en este caso indica que retorna un valor entero o que debe ser de tipo entero
            return $this->ruedas;
        }
    }

    /*Clase hija: Bicicleta, Clase padre: Transporte*/
    class Bicicleta extends Transporte {
        public function getInfo(): string {
            return "El transporte tiene " . $this->ruedas. " ruedas y una capacidad de " .$this->capacidad." personas y NO GASTA GASOLINA ";      
        }
    }

    /*Clase hija: Automovil, Clase padre: Transporte*/    
    class Automovil extends Transporte {
        public function __construct(protected int $ruedas, protected int $capacidad, protected string $transmision){
        
        }
        public function getTransmision(): string { 
            return $this->transmision;
        }
    }
    $bicleta=new Bicicleta(2,1); 
    echo "Se imprime un objeto de la instacia Bicicleta<br>";
    echo "<pre>";
    var_dump($bicleta); //imprimo todo el objeto
    echo "</pre>";
    echo $bicleta->getInfo()."<br>"; //se modifica el metodo de la clase padre
    echo $bicleta->getRuedas()."<br>"; //este objeto es propio de la clase padre a pesar de ello lo hereda

    $auto=new Automovil(4,4,'Manual'); 
    echo "Se imprime un objeto de la instacia Automovil<br>";
    echo "<pre>";
    var_dump($auto); //imprimo todo el objeto
    echo "</pre>";
    echo $auto->getInfo()."<br>";
    echo $auto->getTransmision()."<br>";

    /**
     * 2.4. Clases Abstractas
     * *Clase abstracta: es una clase que no se puede instanciar directamente sirve solo de pantilla o base para otras clases
     *  se usar para definir la estructura comun y metodos que deben implementar la clases hijas
     * **para definir la clase se usa la palabra abstract
     * *Metodos abstractos: una clase abstracta puede contener metodos abstractos, estos no tienen implementacion en la clase abstracta sino que deben ser implementados en las clases hijas
     *  la declaración de un método abstracto no incluye el cuerpo del método
     * *Herencia de una clase abstracta: Las clases hijas de una clase abstracta deben implementar todos los métodos abstractos definidos en la clase abstracta.
     *  Si una clase hija no implementa todos los métodos abstractos, también debe ser declarada como una clase abstracta
     *  Una clase hija puede extender solo una clase abstracta a la vez.
     * *Instanciación de clases abstractas: No es posible crear una instancia directa de una clase abstracta utilizando el operador new.
     *  Sin embargo, se pueden utilizar las clases hijas para crear instancias.
     * *Implementación de métodos abstractos: Las clases hijas deben proporcionar una implementación concreta de los métodos abstractos definidos en la clase abstracta.
     *  La implementación debe tener la misma firma (nombre y parámetros) que el método abstracto en la clase abstracta.
     */
    echo "Definicion de la clase abstracta <br>";
     abstract class Animal { //la palabra abstract define a esta clase como abstracta
        abstract public function hacerSonido(); //la palabra abstract define a este metodo como abstracto
     }
     
     class Perro extends Animal {
        public function __constructor() {}
        public function hacerSonido() { //se debe desarollar el metodo abstracto
            echo "¡Guau!";
        }
     }
     
     class Gato extends Animal { 
        public function __constructor() {}
        public function hacerSonido() {
            echo "Miiiauuu!";
        }
     }

     $pluto=new Perro();
    echo "Se imprime un objeto de la instacia Perro<br>";
    echo "<pre>";
    var_dump($pluto); //imprimo todo el objeto
    echo "</pre>";
    echo $pluto->hacerSonido();

     $garfield=new Gato();
     echo "Se imprime un objeto de la instacia Gato<br>";
     echo "<pre>";
     var_dump($garfield); //imprimo todo el objeto
     echo "</pre>";
     echo $garfield->hacerSonido();

    /**
     * 2.5. Interfaces
     * Interfaz: estructura que define un conjunto de métodos que una clase debe implementar, sin especificar como debe implementarlos
     */
    echo "Interfaz. Ejemplo: <br>";
    interface Figura { 
        public function calcularArea(); //este metodo si o si debe implementarlo la clase
    }
        
    class Circulo implements Figura { 
        private $radio;
        public function __construct($radio) {
            $this->radio = $radio;
        }
        public function calcularArea() { 
            return pi() * pow($this->radio, 2); //aqui es pi*r^2
        }
    }
    
    $circulo = new Circulo(5); 
    echo "Se imprime un objeto de la instacia Circulo<br>";
    echo "<pre>";
    var_dump($circulo); //imprimo todo el objeto
    echo "</pre>";
    echo "Area del circulo: ".$circulo->calcularArea()."<br>"; // Imprimirá el área del circulo

    echo "Ejemplo de Herencia entre interfaces<br>";
    interface FiguraArea {
        public function calcularArea();
    }
    
    interface Figura3D extends FiguraArea { //se usa entends para hereda la interfaz en otra interfaz
        public function calcularVolumen();
    }
    
    class Cubo implements Figura3D {
        private $lado;
        public function __construct($lado) { 
            $this->lado = $lado;
        }
        public function calcularArea() { //se implemento
            return 6 * pow($this->lado, 2);
        }
        public function calcularVolumen() { //se implemento
            return pow($this->lado, 3);
        }
    }
    
    $cubo = new Cubo(5);
    echo "Se imprime un objeto de la instacia Cubo<br>";
    echo "<pre>";
    var_dump($cubo); //imprimo todo el objeto
    echo "</pre>";
    echo $cubo->calcularArea()."<br>"; // Imprimirá el área del cubo
    echo $cubo->calcularVolumen()."<br>"; // Imprimirá el volumen del cubo
    
    echo "Otro ejemplo de interfaces en php";
    interface TransporteInterfaz {
        public function getInfo(): string;
        public function getRuedas () : int;
    }
        
    class TransporteVeh implements TransporteInterfaz {    
        public function __construct (protected int $ruedas, protected int $capacidad){}
        public function getInfo(): string {
            return "El transporte tiene ". $this->ruedas." ruedas y una capacidad de " .$this->capacidad." personas ";
        }
        public function getRuedas() : int {
            return $this->ruedas;
        }
    }
    $metro = new TransporteVeh(12,"20");
    echo "Se imprime un objeto de la instacia Transporte<br>";
    echo "<pre>";
    var_dump($metro); //imprimo todo el objeto
    echo "</pre>";
    echo $metro->getInfo()."<br>"; // Imprimirá el área del cubo
    echo $metro->getRuedas()."<br>"; // Imprimirá el volumen del cubo

    /**
     * 2.6. Polimorfismo
     * Polimorfismo: en POO es un concepto para tratar objetos de diferentes clase de manera uniforme usando una interfaz comun
     *  es decir la capacidad de os objetos de un jerarquia de clases de responde de manera diferente a la misma llamada de un metodo
     * *el polimorfismo se logra a traves de la herencia donde se puede redefinir o sobrescribir los metodos heredados
     * *los objetos de clases hijas pueden ser tratados como objetos de la clase padre
     */
    echo "Ejemplo de polimorfismo<br>";
    /* se usara algo de lo anterior TransporteInterfaz y TransporteVeh*/
    class AutomovilUno extends TransporteVeh implements TransporteInterfaz { //se extiende de la clase Transporte y se implemente la interfaz TransporteInterfaz
        public function __construct(protected int $ruedas, protected int $capacidad, protected string $color){}
        public function getInfo(): string {
            return "El transporte AUTO tiene " .$this->ruedas. " ruedas y una capacidad de " .$this->capacidad." personas y tiene el color ". $this->color; 
        }
        public function getColor(): string { 
            return "El color es " . $this->color;
        }
    }
    echo "Se imprime un objeto de la instacia Transporte<br>";
    echo "<pre>";
    var_dump($transporte = new Transporte (8, 20)); //imprimo todo el objeto
    echo "</pre>";

    echo "Se imprime un objeto de la instacia AutomovilUno<br>";
    echo "<pre>";
    var_dump($auto = new AutomovilUno(4, 4, 'Rojo')); //imprimo todo el objeto
    echo "</pre>";

    echo "Se imprime resultado de los metodos<br>";
    echo $transporte->getInfo(); echo "<br>"; //se usa el metodo getInfo de la clase padre con lo elementos entregados
    echo $auto->getInfo(); echo "<br>"; //se usa el metodo getInfo de la clase hijo la cual se modifica con los valores en este caso aplica el polimorfismo permitiendo que no ocurran errores y cumplimiento con los niveles de jerarquia
    echo $auto->getColor(); echo "<br>";

    /**
     * 2.7. Autolad
     * Autoloading (carga automática): tecnica que permite cargar automaticamente las clases cuando son necesarias sin tener que incluir de forma manualmente los archivos de clase en cada punto del codigo
     * *con esto no es necesaario incluir los archivos de clase de forma explicita
     * *spl_autoload_register: funcion que permite registrar una o varias funciones de autoload. estas funciones se ejecutan automaticamente cuando se usa una clase que aun no ha sido cargada
     */
    echo "Forma de hacer el Autoload:<br>";
    function my_autoload($clase){ //metodo que puede tener cualquier nombre para definir la carga automatica de clases
        //como las clases son Detalles o Clientes debe dentro de la carpetas clases haber llamado un archivo Detalles.php o detalles.php paraque sirva y ahi poner las clases
        //tambiene pueden haber dos archivos uno Detalles.php y otro Clientes.php dentro de la carpeta clases
        require __DIR__.'/clases/'.$clase.'.php'; //aqui se escribe la ruta base donode se encuentran las clases que se desean cargar
        echo __DIR__.'/clases/'.$clase.'.php<br>'; //este echo no es necesario solo era para saber la ruta que se obiene
        //__DIR__ se escribe para especificar el valor del directorio actual
    }
    spl_autoload_register('my_autoload'); //uso de autoload spl_autoload_register es un funcion ya definida de PHP
    $detalles=new Detalles("Caballo","Es una animal"); //instancia de Detalles 
    $clientes=new Clientes("Andres","andres@gmail.com"); //instancia de Clientes 
    echo "Se imprime un objeto de la instancia Detalles<br>";
    echo "<pre>";
    var_dump($detalles);
    echo "</pre>";
    echo $detalles->getNombre()."<br>";

    echo "Se imprime un objeto de la instancia Clientes<br>";
    echo "<pre>";
    var_dump($clientes);
    echo "</pre>";
    echo $clientes->getEmail()."<br>";

    /**
     * 2.8. Namespaces en PHP
     * use: se utiliza para la definicion de un espacio de nombres y se especifica una ruta corta para accede a un elemento especifico
     * namespace: se utiliza para que lo que esta abajo de esto se puede usar para importar clases, funciones y constantes
     */
    echo "Uso de namespace<br>";
    echo "Definicion del namespace a las clases<br>";
    //en el archivo namespace.php 
    //primero crear la carpeta clase_con_namespace y crear los documentos a continuacion: ClientesNamespace.php y DetallesNamespace.php
    //en el documento ClientesNamespace.php se escribe 
   /*namespace App;
    
    class ClientesNamespace { 
        public function __construct(){
            echo "Desde la clase de ClientesNamespace.php<br>";
        }
    } */

    //en el documento DetallesNamespace.php se escribe esto
   /*  namespace App;
    
    class DetallesNamespace { 
        public function __construct(){
            echo "Desde la clase de DetallesNamespace.php<br>";
        }
    } */

    echo "Importar los namespace a la clase <br>";
    //en otro documento namespace.php se importan esta clases 
    /* use App\ClientesNamespace; //esto permite usar la clase en el codigo del namespace App
    use App\DetallesNamespace;
    function my_autoloadear ($clase){
        echo $clase."<br>";
        $fileClass = explode('\\', $clase); //el '\\' se usa para indica un sola barra invertida
        var_dump($fileClass); */
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
   /*      require __DIR__.'/clase_con_namespace/'.$fileClass[1].'.php';
    }
    spl_autoload_register('my_autoloadear');
    $detallesNamespace=new DetallesNamespace();
    $clientesNamespace=new ClientesNamespace(); 
    var_dump($detallesNamespace);
    var_dump($clientesNamespace); */

    /**
     * 2.9. Composer
     * Composer: administrador de dependencias para PHP que permite instalar librerías de terceros
     * para facilitar el desarrollo con php. 
     * *Composer es el equivalente a npm para node JS.
     */

    /**
     * *Inicializar Composer en el proyecto
     * 1. Abrir el proyecto
     * 2. Ejecutar el comando composer init
     */

    /**
     * 2.9.1. Autoload con composer
     * Después de iniciar composer en el proyecto agregue el siguiente código a el archivo composer.json:
     */
    /* {
        "name": "desarrollo/cursophp",
        "description": "Curso php composer",
        "authors": [
            {
                "name": "Johlver",
                "email": "jjpardo2002@gmail.com"
            }
        ],
        "require":{},
        "autoload": { //esta parte es importante para lo del autoload
            "psr-4": {
                "App\\":"./clases"
            }
        }
    }  */

    /**
     * Luego Ejecutar el comando composer update
     * *composer update
     */
    
    /* 
    *se puede correr el siguiente codigo para revisar la funcionalidad
        require 'vendor/autoload.php';
        use App\Clientes;
        use App\Detalles;
        $cliente=new Clientes();
        $detalle= new Detalles(); 
    */
?>