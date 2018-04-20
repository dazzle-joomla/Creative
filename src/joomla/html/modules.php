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

// Gantry Specific Module Chrome
function modChrome_gantry($module, &$params, &$attribs)
{
	$moduleTag      = $params->get('module_tag', 'div');
	$headerTag      = htmlspecialchars($params->get('header_tag', 'h3'), ENT_COMPAT|ENT_SUBSTITUTE, 'UTF-8');
	$bootstrapSize  = (int) $params->get('bootstrap_size', 0);
	$moduleClass    = $bootstrapSize != 0 ? ' span' . $bootstrapSize : '';

	// Temporarily store header class in variable
	$headerClass    = $params->get('header_class', 'g-title');
	$headerClass    = ($headerClass) ? ' class="' . htmlspecialchars($headerClass, ENT_COMPAT|ENT_SUBSTITUTE, 'UTF-8') . '"' : '';

	if (!empty ($module->content)) : ?>
		<<?php echo $moduleTag; ?> class="moduletable <?php echo htmlspecialchars($params->get('moduleclass_sfx'), ENT_COMPAT|ENT_SUBSTITUTE, 'UTF-8') . $moduleClass; ?>">
			<?php if ((bool) $module->showtitle) : ?>
				<<?php echo $headerTag . $headerClass . '>' . $module->title; ?></<?php echo $headerTag; ?>>
			<?php endif; ?>
			<?php echo $module->content; ?>
		</<?php echo $moduleTag; ?>>
	<?php endif;
}
