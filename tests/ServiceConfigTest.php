<?php

declare(strict_types=1);

use SharpAPI\DetectAiContent\DetectAiContentService;

beforeEach(function () {
    config()->set('sharpapi-detect-ai-content.api_key', 'test-key');
});

it('keeps the server Retry-After polling by default', function () {
    expect((new DetectAiContentService)->isUseCustomInterval())->toBeFalse();
});

it('applies the use-polling-interval flag from config', function () {
    config()->set('sharpapi-detect-ai-content.api_job_status_use_polling_interval', true);
    config()->set('sharpapi-detect-ai-content.api_job_status_polling_interval', 7);

    $service = new DetectAiContentService;

    expect($service->isUseCustomInterval())->toBeTrue()
        ->and($service->getApiJobStatusPollingInterval())->toBe(7);
});

it('reads the polling wait from config', function () {
    config()->set('sharpapi-detect-ai-content.api_job_status_polling_wait', 60);

    expect((new DetectAiContentService)->getApiJobStatusPollingWait())->toBe(60);
});
