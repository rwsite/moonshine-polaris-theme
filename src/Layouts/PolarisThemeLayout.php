<?php

declare(strict_types=1);

namespace Rwsite\MoonShinePolarisTheme\Layouts;

use MoonShine\AssetManager\Css;
use MoonShine\ColorManager\ColorManager;
use MoonShine\Contracts\ColorManager\ColorManagerContract;
use MoonShine\Contracts\ColorManager\PaletteContract;
use MoonShine\Laravel\Layouts\AppLayout;
use Rwsite\MoonShinePolarisTheme\Palettes\PolarisPalette;

class PolarisThemeLayout extends AppLayout
{
    /**
     * @var null|class-string<PaletteContract>
     */
    protected ?string $palette = PolarisPalette::class;

    protected function assets(): array
    {
        return [
            ...parent::assets(),
            Css::make((string) config('polaris-theme.css_path', '/vendor/moonshine-polaris-theme/admin-custom.css')),
        ];
    }

    /**
     * @param ColorManager $colorManager
     */
    protected function colors(ColorManagerContract $colorManager): void
    {
        parent::colors($colorManager);
    }
}
