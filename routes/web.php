<?php

/*
 * |--------------------------------------------------------------------------
 * | Web Routes
 * |--------------------------------------------------------------------------
 * |
 * | Here is where you can register web routes for your application. These
 * | routes are loaded by the RouteServiceProvider within a group which
 * | contains the "web" middleware group. Now create something great!
 * |
 */
Route::get ( '/', function ()
{
    return view ( 'index' );
} );
Route::get ( '/index.html', function ()
{
    return view ( 'index' );
} );

Route::get ( '/chart-flot.html', function ()
{
    return view ( 'chart-flot' );
} );
Route::get ( '/component-animation.html', function ()
{
    return view ( 'component-animation' );
} );
Route::get ( '/component-button.html', function ()
{
    return view ( 'component-button' );
} );
Route::get ( '/component-carousel.html', function ()
{
    return view ( 'component-carousel' );
} );
Route::get ( '/component-grid.html', function ()
{
    return view ( 'component-grid' );
} );
Route::get ( '/component-icon.html', function ()
{
    return view ( 'component-icon' );
} );
Route::get ( '/component-loading.html', function ()
{
    return view ( 'component-loading' );
} );
Route::get ( '/component-notification.html', function ()
{
    return view ( 'component-notification' );
} );
Route::get ( '/component-others.html', function ()
{
    return view ( 'component-others' );
} );
Route::get ( '/component-panel.html', function ()
{
    return view ( 'component-panel' );
} );
Route::get ( '/component-pricing.html', function ()
{
    return view ( 'component-pricing' );
} );
Route::get ( '/component-slider.html', function ()
{
    return view ( 'component-slider' );
} );
Route::get ( '/component-sortable.html', function ()
{
    return view ( 'component-sortable' );
} );
Route::get ( '/component-tabsaccordion.html', function ()
{
    return view ( 'component-tabsaccordion' );
} );
Route::get ( '/component-typography.html', function ()
{
    return view ( 'component-typography' );
} );
Route::get ( '/form-element.html', function ()
{
    return view ( 'form-element' );
} );
Route::get ( '/form-fileupload.html', function ()
{
    return view ( 'form-fileupload' );
} );
Route::get ( '/form-imagecrop.html', function ()
{
    return view ( 'form-imagecrop' );
} );
Route::get ( '/form-layout.html', function ()
{
    return view ( 'form-layout' );
} );
Route::get ( '/form-validation.html', function ()
{
    return view ( 'form-validation' );
} );
Route::get ( '/form-wizard.html', function ()
{
    return view ( 'form-wizard' );
} );
Route::get ( '/form-wysiwyg.html', function ()
{
    return view ( 'form-wysiwyg' );
} );
Route::get ( '/form-xeditable.html', function ()
{
    return view ( 'form-xeditable' );
} );

Route::get ( '/layout-default.html', function ()
{
    return view ( 'layout-default' );
} );
Route::get ( '/layout-fixed-header.html', function ()
{
    return view ( 'layout-fixed-header' );
} );
Route::get ( '/layout-fixed-sidebar.html', function ()
{
    return view ( 'layout-fixed-sidebar' );
} );
Route::get ( '/layout-navbar-collapse.html', function ()
{
    return view ( 'layout-navbar-collapse' );
} );
Route::get ( '/layout-reveal-header.html', function ()
{
    return view ( 'layout-reveal-header' );
} );
Route::get ( '/layout-with-footer.html', function ()
{
    return view ( 'layout-with-footer' );
} );
Route::get ( '/maps-google.html', function ()
{
    return view ( 'maps-google' );
} );
Route::get ( '/maps-vector.html', function ()
{
    return view ( 'maps-vector' );
} );
Route::get ( '/page-blog-default.html', function ()
{
    return view ( 'page-blog-default' );
} );
Route::get ( '/page-blog-grid.html', function ()
{
    return view ( 'page-blog-grid' );
} );
Route::get ( '/page-blog-single.html', function ()
{
    return view ( 'page-blog-single' );
} );
Route::get ( '/page-calendar.html', function ()
{
    return view ( 'page-calendar' );
} );
Route::get ( '/page-email-inbox.html', function ()
{
    return view ( 'page-email-inbox' );
} );
Route::get ( '/page-email-view.html', function ()
{
    return view ( 'page-email-view' );
} );
Route::get ( '/page-error-403.html', function ()
{
    return view ( 'page-error-403' );
} );
Route::get ( '/page-error-404.html', function ()
{
    return view ( 'page-error-404' );
} );
Route::get ( '/page-error-500.html', function ()
{
    return view ( 'page-error-500' );
} );
Route::get ( '/page-faq.html', function ()
{
    return view ( 'page-faq' );
} );
Route::get ( '/page-invoice.html', function ()
{
    return view ( 'page-invoice' );
} );
Route::get ( '/page-invoice-printable.html', function ()
{
    return view ( 'page-invoice-printable' );
} );
Route::get ( '/page-login.html', function ()
{
    return view ( 'page-login' );
} );
Route::get ( '/page-login-returned.html', function ()
{
    return view ( 'page-login-returned' );
} );
Route::get ( '/page-media-album.html', function ()
{
    return view ( 'page-media-album' );
} );
Route::get ( '/page-media-gallery.html', function ()
{
    return view ( 'page-media-gallery' );
} );
Route::get ( '/page-message-bubble.html', function ()
{
    return view ( 'page-message-bubble' );
} );
Route::get ( '/page-message-rich.html', function ()
{
    return view ( 'page-message-rich' );
} );
Route::get ( '/page-profile.html', function ()
{
    return view ( 'page-profile' );
} );
Route::get ( '/page-register.html', function ()
{
    return view ( 'page-register' );
} );
Route::get ( '/page-starter.html', function ()
{
    return view ( 'page-starter' );
} );
Route::get ( '/page-timeline-v2.html', function ()
{
    return view ( 'page-timeline-v2' );
} );
Route::get ( '/table-datatable.html', function ()
{
    return view ( 'table-datatable' );
} );
Route::get ( '/table-default.html', function ()
{
    return view ( 'table-default' );
} );
Route::get ( '/welcome.html', function ()
{
    return view ( 'welcome' );
} );
Route::get ( '/widget.html', function ()
{
    return view ( 'widget' );
} );