<?php

declare(strict_types=1);

namespace SharpAPI\DetectAiContent;

use Illuminate\Support\ServiceProvider;

/**
 * @api
 */
class DetectAiContentProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/sharpapi-detect-ai-content.php' => config_path('sharpapi-detect-ai-content.php'),
            ], 'sharpapi-detect-ai-content');
        }
    }

    /**
     * Register the application services.
     */
    public function register(): void
    {
        // Merge the package configuration with the app configuration.
        $this->mergeConfigFrom(
            __DIR__.'/../config/sharpapi-detect-ai-content.php', 'sharpapi-detect-ai-content'
        );
    }
}
