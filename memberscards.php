<?php

require_once 'memberscards.civix.php';
// phpcs:disable
use CRM_Memberscards_ExtensionUtil as E;
// phpcs:enable

/**
 * Implements hook_civicrm_config().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_config/
 */
function memberscards_civicrm_config(&$config): void {
  _memberscards_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_install
 */
function memberscards_civicrm_install(): void {
  _memberscards_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_enable
 */
function memberscards_civicrm_enable(): void {
  _memberscards_civix_civicrm_enable();
}
