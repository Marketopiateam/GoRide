<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\Admin\SoApiController;
use App\Http\Controllers\Api\V1\Admin\FaqApiController;
use App\Http\Controllers\Api\V1\Admin\TaxApiController;
use App\Http\Controllers\Api\V1\Admin\ChatApiController;
use App\Http\Controllers\Api\V1\Admin\RoleApiController;
use App\Http\Controllers\Api\V1\Admin\UserApiController;
use App\Http\Controllers\Api\V1\Admin\OrderApiController;
use App\Http\Controllers\Api\V1\Admin\AuthenticationController;
use App\Http\Controllers\Api\V1\Admin\CouponApiController;
use App\Http\Controllers\Api\V1\Admin\ThreadApiController;
use App\Http\Controllers\Api\V1\Admin\AirportApiController;
use App\Http\Controllers\Api\V1\Admin\CmsPageApiController;
use App\Http\Controllers\Api\V1\Admin\ServiceApiController;
use App\Http\Controllers\Api\V1\Admin\CurrencyApiController;
use App\Http\Controllers\Api\V1\Admin\DocumentApiController;
use App\Http\Controllers\Api\V1\Admin\LanguageApiController;
use App\Http\Controllers\Api\V1\Admin\ReferralApiController;
use App\Http\Controllers\Api\V1\Admin\DriverRuleApiController;
use App\Http\Controllers\Api\V1\Admin\OnBoardingApiController;
use App\Http\Controllers\Api\V1\Admin\PermissionApiController;
use App\Http\Controllers\Api\V1\Admin\VehicleTypeApiController;
use App\Http\Controllers\Api\V1\Admin\ReviewDriverApiController;
use App\Http\Controllers\Api\V1\Admin\DriverDocumentApiController;
use App\Http\Controllers\Api\V1\Admin\FreightVehicleApiController;
use App\Http\Controllers\Api\V1\Admin\ReviewCustomerApiController;
use App\Http\Controllers\Api\V1\Admin\OrdersIntercityApiController;
use App\Http\Controllers\Api\V1\Admin\IntercityServiceApiController;
use App\Http\Controllers\Api\V1\Admin\WalletTransactionApiController;
use App\Models\User;

Route::prefix('v1/auth')->group(function () {

    Route::post('signup', [AuthenticationController::class, 'signup']);
    Route::get('verify_otp', [AuthenticationController::class, 'verify_otp']);
    Route::post('send_otp', [AuthenticationController::class, 'send_otp']);
});
Route::middleware(['auth:sanctum'])->group(function () {
    Route::prefix('v1/user')->group(function () {
        Route::get('profile', [AuthenticationController::class, 'profile']);
        Route::post('profile/update', [AuthenticationController::class, 'profile_update']);
    });
});
Route::group(['prefix' => 'v1', 'as' => 'api.', 'middleware' => ['auth:sanctum']], function () {
    // Permissions
    Route::apiResource('permissions', PermissionApiController::class);

    // Roles
    Route::apiResource('roles', RoleApiController::class);

    // Users
    Route::apiResource('users', UserApiController::class);

    // Coupon
    Route::apiResource('coupons', CouponApiController::class);

    // Airports
    Route::apiResource('airports', AirportApiController::class);

    // Cms Pages
    Route::apiResource('cms-pages', CmsPageApiController::class);

    // Currency
    Route::apiResource('currencies', CurrencyApiController::class);

    // Documents
    Route::apiResource('documents', DocumentApiController::class);

    // Driver Document
    Route::apiResource('driver-documents', DriverDocumentApiController::class);

    // Driver Rules
    Route::apiResource('driver-rules', DriverRuleApiController::class);

    // Faq
    Route::apiResource('faqs', FaqApiController::class);

    // Freight Vehicle
    Route::apiResource('freight-vehicles', FreightVehicleApiController::class);

    // Intercity Service
    Route::apiResource('intercity-services', IntercityServiceApiController::class);

    // Languages
    Route::apiResource('languages', LanguageApiController::class);

    // On Boarding
    Route::apiResource('on-boardings', OnBoardingApiController::class);

    // Orders
    Route::apiResource('orders', OrderApiController::class);

    // Orders Intercity
    Route::apiResource('orders-intercities', OrdersIntercityApiController::class);

    // Referral
    Route::apiResource('referrals', ReferralApiController::class);

    // Review Customer
    Route::apiResource('review-customers', ReviewCustomerApiController::class);

    // Review Driver
    Route::apiResource('review-drivers', ReviewDriverApiController::class);

    // Service
    Route::apiResource('services', ServiceApiController::class);

    // Sos
    Route::apiResource('sos', SoApiController::class);

    // Tax
    Route::apiResource('taxes', TaxApiController::class);

    // Vehicle Type
    Route::apiResource('vehicle-types', VehicleTypeApiController::class);

    // Wallet Transaction
    Route::apiResource('wallet-transactions', WalletTransactionApiController::class);

    // Chat
    Route::apiResource('chats', ChatApiController::class);

    // Thread
    Route::apiResource('threads', ThreadApiController::class, ['only' => ['index']]);
});
