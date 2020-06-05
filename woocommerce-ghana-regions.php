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
function wc_ng_counties_add_counties ( $city) {

	$city ['GH' ] = array (
		'ACC' => 'Accra' ,
        	'HO' => 'Ho' ,
		'DMG' => 'Damongo' ,
		'TAK' => 'Takoradi' ,
		'CC' => 'Cape Coast' ,
		'WA' => 'Wa' ,
		'BOL' => 'BOlgatanga' ,
		'KUM' => 'Kumasi' ,
		'DAM' => 'Dambai' ,
		'KOF' => 'Koforidua' ,
		'TAM' => 'Tamale' ,
		'SWO' => 'Sefwi Wiawso' ,
		'SUN' => 'Sunyani' ,
        	'TCH' => 'Techiman' ,
		'GOS' => 'Goaso' ,
		'NAL' => 'Nalerigu' ,
		
		);
	return $city;
	
}

add_filter( 'woocommerce_city' , 'wc_ng_cities_add_towns'  );
