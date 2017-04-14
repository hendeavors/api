<?php 

namespace Dingo\Api\Routing\Extensions;

use Illuminate\Routing\Router as LaravelRouter;

class Router extends LaravelRouter
{
	/**
     * Set the route collection instance.
     *
     * @param  \Illuminate\Routing\RouteCollection  $routes
     * @return void
     */
    public function setRoutes(RouteCollection $routes)
    {
        foreach ($routes as $route) {
            $route->setContainer($this->container);
        }
        $this->routes = $routes;
        $this->container->instance('routes', $this->routes);
    }
}