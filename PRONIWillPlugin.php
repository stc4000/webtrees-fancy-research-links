<?php

declare(strict_types=1);

namespace JustCarmen\Webtrees\Module\FancyResearchLinks\Plugin;

use Fisharebest\Webtrees\I18N;
use JustCarmen\Webtrees\Module\FancyResearchLinks\FancyResearchLinksModule;

class PRONIWillPlugin extends FancyResearchLinksModule
{
    public function pluginLabel(): string
    {
        return 'Public Records Office Northern Ireland (PRONI) - Will Search (link only)';
    }

    public function pluginName(): string
    {
        return strtolower(basename(__FILE__, 'Plugin.php'));
    }

    public function researchArea(): string
    {
        return 'NIR';
    }

    public function researchLink($attributes): string
    {
        // 

        $name = $attributes['NAME'];

        return 'https://apps.proni.gov.uk/WillsCalendar_IE/willsSearch.aspx';
    }
}
