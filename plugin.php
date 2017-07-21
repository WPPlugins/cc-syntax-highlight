<?php

/*
    Plugin Name: CC-Syntax-Highlight
    Plugin URI: https://wordpress.org/plugins/cc-syntax-highlight
    Description: This plugin allows you very simply syntax highlight source code in your content using highlight.js or google-code-prettify libraries.
    Version: 1.1.0
    Author: Clearcode.cc
    Author URI: http://clearcode.cc
    Text Domain: cc-syntax-highlight
    Domain Path: /languages/
    License: GPLv3
    License URI: http://www.gnu.org/licenses/gpl-3.0.txt

    Copyright (C) 2016 by Clearcode <http://clearcode.cc>
    and associates (see AUTHORS.txt file).

    This file is part of CC-Syntax-Highlight.

    CC-Syntax-Highlight is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    CC-Syntax-Highlight is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with CC-Syntax-Highlight; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

namespace Clearcode\Syntax_Highlight;

use Clearcode\Syntax_Highlight;

if ( ! defined( 'ABSPATH' ) ) exit;

if ( ! function_exists( 'get_plugin_data' ) ) require_once( ABSPATH . 'wp-admin/includes/plugin.php' );

foreach ( array( 'singleton', 'plugin' ) as $class ) require_once( plugin_dir_path( __FILE__ ) . sprintf( 'class-%s.php', $class ) );

if ( ! has_action( __NAMESPACE__ ) ) do_action( __NAMESPACE__, Syntax_Highlight::instance() );
