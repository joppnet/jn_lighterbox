<?php
declare(strict_types=1);

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

ExtensionManagementUtility::addStaticFile(
    'jn_lighterbox',
    'Configuration/TypoScript',
    '[joppnet] Lightbox'
);
