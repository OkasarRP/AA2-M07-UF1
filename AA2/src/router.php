<?php
require 'routes.php';


function getRoute($routes){
    $uri=$_SERVER['REQUEST_URI'];
    $path=parse_url($uri,PHP_URL_PATH);
    $query=parse_url($uri,PHP_URL_QUERY);
    if($path =='/index.php'){
        $uri_parts=explode('/','/login');
    }else{
        $uri_parts=explode('/',$path);
    }

    $uri_parts=array_filter($uri_parts);
    
        $controller=reset($uri_parts);
    
    //die($controller);
    if(empty($controller)){
        return 'login';
    }
    if(in_array($controller,$routes)){

    return $controller;
    
    }else{
        throw new Exception("Route not found");
    }
    // if(isset($_REQUEST['url'])){
    //     $url = $_REQUEST['url'];
    //     if(in_array($url,$route)){
    //         return $url;
    //     }else{
    //         throw new Exception("Route not found");
    //     }
        
    // }    
    // return null;

    //en caso de hacer un action de un from "action= "?url='action-route'"
}

