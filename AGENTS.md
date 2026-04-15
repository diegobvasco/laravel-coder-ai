# Laravel Package: diegobvasco/laravel-coder-ai

## Essential Commands

- `composer test` — Run Pest tests (NOT PHPUnit)
- `composer test-coverage` — Run tests with coverage
- `composer analyse` — Run PHPStan level 5
- `composer format` — Run Laravel Pint to fix code style
- `composer prepare` — Testbench package discovery (auto-runs after composer dump-autoload)

## Quality Checks

Run in order before committing:
1. `composer format` — Fixes style issues
2. `composer analyse` — PHPStan static analysis
3. `composer test` — Pest test suite

CI runs all three on every push (tests, PHPStan, Pint auto-fix).

## Tech Stack

- **Framework**: Laravel package using `spatie/laravel-package-tools`
- **Testing**: Pest (not PHPUnit) with Orchestra Testbench
- **PHP**: Requires 8.4+, CI tests on 8.4 and 8.5
- **Laravel**: Supports 12.* and 13.*
- **Static Analysis**: PHPStan level 5 with Laravel/Octane compatibility checks

## Code Style

- Laravel Pint preset: `laravel`
- **Enforces strict types** (`declare_strict_types` required)
- Many additional strict rules beyond default Laravel preset
- See `pint.json` for full ruleset

## Package Structure

- Namespace: `DiegoVasconcelos\CoderAi\`
- Service Provider: `src/CoderAiServiceProvider.php` (auto-registered via composer.json)
- Tests extend `DiegoVasconcelos\CoderAi\Tests\TestCase` (Orchestra\Testbench)
- Factory naming convention: `Database\Factories\{ModelName}Factory`

## Architecture Tests

Pest Arch plugin enforces no debugging functions (`dd`, `dump`, `ray`) in production code.
