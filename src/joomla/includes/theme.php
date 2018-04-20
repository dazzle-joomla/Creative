<?php
/**
 * Gantry 5 Template.
 *
 * PHP version 7
 *
 * @package    Creative
 * @author     Stephen Bishop <support@dazzlesoftware.org>
 * @copyright  Copyright (c) 2017 - 2018 Dazzle Software, LLC. (https://www.dazzlesoftware.org)
 * @license    https://opensource.org/licenses/GPL-3.0 GNU General Public License, version 3
 * @link       https://github.com/dazzle-gantry/creative
 * @since      1.0
 */

class_exists('\\Gantry\\Framework\\Gantry') or die;

// Define the template.
class GantryTheme extends \Gantry\Framework\Theme {}

// Initialize theme stream.
$gantry['platform']->set(
    'streams.gantry-theme.prefixes',
    ['' => [
        "gantry-themes://{$gantry['theme.name']}/custom",
        "gantry-themes://{$gantry['theme.name']}",
        "gantry-themes://{$gantry['theme.name']}/common"
    ]]
);

// Define Gantry services.
$gantry['theme'] = function ($c)  {
    return new GantryTheme($c['theme.path'], $c['theme.name']);
};
