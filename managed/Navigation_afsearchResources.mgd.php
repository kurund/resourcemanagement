<?php
use CRM_Resourcemanagement_ExtensionUtil as E;

return [
  [
    'name' => 'Navigation_afsearchResources',
    'entity' => 'Navigation',
    'cleanup' => 'unused',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'label' => E::ts('Resources'),
        'name' => 'afsearchResources',
        'url' => 'civicrm/resources',
        'icon' => 'crm-i fa-list-alt',
        'permission' => ['access CiviCRM'],
        'permission_operator' => 'AND',
        'weight' => 81,
      ],
      'match' => ['name', 'domain_id'],
    ],
  ],
];
