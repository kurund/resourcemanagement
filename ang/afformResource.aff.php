<?php
use CRM_Resourcemanagement_ExtensionUtil as E;

return [
  'type' => 'form',
  'title' => E::ts('Resource'),
  'icon' => 'fa-list-alt',
  'server_route' => 'civicrm/resource',
  'create_submission' => TRUE,
];
