Use dashicons within Moodle
===========================

Dashicons is an aesthetic icon font released by Automattic, the folks behind
WordPress. This plugin enables their usage throughout Moodle by simply including
the Dashicons sheet.

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/LukeCarrier/moodle-local_dashicons/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/LukeCarrier/moodle-local_dashicons/?branch=master)

License
-------

    Copyright (c) Luke Carrier, The Development Manager Ltd

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.

Requirements
------------

* Moodle 2.5+
* PHP 5.3+

Building
--------

1. Clone this repository, and ````cd```` into it
2. Obtain all the submodules with ```git submodule init``` and
   ```git submodule update```
3. Execute ````make```` to generate a zip file containing the plugin
4. Upload to the ````moodle.org```` plugins site
