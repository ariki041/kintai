<?php
App::uses('SmartyBaseHelper', 'View/Helper');

/**
 * SmartySession Helper class for wrapping SessionHelper methods
 *
 * @package 	smartyview
 * @subpackage	view.helper
 */
class SmartySessionHelper extends SmartyBaseHelper {
    public $name = 'session';
	public $helpers = array('Session');
}
