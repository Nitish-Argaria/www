<?php
/**
* Router
*
* PHP version 5.6
*/
class Router
{

  /**
  * Associative array of routes (the routing table)
  * @var array
  */
  protected $routes = [];

  /**
  * Parameters from the matched routes
  */
  protected $params = [];

  /**
  * Add a route to the routing table
  *
  * @param string $route The route url
  * @param array $ params Parameters (controller,action etc.)
  *
  * @return void
  */

  public function add($route, $params)
  {
    $this->routes[$route] = $params;
  }

  /**
  * Get all the routes from the routing table
  *
  * @return array
  */
  public function getRoutes()
  {
    return $this->routes;
  }

  /**
  * Match the route to the routes in the routing table, setting the $params
  *property if a route is found
  *
  * @param string $url The route URL
  *
  * @return boolean true if a match found, false otherwise

}
