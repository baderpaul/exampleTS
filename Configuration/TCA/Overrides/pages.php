<?php
defined('TYPO3_MODE') || die();
call_user_func(function()
{
    /**
     * Temporary variables
     */
    $extensionKey = 'eaw_t3124';

    /**
     * Default PageTS for Eaw T3 12.4
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
        $extensionKey,
        'Configuration/TsConfig/Page/All.tsconfig',
        'EAW T3 12.4 Template'
    );
});
