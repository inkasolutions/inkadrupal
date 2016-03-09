<?php

/**
 * @file
 * Drupal site instance-specific configuration file
 *
 * Copy this file and change the name to 'settings.local.php' and use
 * it to override settings that should only apply locally (most
 * obviously, the database).
 * 
 * Note that settings.local.php will be excluded from version control
 */
$databases = array (
  'default' =>
  array (
    'default' =>
    array (
      'driver' => 'mysql',
      'database' => 'dbname',
      'username' => 'root',
      'password' => 'password',
      'host' => 'localhost',
      'prefix' => '',
    ),
  ),
);

$base_url = 'http://sitename.local';

/**
 * Error reporting
 *
 * Uncomment the following lines to enable error reporting
 * in development environments
 */
# error_reporting(-1);  // Have PHP complain about absolutely everything.
# $conf['error_level'] = 2;  // Show all messages on your screen
# ini_set('display_errors', TRUE);  // These lines give you content on WSOD pages.
# ini_set('display_startup_errors', TRUE);

/**
 * Uncomment the following to disable CSS and JS aggregation locally.
 */
# $conf['securepages_enable'] = FALSE;
# $conf['preprocess_css'] = 0;
# $conf['preprocess_js'] = 0;

/**
 * Log mail
 * 
 * To disable email notifications, use the following snippets to route
 * email through the Devel module mail log. One file will be written per
 * message.
 *
 * By default, mail log writes emails to temporary://devel-mails. To
 * save to a different folder, set devel_debug_mail_directory.
 *
 * Requirements: Devel module
 */
# $conf['mail_system'] = array(
#  'default-system' => 'DevelMailLog',
# );
# $conf['devel_debug_mail_directory'] = '/path/to/folder';
