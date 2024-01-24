<?php

namespace App;

class Router
{
   public array $routes = [];

   
   public function get(string $uri, array $action):Router
   {
        $this->routes['GET'][$uri] = $action;
        return $this;
   }
   public function post(string $uri,array $action):Router
   {
        $this->routes['POST'][$uri] = $action;
        return $this;
   }

   public function resolve(string $uri, string $method)
   {
         $route = $this->routes[$method][$uri] ?? null;

        if($route != null)
        {
            [$class,$method] = $route;

          return call_user_func([new $class,$method]);
        }else{
            return  '404 not found';
        }
   }
}