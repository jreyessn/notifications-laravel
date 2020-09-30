<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('files', 'FileController');

// Métodos no tienen crud, solo list

Route::get('business_types', 'BusinessTypeController');
Route::get('accounts_group', 'AccountsGroupController');
Route::get('bank', 'BankController');
Route::get('bank_country', 'BankCountryController');
Route::get('currency', 'CurrencyController');
Route::get('document', 'DocumentController');
Route::get('fixed_asset', 'FixedAssetController');
Route::get('freight_transport', 'FreightTransportController');
Route::get('fuel', 'FuelController');
Route::get('intercompany', 'IntercompanyController');
Route::get('lease', 'LeaseController');
Route::get('maintenance', 'MaintenanceController');
Route::get('officials_employee', 'OfficialsEmployeeController');
Route::get('organization', 'OrganizationController');
Route::get('payment_condition', 'PaymentConditionController');
Route::get('payment_method', 'PaymentMethodController');
Route::get('professional_service', 'ProfessionalServiceController');
Route::get('raw_another_material', 'RawAnotherMaterialController');
Route::get('raw_material', 'RawMaterialController');
Route::get('raw_meat_material', 'RawMeatMaterialController');
Route::get('retention_country', 'RetentionCountryController');
Route::get('retention_type', 'RetentionTypeController');
Route::get('service', 'ServiceController');
Route::get('society', 'SocietyController');
Route::get('taxes_duties_accesory', 'TaxesDutiesAccesoryController');
Route::get('tolerance_group', 'ToleranceGroupController');
Route::get('treatment', 'TreatmentController');