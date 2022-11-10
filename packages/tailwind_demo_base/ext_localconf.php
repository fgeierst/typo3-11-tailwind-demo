<?php
defined('TYPO3') or die('Access denied.');
/***************
 * Add default RTE configuration
 */
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['tailwind_demo_base'] = 'EXT:tailwind_demo_base/Configuration/RTE/Default.yaml';

/***************
 * PageTS
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:tailwind_demo_base/Configuration/TsConfig/Page/All.tsconfig">');

/***************
 * Fluid Components
 */
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['fluid_components']['namespaces']['Floriangeierstanger\\TailwindDemoBase\\Components'] =
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('tailwind_demo_base', 'Resources/Private/Components');