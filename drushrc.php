<?php 


$options['db_type'] = 'mysql';
$options['db_host'] = 'localhost';
$options['db_port'] = '3306';
$options['db_passwd'] = '6XeWZ8Emaf';
$options['db_name'] = 'neprofitneorg';
$options['db_user'] = 'neprofitneorg';
$options['packages'] = array (
  'platforms' => 
  array (
    'drupal' => 
    array (
      'short_name' => 'drupal',
      'version' => '7.60',
      'description' => 'This platform is running Drupal 7.60',
    ),
  ),
  'profiles' => 
  array (
    'standard' => 
    array (
      'name' => 'standard',
      'info' => 
      array (
        'name' => 'Standard',
        'description' => 'Install with commonly used features pre-configured.',
        'version' => '7.60',
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
        'project' => 'drupal',
        'datestamp' => '1539816636',
        'php' => '5.2.4',
        'languages' => 
        array (
          0 => 'en',
        ),
        'old_short_name' => 'default',
      ),
      'filename' => './profiles/standard/standard.info',
      'version' => '7.60',
      'status' => 1,
    ),
  ),
  'modules' => 
  array (
    'aggregator' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/modules/aggregator/aggregator.module',
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
        'version' => '7.60',
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
        'datestamp' => '1539816636',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.60',
    ),
    'block' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/modules/block/block.module',
      'name' => 'block',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7009',
      'weight' => '-5',
      'info' => 
      array (
        'name' => 'Block',
        'description' => 'Controls the visual building blocks a page is constructed with. Blocks are boxes of content rendered into an area, or region, of a web page.',
        'package' => 'Core',
        'version' => '7.60',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'block.test',
        ),
        'configure' => 'admin/structure/block',
        'project' => 'drupal',
        'datestamp' => '1539816636',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.60',
    ),
    'blog' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/modules/blog/blog.module',
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
        'version' => '7.60',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'blog.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1539816636',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.60',
    ),
    'book' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/modules/book/book.module',
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
        'version' => '7.60',
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
        'datestamp' => '1539816636',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.60',
    ),
    'color' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/modules/color/color.module',
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
        'version' => '7.60',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'color.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1539816636',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.60',
    ),
    'comment' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/modules/comment/comment.module',
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
        'version' => '7.60',
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
        'datestamp' => '1539816636',
        'php' => '5.2.4',
      ),
      'version' => '7.60',
    ),
    'contact' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/modules/contact/contact.module',
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
        'version' => '7.60',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'contact.test',
        ),
        'configure' => 'admin/structure/contact',
        'project' => 'drupal',
        'datestamp' => '1539816636',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.60',
    ),
    'contextual' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/modules/contextual/contextual.module',
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
        'version' => '7.60',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'contextual.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1539816636',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.60',
    ),
    'bulk_export' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/modules/ctools/bulk_export/bulk_export.module',
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
        'version' => '7.x-1.14',
        'project' => 'ctools',
        'datestamp' => '1519455788',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.14',
    ),
    'ctools' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/modules/ctools/ctools.module',
      'name' => 'ctools',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7003',
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
          1 => 'includes/css-cache.inc',
          2 => 'includes/math-expr.inc',
          3 => 'includes/stylizer.inc',
          4 => 'tests/context.test',
          5 => 'tests/css.test',
          6 => 'tests/css_cache.test',
          7 => 'tests/ctools.plugins.test',
          8 => 'tests/ctools.test',
          9 => 'tests/math_expression.test',
          10 => 'tests/math_expression_stack.test',
          11 => 'tests/object_cache.test',
          12 => 'tests/object_cache_unit.test',
          13 => 'tests/page_tokens.test',
        ),
        'version' => '7.x-1.14',
        'project' => 'ctools',
        'datestamp' => '1519455788',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.14',
    ),
    'ctools_access_ruleset' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/modules/ctools/ctools_access_ruleset/ctools_access_ruleset.module',
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
        'version' => '7.x-1.14',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'project' => 'ctools',
        'datestamp' => '1519455788',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.14',
    ),
    'ctools_ajax_sample' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/modules/ctools/ctools_ajax_sample/ctools_ajax_sample.module',
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
        'version' => '7.x-1.14',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'core' => '7.x',
        'project' => 'ctools',
        'datestamp' => '1519455788',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.14',
    ),
    'ctools_custom_content' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/modules/ctools/ctools_custom_content/ctools_custom_content.module',
      'name' => 'ctools_custom_content',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Custom content panes',
        'description' => 'Create custom, exportable, reusable content panes for applications like Panels.',
        'core' => '7.x',
        'package' => 'Chaos tool suite',
        'version' => '7.x-1.14',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'project' => 'ctools',
        'datestamp' => '1519455788',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.14',
    ),
    'ctools_plugin_example' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/modules/ctools/ctools_plugin_example/ctools_plugin_example.module',
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
        'version' => '7.x-1.14',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'panels',
          2 => 'page_manager',
          3 => 'advanced_help',
        ),
        'core' => '7.x',
        'project' => 'ctools',
        'datestamp' => '1519455788',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.14',
    ),
    'page_manager' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/modules/ctools/page_manager/page_manager.module',
      'name' => 'page_manager',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
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
        'version' => '7.x-1.14',
        'files' => 
        array (
          0 => 'tests/head_links.test',
        ),
        'project' => 'ctools',
        'datestamp' => '1519455788',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.14',
    ),
    'stylizer' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/modules/ctools/stylizer/stylizer.module',
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
        'version' => '7.x-1.14',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'color',
        ),
        'project' => 'ctools',
        'datestamp' => '1519455788',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.14',
    ),
    'term_depth' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/modules/ctools/term_depth/term_depth.module',
      'name' => 'term_depth',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Term Depth access',
        'description' => 'Controls access to context based upon term depth',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'package' => 'Chaos tool suite',
        'version' => '7.x-1.14',
        'project' => 'ctools',
        'datestamp' => '1519455788',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.14',
    ),
    'views_content' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/modules/ctools/views_content/views_content.module',
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
        'version' => '7.x-1.14',
        'files' => 
        array (
          0 => 'plugins/views/views_content_plugin_display_ctools_context.inc',
          1 => 'plugins/views/views_content_plugin_display_panel_pane.inc',
          2 => 'plugins/views/views_content_plugin_style_ctools_context.inc',
        ),
        'project' => 'ctools',
        'datestamp' => '1519455788',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.14',
    ),
    'dashboard' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/modules/dashboard/dashboard.module',
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
        'version' => '7.60',
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
        'datestamp' => '1539816636',
        'php' => '5.2.4',
      ),
      'version' => '7.60',
    ),
    'dblog' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/modules/dblog/dblog.module',
      'name' => 'dblog',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '1',
      'schema_version' => '7003',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Database logging',
        'description' => 'Logs and records system events to the database.',
        'package' => 'Core',
        'version' => '7.60',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'dblog.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1539816636',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.60',
    ),
    'field' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/modules/field/field.module',
      'name' => 'field',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7004',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Field',
        'description' => 'Field API to add fields to entities like nodes and users.',
        'package' => 'Core',
        'version' => '7.60',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'field.module',
          1 => 'field.attach.inc',
          2 => 'field.info.class.inc',
          3 => 'tests/field.test',
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
        'datestamp' => '1539816636',
        'php' => '5.2.4',
      ),
      'version' => '7.60',
    ),
    'field_sql_storage' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/modules/field/modules/field_sql_storage/field_sql_storage.module',
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
        'version' => '7.60',
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
        'datestamp' => '1539816636',
        'php' => '5.2.4',
      ),
      'version' => '7.60',
    ),
    'list' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/modules/field/modules/list/list.module',
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
        'version' => '7.60',
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
        'datestamp' => '1539816636',
        'php' => '5.2.4',
      ),
      'version' => '7.60',
    ),
    'number' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/modules/field/modules/number/number.module',
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
        'version' => '7.60',
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
        'datestamp' => '1539816636',
        'php' => '5.2.4',
      ),
      'version' => '7.60',
    ),
    'options' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/modules/field/modules/options/options.module',
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
        'version' => '7.60',
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
        'datestamp' => '1539816636',
        'php' => '5.2.4',
      ),
      'version' => '7.60',
    ),
    'text' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/modules/field/modules/text/text.module',
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
        'version' => '7.60',
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
        'datestamp' => '1539816636',
        'php' => '5.2.4',
      ),
      'version' => '7.60',
    ),
    'field_ui' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/modules/field_ui/field_ui.module',
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
        'version' => '7.60',
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
        'datestamp' => '1539816636',
        'php' => '5.2.4',
      ),
      'version' => '7.60',
    ),
    'file' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/modules/file/file.module',
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
        'version' => '7.60',
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
        'datestamp' => '1539816636',
        'php' => '5.2.4',
      ),
      'version' => '7.60',
    ),
    'filter' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/modules/filter/filter.module',
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
        'version' => '7.60',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'filter.test',
        ),
        'required' => true,
        'configure' => 'admin/config/content/formats',
        'project' => 'drupal',
        'datestamp' => '1539816636',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.60',
    ),
    'forum' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/modules/forum/forum.module',
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
        'version' => '7.60',
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
        'datestamp' => '1539816636',
        'php' => '5.2.4',
      ),
      'version' => '7.60',
    ),
    'help' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/modules/help/help.module',
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
        'version' => '7.60',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'help.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1539816636',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.60',
    ),
    'image' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/modules/image/image.module',
      'name' => 'image',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7005',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Image',
        'description' => 'Provides image manipulation tools.',
        'package' => 'Core',
        'version' => '7.60',
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
        'datestamp' => '1539816636',
        'php' => '5.2.4',
      ),
      'version' => '7.60',
    ),
    'locale' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/modules/locale/locale.module',
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
        'version' => '7.60',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'locale.test',
        ),
        'configure' => 'admin/config/regional/language',
        'project' => 'drupal',
        'datestamp' => '1539816636',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.60',
    ),
    'menu' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/modules/menu/menu.module',
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
        'version' => '7.60',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'menu.test',
        ),
        'configure' => 'admin/structure/menu',
        'project' => 'drupal',
        'datestamp' => '1539816636',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.60',
    ),
    'node' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/modules/node/node.module',
      'name' => 'node',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7016',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Node',
        'description' => 'Allows content to be submitted to the site and displayed on pages.',
        'package' => 'Core',
        'version' => '7.60',
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
        'datestamp' => '1539816636',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.60',
    ),
    'openid' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/modules/openid/openid.module',
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
        'version' => '7.60',
        'package' => 'Core',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'openid.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1539816636',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.60',
    ),
    'overlay' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/modules/overlay/overlay.module',
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
        'version' => '7.60',
        'core' => '7.x',
        'project' => 'drupal',
        'datestamp' => '1539816636',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.60',
    ),
    'path' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/modules/path/path.module',
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
        'version' => '7.60',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'path.test',
        ),
        'configure' => 'admin/config/search/path',
        'project' => 'drupal',
        'datestamp' => '1539816636',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.60',
    ),
    'php' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/modules/php/php.module',
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
        'version' => '7.60',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'php.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1539816636',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.60',
    ),
    'placeholder' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/modules/placeholder/placeholder.module',
      'name' => 'placeholder',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Placeholder',
        'description' => 'Add support for the HTML5 placeholder attribute, with backward browser compatibility.',
        'core' => '7.x',
        'package' => 'Other',
        'dependencies' => 
        array (
          0 => 'libraries (>=7.x-2.2)',
        ),
        'version' => '7.x-1.1',
        'project' => 'placeholder',
        'datestamp' => '1411850355',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.1',
    ),
    'poll' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/modules/poll/poll.module',
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
        'version' => '7.60',
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
        'datestamp' => '1539816636',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.60',
    ),
    'rdf' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/modules/rdf/rdf.module',
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
        'version' => '7.60',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'rdf.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1539816636',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.60',
    ),
    'search' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/modules/search/search.module',
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
        'version' => '7.60',
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
        'datestamp' => '1539816636',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.60',
    ),
    'shortcut' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/modules/shortcut/shortcut.module',
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
        'version' => '7.60',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'shortcut.test',
        ),
        'configure' => 'admin/config/user-interface/shortcut',
        'project' => 'drupal',
        'datestamp' => '1539816636',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.60',
    ),
    'simpletest' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/modules/simpletest/simpletest.module',
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
        'version' => '7.60',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'simpletest.test',
          1 => 'drupal_web_test_case.php',
          2 => 'tests/actions.test',
          3 => 'tests/ajax.test',
          4 => 'tests/batch.test',
          5 => 'tests/boot.test',
          6 => 'tests/bootstrap.test',
          7 => 'tests/cache.test',
          8 => 'tests/common.test',
          9 => 'tests/database_test.test',
          10 => 'tests/entity_crud.test',
          11 => 'tests/entity_crud_hook_test.test',
          12 => 'tests/entity_query.test',
          13 => 'tests/error.test',
          14 => 'tests/file.test',
          15 => 'tests/filetransfer.test',
          16 => 'tests/form.test',
          17 => 'tests/graph.test',
          18 => 'tests/image.test',
          19 => 'tests/lock.test',
          20 => 'tests/mail.test',
          21 => 'tests/menu.test',
          22 => 'tests/module.test',
          23 => 'tests/pager.test',
          24 => 'tests/password.test',
          25 => 'tests/path.test',
          26 => 'tests/registry.test',
          27 => 'tests/schema.test',
          28 => 'tests/session.test',
          29 => 'tests/tablesort.test',
          30 => 'tests/theme.test',
          31 => 'tests/unicode.test',
          32 => 'tests/update.test',
          33 => 'tests/xmlrpc.test',
          34 => 'tests/upgrade/upgrade.test',
          35 => 'tests/upgrade/upgrade.comment.test',
          36 => 'tests/upgrade/upgrade.filter.test',
          37 => 'tests/upgrade/upgrade.forum.test',
          38 => 'tests/upgrade/upgrade.locale.test',
          39 => 'tests/upgrade/upgrade.menu.test',
          40 => 'tests/upgrade/upgrade.node.test',
          41 => 'tests/upgrade/upgrade.taxonomy.test',
          42 => 'tests/upgrade/upgrade.trigger.test',
          43 => 'tests/upgrade/upgrade.translatable.test',
          44 => 'tests/upgrade/upgrade.upload.test',
          45 => 'tests/upgrade/upgrade.user.test',
          46 => 'tests/upgrade/update.aggregator.test',
          47 => 'tests/upgrade/update.trigger.test',
          48 => 'tests/upgrade/update.field.test',
          49 => 'tests/upgrade/update.user.test',
        ),
        'configure' => 'admin/config/development/testing/settings',
        'project' => 'drupal',
        'datestamp' => '1539816636',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.60',
    ),
    'statistics' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/modules/statistics/statistics.module',
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
        'version' => '7.60',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'statistics.test',
        ),
        'configure' => 'admin/config/system/statistics',
        'project' => 'drupal',
        'datestamp' => '1539816636',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.60',
    ),
    'syslog' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/modules/syslog/syslog.module',
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
        'version' => '7.60',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'syslog.test',
        ),
        'configure' => 'admin/config/development/logging',
        'project' => 'drupal',
        'datestamp' => '1539816636',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.60',
    ),
    'system' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/modules/system/system.module',
      'name' => 'system',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '1',
      'schema_version' => '7081',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'System',
        'description' => 'Handles general site configuration for administrators.',
        'package' => 'Core',
        'version' => '7.60',
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
        'datestamp' => '1539816636',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.60',
    ),
    'taxonomy' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/modules/taxonomy/taxonomy.module',
      'name' => 'taxonomy',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7011',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Taxonomy',
        'description' => 'Enables the categorization of content.',
        'package' => 'Core',
        'version' => '7.60',
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
        'datestamp' => '1539816636',
        'php' => '5.2.4',
      ),
      'version' => '7.60',
    ),
    'toolbar' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/modules/toolbar/toolbar.module',
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
        'version' => '7.60',
        'project' => 'drupal',
        'datestamp' => '1539816636',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.60',
    ),
    'tracker' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/modules/tracker/tracker.module',
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
        'version' => '7.60',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'tracker.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1539816636',
        'php' => '5.2.4',
      ),
      'version' => '7.60',
    ),
    'translation' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/modules/translation/translation.module',
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
        'version' => '7.60',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'translation.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1539816636',
        'php' => '5.2.4',
      ),
      'version' => '7.60',
    ),
    'trigger' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/modules/trigger/trigger.module',
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
        'version' => '7.60',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'trigger.test',
        ),
        'configure' => 'admin/structure/trigger',
        'project' => 'drupal',
        'datestamp' => '1539816636',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.60',
    ),
    'update' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/modules/update/update.module',
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
        'version' => '7.60',
        'package' => 'Core',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'update.test',
        ),
        'configure' => 'admin/reports/updates/settings',
        'project' => 'drupal',
        'datestamp' => '1539816636',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.60',
    ),
    'user' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/modules/user/user.module',
      'name' => 'user',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7019',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'User',
        'description' => 'Manages the user registration and login system.',
        'package' => 'Core',
        'version' => '7.60',
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
        'datestamp' => '1539816636',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.60',
    ),
    'views' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/modules/views/views.module',
      'name' => 'views',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7302',
      'weight' => '10',
      'info' => 
      array (
        'name' => 'Views',
        'description' => 'Create customized lists and queries from your database.',
        'package' => 'Views',
        'core' => '7.x',
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
          1 => 'handlers/views_handler_area_messages.inc',
          2 => 'handlers/views_handler_area_result.inc',
          3 => 'handlers/views_handler_area_text.inc',
          4 => 'handlers/views_handler_area_text_custom.inc',
          5 => 'handlers/views_handler_area_view.inc',
          6 => 'handlers/views_handler_argument.inc',
          7 => 'handlers/views_handler_argument_date.inc',
          8 => 'handlers/views_handler_argument_formula.inc',
          9 => 'handlers/views_handler_argument_many_to_one.inc',
          10 => 'handlers/views_handler_argument_null.inc',
          11 => 'handlers/views_handler_argument_numeric.inc',
          12 => 'handlers/views_handler_argument_string.inc',
          13 => 'handlers/views_handler_argument_group_by_numeric.inc',
          14 => 'handlers/views_handler_field.inc',
          15 => 'handlers/views_handler_field_counter.inc',
          16 => 'handlers/views_handler_field_boolean.inc',
          17 => 'handlers/views_handler_field_contextual_links.inc',
          18 => 'handlers/views_handler_field_ctools_dropdown.inc',
          19 => 'handlers/views_handler_field_custom.inc',
          20 => 'handlers/views_handler_field_date.inc',
          21 => 'handlers/views_handler_field_entity.inc',
          22 => 'handlers/views_handler_field_links.inc',
          23 => 'handlers/views_handler_field_markup.inc',
          24 => 'handlers/views_handler_field_math.inc',
          25 => 'handlers/views_handler_field_numeric.inc',
          26 => 'handlers/views_handler_field_prerender_list.inc',
          27 => 'handlers/views_handler_field_time_interval.inc',
          28 => 'handlers/views_handler_field_serialized.inc',
          29 => 'handlers/views_handler_field_machine_name.inc',
          30 => 'handlers/views_handler_field_url.inc',
          31 => 'handlers/views_handler_filter.inc',
          32 => 'handlers/views_handler_filter_boolean_operator.inc',
          33 => 'handlers/views_handler_filter_boolean_operator_string.inc',
          34 => 'handlers/views_handler_filter_combine.inc',
          35 => 'handlers/views_handler_filter_date.inc',
          36 => 'handlers/views_handler_filter_equality.inc',
          37 => 'handlers/views_handler_filter_entity_bundle.inc',
          38 => 'handlers/views_handler_filter_group_by_numeric.inc',
          39 => 'handlers/views_handler_filter_in_operator.inc',
          40 => 'handlers/views_handler_filter_many_to_one.inc',
          41 => 'handlers/views_handler_filter_numeric.inc',
          42 => 'handlers/views_handler_filter_string.inc',
          43 => 'handlers/views_handler_filter_fields_compare.inc',
          44 => 'handlers/views_handler_relationship.inc',
          45 => 'handlers/views_handler_relationship_groupwise_max.inc',
          46 => 'handlers/views_handler_sort.inc',
          47 => 'handlers/views_handler_sort_date.inc',
          48 => 'handlers/views_handler_sort_formula.inc',
          49 => 'handlers/views_handler_sort_group_by_numeric.inc',
          50 => 'handlers/views_handler_sort_menu_hierarchy.inc',
          51 => 'handlers/views_handler_sort_random.inc',
          52 => 'includes/base.inc',
          53 => 'includes/handlers.inc',
          54 => 'includes/plugins.inc',
          55 => 'includes/view.inc',
          56 => 'modules/aggregator/views_handler_argument_aggregator_fid.inc',
          57 => 'modules/aggregator/views_handler_argument_aggregator_iid.inc',
          58 => 'modules/aggregator/views_handler_argument_aggregator_category_cid.inc',
          59 => 'modules/aggregator/views_handler_field_aggregator_title_link.inc',
          60 => 'modules/aggregator/views_handler_field_aggregator_category.inc',
          61 => 'modules/aggregator/views_handler_field_aggregator_item_description.inc',
          62 => 'modules/aggregator/views_handler_field_aggregator_xss.inc',
          63 => 'modules/aggregator/views_handler_filter_aggregator_category_cid.inc',
          64 => 'modules/aggregator/views_plugin_row_aggregator_rss.inc',
          65 => 'modules/book/views_plugin_argument_default_book_root.inc',
          66 => 'modules/comment/views_handler_argument_comment_user_uid.inc',
          67 => 'modules/comment/views_handler_field_comment.inc',
          68 => 'modules/comment/views_handler_field_comment_depth.inc',
          69 => 'modules/comment/views_handler_field_comment_link.inc',
          70 => 'modules/comment/views_handler_field_comment_link_approve.inc',
          71 => 'modules/comment/views_handler_field_comment_link_delete.inc',
          72 => 'modules/comment/views_handler_field_comment_link_edit.inc',
          73 => 'modules/comment/views_handler_field_comment_link_reply.inc',
          74 => 'modules/comment/views_handler_field_comment_node_link.inc',
          75 => 'modules/comment/views_handler_field_comment_username.inc',
          76 => 'modules/comment/views_handler_field_ncs_last_comment_name.inc',
          77 => 'modules/comment/views_handler_field_ncs_last_updated.inc',
          78 => 'modules/comment/views_handler_field_node_comment.inc',
          79 => 'modules/comment/views_handler_field_node_new_comments.inc',
          80 => 'modules/comment/views_handler_field_last_comment_timestamp.inc',
          81 => 'modules/comment/views_handler_filter_comment_user_uid.inc',
          82 => 'modules/comment/views_handler_filter_ncs_last_updated.inc',
          83 => 'modules/comment/views_handler_filter_node_comment.inc',
          84 => 'modules/comment/views_handler_sort_comment_thread.inc',
          85 => 'modules/comment/views_handler_sort_ncs_last_comment_name.inc',
          86 => 'modules/comment/views_handler_sort_ncs_last_updated.inc',
          87 => 'modules/comment/views_plugin_row_comment_rss.inc',
          88 => 'modules/comment/views_plugin_row_comment_view.inc',
          89 => 'modules/contact/views_handler_field_contact_link.inc',
          90 => 'modules/field/views_handler_field_field.inc',
          91 => 'modules/field/views_handler_relationship_entity_reverse.inc',
          92 => 'modules/field/views_handler_argument_field_list.inc',
          93 => 'modules/field/views_handler_filter_field_list_boolean.inc',
          94 => 'modules/field/views_handler_argument_field_list_string.inc',
          95 => 'modules/field/views_handler_filter_field_list.inc',
          96 => 'modules/filter/views_handler_field_filter_format_name.inc',
          97 => 'modules/locale/views_handler_field_node_language.inc',
          98 => 'modules/locale/views_handler_filter_node_language.inc',
          99 => 'modules/locale/views_handler_argument_locale_group.inc',
          100 => 'modules/locale/views_handler_argument_locale_language.inc',
          101 => 'modules/locale/views_handler_field_locale_group.inc',
          102 => 'modules/locale/views_handler_field_locale_language.inc',
          103 => 'modules/locale/views_handler_field_locale_link_edit.inc',
          104 => 'modules/locale/views_handler_filter_locale_group.inc',
          105 => 'modules/locale/views_handler_filter_locale_language.inc',
          106 => 'modules/locale/views_handler_filter_locale_version.inc',
          107 => 'modules/locale/views_handler_sort_node_language.inc',
          108 => 'modules/node/views_handler_argument_dates_various.inc',
          109 => 'modules/node/views_handler_argument_node_language.inc',
          110 => 'modules/node/views_handler_argument_node_nid.inc',
          111 => 'modules/node/views_handler_argument_node_type.inc',
          112 => 'modules/node/views_handler_argument_node_vid.inc',
          113 => 'modules/node/views_handler_argument_node_uid_revision.inc',
          114 => 'modules/node/views_handler_field_history_user_timestamp.inc',
          115 => 'modules/node/views_handler_field_node.inc',
          116 => 'modules/node/views_handler_field_node_link.inc',
          117 => 'modules/node/views_handler_field_node_link_delete.inc',
          118 => 'modules/node/views_handler_field_node_link_edit.inc',
          119 => 'modules/node/views_handler_field_node_revision.inc',
          120 => 'modules/node/views_handler_field_node_revision_link.inc',
          121 => 'modules/node/views_handler_field_node_revision_link_delete.inc',
          122 => 'modules/node/views_handler_field_node_revision_link_revert.inc',
          123 => 'modules/node/views_handler_field_node_path.inc',
          124 => 'modules/node/views_handler_field_node_type.inc',
          125 => 'modules/node/views_handler_field_node_version_count.inc',
          126 => 'modules/node/views_handler_filter_history_user_timestamp.inc',
          127 => 'modules/node/views_handler_filter_node_access.inc',
          128 => 'modules/node/views_handler_filter_node_status.inc',
          129 => 'modules/node/views_handler_filter_node_type.inc',
          130 => 'modules/node/views_handler_filter_node_uid_revision.inc',
          131 => 'modules/node/views_handler_filter_node_version_count.inc',
          132 => 'modules/node/views_handler_sort_node_version_count.inc',
          133 => 'modules/node/views_plugin_argument_default_node.inc',
          134 => 'modules/node/views_plugin_argument_validate_node.inc',
          135 => 'modules/node/views_plugin_row_node_rss.inc',
          136 => 'modules/node/views_plugin_row_node_view.inc',
          137 => 'modules/profile/views_handler_field_profile_date.inc',
          138 => 'modules/profile/views_handler_field_profile_list.inc',
          139 => 'modules/profile/views_handler_filter_profile_selection.inc',
          140 => 'modules/search/views_handler_argument_search.inc',
          141 => 'modules/search/views_handler_field_search_score.inc',
          142 => 'modules/search/views_handler_filter_search.inc',
          143 => 'modules/search/views_handler_sort_search_score.inc',
          144 => 'modules/search/views_plugin_row_search_view.inc',
          145 => 'modules/statistics/views_handler_field_accesslog_path.inc',
          146 => 'modules/statistics/views_handler_field_node_counter_timestamp.inc',
          147 => 'modules/statistics/views_handler_field_statistics_numeric.inc',
          148 => 'modules/system/views_handler_argument_file_fid.inc',
          149 => 'modules/system/views_handler_field_file.inc',
          150 => 'modules/system/views_handler_field_file_extension.inc',
          151 => 'modules/system/views_handler_field_file_filemime.inc',
          152 => 'modules/system/views_handler_field_file_uri.inc',
          153 => 'modules/system/views_handler_field_file_status.inc',
          154 => 'modules/system/views_handler_filter_file_status.inc',
          155 => 'modules/taxonomy/views_handler_argument_taxonomy.inc',
          156 => 'modules/taxonomy/views_handler_argument_term_node_tid.inc',
          157 => 'modules/taxonomy/views_handler_argument_term_node_tid_depth.inc',
          158 => 'modules/taxonomy/views_handler_argument_term_node_tid_depth_join.inc',
          159 => 'modules/taxonomy/views_handler_argument_term_node_tid_depth_modifier.inc',
          160 => 'modules/taxonomy/views_handler_argument_vocabulary_vid.inc',
          161 => 'modules/taxonomy/views_handler_argument_vocabulary_machine_name.inc',
          162 => 'modules/taxonomy/views_handler_field_taxonomy.inc',
          163 => 'modules/taxonomy/views_handler_field_term_node_tid.inc',
          164 => 'modules/taxonomy/views_handler_field_term_link_edit.inc',
          165 => 'modules/taxonomy/views_handler_filter_term_node_tid.inc',
          166 => 'modules/taxonomy/views_handler_filter_term_node_tid_depth.inc',
          167 => 'modules/taxonomy/views_handler_filter_term_node_tid_depth_join.inc',
          168 => 'modules/taxonomy/views_handler_filter_vocabulary_vid.inc',
          169 => 'modules/taxonomy/views_handler_filter_vocabulary_machine_name.inc',
          170 => 'modules/taxonomy/views_handler_relationship_node_term_data.inc',
          171 => 'modules/taxonomy/views_plugin_argument_validate_taxonomy_term.inc',
          172 => 'modules/taxonomy/views_plugin_argument_default_taxonomy_tid.inc',
          173 => 'modules/tracker/views_handler_argument_tracker_comment_user_uid.inc',
          174 => 'modules/tracker/views_handler_filter_tracker_comment_user_uid.inc',
          175 => 'modules/tracker/views_handler_filter_tracker_boolean_operator.inc',
          176 => 'modules/system/views_handler_filter_system_type.inc',
          177 => 'modules/translation/views_handler_argument_node_tnid.inc',
          178 => 'modules/translation/views_handler_field_node_link_translate.inc',
          179 => 'modules/translation/views_handler_field_node_translation_link.inc',
          180 => 'modules/translation/views_handler_filter_node_tnid.inc',
          181 => 'modules/translation/views_handler_filter_node_tnid_child.inc',
          182 => 'modules/translation/views_handler_relationship_translation.inc',
          183 => 'modules/user/views_handler_argument_user_uid.inc',
          184 => 'modules/user/views_handler_argument_users_roles_rid.inc',
          185 => 'modules/user/views_handler_field_user.inc',
          186 => 'modules/user/views_handler_field_user_language.inc',
          187 => 'modules/user/views_handler_field_user_link.inc',
          188 => 'modules/user/views_handler_field_user_link_cancel.inc',
          189 => 'modules/user/views_handler_field_user_link_edit.inc',
          190 => 'modules/user/views_handler_field_user_mail.inc',
          191 => 'modules/user/views_handler_field_user_name.inc',
          192 => 'modules/user/views_handler_field_user_permissions.inc',
          193 => 'modules/user/views_handler_field_user_picture.inc',
          194 => 'modules/user/views_handler_field_user_roles.inc',
          195 => 'modules/user/views_handler_filter_user_current.inc',
          196 => 'modules/user/views_handler_filter_user_name.inc',
          197 => 'modules/user/views_handler_filter_user_permissions.inc',
          198 => 'modules/user/views_handler_filter_user_roles.inc',
          199 => 'modules/user/views_plugin_argument_default_current_user.inc',
          200 => 'modules/user/views_plugin_argument_default_user.inc',
          201 => 'modules/user/views_plugin_argument_validate_user.inc',
          202 => 'modules/user/views_plugin_row_user_view.inc',
          203 => 'plugins/views_plugin_access.inc',
          204 => 'plugins/views_plugin_access_none.inc',
          205 => 'plugins/views_plugin_access_perm.inc',
          206 => 'plugins/views_plugin_access_role.inc',
          207 => 'plugins/views_plugin_argument_default.inc',
          208 => 'plugins/views_plugin_argument_default_php.inc',
          209 => 'plugins/views_plugin_argument_default_fixed.inc',
          210 => 'plugins/views_plugin_argument_default_raw.inc',
          211 => 'plugins/views_plugin_argument_validate.inc',
          212 => 'plugins/views_plugin_argument_validate_numeric.inc',
          213 => 'plugins/views_plugin_argument_validate_php.inc',
          214 => 'plugins/views_plugin_cache.inc',
          215 => 'plugins/views_plugin_cache_none.inc',
          216 => 'plugins/views_plugin_cache_time.inc',
          217 => 'plugins/views_plugin_display.inc',
          218 => 'plugins/views_plugin_display_attachment.inc',
          219 => 'plugins/views_plugin_display_block.inc',
          220 => 'plugins/views_plugin_display_default.inc',
          221 => 'plugins/views_plugin_display_embed.inc',
          222 => 'plugins/views_plugin_display_extender.inc',
          223 => 'plugins/views_plugin_display_feed.inc',
          224 => 'plugins/views_plugin_display_page.inc',
          225 => 'plugins/views_plugin_exposed_form_basic.inc',
          226 => 'plugins/views_plugin_exposed_form.inc',
          227 => 'plugins/views_plugin_exposed_form_input_required.inc',
          228 => 'plugins/views_plugin_localization_core.inc',
          229 => 'plugins/views_plugin_localization.inc',
          230 => 'plugins/views_plugin_localization_none.inc',
          231 => 'plugins/views_plugin_pager.inc',
          232 => 'plugins/views_plugin_pager_full.inc',
          233 => 'plugins/views_plugin_pager_mini.inc',
          234 => 'plugins/views_plugin_pager_none.inc',
          235 => 'plugins/views_plugin_pager_some.inc',
          236 => 'plugins/views_plugin_query.inc',
          237 => 'plugins/views_plugin_query_default.inc',
          238 => 'plugins/views_plugin_row.inc',
          239 => 'plugins/views_plugin_row_fields.inc',
          240 => 'plugins/views_plugin_row_rss_fields.inc',
          241 => 'plugins/views_plugin_style.inc',
          242 => 'plugins/views_plugin_style_default.inc',
          243 => 'plugins/views_plugin_style_grid.inc',
          244 => 'plugins/views_plugin_style_list.inc',
          245 => 'plugins/views_plugin_style_jump_menu.inc',
          246 => 'plugins/views_plugin_style_mapping.inc',
          247 => 'plugins/views_plugin_style_rss.inc',
          248 => 'plugins/views_plugin_style_summary.inc',
          249 => 'plugins/views_plugin_style_summary_jump_menu.inc',
          250 => 'plugins/views_plugin_style_summary_unformatted.inc',
          251 => 'plugins/views_plugin_style_table.inc',
          252 => 'tests/handlers/views_handlers.test',
          253 => 'tests/handlers/views_handler_area_text.test',
          254 => 'tests/handlers/views_handler_argument_null.test',
          255 => 'tests/handlers/views_handler_argument_string.test',
          256 => 'tests/handlers/views_handler_field.test',
          257 => 'tests/handlers/views_handler_field_boolean.test',
          258 => 'tests/handlers/views_handler_field_custom.test',
          259 => 'tests/handlers/views_handler_field_counter.test',
          260 => 'tests/handlers/views_handler_field_date.test',
          261 => 'tests/handlers/views_handler_field_file_extension.test',
          262 => 'tests/handlers/views_handler_field_file_size.test',
          263 => 'tests/handlers/views_handler_field_math.test',
          264 => 'tests/handlers/views_handler_field_url.test',
          265 => 'tests/handlers/views_handler_field_xss.test',
          266 => 'tests/handlers/views_handler_filter_combine.test',
          267 => 'tests/handlers/views_handler_filter_date.test',
          268 => 'tests/handlers/views_handler_filter_equality.test',
          269 => 'tests/handlers/views_handler_filter_in_operator.test',
          270 => 'tests/handlers/views_handler_filter_numeric.test',
          271 => 'tests/handlers/views_handler_filter_string.test',
          272 => 'tests/handlers/views_handler_sort_random.test',
          273 => 'tests/handlers/views_handler_sort_date.test',
          274 => 'tests/handlers/views_handler_sort.test',
          275 => 'tests/test_handlers/views_test_area_access.inc',
          276 => 'tests/test_plugins/views_test_plugin_access_test_dynamic.inc',
          277 => 'tests/test_plugins/views_test_plugin_access_test_static.inc',
          278 => 'tests/test_plugins/views_test_plugin_style_test_mapping.inc',
          279 => 'tests/plugins/views_plugin_display.test',
          280 => 'tests/styles/views_plugin_style_jump_menu.test',
          281 => 'tests/styles/views_plugin_style.test',
          282 => 'tests/styles/views_plugin_style_base.test',
          283 => 'tests/styles/views_plugin_style_mapping.test',
          284 => 'tests/styles/views_plugin_style_unformatted.test',
          285 => 'tests/views_access.test',
          286 => 'tests/views_analyze.test',
          287 => 'tests/views_basic.test',
          288 => 'tests/views_ajax.test',
          289 => 'tests/views_argument_default.test',
          290 => 'tests/views_argument_validator.test',
          291 => 'tests/views_exposed_form.test',
          292 => 'tests/field/views_fieldapi.test',
          293 => 'tests/views_glossary.test',
          294 => 'tests/views_groupby.test',
          295 => 'tests/views_handlers.test',
          296 => 'tests/views_module.test',
          297 => 'tests/views_pager.test',
          298 => 'tests/views_plugin_localization_test.inc',
          299 => 'tests/views_translatable.test',
          300 => 'tests/views_query.test',
          301 => 'tests/views_upgrade.test',
          302 => 'tests/views_test.views_default.inc',
          303 => 'tests/comment/views_handler_argument_comment_user_uid.test',
          304 => 'tests/comment/views_handler_filter_comment_user_uid.test',
          305 => 'tests/node/views_node_revision_relations.test',
          306 => 'tests/taxonomy/views_handler_relationship_node_term_data.test',
          307 => 'tests/user/views_handler_field_user_name.test',
          308 => 'tests/user/views_user_argument_default.test',
          309 => 'tests/user/views_user_argument_validate.test',
          310 => 'tests/user/views_user.test',
          311 => 'tests/views_cache.test',
          312 => 'tests/views_view.test',
          313 => 'tests/views_ui.test',
        ),
        'version' => '7.x-3.20',
        'project' => 'views',
        'datestamp' => '1523668093',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.20',
    ),
    'views_ui' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/modules/views/views_ui.module',
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
        '# @codingStandardsIgnoreLine
files' => 
        array (
          0 => 'views_ui.module',
        ),
        'files' => 
        array (
          0 => 'plugins/views_wizard/views_ui_base_views_wizard.class.php',
        ),
        'version' => '7.x-3.20',
        'project' => 'views',
        'datestamp' => '1523668093',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.20',
    ),
    'webform' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/modules/webform/webform.module',
      'name' => 'webform',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7430',
      'weight' => '-1',
      'info' => 
      array (
        'name' => 'Webform',
        'description' => 'Enables the creation of forms and questionnaires.',
        'core' => '7.x',
        'package' => 'Webform',
        'configure' => 'admin/config/content/webform',
        'php' => '5.3',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'views',
        ),
        'test_dependencies' => 
        array (
          0 => 'token',
        ),
        'files' => 
        array (
          0 => 'includes/webform.webformconditionals.inc',
          1 => 'includes/exporters/webform_exporter_delimited.inc',
          2 => 'includes/exporters/webform_exporter_excel_delimited.inc',
          3 => 'includes/exporters/webform_exporter_excel_xlsx.inc',
          4 => 'includes/exporters/webform_exporter.inc',
          5 => 'views/webform_handler_area_result_pager.inc',
          6 => 'views/webform_handler_field_form_body.inc',
          7 => 'views/webform_handler_field_is_draft.inc',
          8 => 'views/webform_handler_field_node_link_edit.inc',
          9 => 'views/webform_handler_field_node_link_results.inc',
          10 => 'views/webform_handler_field_submission_count.inc',
          11 => 'views/webform_handler_field_submission_data.inc',
          12 => 'views/webform_handler_field_submission_link.inc',
          13 => 'views/webform_handler_field_webform_status.inc',
          14 => 'views/webform_handler_filter_is_draft.inc',
          15 => 'views/webform_handler_filter_submission_data.inc',
          16 => 'views/webform_handler_filter_webform_status.inc',
          17 => 'views/webform_handler_numeric_data.inc',
          18 => 'views/webform_handler_relationship_submission_data.inc',
          19 => 'views/webform_plugin_row_submission_view.inc',
          20 => 'tests/WebformComponentsTestCase.test',
          21 => 'tests/WebformConditionalsTestCase.test',
          22 => 'tests/WebformGeneralTestCase.test',
          23 => 'tests/WebformPermissionsTestCase.test',
          24 => 'tests/WebformSubmissionTestCase.test',
          25 => 'tests/WebformTestCase.test',
        ),
        'version' => '7.x-4.17',
        'project' => 'webform',
        'datestamp' => '1524581893',
      ),
      'version' => '7.x-4.17',
    ),
    'webform_civicrm' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/modules/webform_civicrm/webform_civicrm.module',
      'name' => 'webform_civicrm',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7403',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Webform CiviCRM Integration',
        'description' => 'A powerful, flexible, user-friendly form builder for CiviCRM.',
        'core' => '7.x',
        'package' => 'CiviCRM',
        'dependencies' => 
        array (
          0 => 'civicrm (>=4.4)',
          1 => 'webform (>=4.12)',
          2 => 'options_element',
        ),
        'version' => '7.x-4.20',
        'project' => 'webform_civicrm',
        'datestamp' => '1521757088',
        'php' => '5.2.4',
      ),
      'version' => '7.x-4.20',
    ),
    'admin_devel' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/sites/all/modules/admin_menu/admin_devel/admin_devel.module',
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
        'version' => '7.x-3.0-rc5+23-dev',
        'project' => 'admin_menu',
        'datestamp' => '1538486285',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.0-rc5+23-dev',
    ),
    'admin_menu' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/sites/all/modules/admin_menu/admin_menu.module',
      'name' => 'admin_menu',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7304',
      'weight' => '100',
      'info' => 
      array (
        'name' => 'Administration menu',
        'description' => 'Provides a dropdown menu to most administrative tasks and other common destinations (to users with the proper permissions).',
        'package' => 'Administration',
        'core' => '7.x',
        'configure' => 'admin/config/administration/admin_menu',
        'dependencies' => 
        array (
          0 => 'system (>7.10)',
        ),
        'files' => 
        array (
          0 => 'tests/admin_menu.test',
        ),
        'version' => '7.x-3.0-rc5+23-dev',
        'project' => 'admin_menu',
        'datestamp' => '1538486285',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.0-rc5+23-dev',
    ),
    'admin_menu_toolbar' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/sites/all/modules/admin_menu/admin_menu_toolbar/admin_menu_toolbar.module',
      'name' => 'admin_menu_toolbar',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '6300',
      'weight' => '101',
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
        'version' => '7.x-3.0-rc5+23-dev',
        'project' => 'admin_menu',
        'datestamp' => '1538486285',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.0-rc5+23-dev',
    ),
    'captcha' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/sites/all/modules/captcha/captcha.module',
      'name' => 'captcha',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'CAPTCHA',
        'description' => 'Base CAPTCHA module for adding challenges to arbitrary forms.',
        'package' => 'Spam control',
        'core' => '7.x',
        'configure' => 'admin/config/people/captcha',
        'files' => 
        array (
          0 => 'captcha.module',
          1 => 'captcha.inc',
          2 => 'captcha.admin.inc',
          3 => 'captcha.install',
          4 => 'captcha.test',
        ),
        'version' => '7.x-1.5',
        'project' => 'captcha',
        'datestamp' => '1504724060',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.5',
    ),
    'image_captcha' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/sites/all/modules/captcha/image_captcha/image_captcha.module',
      'name' => 'image_captcha',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Image CAPTCHA',
        'description' => 'Provides an image based CAPTCHA challenge.',
        'package' => 'Spam control',
        'dependencies' => 
        array (
          0 => 'captcha',
        ),
        'core' => '7.x',
        'configure' => 'admin/config/people/captcha/image_captcha',
        'files' => 
        array (
          0 => 'image_captcha.install',
          1 => 'image_captcha.module',
          2 => 'image_captcha.admin.inc',
          3 => 'image_captcha.user.inc',
          4 => 'image_captcha.test',
        ),
        'version' => '7.x-1.5',
        'project' => 'captcha',
        'datestamp' => '1504724060',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.5',
    ),
    'civicrm' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/sites/all/modules/civicrm/drupal/civicrm.module',
      'name' => 'civicrm',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7401',
      'weight' => '100',
      'info' => 
      array (
        'name' => 'CiviCRM',
        'description' => 'Constituent relationship management system. Allows sites to manage contacts, relationships and groups, and track contact activities, contributions, memberships and events. See the <a href="https://civicrm.org/">CiviCRM website</a> for more information.',
        'version' => '7.x-5.3.2',
        'package' => 'CiviCRM',
        'core' => '7.x',
        'project' => 'civicrm',
        'php' => '5.3',
        'files' => 
        array (
          0 => 'civicrm.module',
          1 => 'civicrm.install',
          2 => 'civicrm_user.inc',
          3 => 'modules/views/civicrm.views.inc',
          4 => 'modules/views/civicrm.views_default.inc',
          5 => 'modules/views/civicrm/civicrm_handler_field.inc',
          6 => 'modules/views/civicrm/civicrm_handler_field_pseudo_constant.inc',
          7 => 'modules/views/civicrm/civicrm_handler_field_address.inc',
          8 => 'modules/views/civicrm/civicrm_handler_field_component.inc',
          9 => 'modules/views/civicrm/civicrm_handler_field_contact_link.inc',
          10 => 'modules/views/civicrm/civicrm_handler_field_county.inc',
          11 => 'modules/views/civicrm/civicrm_handler_field_country.inc',
          12 => 'modules/views/civicrm/civicrm_handler_field_custom.inc',
          13 => 'modules/views/civicrm/civicrm_handler_field_datetime.inc',
          14 => 'modules/views/civicrm/civicrm_handler_field_drupalid.inc',
          15 => 'modules/views/civicrm/civicrm_handler_field_email.inc',
          16 => 'modules/views/civicrm/civicrm_handler_field_encounter_medium.inc',
          17 => 'modules/views/civicrm/civicrm_handler_field_event.inc',
          18 => 'modules/views/civicrm/civicrm_handler_field_event_link.inc',
          19 => 'modules/views/civicrm/civicrm_handler_field_file.inc',
          20 => 'modules/views/civicrm/civicrm_handler_field_link.inc',
          21 => 'modules/views/civicrm/civicrm_handler_field_link_activity.inc',
          22 => 'modules/views/civicrm/civicrm_handler_field_link_contact.inc',
          23 => 'modules/views/civicrm/civicrm_handler_field_link_contribution.inc',
          24 => 'modules/views/civicrm/civicrm_handler_field_link_delete.inc',
          25 => 'modules/views/civicrm/civicrm_handler_field_link_edit.inc',
          26 => 'modules/views/civicrm/civicrm_handler_field_link_event.inc',
          27 => 'modules/views/civicrm/civicrm_handler_field_link_participant.inc',
          28 => 'modules/views/civicrm/civicrm_handler_field_link_pcp.inc',
          29 => 'modules/views/civicrm/civicrm_handler_field_link_relationship.inc',
          30 => 'modules/views/civicrm/civicrm_handler_field_location.inc',
          31 => 'modules/views/civicrm/civicrm_handler_field_mail.inc',
          32 => 'modules/views/civicrm/civicrm_handler_field_markup.inc',
          33 => 'modules/views/civicrm/civicrm_handler_field_money.inc',
          34 => 'modules/views/civicrm/civicrm_handler_field_option.inc',
          35 => 'modules/views/civicrm/civicrm_handler_field_pcp_raised_amount.inc',
          36 => 'modules/views/civicrm/civicrm_handler_field_phone.inc',
          37 => 'modules/views/civicrm/civicrm_handler_field_im.inc',
          38 => 'modules/views/civicrm/civicrm_handler_field_website.inc',
          39 => 'modules/views/civicrm/civicrm_handler_field_relationship_type.inc',
          40 => 'modules/views/civicrm/civicrm_handler_field_state.inc',
          41 => 'modules/views/civicrm/civicrm_handler_field_custom_file.inc',
          42 => 'modules/views/civicrm/civicrm_handler_field_contact_image.inc',
          43 => 'modules/views/civicrm/civicrm_handler_filter_pseudo_constant.inc',
          44 => 'modules/views/civicrm/civicrm_handler_filter_custom_option.inc',
          45 => 'modules/views/civicrm/civicrm_handler_filter_datetime.inc',
          46 => 'modules/views/civicrm/civicrm_handler_filter_encounter_medium.inc',
          47 => 'modules/views/civicrm/civicrm_handler_filter_group_status.inc',
          48 => 'modules/views/civicrm/civicrm_handler_filter_custom_option.inc',
          49 => 'modules/views/civicrm/civicrm_handler_filter_custom_single_option.inc',
          50 => 'modules/views/civicrm/civicrm_handler_filter_relationship_type.inc',
          51 => 'modules/views/civicrm/civicrm_handler_filter_country_multi.inc',
          52 => 'modules/views/civicrm/civicrm_handler_filter_state_multi.inc',
          53 => 'modules/views/civicrm/civicrm_handler_filter_domain.inc',
          54 => 'modules/views/civicrm/civicrm_handler_filter_contact_ref.inc',
          55 => 'modules/views/civicrm/civicrm_handler_field_activity.inc',
          56 => 'modules/views/civicrm/civicrm_handler_sort_date.inc',
          57 => 'modules/views/civicrm/civicrm_handler_sort_pcp_raised_amount.inc',
          58 => 'modules/views/civicrm/civicrm_handler_sort_address_pseudoconstant.inc',
          59 => 'modules/views/civicrm/civicrm_plugin_argument_default.inc',
          60 => 'modules/views/civicrm/views_handler_argument_civicrm_day.inc',
          61 => 'modules/views/civicrm/views_handler_argument_civicrm_fulldate.inc',
          62 => 'modules/views/civicrm/views_handler_argument_civicrm_month.inc',
          63 => 'modules/views/civicrm/views_handler_argument_civicrm_week.inc',
          64 => 'modules/views/civicrm/views_handler_argument_civicrm_year.inc',
          65 => 'modules/views/civicrm/views_handler_argument_civicrm_year_month.inc',
          66 => 'modules/views/civicrm/civicrm_handler_relationship.inc',
          67 => 'modules/views/civicrm/civicrm_handler_relationship_relationship.inc',
          68 => 'modules/views/civicrm/civicrm_handler_relationship_contact2users.inc',
          69 => 'modules/views/civicrm/civicrm_handler_relationship_memberships_contributions.inc',
          70 => 'modules/views/civicrm/civicrm_handler_relationship_location.inc',
          71 => 'modules/views/civicrm/civicrm_handler_relationship_mail.inc',
          72 => 'modules/views/civicrm/civicrm_handler_relationship_phone.inc',
          73 => 'modules/views/civicrm/civicrm_handler_relationship_im.inc',
          74 => 'modules/views/civicrm/civicrm_handler_relationship_website.inc',
          75 => 'modules/views/civicrm/civicrm_handler_relationship_address.inc',
          76 => 'modules/views/plugins/calendar_plugin_row_civicrm.inc',
          77 => 'modules/views/plugins/calendar_plugin_row_civicrm_event.inc',
          78 => 'modules/views/plugins/civicrm_plugin_argument_default_civicrm_id.inc',
        ),
        'dependencies' => 
        array (
        ),
      ),
      'version' => '7.x-5.3.2',
    ),
    'civicrmtheme' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/sites/all/modules/civicrm/drupal/modules/civicrmtheme/civicrmtheme.module',
      'name' => 'civicrmtheme',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '110',
      'info' => 
      array (
        'name' => 'CiviCRM Theme',
        'description' => 'Define alternate themes for CiviCRM.',
        'version' => '7.x-5.3.2',
        'core' => '7.x',
        'package' => 'CiviCRM',
        'project' => 'civicrm',
        'dependencies' => 
        array (
          0 => 'civicrm',
        ),
        'files' => 
        array (
          0 => 'civicrmtheme.module',
          1 => 'civicrmtheme.install',
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-5.3.2',
    ),
    'civicrm_contact_ref' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/sites/all/modules/civicrm/drupal/modules/civicrm_contact_ref/civicrm_contact_ref.module',
      'name' => 'civicrm_contact_ref',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'CiviCRM Contact Reference Field',
        'description' => 'Makes a CiviCRM Contact Reference Field.',
        'version' => '7.x-5.3.2',
        'core' => '7.x',
        'package' => 'CiviCRM',
        'project' => 'civicrm',
        'dependencies' => 
        array (
          0 => 'civicrm',
          1 => 'text',
          2 => 'list',
        ),
        'files' => 
        array (
          0 => 'civicrm_contact_ref.install',
          1 => 'civicrm_contact_ref.module',
          2 => 'civicrm_contact_ref.feeds.inc',
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-5.3.2',
    ),
    'civicrm_engage' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/sites/all/modules/civicrm/drupal/modules/civicrm_engage/civicrm_engage.module',
      'name' => 'civicrm_engage',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'CiviEngage',
        'description' => 'Walklist and Phone-banking support for CiviCRM.',
        'version' => '7.x-5.3.2',
        'core' => '7.x',
        'package' => 'CiviCRM',
        'project' => 'civicrm',
        'dependencies' => 
        array (
          0 => 'civicrm',
        ),
        'files' => 
        array (
          0 => 'civicrm_engage.module',
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-5.3.2',
    ),
    'civicrm_group_roles' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/sites/all/modules/civicrm/drupal/modules/civicrm_group_roles/civicrm_group_roles.module',
      'name' => 'civicrm_group_roles',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'CiviGroup Roles Sync',
        'description' => 'Sync Drupal Roles to CiviCRM Groups.',
        'version' => '7.x-5.3.2',
        'core' => '7.x',
        'package' => 'CiviCRM',
        'project' => 'civicrm',
        'configure' => 'admin/config/civicrm/civicrm_group_roles',
        'dependencies' => 
        array (
          0 => 'civicrm',
        ),
        'files' => 
        array (
          0 => 'civicrm_group_roles.module',
          1 => 'civicrm_group_roles.install',
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-5.3.2',
    ),
    'civicrm_member_roles' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/sites/all/modules/civicrm/drupal/modules/civicrm_member_roles/civicrm_member_roles.module',
      'name' => 'civicrm_member_roles',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'CiviMember Roles Sync',
        'description' => 'Synchronize CiviCRM Contacts with Membership Status to a specified Drupal Role both automatically and manually.',
        'version' => '7.x-5.3.2',
        'core' => '7.x',
        'package' => 'CiviCRM',
        'project' => 'civicrm',
        'dependencies' => 
        array (
          0 => 'civicrm',
        ),
        'configure' => 'admin/config/civicrm/civicrm_member_roles',
        'files' => 
        array (
          0 => 'civicrm_member_roles.module',
          1 => 'civicrm_member_roles.install',
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-5.3.2',
    ),
    'civicrm_og_sync' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/sites/all/modules/civicrm/drupal/modules/civicrm_og_sync/civicrm_og_sync.module',
      'name' => 'civicrm_og_sync',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'CiviCRM OG Sync',
        'description' => 'Synchronize Organic Groups and CiviCRM Groups and ACL\'s. More information at: http://wiki.civicrm.org/confluence/display/CRMDOC/CiviCRM+vs.+Organic+Groups',
        'version' => '7.x-5.3.2',
        'core' => '7.x',
        'package' => 'CiviCRM',
        'project' => 'civicrm',
        'dependencies' => 
        array (
          0 => 'civicrm',
          1 => 'og',
        ),
        'files' => 
        array (
          0 => 'civicrm_og_sync.module',
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-5.3.2',
    ),
    'civicrm_rules' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/sites/all/modules/civicrm/drupal/modules/civicrm_rules/civicrm_rules.module',
      'name' => 'civicrm_rules',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'CiviCRM Rules Integration',
        'description' => 'Integrate CiviCRM and Drupal Rules Module. Expose Contact, Contribution and other Objects along with Form / Page Operations.',
        'version' => '7.x-5.3.2',
        'core' => '7.x',
        'package' => 'CiviCRM',
        'project' => 'civicrm',
        'dependencies' => 
        array (
          0 => 'civicrm',
          1 => 'rules',
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-5.3.2',
    ),
    'eu_cookie_compliance' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/sites/all/modules/eu_cookie_compliance/eu_cookie_compliance.module',
      'name' => 'eu_cookie_compliance',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'EU Cookie Compliance',
        'description' => 'This module aims at making the web site compliant with the EU cookie regulation.',
        'core' => '7.x',
        'configure' => 'admin/config/system/eu-cookie-compliance',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'version' => '7.x-1.25',
        'project' => 'eu_cookie_compliance',
        'datestamp' => '1531429151',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.25',
    ),
    'google_captcha' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/sites/all/modules/google_captcha/google_captcha.module',
      'name' => 'google_captcha',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Google Captcha',
        'description' => 'Verifies if user is a human without necessity to solve a captcha',
        'dependencies' => 
        array (
          0 => 'captcha',
        ),
        'package' => 'Spam control',
        'core' => '7.x',
        'configure' => 'admin/config/people/captcha/google_captcha',
        'files' => 
        array (
          0 => 'google_captcha.admin.inc',
          1 => 'google_captcha.module',
          2 => 'google_captcha.install',
        ),
        'version' => '7.x-1.0',
        'project' => 'google_captcha',
        'datestamp' => '1418014381',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0',
    ),
    'login_destination' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/sites/all/modules/login_destination/login_destination.module',
      'name' => 'login_destination',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7003',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Login Destination',
        'description' => 'Customize the destination that the user is redirected to after login.',
        'core' => '7.x',
        'configure' => 'admin/config/people/login-destination',
        'version' => '7.x-1.4',
        'project' => 'login_destination',
        'datestamp' => '1453451940',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.4',
    ),
    'node_export_book' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/sites/all/modules/node_export/modules/node_export_book/node_export_book.module',
      'name' => 'node_export_book',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Node export book',
        'description' => 'Adds Book support to Node export',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'book',
          1 => 'node_export',
        ),
        'files' => 
        array (
          0 => 'node_export_book.module',
          1 => 'node_export_book_utils.inc',
        ),
        'package' => 'Node export',
        'project' => 'node_export',
        'version' => '7.x-3.1',
        'datestamp' => '1457077222',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.1',
    ),
    'node_export_dependency' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/sites/all/modules/node_export/modules/node_export_dependency/node_export_dependency.module',
      'name' => 'node_export_dependency',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Node export dependency (experimental)',
        'description' => 'Helps maintain relationships to dependent entities.  Intended to make Node export relation obsolete.',
        'dependencies' => 
        array (
          0 => 'node_export',
          1 => 'uuid',
        ),
        'core' => '7.x',
        'package' => 'Node export',
        'version' => '7.x-3.1',
        'project' => 'node_export',
        'datestamp' => '1457077222',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.1',
    ),
    'node_export_features' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/sites/all/modules/node_export/modules/node_export_features/node_export_features.module',
      'name' => 'node_export_features',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Node export features',
        'description' => 'Adds Features support to Node export, so you can put your exports into Features modules.',
        'dependencies' => 
        array (
          0 => 'node_export',
          1 => 'uuid',
          2 => 'features',
        ),
        'core' => '7.x',
        'package' => 'Node export',
        'version' => '7.x-3.1',
        'project' => 'node_export',
        'datestamp' => '1457077222',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.1',
    ),
    'node_export_features_ui' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/sites/all/modules/node_export/modules/node_export_features_ui/node_export_features_ui.module',
      'name' => 'node_export_features_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Node Export Features UI',
        'description' => 'Supply some common filter options to define node available to be exported.',
        'core' => '7.x',
        'package' => 'Node export',
        'configure' => 'admin/config/content/node_export/features',
        'dependencies' => 
        array (
          0 => 'node_export_features',
        ),
        'version' => '7.x-3.1',
        'project' => 'node_export',
        'datestamp' => '1457077222',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.1',
    ),
    'node_export_feeds' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/sites/all/modules/node_export/modules/node_export_feeds/node_export_feeds.module',
      'name' => 'node_export_feeds',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Node export feeds',
        'description' => 'Node export feeds importer.  This is a more advanced importer than the one built into node export, but tricky to use.',
        'core' => '7.x',
        'package' => 'Node export',
        'dependencies' => 
        array (
          0 => 'feeds',
          1 => 'node_export',
        ),
        'files' => 
        array (
          0 => 'FeedsNodeExportParser.inc',
          1 => 'FeedsNodeExportProcessor.inc',
        ),
        'version' => '7.x-3.1',
        'project' => 'node_export',
        'datestamp' => '1457077222',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.1',
    ),
    'node_export_relation' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/sites/all/modules/node_export/modules/node_export_relation/node_export_relation.module',
      'name' => 'node_export_relation',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Node export relation (deprecated)',
        'description' => 'Helps maintain relationships.  Supports node references, taxonomy, and organic groups.',
        'dependencies' => 
        array (
          0 => 'node_export',
          1 => 'uuid',
        ),
        'core' => '7.x',
        'package' => 'Node export',
        'version' => '7.x-3.1',
        'project' => 'node_export',
        'datestamp' => '1457077222',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.1',
    ),
    'node_export' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/sites/all/modules/node_export/node_export.module',
      'name' => 'node_export',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Node export',
        'description' => 'Allows users to export content and then import into another Drupal installation.',
        'dependencies' => 
        array (
          0 => 'uuid',
        ),
        'core' => '7.x',
        'package' => 'Node export',
        'configure' => 'admin/config/content/node_export',
        'files' => 
        array (
          0 => 'views/views_handler_field_node_link_export.inc',
          1 => 'node_export.test',
        ),
        'version' => '7.x-3.1',
        'project' => 'node_export',
        'datestamp' => '1457077222',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.1',
    ),
    'options_element' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/sites/all/modules/options_element/options_element.module',
      'name' => 'options_element',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Options element',
        'description' => 'A custom form element for entering the options in select lists, radios, or checkboxes.',
        'core' => '7.x',
        'package' => 'User interface',
        'version' => '7.x-1.12',
        'project' => 'options_element',
        'datestamp' => '1397696072',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.12',
    ),
    'seckit' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/sites/all/modules/seckit/seckit.module',
      'name' => 'seckit',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Security Kit',
        'description' => 'Enhance security of your Drupal website.',
        'package' => 'Security',
        'core' => '7.x',
        'configure' => 'admin/config/system/seckit',
        'files' => 
        array (
          0 => 'seckit.install',
          1 => 'seckit.module',
          2 => 'seckit.test',
          3 => 'includes/seckit.form.inc',
        ),
        'version' => '7.x-1.9',
        'project' => 'seckit',
        'datestamp' => '1399337028',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.9',
    ),
    'token' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/sites/all/modules/token/token.module',
      'name' => 'token',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Token',
        'description' => 'Provides a user interface for the Token API and some missing core tokens.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'token.test',
        ),
        'version' => '7.x-1.7',
        'project' => 'token',
        'datestamp' => '1485316088',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.7',
    ),
    'uuid' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/sites/all/modules/uuid/uuid.module',
      'name' => 'uuid',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Universally Unique ID',
        'description' => 'Extends the entity functionality and adds support for universally unique identifiers.',
        'core' => '7.x',
        'package' => 'UUID',
        'configure' => 'admin/config/system/uuid',
        'files' => 
        array (
          0 => 'uuid.test',
        ),
        'dependencies' => 
        array (
          0 => 'node',
          1 => 'user',
        ),
        'version' => '7.x-1.2',
        'project' => 'uuid',
        'datestamp' => '1531990689',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.2',
    ),
    'uuid_path' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/sites/all/modules/uuid/uuid_path/uuid_path.module',
      'name' => 'uuid_path',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'UUID Path',
        'description' => 'Provides export functionality for url aliases.',
        'core' => '7.x',
        'package' => 'UUID',
        'dependencies' => 
        array (
          0 => 'uuid',
        ),
        'version' => '7.x-1.2',
        'project' => 'uuid',
        'datestamp' => '1531990689',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.2',
    ),
    'uuid_services' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/sites/all/modules/uuid/uuid_services/uuid_services.module',
      'name' => 'uuid_services',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'UUID Services',
        'description' => 'Provides integration with the Services module, like exposing a UUID entity resource.',
        'core' => '7.x',
        'package' => 'Services - resources',
        'dependencies' => 
        array (
          0 => 'services',
          1 => 'uuid',
          2 => 'entity',
        ),
        'test_dependencies' => 
        array (
          0 => 'services',
          1 => 'entity',
          2 => 'file',
          3 => 'field',
          4 => 'file_entity',
        ),
        'version' => '7.x-1.2',
        'project' => 'uuid',
        'datestamp' => '1531990689',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.2',
    ),
    'uuid_services_example' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/sites/all/modules/uuid/uuid_services_example/uuid_services_example.module',
      'name' => 'uuid_services_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'UUID Services Example',
        'description' => 'Example feature of a UUID service. Works well with the Deploy Example feature as a client.',
        'core' => '7.x',
        'package' => 'Features',
        'php' => '5.2.4',
        'dependencies' => 
        array (
          0 => 'rest_server',
          1 => 'services',
          2 => 'uuid',
          3 => 'uuid_services',
        ),
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'services:services:3',
          ),
          'features_api' => 
          array (
            0 => 'api:2',
          ),
          'services_endpoint' => 
          array (
            0 => 'uuid_services_example',
          ),
        ),
        'version' => '7.x-1.2',
        'project' => 'uuid',
        'datestamp' => '1531990689',
      ),
      'version' => '7.x-1.2',
    ),
    'webform_share' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/sites/all/modules/webform_share/webform_share.module',
      'name' => 'webform_share',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Webform Share',
        'description' => 'Enables users with the right permissions to export webforms. These exports are used to set the default components when creating webforms of configured types.',
        'core' => '7.x',
        'package' => 'Webform',
        'dependencies' => 
        array (
          0 => 'webform',
        ),
        'version' => '7.x-1.3',
        'project' => 'webform_share',
        'datestamp' => '1457315863',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.3',
    ),
  ),
  'themes' => 
  array (
    'bartik' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/themes/bartik/bartik.info',
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
        'version' => '7.60',
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
        'datestamp' => '1539816636',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.60',
    ),
    'bootstrap' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/sites/all/themes/bootstrap/bootstrap.info',
      'name' => 'bootstrap',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Bootstrap',
        'description' => 'Built to use Bootstrap, a sleek, intuitive, and powerful front-end framework for faster and easier web development.',
        'core' => '7.x',
        'php' => '5.3.0',
        'simplytest_dependencies' => 
        array (
          0 => 'jquery_update',
        ),
        'regions' => 
        array (
          'navigation' => 'Navigation',
          'header' => 'Top Bar',
          'highlighted' => 'Highlighted',
          'help' => 'Help',
          'content' => 'Content',
          'sidebar_first' => 'Primary',
          'sidebar_second' => 'Secondary',
          'footer' => 'Footer',
          'page_top' => 'Page top',
          'page_bottom' => 'Page bottom',
        ),
        'settings' => 
        array (
          'bootstrap_fluid_container' => '0',
          'bootstrap_button_size' => '',
          'bootstrap_button_colorize' => '1',
          'bootstrap_button_iconize' => '1',
          'bootstrap_image_shape' => '',
          'bootstrap_image_responsive' => '1',
          'bootstrap_table_bordered' => '0',
          'bootstrap_table_condensed' => '0',
          'bootstrap_table_hover' => '1',
          'bootstrap_table_striped' => '1',
          'bootstrap_table_responsive' => '-1',
          'bootstrap_breadcrumb' => '1',
          'bootstrap_breadcrumb_home' => '0',
          'bootstrap_breadcrumb_title' => '1',
          'bootstrap_navbar_position' => '',
          'bootstrap_navbar_inverse' => '0',
          'bootstrap_pager_first_and_last' => '1',
          'bootstrap_region_well-navigation' => '',
          'bootstrap_region_well-header' => '',
          'bootstrap_region_well-highlighted' => '',
          'bootstrap_region_well-help' => '',
          'bootstrap_region_well-content' => '',
          'bootstrap_region_well-sidebar_first' => 'well',
          'bootstrap_region_well-sidebar_second' => '',
          'bootstrap_region_well-footer' => '',
          'bootstrap_anchors_fix' => '0',
          'bootstrap_anchors_smooth_scrolling' => '0',
          'bootstrap_forms_required_has_error' => '0',
          'bootstrap_forms_has_error_value_toggle' => '1',
          'bootstrap_forms_smart_descriptions' => '1',
          'bootstrap_forms_smart_descriptions_limit' => '250',
          'bootstrap_forms_smart_descriptions_allowed_tags' => 'b, code, em, i, kbd, span, strong',
          'bootstrap_popover_enabled' => '1',
          'bootstrap_popover_animation' => '1',
          'bootstrap_popover_html' => '0',
          'bootstrap_popover_placement' => 'right',
          'bootstrap_popover_selector' => '',
          'bootstrap_popover_trigger' => 
          array (
            '\'hover\'' => '0',
            '\'focus\'' => '0',
            '\'click\'' => 'click',
          ),
          'bootstrap_popover_trigger_autoclose' => '1',
          'bootstrap_popover_title' => '',
          'bootstrap_popover_content' => '',
          'bootstrap_popover_delay' => '0',
          'bootstrap_popover_container' => 'body',
          'bootstrap_tooltip_enabled' => '1',
          'bootstrap_tooltip_animation' => '1',
          'bootstrap_tooltip_html' => '0',
          'bootstrap_tooltip_placement' => 'auto left',
          'bootstrap_tooltip_selector' => '',
          'bootstrap_tooltip_trigger' => 
          array (
            '\'hover\'' => 'hover',
            '\'focus\'' => 'focus',
            '\'click\'' => '0',
          ),
          'bootstrap_tooltip_delay' => '0',
          'bootstrap_tooltip_container' => 'body',
          'bootstrap_cdn_provider' => 'jsdelivr',
          'bootstrap_cdn_custom_css' => 'https://cdn.jsdelivr.net/bootstrap/3.3.7/css/bootstrap.css',
          'bootstrap_cdn_custom_css_min' => 'https://cdn.jsdelivr.net/bootstrap/3.3.7/css/bootstrap.min.css',
          'bootstrap_cdn_custom_js' => 'https://cdn.jsdelivr.net/bootstrap/3.3.7/js/bootstrap.js',
          'bootstrap_cdn_custom_js_min' => 'https://cdn.jsdelivr.net/bootstrap/3.3.7/js/bootstrap.min.js',
          'bootstrap_cdn_jsdelivr_version' => '3.3.7',
          'bootstrap_cdn_jsdelivr_theme' => 'bootstrap',
          'toggle_name' => '1',
          'toggle_search' => '1',
          'jquery_update_jquery_version' => '2.1',
        ),
        'exclude' => 
        array (
          'css' => 
          array (
            0 => 'misc/vertical-tabs.css',
            1 => 'modules/aggregator/aggregator.css',
            2 => 'modules/book/book.css',
            3 => 'modules/comment/comment.css',
            4 => 'modules/dblog/dblog.css',
            5 => 'modules/file/file.css',
            6 => 'modules/filter/filter.css',
            7 => 'modules/forum/forum.css',
            8 => 'modules/help/help.css',
            9 => 'modules/menu/menu.css',
            10 => 'modules/openid/openid.css',
            11 => 'modules/poll/poll.css',
            12 => 'modules/search/search.css',
            13 => 'modules/statistics/statistics.css',
            14 => 'modules/syslog/syslog.css',
            15 => 'modules/system/maintenance.css',
            16 => 'modules/system/system.maintenance.css',
            17 => 'modules/system/system.menus.css',
            18 => 'modules/system/system.messages.css',
            19 => 'modules/system/system.theme.css',
            20 => 'modules/taxonomy/taxonomy.css',
            21 => 'modules/tracker/tracker.css',
            22 => 'modules/update/update.css',
            23 => 'modules/user/user.css',
          ),
        ),
        'breakpoints' => 
        array (
          'screen-xs-max' => '(max-width: 767px)',
          'screen-sm-min' => '(min-width: 768px)',
          'screen-sm-max' => '(max-width: 991px)',
          'screen-md-min' => '(min-width: 992px)',
          'screen-md-max' => '(max-width: 1199px)',
          'screen-lg-min' => '(min-width: 1200px)',
        ),
        'multipliers' => 
        array (
          'screen-xs-max' => 
          array (
            0 => '1.5x',
            1 => '2x',
          ),
          'screen-sm-min' => 
          array (
            0 => '1.5x',
            1 => '2x',
          ),
          'screen-sm-max' => 
          array (
            0 => '1.5x',
            1 => '2x',
          ),
          'screen-md-min' => 
          array (
            0 => '1.5x',
            1 => '2x',
          ),
          'screen-md-max' => 
          array (
            0 => '1.5x',
            1 => '2x',
          ),
          'screen-lg-min' => 
          array (
            0 => '1.5x',
            1 => '2x',
          ),
        ),
        'version' => '7.x-3.22',
        'project' => 'bootstrap',
        'datestamp' => '1542005892',
        'dependencies' => 
        array (
        ),
      ),
      'version' => '7.x-3.22',
    ),
    'civi_bartik' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/sites/all/themes/civi_bartik/civi_bartik.info',
      'name' => 'civi_bartik',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'CiviBartik',
        'description' => 'A wider, recolorable admin theme for CiviCRM based on Drupal Core\'s Bartik theme.',
        'package' => 'Core',
        'core' => '7.x',
        'base theme' => 'bartik',
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
        'version' => '7.x-1.0',
        'project' => 'civi_bartik',
        'datestamp' => '1388663018',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0',
    ),
    'garland' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/themes/garland/garland.info',
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
        'version' => '7.60',
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
        'datestamp' => '1539816636',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.60',
    ),
    'seven' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/themes/seven/seven.info',
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
        'version' => '7.60',
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
        'datestamp' => '1539816636',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.60',
    ),
    'stark' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.57/themes/stark/stark.info',
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
        'version' => '7.60',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'layout.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1539816636',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.60',
    ),
  ),
);
$options['civicrm_cron_username'] = NULL;
$options['civicrm_cron_password'] = NULL;
$options['civicrm_sitekey'] = 'Iedeeyuphiep8heicheekeimohjaebur';
$options['installed'] = true;
$options['profile'] = 'standard';
$options['language'] = 'en';
$options['aliases'] = array (
);
# Aegir additions.
$_SERVER['db_type'] = $options['db_type'];
$_SERVER['db_port'] = $options['db_port'];
$_SERVER['db_host'] = $options['db_host'];
$_SERVER['db_user'] = $options['db_user'];
$_SERVER['db_passwd'] = $options['db_passwd'];
$_SERVER['db_name'] = $options['db_name'];

# Local non-aegir-generated additions.
@include_once('/var/aegir/platforms/drupal-7.57/sites/neprofitne.org/local.drushrc.php');
