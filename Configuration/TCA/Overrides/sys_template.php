<?php
defined('TYPO3_MODE') || die();
call_user_func(function()
{
    /**
     * Temporary variables
     */
    $extensionKey = 'eaw_t3124';

    /**
     * Default TypoScript for EawT3 12.4
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript',
        'EAW T3 12.4 Template'
    );
});
