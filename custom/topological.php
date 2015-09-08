<?php
/*
** OnceMon
** Copyright (C) 2014-2015 ISCAS
**
** This program is free software; you can redistribute it and/or modify
** it under the terms of the GNU General Public License as published by
** the Free Software Foundation; either version 2 of the License, or
** (at your option) any later version.
**
** This program is distributed in the hope that it will be useful,
** but WITHOUT ANY WARRANTY; without even the implied warranty of
** MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
** GNU General Public License for more details.
**
** You should have received a copy of the GNU General Public License
** along with this program; if not, write to the Free Software
** Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
**/


require_once dirname(__FILE__).'/include/config.inc.php';
require_once dirname(__FILE__).'/include/hosts.inc.php';

$page['title'] = _('Configuration  of host groups');
$page['file'] = 'topological.php';
$page['hist_arg'] = array();

require_once dirname(__FILE__).'/include/page_header.php';


$_REQUEST['go'] = get_request('go', 'none');

// render view
$hostgroupView = new CView('cluster.topological', null);
$hostgroupView->render();
$hostgroupView->show();

require_once dirname(__FILE__).'/include/page_footer.php';