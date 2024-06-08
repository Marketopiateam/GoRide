<?php

use App\Events\test;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\SoController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\TaxController;
use App\Http\Controllers\Admin\ChatController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\CouponController;
use App\Http\Controllers\Admin\ThreadController;
use App\Http\Controllers\Admin\AirportController;
use App\Http\Controllers\Admin\CmsPageController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\AuditLogController;
use App\Http\Controllers\Admin\CurrencyController;
use App\Http\Controllers\Admin\DocumentController;
use App\Http\Controllers\Admin\LanguageController;
use App\Http\Controllers\Admin\ReferralController;
use App\Http\Controllers\Admin\DriverRuleController;
use App\Http\Controllers\Admin\DriverUserController;
use App\Http\Controllers\Admin\OnBoardingController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Auth\UserProfileController;
use App\Http\Controllers\Admin\VehicleTypeController;
use App\Http\Controllers\Admin\ReviewDriverController;
use App\Http\Controllers\Admin\DriverDocumentController;
use App\Http\Controllers\Admin\FreightVehicleController;
use App\Http\Controllers\Admin\ReviewCustomerController;
use App\Http\Controllers\Admin\OrdersIntercityController;
use App\Http\Controllers\Admin\IntercityServiceController;
use App\Http\Controllers\Admin\WalletTransactionController;

Route::get('welcome', function(){


     return view('welcome');
    // $user =  User::find(1);
    // $user->password = 'password';
    // $user->save();
 });
Route::redirect('/', '/login');

Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth:admin']], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');

    // Permissions
    Route::resource('permissions', PermissionController::class, ['except' => ['store', 'update', 'destroy']]);

    // Roles
    Route::resource('roles', RoleController::class, ['except' => ['store', 'update', 'destroy']]);

    // Users
    Route::resource('users', UserController::class, ['except' => ['store', 'update', 'destroy']]);

    // Coupon
    Route::resource('coupons', CouponController::class, ['except' => ['store', 'update', 'destroy']]);

    // Airports
    Route::resource('airports', AirportController::class, ['except' => ['store', 'update', 'destroy']]);

    // Cms Pages
    Route::resource('cms-pages', CmsPageController::class, ['except' => ['store', 'update', 'destroy']]);

    // Currency
    Route::resource('currencies', CurrencyController::class, ['except' => ['store', 'update', 'destroy']]);

    // Documents
    Route::resource('documents', DocumentController::class, ['except' => ['store', 'update', 'destroy']]);

    // Driver Document
    Route::resource('driver-documents', DriverDocumentController::class, ['except' => ['store', 'update', 'destroy']]);

    // Driver Rules
    Route::resource('driver-rules', DriverRuleController::class, ['except' => ['store', 'update', 'destroy']]);

    // Driver Users
    Route::resource('driver-users', DriverUserController::class, ['except' => ['store', 'update', 'destroy']]);

    // Faq
    Route::resource('faqs', FaqController::class, ['except' => ['store', 'update', 'destroy']]);

    // Freight Vehicle
    Route::resource('freight-vehicles', FreightVehicleController::class, ['except' => ['store', 'update', 'destroy']]);

    // Intercity Service
    Route::resource('intercity-services', IntercityServiceController::class, ['except' => ['store', 'update', 'destroy']]);

    // Languages
    Route::resource('languages', LanguageController::class, ['except' => ['store', 'update', 'destroy']]);

    // On Boarding
    Route::resource('on-boardings', OnBoardingController::class, ['except' => ['store', 'update', 'destroy']]);

    // Orders
    Route::resource('orders', OrderController::class, ['except' => ['store', 'update', 'destroy']]);

    // Orders Intercity
    Route::resource('orders-intercities', OrdersIntercityController::class, ['except' => ['store', 'update', 'destroy']]);

    // Referral
    Route::resource('referrals', ReferralController::class, ['except' => ['store', 'update', 'destroy']]);

    // Review Customer
    Route::resource('review-customers', ReviewCustomerController::class, ['except' => ['store', 'update', 'destroy']]);

    // Review Driver
    Route::resource('review-drivers', ReviewDriverController::class, ['except' => ['store', 'update', 'destroy']]);

    // Service
    Route::resource('services', ServiceController::class, ['except' => ['store', 'update', 'destroy']]);

    // Sos
    Route::resource('sos', SoController::class, ['except' => ['store', 'update', 'destroy']]);

    // Tax
    Route::resource('taxes', TaxController::class, ['except' => ['store', 'update', 'destroy']]);

    // Vehicle Type
    Route::resource('vehicle-types', VehicleTypeController::class, ['except' => ['store', 'update', 'destroy']]);

    // Wallet Transaction
    Route::resource('wallet-transactions', WalletTransactionController::class, ['except' => ['store', 'update', 'destroy']]);

    // Audit Logs
    Route::resource('audit-logs', AuditLogController::class, ['except' => ['store', 'update', 'destroy', 'create', 'edit']]);

    // Chat
    Route::resource('chats', ChatController::class, ['except' => ['store', 'update', 'destroy']]);

    // Thread
    Route::resource('threads', ThreadController::class, ['except' => ['store', 'update', 'destroy', 'create', 'edit', 'show']]);
});

Route::group(['prefix' => 'profile', 'as' => 'profile.', 'middleware' => ['auth']], function () {
    if (file_exists(app_path('Http/Controllers/Auth/UserProfileController.php'))) {
        Route::get('/', [UserProfileController::class, 'show'])->name('show');
    }
});
