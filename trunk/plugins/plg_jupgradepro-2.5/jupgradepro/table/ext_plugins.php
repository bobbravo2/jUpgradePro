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
 * Menu table
 *
 * @package 	Joomla.Framework
 * @subpackage		Table
 * @since	1.0
 */
class JUpgradeproTableExt_plugins extends JUpgradeproTable
{
	/** @var int Primary key */
	var $id					= null;
	/** @var string */
	var $name				= null;
	/** @var string */
	var $folder			= null;
	/** @var int */
	var $ordering			= null;
	/** @var boolean */
	var $published			= null;
	/** @var string */
	var $module				= null;
	/** @var int */
	var $access				= null;
	/** @var string */
	var $params				= null;
	/** @var string */
	var $client_id			= null;
	/** @var int */
	var $element				= null;
	/** @var int */
	var $type				= null;

	/**
	 * Table type
	 *
	 * @var string
	 */	
	var $_type = 'ext_plugins';	

	/**
	 * Contructor
	 *
	 * @access protected
	 * @param database A database connector object
	 */
	function __construct( &$db ) {
		parent::__construct( '#__plugins', 'id', $db );
	}


	/**
	 * Setting the conditions hook
	 *
	 * @return	void
	 * @since	3.0.0
	 * @throws	Exception
	 */
	public function getConditionsHook()
	{
		$conditions = array();

		$conditions['select'] = 'name, element, folder, client_id, ordering, params';

		$conditions['where'][] = "element   NOT   IN   ('joomla',   'ldap',   'gmail',   'openid',   'content',   'categories',   'contacts',   'sections',   'newsfeeds',   'weblinks',   'pagebreak',   'vote',   'emailcloak',   'geshi',   'loadmodule',   'pagenavigation', 'none',   'tinymce',   'xstandard',   'image',   'readmore',   'sef',   'debug',   'legacy',   'cache',   'remember', 'backlink', 'log', 'blogger', 'mtupgrade' )";

		return $conditions;
	}


	/**
	 * 
	 *
	 * @access	public
	 * @param		Array	Result to migrate
	 * @return	Array	Migrated result
	 */
	function migrate( )
	{		
		$this->params = isset($this->params) ? $this->convertParams($this->params) : '';
		// Default
		$this->type = 'plugin';
	}
}
