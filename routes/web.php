<?php

use App\Http\Controllers\Admin\admindashboardcontroller;
use App\Http\Controllers\Admin\AreaZoneController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CollectionController;
use App\Http\Controllers\admin\CouponController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\DistrictZoneController;
use App\Http\Controllers\Admin\DivistionZoneController;
use App\Http\Controllers\Admin\OrdersContorllers;
use App\Http\Controllers\Admin\PaymentController;
use App\Http\Controllers\Admin\ServiceProviderController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\Admin\SlidersController;
use App\Http\Controllers\Customer\Customerdashboardcontroller;
use App\Http\Controllers\Fontend\ClientController;
use App\Http\Controllers\Fontend\HomeController;
use App\Http\Controllers\Fontend\SearchContorller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Sprovider\Sproviderdashboardcontroller;
use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('admin.admindashboard');
// });
Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'Index')->name('forntend.home');
});
Route::controller(ClientController::class)->group(function () {
    Route::get('/Services-Category', 'ServicesCetagory')->name('servicescategory');
    Route::get('/Services-By-Category/{id}', 'ServicesByCategory')->name('servicesbycategory');
    Route::get('/Services-Detailes/{id}/{slug}', 'ServicesDetails')->name('servicedetails');
    Route::get('/About-Us', 'AboutUs')->name('aboutus');
    Route::get('/Privacy-Policy', 'PrivacyPoly')->name('privacypoly');
    Route::get('/Teram-Condition', 'TeramCondition')->name('teramcondition');
    Route::get('/Contact-Us', 'ContactUs')->name('contactus');

});



Route::middleware(['auth', 'verified',])->group(function () {
    Route::get('/customer-dashboard', [Customerdashboardcontroller::class, 'Index'])->name('customer.dashboard');
    Route::controller(ClientController::class)->group(function () {
        Route::get('/Services-Category', 'ServicesCetagory')->name('servicescategory');
        Route::get('/Services-By-Category/{id}', 'ServicesByCategory')->name('servicesbycategory');
        Route::get('/Services-Detailes/{id}/{slug}', 'ServicesDetails')->name('servicedetails');
        Route::Post('/Add-To-Cart', 'AddToCart')->name('addtocart');
        Route::get('/All-Add-To-Cart', 'AllAddToCart')->name('alladdtocart');
        Route::get('/Remove-To-Cart/{id}', 'RemoveToCart')->name('removeitem');
        Route::get('/Location-Detalis', 'LocationDetalis')->name('locationdetalis');
        Route::post('/Order-Complete', 'OrderComplete')->name('ordercomplete');
        Route::post('/Contact-Info', 'ContactInfo')->name('contactinfo');
        Route::post('/Autocomplete', 'autocomplete')->name('autocomplete');
    });
});

Route::middleware(['auth', 'verified', 'authsprovider'])->group(function () {
    Route::get('/sprovider-dashboard', [Sproviderdashboardcontroller::class, 'Index'])->name('sprovider.dashboard');
    Route::prefix('Sprovider/')->controller(Sproviderdashboardcontroller::class)->group(function () {
        Route::get('Service-Provider-Reg', 'SproviderReg')->name('sproviderReg');
        Route::post('Service-Provider-Reg', 'SpRegstration')->name('SproviderRegstration');
        Route::get('Service-Provider-Profile', 'ServicePProfile')->name('ServProvProfile');
    });
});

Route::middleware(['auth', 'verified', 'authadmin'])->group(function () {
    Route::get('/admin-dashboard', [admindashboardcontroller::class, 'Index'])->name('admin.admindashboard');
    Route::prefix('admin/')->controller(CategoryController::class)->group(function () {
        Route::get('All-Category', 'Index')->name('allcategory');
        Route::get('Add-Category', 'AddCategory')->name('addcategory');
        Route::post('Store-Category', 'StoreCategory')->name('storecategory');
        Route::get('Edit-Category/{id}', 'EditCategory')->name('editcategory');
        Route::post('Update-Category', 'UpdateCategory')->name('updatecategory');
        Route::get('Delete-Category/{id}', 'DeleteCategory')->name('deletecategory');
    });
});
Route::prefix('admin/')->controller(ServicesController::class)->group(function () {
    Route::get('All-Services', 'Index')->name('allservices');
    Route::get('Add-Services', 'AddServices')->name('addservices');
    Route::post('Store-Services', 'StoreServices')->name('storeservices');
    Route::get('Edit-Services/{id}', 'EditServices')->name('editservices');
    Route::post('Update-Services', 'UpdateServices')->name('updateservices');
    Route::get('Delete-Services', 'DeleteServices')->name('deleteservices');
});
Route::prefix('admin/')->controller(ServiceProviderController::class)->group(function () {
    Route::get('All-Service-Provider', 'Index')->name('allserviceprovider');
    Route::get('Add-Service-Provider', 'AddSProvider')->name('addsprovider');
    Route::get('Edit-Service-Provider/{id}', 'EditSprovider')->name('sproviderEdit');
    Route::post('Add-Service-Provider', 'Sproviderentry')->name('sproviderentry');
    Route::post('Update-Service-Provider', 'UpdateSprovider')->name('updateprovider');
    Route::get('Delete-Service-Provider/{id}', 'deletesprovider')->name('sproviderdelete');
});
Route::prefix('admin/')->controller(CustomerController::class)->group(function () {
    Route::get('All-Customer', 'Index')->name('allcustomer');
    Route::get('Delete-Customer/{id}', 'DeleteCustomer')->name('deletecustomer');
    // Route::post('Store-Category', 'StoreCategory')->name('storecategory');
});
Route::prefix('admin/')->controller(PaymentController::class)->group(function () {
    Route::get('All-Payment', 'Index')->name('allpayment');
    Route::get('Add-Payment', 'AddPayment')->name('addpayment');
    Route::post('Store-Payment', 'StorePayment')->name('storepayment');
    Route::get('Edit-Payment/{id}', 'EditPayment')->name('editpayment');
    Route::post('Update-Payment', 'UpdatePayment')->name('updatepayment');
    Route::get('Delete-Payment/{id}', 'DeletePayment')->name('deletepayment');
    Route::get('Payment-Report', 'PaymentReport')->name('paymentreport');
});
Route::prefix('admin/')->controller(CollectionController::class)->group(function () {
    Route::get('All-Collection', 'Index')->name('allcollection');
    Route::get('Add-Collection', 'AddCollection')->name('collectamount');
    Route::post('Store-Collection', 'StoreCollection')->name('storecollect');
    Route::get('Edit-Collection/{id}', 'EditCollection')->name('edticollection');
    Route::post('Update-Collection', 'UpdateCollection')->name('updatecollect');
    Route::get('Report-Collection', 'ReportCollection')->name('collectionreport');
});
Route::prefix('admin/')->controller(OrdersContorllers::class)->group(function () {
    Route::get('All-Orders', 'Index')->name('allorders');
    Route::get('/Invocie-Details/{id}', 'InvoiceDetails')->name('invoicede');
    Route::get('/Booking-Status-Edit/{id}', 'BookingEdit')->name('bookingedit');
    Route::post('/Update-Status', 'UpdateStatus')->name('updatestatus');
    // Route::get('/Edit-Status/{id}', 'EditStatus')->name('editstatus');
    Route::get('/Invoice-page', 'InvoicePage')->name('invoice');
    //Report Route
    Route::get('Booking-Report','BookingReport')->name('bookingreport');
    

});
Route::prefix('admin/')->controller(SlidersController::class)->group(function () {
    Route::get('All-Sliders', 'Index')->name('sliders');
    Route::get('Add-Sliders', 'Entrysliders')->name('add');
    Route::post('get-slider', 'submitsliders')->name('addsliders');
});

Route::prefix('admin/')->controller(DistrictZoneController::class)->group(function () {
    Route::get('All-District', 'Index')->name('districtzone');
    Route::get('Add-District', 'EntryDistrict')->name('adddistrictzone');
    Route::post('Store-District', 'StoryDistrict')->name('storedistrict');
    Route::get('Edti-District/{id}', 'EdtiDistrict')->name('editdistrict');
    Route::post('Update-District', 'UpdateDistrict')->name('updatedistrict');
    Route::get('Delete-District/{id}', 'DeleteDistrict')->name('deletedistrict');
});
Route::prefix('admin/')->controller(AreaZoneController::class)->group(function () {
    Route::get('All-Area', 'Index')->name('areazone');
    Route::get('Add-Area', 'AddAreaZone')->name('addareazone');
    Route::post('Store-Area', 'StoreArea')->name('storearea');
    Route::get('Edti-Area/{id}', 'EdtiArea')->name('editarea');
    Route::post('Update-Area', 'UpdateArea')->name('updatearea');
    Route::get('Delete-Area/{id}', 'DeleteArea')->name('deletearea');
});
Route::prefix('admin/')->controller(CouponController::class)->group(function () {
    Route::get('All-Coupon', 'Index')->name('coupons');
    Route::get('Show-Coupon', 'Showcoupon')->name('addcoupun');
    Route::post('Add-Coupon', 'Entrycoupon')->name('addcoupon');
    Route::get('couponDelete/{id}', 'Delete')->name('couponDelete');
});


require __DIR__ . '/auth.php';