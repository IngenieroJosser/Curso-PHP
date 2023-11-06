<?php
    /*
        En PHP, las secciones se utilizan para gestionar el estado de una aplicación web y permitir a los usuarios mantener su autenticación y otros datos entre distintas páginas. 
        Las sesiones se basan en cookies y almacenan datos del lado del servidor relacionados con un usuario específico. 
        A continuación, te mostraré cómo trabajar con sesiones en PHP:
    */

    /*
        1. ) Iniciar una Sesión:
        Antes de utilizar sesiones en PHP, debes iniciar una sesión en cada página donde desees utilizarlas. 
        Para hacerlo, utiliza la función session_start() al comienzo de tu script PHP.
    */

    session_start();
    //Resto de tu código aquí

//------------------------------------------------------------------------

    /*
        2. ) Almacenar Datos en una Sesión:
        Puedes almacenar datos en la sesión utilizando el array superglobal $_SESSION. Por ejemplo, 
        puedes almacenar información de un usuario después de que haya iniciado sesión.
    */

        // Almacenar el nombre de usuario en la sesión
    $_SESSION['usuario'] = 'juan123';

    /*
        3. ) Recuperar Datos de una Sesión:
        Para recuperar datos almacenados en la sesión, 
        simplemente accede al array $_SESSION.
    */

        // Recuperar el nombre de usuario de la sesión
    $nombreUsuario = $_SESSION['usuario']


    /*
        4. ) Cerrar una Sesión:
        Para cerrar una sesión, 
        puedes utilizar session_destroy(). 
        Esto eliminará todos los datos de la sesión.
    */

    session_destroy();


    /*
        5. ) Verificar si una Sesión está Activa:
        Puedes comprobar si una sesión está activa 
        utilizando session_status() o verificando si $_SESSION está definido.
    */

    if (session_status() == PHP_SESSION_ACTIVE) {
        echo "La sesión está activa.";
    }
    

    /*
        Es importante destacar que debes iniciar una sesión en cada página que necesite acceder a datos de sesión. Las sesiones son útiles para mantener el estado de la aplicación y retener información sobre el usuario mientras navega por diferentes páginas.

Ten en cuenta que debes manejar las sesiones de manera segura, especialmente si estás trabajando con datos confidenciales. A menudo, las sesiones se utilizan en combinación con la autenticación de usuarios para garantizar la seguridad de la información.
    */
?>