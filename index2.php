<?php
    /**
     * 3. PHP Avanzado
     */
    /**
     * 3.1. Integración de php con Bases de datos relacionales (Mysql)
     * *PHP proporciona una variedad de extensiones y funciones para trabajar con diferentes sistemas de gestión de bases de datos relacionales, como MySQL, PostgreSQL, Oracle, entre otros.
     */
    /**
     * 3.1.1. Bases de datos relacionales
     * SGBD: sistema de gestión de bases de datos
     * Bases de datos relacionales: informacion en tablas estructuradas (tiene filas y columnas) y se puede establecer relaciones entre ellas.
     *  estas se basan en el modelo relacional de Edgar Codd
     * *tabla es una entidad
     * *fila es una instancia de una entidad
     * *columna es una caracteristica de una entidad
     * *relaciones entre tablas mediante claves primarias (identifica a cada fila en una tabla) y claves foráneas (hace referencia a la clave primaria de otra tabla haciendo de esta forma una relacion entre las tablas)
     * *SQL: lenguaje de consulta estructurado - Structured Query Language
     * *Ejemplos de SGBD relacionales: MySQL, Oracle Database, Microsoft SQL Server y PostgreSQL.
     * *RDBMS: sistema de gestión de bases de datos relacionales
     */

    /**
     **Una tabla tiene un nombre y sus columnas tambien
     **Cada tabla tiene una columna para poder identificar de forma unica y que se suele llamar como "PRIMARY_KEY"
     **En caso de que la tabla tenga llaves foraneas "FOREIGN_KEY" esta referencia se pone en otra columna donde se pone la identificacion de llave primaria de otra tabla
     */

    /**
     * Ventajas RDBMS:
    **Menos redundancia
    **Prevención de inconsistencias: si se realiza el cambio en un lugar tambien ocurre en otros relacionados
    **Eficacia: un fragmento de informacion se almacena en menos ubicaciones
    **Integridad de los datos: a cada columna se le asigna ciertos tipo de dato que pueden almacenar
    **Confidencialidad: mas facil esta cuando hay centralizacion de la informacion
    */

    /**
     * Reglas para tablas de datos relacionales:
     **tablas con nombre distinto
    **tablas puede contener varias filas
    **cada tabla tiene un valor para identifica de forma unica las filas
    **cada columna en un tabla tiene un nombre unico 
    **las entradas (la informacion que almacenan) en las columnas son valores unicos
    **las entradas en las columnas son del mismo tipo
    **el orden de las filas y las columnas no es importante
    */

    /**
    * 3.1.2. Entidades y Atributos
    **Entidad: categorias de cosas
    *Ejemplo de entidad: usuarios y en esta entidad se guardan los usuarios que a su vez cada usuario tiene: nombre, apellido y otros
    **Tipos de entidades:
    *?Principal: Existe de forma independiente como instructor, cliente
    *?Caracteristica: Existe gracias a otra entidad (principal) como son tipos de instructores o tipos de clientes
    *?Interseccion: Existe gracias a dos o mas entidades como items segun tipos de instructores y o items segun tipos de clientes
    *
    **Entidades e instancias
    *?Las entidades contiene instancias (filas)
    *?Una instancia de entidad es una unica incidencia de una entidad (es decir que en un tabla no pueden haber dos filas iguales)
    *?Las entidades representan un juego de instancias que son de interes
    */

    /**
     * 3.1.3. Identificadores Únicos 
     * *Identificador único (clave unica o primaria): atributo o conjunto de atributos que permite identificar de manera exclusiva cada registro en una tabla, se usa para garantizar unicidad
     * *Características:
     * ?Unicidad: unico en la columna de una tabla
     * ?No nulidad: no toma valores nulos
     * ?Estabilidad: no cambian con el tiempo
     * ?Indexación: son usados para crear indices en la tabla
     * ?Referencialidad: servir para crear relaciones entre tablas
     * *Ejemplos:
     * ?Un campo de identificación autoincrementa
     * ?Una combinación de campos: al combinarse dos campos forma uno nuevo y unico
     * ?Un valor único generado externamente: como cedula, numero de seguro social y otros
     */

    /**
     * 3.1.4. Relaciones
     * Relacion: reglas que enlazan entidades
     * *Ejemplo: 
     * entidad1: empresa
     * entidad2: empleado
     * como se observa un empresa tiene varios empleados y con ello se establecen ciertas relaciones que puede ser de 1 a muchos y conjugndo varias posibilidades segun el contexto
     * *la linea de relacion puede ser solida (obligatoria) o discontinua (opcional)
     * *la linea termina en unica punta para una instancia o pata de gallo para una o mas instancias
     * *ejemplo de asignacion:
     * empresas contiene empleados
     * empleados se asigna a la empresas
     */

    /**
     * 3.1.5. Clave ajena (Foránea)
     * claves foraneas: son claves externas o ajenas para realizar cierta referencia de una tabla con otra
     * *La clave foránea en una tabla actúa como una referencia a una fila específica en otra tabla. 
     * *Caracteristicas:
     * ?Relación entre tablas: relaciones de uno a uno, uno a muchos o muchos a muchos, y se definen mediante la correspondencia entre la clave foránea y la clave primaria de la tabla referenciada
     * ?Integridad referencial: no se pueden agregar, modificar o eliminar registros en la tabla relacionada de una manera que rompa la relación establecida por la clave foránea
     * ?Restricciones de integridad: pueden tener restricciones asociadas, como la restricción de clave externa (foreign key constraint). Estas restricciones pueden especificar acciones como restringir o eliminar en cascada
     * ?Consultas y operaciones: permiten realizar consultas y operaciones que involucran múltiples tablas mediante la combinación de información relacionada
     * ?Mantenimiento de la consistencia: Si se actualiza la clave primaria en la tabla referenciada, las claves foráneas en otras tablas también se actualizarán automáticamente para mantener la integridad de los datos
     * *Ejemplo de dos tablas que usan la clave foranea:
     * !tabla empleados contiene: {empleado_id, nombre, apellido, empresa_id}, en esta el empleado_id es la clave primaria, empresa_id es donde se aloja esa llave foranea
     * !tabla empresas contiene: {empresa_id, nombre_empresa}, solo la llave primmaria: empresa_id
     * !como se observa se tiene una relacion de uno a muchos, donde uno es empresas y muchos es empleados
     * 
     * *Componentes de una relacion:
     * ?Nombre: etiqueta que aparece junto a la entidad asignada
     * ?Cardinalidad: es lo de uno a uno, uno a muchos o muchos a muchos
     * ?Opionalidad: opcion de que si debe existir una relacion o no. Opcional (0 registros coincidentes), Obligatorio (al menos un registro coincidente en cada entidad)
     */

     echo "Ejemplo de relacion de uno a muchos, de unica punta a pata de gallo<br>";
     echo "<img src='relacion.PNG'><br>";

    /**
     * 3.1.6. Normalización de bases de datos
     *  Normalización de bases de datos: proceso de diseño que se utiliza para organizar y estructurar las tablas de una base de datos relacional de manera eficiente y libre de redundancias
     * *Objetivo principal de la normalizacion: eliminar la duplicación de datos y garantizar la integridad y consistencia de la información almacenada
     * *Formas normales se divivden en: 1NF, 2NF hasta 5NF, donde cada nivel tiene su respectiva especifidad
     * *1NF: 
     * ?Elimine los grupos repetidos de las tablas individuales.
     * ?Cree una tabla independiente para cada conjunto de datos relacionados.
     * ?Identifique cada conjunto de datos relacionados con una clave principal.
     * *2NF:
     * ?Cree tablas independientes para conjuntos de valores que se apliquen a varios registros.
     * ?Relacione estas tablas con una clave externa.
     * *3NF:
     * ?Elimine los campos que no dependan de la clave.
     */
    echo "Normalizacion: <br>";
    echo "<a href='https://learn.microsoft.com/es-es/office/troubleshoot/access/database-normalization-description'>Aqui hay un ejemplo de esta normalizacion</a><br>";
    echo "1.Tabla sin normalizar: <br><img src='no.PNG'><br>";
    /**
     * En este caso lo de clase 1, clase 2, clase 3 se pueden poner en una sola columna ya que son del mismo grupo las clases al final y se pone en N° clase
     */
    echo "2. 1NF: sin grupos repetidos: <br><img src='2.PNG'><br>";
    /**
     * Hay valores repetidos en la tabla anterior como Garcia y Diaz en Tutor
     */
    echo "3. 2NF: eliminar datos redundantes: <br><img src='3.PNG'><br>";
    /**
     * El Despacho-Tut depende del atributo Tutor, para ello se crea una tabla nueva 'Personal'
     * esto se hace ya que la clave primaria es de N°alumno por lo que Despacho-Tut al depende del tutor (ahora este es su llave primaria) se hace una tabla solo para ello
     */
    echo "4. 3NF: eliminar datos que no depende de la clave: <br><img src='4.PNG'><br>";

    /**
     * 3.2. Mysql
     * Mysql: sistema manejador de bases de datos de libre uso y distribución bajo licencia GPL,  disponible para varios sistemas operativos
     * *Popularidad: licencia libre, facilidad de uso  administracion
     * *LAMP: integra y combina: Linux, Apache, MySQL y PHP
     */

    /**
     * 3.2.1. Características MySQL
     * ?Velocidad: comparado a otras bases libres
     * ?Portabilidad: corre en windows, linux, unix
     * ?Facilidad de uso: facil de uso
     * ?Conectividad: pueden ser accedidas desde cualquier sitio de internet
     * ?Soporta lenguaje SQL: SQL
     * ?Seguridad: permite asignar permisos a nivel de usuario
     * ?Robustez: es muti-hilo y puede atender a varios usuarios de manera simultanea
     */

    /**
     * 3.2.2. Consola de MySQL
     * !!!!!!!!!! AUN FALTA<
     * 
     * 
    */

    /**
     * 3.2.3. Tipos de datos en MySQL
     */
    /**
     * 3.2.3.1 Tipos de datos numéricos
     */
    echo "Tipos de datos en MySQL<br>";
    echo "Tipos de datos enteros: <br><img src='datoINT.PNG'><br>";

    echo "Tipos de datos en coma flotante: <br><img src='datoFlo.PNG'><br>";

    /**
     * 3.2.3.2. Tipos de datos de carácter
     */
    echo "Tipos de datos de carácter: <br><img src='datoCar.PNG'><br>";

    /**
     * 3.2.3.3. Tipos de dato fecha
     */
    echo "Tipos de dato fecha: <br><img src='datoFecha.PNG'><br>";

    /**
     * 3.2.3.4. Modificadores o Constraints
     */
    echo "Modificadores o Constraints: <br><img src='const.PNG'><br>";

    /**
     * 3.3. SQL Structured Query Language
     * SQL: lenguaje de programación utilizado para administrar y manipular bases de datos relacionales
     * ?permite a los usuarios crear, modificar y eliminar bases de datos, así como realizar consultas para recuperar información específica de una base de datos.
     * *Comandos:
     * !DDL (Data Definition Language): define y modifica estructura
     * ?incluye: CREATE (crea), ALTER (modifica), DROP (eliminar tablas, indices, vistas)
     * !DML (Data Manipulation Language): manipula datos almacenados
     * ?incluye; INSERT (agregar), UPDATE (actualizar), DELETE (eliminar)
     * !DQL (Data Query Language): realiza consultas y recuperar informacion
     * ?incluye: SELECT (para especificar criterios de busqueda y campos a recuperar)
     * !DCL (Data Control Language): controla privilegios de acceso
     * ?incluye: GRANT (otorga permisos), REVOKE (revoca permisos)
     */

    /**
     * 3.3.1. Que se puede hacer con SQL
     * !FALTA
     */

    /**
     * 3.3.2. Comandos DDL
     * !FALTA
     */

    /**
     * 3.3.2.1 SHOW DATABASE: visualiza las bases de datosen el sevidor
     */
    echo "SHOW DATABASE: <br><img src='31.PNG'><br>";

    /**
     * 3.3.2.2 CREATE DATABASE: crea una base de datos
     */
    echo "CREATE DATABASE: <br><img src='32.PNG'><br>";

    /**
     * 3.3.2.2 DROP DATABASE: elimina una base de datos
     */
    echo "DROP DATABASE: <br><img src='33.PNG'><br>";
    
    /**
     * 3.3.2.4 USE: selecciona base de datos que se administrara
     */
    echo "USE: <br><img src='34.PNG'><br>";

    /**
     * 3.3.2.5 CREATE TABLE: crea tabla en la base de datos que se esta administrando tras usar el USE
     */
    echo "CREATE TABLE: <br><img src='35.PNG'><br>";
    /** SHOW TABLES: muestra las tablas de una base de datos*/
    echo "SHOW TABLES: <br><img src='36.PNG'><br>";
    /** DESCRIBE nombre_tabla: visualiza la estructura de la tabla */
    echo "DESCRIBE nombre_tabla: <br><img src='37.PNG'><br>";

    /**
     * 3.3.2.6 ALTER TABLE: modifica estructura de una tabla
     */

    /**
     * 3.3.2.7 Agregar columnas
     */
    echo "ALTER TABLE con ADD para agregar columnas: <br><img src='38.PNG'><br>";

    echo "Otro ejemplo para agregar columnas tipo date: <br><img src='39.PNG'><br>";

    /**
     * 3.3.2.8. Eliminar columnas
     * Sintaxis:
     * ALTER TABLE table_name
     * DROP COLUMN column_name;
     */

    /**
     * 3.3.2.9. Renombrar una columna
     * Sintaxis:
     * ALTER TABLE table_name
     * RENAME COLUMN old_name to new_name;
     */

    /**
     * 3.3.2.10. Modificar el tipo de dato
     * Sintaxis:
     * ALTER TABLE table_name
     * MODIFY COLUMN column_name datatype;
     */

    /**
     * 3.3.2.11 CONSTRAINTS
     * !FALTA
     */
?>