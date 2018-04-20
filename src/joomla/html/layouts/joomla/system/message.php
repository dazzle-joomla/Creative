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

$msgList = $displayData['msgList'];

?>
<?php if (is_array($msgList) && !empty($msgList)) : ?>
	<div id="system-message-container">
		<div id="system-message">
			<?php foreach ($msgList as $type => $msgs) : ?>
				<div class="alert alert-<?php echo $type; ?>">
					<?php // This requires JS so we should add it trough JS. Progressive enhancement and stuff. ?>
					<a class="close" data-dismiss="alert">×</a>

					<?php if (!empty($msgs)) : ?>
						<h4 class="alert-heading"><?php echo JText::_($type); ?></h4>
						<div>
							<?php foreach ($msgs as $msg) : ?>
								<p><?php echo $msg; ?></p>
							<?php endforeach; ?>
						</div>
					<?php endif; ?>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
<?php endif; ?>
