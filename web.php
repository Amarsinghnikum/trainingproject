<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\CityController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});

Route::match(['get','post'],'/login',[AdminController::class, 'Login']);
Route::get('/register',[AdminController::class, 'RegisterPage']);
Route::match(['get','post'],'/saveregister',[AdminController::class, 'Register']);
Route::match(['get','post'],'/index',[AdminController::class, 'Index']);

Route::get('/session/remove',[AdminController::class, 'deleteUserProfile'])->name('session.delete');

Route::get('/profile', [BackendController::class, 'Profile']);
Route::get('/students', [BackendController::class, 'Students']);
//Category Starts here
Route::get('/category', [CategoryController::class, 'index']);
Route::post('/insert-category', [CategoryController::class, 'insert']);

// Route::match(['get','post'],'/editCategory/{id}',[CategoryController::class, 'editCategory']);
// Route::match(['get','post'],'/saveEditCategory',[CategoryController::class, 'saveEditCategory']);

Route::get('/edit-category/{id}', [CategoryController::class, 'edit']);
Route::put('update-category/{id}', [CategoryController::class, 'update']);
Route::get('/delete-category/{id}',[CategoryController::class, 'destroy']);

Route::post('/search-category', [CategoryController::class, 'Search']);
//Category Ends here
//Product Starts here
Route::get('/product', [ProductController::class, 'index']);
Route::post('/insert-product', [ProductController::class, 'insert']);
Route::get('/edit-product/{id}', [ProductController::class, 'edit']);
Route::put('update-product/{id}', [ProductController::class, 'update']);
Route::get('/delete-product/{id}',[ProductController::class, 'destroy']);
Route::post('/deletePdf', [ProductController::class, 'deletePdfs']);
Route::post('/deletebom', [ProductController::class, 'deleteBomitem']);

Route::post('/subCategoryResult', [ProductController::class, 'subCategoryResults']);

Route::post('/search-product', [ProductController::class, 'SearchProduct']);
//Product Ends here

// Bom area starts here
Route::get('/add-bom', [BackendController::class, 'addBom']);
Route::post('/insert-bom', [BackendController::class, 'insertBom']);
Route::get('/edit-bom/{id}', [BackendController::class, 'editBom']);
Route::put('update-bom/{id}', [BackendController::class, 'updateBom']);
Route::get('/delete-bom/{id}',[BackendController::class, 'destroyBom']);
Route::post('/deleteBoms', [BackendController::class, 'deleteBoms']);
Route::get('/users-data',[BackendController::class, "getData"]);

Route::post('/search-bom', [BackendController::class, 'SearchBom']);
// Bom area ends here

// Product Category area starts here
Route::get('/product-category', [BackendController::class, 'ProductCategory']);
Route::post('/insert-productcat', [BackendController::class, 'insertProductCategory']);
Route::get('/edit-productcat/{id}', [BackendController::class, 'editProductCategory']);
Route::put('update-productcat/{id}', [BackendController::class, 'updateProductCategory']);
Route::get('/delete-productcat/{id}',[BackendController::class, 'destroyProductCategory']);

Route::post('/search-productcat', [BackendController::class, 'SearchProductcat']);
// Product Category area ends here

// Unit area starts here
Route::get('/add-unit', [BackendController::class, 'addUnit']);
Route::post('/insert-unit', [BackendController::class, 'insertUnit']);
Route::get('/edit-unit/{id}', [BackendController::class, 'editUnit']);
Route::put('update-unit/{id}', [BackendController::class, 'updateUnit']);
Route::get('/delete-unit/{id}',[BackendController::class, 'destroyUnit']);

Route::post('/search-unit', [BackendController::class, 'SearchUnit']);
// Unit area ends here

// Customer area starts here
Route::get('/add-customer', [BackendController::class, 'addCustomer']);
Route::post('/insert-customer', [BackendController::class, 'insertCustomer']);
Route::get('/edit-customer/{id}', [BackendController::class, 'editCustomer']);
Route::put('update-customer/{id}', [BackendController::class, 'updateCustomer']);
Route::get('/delete-customer/{id}',[BackendController::class, 'destroyCustomer']);

Route::post('/search-customer', [BackendController::class, 'SearchCustomer']);
// Customer area ends here

// Drawing area starts here
Route::get('/add-drawing', [BackendController::class, 'addDrawing']);
Route::post('/insert-drawing', [BackendController::class, 'insertDrawing']);
Route::get('/edit-drawing/{id}', [BackendController::class, 'editDrawing']);
Route::put('update-drawing/{id}', [BackendController::class, 'updateDrawing']);
Route::get('/delete-drawing/{id}',[BackendController::class, 'destroyDrawing']);

Route::post('/search-drawcat', [BackendController::class, 'SearchDrawcat']);
// Drawing area ends here

// Equipment Category area starts here
Route::get('/add-equipment', [BackendController::class, 'addEquipment']);
Route::post('/insert-equip', [BackendController::class, 'insertEquipment']);
Route::get('/edit-equip/{id}', [BackendController::class, 'editEquipment']);
Route::put('update-equip/{id}', [BackendController::class, 'updateEquipment']);
Route::get('/delete-equip/{id}',[BackendController::class, 'destroyEquipment']);

Route::post('/search-equipment', [BackendController::class, 'SearchEquipment']);
// Equipment Category area ends here
// Company area starts here
Route::get('/company', [BackendController::class, 'Company']);
Route::post('/insert-company', [BackendController::class, 'insertCompany']);
Route::get('/edit-company/{id}', [BackendController::class, 'editCompany']);
Route::put('update-company/{id}', [BackendController::class, 'updateCompany']);
Route::get('/delete-company/{id}',[BackendController::class, 'destroyCompany']);

Route::post('/search-company', [BackendController::class, 'SearchCompany']);
// Company area ends here

//State area Starts Here
Route::get('/states', [StateController::class, 'State']);
Route::post('/insert-state', [StateController::class, 'insert']);
Route::get('/edit-state/{id}', [StateController::class, 'edit']);
Route::put('update-state/{id}', [StateController::class, 'update']);
Route::get('/delete-state/{id}',[StateController::class, 'destroy']);

Route::post('/search-state', [StateController::class, 'Search']);
//State area Ends Here
//City area Starts Here
Route::get('/cities', [CityController::class, 'City']);
Route::post('/insert-cities', [CityController::class, 'insert']);
Route::get('/edit-city/{id}', [CityController::class, 'edit']);
Route::put('update-city/{id}', [CityController::class, 'update']);
Route::get('/delete-city/{id}',[CityController::class, 'destroy']);

Route::post('/search', [CityController::class, 'Search']);
//City area Ends Here

Route::get('/search-detail',[ProductController::class, 'dataShow']);
Route::post('/search-productdetail', [ProductController::class, 'SearchProductDetail']);
Route::get('/search-details/{id}',[ProductController::class, 'SearchDetail']);
Route::get('/technical-detail/{id}',[ProductController::class, 'TechnicalDetail']);
Route::get('/navbar',[ProductController::class, 'Navbar']);
Route::get('/cross-reference/{id}',[ProductController::class, 'CrossReference']);
Route::get('/features/{id}',[ProductController::class, 'Features']);
Route::get('/vendor-details/{id}',[ProductController::class, 'VendorDetails']);
Route::get('/customer-data/{id}',[ProductController::class, 'CustomerData']);
Route::get('/drawing/{id}',[ProductController::class, 'Drawing']);
Route::get('/boms/{id}',[ProductController::class, 'Boms']);

Route::get('/edit-product-detail/{id}', [ProductController::class, 'editProductdetail']);
Route::post('update-product-detail/{id}', [ProductController::class, 'updateProductdetail']);














