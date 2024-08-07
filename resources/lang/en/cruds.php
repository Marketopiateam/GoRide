<?php

return [
    'userManagement' => [
        'title'          => 'User management',
        'title_singular' => 'User management',
    ],
    
    'admin' => [
        'title'          => 'Admins',
        'title_singular' => 'Admin',
        'fields'         => [
            'full_name'         => 'Full Name',
            'email'             => 'Email',
            'roles'             => 'Roles',
            'password'          => 'password',
            'confirm_password'  => 'Confirm Password',   
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
     
    'driver' => [
        'title'          => 'Drivers',
        'title_singular' => 'Driver',
        'deactivated'      => 'Deactivated Drivers',
        'activated'      => 'Activated Drivers',
        'list_all'      => 'All Drivers',
        'fields'         => [
            'full_name'         => 'Full Name',
            'email'             => 'Email',
            'roles'             => 'Roles',
            'password'          => 'password',
            'confirm_password'  => 'Confirm Password',   
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'permission' => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role' => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'permissions'        => 'Permissions',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user' => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'name'                     => 'Name',
            'name_helper'              => ' ',
            'email'                    => 'Email',
            'email_helper'             => ' ',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => ' ',
            'password'                 => 'Password',
            'password_helper'          => ' ',
            'roles'                    => 'Roles',
            'roles_helper'             => ' ',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => ' ',
            'locale'                   => 'Locale',
            'locale_helper'            => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
            'country_code'             => 'Country Code',
            'country_code_helper'      => ' ',
            'fcm_token'                => 'Fcm Token',
            'fcm_token_helper'         => ' ',
            'is_active'                => 'Is Active',
            'is_active_helper'         => ' ',
            'login_type'               => 'Login Type',
            'login_type_helper'        => ' ',
            'phone_number'             => 'Phone Number',
            'phone_number_helper'      => ' ',
            'profile_pic'              => 'Profile Pic',
            'profile_pic_helper'       => ' ',
            'reviews_count'            => 'Reviews Count',
            'reviews_count_helper'     => ' ',
            'reviews_sum'              => 'Reviews Sum',
            'reviews_sum_helper'       => ' ',
            'wallet_amount'            => 'Wallet Amount',
            'wallet_amount_helper'     => ' ',
        ],
    ],
    'coupon' => [
        'title'          => 'Coupon',
        'title_singular' => 'Coupon',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'amount'            => 'Amount',
            'amount_helper'     => ' ',
            'code'              => 'Code',
            'code_helper'       => ' ',
            'is_public'         => 'isPublic',
            'is_public_helper'  => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'type'              => 'type',
            'type_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'airport' => [
        'title'          => 'Airports',
        'title_singular' => 'Airport',
        'fields'         => [
            'id'                   => 'ID',
            'id_helper'            => ' ',
            'airport_lat'          => 'Airport Lat',
            'airport_lat_helper'   => ' ',
            'airport_lng'          => 'Airport Lng',
            'airport_lng_helper'   => ' ',
            'airport_name'         => 'Airport Name',
            'airport_name_helper'  => ' ',
            'city_location'        => 'City Location',
            'city_location_helper' => ' ',
            'country'              => 'Country',
            'country_helper'       => ' ',
            'state'                => 'State',
            'state_helper'         => ' ',
            'created_at'           => 'Created at',
            'created_at_helper'    => ' ',
            'updated_at'           => 'Updated at',
            'updated_at_helper'    => ' ',
            'deleted_at'           => 'Deleted at',
            'deleted_at_helper'    => ' ',
        ],
    ],
    'cmsPage' => [
        'title'          => 'Cms Pages',
        'title_singular' => 'Cms Page',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'name'               => 'Name',
            'name_helper'        => ' ',
            'publish'            => 'Publish',
            'publish_helper'     => ' ',
            'slug'               => 'Slug',
            'slug_helper'        => ' ',
            'description'        => 'Description',
            'description_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'currency' => [
        'title'          => 'Currency',
        'title_singular' => 'Currency',
        'fields'         => [
            'id'                     => 'ID',
            'id_helper'              => ' ',
            'code'                   => 'Code',
            'code_helper'            => ' ',
            'decimal_digits'         => 'Decimal Digits',
            'decimal_digits_helper'  => ' ',
            'enable'                 => 'Enable',
            'enable_helper'          => ' ',
            'name'                   => 'Name',
            'name_helper'            => ' ',
            'symbol'                 => 'Symbol',
            'symbol_helper'          => ' ',
            'symbol_at_right'        => 'Symbol At Right',
            'symbol_at_right_helper' => ' ',
            'created_at'             => 'Created at',
            'created_at_helper'      => ' ',
            'updated_at'             => 'Updated at',
            'updated_at_helper'      => ' ',
            'deleted_at'             => 'Deleted at',
            'deleted_at_helper'      => ' ',
        ],
    ],
    'document' => [
        'title'          => 'Documents',
        'title_singular' => 'Document',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'back_side'         => 'Back Side',
            'back_side_helper'  => ' ',
            'enable'            => 'Enable',
            'enable_helper'     => ' ',
            'expire_at'         => 'Expire At',
            'expire_at_helper'  => ' ',
            'front_side'        => 'Front Side',
            'front_side_helper' => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'is_deleted'        => 'Is Deleted',
            'is_deleted_helper' => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'driverDocument' => [
        'title'          => 'Driver Document',
        'title_singular' => 'Driver Document',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'documents'         => 'Documents',
            'documents_helper'  => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'driverRule' => [
        'title'          => 'Driver Rules',
        'title_singular' => 'Driver Rule',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'enable'            => 'Enable',
            'enable_helper'     => ' ',
            'image'             => 'Image',
            'image_helper'      => ' ',
            'is_deleted'        => 'Is Deleted',
            'is_deleted_helper' => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'driverUser' => [
        'title'          => 'Driver Users',
        'title_singular' => 'Driver User',
        'fields'         => [
            'id'                           => 'ID',
            'id_helper'                    => ' ',
            'country_code'                 => 'Country Code',
            'country_code_helper'          => ' ',
            'document_verification'        => 'Document Verification',
            'document_verification_helper' => ' ',
            'email'                        => 'Email',
            'email_helper'                 => ' ',
            'fcm_token'                    => 'Fcm Token',
            'fcm_token_helper'             => ' ',
            'full_name'                    => 'Full Name',
            'full_name_helper'             => ' ',
            'is_online'                    => 'Is Online',
            'is_online_helper'             => ' ',
            'login_type'                   => 'Login Type',
            'login_type_helper'            => ' ',
            'phone_number'                 => 'Phone Number',
            'phone_number_helper'          => ' ',
            'profile_pic'                  => 'Profile Pic',
            'profile_pic_helper'           => ' ',
            'reviews_count'                => 'Reviews Count',
            'reviews_count_helper'         => ' ',
            'reviews_sum'                  => 'Reviews Sum',
            'reviews_sum_helper'           => ' ',
            'rotation'                     => 'Rotation',
            'rotation_helper'              => ' ',
            'service'                      => 'Service',
            'service_helper'               => ' ',
            'wallet_amount'                => 'Wallet Amount',
            'wallet_amount_helper'         => ' ',
            'created_at'                   => 'Created at',
            'created_at_helper'            => ' ',
            'updated_at'                   => 'Updated at',
            'updated_at_helper'            => ' ',
            'deleted_at'                   => 'Deleted at',
            'deleted_at_helper'            => ' ',
        ],
    ],
    'faq' => [
        'title'          => 'Faq',
        'title_singular' => 'Faq',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'description'        => 'Description',
            'description_helper' => ' ',
            'enable'             => 'Enable',
            'enable_helper'      => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'freightVehicle' => [
        'title'          => 'Freight Vehicle',
        'title_singular' => 'Freight Vehicle',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'description'        => 'Description',
            'description_helper' => ' ',
            'enable'             => 'Enable',
            'enable_helper'      => ' ',
            'height'             => 'Height',
            'height_helper'      => ' ',
            'image'              => 'Image',
            'image_helper'       => ' ',
            'km_charge'          => 'Km Charge',
            'km_charge_helper'   => ' ',
            'length'             => 'Length',
            'length_helper'      => ' ',
            'name'               => 'Name',
            'name_helper'        => ' ',
            'width'              => 'Width',
            'width_helper'       => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'intercityService' => [
        'title'          => 'Intercity Service',
        'title_singular' => 'Intercity Service',
        'fields'         => [
            'id'                      => 'ID',
            'id_helper'               => ' ',
            'enable'                  => 'Enable',
            'enable_helper'           => ' ',
            'image'                   => 'Image',
            'image_helper'            => ' ',
            'km_charge'               => 'Km Charge',
            'km_charge_helper'        => ' ',
            'admin_commission'        => 'Admin Commission',
            'admin_commission_helper' => ' ',
            'offer_rate'              => 'Offer Rate',
            'offer_rate_helper'       => ' ',
            'created_at'              => 'Created at',
            'created_at_helper'       => ' ',
            'updated_at'              => 'Updated at',
            'updated_at_helper'       => ' ',
            'deleted_at'              => 'Deleted at',
            'deleted_at_helper'       => ' ',
            'name'                    => 'Name',
            'name_helper'             => ' ',
        ],
    ],
    'language' => [
        'title'          => 'Languages',
        'title_singular' => 'Language',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'enable'            => 'Enable',
            'enable_helper'     => ' ',
            'code'              => 'Code',
            'code_helper'       => ' ',
            'is_deleted'        => 'Is Deleted',
            'is_deleted_helper' => ' ',
            'is_rtl'            => 'Is Rtl',
            'is_rtl_helper'     => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'onBoarding' => [
        'title'          => 'On Boarding',
        'title_singular' => 'On Boarding',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'description'        => 'Description',
            'description_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
            'image'              => 'Image',
            'image_helper'       => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'type'               => 'Type',
            'type_helper'        => ' ',
        ],
    ],
    'order' => [
        'title'          => 'Order',
        'title_singular' => 'Order',
        'fields'         => [
            'id'                                   => 'ID',
            'id_helper'                            => ' ',
            'accepted_driver'                      => 'Accepted Driver',
            'accepted_driver_helper'               => ' ',
            'admin_commission'                     => 'Admin Commission',
            'admin_commission_helper'              => ' ',
            'destination_location_name'            => 'Destination Location Name',
            'destination_location_name_helper'     => ' ',
            'destination_location_l_at_lng'        => 'Destination Location L At Lng',
            'destination_location_l_at_lng_helper' => ' ',
            'distance'                             => 'Distance',
            'distance_helper'                      => ' ',
            'distance_type'                        => 'Distance Type',
            'distance_type_helper'                 => ' ',
            'driver'                               => 'Driver',
            'driver_helper'                        => ' ',
            'final_rate'                           => 'Final Rate',
            'final_rate_helper'                    => ' ',
            'offer_rate'                           => 'Offer Rate',
            'offer_rate_helper'                    => ' ',
            'otp'                                  => 'Otp',
            'otp_helper'                           => ' ',
            'payment_status'                       => 'Payment Status',
            'payment_status_helper'                => ' ',
            'payment_type'                         => 'Payment Type',
            'payment_type_helper'                  => ' ',
            'position'                             => 'Position',
            'position_helper'                      => ' ',
            'rejected_driver'                      => 'Rejected Driver',
            'rejected_driver_helper'               => ' ',
            'service'                              => 'Service',
            'service_helper'                       => ' ',
            'source_location_l_at_lng'             => 'Source Location L At Lng',
            'source_location_l_at_lng_helper'      => ' ',
            'source_location_name'                 => 'Source Location Name',
            'source_location_name_helper'          => ' ',
            'status'                               => 'Status',
            'status_helper'                        => ' ',
            'tax_list'                             => 'Tax List',
            'tax_list_helper'                      => ' ',
            'update_date'                          => 'Update Date',
            'update_date_helper'                   => ' ',
            'user'                                 => 'User',
            'user_helper'                          => ' ',
            'created_at'                           => 'Created at',
            'created_at_helper'                    => ' ',
            'updated_at'                           => 'Updated at',
            'updated_at_helper'                    => ' ',
            'deleted_at'                           => 'Deleted at',
            'deleted_at_helper'                    => ' ',
        ],
    ],
    'ordersIntercity' => [
        'title'          => 'Orders Intercity',
        'title_singular' => 'Orders Intercity',
        'fields'         => [
            'id'                                  => 'ID',
            'id_helper'                           => ' ',
            'accepted_driver'                     => 'Accepted Driver',
            'accepted_driver_helper'              => ' ',
            'admin_commission'                    => 'Admin Commission',
            'admin_commission_helper'             => ' ',
            'comments'                            => 'Comments',
            'comments_helper'                     => ' ',
            'destination_city'                    => 'Destination City',
            'destination_city_helper'             => ' ',
            'destination_location_lat_lng'        => 'Destination Location Lat Lng',
            'destination_location_lat_lng_helper' => ' ',
            'destination_location_name'           => 'Destination Location Name',
            'destination_location_name_helper'    => ' ',
            'distance'                            => 'Distance',
            'distance_helper'                     => ' ',
            'distance_type'                       => 'Distance Type',
            'distance_type_helper'                => ' ',
            'driver'                              => 'Driver',
            'driver_helper'                       => ' ',
            'final_rate'                          => 'Final Rate',
            'final_rate_helper'                   => ' ',
            'intercity_service'                   => 'Intercity Service',
            'intercity_service_helper'            => ' ',
            'created_at'                          => 'Created at',
            'created_at_helper'                   => ' ',
            'updated_at'                          => 'Updated at',
            'updated_at_helper'                   => ' ',
            'deleted_at'                          => 'Deleted at',
            'deleted_at_helper'                   => ' ',
            'intercityservice'                    => 'Intercityservice',
            'intercityservice_helper'             => ' ',
            'number_of_passenger'                 => 'Number Of Passenger',
            'number_of_passenger_helper'          => ' ',
            'offer_rate'                          => 'Offer Rate',
            'offer_rate_helper'                   => ' ',
            'otp'                                 => 'Otp',
            'otp_helper'                          => ' ',
            'parcel_dimension'                    => 'Parcel Dimension',
            'parcel_dimension_helper'             => ' ',
            'parcel_image'                        => 'Parcel Image',
            'parcel_image_helper'                 => ' ',
            'parcel_weight'                       => 'Parcel Weight',
            'parcel_weight_helper'                => ' ',
            'payment_status'                      => 'Payment Status',
            'payment_status_helper'               => ' ',
            'payment_type'                        => 'Payment Type',
            'payment_type_helper'                 => ' ',
            'position'                            => 'Position',
            'position_helper'                     => ' ',
            'rejected_driver'                     => 'Rejected Driver',
            'rejected_driver_helper'              => ' ',
            'source_city'                         => 'Source City',
            'source_city_helper'                  => ' ',
            'source_location_lat_lng'             => 'Source Location Lat Lng',
            'source_location_lat_lng_helper'      => ' ',
            'source_location_name'                => 'Source Location Name',
            'source_location_name_helper'         => ' ',
            'status'                              => 'Status',
            'status_helper'                       => ' ',
            'tax_list'                            => 'Tax List',
            'tax_list_helper'                     => ' ',
            'user'                                => 'User',
            'user_helper'                         => ' ',
            'when_dates'                          => 'When Dates',
            'when_dates_helper'                   => ' ',
            'when_time'                           => 'When Time',
            'when_time_helper'                    => ' ',
        ],
    ],
    'referral' => [
        'title'          => 'Referral',
        'title_singular' => 'Referral',
        'fields'         => [
            'id'                   => 'ID',
            'id_helper'            => ' ',
            'referral_by'          => 'Referral By',
            'referral_by_helper'   => ' ',
            'referral_code'        => 'Referral Code',
            'referral_code_helper' => ' ',
            'created_at'           => 'Created at',
            'created_at_helper'    => ' ',
            'updated_at'           => 'Updated at',
            'updated_at_helper'    => ' ',
            'deleted_at'           => 'Deleted at',
            'deleted_at_helper'    => ' ',
        ],
    ],
    'reviewCustomer' => [
        'title'          => 'Review Customer',
        'title_singular' => 'Review Customer',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'comment'           => 'Comment',
            'comment_helper'    => ' ',
            'customer'          => 'Customer',
            'customer_helper'   => ' ',
            'driver'            => 'Driver',
            'driver_helper'     => ' ',
            'date'              => 'Date',
            'date_helper'       => ' ',
            'rating'            => 'Rating',
            'rating_helper'     => ' ',
            'type'              => 'Type',
            'type_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'reviewDriver' => [
        'title'          => 'Review Driver',
        'title_singular' => 'Review Driver',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'comment'           => 'Comment',
            'comment_helper'    => ' ',
            'customer'          => 'Customer',
            'customer_helper'   => ' ',
            'driver'            => 'Driver',
            'driver_helper'     => ' ',
            'rating'            => 'Rating',
            'rating_helper'     => ' ',
            'type'              => 'Type',
            'type_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'service' => [
        'title'          => 'Service',
        'title_singular' => 'Service',
        'fields'         => [
            'id'                      => 'ID',
            'id_helper'               => ' ',
            'admin_commission'        => 'Admin Commission',
            'admin_commission_helper' => 'json',
            'enable'                  => 'Enable',
            'enable_helper'           => ' ',
            'image'                   => 'Image',
            'image_helper'            => ' ',
            'intercity_type'          => 'Intercity Type',
            'intercity_type_helper'   => ' ',
            'isglobal_adminComission'          => 'Is Global AdminComission',
            'isglobal_adminComission_helper'   => ' ',
            'km_charge'               => 'Km Charge',
            'commission_type'          => 'Commission Type',
            'commission_type_helper'   => ' ',
            'km_charge'               => 'Km Charge',
            'km_charge_helper'        => ' ',
            'offer_rate'              => 'Offer Rate',
            'offer_rate_helper'       => ' ',
            'title'                   => 'Title',
            'title_helper'            => ' ',
            'created_at'              => 'Created at',
            'created_at_helper'       => ' ',
            'updated_at'              => 'Updated at',
            'updated_at_helper'       => ' ',
            'deleted_at'              => 'Deleted at',
            'deleted_at_helper'       => ' ',
        ],
    ],
    'so' => [
        'title'          => 'Sos',
        'title_singular' => 'So',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'order'             => 'Order',
            'order_helper'      => ' ',
            'order_type'        => 'Order Type',
            'order_type_helper' => ' ',
            'status'            => 'Status',
            'status_helper'     => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'tax' => [
        'title'          => 'Tax',
        'title_singular' => 'Tax',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'country'           => 'Country',
            'country_helper'    => ' ',
            'enable'            => 'Enable',
            'enable_helper'     => ' ',
            'tax'               => 'Tax',
            'tax_helper'        => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'type'              => 'Type',
            'type_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'vehicleType' => [
        'title'          => 'Vehicle Type',
        'title_singular' => 'Vehicle Type',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'enable'            => 'Enable',
            'enable_helper'     => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'walletTransaction' => [
        'title'          => 'Wallet Transaction',
        'title_singular' => 'Wallet Transaction',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => ' ',
            'amount'              => 'Amount',
            'amount_helper'       => ' ',
            'note'                => 'Note',
            'note_helper'         => ' ',
            'order_type'          => 'Order Type',
            'order_type_helper'   => ' ',
            'payment_type'        => 'Payment Type',
            'payment_type_helper' => ' ',
            'transaction'         => 'Transaction',
            'transaction_helper'  => ' ',
            'user'                => 'User',
            'user_helper'         => ' ',
            'user_type'           => 'User Type',
            'user_type_helper'    => ' ',
            'created_at'          => 'Created at',
            'created_at_helper'   => ' ',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => ' ',
            'deleted_at'          => 'Deleted at',
            'deleted_at_helper'   => ' ',
        ],
    ],
    'auditLog' => [
        'title'          => 'Audit Logs',
        'title_singular' => 'Audit Log',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => ' ',
            'description'         => 'Event',
            'description_helper'  => ' ',
            'subject_id'          => 'Subject ID',
            'subject_id_helper'   => ' ',
            'subject_type'        => 'Subject Type',
            'subject_type_helper' => ' ',
            'user_id'             => 'User ID',
            'user_id_helper'      => ' ',
            'properties'          => 'Attributes',
            'properties_helper'   => ' ',
            'host'                => 'IP',
            'host_helper'         => ' ',
            'created_at'          => 'Event time',
            'created_at_helper'   => ' ',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => ' ',
        ],
    ],
    'chat' => [
        'title'          => 'Chat',
        'title_singular' => 'Chat',
        'fields'         => [
            'id'                            => 'ID',
            'id_helper'                     => ' ',
            'customer'                      => 'Customer',
            'customer_helper'               => ' ',
            'customer_name'                 => 'Customer Name',
            'customer_name_helper'          => ' ',
            'customer_profile_image'        => 'Customer Profile Image',
            'customer_profile_image_helper' => ' ',
            'driver'                        => 'Driver',
            'driver_helper'                 => ' ',
            'driver_name'                   => 'Driver Name',
            'driver_name_helper'            => ' ',
            'driver_profile_image'          => 'Driver Profile Image',
            'driver_profile_image_helper'   => ' ',
            'last_message'                  => 'Last Message',
            'last_message_helper'           => ' ',
            'last_sender'                   => 'Last Sender',
            'last_sender_helper'            => ' ',
            'order'                         => 'Order',
            'order_helper'                  => ' ',
            'created_at'                    => 'Created at',
            'created_at_helper'             => ' ',
            'updated_at'                    => 'Updated at',
            'updated_at_helper'             => ' ',
            'deleted_at'                    => 'Deleted at',
            'deleted_at_helper'             => ' ',
        ],
    ],
    'thread' => [
        'title'          => 'Thread',
        'title_singular' => 'Thread',
        'fields'         => [
            'id'                     => 'ID',
            'id_helper'              => ' ',
            'message'                => 'Message',
            'message_helper'         => ' ',
            'message_type'           => 'Message Type',
            'message_type_helper'    => ' ',
            'order'                  => 'Order',
            'order_helper'           => ' ',
            'receiver'               => 'Receiver',
            'receiver_helper'        => ' ',
            'sender'                 => 'Sender',
            'sender_helper'          => ' ',
            'url'                    => 'Url',
            'url_helper'             => ' ',
            'video_thumbnail'        => 'Video Thumbnail',
            'video_thumbnail_helper' => ' ',
            'chat'                   => 'Chat',
            'chat_helper'            => ' ',
            'created_at'             => 'Created at',
            'created_at_helper'      => ' ',
            'updated_at'             => 'Updated at',
            'updated_at_helper'      => ' ',
            'deleted_at'             => 'Deleted at',
            'deleted_at_helper'      => ' ',
        ],
    ],
    'setting' => [
        'title'          => 'Settings',
        'title_singular' => 'Setting',
        'fields'         => [
            'facebook'                  => 'Facebook',
            'youtube'                   => 'Youtube',
            'linkedin'                  => 'Linkedin',
            'twitter'                   => 'Twitter',
            'tiktok'                    => 'Tiktok',   
            'link_1'                    => 'Link 1',
            'link_2'                    => 'Link 2 ',
            'link_3'                    => 'Link 3',
            'email_1'                   => 'Email 1',
            'email_2'                   => 'Email 2',
            'email_3'                   => 'Email 3',
            'phone'                     => 'phone',
            'increase'                  => 'Increase',
            'min_withdraw'              => 'Min Withdraw',
            'request_price'             => 'Request Price',
            'min_deposit'               => 'Min Deposit',
        ]
    ],
    'ordersM' => [
        'title'          => 'Orders',
        'title_singular' => 'Order',
    ],

];
