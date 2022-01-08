<?php
namespace Lib;

# define route function to resolve request class and action
class Route{

    public static function resolve($url,$class,$action){
        if (preg_match("/^$url$/", $_SERVER['REQUEST_URI'])){
            $class = new $class;
            $class->$action();
        }
    }

    public static function get($url,$class,$action){
        # if the http request type is get
        if ($_SERVER['REQUEST_METHOD'] == 'GET'){
            self::resolve($url,$class,$action);
        }
    }

    public static function post($url,$class,$action){
        # if the http request type is post
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            self::resolve($url,$class,$action);
        }
    }

    public static function put($url,$class,$action){
        # if the http request type is put
        if ($_SERVER['REQUEST_METHOD'] == 'PUT'){
            self::resolve($url,$class,$action);
        }
    }

    public static function delete($url,$class,$action){
        # if the http request type is delete
        if ($_SERVER['REQUEST_METHOD'] == 'DELETE'){
            self::resolve($url,$class,$action);
        }
    }

}