<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'pgsql:host=localhost;port=5432;dbname=feedback',
    //  'dsn' => 'mysql:host=localhost;port=3306;dbname=dulieu',
    //'dsn' => 'mysql:host=localhost;dbname=reportsa_macromoney', // MySQL, MariaDB
    //'dsn' => 'sqlite:/path/to/database/file', // SQLite
    //'dsn' => 'pgsql:host=localhost;port=5432;dbname=mydatabase', // PostgreSQL
    //'dsn' => 'cubrid:dbname=demodb;host=localhost;port=33000', // CUBRID
    //'dsn' => 'sqlsrv:Server=localhost;Database=mydatabase', // MS SQL Server, sqlsrv driver
    //'dsn' => 'dblib:host=localhost;dbname=mydatabase', // MS SQL Server, dblib driver
    //'dsn' => 'mssql:host=localhost;dbname=mydatabase', // MS SQL Server, mssql driver
    //'dsn' => 'oci:dbname=//localhost:1521/mydatabase', // Oracle
    'username' => 'postgres',
    'password' => 'postgres',
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];

