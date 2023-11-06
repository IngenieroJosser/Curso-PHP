<?php
    /*
        En PHP, hay varias variables predefinidas que se llaman "variables del servidor" que proporcionan información sobre el entorno y la configuración del servidor web. 
        Estas variables son súper globales, lo que significa que están disponibles en todo el script sin necesidad de declararlas como variables locales. 
        Algunas de las variables del servidor más comunes incluyen:

        1. `$_SERVER['SERVER_NAME']`: 
        Esta variable contiene el nombre del servidor web, por ejemplo, el nombre de dominio, si se encuentra en un servidor web remoto.


        2. `$_SERVER['SERVER_SOFTWARE']`: 
        Contiene información sobre el software del servidor web que se está utilizando, como Apache, Nginx, IIS, etc.


        3. `$_SERVER['REQUEST_METHOD']`: 
        Indica el método de solicitud HTTP utilizado para acceder a la página actual, como "GET" o "POST".


        4. `$_SERVER['HTTP_USER_AGENT']`: 
        Muestra el agente de usuario del navegador que está siendo utilizado para acceder a la página.


        5. `$_SERVER['REMOTE_ADDR']`: 
        Proporciona la dirección IP del cliente que realiza la solicitud al servidor.


        6. `$_SERVER['REQUEST_URI']`: 
        Contiene la URI (Uniform Resource Identifier) de la solicitud actual, incluyendo cualquier consulta o parámetros.


        7. `$_SERVER['HTTP_REFERER']`: 
        Muestra la URL de la página desde la cual el usuario fue referido (si está disponible en el encabezado HTTP).


        8. `$_SERVER['HTTPS']`: 
        Indica si la conexión actual se está realizando a través de HTTPS o no. Puede tener valores como "on" o "off".


        9. `$_SERVER['SERVER_PORT']`: 
        Contiene el número de puerto del servidor en el que se está ejecutando la solicitud (generalmente 80 para HTTP y 443 para HTTPS).


        10. `$_SERVER['QUERY_STRING']`: 
        Muestra la cadena de consulta de la URL actual, es decir, los parámetros después del signo de interrogación (?).


        Estas son solo algunas de las variables del servidor disponibles en PHP. 
        Puedes acceder a estas variables para obtener información sobre la solicitud y el entorno del servidor, 
        lo que es útil para personalizar la respuesta de tu script de acuerdo con las circunstancias. 
        Ten en cuenta que las variables del servidor pueden variar según la configuración de tu servidor web y el entorno de ejecución de PHP.
    */
?>