<?php

declare(strict_types=1);

namespace Rwsite\MoonShinePolarisTheme\Palettes;

use MoonShine\Contracts\ColorManager\PaletteContract;

final class PolarisPalette implements PaletteContract
{
    public function getDescription(): string
    {
        return 'Polaris clean palette for MoonShine';
    }

    public function getColors(): array
    {
        return [
            'body'           => 'oklch(98.5% 0.002 247)',
            'primary'        => 'oklch(51.1% 0.262 276)',
            'primary-text'   => 'oklch(100% 0 0)',
            'secondary'      => 'oklch(55.1% 0.027 264)',
            'secondary-text' => 'oklch(100% 0 0)',
            'success'        => 'oklch(62.7% 0.194 149)',
            'success-text'   => 'oklch(37% 0.126 149)',
            'warning'        => 'oklch(76.9% 0.188 70.08)',
            'warning-text'   => 'oklch(47.6% 0.114 68)',
            'error'          => 'oklch(57.7% 0.245 27.33)',
            'error-text'     => 'oklch(39.6% 0.141 25.72)',
            'info'           => 'oklch(58.8% 0.158 241)',
            'info-text'      => 'oklch(38.8% 0.104 240)',
            'base'           => [
                'text'    => 'oklch(27.4% 0.006 286)',
                'stroke'  => 'oklch(87.2% 0.01 258)',
                'default' => 'oklch(100% 0 0)',
                50        => 'oklch(98.5% 0.002 247)',
                100       => 'oklch(96.7% 0.003 264)',
                200       => 'oklch(92.8% 0.006 264)',
                300       => 'oklch(87.1% 0.014 261)',
                400       => 'oklch(71.4% 0.022 261)',
                500       => 'oklch(55.1% 0.027 264)',
                600       => 'oklch(44.6% 0.024 266)',
                700       => 'oklch(37.3% 0.022 261)',
                800       => 'oklch(31.4% 0.021 260)',
                900       => 'oklch(27.4% 0.006 286)',
            ],
        ];
    }

    public function getDarkColors(): array
    {
        return [
            'body'           => 'oklch(17.6% 0.014 285)',
            'primary'        => 'oklch(68.8% 0.212 277)',
            'primary-text'   => 'oklch(100% 0 0)',
            'secondary'      => 'oklch(71.4% 0.022 261)',
            'secondary-text' => 'oklch(17.6% 0.014 285)',
            'success'        => 'oklch(62.7% 0.194 149)',
            'success-text'   => 'oklch(86.5% 0.127 149)',
            'warning'        => 'oklch(76.9% 0.188 70.08)',
            'warning-text'   => 'oklch(90.1% 0.076 78)',
            'error'          => 'oklch(57.7% 0.245 27.33)',
            'error-text'     => 'oklch(72.2% 0.192 27)',
            'info'           => 'oklch(58.8% 0.158 241)',
            'info-text'      => 'oklch(81.2% 0.094 240)',
            'base'           => [
                'text'    => 'oklch(93.6% 0.003 264)',
                'stroke'  => 'oklch(30.5% 0.022 269)',
                'default' => 'oklch(21.5% 0.017 266)',
                50        => 'oklch(22.6% 0.018 267)',
                100       => 'oklch(25.8% 0.021 267)',
                200       => 'oklch(29.2% 0.022 268)',
                300       => 'oklch(33.8% 0.024 269)',
                400       => 'oklch(40.6% 0.025 269)',
                500       => 'oklch(49.6% 0.026 268)',
                600       => 'oklch(58.8% 0.024 266)',
                700       => 'oklch(68.5% 0.019 264)',
                800       => 'oklch(78.4% 0.013 264)',
                900       => 'oklch(87.1% 0.007 264)',
            ],
        ];
    }
}
