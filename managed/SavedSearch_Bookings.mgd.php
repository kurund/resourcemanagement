<?php
use CRM_Resourcemanagement_ExtensionUtil as E;

return [
  [
    'name' => 'SavedSearch_Bookings',
    'entity' => 'SavedSearch',
    'cleanup' => 'unused',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'Bookings',
        'label' => E::ts('Bookings'),
        'api_entity' => 'ResourceBooking',
        'api_params' => [
          'version' => 4,
          'select' => ['booking_code'],
          'orderBy' => [],
          'where' => [],
          'groupBy' => [],
          'join' => [],
          'having' => [],
        ],
      ],
      'match' => ['name'],
    ],
  ],
  [
    'name' => 'SavedSearch_Bookings_SearchDisplay_Bookings_Table_1',
    'entity' => 'SearchDisplay',
    'cleanup' => 'unused',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'Bookings_Table_1',
        'label' => E::ts('Bookings Table 1'),
        'saved_search_id.name' => 'Bookings',
        'type' => 'table',
        'settings' => [
          'description' => E::ts(NULL),
          'sort' => [],
          'limit' => 50,
          'pager' => [],
          'placeholder' => 5,
          'columns' => [
            [
              'type' => 'field',
              'key' => 'booking_code',
              'label' => E::ts('Booking Code'),
              'sortable' => TRUE,
            ],
            [
              'size' => 'btn-xs',
              'links' => [
                [
                  'path' => '',
                  'icon' => 'fa-trash',
                  'text' => E::ts('Cancel Bookings'),
                  'style' => 'danger',
                  'conditions' => [],
                  'task' => 'delete',
                  'entity' => 'ResourceBooking',
                  'action' => '',
                  'join' => '',
                  'target' => 'crm-popup',
                ],
              ],
              'type' => 'buttons',
              'alignment' => 'text-right',
            ],
          ],
          'actions' => FALSE,
          'classes' => ['table', 'table-striped'],
        ],
      ],
      'match' => [
        'saved_search_id',
        'name',
      ],
    ],
  ],
];
