<?php
defined('TYPO3_MODE') || die();
/***************
 * Add default RTE configuration
 */
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['sym_cke_preset'] = 'EXT:eaw_t3124/Configuration/RTE/sym_cke_preset.yaml';


// WebP-Bilder rendern
$GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'] = 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg,webp';

/***************
 * PageTS
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:eaw_t3124/Configuration/TsConfig/Page/All.tsconfig">');
