<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Custom.
 *
 * @package    theme_custom
 * @copyright  2018 systemovich
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// This line protects the file from being accessed by a URL directly.
defined('MOODLE_INTERNAL') || die();

// This is the component name of the plugin in the format 
// <plugintype>_<pluginname>. It always starts with 'theme_' for themes. The 
// <pluginname> should be the same as the name of the folder.
// 
// Type: String
// Status: Required
$plugin->component = 'theme_custom';

// This is the version of the plugin. It has the format YYYYMMDDXX, where
// 
// * YYYY is the four-digit year.
// * MM is the two-digit month.
// * DD is the two-digit day of the month.
// * XX is an incremental counter for the given date of the plugin version's 
//   release.
//   
// Type: Integer
// Status: Required
$plugin->version = 2018052300;

// This is the named version. Should match the version tag on the master branch
// of the source code.
//
// Type: String
// Status: Recommended
$plugin->release = '0.1.0';

// The stability level of the plugin.
//
// Type: MATURITY_ALPHA | MATURITY_BETA | MATURITY_RC | MATURITY_STABLE
// Status: Recommended
$plugin->maturity = MATURITY_ALPHA;

// This is the version of Moodle this plugin requires.
// 
// Type: Integer
// Status: Recommended
$plugin->requires = 2017102500;

// This is a list of plugins, this plugin depends on (and their versions).
//
// Type: Array
// Status: Recommended
$plugin->dependencies = [
    'theme_moove' => 2018042000
];
