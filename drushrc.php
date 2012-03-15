<?php 


$options['db_type'] = 'mysql';
$options['db_host'] = 'localhost';
$options['db_port'] = '3306';
$options['db_passwd'] = 'jj6wFW7nvr';
$options['db_name'] = 'drupalsdcom_0';
$options['db_user'] = 'drupalsdcom_0';
$options['packages'] = array (
  'platforms' => 
  array (
    'drupal' => 
    array (
      'short_name' => 'drupal',
      'version' => '7.12',
      'description' => 'This platform is running Drupal 7.12',
    ),
  ),
  'profiles' => 
  array (
    'standard' => 
    array (
      'name' => 'standard',
      'filename' => '/var/aegir/platforms/drupal-7.12/profiles/standard/standard.profile',
      'project' => 'drupal',
      'info' => 
      array (
        'name' => 'Standard',
        'description' => 'Install with commonly used features pre-configured.',
        'version' => '7.12',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'block',
          1 => 'color',
          2 => 'comment',
          3 => 'contextual',
          4 => 'dashboard',
          5 => 'help',
          6 => 'image',
          7 => 'list',
          8 => 'menu',
          9 => 'number',
          10 => 'options',
          11 => 'path',
          12 => 'taxonomy',
          13 => 'dblog',
          14 => 'search',
          15 => 'shortcut',
          16 => 'toolbar',
          17 => 'overlay',
          18 => 'field_ui',
          19 => 'file',
          20 => 'rdf',
        ),
        'files' => 
        array (
          0 => 'standard.profile',
        ),
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'php' => '5.2.4',
        'languages' => 
        array (
          0 => 'en',
        ),
        'old_short_name' => 'default',
      ),
      'version' => '7.12',
      'status' => 1,
    ),
  ),
  'modules' => 
  array (
    'aaa_update_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/update/tests/aaa_update_test.module',
      'name' => 'aaa_update_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'AAA Update test',
        'description' => 'Support module for update module testing.',
        'package' => 'Testing',
        'core' => '7.x',
        'hidden' => true,
        'version' => '7.12',
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'actions_loop_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/simpletest/tests/actions_loop_test.module',
      'name' => 'actions_loop_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Actions loop test',
        'description' => 'Support module for action loop testing.',
        'package' => 'Testing',
        'version' => '7.12',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'admin_devel' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/sites/all/modules/admin_menu/admin_devel/admin_devel.module',
      'name' => 'admin_devel',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Administration Development tools',
        'description' => 'Administration and debugging functionality for developers and site builders.',
        'package' => 'Administration',
        'core' => '7.x',
        'scripts' => 
        array (
          0 => 'admin_devel.js',
        ),
        'files' => 
        array (
          0 => 'admin_devel.module',
        ),
        'version' => '7.x-3.0-rc1',
        'project' => 'admin_menu',
        'datestamp' => '1294378870',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'admin_menu',
      'version' => '7.x-3.0-rc1',
    ),
    'admin_menu' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/sites/all/modules/admin_menu/admin_menu.module',
      'name' => 'admin_menu',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7303',
      'weight' => '100',
      'info' => 
      array (
        'name' => 'Administration menu',
        'description' => 'Provides a dropdown menu to most administrative tasks and other common destinations (to users with the proper permissions).',
        'package' => 'Administration',
        'configure' => 'admin/config/administration/admin_menu',
        'version' => '7.x-3.0-rc1',
        'core' => '7.x',
        'project' => 'admin_menu',
        'files' => 
        array (
          0 => 'tests/admin_menu.test',
        ),
        'datestamp' => '1294378870',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'admin_menu',
      'version' => '7.x-3.0-rc1',
    ),
    'admin_menu_toolbar' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/sites/all/modules/admin_menu/admin_menu_toolbar/admin_menu_toolbar.module',
      'name' => 'admin_menu_toolbar',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Administration menu Toolbar style',
        'description' => 'A better Toolbar.',
        'package' => 'Administration',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'admin_menu',
        ),
        'files' => 
        array (
          0 => 'admin_menu_toolbar.module',
          1 => 'admin_menu_toolbar.install',
        ),
        'version' => '7.x-3.0-rc1',
        'project' => 'admin_menu',
        'datestamp' => '1294378870',
        'php' => '5.2.4',
      ),
      'project' => 'admin_menu',
      'version' => '7.x-3.0-rc1',
    ),
    'admin_views' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/sites/all/modules/admin_menu/admin_views/admin_views.module',
      'name' => 'admin_views',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Administration views',
        'description' => 'Replaces all system object management pages in Drupal core with real views.',
        'package' => 'Administration',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'views',
          1 => 'views_bulk_operations',
        ),
        'files' => 
        array (
          0 => 'admin_views.module',
          1 => 'plugins/views_plugin_display_system.inc',
        ),
        'version' => '7.x-3.0-rc1',
        'project' => 'admin_menu',
        'datestamp' => '1294378870',
        'php' => '5.2.4',
      ),
      'project' => 'admin_menu',
      'version' => '7.x-3.0-rc1',
    ),
    'aggregator' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/aggregator/aggregator.module',
      'name' => 'aggregator',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Aggregator',
        'description' => 'Aggregates syndicated content (RSS, RDF, and Atom feeds).',
        'package' => 'Core',
        'version' => '7.12',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'aggregator.test',
        ),
        'configure' => 'admin/config/services/aggregator/settings',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'aggregator.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'aggregator_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/aggregator/tests/aggregator_test.module',
      'name' => 'aggregator_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Aggregator module tests',
        'description' => 'Support module for aggregator related testing.',
        'package' => 'Testing',
        'version' => '7.12',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'ajax_forms_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/simpletest/tests/ajax_forms_test.module',
      'name' => 'ajax_forms_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'AJAX form test mock module',
        'description' => 'Test for AJAX form calls.',
        'core' => '7.x',
        'package' => 'Testing',
        'version' => '7.12',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'ajax_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/simpletest/tests/ajax_test.module',
      'name' => 'ajax_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'AJAX Test',
        'description' => 'Support module for AJAX framework tests.',
        'package' => 'Testing',
        'version' => '7.12',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'backup_migrate' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/sites/all/modules/backup_migrate/backup_migrate.module',
      'name' => 'backup_migrate',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7200',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Backup and Migrate',
        'description' => 'Backup or migrate the Drupal Database quickly and without unnecessary data.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'backup_migrate.module',
          1 => 'backup_migrate.install',
          2 => 'includes/destinations.inc',
          3 => 'includes/profiles.inc',
          4 => 'includes/schedules.inc',
        ),
        'version' => '7.x-2.2',
        'project' => 'backup_migrate',
        'datestamp' => '1310528214',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'backup_migrate',
      'version' => '7.x-2.2',
    ),
    'batch_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/simpletest/tests/batch_test.module',
      'name' => 'batch_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Batch API test',
        'description' => 'Support module for Batch API tests.',
        'package' => 'Testing',
        'version' => '7.12',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'bbb_update_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/update/tests/bbb_update_test.module',
      'name' => 'bbb_update_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'BBB Update test',
        'description' => 'Support module for update module testing.',
        'package' => 'Testing',
        'core' => '7.x',
        'hidden' => true,
        'version' => '7.12',
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'block' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/block/block.module',
      'name' => 'block',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7008',
      'weight' => '-5',
      'info' => 
      array (
        'name' => 'Block',
        'description' => 'Controls the visual building blocks a page is constructed with. Blocks are boxes of content rendered into an area, or region, of a web page.',
        'package' => 'Core',
        'version' => '7.12',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'block.test',
        ),
        'configure' => 'admin/structure/block',
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'block_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/block/tests/block_test.module',
      'name' => 'block_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Block test',
        'description' => 'Provides test blocks.',
        'package' => 'Testing',
        'version' => '7.12',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'blog' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/blog/blog.module',
      'name' => 'blog',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Blog',
        'description' => 'Enables multi-user blogs.',
        'package' => 'Core',
        'version' => '7.12',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'blog.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'book' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/book/book.module',
      'name' => 'book',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Book',
        'description' => 'Allows users to create and organize related content in an outline.',
        'package' => 'Core',
        'version' => '7.12',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'book.test',
        ),
        'configure' => 'admin/content/book/settings',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'book.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'bulk_export' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/sites/all/modules/ctools/bulk_export/bulk_export.module',
      'name' => 'bulk_export',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Bulk Export',
        'description' => 'Performs bulk exporting of data objects known about by Chaos tools.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'package' => 'Chaos tool suite',
        'version' => '7.x-1.0-rc1',
        'project' => 'ctools',
        'datestamp' => '1311894415',
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.0-rc1',
    ),
    'ccc_update_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/update/tests/ccc_update_test.module',
      'name' => 'ccc_update_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'CCC Update test',
        'description' => 'Support module for update module testing.',
        'package' => 'Testing',
        'core' => '7.x',
        'hidden' => true,
        'version' => '7.12',
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'color' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/color/color.module',
      'name' => 'color',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Color',
        'description' => 'Allows administrators to change the color scheme of compatible themes.',
        'package' => 'Core',
        'version' => '7.12',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'color.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'comment' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/comment/comment.module',
      'name' => 'comment',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7009',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Comment',
        'description' => 'Allows users to comment on and discuss published content.',
        'package' => 'Core',
        'version' => '7.12',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'text',
        ),
        'files' => 
        array (
          0 => 'comment.module',
          1 => 'comment.test',
        ),
        'configure' => 'admin/content/comment',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'comment.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'common_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/simpletest/tests/common_test.module',
      'name' => 'common_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Common Test',
        'description' => 'Support module for Common tests.',
        'package' => 'Testing',
        'version' => '7.12',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'common_test.css',
          ),
          'print' => 
          array (
            0 => 'common_test.print.css',
          ),
        ),
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'common_test_cron_helper' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/simpletest/tests/common_test_cron_helper.module',
      'name' => 'common_test_cron_helper',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Common Test Cron Helper',
        'description' => 'Helper module for CronRunTestCase::testCronExceptions().',
        'package' => 'Testing',
        'version' => '7.12',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'contact' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/contact/contact.module',
      'name' => 'contact',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Contact',
        'description' => 'Enables the use of both personal and site-wide contact forms.',
        'package' => 'Core',
        'version' => '7.12',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'contact.test',
        ),
        'configure' => 'admin/structure/contact',
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'context' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/sites/all/modules/context/context.module',
      'name' => 'context',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Context',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'description' => 'Provide modules with a cache that lasts for a single page request.',
        'package' => 'Context',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'context.module',
          1 => 'tests/context.test',
          2 => 'tests/context.conditions.test',
          3 => 'tests/context.reactions.test',
        ),
        'version' => '7.x-3.0-beta2',
        'project' => 'context',
        'datestamp' => '1315543301',
        'php' => '5.2.4',
      ),
      'project' => 'context',
      'version' => '7.x-3.0-beta2',
    ),
    'contextual' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/contextual/contextual.module',
      'name' => 'contextual',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Contextual links',
        'description' => 'Provides contextual links to perform actions related to elements on a page.',
        'package' => 'Core',
        'version' => '7.12',
        'core' => '7.x',
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'context_layouts' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/sites/all/modules/context/context_layouts/context_layouts.module',
      'name' => 'context_layouts',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Context layouts',
        'description' => 'Allow theme layer to provide multiple region layouts and integrate with context.',
        'dependencies' => 
        array (
          0 => 'context',
        ),
        'package' => 'Context',
        'core' => '7.x',
        'version' => '7.x-3.0-beta2',
        'project' => 'context',
        'datestamp' => '1315543301',
        'php' => '5.2.4',
      ),
      'project' => 'context',
      'version' => '7.x-3.0-beta2',
    ),
    'context_ui' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/sites/all/modules/context/context_ui/context_ui.module',
      'name' => 'context_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Context UI',
        'description' => 'Provides a simple UI for settings up a site structure using Context.',
        'dependencies' => 
        array (
          0 => 'context',
        ),
        'package' => 'Context',
        'core' => '7.x',
        'configure' => 'admin/structure/context',
        'files' => 
        array (
          0 => 'context.module',
          1 => 'tests/context_ui.test',
        ),
        'version' => '7.x-3.0-beta2',
        'project' => 'context',
        'datestamp' => '1315543301',
        'php' => '5.2.4',
      ),
      'project' => 'context',
      'version' => '7.x-3.0-beta2',
    ),
    'ctools' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/sites/all/modules/ctools/ctools.module',
      'name' => 'ctools',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '6007',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Chaos tools',
        'description' => 'A library of helpful tools by Merlin of Chaos.',
        'core' => '7.x',
        'package' => 'Chaos tool suite',
        'files' => 
        array (
          0 => 'includes/context.inc',
          1 => 'includes/math-expr.inc',
          2 => 'includes/stylizer.inc',
        ),
        'version' => '7.x-1.0-rc1',
        'project' => 'ctools',
        'datestamp' => '1311894415',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.0-rc1',
    ),
    'ctools_access_ruleset' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/sites/all/modules/ctools/ctools_access_ruleset/ctools_access_ruleset.module',
      'name' => 'ctools_access_ruleset',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Custom rulesets',
        'description' => 'Create custom, exportable, reusable access rulesets for applications like Panels.',
        'core' => '7.x',
        'package' => 'Chaos tool suite',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'version' => '7.x-1.0-rc1',
        'project' => 'ctools',
        'datestamp' => '1311894415',
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.0-rc1',
    ),
    'ctools_ajax_sample' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/sites/all/modules/ctools/ctools_ajax_sample/ctools_ajax_sample.module',
      'name' => 'ctools_ajax_sample',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Chaos Tools (CTools) AJAX Example',
        'description' => 'Shows how to use the power of Chaos AJAX.',
        'package' => 'Chaos tool suite',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'core' => '7.x',
        'version' => '7.x-1.0-rc1',
        'project' => 'ctools',
        'datestamp' => '1311894415',
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.0-rc1',
    ),
    'ctools_custom_content' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/sites/all/modules/ctools/ctools_custom_content/ctools_custom_content.module',
      'name' => 'ctools_custom_content',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Custom content panes',
        'description' => 'Create custom, exportable, reusable content panes for applications like Panels.',
        'core' => '7.x',
        'package' => 'Chaos tool suite',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'version' => '7.x-1.0-rc1',
        'project' => 'ctools',
        'datestamp' => '1311894415',
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.0-rc1',
    ),
    'ctools_plugin_example' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/sites/all/modules/ctools/ctools_plugin_example/ctools_plugin_example.module',
      'name' => 'ctools_plugin_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Chaos Tools (CTools) Plugin Example',
        'description' => 'Shows how an external module can provide ctools plugins (for Panels, etc.).',
        'package' => 'Chaos tool suite',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'panels',
          2 => 'page_manager',
          3 => 'advanced_help',
        ),
        'core' => '7.x',
        'version' => '7.x-1.0-rc1',
        'project' => 'ctools',
        'datestamp' => '1311894415',
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.0-rc1',
    ),
    'ctools_plugin_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/sites/all/modules/ctools/tests/ctools_plugin_test.module',
      'name' => 'ctools_plugin_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Chaos tools plugins test',
        'description' => 'Provides hooks for testing ctools plugins.',
        'package' => 'Chaos tool suite',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'files' => 
        array (
          0 => 'ctools.plugins.test',
          1 => 'object_cache.test',
        ),
        'hidden' => true,
        'version' => '7.x-1.0-rc1',
        'project' => 'ctools',
        'datestamp' => '1311894415',
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.0-rc1',
    ),
    'dashboard' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/dashboard/dashboard.module',
      'name' => 'dashboard',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Dashboard',
        'description' => 'Provides a dashboard page in the administrative interface for organizing administrative tasks and tracking information within your site.',
        'core' => '7.x',
        'package' => 'Core',
        'version' => '7.12',
        'files' => 
        array (
          0 => 'dashboard.test',
        ),
        'dependencies' => 
        array (
          0 => 'block',
        ),
        'configure' => 'admin/dashboard/customize',
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'database_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/simpletest/tests/database_test.module',
      'name' => 'database_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Database Test',
        'description' => 'Support module for Database layer tests.',
        'core' => '7.x',
        'package' => 'Testing',
        'version' => '7.12',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'dblog' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/dblog/dblog.module',
      'name' => 'dblog',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '1',
      'schema_version' => '7001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Database logging',
        'description' => 'Logs and records system events to the database.',
        'package' => 'Core',
        'version' => '7.12',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'dblog.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'drupal_system_listing_compatible_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/simpletest/tests/drupal_system_listing_compatible_test/drupal_system_listing_compatible_test.module',
      'name' => 'drupal_system_listing_compatible_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Drupal system listing compatible test',
        'description' => 'Support module for testing the drupal_system_listing function.',
        'package' => 'Testing',
        'version' => '7.12',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'drupal_system_listing_incompatible_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/simpletest/tests/drupal_system_listing_incompatible_test/drupal_system_listing_incompatible_test.module',
      'name' => 'drupal_system_listing_incompatible_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Drupal system listing incompatible test',
        'description' => 'Support module for testing the drupal_system_listing function.',
        'package' => 'Testing',
        'version' => '7.12',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'entity_cache_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/simpletest/tests/entity_cache_test.module',
      'name' => 'entity_cache_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Entity cache test',
        'description' => 'Support module for testing entity cache.',
        'package' => 'Testing',
        'version' => '7.12',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'entity_cache_test_dependency',
        ),
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'entity_cache_test_dependency' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/simpletest/tests/entity_cache_test_dependency.module',
      'name' => 'entity_cache_test_dependency',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Entity cache test dependency',
        'description' => 'Support dependency module for testing entity cache.',
        'package' => 'Testing',
        'version' => '7.12',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'entity_crud_hook_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/simpletest/tests/entity_crud_hook_test.module',
      'name' => 'entity_crud_hook_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Entity CRUD Hooks Test',
        'description' => 'Support module for CRUD hook tests.',
        'core' => '7.x',
        'package' => 'Testing',
        'version' => '7.12',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'error_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/simpletest/tests/error_test.module',
      'name' => 'error_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Error test',
        'description' => 'Support module for error and exception testing.',
        'package' => 'Testing',
        'version' => '7.12',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'field' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/field/field.module',
      'name' => 'field',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Field',
        'description' => 'Field API to add fields to entities like nodes and users.',
        'package' => 'Core',
        'version' => '7.12',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'field.module',
          1 => 'field.attach.inc',
          2 => 'tests/field.test',
        ),
        'dependencies' => 
        array (
          0 => 'field_sql_storage',
        ),
        'required' => true,
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'theme/field.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'field_sql_storage' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/field/modules/field_sql_storage/field_sql_storage.module',
      'name' => 'field_sql_storage',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Field SQL storage',
        'description' => 'Stores field data in an SQL database.',
        'package' => 'Core',
        'version' => '7.12',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'field_sql_storage.test',
        ),
        'required' => true,
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'field_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/field/tests/field_test.module',
      'name' => 'field_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Field API Test',
        'description' => 'Support module for the Field API tests.',
        'core' => '7.x',
        'package' => 'Testing',
        'files' => 
        array (
          0 => 'field_test.entity.inc',
        ),
        'version' => '7.12',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'field_ui' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/field_ui/field_ui.module',
      'name' => 'field_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Field UI',
        'description' => 'User interface for the Field API.',
        'package' => 'Core',
        'version' => '7.12',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'field_ui.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'file' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/file/file.module',
      'name' => 'file',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'File',
        'description' => 'Defines a file field type.',
        'package' => 'Core',
        'version' => '7.12',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'tests/file.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'file_module_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/file/tests/file_module_test.module',
      'name' => 'file_module_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'File test',
        'description' => 'Provides hooks for testing File module functionality.',
        'package' => 'Core',
        'version' => '7.12',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'file_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/simpletest/tests/file_test.module',
      'name' => 'file_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'File test',
        'description' => 'Support module for file handling tests.',
        'package' => 'Testing',
        'version' => '7.12',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'file_test.module',
        ),
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'filter' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/filter/filter.module',
      'name' => 'filter',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7010',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Filter',
        'description' => 'Filters content in preparation for display.',
        'package' => 'Core',
        'version' => '7.12',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'filter.test',
        ),
        'required' => true,
        'configure' => 'admin/config/content/formats',
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'filter_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/simpletest/tests/filter_test.module',
      'name' => 'filter_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Filter test module',
        'description' => 'Tests filter hooks and functions.',
        'package' => 'Testing',
        'version' => '7.12',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'flag' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/sites/all/modules/flag/flag.module',
      'name' => 'flag',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Flag',
        'description' => 'Create customized flags that users can set on content.',
        'core' => '7.x',
        'package' => 'Flags',
        'configure' => 'admin/structure/flags',
        'files' => 
        array (
          0 => 'flag.inc',
          1 => 'flag.rules.inc',
          2 => 'includes/flag_handler_argument_content_id.inc',
          3 => 'includes/flag_handler_field_ops.inc',
          4 => 'includes/flag_handler_filter_flagged.inc',
          5 => 'includes/flag_handler_relationships.inc',
          6 => 'includes/flag_plugin_argument_validate_flaggability.inc',
          7 => 'tests/flag.test',
        ),
        'version' => '7.x-2.0-beta6',
        'project' => 'flag',
        'datestamp' => '1315511522',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'flag',
      'version' => '7.x-2.0-beta6',
    ),
    'flag_actions' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/sites/all/modules/flag/flag_actions.module',
      'name' => 'flag_actions',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Flag actions',
        'description' => 'Execute actions on Flag events.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'flag',
        ),
        'package' => 'Flags',
        'configure' => 'admin/structure/webform/flags',
        'files' => 
        array (
          0 => 'flag.install',
          1 => 'flag_actions.module',
        ),
        'version' => '7.x-2.0-beta6',
        'project' => 'flag',
        'datestamp' => '1315511522',
        'php' => '5.2.4',
      ),
      'project' => 'flag',
      'version' => '7.x-2.0-beta6',
    ),
    'flag_terms' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/sites/all/modules/flag_terms/flag_terms.module',
      'name' => 'flag_terms',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Flag terms',
        'description' => 'Allows users to flag taxonomy terms.',
        'core' => '7.x',
        'package' => 'Flags',
        'configure' => 'admin/structure/flags',
        'dependencies' => 
        array (
          0 => 'flag',
        ),
        'files' => 
        array (
          0 => 'flag_terms.inc',
        ),
        'version' => '7.x-1.x-dev',
        'project' => 'flag_terms',
        'datestamp' => '1316132677',
        'php' => '5.2.4',
      ),
      'project' => 'flag_terms',
      'version' => '7.x-1.x-dev',
    ),
    'form_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/simpletest/tests/form_test.module',
      'name' => 'form_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'FormAPI Test',
        'description' => 'Support module for Form API tests.',
        'package' => 'Testing',
        'version' => '7.12',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'forum' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/forum/forum.module',
      'name' => 'forum',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Forum',
        'description' => 'Provides discussion forums.',
        'dependencies' => 
        array (
          0 => 'taxonomy',
          1 => 'comment',
        ),
        'package' => 'Core',
        'version' => '7.12',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'forum.test',
        ),
        'configure' => 'admin/structure/forum',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'forum.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'help' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/help/help.module',
      'name' => 'help',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Help',
        'description' => 'Manages the display of online help.',
        'package' => 'Core',
        'version' => '7.12',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'help.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'image' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/image/image.module',
      'name' => 'image',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7004',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Image',
        'description' => 'Provides image manipulation tools.',
        'package' => 'Core',
        'version' => '7.12',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'file',
        ),
        'files' => 
        array (
          0 => 'image.test',
        ),
        'configure' => 'admin/config/media/image-styles',
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'image_module_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/image/tests/image_module_test.module',
      'name' => 'image_module_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Image test',
        'description' => 'Provides hook implementations for testing Image module functionality.',
        'package' => 'Core',
        'version' => '7.12',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'image_module_test.module',
        ),
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'image_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/simpletest/tests/image_test.module',
      'name' => 'image_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Image test',
        'description' => 'Support module for image toolkit tests.',
        'package' => 'Testing',
        'version' => '7.12',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'list' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/field/modules/list/list.module',
      'name' => 'list',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'List',
        'description' => 'Defines list field types. Use with Options to create selection lists.',
        'package' => 'Core',
        'version' => '7.12',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
          1 => 'options',
        ),
        'files' => 
        array (
          0 => 'tests/list.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'list_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/field/modules/list/tests/list_test.module',
      'name' => 'list_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'List test',
        'description' => 'Support module for the List module tests.',
        'core' => '7.x',
        'package' => 'Testing',
        'version' => '7.12',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'locale' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/locale/locale.module',
      'name' => 'locale',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Locale',
        'description' => 'Adds language handling functionality and enables the translation of the user interface to languages other than English.',
        'package' => 'Core',
        'version' => '7.12',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'locale.test',
        ),
        'configure' => 'admin/config/regional/language',
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'locale_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/locale/tests/locale_test.module',
      'name' => 'locale_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Locale Test',
        'description' => 'Support module for the locale layer tests.',
        'core' => '7.x',
        'package' => 'Testing',
        'version' => '7.12',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'masquerade' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/sites/all/modules/masquerade/masquerade.module',
      'name' => 'masquerade',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '-10',
      'info' => 
      array (
        'name' => 'Masquerade',
        'description' => 'This module allows permitted users to masquerade as other users.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'masquerade.test',
        ),
        'configure' => 'admin/config/people/masquerade',
        'version' => '7.x-1.0-rc4',
        'project' => 'masquerade',
        'datestamp' => '1316220424',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'masquerade',
      'version' => '7.x-1.0-rc4',
    ),
    'menu' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/menu/menu.module',
      'name' => 'menu',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7003',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Menu',
        'description' => 'Allows administrators to customize the site navigation menu.',
        'package' => 'Core',
        'version' => '7.12',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'menu.test',
        ),
        'configure' => 'admin/structure/menu',
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'menu_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/simpletest/tests/menu_test.module',
      'name' => 'menu_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Hook menu tests',
        'description' => 'Support module for menu hook testing.',
        'package' => 'Testing',
        'version' => '7.12',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'module_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/simpletest/tests/module_test.module',
      'name' => 'module_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Module test',
        'description' => 'Support module for module system testing.',
        'package' => 'Testing',
        'version' => '7.12',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'node' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/node/node.module',
      'name' => 'node',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7012',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Node',
        'description' => 'Allows content to be submitted to the site and displayed on pages.',
        'package' => 'Core',
        'version' => '7.12',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'node.module',
          1 => 'node.test',
        ),
        'required' => true,
        'configure' => 'admin/structure/types',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'node.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'node_access_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/node/tests/node_access_test.module',
      'name' => 'node_access_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Node module access tests',
        'description' => 'Support module for node permission testing.',
        'package' => 'Testing',
        'version' => '7.12',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'node_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/node/tests/node_test.module',
      'name' => 'node_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Node module tests',
        'description' => 'Support module for node related testing.',
        'package' => 'Testing',
        'version' => '7.12',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'node_test_exception' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/node/tests/node_test_exception.module',
      'name' => 'node_test_exception',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Node module exception tests',
        'description' => 'Support module for node related exception testing.',
        'package' => 'Testing',
        'version' => '7.12',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'number' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/field/modules/number/number.module',
      'name' => 'number',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Number',
        'description' => 'Defines numeric field types.',
        'package' => 'Core',
        'version' => '7.12',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'number.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'openid' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/openid/openid.module',
      'name' => 'openid',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'OpenID',
        'description' => 'Allows users to log into your site using OpenID.',
        'version' => '7.12',
        'package' => 'Core',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'openid.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'openid_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/openid/tests/openid_test.module',
      'name' => 'openid_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'OpenID dummy provider',
        'description' => 'OpenID provider used for testing.',
        'package' => 'Testing',
        'version' => '7.12',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'openid',
        ),
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'options' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/field/modules/options/options.module',
      'name' => 'options',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Options',
        'description' => 'Defines selection, check box and radio button widgets for text and numeric fields.',
        'package' => 'Core',
        'version' => '7.12',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'options.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'overlay' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/overlay/overlay.module',
      'name' => 'overlay',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '1',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Overlay',
        'description' => 'Displays the Drupal administration interface in an overlay.',
        'package' => 'Core',
        'version' => '7.12',
        'core' => '7.x',
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'page_manager' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/sites/all/modules/ctools/page_manager/page_manager.module',
      'name' => 'page_manager',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '99',
      'info' => 
      array (
        'name' => 'Page manager',
        'description' => 'Provides a UI and API to manage pages within the site.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'package' => 'Chaos tool suite',
        'version' => '7.x-1.0-rc1',
        'project' => 'ctools',
        'datestamp' => '1311894415',
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.0-rc1',
    ),
    'path' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/path/path.module',
      'name' => 'path',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Path',
        'description' => 'Allows users to rename URLs.',
        'package' => 'Core',
        'version' => '7.12',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'path.test',
        ),
        'configure' => 'admin/config/search/path',
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'php' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/php/php.module',
      'name' => 'php',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'PHP filter',
        'description' => 'Allows embedded PHP code/snippets to be evaluated.',
        'package' => 'Core',
        'version' => '7.12',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'php.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'poll' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/poll/poll.module',
      'name' => 'poll',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Poll',
        'description' => 'Allows your site to capture votes on different topics in the form of multiple choice questions.',
        'package' => 'Core',
        'version' => '7.12',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'poll.test',
        ),
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'poll.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'profile' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/profile/profile.module',
      'name' => 'profile',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Profile',
        'description' => 'Supports configurable user profiles.',
        'package' => 'Core',
        'version' => '7.12',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'profile.test',
        ),
        'configure' => 'admin/config/people/profile',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'rdf' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/rdf/rdf.module',
      'name' => 'rdf',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'RDF',
        'description' => 'Enriches your content with metadata to let other applications (e.g. search engines, aggregators) better understand its relationships and attributes.',
        'package' => 'Core',
        'version' => '7.12',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'rdf.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'rdf_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/rdf/tests/rdf_test.module',
      'name' => 'rdf_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'RDF module tests',
        'description' => 'Support module for RDF module testing.',
        'package' => 'Testing',
        'version' => '7.12',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'requirements1_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/simpletest/tests/requirements1_test.module',
      'name' => 'requirements1_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Requirements 1 Test',
        'description' => 'Tests that a module is not installed when it fails hook_requirements(\'install\').',
        'package' => 'Testing',
        'version' => '7.12',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'requirements2_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/simpletest/tests/requirements2_test.module',
      'name' => 'requirements2_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Requirements 2 Test',
        'description' => 'Tests that a module is not installed when the one it depends on fails hook_requirements(\'install).',
        'dependencies' => 
        array (
          0 => 'requirements1_test',
          1 => 'comment',
        ),
        'package' => 'Testing',
        'version' => '7.12',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'search' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/search/search.module',
      'name' => 'search',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Search',
        'description' => 'Enables site-wide keyword searching.',
        'package' => 'Core',
        'version' => '7.12',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'search.extender.inc',
          1 => 'search.test',
        ),
        'configure' => 'admin/config/search/settings',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'search.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'search_embedded_form' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/search/tests/search_embedded_form.module',
      'name' => 'search_embedded_form',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Search embedded form',
        'description' => 'Support module for search module testing of embedded forms.',
        'package' => 'Testing',
        'version' => '7.12',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'search_extra_type' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/search/tests/search_extra_type.module',
      'name' => 'search_extra_type',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Test search type',
        'description' => 'Support module for search module testing.',
        'package' => 'Testing',
        'version' => '7.12',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'session_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/simpletest/tests/session_test.module',
      'name' => 'session_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Session test',
        'description' => 'Support module for session data testing.',
        'package' => 'Testing',
        'version' => '7.12',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'shortcut' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/shortcut/shortcut.module',
      'name' => 'shortcut',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Shortcut',
        'description' => 'Allows users to manage customizable lists of shortcut links.',
        'package' => 'Core',
        'version' => '7.12',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'shortcut.test',
        ),
        'configure' => 'admin/config/user-interface/shortcut',
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'simpletest' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/simpletest/simpletest.module',
      'name' => 'simpletest',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Testing',
        'description' => 'Provides a framework for unit and functional testing.',
        'package' => 'Core',
        'version' => '7.12',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'simpletest.test',
          1 => 'drupal_web_test_case.php',
          2 => 'tests/actions.test',
          3 => 'tests/ajax.test',
          4 => 'tests/batch.test',
          5 => 'tests/bootstrap.test',
          6 => 'tests/cache.test',
          7 => 'tests/common.test',
          8 => 'tests/database_test.test',
          9 => 'tests/entity_crud_hook_test.test',
          10 => 'tests/entity_query.test',
          11 => 'tests/error.test',
          12 => 'tests/file.test',
          13 => 'tests/filetransfer.test',
          14 => 'tests/form.test',
          15 => 'tests/graph.test',
          16 => 'tests/image.test',
          17 => 'tests/lock.test',
          18 => 'tests/mail.test',
          19 => 'tests/menu.test',
          20 => 'tests/module.test',
          21 => 'tests/password.test',
          22 => 'tests/path.test',
          23 => 'tests/registry.test',
          24 => 'tests/schema.test',
          25 => 'tests/session.test',
          26 => 'tests/tablesort.test',
          27 => 'tests/theme.test',
          28 => 'tests/unicode.test',
          29 => 'tests/update.test',
          30 => 'tests/xmlrpc.test',
          31 => 'tests/upgrade/upgrade.test',
          32 => 'tests/upgrade/upgrade.comment.test',
          33 => 'tests/upgrade/upgrade.filter.test',
          34 => 'tests/upgrade/upgrade.forum.test',
          35 => 'tests/upgrade/upgrade.locale.test',
          36 => 'tests/upgrade/upgrade.menu.test',
          37 => 'tests/upgrade/upgrade.node.test',
          38 => 'tests/upgrade/upgrade.taxonomy.test',
          39 => 'tests/upgrade/upgrade.translatable.test',
          40 => 'tests/upgrade/upgrade.upload.test',
          41 => 'tests/upgrade/upgrade.user.test',
        ),
        'configure' => 'admin/config/development/testing/settings',
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'standard' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/profiles/standard/standard.profile',
      'name' => 'standard',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '1000',
      'info' => 
      array (
        'name' => 'Standard',
        'description' => 'Install with commonly used features pre-configured.',
        'version' => '7.12',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'block',
          1 => 'color',
          2 => 'comment',
          3 => 'contextual',
          4 => 'dashboard',
          5 => 'help',
          6 => 'image',
          7 => 'list',
          8 => 'menu',
          9 => 'number',
          10 => 'options',
          11 => 'path',
          12 => 'taxonomy',
          13 => 'dblog',
          14 => 'search',
          15 => 'shortcut',
          16 => 'toolbar',
          17 => 'overlay',
          18 => 'field_ui',
          19 => 'file',
          20 => 'rdf',
        ),
        'files' => 
        array (
          0 => 'standard.profile',
        ),
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'statistics' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/statistics/statistics.module',
      'name' => 'statistics',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Statistics',
        'description' => 'Logs access statistics for your site.',
        'package' => 'Core',
        'version' => '7.12',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'statistics.test',
        ),
        'configure' => 'admin/config/system/statistics',
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'stylizer' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/sites/all/modules/ctools/stylizer/stylizer.module',
      'name' => 'stylizer',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Stylizer',
        'description' => 'Create custom styles for applications such as Panels.',
        'core' => '7.x',
        'package' => 'Chaos tool suite',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'color',
        ),
        'version' => '7.x-1.0-rc1',
        'project' => 'ctools',
        'datestamp' => '1311894415',
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.0-rc1',
    ),
    'syslog' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/syslog/syslog.module',
      'name' => 'syslog',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Syslog',
        'description' => 'Logs and records system events to syslog.',
        'package' => 'Core',
        'version' => '7.12',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'syslog.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'system' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/system/system.module',
      'name' => 'system',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7072',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'System',
        'description' => 'Handles general site configuration for administrators.',
        'package' => 'Core',
        'version' => '7.12',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'system.archiver.inc',
          1 => 'system.mail.inc',
          2 => 'system.queue.inc',
          3 => 'system.tar.inc',
          4 => 'system.updater.inc',
          5 => 'system.test',
        ),
        'required' => true,
        'configure' => 'admin/config/system',
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'system_dependencies_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/simpletest/tests/system_dependencies_test.module',
      'name' => 'system_dependencies_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'System dependency test',
        'description' => 'Support module for testing system dependencies.',
        'package' => 'Testing',
        'version' => '7.12',
        'core' => '7.x',
        'hidden' => true,
        'dependencies' => 
        array (
          0 => '_missing_dependency',
        ),
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'system_incompatible_core_version_dependencies_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/simpletest/tests/system_incompatible_core_version_dependencies_test.module',
      'name' => 'system_incompatible_core_version_dependencies_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'System incompatible core version dependencies test',
        'description' => 'Support module for testing system dependencies.',
        'package' => 'Testing',
        'version' => '7.12',
        'core' => '7.x',
        'hidden' => true,
        'dependencies' => 
        array (
          0 => 'system_incompatible_core_version_test',
        ),
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'system_incompatible_core_version_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/simpletest/tests/system_incompatible_core_version_test.module',
      'name' => 'system_incompatible_core_version_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'System incompatible core version test',
        'description' => 'Support module for testing system dependencies.',
        'package' => 'Testing',
        'version' => '7.12',
        'core' => '5.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'system_incompatible_module_version_dependencies_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/simpletest/tests/system_incompatible_module_version_dependencies_test.module',
      'name' => 'system_incompatible_module_version_dependencies_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'System incompatible module version dependencies test',
        'description' => 'Support module for testing system dependencies.',
        'package' => 'Testing',
        'version' => '7.12',
        'core' => '7.x',
        'hidden' => true,
        'dependencies' => 
        array (
          0 => 'system_incompatible_module_version_test (>2.0)',
        ),
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'system_incompatible_module_version_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/simpletest/tests/system_incompatible_module_version_test.module',
      'name' => 'system_incompatible_module_version_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'System incompatible module version test',
        'description' => 'Support module for testing system dependencies.',
        'package' => 'Testing',
        'version' => '7.12',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'system_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/simpletest/tests/system_test.module',
      'name' => 'system_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'System test',
        'description' => 'Support module for system testing.',
        'package' => 'Testing',
        'version' => '7.12',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'system_test.module',
        ),
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'taxonomy' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/taxonomy/taxonomy.module',
      'name' => 'taxonomy',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7010',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Taxonomy',
        'description' => 'Enables the categorization of content.',
        'package' => 'Core',
        'version' => '7.12',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'options',
        ),
        'files' => 
        array (
          0 => 'taxonomy.module',
          1 => 'taxonomy.test',
        ),
        'configure' => 'admin/structure/taxonomy',
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'taxonomy_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/simpletest/tests/taxonomy_test.module',
      'name' => 'taxonomy_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Taxonomy test module',
        'description' => '"Tests functions and hooks not used in core".',
        'package' => 'Testing',
        'version' => '7.12',
        'core' => '7.x',
        'hidden' => true,
        'dependencies' => 
        array (
          0 => 'taxonomy',
        ),
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'text' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/field/modules/text/text.module',
      'name' => 'text',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Text',
        'description' => 'Defines simple text field types.',
        'package' => 'Core',
        'version' => '7.12',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'text.test',
        ),
        'required' => true,
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'theme_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/simpletest/tests/theme_test.module',
      'name' => 'theme_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Theme test',
        'description' => 'Support module for theme system testing.',
        'package' => 'Testing',
        'version' => '7.12',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'token' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/sites/all/modules/token/token.module',
      'name' => 'token',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Token',
        'description' => 'Provides a user interface for the Token API and some missing core tokens.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'token.module',
          1 => 'token.install',
          2 => 'token.tokens.inc',
          3 => 'token.pages.inc',
          4 => 'token.test',
        ),
        'version' => '7.x-1.0-rc1',
        'project' => 'token',
        'datestamp' => '1328022364',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'token',
      'version' => '7.x-1.0-rc1',
    ),
    'token_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/sites/all/modules/token/tests/token_test.module',
      'name' => 'token_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Token Test',
        'description' => 'Testing module for token functionality.',
        'package' => 'Testing',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'token_test.module',
        ),
        'hidden' => true,
        'version' => '7.x-1.0-rc1',
        'project' => 'token',
        'datestamp' => '1328022364',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'token',
      'version' => '7.x-1.0-rc1',
    ),
    'toolbar' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/toolbar/toolbar.module',
      'name' => 'toolbar',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Toolbar',
        'description' => 'Provides a toolbar that shows the top-level administration menu items and links from other modules.',
        'core' => '7.x',
        'package' => 'Core',
        'version' => '7.12',
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'tracker' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/tracker/tracker.module',
      'name' => 'tracker',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Tracker',
        'description' => 'Enables tracking of recent content for users.',
        'dependencies' => 
        array (
          0 => 'comment',
        ),
        'package' => 'Core',
        'version' => '7.12',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'tracker.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'translation' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/translation/translation.module',
      'name' => 'translation',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Content translation',
        'description' => 'Allows content to be translated into different languages.',
        'dependencies' => 
        array (
          0 => 'locale',
        ),
        'package' => 'Core',
        'version' => '7.12',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'translation.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'translation_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/translation/tests/translation_test.module',
      'name' => 'translation_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Content Translation Test',
        'description' => 'Support module for the content translation tests.',
        'core' => '7.x',
        'package' => 'Testing',
        'version' => '7.12',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'trigger' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/trigger/trigger.module',
      'name' => 'trigger',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Trigger',
        'description' => 'Enables actions to be fired on certain system events, such as when new content is created.',
        'package' => 'Core',
        'version' => '7.12',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'trigger.test',
        ),
        'configure' => 'admin/structure/trigger',
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'trigger_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/trigger/tests/trigger_test.module',
      'name' => 'trigger_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Trigger Test',
        'description' => 'Support module for Trigger tests.',
        'package' => 'Testing',
        'core' => '7.x',
        'hidden' => true,
        'version' => '7.12',
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'update' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/update/update.module',
      'name' => 'update',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Update manager',
        'description' => 'Checks for available updates, and can securely install or update modules and themes via a web interface.',
        'version' => '7.12',
        'package' => 'Core',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'update.test',
        ),
        'configure' => 'admin/reports/updates/settings',
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'update_script_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/simpletest/tests/update_script_test.module',
      'name' => 'update_script_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Update script test',
        'description' => 'Support module for update script testing.',
        'package' => 'Testing',
        'version' => '7.12',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'update_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/update/tests/update_test.module',
      'name' => 'update_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Update test',
        'description' => 'Support module for update module testing.',
        'package' => 'Testing',
        'version' => '7.12',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'update_test_1' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/simpletest/tests/update_test_1.module',
      'name' => 'update_test_1',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Update test',
        'description' => 'Support module for update testing.',
        'package' => 'Testing',
        'version' => '7.12',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'update_test_2' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/simpletest/tests/update_test_2.module',
      'name' => 'update_test_2',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Update test',
        'description' => 'Support module for update testing.',
        'package' => 'Testing',
        'version' => '7.12',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'update_test_3' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/simpletest/tests/update_test_3.module',
      'name' => 'update_test_3',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Update test',
        'description' => 'Support module for update testing.',
        'package' => 'Testing',
        'version' => '7.12',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'url_alter_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/simpletest/tests/url_alter_test.module',
      'name' => 'url_alter_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Url_alter tests',
        'description' => 'A support modules for url_alter hook testing.',
        'core' => '7.x',
        'package' => 'Testing',
        'version' => '7.12',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'user' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/user/user.module',
      'name' => 'user',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7017',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'User',
        'description' => 'Manages the user registration and login system.',
        'package' => 'Core',
        'version' => '7.12',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'user.module',
          1 => 'user.test',
        ),
        'required' => true,
        'configure' => 'admin/config/people',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'user.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'user_form_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/user/tests/user_form_test.module',
      'name' => 'user_form_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'User module form tests',
        'description' => 'Support module for user form testing.',
        'package' => 'Testing',
        'version' => '7.12',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'views' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/sites/all/modules/views/views.module',
      'name' => 'views',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7301',
      'weight' => '10',
      'info' => 
      array (
        'name' => 'Views',
        'description' => 'Create customized lists and queries from your database.',
        'package' => 'Views',
        'core' => '7.x',
        'php' => '5.2',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'css/views.css',
          ),
        ),
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'files' => 
        array (
          0 => 'handlers/views_handler_area.inc',
          1 => 'handlers/views_handler_area_result.inc',
          2 => 'handlers/views_handler_area_text.inc',
          3 => 'handlers/views_handler_area_view.inc',
          4 => 'handlers/views_handler_argument.inc',
          5 => 'handlers/views_handler_argument_date.inc',
          6 => 'handlers/views_handler_argument_formula.inc',
          7 => 'handlers/views_handler_argument_many_to_one.inc',
          8 => 'handlers/views_handler_argument_null.inc',
          9 => 'handlers/views_handler_argument_numeric.inc',
          10 => 'handlers/views_handler_argument_string.inc',
          11 => 'handlers/views_handler_argument_group_by_numeric.inc',
          12 => 'handlers/views_handler_field.inc',
          13 => 'handlers/views_handler_field_counter.inc',
          14 => 'handlers/views_handler_field_boolean.inc',
          15 => 'handlers/views_handler_field_contextual_links.inc',
          16 => 'handlers/views_handler_field_custom.inc',
          17 => 'handlers/views_handler_field_date.inc',
          18 => 'handlers/views_handler_field_entity.inc',
          19 => 'handlers/views_handler_field_markup.inc',
          20 => 'handlers/views_handler_field_math.inc',
          21 => 'handlers/views_handler_field_numeric.inc',
          22 => 'handlers/views_handler_field_prerender_list.inc',
          23 => 'handlers/views_handler_field_time_interval.inc',
          24 => 'handlers/views_handler_field_serialized.inc',
          25 => 'handlers/views_handler_field_machine_name.inc',
          26 => 'handlers/views_handler_field_url.inc',
          27 => 'handlers/views_handler_filter.inc',
          28 => 'handlers/views_handler_filter_boolean_operator.inc',
          29 => 'handlers/views_handler_filter_boolean_operator_string.inc',
          30 => 'handlers/views_handler_filter_date.inc',
          31 => 'handlers/views_handler_filter_equality.inc',
          32 => 'handlers/views_handler_filter_group_by_numeric.inc',
          33 => 'handlers/views_handler_filter_in_operator.inc',
          34 => 'handlers/views_handler_filter_many_to_one.inc',
          35 => 'handlers/views_handler_filter_numeric.inc',
          36 => 'handlers/views_handler_filter_string.inc',
          37 => 'handlers/views_handler_relationship.inc',
          38 => 'handlers/views_handler_relationship_groupwise_max.inc',
          39 => 'handlers/views_handler_sort.inc',
          40 => 'handlers/views_handler_sort_date.inc',
          41 => 'handlers/views_handler_sort_formula.inc',
          42 => 'handlers/views_handler_sort_group_by_numeric.inc',
          43 => 'handlers/views_handler_sort_menu_hierarchy.inc',
          44 => 'handlers/views_handler_sort_random.inc',
          45 => 'includes/base.inc',
          46 => 'includes/handlers.inc',
          47 => 'includes/plugins.inc',
          48 => 'includes/view.inc',
          49 => 'modules/aggregator/views_handler_argument_aggregator_fid.inc',
          50 => 'modules/aggregator/views_handler_argument_aggregator_iid.inc',
          51 => 'modules/aggregator/views_handler_argument_aggregator_category_cid.inc',
          52 => 'modules/aggregator/views_handler_field_aggregator_title_link.inc',
          53 => 'modules/aggregator/views_handler_field_aggregator_category.inc',
          54 => 'modules/aggregator/views_handler_field_aggregator_item_description.inc',
          55 => 'modules/aggregator/views_handler_field_aggregator_xss.inc',
          56 => 'modules/aggregator/views_handler_filter_aggregator_category_cid.inc',
          57 => 'modules/aggregator/views_plugin_row_aggregator_rss.inc',
          58 => 'modules/comment/views_handler_argument_comment_user_uid.inc',
          59 => 'modules/comment/views_handler_field_comment.inc',
          60 => 'modules/comment/views_handler_field_comment_depth.inc',
          61 => 'modules/comment/views_handler_field_comment_link.inc',
          62 => 'modules/comment/views_handler_field_comment_link_approve.inc',
          63 => 'modules/comment/views_handler_field_comment_link_delete.inc',
          64 => 'modules/comment/views_handler_field_comment_link_edit.inc',
          65 => 'modules/comment/views_handler_field_comment_link_reply.inc',
          66 => 'modules/comment/views_handler_field_comment_node_link.inc',
          67 => 'modules/comment/views_handler_field_comment_username.inc',
          68 => 'modules/comment/views_handler_field_ncs_last_comment_name.inc',
          69 => 'modules/comment/views_handler_field_ncs_last_updated.inc',
          70 => 'modules/comment/views_handler_field_node_comment.inc',
          71 => 'modules/comment/views_handler_field_node_new_comments.inc',
          72 => 'modules/comment/views_handler_field_last_comment_timestamp.inc',
          73 => 'modules/comment/views_handler_filter_comment_user_uid.inc',
          74 => 'modules/comment/views_handler_filter_ncs_last_updated.inc',
          75 => 'modules/comment/views_handler_filter_node_comment.inc',
          76 => 'modules/comment/views_handler_sort_comment_thread.inc',
          77 => 'modules/comment/views_handler_sort_ncs_last_comment_name.inc',
          78 => 'modules/comment/views_handler_sort_ncs_last_updated.inc',
          79 => 'modules/comment/views_plugin_row_comment_rss.inc',
          80 => 'modules/comment/views_plugin_row_comment_view.inc',
          81 => 'modules/contact/views_handler_field_contact_link.inc',
          82 => 'modules/field/views_handler_field_field.inc',
          83 => 'modules/field/views_handler_relationship_entity_reverse.inc',
          84 => 'modules/field/views_handler_argument_field_list.inc',
          85 => 'modules/field/views_handler_filter_field_list.inc',
          86 => 'modules/filter/views_handler_field_filter_format_name.inc',
          87 => 'modules/locale/views_handler_argument_locale_group.inc',
          88 => 'modules/locale/views_handler_argument_locale_language.inc',
          89 => 'modules/locale/views_handler_field_locale_group.inc',
          90 => 'modules/locale/views_handler_field_locale_language.inc',
          91 => 'modules/locale/views_handler_field_locale_link_edit.inc',
          92 => 'modules/locale/views_handler_filter_locale_group.inc',
          93 => 'modules/locale/views_handler_filter_locale_language.inc',
          94 => 'modules/locale/views_handler_filter_locale_version.inc',
          95 => 'modules/node/views_handler_argument_dates_various.inc',
          96 => 'modules/node/views_handler_argument_node_language.inc',
          97 => 'modules/node/views_handler_argument_node_nid.inc',
          98 => 'modules/node/views_handler_argument_node_type.inc',
          99 => 'modules/node/views_handler_argument_node_vid.inc',
          100 => 'modules/node/views_handler_argument_node_uid_revision.inc',
          101 => 'modules/node/views_handler_field_history_user_timestamp.inc',
          102 => 'modules/node/views_handler_field_node.inc',
          103 => 'modules/node/views_handler_field_node_link.inc',
          104 => 'modules/node/views_handler_field_node_link_delete.inc',
          105 => 'modules/node/views_handler_field_node_link_edit.inc',
          106 => 'modules/node/views_handler_field_node_revision.inc',
          107 => 'modules/node/views_handler_field_node_revision_link_delete.inc',
          108 => 'modules/node/views_handler_field_node_revision_link_revert.inc',
          109 => 'modules/node/views_handler_field_node_path.inc',
          110 => 'modules/node/views_handler_field_node_type.inc',
          111 => 'modules/node/views_handler_filter_history_user_timestamp.inc',
          112 => 'modules/node/views_handler_filter_node_access.inc',
          113 => 'modules/node/views_handler_filter_node_status.inc',
          114 => 'modules/node/views_handler_filter_node_type.inc',
          115 => 'modules/node/views_handler_filter_node_uid_revision.inc',
          116 => 'modules/node/views_plugin_argument_default_node.inc',
          117 => 'modules/node/views_plugin_argument_validate_node.inc',
          118 => 'modules/node/views_plugin_row_node_rss.inc',
          119 => 'modules/node/views_plugin_row_node_view.inc',
          120 => 'modules/profile/views_handler_field_profile_date.inc',
          121 => 'modules/profile/views_handler_field_profile_list.inc',
          122 => 'modules/profile/views_handler_filter_profile_selection.inc',
          123 => 'modules/search/views_handler_argument_search.inc',
          124 => 'modules/search/views_handler_field_search_score.inc',
          125 => 'modules/search/views_handler_filter_search.inc',
          126 => 'modules/search/views_handler_sort_search_score.inc',
          127 => 'modules/search/views_plugin_row_search_view.inc',
          128 => 'modules/statistics/views_handler_field_accesslog_path.inc',
          129 => 'modules/system/views_handler_argument_file_fid.inc',
          130 => 'modules/system/views_handler_field_file.inc',
          131 => 'modules/system/views_handler_field_file_extension.inc',
          132 => 'modules/system/views_handler_field_file_filemime.inc',
          133 => 'modules/system/views_handler_field_file_uri.inc',
          134 => 'modules/system/views_handler_field_file_status.inc',
          135 => 'modules/system/views_handler_filter_file_status.inc',
          136 => 'modules/taxonomy/views_handler_argument_taxonomy.inc',
          137 => 'modules/taxonomy/views_handler_argument_term_node_tid.inc',
          138 => 'modules/taxonomy/views_handler_argument_term_node_tid_depth.inc',
          139 => 'modules/taxonomy/views_handler_argument_term_node_tid_depth_modifier.inc',
          140 => 'modules/taxonomy/views_handler_argument_vocabulary_vid.inc',
          141 => 'modules/taxonomy/views_handler_argument_vocabulary_machine_name.inc',
          142 => 'modules/taxonomy/views_handler_field_taxonomy.inc',
          143 => 'modules/taxonomy/views_handler_field_term_node_tid.inc',
          144 => 'modules/taxonomy/views_handler_field_term_link_edit.inc',
          145 => 'modules/taxonomy/views_handler_filter_term_node_tid.inc',
          146 => 'modules/taxonomy/views_handler_filter_term_node_tid_depth.inc',
          147 => 'modules/taxonomy/views_handler_filter_vocabulary_vid.inc',
          148 => 'modules/taxonomy/views_handler_filter_vocabulary_machine_name.inc',
          149 => 'modules/taxonomy/views_handler_relationship_node_term_data.inc',
          150 => 'modules/taxonomy/views_plugin_argument_validate_taxonomy_term.inc',
          151 => 'modules/taxonomy/views_plugin_argument_default_taxonomy_tid.inc',
          152 => 'modules/system/views_handler_filter_system_type.inc',
          153 => 'modules/translation/views_handler_argument_node_tnid.inc',
          154 => 'modules/translation/views_handler_field_node_language.inc',
          155 => 'modules/translation/views_handler_field_node_link_translate.inc',
          156 => 'modules/translation/views_handler_field_node_translation_link.inc',
          157 => 'modules/translation/views_handler_filter_node_language.inc',
          158 => 'modules/translation/views_handler_filter_node_tnid.inc',
          159 => 'modules/translation/views_handler_filter_node_tnid_child.inc',
          160 => 'modules/translation/views_handler_relationship_translation.inc',
          161 => 'modules/upload/views_handler_field_upload_description.inc',
          162 => 'modules/upload/views_handler_field_upload_fid.inc',
          163 => 'modules/upload/views_handler_filter_upload_fid.inc',
          164 => 'modules/user/views_handler_argument_user_uid.inc',
          165 => 'modules/user/views_handler_argument_users_roles_rid.inc',
          166 => 'modules/user/views_handler_field_user.inc',
          167 => 'modules/user/views_handler_field_user_language.inc',
          168 => 'modules/user/views_handler_field_user_link.inc',
          169 => 'modules/user/views_handler_field_user_link_cancel.inc',
          170 => 'modules/user/views_handler_field_user_link_edit.inc',
          171 => 'modules/user/views_handler_field_user_mail.inc',
          172 => 'modules/user/views_handler_field_user_name.inc',
          173 => 'modules/user/views_handler_field_user_permissions.inc',
          174 => 'modules/user/views_handler_field_user_picture.inc',
          175 => 'modules/user/views_handler_field_user_roles.inc',
          176 => 'modules/user/views_handler_filter_user_current.inc',
          177 => 'modules/user/views_handler_filter_user_name.inc',
          178 => 'modules/user/views_handler_filter_user_permissions.inc',
          179 => 'modules/user/views_handler_filter_user_roles.inc',
          180 => 'modules/user/views_plugin_argument_default_current_user.inc',
          181 => 'modules/user/views_plugin_argument_default_user.inc',
          182 => 'modules/user/views_plugin_argument_validate_user.inc',
          183 => 'modules/user/views_plugin_row_user_view.inc',
          184 => 'plugins/views_plugin_access.inc',
          185 => 'plugins/views_plugin_access_none.inc',
          186 => 'plugins/views_plugin_access_perm.inc',
          187 => 'plugins/views_plugin_access_role.inc',
          188 => 'plugins/views_plugin_argument_default.inc',
          189 => 'plugins/views_plugin_argument_default_php.inc',
          190 => 'plugins/views_plugin_argument_default_fixed.inc',
          191 => 'plugins/views_plugin_argument_default_raw.inc',
          192 => 'plugins/views_plugin_argument_validate.inc',
          193 => 'plugins/views_plugin_argument_validate_numeric.inc',
          194 => 'plugins/views_plugin_argument_validate_php.inc',
          195 => 'plugins/views_plugin_cache.inc',
          196 => 'plugins/views_plugin_cache_none.inc',
          197 => 'plugins/views_plugin_cache_time.inc',
          198 => 'plugins/views_plugin_display.inc',
          199 => 'plugins/views_plugin_display_attachment.inc',
          200 => 'plugins/views_plugin_display_block.inc',
          201 => 'plugins/views_plugin_display_default.inc',
          202 => 'plugins/views_plugin_display_embed.inc',
          203 => 'plugins/views_plugin_display_extender.inc',
          204 => 'plugins/views_plugin_display_feed.inc',
          205 => 'plugins/views_plugin_display_page.inc',
          206 => 'plugins/views_plugin_exposed_form_basic.inc',
          207 => 'plugins/views_plugin_exposed_form.inc',
          208 => 'plugins/views_plugin_exposed_form_input_required.inc',
          209 => 'plugins/views_plugin_localization_core.inc',
          210 => 'plugins/views_plugin_localization.inc',
          211 => 'plugins/views_plugin_localization_none.inc',
          212 => 'plugins/views_plugin_pager.inc',
          213 => 'plugins/views_plugin_pager_full.inc',
          214 => 'plugins/views_plugin_pager_mini.inc',
          215 => 'plugins/views_plugin_pager_none.inc',
          216 => 'plugins/views_plugin_pager_some.inc',
          217 => 'plugins/views_plugin_query.inc',
          218 => 'plugins/views_plugin_query_default.inc',
          219 => 'plugins/views_plugin_row.inc',
          220 => 'plugins/views_plugin_row_fields.inc',
          221 => 'plugins/views_plugin_style.inc',
          222 => 'plugins/views_plugin_style_default.inc',
          223 => 'plugins/views_plugin_style_grid.inc',
          224 => 'plugins/views_plugin_style_list.inc',
          225 => 'plugins/views_plugin_style_jump_menu.inc',
          226 => 'plugins/views_plugin_style_rss.inc',
          227 => 'plugins/views_plugin_style_summary.inc',
          228 => 'plugins/views_plugin_style_summary_jump_menu.inc',
          229 => 'plugins/views_plugin_style_summary_unformatted.inc',
          230 => 'plugins/views_plugin_style_table.inc',
          231 => 'tests/handlers/views_handler_area_text.test',
          232 => 'tests/handlers/views_handler_argument_null.test',
          233 => 'tests/handlers/views_handler_field.test',
          234 => 'tests/handlers/views_handler_field_boolean.test',
          235 => 'tests/handlers/views_handler_field_custom.test',
          236 => 'tests/handlers/views_handler_field_counter.test',
          237 => 'tests/handlers/views_handler_field_date.test',
          238 => 'tests/handlers/views_handler_field_file_size.test',
          239 => 'tests/handlers/views_handler_field_math.test',
          240 => 'tests/handlers/views_handler_field_url.test',
          241 => 'tests/handlers/views_handler_field_xss.test',
          242 => 'tests/handlers/views_handler_filter_date.test',
          243 => 'tests/handlers/views_handler_filter_equality.test',
          244 => 'tests/handlers/views_handler_filter_in_operator.test',
          245 => 'tests/handlers/views_handler_filter_numeric.test',
          246 => 'tests/handlers/views_handler_filter_string.test',
          247 => 'tests/handlers/views_handler_sort_random.test',
          248 => 'tests/handlers/views_handler_sort_date.test',
          249 => 'tests/handlers/views_handler_sort.test',
          250 => 'tests/test_plugins/views_test_plugin_access_test_dynamic.inc',
          251 => 'tests/test_plugins/views_test_plugin_access_test_static.inc',
          252 => 'tests/styles/views_plugin_style_jump_menu.test',
          253 => 'tests/styles/views_plugin_style.test',
          254 => 'tests/views_access.test',
          255 => 'tests/views_analyze.test',
          256 => 'tests/views_basic.test',
          257 => 'tests/views_argument_default.test',
          258 => 'tests/views_argument_validator.test',
          259 => 'tests/views_exposed_form.test',
          260 => 'tests/views_glossary.test',
          261 => 'tests/views_groupby.test',
          262 => 'tests/views_handlers.test',
          263 => 'tests/views_module.test',
          264 => 'tests/views_pager.test',
          265 => 'tests/views_plugin_localization_test.inc',
          266 => 'tests/views_translatable.test',
          267 => 'tests/views_query.test',
          268 => 'tests/views_upgrade.test',
          269 => 'tests/views_test.views_default.inc',
          270 => 'tests/comment/views_handler_argument_comment_user_uid.test',
          271 => 'tests/comment/views_handler_filter_comment_user_uid.test',
          272 => 'tests/user/views_handler_field_user_name.test',
          273 => 'tests/user/views_user_argument_default.test',
          274 => 'tests/user/views_user_argument_validate.test',
          275 => 'tests/user/views_user.test',
          276 => 'tests/views_cache.test',
          277 => 'tests/views_view.test',
          278 => 'tests/views_ui.test',
        ),
        'version' => '7.x-3.3',
        'project' => 'views',
        'datestamp' => '1329946249',
      ),
      'project' => 'views',
      'version' => '7.x-3.3',
    ),
    'views_content' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/sites/all/modules/ctools/views_content/views_content.module',
      'name' => 'views_content',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views content panes',
        'description' => 'Allows Views content to be used in Panels, Dashboard and other modules which use the CTools Content API.',
        'package' => 'Chaos tool suite',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'views',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'plugins/views/views_content_plugin_display_ctools_context.inc',
          1 => 'plugins/views/views_content_plugin_display_panel_pane.inc',
          2 => 'plugins/views/views_content_plugin_style_ctools_context.inc',
        ),
        'version' => '7.x-1.0-rc1',
        'project' => 'ctools',
        'datestamp' => '1311894415',
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.0-rc1',
    ),
    'views_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/sites/all/modules/views/tests/views_test.module',
      'name' => 'views_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views Test',
        'description' => 'Test module for Views.',
        'package' => 'Views',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'hidden' => true,
        'version' => '7.x-3.3',
        'project' => 'views',
        'datestamp' => '1329946249',
        'php' => '5.2.4',
      ),
      'project' => 'views',
      'version' => '7.x-3.3',
    ),
    'views_ui' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/sites/all/modules/views/views_ui.module',
      'name' => 'views_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views UI',
        'description' => 'Administrative interface to views. Without this module, you cannot create or edit your views.',
        'package' => 'Views',
        'core' => '7.x',
        'configure' => 'admin/structure/views',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'files' => 
        array (
          0 => 'views_ui.module',
          1 => 'plugins/views_wizard/views_ui_base_views_wizard.class.php',
        ),
        'version' => '7.x-3.3',
        'project' => 'views',
        'datestamp' => '1329946249',
        'php' => '5.2.4',
      ),
      'project' => 'views',
      'version' => '7.x-3.3',
    ),
    'xmlrpc_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/modules/simpletest/tests/xmlrpc_test.module',
      'name' => 'xmlrpc_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'XML-RPC Test',
        'description' => 'Support module for XML-RPC tests according to the validator1 specification.',
        'package' => 'Testing',
        'version' => '7.12',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
  ),
  'themes' => 
  array (
    'bartik' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/themes/bartik/bartik.info',
      'name' => 'bartik',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Bartik',
        'description' => 'A flexible, recolorable theme with many regions.',
        'package' => 'Core',
        'version' => '7.12',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'css/layout.css',
            1 => 'css/style.css',
            2 => 'css/colors.css',
          ),
          'print' => 
          array (
            0 => 'css/print.css',
          ),
        ),
        'regions' => 
        array (
          'header' => 'Header',
          'help' => 'Help',
          'page_top' => 'Page top',
          'page_bottom' => 'Page bottom',
          'highlighted' => 'Highlighted',
          'featured' => 'Featured',
          'content' => 'Content',
          'sidebar_first' => 'Sidebar first',
          'sidebar_second' => 'Sidebar second',
          'triptych_first' => 'Triptych first',
          'triptych_middle' => 'Triptych middle',
          'triptych_last' => 'Triptych last',
          'footer_firstcolumn' => 'Footer first column',
          'footer_secondcolumn' => 'Footer second column',
          'footer_thirdcolumn' => 'Footer third column',
          'footer_fourthcolumn' => 'Footer fourth column',
          'footer' => 'Footer',
        ),
        'settings' => 
        array (
          'shortcut_module_link' => '0',
        ),
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'garland' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/themes/garland/garland.info',
      'name' => 'garland',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Garland',
        'description' => 'A multi-column theme which can be configured to modify colors and switch between fixed and fluid width layouts.',
        'package' => 'Core',
        'version' => '7.12',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'style.css',
          ),
          'print' => 
          array (
            0 => 'print.css',
          ),
        ),
        'settings' => 
        array (
          'garland_width' => 'fluid',
        ),
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'seven' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/themes/seven/seven.info',
      'name' => 'seven',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Seven',
        'description' => 'A simple one-column, tableless, fluid width administration theme.',
        'package' => 'Core',
        'version' => '7.12',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'screen' => 
          array (
            0 => 'reset.css',
            1 => 'style.css',
          ),
        ),
        'settings' => 
        array (
          'shortcut_module_link' => '1',
        ),
        'regions' => 
        array (
          'content' => 'Content',
          'help' => 'Help',
          'page_top' => 'Page top',
          'page_bottom' => 'Page bottom',
          'sidebar_first' => 'First sidebar',
        ),
        'regions_hidden' => 
        array (
          0 => 'sidebar_first',
        ),
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
    'stark' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.12/themes/stark/stark.info',
      'name' => 'stark',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Stark',
        'description' => 'This theme demonstrates Drupal\'s default HTML markup and CSS styles. To learn how to build your own theme and override Drupal\'s default code, see the <a href="http://drupal.org/theme-guide">Theming Guide</a>.',
        'package' => 'Core',
        'version' => '7.12',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'layout.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1328134560',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.12',
    ),
  ),
);
$options['site_ip_addresses'] = array (
  '@server_master' => '50.56.246.171',
);
$options['installed'] = true;
# Aegir additions
$_SERVER['db_type'] = $options['db_type'];
$_SERVER['db_port'] = $options['db_port'];
$_SERVER['db_host'] = $options['db_host'];
$_SERVER['db_user'] = $options['db_user'];
$_SERVER['db_passwd'] = $options['db_passwd'];
$_SERVER['db_name'] = $options['db_name'];
