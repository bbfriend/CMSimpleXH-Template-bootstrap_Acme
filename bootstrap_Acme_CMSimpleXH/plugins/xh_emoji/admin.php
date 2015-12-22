<?php

/**
 *  xh_emoji For TinyMCE4
 *
 * @package	xh_emoji
 * @copyright	Copyright (c) 2015 T.Uchiyama <http://cmsimple-jp.org/>
 * @license	http://www.gnu.org/licenses/gpl-3.0.en.html GNU GPLv3
 * @version 1.0.1
 * @link	http://cmsimple-jp.org
 */


/*
 * Prevent direct access.
 */
if (!defined('CMSIMPLE_XH_VERSION')) {
    header('HTTP/1.0 403 Forbidden');
    exit;
}
/*
 * Register the plugin menu items.
 */
if (function_exists('XH_registerStandardPluginMenuItems')) {
    XH_registerStandardPluginMenuItems(false);
}

/**
 * Returns the plugin version information view.
 *
 * @return string  The (X)HTML.
 */
function xh_emoji_version()
{
    global $pth;

    return '<h1><a href="http://cmsimple-jp.org">XH_emoji</a></h1>'."\n"
	. tag('img src="'.$pth['folder']['plugins'].'xh_emoji/help/1F603.png" style="float: left; margin: 0 16px 16px 0"')
	. '<p>Version: '.XH_EMOJI_VERSION.'</p>'."\n"
	. '<p>Copyright &copy; 2015 <a href="http://cmsimple-jp.org" target="_blank">cmsimple-jp.org</a></p>'."\n"
	. '<p>Powered by <a href="http://emojione.com/" target="_blank">http://emojione.com/</a></p>'
	. '<p>Xh_Emoji was modified the <a href="https://ja.wordpress.org/plugins/wp-emoji-one/" target="_blank">WP Emoji One Ver0.6.0</a> for the XH</p>'
	. '<p style="text-align: justify">'
	. '<b>License</b>'. tag('br') . "\n"
	. ' Art License Terms : <a href="http://creativecommons.org/licenses/by-sa/4.0/" target="_blank">Creative Commons License </a> . Detail <a href="http://emojione.com/" target="_blank">http://emojione.com/</a>'. tag('br')."\n"
	. ' Software License terms : <a href="http://www.gnu.org/licenses/" target="_blank">GPLv3.</a>';
}


/*
 * Handle the plugin administration.
 */
if (isset($xh_emoji) && $xh_emoji == 'true') {
    $o .= print_plugin_admin('on'); //Returns the plugin menu.
    switch ($admin) {
    case '':
    case 'plugin_main':
	$o .= xh_emoji_version() ;
	break;
    default://Handles reading and writing of plugin files
	$o .= plugin_admin_common($action, $admin, $plugin);
    }
}

?>
