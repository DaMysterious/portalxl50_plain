<?php
/*
*
* @name center_forumblock_index.php
* @package phpBB3 Portal XL 5.0
* @version $Id: center_forumblock_index.php,v 1.2 2009/05/15 22:32:06 portalxl group Exp $
*
* @copyright (c) 2007, 2014 PortalXL Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
*/

/*
* Start session management
*/

/*
* Begin block script here
*/

//display_forums('', $config['load_moderators']);

// Set the filename of the template you want to use for this file.
$template->set_filenames(array(
    'body' => 'portal/block/center_forumblock_index.html',
	));

?>