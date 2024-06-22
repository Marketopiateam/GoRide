<?php

return [
    'userManagement' => [
        'title'          => 'إدارة المستخدمين',
        'title_singular' => 'إدارة المستخدمين',
    ],
    'permission' => [
        'title'          => 'الصلاحيات',
        'title_singular' => 'الصلاحية',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title' => 'العنوان',
'created_at' => 'تاريخ الإنشاء',
'created_at_helper' => 'يُشير إلى التاريخ والوقت الذي تم فيه إنشاء العنصر',
'updated_at' => 'تاريخ التحديث',
'updated_at_helper' => 'يُشير إلى التاريخ والوقت الذي تم فيه آخر تحديث للعنصر',
'deleted_at' => 'تاريخ الحذف',
'deleted_at_helper' => 'يُشير إلى التاريخ والوقت الذي تم فيه حذف العنصر',

],
    ],
    'role' => [
        'title'          => 'المجموعات',
        'title_singular' => 'مجموعة',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title' => 'العنوان',
            'title_helper'       => ' ',
            'permissions'        => 'Permissions',
            'permissions_helper' => ' ',
'created_at' => 'تاريخ الإنشاء',
'created_at_helper' => 'يُشير إلى التاريخ والوقت الذي تم فيه إنشاء العنصر',
'updated_at' => 'تاريخ التحديث',
'updated_at_helper' => 'يُشير إلى التاريخ والوقت الذي تم فيه آخر تحديث للعنصر',
'deleted_at' => 'تاريخ الحذف',
'deleted_at_helper' => 'يُشير إلى التاريخ والوقت الذي تم فيه حذف العنصر',

],
    ],
    'user' => [
        'title'          => 'المستخدمين',
        'title_singular' => 'مستخدم',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
'name' => 'الاسم',
'name_helper' => '',
'email' => 'البريد الإلكتروني',
'email_helper' => '',
'email_verified_at' => 'تم التحقق من البريد الإلكتروني في',
'email_verified_at_helper' => '',
'password' => 'كلمة المرور',
'password_helper' => '',
'roles' => 'الأدوار',
'roles_helper' => '',
'remember_token' => 'رمز التذكير',
'remember_token_helper' => '',
'locale' => 'اللغة',
'locale_helper' => '',

'created_at' => 'تاريخ الإنشاء',
'created_at_helper' => 'يُشير إلى التاريخ والوقت الذي تم فيه إنشاء العنصر',
'updated_at' => 'تاريخ التحديث',
'updated_at_helper' => 'يُشير إلى التاريخ والوقت الذي تم فيه آخر تحديث للعنصر',
'deleted_at' => 'تاريخ الحذف',
'deleted_at_helper' => 'يُشير إلى التاريخ والوقت الذي تم فيه حذف العنصر',

'country_code' => 'كود الدولة',
'country_code_helper' => '',
'fcm_token' => 'رمز Fcm',
'fcm_token_helper' => '',
'is_active' => 'نشط',
'is_active_helper' => '',
'login_type' => 'نوع الدخول',
'login_type_helper' => '',
'phone_number' => 'رقم الهاتف',
'phone_number_helper' => '',
'profile_pic' => 'صورة الملف الشخصي',
'profile_pic_helper' => '',
'reviews_count' => 'عدد المراجعات',
'reviews_count_helper' => '',
'reviews_sum' => 'مجموع المراجعات',
'reviews_sum_helper' => '',
'wallet_amount' => 'مبلغ المحفظة',
'wallet_amount_helper' => '',
        ],
    ],
    'coupon' => [
        'title' => 'قسيمة',
        'title_singular' => 'قسيمة',
            'fields'         => [
                'id' => 'المعرف',
                'id_helper' => '',
                'amount' => 'المبلغ',
                'amount_helper' => '',
                'code' => 'الرمز',
                'code_helper' => '',
                'is_public' => 'عام',
                'is_public_helper' => '',
                'title' => 'العنوان',
                'title_helper' => '',
                'type' => 'النوع',
                'type_helper' => '',
                
                'created_at' => 'تاريخ الإنشاء',
'created_at_helper' => 'يُشير إلى التاريخ والوقت الذي تم فيه إنشاء العنصر',
'updated_at' => 'تاريخ التحديث',
'updated_at_helper' => 'يُشير إلى التاريخ والوقت الذي تم فيه آخر تحديث للعنصر',
'deleted_at' => 'تاريخ الحذف',
'deleted_at_helper' => 'يُشير إلى التاريخ والوقت الذي تم فيه حذف العنصر',
        ],
    ],
'airport' => [
    'title' => 'المطارات',
    'title_singular' => 'مطار',
    'fields' => [
        'id' => 'المعرف',
        'id_helper' => '',
        'airport_lat' => 'خط العرض للمطار',
        'airport_lat_helper' => '',
        'airport_lng' => 'خط الطول للمطار',
        'airport_lng_helper' => '',
        'airport_name' => 'اسم المطار',
        'airport_name_helper' => '',
        'city_location' => 'موقع المدينة',
        'city_location_helper' => '',
        'country' => 'الدولة',
        'country_helper' => '',
        'state' => 'المحافظة',
        'state_helper' => '',
        'created_at' => 'تاريخ الإنشاء',
        'created_at_helper' => '',
        'updated_at' => 'تاريخ التحديث',
        'updated_at_helper' => '',
        'deleted_at' => 'تاريخ الحذف',
        'deleted_at_helper' => '',
    ],
],
'cmsPage' => [
    'title' => 'صفحات CMS',
    'title_singular' => 'صفحة CMS',
    'fields' => [
        'id' => 'المعرف',
        'id_helper' => '',
        'name' => 'الاسم',
        'name_helper' => '',
        'publish' => 'نشر',
        'publish_helper' => '',
        'slug' => 'المعرف المختصر',
        'slug_helper' => '',
        'description' => 'الوصف',
        'description_helper' => '',
        'created_at' => 'تاريخ الإنشاء',
        'created_at_helper' => '',
        'updated_at' => 'تاريخ التحديث',
        'updated_at_helper' => '',
        'deleted_at' => 'تاريخ الحذف',
        'deleted_at_helper' => '',
    ],
],    

'currency' => [
    'title' => 'العملة',
    'title_singular' => 'عملة',
    'fields' => [
        'id' => 'المعرف',
        'id_helper' => '',
        'code' => 'الرمز',
        'code_helper' => '',
        'decimal_digits' => 'الأرقام العشرية',
        'decimal_digits_helper' => '',
        'enable' => 'تفعيل',
        'enable_helper' => '',
        'name' => 'الاسم',
        'name_helper' => '',
        'symbol' => 'الرمز',
        'symbol_helper' => '',
        'symbol_at_right' => 'الرمز على اليمين',
        'symbol_at_right_helper' => '',
        'created_at' => 'تاريخ الإنشاء',
        'created_at_helper' => '',
        'updated_at' => 'تاريخ التحديث',
        'updated_at_helper' => '',
        'deleted_at' => 'تاريخ الحذف',
        'deleted_at_helper' => '',
    ],
],
'document' => [
    'title' => 'المستندات',
    'title_singular' => 'مستند',
    'fields' => [
        'id' => 'المعرف',
        'id_helper' => '',
        'back_side' => 'الجانب الخلفي',
        'back_side_helper' => '',
        'enable' => 'تفعيل',
        'enable_helper' => '',
        'expire_at' => 'تاريخ الانتهاء',
        'expire_at_helper' => '',
        'front_side' => 'الجانب الأمامي',
        'front_side_helper' => '',
        'title' => 'العنوان',
        'title_helper' => '',
        'is_deleted' => 'تم الحذف',
        'is_deleted_helper' => '',
        'created_at' => 'تاريخ الإنشاء',
        'created_at_helper' => '',
        'updated_at' => 'تاريخ التحديث',
        'updated_at_helper' => '',
        'deleted_at' => 'تاريخ الحذف',
        'deleted_at_helper' => '',
    ],
],

'driverDocument' => [
    'title' => 'وثيقة السائق',
    'title_singular' => 'وثيقة السائق',
    'fields' => [
        'id' => 'المعرف',
        'id_helper' => '',
        'documents' => 'المستندات',
        'documents_helper' => '',
        'created_at' => 'تاريخ الإنشاء',
        'created_at_helper' => '',
        'updated_at' => 'تاريخ التحديث',
        'updated_at_helper' => '',
        'deleted_at' => 'تاريخ الحذف',
        'deleted_at_helper' => '',
    ],
],
'driverRule' => [
    'title' => 'قواعد السائق',
    'title_singular' => 'قاعدة السائق',
    'fields' => [
        'id' => 'المعرف',
        'id_helper' => '',
        'enable' => 'تفعيل',
        'enable_helper' => '',
        'image' => 'الصورة',
        'image_helper' => '',
        'is_deleted' => 'تم الحذف',
        'is_deleted_helper' => '',
        'name' => 'الاسم',
        'name_helper' => '',
        'created_at' => 'تاريخ الإنشاء',
        'created_at_helper' => '',
        'updated_at' => 'تاريخ التحديث',
        'updated_at_helper' => '',
        'deleted_at' => 'تاريخ الحذف',
        'deleted_at_helper' => '',
    ],
],

'driverUser' => [
    'title' => 'مستخدمو السائق',
    'title_singular' => 'مستخدم السائق',
    'fields' => [
        'id' => 'المعرف',
        'id_helper' => '',
        'country_code' => 'رمز البلد',
        'country_code_helper' => '',
        'document_verification' => 'التحقق من الوثائق',
        'document_verification_helper' => '',
        'email' => 'البريد الإلكتروني',
        'email_helper' => '',
        'fcm_token' => 'رمز FCM',
        'fcm_token_helper' => '',
        'full_name' => 'الاسم الكامل',
        'full_name_helper' => '',
        'is_online' => 'متصل',
        'is_online_helper' => '',
        'login_type' => 'نوع الدخول',
        'login_type_helper' => '',
        'phone_number' => 'رقم الهاتف',
        'phone_number_helper' => '',
        'profile_pic' => 'صورة الملف الشخصي',
        'profile_pic_helper' => '',
        'reviews_count' => 'عدد المراجعات',
        'reviews_count_helper' => '',
        'reviews_sum' => 'مجموع المراجعات',
        'reviews_sum_helper' => '',
        'rotation' => 'التدوير',
        'rotation_helper' => '',
        'service' => 'الخدمة',
        'service_helper' => '',
        'wallet_amount' => 'مبلغ المحفظة',
        'wallet_amount_helper' => '',
        'created_at' => 'تاريخ الإنشاء',
        'created_at_helper' => '',
        'updated_at' => 'تاريخ التحديث',
        'updated_at_helper' => '',
        'deleted_at' => 'تاريخ الحذف',
        'deleted_at_helper' => '',
    ],
],
    'faq' => [
    'title' => 'الأسئلة الشائعة',
    'title_singular' => 'سؤال شائع',
    'fields' => [
        'id' => 'المعرف',
        'id_helper' => '',
        'description' => 'الوصف',
        'description_helper' => '',
        'enable' => 'تفعيل',
        'enable_helper' => '',
        'title' => 'العنوان',
        'title_helper' => '',
        'created_at' => 'تاريخ الإنشاء',
        'created_at_helper' => '',
        'updated_at' => 'تاريخ التحديث',
        'updated_at_helper' => '',
        'deleted_at' => 'تاريخ الحذف',
        'deleted_at_helper' => '',
    ],
],
'freightVehicle' => [
    'title' => 'مركبة الشحن',
    'title_singular' => 'مركبة شحن',
    'fields' => [
        'id' => 'المعرف',
        'id_helper' => '',
        'description' => 'الوصف',
        'description_helper' => '',
        'enable' => 'تفعيل',
        'enable_helper' => '',
        'height' => 'الارتفاع',
        'height_helper' => '',
        'image' => 'الصورة',
        'image_helper' => '',
        'km_charge' => 'تكلفة الكيلومتر',
        'km_charge_helper' => '',
        'length' => 'الطول',
        'length_helper' => '',
        'name' => 'الاسم',
        'name_helper' => '',
        'width' => 'العرض',
        'width_helper' => '',
        'created_at' => 'تاريخ الإنشاء',
        'created_at_helper' => '',
        'updated_at' => 'تاريخ التحديث',
        'updated_at_helper' => '',
        'deleted_at' => 'تاريخ الحذف',
        'deleted_at_helper' => '',
    ],
],

'intercityService' => [
    'title' => 'الخدمة بين المدن',
    'title_singular' => 'خدمة بين المدينتين',
    'fields' => [
        'id' => 'المعرف',
        'id_helper' => '',
        'enable' => 'تفعيل',
        'enable_helper' => '',
        'image' => 'الصورة',
        'image_helper' => '',
        'km_charge' => 'تكلفة الكيلومتر',
        'km_charge_helper' => '',
        'admin_commission' => 'عمولة الإدارة',
        'admin_commission_helper' => '',
        'offer_rate' => 'معدل العرض',
        'offer_rate_helper' => '',
        'created_at' => 'تاريخ الإنشاء',
        'created_at_helper' => '',
        'updated_at' => 'تاريخ التحديث',
        'updated_at_helper' => '',
        'deleted_at' => 'تاريخ الحذف',
        'deleted_at_helper' => '',
        'name' => 'الاسم',
        'name_helper' => '',
    ],
],
'language' => [
    'title' => 'اللغات',
    'title_singular' => 'لغة',
    'fields' => [
        'id' => 'المعرف',
        'id_helper' => '',
        'enable' => 'تفعيل',
        'enable_helper' => '',
        'code' => 'الرمز',
        'code_helper' => '',
        'is_deleted' => 'محذوف',
        'is_deleted_helper' => '',
        'is_rtl' => 'من اليمين إلى اليسار',
        'is_rtl_helper' => '',
        'name' => 'الاسم',
        'name_helper' => '',
        'created_at' => 'تاريخ الإنشاء',
        'created_at_helper' => '',
        'updated_at' => 'تاريخ التحديث',
        'updated_at_helper' => '',
        'deleted_at' => 'تاريخ الحذف',
        'deleted_at_helper' => '',
    ],
],

'onBoarding' => [
    'title' => 'التهيئة',
    'title_singular' => 'تهيئة',
    'fields' => [
        'id' => 'المعرف',
        'id_helper' => '',
        'description' => 'الوصف',
        'description_helper' => '',
        'created_at' => 'تاريخ الإنشاء',
        'created_at_helper' => '',
        'updated_at' => 'تاريخ التحديث',
        'updated_at_helper' => '',
        'deleted_at' => 'تاريخ الحذف',
        'deleted_at_helper' => '',
        'image' => 'الصورة',
        'image_helper' => '',
        'title' => 'العنوان',
        'title_helper' => '',
        'type' => 'النوع',
        'type_helper' => '',
    ],
],
'order' => [
    'title' => 'الطلب',
    'title_singular' => 'طلب',
    'fields' => [
        'id' => 'المعرف',
        'id_helper' => '',
        'accepted_driver' => 'السائق المقبول',
        'accepted_driver_helper' => '',
        'admin_commission' => 'عمولة الإدارة',
        'admin_commission_helper' => '',
        'destination_location_name' => 'اسم موقع الوجهة',
        'destination_location_name_helper' => '',
        'destination_location_l_at_lng' => 'موقع الوجهة L At Lng',
        'destination_location_l_at_lng_helper' => '',
        'distance' => 'المسافة',
        'distance_helper' => '',
        'distance_type' => 'نوع المسافة',
        'distance_type_helper' => '',
        'driver' => 'السائق',
        'driver_helper' => '',
        'final_rate' => 'التقييم النهائي',
        'final_rate_helper' => '',
        'offer_rate' => 'سعر العرض',
        'offer_rate_helper' => '',
        'otp' => 'كلمة المرور لمرة واحدة',
        'otp_helper' => '',
        'payment_status' => 'حالة الدفع',
        'payment_status_helper' => '',
        'payment_type' => 'نوع الدفع',
        'payment_type_helper' => '',
        'position' => 'الموقع',
        'position_helper' => '',
        'rejected_driver' => 'السائق المرفوض',
        'rejected_driver_helper' => '',
        'service' => 'الخدمة',
        'service_helper' => '',
        'source_location_l_at_lng' => 'موقع المصدر L At Lng',
        'source_location_l_at_lng_helper' => '',
        'source_location_name' => 'اسم موقع المصدر',
        'source_location_name_helper' => '',
        'status' => 'الحالة',
        'status_helper' => '',
        'tax_list' => 'قائمة الضرائب',
        'tax_list_helper' => '',
        'update_date' => 'تاريخ التحديث',
        'update_date_helper' => '',
        'user' => 'المستخدم',
        'user_helper' => '',
        'created_at' => 'تاريخ الإنشاء',
        'created_at_helper' => '',
        'updated_at' => 'تاريخ التحديث',
        'updated_at_helper' => '',
        'deleted_at' => 'تاريخ الحذف',
        'deleted_at_helper' => '',
    ],
],



'ordersIntercity' => [
    'title' => 'الطلبات بين المدن',
    'title_singular' => 'طلب بين المدن',
    'fields' => [
        'id' => 'المعرف',
        'id_helper' => '',
        'accepted_driver' => 'السائق المقبول',
        'accepted_driver_helper' => '',
        'admin_commission' => 'عمولة الإدارة',
        'admin_commission_helper' => '',
        'comments' => 'التعليقات',
        'comments_helper' => '',
        'destination_city' => 'مدينة الوجهة',
        'destination_city_helper' => '',
        'destination_location_lat_lng' => 'إحداثيات موقع الوجهة',
        'destination_location_lat_lng_helper' => '',
        'destination_location_name' => 'اسم موقع الوجهة',
        'destination_location_name_helper' => '',
        'distance' => 'المسافة',
        'distance_helper' => '',
        'distance_type' => 'نوع المسافة',
        'distance_type_helper' => '',
        'driver' => 'السائق',
        'driver_helper' => '',
        'final_rate' => 'التقييم النهائي',
        'final_rate_helper' => '',
        'intercity_service' => 'خدمة بين المدن',
        'intercity_service_helper' => '',
        'created_at' => 'تاريخ الإنشاء',
        'created_at_helper' => '',
        'updated_at' => 'تاريخ التحديث',
        'updated_at_helper' => '',
        'deleted_at' => 'تاريخ الحذف',
        'deleted_at_helper' => '',
        'intercityservice' => 'Intercityservice',
        'intercityservice_helper' => '',
        'number_of_passenger' => 'عدد الركاب',
        'number_of_passenger_helper' => '',
        'offer_rate' => 'سعر العرض',
        'offer_rate_helper' => '',
        'otp' => 'كلمة المرور لمرة واحدة',
        'otp_helper' => '',
        'parcel_dimension' => 'أبعاد الطرد',
        'parcel_dimension_helper' => '',
        'parcel_image' => 'صورة الطرد',
        'parcel_image_helper' => '',
        'parcel_weight' => 'وزن الطرد',
        'parcel_weight_helper' => '',
        'payment_status' => 'حالة الدفع',
        'payment_status_helper' => '',
        'payment_type' => 'نوع الدفع',
        'payment_type_helper' => '',
        'position' => 'الموقع',
        'position_helper' => '',
        'rejected_driver' => 'السائق المرفوض',
        'rejected_driver_helper' => '',
        'source_city' => 'مدينة المصدر',
        'source_city_helper' => '',
        'source_location_lat_lng' => 'إحداثيات موقع المصدر',
        'source_location_lat_lng_helper' => '',
        'source_location_name' => 'اسم موقع المصدر',
        'source_location_name_helper' => '',
        'status' => 'الحالة',
        'status_helper' => '',
        'tax_list' => 'قائمة الضرائب',
        'tax_list_helper' => '',
        'user' => 'المستخدم',
        'user_helper' => '',
        'when_dates' => 'التواريخ',
        'when_dates_helper' => '',
        'when_time' => 'الوقت',
        'when_time_helper' => '',
    ],
],


'referral' => [
    'title' => 'الإحالة',
    'title_singular' => 'إحالة',
    'fields' => [
        'id' => 'المعرف',
        'id_helper' => '',
        'referral_by' => 'الإحالة بواسطة',
        'referral_by_helper' => '',
        'referral_code' => 'كود الإحالة',
        'referral_code_helper' => '',
        'created_at' => 'تاريخ الإنشاء',
        'created_at_helper' => '',
        'updated_at' => 'تاريخ التحديث',
        'updated_at_helper' => '',
        'deleted_at' => 'تاريخ الحذف',
        'deleted_at_helper' => '',
    ],
],
'reviewCustomer' => [
    'title' => 'تقييم العميل',
    'title_singular' => 'تقييم عميل',
    'fields' => [
        'id' => 'المعرف',
        'id_helper' => '',
        'comment' => 'تعليق',
        'comment_helper' => '',
        'customer' => 'العميل',
        'customer_helper' => '',
        'driver' => 'السائق',
        'driver_helper' => '',
        'date' => 'التاريخ',
        'date_helper' => '',
        'rating' => 'التقييم',
        'rating_helper' => '',
        'type' => 'النوع',
        'type_helper' => '',
        'created_at' => 'تاريخ الإنشاء',
        'created_at_helper' => '',
        'updated_at' => 'تاريخ التحديث',
        'updated_at_helper' => '',
        'deleted_at' => 'تاريخ الحذف',
        'deleted_at_helper' => '',
    ],
],



'reviewDriver' => [
    'title' => 'تقييم السائق',
    'title_singular' => 'تقييم سائق',
    'fields' => [
        'id' => 'المعرف',
        'id_helper' => '',
        'comment' => 'تعليق',
        'comment_helper' => '',
        'customer' => 'العميل',
        'customer_helper' => '',
        'driver' => 'السائق',
        'driver_helper' => '',
        'rating' => 'التقييم',
        'rating_helper' => '',
        'type' => 'النوع',
        'type_helper' => '',
        'created_at' => 'تاريخ الإنشاء',
        'created_at_helper' => '',
        'updated_at' => 'تاريخ التحديث',
        'updated_at_helper' => '',
        'deleted_at' => 'تاريخ الحذف',
        'deleted_at_helper' => '',
    ],
],
'service' => [
    'title' => 'الخدمة',
    'title_singular' => 'خدمة',
    'fields' => [
        'id' => 'المعرف',
        'id_helper' => '',
        'admin_commission' => 'عمولة الإدارة',
        'admin_commission_helper' => 'json',
        'enable' => 'تفعيل',
        'enable_helper' => '',
        'image' => 'صورة',
        'image_helper' => '',
        'intercity_type' => 'نوع بين المدن',
        'intercity_type_helper' => '',
        'km_charge' => 'تكلفة الكيلومتر',
        'km_charge_helper' => '',
        'offer_rate' => 'معدل العرض',
        'offer_rate_helper' => '',
        'title' => 'العنوان',
        'title_helper' => '',
        'created_at' => 'تاريخ الإنشاء',
        'created_at_helper' => '',
        'updated_at' => 'تاريخ التحديث',
        'updated_at_helper' => '',
        'deleted_at' => 'تاريخ الحذف',
        'deleted_at_helper' => '',
    ],
],


'tax' => [
    'title'          => 'الضريبة',
    'title_singular' => 'ضريبة',
    'fields'         => [
        'id'                => 'المعرف',
        'id_helper'         => '',
        'country'           => 'الدولة',
        'country_helper'    => '',
        'enable'            => 'تفعيل',
        'enable_helper'     => '',
        'tax'               => 'الضريبة',
        'tax_helper'        => '',
        'title' => 'العنوان',
        'title_helper'      => '',
        'type'              => 'النوع',
        'type_helper'       => '',
        'created_at' => 'تاريخ الإنشاء',
        'created_at_helper' => '',
        'updated_at' => 'تاريخ التحديث',
        'updated_at_helper' => '',
        'deleted_at' => 'تاريخ الحذف',
        'deleted_at_helper' => '',
    ],
],
'vehicleType' => [
    'title'          => 'نوع المركبة',
    'title_singular' => 'نوع المركبة',
    'fields'         => [
        'id'                => 'المعرف',
        'id_helper'         => '',
        'enable'            => 'تفعيل',
        'enable_helper'     => '',
        'name'              => 'الاسم',
        'name_helper'       => '',
        'created_at' => 'تاريخ الإنشاء',
        'created_at_helper' => '',
        'updated_at' => 'تاريخ التحديث',
        'updated_at_helper' => '',
        'deleted_at' => 'تاريخ الحذف',
        'deleted_at_helper' => '',
    ],
],
'walletTransaction' => [
    'title'          => 'عملية المحفظة',
    'title_singular' => 'عملية المحفظة',
    'fields'         => [
        'id'                  => 'المعرف',
        'id_helper'           => '',
        'amount'              => 'المبلغ',
        'amount_helper'       => '',
        'note'                => 'ملاحظة',
        'note_helper'         => '',
        'order_type'          => 'نوع الطلب',
        'order_type_helper'   => '',
        'payment_type'        => 'نوع الدفع',
        'payment_type_helper' => '',
        'transaction'         => 'العملية',
        'transaction_helper'  => '',
        'user'                => 'المستخدم',
        'user_helper'         => '',
        'user_type'           => 'نوع المستخدم',
        'user_type_helper'    => '',
        'created_at' => 'تاريخ الإنشاء',
        'created_at_helper' => '',
        'updated_at' => 'تاريخ التحديث',
        'updated_at_helper' => '',
        'deleted_at' => 'تاريخ الحذف',
        'deleted_at_helper' => '',
    ],
],
'auditLog' => [
    'title'          => 'سجلات التدقيق',
    'title_singular' => 'سجل التدقيق',
    'fields'         => [
        'id'                  => 'المعرف',
        'id_helper'           => '',
        'description'         => 'الحدث',
        'description_helper'  => '',
        'subject_id'          => 'معرف العنصر',
        'subject_id_helper'   => '',
        'subject_type'        => 'نوع العنصر',
        'subject_type_helper' => '',
        'user_id'             => 'معرف المستخدم',
        'user_id_helper'      => '',
        'properties'          => 'الخصائص',
        'properties_helper'   => '',
        'host'                => 'IP',
        'host_helper'         => '',
        'created_at' => 'تاريخ الإنشاء',
        'created_at_helper' => '',
        'updated_at' => 'تاريخ التحديث',
        'updated_at_helper' => '',
        'deleted_at' => 'تاريخ الحذف',
        'deleted_at_helper' => '',
    ],
],

'chat' => [
    'title'          => 'الدردشة',
    'title_singular' => 'دردشة',
    'fields'         => [
        'id'                            => 'المعرف',
        'id_helper'                     => '',
        'customer'                      => 'العميل',
        'customer_helper'               => '',
        'customer_name'                 => 'اسم العميل',
        'customer_name_helper'          => '',
        'customer_profile_image'        => 'صورة ملف العميل',
        'customer_profile_image_helper' => '',
        'driver'                        => 'السائق',
        'driver_helper'                 => '',
        'driver_name'                   => 'اسم السائق',
        'driver_name_helper'            => '',
        'driver_profile_image'          => 'صورة ملف السائق',
        'driver_profile_image_helper'   => '',
        'last_message'                  => 'آخر رسالة',
        'last_message_helper'           => '',
        'last_sender'                   => 'آخر مرسل',
        'last_sender_helper'            => '',
        'order'                         => 'الطلب',
        'order_helper'                  => '',

        'created_at' => 'تاريخ الإنشاء',
        'created_at_helper' => '',
        'updated_at' => 'تاريخ التحديث',
        'updated_at_helper' => '',
        'deleted_at' => 'تاريخ الحذف',
        'deleted_at_helper' => '',
    ],
],
'thread' => [
    'title'          => 'الموضوع',
    'title_singular' => 'موضوع',
    'fields'         => [
        'id'                     => 'المعرف',
        'id_helper'              => '',
        'message'                => 'الرسالة',
        'message_helper'         => '',
        'message_type'           => 'نوع الرسالة',
        'message_type_helper'    => '',
        'order'                  => 'الطلب',
        'order_helper'           => '',
        'receiver'               => 'المستقبل',
        'receiver_helper'        => '',
        'sender'                 => 'المرسل',
        'sender_helper'          => '',
        'url'                    => 'الرابط',
        'url_helper'             => '',
        'video_thumbnail'        => 'مصغرة الفيديو',
        'video_thumbnail_helper' => '',
        'chat'                   => 'الدردشة',
        'chat_helper'            => '',

        'created_at' => 'تاريخ الإنشاء',
        'created_at_helper' => '',
        'updated_at' => 'تاريخ التحديث',
        'updated_at_helper' => '',
        'deleted_at' => 'تاريخ الحذف',
        'deleted_at_helper' => '',
    ],
],
'setting' => [
    'title'          => 'الإعدادات',
    'title_singular' => 'إعداد',
],
'ordersM' => [
    'title'          => 'الطلبات',
    'title_singular' => 'طلب',
],

];
