<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\PaymentMethodController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Marketopia\Admin\MarketopiaBrowserController;
use App\Models\Marketopia\MarketopiaCity;
use App\Models\Marketopia\MarketopiaCountry;
use App\Models\PaymentMethod;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\AirportController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\AuditLogController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Auth\UserProfileController;
use App\Http\Controllers\Admin\VehicleTypeController;
use App\Http\Controllers\Admin\FreightVehicleController;
use App\Http\Controllers\Admin\WalletTransactionController;
use function SergeYakovlev\CountryFlagEmoji\country_flag_emoji;


Route::get('test', function () {
    $methods = PaymentMethod::get();
        $configs = config('nafezly-payments');
        $payment_methods = [];
        foreach ($methods as $method) {
            $configArray = [];
            $configArray['name'] = $method->name;
            $configArray['logo'] = $method->logo;
            foreach ($configs as $config => $value) {
                if (str_starts_with($config, $method->name)) {
                    $key = strtolower(str_replace($method->name . '_', "", $config));
                    if ($method->name == 'PERFECTMONEY' && $key == 'id') {
                        $key = 'api_key';
                    }
                    $configArray[$key] = $method->$key;
                }
            }
            $payment_methods[$method->name] = $configArray;
        }
        dd($payment_methods);
});
    Route::get('/payments/verify/{payment?}',[FrontController::class,'payment_verify'])->name('verify-payment');

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

    Route::get('payment-methods', [PaymentMethodController::class, 'index'])->name('payment-methods.index');
    Route::put('payment-methods', [PaymentMethodController::class, 'update'])->name('payment-methods.update');

    Route::get('settings/{id}', [SettingController::class, 'edit'])->name('settings.index');
    Route::post('settings/{id}', [SettingController::class, 'update'])->name('settings.update');

    // Permissions
    Route::resource('permissions', PermissionController::class, ['except' => ['store', 'update', 'destroy']]);
    Route::resource('countries', CountryController::class);
    Route::get('countries/activate/{id}', [CountryController::class, 'activate'])->name('countries.activate');
    Route::get('countries/deactivate/{id}', [CountryController::class, 'deactivate'])->name('countries.deactivate');


    Route::resource('cities', CityController::class);
    Route::get('cities/activate/{id}', [CityController::class, 'activate'])->name('cities.activate');
    Route::get('cities/deactivate/{id}', [CityController::class, 'deactivate'])->name('cities.deactivate');


    // Roles
    Route::resource('roles', RoleController::class, ['except' => ['store', 'update', 'destroy']]);

    // Users
    Route::resource('users', UserController::class, ['except' => ['store', 'update', 'destroy']]);

    // Airports
    Route::resource('airports', AirportController::class, ['except' => ['store', 'update', 'destroy']]);


    // Faq
    Route::resource('faqs', FaqController::class, ['except' => ['store', 'update', 'destroy']]);

    // Freight Vehicle
    Route::resource('freight-vehicles', FreightVehicleController::class, ['except' => ['store', 'update', 'destroy']]);

    // Orders
    Route::resource('orders', OrderController::class, ['except' => ['store', 'update', 'destroy']]);


    // Service
    Route::resource('services', ServiceController::class);

    // Vehicle Type
    Route::resource('vehicle-types', VehicleTypeController::class, ['except' => ['store', 'update', 'destroy']]);

    // Wallet Transaction
    Route::resource('wallet-transactions', WalletTransactionController::class);

    // Audit Logs
    Route::resource('audit-logs', AuditLogController::class, ['except' => ['store', 'update', 'destroy', 'create', 'edit']]);

    // Admins
    Route::resource('admins', AdminController::class);

    // create Marketopia Browser recourse route
    Route::resource('marketopia-browsers', MarketopiaBrowserController::class);

});

Route::group(['prefix' => 'profile', 'as' => 'profile.', 'middleware' => ['auth']], function () {
    if (file_exists(app_path('Http/Controllers/Auth/UserProfileController.php'))) {
        Route::get('/', [UserProfileController::class, 'show'])->name('show');
    }
});
