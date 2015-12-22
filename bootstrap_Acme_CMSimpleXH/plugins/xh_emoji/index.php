<?php

/**
 * Back-end of xh_emoji.
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

/**
 * The plugin version.
 */
define('XH_EMOJI_VERSION', '1.0.1');


/**
 * Returns the plugin version information view.
 *
 * @return string  The (X)HTML.
 */
/*
 * Include the necessary JS and CSS.

if (!$edit && $pd_s >= 0) {
    XH_emoji($c[$pd_s]);
}
 */
/**
 * Returns the requirements information view.
 *
 * @return string  The (X)HTML.
 */

/**
 * Writes the necessary JS and CSS to the head element.
 *
 * @global array  The paths of system files and folders.
 * @global string  Elements to be inserted in the head element.
 * @global array  The configuration of the plugins.
 * @global array  The localization of the plugins.
 * @param  string $content
 * @return void
 */
function XH_emoji($content)
{
    global $pth, $hjs, $plugin_cf, $plugin_tx;

    $pcf = $plugin_cf['xh_emoji'];
    $ptx = $plugin_tx['xh_emoji'];
    $dir = $pth['folder']['plugins'].'xh_emoji/';

//    foreach (array('shCore', 'shBrushXml') as $f) {
	$fn = $dir . 'js/script.js';
	$hjs .= '<script type="text/javascript" src="' . $fn . '"></script>'
	    . "\n";
//    }

//    foreach (array('shCore', 'shTheme') as $f) {
	$fn = $dir . 'css/style.css';
	$hjs .= tag('link rel="stylesheet" href="' . $fn . '" type="text/css"')
	    . "\n";
//    }

SCRIPT;
}
?>
