# Changelog

All notable changes to `laravel-detect-ai-content` will be documented in this file.

## v1.1.0 - 2026-09-24

- Added a Laravel Boost skill (`resources/boost/skills/sharpapi-detect-ai-content/SKILL.md`) so AI agents can discover the async submit/`fetchResults()` flow, the queued-job recipe, result shape and testing approach.
- Fixed: `SHARP_API_JOB_STATUS_USE_POLLING_INTERVAL` (`api_job_status_use_polling_interval`) is now applied; it was read by nobody before, so the fixed polling interval never replaced the server's `Retry-After`.
- Raised `sharpapi/php-core` to `^1.4.1`: failed jobs with no result now return a `SharpApiJob` instead of a TypeError, and a missing API key throws a clear `InvalidArgumentException`.
- Added a Pest + Orchestra Testbench test suite.
- Docs: fixed the README: the usage example imported the wrong namespace (`SharpAPI\ContentDetectAi`); the class is `SharpAPI\DetectAiContent\DetectAiContentService`.
- Removed stray auto-generated `CLAUDE.md` memory stubs from the repo root, `src/` and `config/`, and added a `.gitignore`.

## v1.0.1 - 2026-02-21

Security: bumped minimum Laravel version to ^10.48.29 to address file validation bypass vulnerability (CVE). Dropped Laravel 9 support (EOL since Feb 2024).

## 1.0.0 - 2026-01-22

- Initial release
