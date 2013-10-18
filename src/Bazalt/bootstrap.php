<?php

if (!defined('APPLICATION_ENV')) {
    define('APPLICATION_ENV', getenv('APPLICATION_ENV'));
}
define('DEVELOPMENT_STAGE', APPLICATION_ENV == 'development');
define('PRODUCTION_STAGE',  APPLICATION_ENV == 'production');
define('TESTING_STAGE',     APPLICATION_ENV == 'testing');