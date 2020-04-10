<?php
if (version_compare(TYPO3\CMS\Core\Utility\VersionNumberUtility::getNumericTypo3Version(), '9.4', '>=') === true) {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        'jn_lighterbox',
        'Configuration/TypoScript',
        '[joppnet] Lightbox'
    );
} else {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        'jn_lighterbox',
        'Configuration/TypoScriptLegacy',
        '[joppnet] Lightbox (TYPO3 < 9.4)'
    );
}