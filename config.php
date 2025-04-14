<?php

// Personalização
define('KANBOARD_APPLICATION_TITLE', 'Kanboard');
define('KANBOARD_DEFAULT_LANGUAGE', 'pt_BR');

// Banco de dados (PostgreSQL)
//define('DB_DRIVER', 'postgres');
//define('DB_USERNAME', 'kanboard');
//define('DB_PASSWORD', 'kanboardpass');
//define('DB_NAME', 'kanboard');
//define('DB_HOSTNAME', 'db');

// Plugins via interface
define('PLUGIN_INSTALLER', true);

// Segurança e ajustes
define('REMEMBER_ME_AUTH', true);
define('BRUTEFORCE_CAPTCHA', true);
define('DISABLE_JS_IE_COMPAT_MODE', true);
define('KANBOARD_DISABLE_LOGGING', false);
define('FILE_STORAGE', 'data/files');
