Composer: herramienta de administración de paquetes para PHP.

Instalacion y documentacion: https://getcomposer.org/

Iremos al directorio del proyecto.

Algunos comandos de composer:
composer init //inicializar un proyecto
Luego responder las preguntar para configurar el proyecto

Informacion a responder:
- Nombre del paquete
- Descripción
- Autor
- Dependencias
- Otros. 

Luego de responder las preguntas Composer genera un archivo composer.json en el directorio actual. 

Este archivo contendrá la configuración de tu proyecto y las dependencias especificadas.

composer require //agrega dependencias.
composer install //instala las dependencias especificadas en el archivo composer.json
composer validate //verifica si el archivo composer.json es válido sintácticamente.
composer outdated //muestra las dependencias que están desactualizadas en tu proyecto.
composer search //busca paquetes disponibles en el repositorio de Packagist (el repositorio de paquetes de Composer).
composer show //muestra información detallada sobre un paquete específico instalado en el proyecto.
composer licenses //muestra las licencias de las dependencias instaladas en el proyecto.
composer config //ermite leer o modificar la configuración de Composer, como cambiar el directorio de instalación de paquetes o ajustar la configuración de autenticación.
composer run-script //ejecuta un script personalizado definido en el archivo composer.json.
composer archive //crea un archivo ZIP o tarball de tu proyecto.
composer global //permite administrar paquetes y configuraciones globales de Composer.