<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2011 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Isotope eCommerce Workgroup 2009-2011
 * @author     Andreas Schempp <andreas@schempp.ch>
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 * @version    $Id$
 */


/**
 * Palettes
 */
$GLOBALS['TL_DCA']['tl_iso_payment_modules']['palettes']['sofortueberweisung'] = '{type_legend},name,label,type;{note_legend:hide},note;{config_legend:hide},new_order_status,minimum_total,maximum_total,countries,shipping_modules,product_types;{gateway_legend},trans_type,sofortueberweisung_user_id,sofortueberweisung_project_id,sofortueberweisung_project_password,sofortueberweisung_notification_password;{price_legend:hide},price,tax_class;{expert_legend:hide},guests,protected;{enabled_legend},enabled';


/**
 * Fields
 */
$GLOBALS['TL_DCA']['tl_iso_payment_modules']['fields']['sofortueberweisung_user_id'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_iso_payment_modules']['sofortueberweisung_user_id'],
	'inputType'			=> 'text',
	'eval'				=> array('mandatory'=>true, 'maxlength'=>16, 'rgxp'=>'digit', 'tl_class'=>'w50'),
);

$GLOBALS['TL_DCA']['tl_iso_payment_modules']['fields']['sofortueberweisung_project_id'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_iso_payment_modules']['sofortueberweisung_project_id'],
	'inputType'			=> 'text',
	'eval'				=> array('mandatory'=>true, 'maxlength'=>16, 'rgxp'=>'digit', 'tl_class'=>'w50'),
);

$GLOBALS['TL_DCA']['tl_iso_payment_modules']['fields']['sofortueberweisung_project_password'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_iso_payment_modules']['sofortueberweisung_project_password'],
	'inputType'			=> 'text',
	'eval'				=> array('mandatory'=>true, 'maxlength'=>255, 'hideInput'=>true, 'tl_class'=>'w50'),
);

$GLOBALS['TL_DCA']['tl_iso_payment_modules']['fields']['sofortueberweisung_notification_password'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_iso_payment_modules']['sofortueberweisung_notification_password'],
	'inputType'			=> 'text',
	'eval'				=> array('maxlength'=>255, 'hideInput'=>true, 'tl_class'=>'w50'),
);

