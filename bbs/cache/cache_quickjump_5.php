<?php

if (!defined('PUN')) exit;
define('PUN_QJ_LOADED', 1);
$forum_id = isset($forum_id) ? $forum_id : 0;

?>				<form id="qjump" method="get" action="viewforum.php">
					<div><label><span><?php echo $lang_common['Jump to'] ?><br /></span>
					<select name="id" onchange="window.location=('viewforum.php?id='+this.options[this.selectedIndex].value)">
						<optgroup label="Club News">
							<option value="2"<?php echo ($forum_id == 2) ? ' selected="selected"' : '' ?>>Club News</option>
						</optgroup>
						<optgroup label="Projects">
							<option value="4"<?php echo ($forum_id == 4) ? ' selected="selected"' : '' ?>>(Led) Zeppelin</option>
							<option value="3"<?php echo ($forum_id == 3) ? ' selected="selected"' : '' ?>>Hot Tub (Time Machine)</option>
						</optgroup>
						<optgroup label="Whiteboards">
							<option value="5"<?php echo ($forum_id == 5) ? ' selected="selected"' : '' ?>>January 14</option>
						</optgroup>
					</select>
					<input type="submit" value="<?php echo $lang_common['Go'] ?>" accesskey="g" />
					</label></div>
				</form>
