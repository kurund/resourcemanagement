<?php
use CRM_Resourcemanagement_ExtensionUtil as E;

return [
  'type' => 'form',
  'title' => E::ts('Resource Booking'),
  'icon' => 'fa-list-alt',
  'server_route' => 'civicrm/resourcebooking',
  'create_submission' => TRUE,
];
