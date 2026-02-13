<?php

declare(strict_types=1);

namespace Rwsite\MoonShinePolarisTheme;

use Illuminate\Support\ServiceProvider;

final class PolarisThemeServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/polaris-theme.php', 'polaris-theme');
    }

    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/../config/polaris-theme.php' => config_path('polaris-theme.php'),
        ], 'moonshine-polaris-theme-config');

        $this->publishes([
            __DIR__ . '/../resources/css/admin-custom.css' => public_path('vendor/moonshine-polaris-theme/admin-custom.css'),
        ], 'moonshine-polaris-theme-assets');
    }
}
