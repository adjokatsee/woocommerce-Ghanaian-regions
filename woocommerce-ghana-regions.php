<?php
/*
Plugin Name: WooCommerce Ghana Regions
Description: Adds some regions to Ghana on WooCommerce's list of shiping zones. It improves the user experience of your Ghana-based clients.
Version: 1.0.0
Author: Ezekiel Sebastine
Author URI: http://spleint.com
License: GPL-2.0+
License URI: http://www.gnu.org/licenses/gpl-2.0.txt
*/
/**
 * Copyright (c) 2017 Ezekiel Sebastine. All rights reserved.
 *
 * Released under the GPL license
 * http://www.opensource.org/licenses/gpl-license.php
 *
 * This is an add-on for WordPress
 * http://wordpress.org/
 *
 * **********************************************************************
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * **********************************************************************
 */
function wc_ng_counties_add_counties ( $states ) {

	$states ['GH' ] = array (
		'KUM' => 'Kumasi' ,
		'SUN' => 'Sunyani' ,
		'KAS' => 'Kasoa' ,
		'TAK' => 'Takoradi' ,
		'ACC' => 'Accra' ,
		'CC' => 'Cape coast' ,
		'TAM' => 'Tamale' ,
		'TEM' => 'Tema' ,
		'HO' => 'Ho' ,
		'SEK' => 'Sekondi' ,
		'UPE' => 'Upper east' ,
		'UPW' => 'Upper west' ,
		);
	return $states;
	
}

add_filter( 'woocommerce_states' , 'wc_ng_counties_add_counties'  );