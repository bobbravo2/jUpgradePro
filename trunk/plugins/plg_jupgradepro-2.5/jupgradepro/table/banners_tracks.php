<?php
/**
* @version $Id:
* @package Matware.jUpgradePro
* @copyright Copyright (C) 2005 - 2014 Matware. All rights reserved.
* @author Matias Aguirre
* @email maguirre@matware.com.ar
* @link http://www.matware.com.ar/
* @license GNU General Public License version 2 or later; see LICENSE
*/
// Check to ensure this file is within the rest of the framework
defined('JPATH_BASE') or die();

/**
 * JUpgradeTableBanners_tracks Table class
 */
class JUpgradeproTableBanners_tracks extends JUpgradeproTable {

	function __construct(&$db) {
		parent::__construct('#__banner_tracks', 'banner_id', $db);

		$this->_type = 'banners_tracks';
	}
}
