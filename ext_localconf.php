<?php
//if (!defined('TYPO3_MODE')) {
//	die('Access denied.');
//}

// Prevent Script from being called directly since TYPO3 11
defined('TYPO3') or die();

call_user_func(static function () {

// Register content element icons
$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
$iconRegistry->registerIcon(
    'tx_t3starteraudio_t3starter_audio',
    \TYPO3\CMS\Core\Imaging\IconProvider\FontawesomeIconProvider::class,
    [
        'name' => 'file-audio-o',
    ]
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:t3starter_audio/Configuration/TsConfig/Page/NewContentElementWizard.tsconfig">'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:t3starter_audio/Configuration/TsConfig/Page/BackendPreview.tsconfig">'
);
// Add backend preview hook
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['tt_content_drawItem']['t3starter_audio'] =
    T3starterAudio\T3starterAudio\Hooks\PageLayoutViewDrawItem::class;

});

