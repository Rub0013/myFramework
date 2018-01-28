<?php
    function controllers($class_name)
    {
        return 'controllers/' .$class_name . '.php';
    }
    function models($class_name)
    {
        return 'models/' .$class_name . '.php';
    }
    function views($class_name)
    {
        return 'views/' .$class_name . '.php';
    }
    function lib($class_name)
    {
        return 'lib/' .$class_name . '.php';
    }
    spl_autoload_register(function ($class_name) {
        if(file_exists(controllers($class_name)))
        {
            include_once controllers($class_name);
        }
        if(file_exists(models($class_name)))
        {
            include_once models($class_name);
        }
        if(file_exists(views($class_name)))
        {
            include_once views($class_name);
        }
        if(file_exists(lib($class_name)))
        {
            include_once lib($class_name);
        }
    }); 
?>