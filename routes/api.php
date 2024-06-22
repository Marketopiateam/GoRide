<?php

use App\Events\test;
use App\Models\User;
use App\Events\MessageSent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\Admin\SoApiController;
use App\Http\Controllers\Api\V1\Admin\CarApiController;
use App\Http\Controllers\Api\V1\Admin\FaqApiController;
use App\Http\Controllers\Api\V1\Admin\TaxApiController;
use App\Http\Controllers\Api\V1\Admin\ChatApiController;
use App\Http\Controllers\Api\V1\Admin\RoleApiController;
use App\Http\Controllers\Api\V1\Admin\UserApiController;
use App\Http\Controllers\Api\V1\Admin\OrderApiController;
use App\Http\Controllers\Api\V1\Admin\CouponApiController;
use App\Http\Controllers\Api\V1\Admin\ThreadApiController;
use App\Http\Controllers\Api\V1\Admin\AirportApiController;
use App\Http\Controllers\Api\V1\Admin\CmsPageApiController;
use App\Http\Controllers\Api\V1\Admin\ServiceApiController;
use App\Http\Controllers\Api\V1\Admin\CurrencyApiController;
use App\Http\Controllers\Api\V1\Admin\DocumentApiController;
use App\Http\Controllers\Api\V1\Admin\LanguageApiController;
use App\Http\Controllers\Api\V1\Admin\PaymentsApiController;
use App\Http\Controllers\Api\V1\Admin\ReferralApiController;
use App\Http\Controllers\Api\V1\Admin\DriverRuleApiController;
use App\Http\Controllers\Api\V1\Admin\OnBoardingApiController;
use App\Http\Controllers\Api\V1\Admin\PermissionApiController;
use App\Http\Controllers\Api\V1\Admin\AuthenticationController;
use App\Http\Controllers\Api\V1\Admin\DriverApiController;
use App\Http\Controllers\Api\V1\Admin\VehicleTypeApiController;
use App\Http\Controllers\Api\V1\Admin\ReviewDriverApiController;
use App\Http\Controllers\Api\V1\Admin\DriverDocumentApiController;
use App\Http\Controllers\Api\V1\Admin\FreightVehicleApiController;
use App\Http\Controllers\Api\V1\Admin\ReviewCustomerApiController;
use App\Http\Controllers\Api\V1\Admin\OrdersIntercityApiController;
use App\Http\Controllers\Api\V1\Admin\IntercityServiceApiController;
use App\Http\Controllers\Api\V1\Admin\WalletTransactionApiController;



Route::prefix('v1/user')->group(function () {
    Route::get('country', [AuthenticationController::class, 'country']);
    Route::get('city/{id}', [AuthenticationController::class, 'city']);
});


Route::prefix('v1/auth')->group(function () {
    Route::post('signup', [AuthenticationController::class, 'signup']);
    Route::get('verify_otp', [AuthenticationController::class, 'verify_otp']);
    Route::post('send_otp', [AuthenticationController::class, 'send_otp']);
});
//'auth:sanctum'
Route::get('v1/send/chat', [ChatApiController::class, 'send_message']);
Route::get('v1/user/charge_wallet', [AuthenticationController::class, 'charge_wallet']);

Route::get('v1/car/brands', [CarApiController::class, 'get_car_brands']);
Route::get('v1/car/models', [CarApiController::class, 'get_car_models']);

Route::get('country', [AuthenticationController::class, 'country']);
Route::get('city/{id}', [AuthenticationController::class, 'city']);

Route::group(['prefix' => 'v1', 'as' => 'api.', 'middleware' => ['auth:sanctum']], function () {

    Route::post('driver/registration', [DriverApiController::class, 'driver_registration']);

    Route::prefix('user')->group(function () {
        // Route::get('charge_wallet', [AuthenticationController::class, 'charge_wallet']);
        Route::get('profile', [AuthenticationController::class, 'profile']);
        Route::post('profile/update', [AuthenticationController::class, 'profile_update']);
    });
    Route::prefix('services')->group(function () {
        Route::get('incity', [ServiceApiController::class, 'incity']);
        Route::get('outcity', [ServiceApiController::class, 'outcity']);
    });
    Route::prefix('order')->group(function () {
        Route::post('/new', [OrderApiController::class, 'neworder']);
        Route::get('/old', [OrderApiController::class, 'getorders']);

        Route::get('/accept/{order}', [OrderApiController::class, 'acceptorder']);
        Route::get('/start/{order}', [OrderApiController::class, 'startorder']);
        Route::get('/end/{order}', [OrderApiController::class, 'endorder']);
        Route::get('/cancel/{order}', [OrderApiController::class, 'cancelorder']);
        Route::post('getprice', [OrderApiController::class, 'getprice']);
        Route::get('my', [OrderApiController::class, 'get_my_order']);
    });
    Route::prefix('payments')->group(function () {
        Route::get('/get', [PaymentsApiController::class, 'get_payments']);
    });
});
