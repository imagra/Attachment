<?php

namespace Imagra\Attachment;

use Illuminate\Support\ServiceProvider;

class AttachmentServiceProvider extends ServiceProvider {
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot() {
        //
        include __DIR__ . '/routes.php';
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register() {
        $this->app->make('Imagra\Attachment\Controllers\AttachmentController');
    }
}
