<?php
defined('TYPO3_MODE') || die();

call_user_func(static function () {

$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['t3starteraudio_t3starter_audio'] = 'tx_t3starteraudio_t3starter_audio';
$tempColumns = [
    'tx_t3starteraudio_audio01link' => [
        'config' => [
            'eval' => 'required',
            'fieldControl' => [
                'linkPopup' => [
                    'options' => [
                        'allowedExtensions' => 'mp3,ogg,wav',
                        'blindLinkOptions' => 'page,url,mail,telephone,folder',
                    ],
                ],
            ],
            'renderType' => 'inputLink',
            'type' => 'input',
        ],
        'exclude' => 1,
        'label' => 'LLL:EXT:t3starter_audio/Resources/Private/Language/locallang_db.xlf:tt_content.tx_t3starteraudio_audio01link',
    ],
];
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $tempColumns);
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:t3starter_audio/Resources/Private/Language/locallang_db.xlf:tt_content.CType.div._t3starteraudio_',
    '--div--',
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:t3starter_audio/Resources/Private/Language/locallang_db.xlf:tt_content.CType.t3starteraudio_t3starter_audio',
    't3starteraudio_t3starter_audio',
    'tx_t3starteraudio_t3starter_audio',
];
$tempTypes = [
    't3starteraudio_t3starter_audio' => [
        'columnsOverrides' => [
            'header' => [
                'label' => 'Headline Audiodatei',
            ],
            'tx_t3starteraudio_audio01link' => [
                'label' => 'Eine Audiodatei wählen',
            ],
        ],
        'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header,image,tx_t3starteraudio_audio01link,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
    ],
];
$GLOBALS['TCA']['tt_content']['types'] += $tempTypes;
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    't3starter_audio',
    'Configuration/TypoScript/',
    't3starter_audio'
);

});

