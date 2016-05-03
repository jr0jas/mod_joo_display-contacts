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
		$contactsCategory = $params['contacts_category'];
		$db = JFactory::getDbo();
		$query = $db->getQuery(true)
		            ->select($db->quoteName(array('a.id', 'a.name', 'a.alias', 'a.con_position', 'a.address', 'a.telephone', 'a.image', 'a.email_to', 'a.user_id', 'a.mobile')))
		            ->from($db->quoteName('#__contact_details', 'a'))
    				->join('INNER', $db->quoteName('#__categories', 'b') . ' ON (' . $db->quoteName('a.catid') . ' = ' . $db->quoteName('b.id') . ')')
    				->where($db->quoteName('b.title') . ' LIKE \'%' . $contactsCategory . '%\'');
		$db->setQuery($query);
		$result = $db->loadObjectList();
		return $result;
	}
}
