<?php
/**
 * Returns a menu structure of certain pages.
 *
 * @param array $ta The indexes of the pages.
 * @param mixed $st The menu level to start with or the type of menu.
 *
 * @return string The (X)HTML.
 *
 * @global array The paths of system files and folders.

 * Original cmssimle/tplfuncs.php

 */

//function li($ta, $st) //Original cmssimle/tplfuncs.php

function bootstrap_li($ta, $st)
{
    global $pth;

//    include_once $pth['folder']['classes'] . 'Menu.php'; //Original cmssimle/class
//    $li = new XH_Li();
	$li = new Bootstrap_XH_Li();

    return $li->render($ta, $st);
}

/**
 * Returns an opening a tag as link to a page.
 *
 * @param int    $i The page index.
 * @param string $x Arbitrary appendix of the URL.
 * @param string $class_etc Class Style of the Atag.

 * @global string The script name.
 * @global array  The URLs of the pages.
 * @global array  The configuration of the core.
 *
 * @return string The (X)HTML.
 */
function a_class($i, $x ,$class_etc='')
{
    global $sn, $u, $cf;

    if ($i == 0 && !XH_ADM) {
        if ($x == '' && $cf['locator']['show_homepage'] == 'true') {
            return '<a href="' . $sn . '?' . $u[0] . '"' . (!empty($class_etc) ? ' ' . $class_etc : '') . '>';
        }
    }
    return isset($u[$i])
        ? '<a href="' . $sn . '?' . $u[$i] . $x . '"' . (!empty($class_etc) ? ' ' . $class_etc : '') . '>'
        : '<a href="' . $sn . '?' . $x . '"' . (!empty($class_etc) ? ' ' . $class_etc : '') . '>';
}

/* For "Clean URLs" $cf['uri']['lowercase']
http://cmsimpleforum.com/viewtopic.php?f=4&t=5719
http://maxim.zp.ua/users/2/files.html  **/
function a_class_cleanurl($i, $x, $class_etc='')
{
    global $sn, $u, $cf;

    if ($i == 0 && !XH_ADM) {
        if ($x == '' && $cf['locator']['show_homepage'] == 'true') {

            return '<a href="' . $sn . $u[0] . '.html"'. (!empty($class_etc) ? ' ' . $class_etc : '') . '>';
        }
    }
    return isset($u[$i])
        ? '<a href="' . $sn . $u[$i] . '.html' . (!empty($x) ? '?' . $x : '') . '"' . (!empty($class_etc) ? ' ' . $class_etc : '') . '>'
        : '<a href="' . $sn . '.html' . (!empty($x) ? '?' . $x : '') . '"' . (!empty($class_etc) ? ' ' . $class_etc : '') . '>';
}




/**
 * Handling of the menus.
 *
 * PHP versions 4 and 5
 *
 * @category  CMSimple_XH
 * @package   XH
 * @author    Peter Harteg <peter@harteg.dk>
 * @author    The CMSimple_XH developers <devs@cmsimple-xh.org>
 * @copyright 1999-2009 Peter Harteg
 * @copyright 2009-2015 The CMSimple_XH developers <http://cmsimple-xh.org/?The_Team>
 * @license   http://www.gnu.org/licenses/gpl-3.0.en.html GNU GPLv3
 * @version   SVN: $Id: Menu.php 1479 2015-01-25 20:05:20Z cmb69 $
 * @link      http://cmsimple-xh.org/
 */

/**
 * The menu renderer.
 *
 * @category CMSimple_XH
 * @package  XH
 * @author   Peter Harteg <peter@harteg.dk>
 * @author   The CMSimple_XH developers <devs@cmsimple-xh.org>
 * @license  http://www.gnu.org/licenses/gpl-3.0.en.html GNU GPLv3
 * @link     http://cmsimple-xh.org/
 * @since    1.6.3
 */
//class XH_Li
class Bootstrap_XH_Li
{
    /**
     * The relevant page indexes.
     *
     * @var array
     *
     * @access protected
     */
    var $ta;

    /**
     * The menu level to start with or the type of menu.
     *
     * @var mixed
     *
     * @access protected
     */
    var $st;

    /**
     * Whether the current menu item is not representing the requested page.
     *
     * @var bool
     *
     * @access protected
     */
    var $tf;

    /**
     * The "default" menu level.
     *
     * @var int
     *
     * @access protected
     */
    var $b;

    /**
     * The array of flags, signalling whether a certain menu level is open.
     *
     * @var array
     *
     * @access protected
     */
    var $lf;

    /**
     * Renders a menu structure of certain pages.
     *
     * @param array $ta The indexes of the pages.
     * @param mixed $st The menu level to start with or the type of menu.
     *
     * @return string (X)HTML.
     *
     * @global int The index of the current page.
     *
     * @access public
     */
    function render($ta, $st)
    {
        global $s;

        $this->ta = (array) $ta;
        $this->st = $st;
        $tl = count($this->ta);
        if ($tl < 1) {
            return;
        }
        $t = '';
        if ($this->st == 'submenu' || $this->st == 'search') {
            $t .= '<ul class="' . $this->st . '">' . "\n";
        }
        $this->b = 0;
        if ($this->st > 0) {
            $this->b = $this->st - 1;
            $this->st = 'menulevel';
        }
        $this->lf = array();
        for ($i = 0; $i < $tl; $i++) {
            $this->tf = ($s != $this->ta[$i]);
            if ($this->st == 'menulevel' || $this->st == 'sitemaplevel') {
                $t .= $this->renderULStartTags($i);
            }
            $t .= '<li class="' . $this->getClassName($i) . '">';
            $t .= $this->renderMenuItem($i);
            if ($this->st == 'menulevel' || $this->st == 'sitemaplevel') {
                if ($this->getMenuLevel($i + 1) > $this->getMenuLevel($i)) {
                    $this->lf[$this->getMenuLevel($i)] = true;
                } else {
                    $t .= '</li>' . "\n";
                    $this->lf[$this->getMenuLevel($i)] = false;
                }
                $t .= $this->renderEndTags($i);
            } else {
                $t .= '</li>' . "\n";
            }
        }
        if ($this->st == 'submenu' || $this->st == 'search') {
            $t .= '</ul>' . "\n";
        }
        return $t;
    }

    /**
     * Renders the ul start tags.
     *
     * @param int $i The index of the current item.
     *
     * @return string (X)HTML.
     *
     * @global array The menu levels of the pages.
     *
     * @access protected
     */
    function renderULStartTags($i)
    {
        global $l;

        $lines = array();
        for ($k = $this->getMenuLevel($i - 1); $k < $this->getMenuLevel($i); $k++) {

//			if($k == 1 || $k == 2){
			if($k <=  2){
	            $lines[] = "\n" . '<ul class="' . 'dropdown-menu' . '">' . "\n";
//			}else if($k == 2){
//	            $lines[] = "\n" . '<ul class="' . 'dropdown-submenu' . '">' . "\n";
			}else{
	            $lines[] = "\n" . '<ul class="' . $this->st . ($k + 1) . '">' . "\n";
			}
//            $lines[] = "\n" . '<ul class="' . $this->st . ($k + 1) . '">' . "\n";
        }
        return implode('<li>' . "\n", $lines);
    }

    /**
     * Renders the ul and li end tags.
     *
     * @param int $i The index of the current item.
     *
     * @return string (X)HTML.
     *
     * @access protected
     */
    function renderEndTags($i)
    {
        $html = '';
        for ($k = $this->getMenuLevel($i); $k > $this->getMenuLevel($i + 1); $k--) {
            $html .= '</ul>' . "\n";
            if (isset($this->lf[$k - 1]) && $this->lf[$k - 1]) {
                $html .= '</li>' . "\n";
                $this->lf[$k - 1] = false;
            }
        }
        return $html;
    }

    /**
     * Returns the menu level of a menu item.
     *
     * @param int $i The index of the current item.
     *
     * @return int
     *
     * @global array  The menu levels of the pages.
     *
     * @access protected
     */
    function getMenuLevel($i)
    {
        global $l;

        return isset($this->ta[$i]) ? $l[$this->ta[$i]] : $this->b;
    }

    /**
     * Returns the class name of the current item.
     *
     * @param int $i The index of the current item.
     *
     * @return string
     *
     * @global array  The configuration of the core.
     *
     * @access protected
     */
    function getClassName($i)
    {

//		if($i == 3){ //MenuLelel3
		if($this->getMenuLevel($i) == 2 && $this->hasChildren($i)){
			$className = 'dropdown-submenu';
		}else{
	        $className = '';
//	        if ($this->isSelected($i)) {
//	            $className .= 's';
//	        }
	//        $className .= 'doc';
	        $className .= 'dropdown';
//	        if ($this->hasChildren($i)) {
//	            $className .= 's';
	//            $className .= '-submenu';
//	        }
		}
        return $className;
    }

    /**
     * Returns whether the current menu item is selected.
     *
     * @param int $i The index of the current item.
     *
     * @return bool
     *
     * @access protected
     */
    function isSelected($i)
    {
        global $cf;

        return !$this->tf
            || $cf['menu']['sdoc'] == "parent"
            && $this->isAnchestorOfSelectedPage($i);
    }

    /**
     * Returns whether the current item is an anchestor of the selected page.
     *
     * @param int $i The index of the current item.
     *
     * @return bool
     *
     * @global int    The index of the current page.
     * @global array  The URLs of the pages.
     * @global array  The menu levels of the pages.
     * @global array  The configuration of the core.
     *
     * @access protected
     */
    function isAnchestorOfSelectedPage($i)
    {
        global $s, $u, $l, $cf;

        return $s > -1 && $l[$this->ta[$i]] < $l[$s]
            && substr($u[$s], 0, 1 + strlen($u[$this->ta[$i]]))
            == $u[$this->ta[$i]] . $cf['uri']['seperator'];
    }

    /**
     * Returns whether the current item has children.
     *
     * @param int $i The index of the current item.
     *
     * @return bool
     *
     * @global int    The number of pages.
     * @global array  The menu levels of the pages.
     * @global array  The configuration of the core.
     *
     * @access protected
     */
    function hasChildren($i)
    {
        global $cl, $l, $cf;

        for ($j = $this->ta[$i] + 1; $j < $cl; $j++) {
            if (!hide($j)
                && $l[$j] - $l[$this->ta[$i]] < 2 + $cf['menu']['levelcatch']
            ) {
                if ($l[$j] > $l[$this->ta[$i]]) {
                    return true;
                }
                break;
            }
        }
        return false;
    }

    /**
     * Renders a menu item.
     *
     * @param int $i The index of the current item.
     *
     * @return string (X)HTML.
     *
     * @global array  The headings of the pages.
     *
     * @access protected
     */
    function renderMenuItem($i)
    {
        global $h;

//        if ($this->tf) {
            $html = $this->renderAnchorStartTag($i);
//        } else {
//            $html ='<span>';
//        }
        $html .= $h[$this->ta[$i]];
//        if ($this->tf) {
			if(($this->getMenuLevel($i) ==1) && ($this->hasChildren($i)) ){
				$html .= '<i class="fa fa-angle-down"></i>';
			}
            $html .= '</a>';
//        } else {
//            $html .='</span>';
//        }
        return $html;
    }

    /**
     * Renders an anchor start tag.
     *
     * @param int $i The index of the current item.
     *
     * @return string (X)HTML.
     *
     * @access protected
     */
    function renderAnchorStartTag($i)
    {

        global $cf;

        $x = $this->shallOpenInNewWindow($i) ? '" target="_blank' : '';

        $class_etc = $this->shallOpenInNewWindow($i) ? 'target="_blank" ' : '';

//		if($i == 1){ //MenuLelel1
		if($this->getMenuLevel($i) ==1){
			$x .= '" class="dropdown-toggle" data-close-others="false" data-delay="0" data-hover="dropdown';
			$class_etc .= 'class="dropdown-toggle" data-close-others="false" data-delay="0" data-hover="dropdown"';
		}

//        return a($this->ta[$i], $x);
		if (isset($cf['uri']['lowercase'])){
	        return a_class_cleanurl($this->ta[$i],'',$class_etc);
		}else{
	        return a_class($this->ta[$i],'',$class_etc);	
		}

    }

    /**
     * Returns whether a link shall be opened in a new window.
     *
     * @param int $i The index of the current item.
     *
     * @return bool
     *
     * @global array  Whether we are in edit mode.
     * @global object The page data router.
     *
     * @access protected
     */
    function shallOpenInNewWindow($i)
    {
        global $edit, $pd_router;

        $pageData = $pd_router->find_page($this->ta[$i]);
        return !(XH_ADM && $edit) && $pageData['use_header_location'] === '2';
    }
}


/**
 * Returns the search form.
 *
 * @return string The (X)HTML.
 *
 * @global string The script name.
 * @global array  The localization of the core.
 */
function bootstrap_searchbox()
{
    global $sn, $tx;

    return '<form action="' . $sn . '" method="get">' 
        . tag('input type="text" class="form-control search" placeholder=" Search" name="search"') 
        . tag('input type="hidden" name="function" value="search"')
        . '</form>';
}
/**
 * Returns the locator (breadcrumb navigation).
 *
 * @return string The (X)HTML.
 *
 * @global string The title of the page.
 * @global array  The headings of the pages.
 * @global int    The index of the current page.
 * @global string The requested special function.
 * @global array  The content of the pages.
 * @global array  The menu levels of the pages.
 * @global array  The localization of the core.
 * @global array  The configuration of the core.
 * @global int    The index of the first published page.
 */
function bootstrap_locator()
{
    global $title, $h, $s, $f, $c, $l, $tx, $cf, $_XH_firstPublishedPage;

    if (hide($s) && $cf['show_hidden']['path_locator'] != 'true') {
        return $h[$s];
    }
    if ($s == $_XH_firstPublishedPage) {
        return $h[$s];
    } elseif ($title != '' && (!isset($h[$s]) || $h[$s] != $title)) {
        $t = '<li>' . $title . '510</li>';
    } elseif ($f != '') {
        return ucfirst($f);
    } elseif ($s > $_XH_firstPublishedPage) {
        $t = '';
        $tl = $l[$s];
        if ($tl > 1) {
            for ($i = $s - 1; $i >= $_XH_firstPublishedPage; $i--) {
                if ($l[$i] < $tl) {
                    $t = '<li>' . a($i, '') . $h[$i] . '</a></li>' . $t;
                    $tl--;
                }
                if ($tl < 2) {
                    break;
                }
            }
        }
    } else {
        return '&nbsp;';
    }
    if ($cf['locator']['show_homepage'] == 'true') {
        return '<li>' . a($_XH_firstPublishedPage, '') . $tx['locator']['home']
            . '</a></li>' . $t
            . (($s > $_XH_firstPublishedPage && $h[$s] == $title) ? '<li class="active">'. $h[$s] .'</li>' : '');
    } else {
        return $t
            . (($s > $_XH_firstPublishedPage && $h[$s] == $title) ? '<li class="active">'. $h[$s] .'</li>' : '');
    }
}
?>
