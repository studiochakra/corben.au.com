<?php

/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/general.php
 */

return array(
	
    // Use the same in all environments
    '*' => array(
        'omitScriptNameInUrls' => true,
        'usePathInfo' => false,﻿
    ),

    // Dev site config
    '.dev' => array(
        'devMode' => true,
        'environmentVariables' => array(
            'siteUrl'        => 'http://corben.dev/',
            'fileSystemPath' => '../corben/images/',
        ),
    ),

    // Live site config
    'staging.studiochakra.com' => array(
        'cooldownDuration' => 0,

        'environmentVariables' => array(
            'siteUrl'        => 'http://staging.studiochakra.com/corben/corben',
            'fileSystemPath' => '/home/ryanbeli/public_html/studiochakra-staging/corben/corben/images/',
        ),
    ),

);