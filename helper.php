<?php
/**
 * @copyright	Copyright (c) 2016 Escuela de Relaciones Internacionales - UNA (http://www.ri.una.ac.cr/). All rights reserved.
 * @license		http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 */

// no direct access
defined('_JEXEC') or die;

/**
 * Escuela de Relaciones Internacionales - UNA - display-contacts Helper Class.
 *
 * @package		Joomla.Site
 * @subpakage	joomla.una.ac.cr.display-contacts
 */
class modDisplayContactsHelper {
	public static function getContacts($params) {
		$result = [];
		$db = JFactory::getDbo();
		$query = $db->getQuery(true)
		            ->select($db->quoteName(array('id', 'name', 'alias', 'con_position', 'address', 'telephone', 'image', 'email_to', 'user_id', 'mobile')))
		            ->from($db->quoteName('#__contact_details'));
		$db->setQuery($query);

		$result = $db->loadObjectList();
		return $result;
	}
}
