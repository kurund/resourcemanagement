<?php
use CRM_Resourcemanagement_ExtensionUtil as E;

// Adds option group for ResourceType
return [
  [
    'name' => 'ResourceType',
    'entity' => 'OptionGroup',
    'update' => 'always',
    'cleanup' => 'always',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'resource_type',
        'title' => E::ts('Resource Type'),
        'is_reserved' => TRUE,
        'is_active' => TRUE,
        'option_value_fields' => [
          'name',
          'label',
          'icon',
          'description',
          'grouping',
        ],
      ],
      'match' => ['name'],
    ],
  ],
  [
    'name' => 'ResourceType:room',
    'entity' => 'OptionValue',
    'cleanup' => 'always',
    'update' => 'always',
    'params' => [
      'version' => 4,
      'values' => [
        'option_group_id.name' => 'resource_type',
        'value' => '1',
        'name' => 'room',
        'label' => E::ts('Room'),
        'description' => E::ts('Room resource'),
        'icon' => 'fa-table',
        'is_reserved' => TRUE,
        'is_active' => TRUE,
      ],
      'match' => ['option_group_id', 'name'],
    ],
  ],
  [
    'name' => 'ResourceType:conference',
    'entity' => 'OptionValue',
    'cleanup' => 'always',
    'update' => 'always',
    'params' => [
      'version' => 4,
      'values' => [
        'option_group_id.name' => 'resource_type',
        'value' => '2',
        'name' => 'conference',
        'label' => E::ts('Conference'),
        'description' => E::ts('conference resource'),
        'icon' => 'fa-table',
        'is_reserved' => TRUE,
        'is_active' => TRUE,
      ],
      'match' => ['option_group_id', 'name'],
    ],
  ],
];
