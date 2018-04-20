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

defined('_JEXEC') or die;

// Bootstrap Gantry framework or fail gracefully (inside included file).
$gantry = include __DIR__ . '/includes/gantry.php';

/** @var \Gantry\Framework\Theme $theme */
$theme = $gantry['theme'];

$context = array(
    'errorcode' => isset($this->error) ? $this->error->getCode() : null,
    'error' => isset($this->error) ? $this->error->getMessage() : null,
    'debug' => $app->get('debug_lang', '0') == '1' || $app->get('debug', '0') == '1',
    'backtrace' => $this->debug ? $this->renderBacktrace() : null
);

// Reset used outline configuration.
unset($gantry['configuration']);

// Render the page.
echo $theme
    ->setLayout('_error', true)
    ->render('error.html.twig', $context);
