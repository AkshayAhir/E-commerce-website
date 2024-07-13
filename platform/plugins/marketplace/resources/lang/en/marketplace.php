<?php

return [
    'name'              => 'Marketplace',
    'email'             => [
        'store_new_order_title'                => 'Notice about new order',
        'store_new_order_description'          => 'Send email to the store owner when an order placed',
        'verify_vendor_title'                  => 'Verify vendor',
        'verify_vendor_description'            => 'Send email to the admin when a vendor registers',
        'pending_product_approval_title'       => 'Pending product approval',
        'pending_product_approval_description' => 'Send email to the admin when a vendor post their products',
        'vendor_account_approved_title'        => 'Vendor account approved',
        'vendor_account_approved_description'  => 'Send email to vendor when their account approved',
        'product_approved_title'               => 'Product approved',
        'product_approved_description'         => 'Send email to vendor when their product approved',
        'withdrawal_approved_title'            => 'Withdrawal approved',
        'withdrawal_approved_description'      => 'Send email to vendor when their withdrawal request approved',
    ],
    'current_balance'   => 'Current balance',
    'settings'          => [
        'name'                    => 'Settings',
        'title'                   => 'Settings for marketplace',
        'description'             => '',
        'fee_per_order'           => 'Fee per order (%), suggest: 2 or 3',
        'fee_withdrawal'          => 'Fee withdrawal (Fixed amount)',
        'check_valid_signature'   => 'Check valid signature in vendor\'s earnings',
        'verify_vendor'           => 'Vendor verification (Vendor just can post their product listing after getting verified)',
        'enable_product_approval' => 'Enable product approval',
    ],
    'theme_options'     => [
        'name'                  => 'Marketplace',
        'description'           => 'Theme options for Marketplace',
        'logo_vendor_dashboard' => 'Logo in the vendor dashboard (Default is the main logo)',
    ],
    'store_name'        => 'Store name',
    'store_email'       => 'Store email',
    'store_phone'       => 'Store phone',
    'product_name'      => 'Product name',
    'product_url'       => 'Product URL',
    'withdrawal_amount' => 'Withdrawal amount',
    'helpers'           => [
        'customer_status' => 'If you change the status other than ":status" this vendor\'s store will also change to ":store"',
        'store_status'    => 'If you change the status other than ":status" this store\'s account will also change to ":customer"',
    ],
    'tables'            => [
        'earnings'       => 'Earnings',
        'products_count' => 'Products Count',
    ],
];
