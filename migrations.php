<?php
return [
    'name' => 'Project Migrations',
    'migrations_namespace' => 'IQDEV\Migrations',
    'table_name' => 'iqdev_project_migrations',
    'column_name' => 'version',
    'column_length' => 255,
    'executed_at_column_name' => 'executed_at',
    'migrations_directory' => 'src/Migrations',
    'all_or_nothing' => true,
];
