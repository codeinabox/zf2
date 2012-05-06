<?php

namespace Zend\Mvc;

use Zend\Di\LocatorInterface,
    Zend\EventManager\EventManagerAware,
    Zend\Stdlib\RequestDescription as Request,
    Zend\Stdlib\ResponseDescription as Response;

interface AppContext extends EventManagerAware
{
    /**
     * Set a service locator/DI object
     *
     * @param  LocatorInterface $locator
     * @return AppContext
     */
    public function setLocator(LocatorInterface $locator);

    /**
     * Set request object that will be consumed
     * 
     * @param  Request $request 
     * @return AppContext
     */
    public function setRequest(Request $request);

    /**
     * Set response object that will be returned
     * 
     * @param  Response $request 
     * @return AppContext
     */
    public function setResponse(Response $response);

    /**
     * Set the router used to decompose the request
     *
     * A router should return a metadata object containing a controller key.
     * 
     * @param  Router\RouteStack $router 
     * @return AppContext
     */
    public function setRouter(Router\RouteStack $router);

    /**
     * Get the locator object
     * 
     * @return LocatorInterface
     */
    public function getLocator();

    /**
     * Get the request object
     * 
     * @return Request
     */
    public function getRequest();

    /**
     * Get the response object
     * 
     * @return Response
     */
    public function getResponse();

    /**
     * Get the router object
     * 
     * @return Router
     */
    public function getRouter();

    /**
     * Retrieve the event manager
     *
     * Lazy-loads an EventManager instance if none registered.
     * 
     * @return EventCollection
     */
    public function events();

    /**
     * Run the application
     * 
     * @return \Zend\Http\Response
     */
    public function run();
}
