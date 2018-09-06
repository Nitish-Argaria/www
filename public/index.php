<?php
/**
*Front Controller
*
*PHP version 5.6
*/
//echo 'Requested URL = "' .$_SERVER['QUERY_STRING'].'"';

/**
* Routing
*/
require '../Core/Router.php';
$router = new Router();

//echo get_class($router);      //get_class gives class name
$router->add('',['Controller'=>'Home','action' => 'index']);
$router->add('posts',['Controller' => 'Posts', 'action' => 'index']);
$router->add('posts/new',['Controller' => 'Posts', 'action' => 'new']);

//Display the routing table
// echo '<pre>';
// var_dump($router->getRoutes());
// echo '</pre>';

//Match the requested route
$url = $_SERVER['QUERY_STRING'];

if($router->match($url)){
  echo '<pre>';
  var_dump($router->getParams());
  echo '</pre>';
}else{
  echo "No route found for '$url'";
}
