<?php

return [
    'formFields' => [
        'title' => [
            'value' => null,
            'name' => 'title',
            'type' => 'input',
            'props' => [
                'label' => 'icommerce::common.title',
            ],
        ],
        'description' => [
            'value' => null,
            'name' => 'description',
            'type' => 'input',
            'props' => [
                'label' => 'icommerce::common.description',
                'type' => 'textarea',
                'rows' => 3,
            ],
        ],
        'status' => [
            'value' => '0',
            'name' => 'status',
            'type' => 'select',
            'props' => [
                'label' => 'icommerce::common.status',
                'useInput' => false,
                'useChips' => false,
                'multiple' => false,
                'hideDropdownIcon' => true,
                'newValueMode' => 'add-unique',
                'options' => [
                    ['label' => 'Activo', 'value' => '1'],
                    ['label' => 'Inactivo', 'value' => '0'],
                ],
            ],
        ],
        'mainimage' => [
            'value' => (object) [],
            'name' => 'mediasSingle',
            'type' => 'media',
            'props' => [
                'label' => 'Image',
                'zone' => 'mainimage',
                'entity' => "Modules\Icommerce\Entities\PaymentMethod",
                'entityId' => null,
            ],
        ],
        'init' => [
            'value' => 'Modules\Icommercexpay\Http\Controllers\Api\IcommerceXpayApiController',
            'name' => 'init',
            'isFakeField' => true,
        ],
        'user' => [
            'value' => null,
            'name' => 'user',
            'isFakeField' => true,
            'type' => 'input',
            'props' => [
                'label' => 'icommercexpay::icommercexpays.table.user',
            ],
        ],
        'pass' => [
            'value' => null,
            'name' => 'pass',
            'isFakeField' => true,
            'type' => 'input',
            'props' => [
                'label' => 'icommercexpay::icommercexpays.table.pass',
            ],
        ],
        'token' => [
            'value' => null,
            'name' => 'token',
            'isFakeField' => true,
            'type' => 'input',
            'props' => [
                'label' => 'icommercexpay::icommercexpays.table.token',
            ],
        ],
        'showInCurrencies' => [
            'value' => ['COP'],
            'name' => 'showInCurrencies',
            'isFakeField' => true,
            'type' => 'select',
            'props' => [
                'label' => 'icommerce::paymentmethods.messages.showInCurrencies',
                'useInput' => false,
                'useChips' => false,
                'multiple' => true,
                'hideDropdownIcon' => true,
                'newValueMode' => 'add-unique',
                'options' => [
                    ['label' => 'COP', 'value' => 'COP'],
                ],
            ],
        ],
        'mode' => [
            'value' => 'sandbox',
            'name' => 'mode',
            'isFakeField' => true,
            'type' => 'select',
            'props' => [
                'label' => 'icommercexpay::icommercexpays.table.mode',
                'useInput' => false,
                'useChips' => false,
                'multiple' => false,
                'hideDropdownIcon' => true,
                'newValueMode' => 'add-unique',
                'options' => [
                    ['label' => 'Sandbox', 'value' => 'sandbox'],
                    ['label' => 'Production', 'value' => 'production'],
                ],
            ],
        ],

    ],
];
