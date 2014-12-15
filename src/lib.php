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
 * Dashicons for Moodle.
 *
 * @license GPL v3
 * @author Luke Carrier <luke@tdm.co>
 * @copyright 2014 The Development Manager Ltd
 */

defined('MOODLE_INTERNAL') || die;

/**
 * Register CSS with page_requirements_manager.
 *
 * @return void
 */
function local_dashicons_requirements() {
    global $PAGE;

    if ((defined('AJAX_SCRIPT') && AJAX_SCRIPT)
            || (defined('CLI_SCRIPT') && CLI_SCRIPT)
            || $PAGE->headerprinted
            || during_initial_install()) {
        return;
    }

    $PAGE->requires->css('/local/dashicons/vendor/dashicons/css/dashicons.css');
}

local_dashicons_requirements();
