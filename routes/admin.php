<?php




// use App\Http\Controllers\Admin\{
//     JobController,
//     RFQController,
//     RowController,
//     BlogController,
//     DealController,
//     PageController,
//     RoleController,
//     AdminController,
//     BrandController,
//     ClientController,
//     ClientPermission,
//     IncomeController,
//     PolicyController,
//     RegionController,
//     BulkSmsController,
//     ContactController,
//     CountryController,
//     ExpenseController,
//     FeatureController,
//     PartnerController,
//     PartnerPermission,
//     ProductController,
//     SettingController,
//     SuccessController,
//     CategoryController,
//     FeedbackController,
//     HomepageController,
//     IndustryController,
//     PurchaseController,
//     SolutionController,
//     SourcingController,
//     BrandPageController,
//     KnowledgeController,
//     LearnMoreController,
//     RFQManageController,
//     SingleRfqController,
//     NewsLetterController,
//     RowWithColController,
//     TechGlossyController,
//     ClientStoryController,
//     EffortRatingController,
//     IndustryPageController,
//     NotificationController,
//     PresentationController,
//     SalesForcastController,
//     SolutionCardController,
//     ShowCaseVideoController,
//     OfficeLocationController,
//     RfqOrderStatusController,
//     TechnologyDataController,
//     AccountsPayableController,
//     DealTypeSettingController,
//     SalesProfitLossController,
//     SalesTeamTargetController,
//     SalesYearTargetController,
//     SolutionDetailsController,
//     AccountProfitLossController,
//     AccountsReceivableController,
//     CommercialDocumentController,
//     PaymentMethodDetailsController,
// };

use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\SAS\SASController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\Admin\CRMController;
use App\Http\Controllers\Admin\JobController;
use App\Http\Controllers\Admin\RFQController;
use App\Http\Controllers\Admin\RowController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CmarController;
use App\Http\Controllers\Admin\DealController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\HRandAdminController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\StoryController;
use App\Http\Controllers\SAS\DealSasController;
use App\Http\Controllers\SiteContentController;
use App\Http\Controllers\SiteSettingController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\ClientPermission;
use App\Http\Controllers\Admin\IncomeController;
use App\Http\Controllers\Admin\PolicyController;
use App\Http\Controllers\Admin\RegionController;
use App\Http\Controllers\Admin\TaxVatController;
use App\Http\Controllers\Order\ReportController;
use App\Http\Controllers\Order\ReturnController;
use App\Http\Middleware\RedirectIfAuthenticated;
use App\Http\Controllers\Admin\AboutUsController;
use App\Http\Controllers\Admin\BankingController;
use App\Http\Controllers\Admin\BulkSmsController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\ExpenseController;
use App\Http\Controllers\Admin\FeatureController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\PartnerPermission;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SectionController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SuccessController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\FeedbackController;
use App\Http\Controllers\Admin\HomepageController;
use App\Http\Controllers\Admin\IndustryController;
use App\Http\Controllers\Admin\PurchaseController;
use App\Http\Controllers\Admin\SolutionController;
use App\Http\Controllers\Admin\SourcingController;
use App\Http\Controllers\AccountsFinanceController;
use App\Http\Controllers\Admin\BrandPageController;
use App\Http\Controllers\Admin\KnowledgeController;
use App\Http\Controllers\Admin\LearnMoreController;
use App\Http\Controllers\Admin\RFQManageController;
use App\Http\Controllers\Admin\SingleRfqController;
use App\Http\Controllers\SAS\RevisedDealController;
use App\Http\Controllers\Admin\NewsLetterController;
use App\Http\Controllers\Admin\OfferPriceController;
use App\Http\Controllers\Admin\RowWithColController;
use App\Http\Controllers\Admin\TechGlossyController;
use App\Http\Controllers\Order\AdminOrderController;
use App\Http\Controllers\Admin\ClientStoryController;
use App\Http\Controllers\Admin\ExpenseTypeController;
use App\Http\Controllers\Admin\EffortRatingController;
use App\Http\Controllers\Admin\IndustryPageController;
use App\Http\Controllers\Admin\NotificationController;
use App\Http\Controllers\Admin\PresentationController;
use App\Http\Controllers\Admin\SalesForcastController;
use App\Http\Controllers\Admin\SolutionCardController;
use App\Http\Controllers\Admin\WhatWeDoPageController;
use App\Http\Controllers\Sales\SalesAccountController;
use App\Http\Controllers\Admin\PortfolioPageController;
use App\Http\Controllers\Admin\PortfolioTeamController;
use App\Http\Controllers\Admin\ShowCaseVideoController;
use App\Http\Controllers\Marketing\BulkEmailController;
use App\Http\Controllers\Admin\ClientDatabaseController;
use App\Http\Controllers\Admin\OfficeLocationController;
use App\Http\Controllers\Admin\RfqOrderStatusController;
use App\Http\Controllers\Admin\TechnologyDataController;
use App\Http\Controllers\Admin\AccountsManagerController;
use App\Http\Controllers\Admin\AccountsPayableController;
use App\Http\Controllers\Admin\DealTypeSettingController;
use App\Http\Controllers\Admin\ExpenseCategoryController;
use App\Http\Controllers\Admin\PortfolioClientController;
use App\Http\Controllers\Admin\PortfolioDetailController;
use App\Http\Controllers\Admin\SalesProfitLossController;
use App\Http\Controllers\Admin\SalesTeamTargetController;
use App\Http\Controllers\Admin\SalesYearTargetController;
use App\Http\Controllers\Admin\SolutionDetailsController;
use App\Http\Controllers\Admin\TierCalculationController;
use App\Http\Controllers\Admin\AdminMenuBuilderController;
use App\Http\Controllers\Admin\HardwareInfoPageController;
use App\Http\Controllers\Admin\SoftwareInfoPageController;
use App\Http\Controllers\Sales\SalesAchievementController;
use App\Http\Controllers\Admin\AccountProfitLossController;
use App\Http\Controllers\Admin\PortfolioCategoryController;
use App\Http\Controllers\Admin\PortfolioChooseUsController;
use App\Http\Controllers\Marketing\MarketingDmarController;
use App\Http\Controllers\Admin\AccountsReceivableController;
use App\Http\Controllers\Admin\CommercialDocumentController;
use App\Http\Controllers\Admin\FrontendMenuBuilderController;
use App\Http\Controllers\Admin\PaymentMethodDetailsController;
use App\Http\Controllers\Admin\PortfolioClientFeedbackController;
use App\Http\Controllers\Marketing\MarketingTeamTargetController;
use App\Http\Controllers\Marketing\MarketingManagerRoleController;

Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login')->middleware(RedirectIfAuthenticated::class);

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {

    Route::post('/mark-as-read', [AdminController::class, 'markNotification'])->name('markNotification');
    Route::post('/markread', [AdminController::class, 'markAsRead'])->name('markAsRead');
    // Admin Profile All Route
    Route::get('/dashboard',        [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
    Route::get('/logout',           [AdminController::class, 'AdminDestroy'])->name('admin.logout');
    Route::get('/profile',          [AdminController::class, 'AdminProfile'])->name('admin.profile');
    Route::post('/profile/store',   [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');
    Route::get('/change/password',  [AdminController::class, 'AdminChangePassword'])->name('admin.change.password');
    Route::post('/update/password', [AdminController::class, 'AdminUpdatePassword'])->name('update.password');

    //All Admin
    Route::get('/all/admin',        [AdminController::class, 'AllAdmin'])->name('all.admin');
    Route::get('/add/admin',        [AdminController::class, 'AddAdmin'])->name('add.admin');
    Route::get('/edit/admin/{id}',  [AdminController::class, 'EditAdminUser'])->name('edit.admin');
    Route::put('/edit/admin/{id}',  [AdminController::class, 'AdminUserUpdate'])->name('update.admin');
    Route::post('/admin/user/store', [AdminController::class, 'AdminUserStore'])->name('admin.user.store');
    Route::post('admin-status',     [AdminController::class, 'AdminStatus'])->name('admin.status');



    // Category All Route
    Route::controller(CategoryController::class)->group(function () {

        // Route::get('category', 'index')->name('category.index');
        // Route::get('category/create', 'create')->name('category.create');
        // Route::post('category', 'store')->name('category.store');
        // Route::get('category/{id}/edit',  'edit')->name('category.edit');
        // Route::put('category/{id}', 'update')->name('category.update');
        // Route::delete('category/{id}','destroy')->name('category.destroy');

        Route::post('/store/sub_category', 'StoreSubCategory')->name('store.subcategory');
        Route::post('/store/sub_sub_category', 'StoreSubSubCategory')->name('store.subsubcategory');
        Route::post('/store/sub_sub_sub_category', 'StoreSubSubSubCategory')->name('store.subsubsubcategory');
        Route::put('subcategory/{id}', 'UpdateSubCategory')->name('update.subcategory');
        Route::put('subsubcategory/{id}', 'UpdateSubSubCategory')->name('update.subsubcategory');
        Route::put('subsubsubcategory/{id}', 'UpdateSubSubSubCategory')->name('update.subsubsubcategory');
        Route::delete('sub_category/{id}', 'SubCatdestroy')->name('subcategory.destroy');
        Route::delete('sub_sub_category/{id}', 'SubSubCatdestroy')->name('subsubcategory.destroy');
        Route::delete('sub_sub_sub_category/{id}', 'SubSubSubCatdestroy')->name('subsubsubcategory.destroy');
    });








    //     // SolutionAll Route
    //     //Contact
    //     //newsletter
    // //Client Experience
    // //Clients
    // //partners
    // //home Page Builder
    // //blog

    // //Row builder

    // //Row with column builder

    // //Client Story

    // //TechGlossy

    // //Learn More



    // //Industry Page resource route

    // //Solution Card resource route

    // //Solution Details resource route

    // //Policy resource route

    // //Job resource route

    //   // RFQ
    //   //Deal
    //   // Feature
    //   //Product Sourcing
    //  // SAS All Route



    // Product All Route
    Route::controller(ProductController::class)->group(function () {
        Route::get('/all/product', 'AllProduct')->name('all.product');
        Route::get('/add/product', 'AddProduct')->name('add.product');
        Route::post('/store/product', 'StoreProduct')->name('store.product');
        Route::get('/edit/product/{id}', 'EditProduct')->name('edit.product');
        Route::post('/update/product', 'UpdateProduct')->name('update.product');
        Route::post('/update/product/thambnail', 'UpdateProductThambnail')->name('update.product.thambnail');
        Route::post('/update/product/multiimage', 'UpdateProductMultiimage')->name('update.product.multiimage');
        Route::delete('/product/multiimg/delete/{id}', 'MulitImageDelelte')->name('product.multiimg.delete');

        Route::get('/product/inactive/{id}', 'ProductInactive')->name('product.inactive');
        Route::get('/product/active/{id}', 'ProductActive')->name('product.active');
        //Route::get('/delete/product/{id}' , 'ProductDelete')->name('delete.product');
        Route::delete('/delete/product/{id}', 'ProductDelete')->name('product.destroy');

        // For Product Stock
        Route::get('/product/stock', 'ProductStock')->name('product.stock');
        Route::get('toastr', 'toastrIndex')->name('toastr.index');
    });

    Route::get('/support',    [ContactController::class, 'Support'])->name('support.all');

    // IndustryAll Route
    Route::controller(IndustryController::class)->group(function () {
        Route::get('industry', 'index')->name('industry.index');
        Route::get('industry/create', 'create')->name('industry.create');
        Route::post('industry', 'store')->name('industry.store');
        Route::get('industry/{id}/edit',  'edit')->name('industry.edit');
        Route::put('industry/{id}', 'update')->name('industry.update');
        Route::delete('industry/{id}', 'destroy')->name('industry.destroy');
    });


    Route::post('client_status', [App\Http\Controllers\Admin\ClientPermission::class, 'clientStatus'])->name('client.status');

    Route::post('partner_status', [App\Http\Controllers\Admin\PartnerPermission::class, 'partnerStatus'])->name('partner.status');



    //Page Builder

    Route::post('pagebuilder/brand', [PageController::class, 'addPage'])->name('addPage');
    Route::get('allpage', [PageController::class, 'allPage'])->name('allpage');
    Route::get('choose', [PageController::class, 'choose']);
    Route::get('pagebuilder/brand', [PageController::class, 'brand']);
    Route::get('/hardware/{brand}', [HomeController::class, 'hardware']);
    Route::get('pagebuilder/brand/delete/{id}', [PageController::class, 'brandDelete']);

    // Route::get('pagebuilder/{id}',[PageBuilderController::class,'delete']);
    // Route::get('pagebuilder/edit/{id}',[PageBuilderController::class,'edit']);
    // Route::post('pagebuilder/update/{id}',[PageBuilderController::class,'update'])->name('updatePage');


    //Page builder Home

    //Route::get('pagebuilder/home', [HomepageController::class, 'home']);
    Route::post('pagebuilder/home', [HomepageController::class, 'addPageHome'])->name('addPageHome');
    Route::get('pagebuilder/home/{id}', [HomepageController::class, 'delete']);


    //Page Builder Category

    Route::get('pagebuilder/category', [CategoryPageController::class, 'category']);
    Route::post('pagebuilder/category', [CategoryPageController::class, 'addPageCategory'])->name('addPageCategory');
    Route::get('category.html/{category}', [HomeController::class, 'category'])->name('category');
    Route::get('pagebuilder/category/delete/{id}', [CategoryPageController::class, 'categoryDelete']);


    // Permission All Route
    Route::controller(RoleController::class)->group(function () {

        Route::get('/all/permission', 'AllPermission')->name('all.permission');
        Route::get('/add/permission', 'AddPermission')->name('add.permission');
        Route::post('/store/permission', 'StorePermission')->name('store.permission');
        Route::get('/edit/permission/{id}', 'EditPermission')->name('edit.permission');
        Route::post('/update/permission', 'UpdatePermission')->name('update.permission');
        Route::delete('/delete/permission/{id}', 'DeletePermission')->name('delete.permission');
    });


    // Roles All Route
    Route::controller(RoleController::class)->group(function () {

        Route::get('/all/roles', 'AllRoles')->name('all.roles');
        Route::get('/add/roles', 'AddRoles')->name('add.roles');
        Route::post('/store/roles', 'StoreRoles')->name('store.roles');
        Route::get('/edit/roles/{id}', 'EditRoles')->name('edit.roles');
        Route::post('/update/roles', 'UpdateRoles')->name('update.roles');
        Route::delete('/delete/roles/{id}', 'DeleteRoles')->name('delete.roles');

        // add role permission
        Route::get('/add/roles/permission', 'AddRolesPermission')->name('add.roles.permission');
        Route::post('/role/permission/store', 'RolePermissionStore')->name('role.permission.store');
        Route::get('/all/roles/permission', 'AllRolesPermission')->name('all.roles.permission');
        Route::get('/admin/edit/roles/{id}', 'AdminRolesEdit')->name('admin.edit.roles');
        Route::post('/admin/roles/update/{id}', 'AdminRolesUpdate')->name('admin.roles.update');
        Route::delete('/admin/delete/roles/{id}', 'AdminRolesDelete')->name('admin.delete.roles');
    });





    // Admin Order All Route
    Route::controller(AdminOrderController::class)->group(function () {
        Route::get('/pending/order', 'PendingOrder')->name('pending.order');
        Route::get('/admin/order/details/{order_id}', 'AdminOrderDetails')->name('admin.order.details');

        Route::get('/admin/confirmed/order', 'AdminConfirmedOrder')->name('admin.confirmed.order');

        Route::get('/admin/processing/order', 'AdminProcessingOrder')->name('admin.processing.order');

        Route::get('/admin/delivered/order', 'AdminDeliveredOrder')->name('admin.delivered.order');

        Route::get('/pending/confirm/{order_id}', 'PendingToConfirm')->name('pending-confirm');
        Route::get('/confirm/processing/{order_id}', 'ConfirmToProcess')->name('confirm-processing');

        Route::get('/processing/delivered/{order_id}', 'ProcessToDelivered')->name('processing-delivered');

        Route::get('/admin/invoice/download/{order_id}', 'AdminInvoiceDownload')->name('admin.invoice.download');
    });


    // Return Order All Route
    Route::controller(ReturnController::class)->group(function () {
        Route::get('/return/request', 'ReturnRequest')->name('return.request');

        Route::get('/return/request/approved/{order_id}', 'ReturnRequestApproved')->name('return.request.approved');

        Route::get('/complete/return/request', 'CompleteReturnRequest')->name('complete.return.request');
    });


    // Report All Route
    Route::controller(ReportController::class)->group(function () {

        Route::get('/report/view', 'ReportView')->name('report.view');
        Route::post('/search/by/date', 'SearchByDate')->name('search-by-date');
        Route::post('/search/by/month', 'SearchByMonth')->name('search-by-month');
        Route::post('/search/by/year', 'SearchByYear')->name('search-by-year');

        Route::get('/order/by/user', 'OrderByUser')->name('order.by.user');
        Route::post('/search/by/user', 'SearchByUser')->name('search-by-user');
    });

    //jobRegister
    Route::get('job-register-user', [App\Http\Controllers\Frontend\JobController::class, 'jobRegisterUser'])
        ->name('job.regiserUser');
    Route::get('job-register-user/show/{id}', [App\Http\Controllers\Frontend\JobController::class, 'jobRegisterUserShow'])
        ->name('job.regiserUser.show');
    Route::delete('job-register-user/{id}', [App\Http\Controllers\Frontend\JobController::class, 'jobRegisterUserDestroy'])
        ->name('job.regiserUser.destroy');
    Route::get('job-register-user/download/{id}', [App\Http\Controllers\Frontend\JobController::class, 'jobRegisterUserDownload'])
        ->name('resume.download');


    Route::put('assign_salesmanager/{id}', [RFQController::class, 'AssignSalesMan'])->name('assign.salesman');
    Route::controller(RFQController::class)->group(function () {
        Route::get('/edit/{id}/rfq-to-deal', 'DealConvert')->name('deal.convert');
        Route::put('convert-deal/store/{id}', 'ConvertDealStore')->name('convert.deal');
        Route::get('/client/ajax/{client_id}', 'GetClient');
    });


    //   Route::get('/partner/ajax/{partner_id}' , [DealController::class,'GetPartner']);
    //   Route::get('/client/ajax/{client_id}' , [DealController::class,'GetClient']);
    Route::controller(DealController::class)->group(function () {
        Route::get('/partner/ajax/{partner_id}', 'GetPartner');
        Route::get('/client/ajax/{client_id}', 'GetClient');
        Route::put('/send/quotation/{id}',  'SendQuotation')->name('quotation.send');
        Route::put('/send/invoice/{id}',  'dealInvoiceSent')->name('invoice.send');
        //Route::put('/upload/payment-proof/{id}',  'proofPaymentUpload')->name('payment-proof.upload');
        Route::put('/check/quotation/{id}', 'CheckQuotation')->name('quotation.check');
    });



    //Route::get('/edit/product/{id}', 'EditProduct')->name('edit.product');
    //Revised Deal





    Route::controller(SourcingController::class)->group(function () {
        //Route::post('industry', 'store')->name('industry.store');
        Route::get('approve-product',  'ProductApprove')->name('product.approve');
        Route::put('product-approve/store/{id}', 'StoreProductApproval')->name('product-approve.store');
        //Route::delete('industry/{id}', 'destroy')->name('industry.destroy');
    });
    //Product Sourcing




    Route::get('/sas/{id}/sourcing', [App\Http\Controllers\SAS\SASController::class, 'SourcingSas'])->name('sourcing.sas');

    //Deal SAS
    Route::get('/deal_sas_show/{id}', [DealSasController::class, 'DealSasShow'])->name('dealsasshow');
    Route::get('/deal_sas_approve/{id}', [DealSasController::class, 'DealSasApprove'])->name('dealsasapprove');
    Route::put('/deal_sas/product_unitprice/update/{id}/', [DealSasController::class, 'UnitPriceUpdate'])->name('update.unitprice');
    Route::put('/deal-sas/approve/{id}/store/', [DealSasController::class, 'DealSasApproveStore'])->name('approve.deal-sas');




    Route::get('send/mail', [PartnerController::class, 'sendBulkMail'])->name('sendBulkMail');

    Route::get('bulksms', [BulkSmsController::class, 'bulksms']);
    Route::post('bulksms', [BulkSmsController::class, 'sendSms'])->name('sendSms');



    //Overview
    Route::get('/income-expense/overview', [IncomeController::class, 'Overview'])->name('income-expense.overview');

    //Ledger
    Route::get('/income-expense/ledger', [ExpenseController::class, 'Ledger'])->name('income-expense.ledger');


    Route::resources(
        [
            'income'                     => IncomeController::class,
            'product-section'            => SectionController::class,
            'expense'                    => ExpenseController::class,
            'bulkEmail'                  => BulkEmailController::class,
            'office-location'            => OfficeLocationController::class,
            'sales-forcast'              => SalesForcastController::class,
            'account-profit-loss'        => AccountProfitLossController::class,
            'account-payable'            => AccountsPayableController::class,
            'account-receivable'         => AccountsReceivableController::class,
            'purchase'                   => PurchaseController::class,
            'sales-profit-loss'          => SalesProfitLossController::class,
            'salesTeamTarget'            => SalesTeamTargetController::class,
            'salesYearTarget'            => SalesYearTargetController::class,
            'rfqOrderStatus'             => RfqOrderStatusController::class,
            'feedback'                   => FeedbackController::class,
            'partner-account'            => PartnerController::class,
            'commercial-document'        => CommercialDocumentController::class,
            'payment-method-details'     => PaymentMethodDetailsController::class,
            'rfq-manage'                 => RFQManageController::class,
            'sales-achievement'          => SalesAchievementController::class,
            'deal-type-settings'         => DealTypeSettingController::class,
            'effort-ratings'             => EffortRatingController::class,
            'single-rfq'                 => SingleRfqController::class,
            'marketing-manager-role'     => MarketingManagerRoleController::class,
            'marketing-team-target'      => MarketingTeamTargetController::class,
            'marketing-dmar'             => MarketingDmarController::class,
            'notification'               => NotificationController::class,
            'technology-data'            => TechnologyDataController::class,
            'accounts-manager'           => AccountsManagerController::class,
            'knowledge'                  => KnowledgeController::class,
            'presentation'               => PresentationController::class,
            'show-case-video'            => ShowCaseVideoController::class,
            'admin-menu-builder'         => AdminMenuBuilderController::class,
            'client-database'            => ClientDatabaseController::class,
            'category'                   => CategoryController::class,
            'brand'                      => BrandController::class,
            'success'                    => SuccessController::class,
            'setting'                    => SettingController::class,
            'solution'                   => SolutionController::class,
            'contact'                    => ContactController::class,
            'newsLetter'                 => NewsLetterController::class,
            'clientExperince'            => ClientController::class,
            'clientPermission'           => ClientPermission::class,
            'partnerPermission'          => PartnerPermission::class,
            'homepage'                   => HomepageController::class,
            'blog'                       => BlogController::class,
            'row'                        => RowController::class,
            'rowWithCol'                 => RowWithColController::class,
            'clientstory'                => ClientStoryController::class,
            'techglossy'                 => TechGlossyController::class,
            'learnMore'                  => LearnMoreController::class,
            'industryPage'               => IndustryPageController::class,
            'solutionCard'               => SolutionCardController::class,
            'solutionDetails'            => SolutionDetailsController::class,
            'policy'                     => PolicyController::class,
            'job'                        => JobController::class,
            'rfq'                        => RFQController::class,
            'deal'                       => DealController::class,
            'feature'                    => FeatureController::class,
            'brandPage'                  => BrandPageController::class,
            'country'                    => CountryController::class,
            'region'                     => RegionController::class,
            'sas'                        => SASController::class,
            'product-sourcing'           => SourcingController::class,
            'deal-sas'                   => DealSasController::class,
            'revised-deal'               => RevisedDealController::class,
            'partner-account'            => PartnerController::class,
            'sales-account'              => SalesAccountController::class,
            'expense-category'           => ExpenseCategoryController::class,
            'expense-type'               => ExpenseTypeController::class,
            'tax-vat'                    => TaxVatController::class,
            'business'                   => BusinessController::class,
            'accounts-finance'           => AccountsFinanceController::class,
            'site-content'               => SiteContentController::class,
            'hr-and-admin'               => HRandAdminController::class,
            'site-setting'               => SiteSettingController::class,
            'delivery'                   => DeliveryController::class,
            'sales-dashboard'            => SalesDashboardController::class,
            'marketing-dashboard'        => MarketingDashboardController::class,
            'product-showcase-dashboard' => ProductShowcaseDashboardController::class,
            'offer-price'                => OfferPriceController::class,

             // phase 2 part 2
            'what-we-do-page'           => WhatWeDoPageController::class, // done
            'software-info-page'        => SoftwareInfoPageController::class, // done
            'hardware-info-page'        => HardwareInfoPageController::class, // done

            'banking'                   => BankingController::class, // allmost - pending
            'tax-vat'                   => TaxVatController::class, // done
            'expense-category'          => ExpenseCategoryController::class, // done
            'frontend-menu-builder'     => FrontendMenuBuilderController::class, //pending
            'about-us'                  => AboutUsController::class, //pending
            'expense-type'              => ExpenseTypeController::class, //done
            'tier-calculation'          => TierCalculationController::class, //done
            'portfolio-client'          => PortfolioClientController::class, //done
            'portfolio-team'            => PortfolioTeamController::class, //done
            'portfolio-choose-us'       => PortfolioChooseUsController::class, //done

            'portfolio-category'        => PortfolioCategoryController::class,
            'portfolio-page'            => PortfolioPageController::class,
            'portfolio-detail'          => PortfolioDetailController::class, //pending dd
            'portfolio-client-feedback' => PortfolioClientFeedbackController::class,
            'cmar' => CmarController::class,
        ],
        [
            //   'except' => ['show','tax-vat','create','edit','expense-type']
            // you can set here other options e.g. 'only', 'except', 'names', 'middleware'
        ]
    );

    Route::get('supply-chain',  [AdminController::class, 'supplyChain'])->name('supplychain');

    //Assign Roles to Sales Manager
    Route::put('assign_roles/SalesManager/{id}', [SalesAccountController::class, 'assignSalesManagerRole'])->name('assign.salesmanager-role');


    Route::post('notifiy/multi-delete', [NotificationController::class, 'multiDelete'])->name('notifiy.multi-delete');
    Route::controller(EffortRatingController::class)->group(function () {
        Route::get('/effort/ajax/{id}', 'GetEffortRating')->name('get.effort.ajax');
    });


    Route::get('/sales-achievement/summary', [SalesAchievementController::class, 'salesAchievementSummary'])->name('dashboard.salesachievement');
    Route::get('/sales-report/dashboard', [SalesYearTargetController::class, 'salesReportDashboard'])->name('dashboard.salesreport');


    Route::post('salesmanager-status', [App\Http\Controllers\Sales\SalesAccountController::class, 'SalesStatus'])->name('sales.status');





    ///Artisan Command



    // A function to run Artisan commands
    function runCommand($command, $successMessage)
    {
        // dd
        Artisan::call($command); //dd($command)
        Toastr::success($successMessage); //dd($successMessage)
        return back();
    }

    // Route for creating a symbolic link
    Route::get('link', function () {
        return runCommand('storage:link', 'Storage linked successfully');
    });

    // Route for clearing cache
    Route::get('clear-cache', function () {
        return runCommand('cache:clear', 'Cache cleared');
    });

    // Route for optimizing class loader
    Route::get('optimize', function () {
        return runCommand('optimize:clear', 'Optimize cleared');
    });

    // Route for caching routes
    Route::get('route-cache', function () {
        return runCommand('route:cache', 'Route cached');
    });

    // Route for clearing cached routes
    Route::get('clear-route', function () {
        return runCommand('route:clear', 'Route value cleared');
    });

    // Route for clearing view cache
    Route::get('clear-view', function () {
        return runCommand('view:clear', 'View cleared');
    });

    // Route for clearing config cache
    Route::get('clear-config', function () {
        return runCommand('config:cache', 'Config cached');
    });

    // Route for running database migrations
    Route::get('migrate', function () {
        return runCommand('migrate', 'Migration completed');
    });
});



// My Custom Route
Route::get('crms',[CRMController::class,'FunctionName']);
