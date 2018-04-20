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

class JFormFieldWarning extends JFormField
{
    protected $type = 'Warning';

    protected function getInput()
    {
        $app = JFactory::getApplication();
        if ($app->isAdmin()) {
            $app->enqueueMessage(JText::_('GANTRY5_THEME_INSTALL_GANTRY'), 'error');
        } else {
            $app->enqueueMessage(JText::_('GANTRY5_THEME_FRONTEND_SETTINGS_DISABLED'), 'warning');
        }
    }
}