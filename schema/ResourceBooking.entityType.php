<?php
use CRM_Resourcemanagement_ExtensionUtil as E;

return [
  'name' => 'ResourceBooking',
  'table' => 'civicrm_resource_booking',
  'class' => 'CRM_Resourcemanagement_DAO_ResourceBooking',
  'getInfo' => fn() => [
    'title' => E::ts('Resource Booking'),
    'title_plural' => E::ts('Resource Bookings'),
    'description' => E::ts('Resource Booking'),
    'log' => TRUE,
  ],
  'getFields' => fn() => [
    'id' => [
      'title' => E::ts('ID'),
      'sql_type' => 'int unsigned',
      'input_type' => 'Number',
      'required' => TRUE,
      'description' => E::ts('Unique ResourceBooking ID'),
      'primary_key' => TRUE,
      'auto_increment' => TRUE,
    ],
    'booking_code' => [
      'title' => E::ts('Booking Code'),
      'sql_type' => 'varchar(255)',
      'input_type' => 'Text',
      'description' => E::ts('Booking Code'),
    ],
    'resource_id' => [
      'title' => E::ts('Resource ID'),
      'sql_type' => 'int unsigned',
      'input_type' => 'EntityRef',
      'description' => E::ts('FK to Resource'),
      'entity_reference' => [
        'entity' => 'Resource',
        'key' => 'id',
        'on_delete' => 'CASCADE',
      ],
    ],
    'contact_id' => [
      'title' => E::ts('Contact ID'),
      'sql_type' => 'int unsigned',
      'input_type' => 'EntityRef',
      'description' => E::ts('FK to Contact'),
      'entity_reference' => [
        'entity' => 'Contact',
        'key' => 'id',
        'on_delete' => 'CASCADE',
      ],
    ],
  ],
  'getIndices' => fn() => [],
  'getPaths' => fn() => [],
];
