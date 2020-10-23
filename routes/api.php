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

// Auth

Route::group([
    'prefix' => 'auth',
    'namespace' => 'Auth',
], function () {
    Route::post('login', 'LoginController@login');

    Route::group([
      'middleware' => 'auth:api'
    ], function() {
        Route::get('logout', 'LoginController@logout');
        Route::get('user', 'LoginController@user');
    });
});

// Password

Route::group([
    'namespace' => 'Auth',
    'middleware' => 'api',
    'prefix' => 'password'
], function () {
    Route::post('create_token', 'ResetPasswordController@create');
    Route::post('reset', 'ResetPasswordController@reset');
    Route::get('find/{token}', 'ResetPasswordController@find');
});

Route::group(['middleware' => 'auth:api'], function(){
    
    Route::get('files/terminos', 'FileController@showTerminos');
    Route::get('files/terminos/{download?}', 'FileController@showTerminos');
    Route::get('files/{id}/{download?}', 'FileController@show');
    Route::post('files/update', 'FileController@update');
    Route::apiResource('files', 'FileController');
    
    // endpoins relativos a la funcionalidad de proveedores (registro, aprobaciones, listados)

    Route::get('providers/document/{id}/{download?}', 'Provider\ProviderController@showDocument');
    Route::get('providers/request_edit_show/{id}', 'Provider\ProviderController@requestEditShow');
    Route::post('providers/request_edit_information', 'Provider\ProviderController@requestEditInformation');
    Route::post('providers/approved_edit_information', 'Provider\ProviderController@approvedEditInformation');
    Route::post('providers/change_status', 'Provider\ProviderDocumentController@changeStatus');
    Route::post('providers/update_document', 'Provider\ProviderDocumentController@updateDocument');
    Route::apiResource('providers', 'Provider\ProviderController');

    // endpoins relativos a la funcionalidad de dar de alta de proveedores para sap

    Route::apiResource('providers/providers_sap', 'Provider\ProviderSapController');

    Route::apiResource('users','UserController');
    Route::apiResource('roles','RoleController');

    // Métodos no tienen crud, solo list
    
    Route::get('business_types', 'BusinessTypeController');
    Route::get('accounts_group', 'AccountsGroupController');
    Route::get('associated_account', 'AssociatedAccountController');
    Route::get('bank', 'BankController');
    Route::get('bank_country', 'BankCountryController');
    Route::get('currency', 'CurrencyController');

    Route::get('document', 'DocumentController@index');
    Route::post('document', 'DocumentController@update');
    Route::delete('document/{id}', 'DocumentController@destroy');
    Route::get('document/{id}/{download?}', 'DocumentController@show');

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
    Route::get('retention_indicator', 'RetentionIndicatorController');
    Route::get('retention_type', 'RetentionTypeController');
    Route::get('service', 'ServiceController');
    Route::get('society', 'SocietyController');
    Route::get('taxes_duties_accesory', 'TaxesDutiesAccesoryController');
    Route::get('tolerance_group', 'ToleranceGroupController');
    Route::get('treatment', 'TreatmentController');
    Route::get('type_bank_interlocutor', 'TypeBankInterlocutorController');

    Route::get('countries', 'CountriesController@getCountries');
    Route::get('states', 'CountriesController@getStates');
    Route::get('cities', 'CountriesController@getCities');

});