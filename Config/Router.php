<?php

namespace Config;

use Config\Request as Request;

class Router
{
    public static function Route(Request $request)
    {
        $controllerName = $request->getController();

        $methodName= $request->getMethod();

        $methodParameters = $request->getParameter();

        $controllerClassName = "Controllers". $controllerName;

        $controller = new $controllerClassName;

        if(!isset($methodParameters))
        {
            call_user_func($controller,$methodName);
        }
        else
        {
            call_user_func($controller,$methodName,$methodParameters);
        }

    }
}


?>