<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(web: __DIR__ . '/../routes/web.php', commands: __DIR__ . '/../routes/console.php', health: '/up')
    ->withMiddleware(function (Middleware $middleware) {
        //
        $middleware->alias([
            // Tambahkan baris ini
            'CheckAdmin' => \App\Http\Middleware\CheckAdmin::class,
        ]);
        $middleware->redirectGuestsTo(function ($request) {
        // Jika URL yang diakses mengandung kata 'admin'
        if ($request->is('admin') || $request->is('admin/*')) {
            return route('admin.login'); // Alihkan ke login admin
        }

        // Jika bukan admin, alihkan ke login user biasa
        return route('login-page');
    });
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })
    ->create();
