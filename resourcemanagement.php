<?php

require_once 'resourcemanagement.civix.php';

use CRM_Resourcemanagement_ExtensionUtil as E;

/**
 * Implements hook_civicrm_config().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_config/
 */
function resourcemanagement_civicrm_config(&$config): void {
  _resourcemanagement_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_install
 */
function resourcemanagement_civicrm_install(): void {
  _resourcemanagement_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_enable
 */
function resourcemanagement_civicrm_enable(): void {
  _resourcemanagement_civix_civicrm_enable();
}
