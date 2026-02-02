<?php

declare(strict_types=1);

namespace SharpAPI\ContentDetectAi;

use Illuminate\Support\ServiceProvider;

/**
 * @api
 */
class ContentDetectAiProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/sharpapi-content-detect-ai.php' => config_path('sharpapi-content-detect-ai.php'),
            ], 'sharpapi-content-detect-ai');
        }
    }

    /**
     * Register the application services.
     */
    public function register(): void
    {
        // Merge the package configuration with the app configuration.
        $this->mergeConfigFrom(
            __DIR__.'/../config/sharpapi-content-detect-ai.php', 'sharpapi-content-detect-ai'
        );
    }
}
