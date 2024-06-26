<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    // Other middleware entries...
    protected $routeMiddleware = [
        'auth.admin' => \App\Http\Middleware\AdminMiddleware::class, // Add this line
        'adminredirect' => \App\Http\Middleware\RedirectIfAdminMiddleware::class,
    ]; 

    // Other methods...
}
