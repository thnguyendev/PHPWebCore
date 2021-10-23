<?php
namespace App;

use PHPWebCore\App;

class Bootstrap extends App
{
    public function process()
    {
        // Add services to container
        //$this->container = $this->container
        //    ->withSingleton(DatabaseServiceInterface::class, DatabaseService::class)
        //    ->withTransient(DoSomethingInterface::class, DoSomething::class);

        // Redirect to HTTPS
        //$this->useHttps();

        // Allow CORS
        //$this->allowCors();

        // Use routing to map route
        //$this->useRouting(new Route());

        // Middleware before passing request to controller such as authorization can apply here

        // Invoke the action to fulfill the request
        // Data likes user information from Authorization can be passed to controller by bucket
        //$this->invokeAction(bucket: null);

        // Middleware after invoke the action can be here
    }
}
?>
