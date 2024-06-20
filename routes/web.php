<?php

use App\Events\MessageSent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Broadcast;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\AirportController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\AuditLogController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Auth\UserProfileController;
use App\Http\Controllers\Admin\VehicleTypeController;
use App\Http\Controllers\Admin\PaymentMethodController;
use App\Http\Controllers\Admin\FreightVehicleController;
use BeyondCode\LaravelWebSockets\Facades\WebSocketsRouter;
use App\Http\Controllers\Admin\WalletTransactionController;
use App\Http\Controllers\Marketopia\Admin\MarketopiaBrowserController;
use App\Websockets\UpdateDriverHandler;

// WebSocketsRouter::webSocket('/my-websocket', \App\MyCustomWebSocketHandler::class);
Broadcast::routes();
Route::get('send-message/{message}', function ($message) {


    event(new MessageSent($message));
    return response()->json(['message' => $message]);
});

Route::get('test', function () {
    return view('test');
});
Route::get('test', function () {
    return view('test');
});
// Route::get('/payments/verify/{payment?}',[FrontController::class,'payment_verify'])->name('verify-payment');
WebSocketsRouter::webSocket('/socket/update-driver', UpdateDriverHandler::class);
Route::get('welcome', function () {

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
    Route::put('countries/activate/{id}', [CountryController::class, 'activate'])->name('countries.activate');
    Route::put('countries/deactivate/{id}', [CountryController::class, 'deactivate'])->name('countries.deactivate');


    Route::resource('cities', CityController::class);
    Route::put('cities/activate/{id}', [CityController::class, 'activate'])->name('cities.activate');
    Route::put('cities/deactivate/{id}', [CityController::class, 'deactivate'])->name('cities.deactivate');


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
    Route::resource('vehicle-types', VehicleTypeController::class);
    Route::put('vehicle-types/activate/{id}', [VehicleTypeController::class, 'activate'])->name('vehicle-types.activate');
    Route::put('vehicle-types/deactivate/{id}', [VehicleTypeController::class, 'deactivate'])->name('vehicle-types.deactivate');

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
