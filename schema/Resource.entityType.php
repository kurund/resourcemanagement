<?php
use CRM_Resourcemanagement_ExtensionUtil as E;

return [
  'name' => 'Resource',
  'table' => 'civicrm_resource',
  'class' => 'CRM_Resourcemanagement_DAO_Resource',
  'getInfo' => fn() => [
    'title' => E::ts('Resource'),
    'title_plural' => E::ts('Resources'),
    'description' => E::ts('Resources in CiviCRM'),
    'log' => TRUE,
  ],
  'getFields' => fn() => [
    'id' => [
      'title' => E::ts('ID'),
      'sql_type' => 'int unsigned',
      'input_type' => 'Number',
      'required' => TRUE,
      'description' => E::ts('Unique Resource ID'),
      'primary_key' => TRUE,
      'auto_increment' => TRUE,
    ],
    'name' => [
      'title' => E::ts('Name'),
      'sql_type' => 'varchar(255)',
      'input_type' => 'Text',
      'description' => E::ts('Resource name'),
    ],
    'description' => [
      'title' => E::ts('Description'),
      'sql_type' => 'longtext',
      'input_type' => 'RichTextEditor',
      'description' => E::ts('Resource description'),
      'input_attrs' => [
        'rows' => 4,
        'cols' => 30,
      ],
    ],
    'resource_type_id' => [
      'title' => E::ts('Resource Type ID'),
      'sql_type' => 'int unsigned',
      'input_type' => 'Select',
      'required' => TRUE,
      'description' => E::ts('FK to civicrm_option_value.id, that has to be valid, registered resource type.'),
      'input_attrs' => [
        'label' => E::ts('Resource Type'),
      ],
      'pseudoconstant' => [
        'option_group_name' => 'resource_type',
      ],
    ],
  ],
  'getIndices' => fn() => [],
  'getPaths' => fn() => [
    'add' => 'civicrm/resource?reset=1',
    'update' => 'civicrm/resource#?Resource1=[id]',
  ],
];
