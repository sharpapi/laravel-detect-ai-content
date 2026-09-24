<?php

declare(strict_types=1);

namespace SharpAPI\DetectAiContent\Tests;

use Illuminate\Foundation\Application;
use Orchestra\Testbench\TestCase as Orchestra;
use SharpAPI\DetectAiContent\DetectAiContentProvider;

abstract class TestCase extends Orchestra
{
    /**
     * @param  Application  $app
     * @return array<int, class-string>
     */
    protected function getPackageProviders($app): array
    {
        return [DetectAiContentProvider::class];
    }
}
