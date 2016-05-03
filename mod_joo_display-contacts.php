<?php
/**
 * @copyright	@copyright	Copyright (c) 2016 Escuela de Relaciones Internacionales - UNA (http://www.ri.una.ac.cr/). All rights reserved.
 * @license		http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 */

// no direct access
defined('_JEXEC') or die;

// include the syndicate functions only once
require_once __DIR__ . '/helper.php';

$class_sfx = htmlspecialchars($params->get('class_sfx'));

$contacts = modDisplayContactsHelper::getContacts($params);
require(JModuleHelper::getLayoutPath('mod_joo_display-contacts', $params->get('layout', 'default')));