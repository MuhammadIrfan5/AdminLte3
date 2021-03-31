<?php

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

Route::get('/home', function () {
      //    return view('welcome');
      return view('pages.index');
})->name('dashboard.v1');


Route::get('/Gallery', function () {
    return view('pages.gallery');
})->name('gallery');

Route::get('/Calendar', function () {
    return view('pages.calendar');
})->name('calendar');

Route::get('/Starter', function () {
    return view('pages.starter');
})->name('starter');



Route::group(['prefix' => 'Pages' , 'as' => 'pages.'],function(){

    Route::get('Widgets' , function (){
       return view('pages.widgets');
    })->name('widgets');


    // Charts Section....

    Route::group(['prefix' => 'Charts' , 'as' => 'charts.'],function(){

        Route::get('Chartjs' , function (){
            return view('pages.charts.chartjs');
        })->name('chartjs');


        Route::get('Flot' , function (){
            return view('pages.charts.flot');
        })->name('flot');


        Route::get('Inline' , function (){
            return view('pages.charts.inline');
        })->name('inline');

    });

    // Examples Section...

    Route::group(['prefix' => 'Examples' , 'as' => 'examples.' ],function(){

        Route::get('404' , function (){
            return view('pages.examples.404');
        })->name('404');


        Route::get('500' , function (){
            return view('pages.examples.500');
        })->name('500');


        Route::get('Blank' , function (){
            return view('pages.examples.blank');
        })->name('blank');


        Route::get('Contacts' , function (){
            return view('pages.examples.contacts');
        })->name('contacts');


        Route::get('E_Commerce' , function (){
            return view('pages.examples.e_commerce');
        })->name('e_commerce');


        Route::get('Forgot-Password' , function (){
            return view('pages.examples.forgot-password');
        })->name('forgot-password');


        Route::get('Invoice' , function (){
            return view('pages.examples.invoice');
        })->name('invoice');


        Route::get('Invoice-Print' , function (){
            return view('pages.examples.invoice-print');
        })->name('invoice-print');


        Route::get('Language-Menu' , function (){
            return view('pages.examples.language-menu');
        })->name('language-menu');


        Route::get('Legacy-user-menu' , function (){
            return view('pages.examples.legacy-user-menu');
        })->name('legacy-user-menu');


        Route::get('Lockscreen' , function (){
            return view('pages.examples.lockscreen');
        })->name('lockscreen');


        Route::get('Login' , function (){
            return view('pages.examples.login');
        })->name('login');


        Route::get('Pace' , function (){
            return view('pages.examples.pace');
        })->name('pace');


        Route::get('Profile' , function (){
            return view('pages.examples.profile');
        })->name('profile');


        Route::get('Project_Add' , function (){
            return view('pages.examples.project_add');
        })->name('project_add');


        Route::get('Project_Detail' , function (){
            return view('pages.examples.project_detail');
        })->name('project_detail');


        Route::get('Project_Edit' , function (){
            return view('pages.examples.project_edit');
        })->name('project_edit');


        Route::get('Projects' , function (){
            return view('pages.examples.projects');
        })->name('projects');


        Route::get('Recover-Password' , function (){
            return view('pages.examples.recover-password');
        })->name('recover-password');


        Route::get('Register' , function (){
            return view('pages.examples.register');
        })->name('register');


    });

    // Forms Section...

    Route::group(['prefix' => 'Forms' , 'as' => 'forms.'], function () {

        Route::get('Advanced' , function (){
            return view('pages.forms.advanced');
        })->name('advanced');

        Route::get('Editors' , function (){
            return view('pages.forms.editors');
        })->name('editors');

        Route::get('General' , function (){
            return view('pages.forms.general');
        })->name('general');

        Route::get('Validation' , function (){
            return view('pages.forms.validation');
        })->name('validation');

    });

    // Layout Section...

    Route::group(['prefix' => 'Layout' , 'as' => 'layout.'], function () {

        Route::get('Top-Nav' , function (){
            return view('pages.layout.top-nav');
        })->name('top-nav');

        Route::get('Boxed' , function (){
            return view('pages.layout.boxed');
        })->name('boxed');

        Route::get('Collapsed-Sidebar' , function (){
            return view('pages.layout.collapsed-sidebar');
        })->name('collapsed-sidebar');

        Route::get('Fixed-Footer' , function (){
            return view('pages.layout.fixed-footer');
        })->name('fixed-footer');

        Route::get('Fixed-Sidebar' , function (){
            return view('pages.layout.fixed-sidebar');
        })->name('fixed-sidebar');

        Route::get('Fixed-Topnav' , function (){
            return view('pages.layout.fixed-topnav');
        })->name('fixed-topnav');

    });

    // Mailbox Section...

    Route::group(['prefix' => 'MailBox' , 'as' => 'mailbox.'], function () {

        Route::get('Compose' , function (){
            return view('pages.mailbox.compose');
        })->name('compose');

        Route::get('Mailbox' , function (){
            return view('pages.mailbox.mailbox');
        })->name('mailbox');

        Route::get('Read-Mail' , function (){
            return view('pages.mailbox.read-mail');
        })->name('read-mail');

    });

    // Tables Section...

    Route::group(['prefix' => 'Tables' , 'as' => 'tables.'], function () {

        Route::get('Data' , function (){
            return view('pages.tables.data');
        })->name('data');

        Route::get('JsGrid' , function (){
            return view('pages.tables.jsgrid');
        })->name('jsgrid');

        Route::get('Simple' , function (){
            return view('pages.tables.simple');
        })->name('simple');

    });

    // UI Section...

    Route::group(['prefix' => 'UI' , 'as' => 'ui.'], function () {

        Route::get('Buttons' , function (){
            return view('pages.ui.buttons');
        })->name('buttons');

        Route::get('General' , function (){
            return view('pages.ui.general');
        })->name('general');

        Route::get('Icons' , function (){
            return view('pages.ui.icons');
        })->name('icons');

        Route::get('Modals' , function (){
            return view('pages.ui.modals');
        })->name('modals');

        Route::get('Navbar' , function (){
            return view('pages.ui.navbar');
        })->name('navbar');

        Route::get('Ribbons' , function (){
            return view('pages.ui.ribbons');
        })->name('ribbons');

        Route::get('Sliders' , function (){
            return view('pages.ui.sliders');
        })->name('sliders');

        Route::get('Timeline' , function (){
            return view('pages.ui.timeline');
        })->name('timeline');

    });


});
