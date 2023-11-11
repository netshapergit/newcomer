<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('auth/login/admin', 'AuthController@show');
Route::post('auth/login/admin', 'AuthController@loginAdmin');
Route::post('auth/login', 'AuthController@newloginUser');
// TODO use post
Route::get('auth/logout/admin', 'AuthController@logoutAdmin');
Route::get('auth/logout', 'AuthController@logoutUser');

Route::post('register', 'UsersController@register');

Route::post('form_uploads', 'FormUploadsController@store');

//user
Route::get(URL_USER, 'UserIndexController@index');
Route::resource(URL_USER . '/pages', 'UserPagesController');
Route::post(URL_USER . '/upload_images', 'UserUploadImagesController@store');
Route::post(URL_USER . '/upload_documents', 'UserUploadDocumentsController@store');
Route::resource(URL_USER . '/users', 'UserUsersController');
Route::get('/api/users', array('before' => 'auth.user', 'uses' => 'ApiUsersController@all'));
Route::get('/api/users/{id}', array('before' => 'auth.user', 'uses' => 'ApiUsersController@show'));
Route::post('/api/users/{id}', array('before' => 'auth.user', 'uses' => 'ApiUsersController@update'));
// Route::get('/api/orders', array('before' => 'auth.user', 'uses' => 'ApiOrdersController@all'));
// Route::post('/api/orders', array('before' => 'auth.user', 'uses' => 'ApiOrdersController@create'));
// Route::post('/api/orders', 'ApiOrdersController@create');
// Route::get('/api/orders/my', 'ApiOrdersController@my');
// Route::post('/api/orders/my/archivation', 'ApiOrdersController@myOrderArchivation');
// Route::post('/api/orders/my/delete', 'ApiOrdersController@myOrderDelete');
// Route::get('/api/orders/requested', 'ApiOrdersController@myRequestedOrders');
// Route::post('/api/orders/requested/accept', 'ApiOrdersController@myRequestedOrdersAccept');
// Route::post('/api/orders/requested/deny', 'ApiOrdersController@myRequestedOrdersDeny');
// Route::post('/api/orders/requested/denied', 'ApiOrdersController@myRequestedOrdersDenied');
// Route::post('/api/orders/requested/undenied', 'ApiOrdersController@myRequestedOrdersUnDenied');

Route::get('/api/programs', array('before' => 'auth.user', 'uses' => 'ApiProgramsController@all'));
Route::get('/api/programs/{id}', array('before' => 'auth.user', 'uses' => 'ApiProgramsController@show'));
//Route::post('/api/courses', array('before' => 'auth.user', 'uses' => 'ApiCoursesController@create'));
Route::get('/api/courses', array('before' => 'auth.user', 'uses' => 'ApiCoursesController@all'));
Route::get('/api/courses/{id}', array('before' => 'auth.user', 'uses' => 'ApiCoursesController@show'));
Route::post('/api/courses', 'ApiCoursesController@create');

Route::get('/api/lessons', array('before' => 'auth.user', 'uses' => 'ApiLessonsController@all'));
Route::get('/api/lessons/{id}', array('before' => 'auth.user', 'uses' => 'ApiLessonsController@show'));

Route::get('/api/tests', array('before' => 'auth.user', 'uses' => 'ApiTestsController@all'));
Route::get('/api/tests/{id}', array('before' => 'auth.user', 'uses' => 'ApiTestsController@show'));

Route::get('/api/homeworks', array('before' => 'auth.user', 'uses' => 'ApiHomeworksController@all'));
Route::get('/api/homeworks/my', array('before' => 'auth.user', 'uses' => 'ApiHomeworksController@my'));
Route::post('/api/homeworks', array('before' => 'auth.user', 'uses' => 'ApiHomeworksController@create'));
Route::put('/api/homeworks', array('before' => 'auth.user', 'uses' => 'ApiHomeworksController@update'));
Route::post('/api/homeworks/delete', array('before' => 'auth.user', 'uses' => 'ApiHomeworksController@delete'));

Route::get('/api/messages', array('before' => 'auth.user', 'uses' => 'ApiMessagesController@all'));
Route::get('/api/messages/my', array('before' => 'auth.user', 'uses' => 'ApiMessagesController@my'));
Route::post('/api/messages/my', array('before' => 'auth.user', 'uses' => 'ApiMessagesController@readMy'));
Route::post('/api/messages', array('before' => 'auth.user', 'uses' => 'ApiMessagesController@create'));


Route::get('/api/orders/test', 'ApiOrdersController@test2');

Route::get('/test3', 'ApiOrdersController@test3');

Route::group(array('before' => 'update'), function()
{
		
	// manager
	Route::group(array('before' => 'manager'), function()
	{
		Route::get(URL_ADMIN, 'AdminIndexController@index');

		Route::resource(URL_ADMIN . '/feedbacks', 'AdminFeedbacksController', array(
			'except' => array('create', 'store'),
		));
		Route::resource(URL_ADMIN . '/modules', 'AdminModulesController');
		Route::resource(URL_ADMIN . '/options', 'AdminOptionsController');
		Route::put(URL_ADMIN . '/pages/mass_update', 'AdminPagesController@massUpdate');
		Route::resource(URL_ADMIN . '/pages', 'AdminPagesController');
		Route::resource(URL_ADMIN . '/positions', 'AdminPositionsController');
		Route::resource(URL_ADMIN . '/users', 'AdminUsersController');

		Route::get(URL_ADMIN . '/site', 'AdminSiteController@edit');
		Route::put(URL_ADMIN . '/site', 'AdminSiteController@update');

		Route::post(URL_ADMIN . '/upload_documents', 'AdminUploadDocumentsController@store');
		Route::post(URL_ADMIN . '/upload_files', 'AdminUploadFilesController@store');
		Route::post(URL_ADMIN . '/upload_images', 'AdminUploadImagesController@store');

		Route::get(URL_ADMIN . '/files', 'AdminFileListController@index');
		Route::resource(URL_ADMIN . '/documents', 'AdminDocumentsController', array(
			'except' => array('create', 'store'),
		));

		// grid
//		Route::resource(URL_ADMIN . '/grid', 'AdminGridController');
		Route::get(URL_ADMIN . '/grid', 'AdminGridController@index');

		// admin
		Route::group(array('before' => 'admin'), function()
		{
			Route::resource(URL_ADMIN . '/formes', 'AdminFormesController');
			Route::resource(URL_ADMIN . '/forme_fields', 'AdminFormeFieldsController');
			Route::resource(URL_ADMIN . '/layouts', 'AdminLayoutsController');
			Route::resource(URL_ADMIN . '/module_type_layouts', 'AdminModuleTypeLayoutsController');
			Route::resource(URL_ADMIN . '/page_fields', 'AdminPageFieldsController');
			Route::resource(URL_ADMIN . '/selects', 'AdminSelectsController');
			Route::resource(URL_ADMIN . '/setting_fields', 'AdminSettingFieldsController');
			Route::resource(URL_ADMIN . '/user_fields', 'AdminUserFieldsController');

			Route::resource(URL_ADMIN . '/images', 'AdminImagesController', array(
				'except' => array('create', 'store'),
			));
			Route::resource(URL_ADMIN . '/scripts', 'AdminScriptsController');
			Route::resource(URL_ADMIN . '/styles', 'AdminStylesController');
			Route::resource(URL_ADMIN . '/templates', 'AdminTemplatesController');

			Route::get(URL_ADMIN . '/system', 'AdminSystemController@edit');
			Route::put(URL_ADMIN . '/system', 'AdminSystemController@update');

			Route::post(URL_ADMIN . '/upload_theme_images', 'AdminUploadThemeImagesController@store');

			// superuser
			Route::group(array('before' => 'superuser'), function()
			{
				Route::resource(URL_ADMIN . '/admins', 'AdminAdminsController');
				Route::resource(URL_ADMIN . '/aliases', 'AdminAliasesController');
				Route::resource(URL_ADMIN . '/domains', 'AdminDomainsController', array(
					'except' => array('destroy'),
				));
				Route::resource(URL_ADMIN . '/field_types', 'AdminFieldTypesController', array(
					'except' => array('create', 'store', 'destroy'),
				));
				Route::resource(URL_ADMIN . '/module_type_additions', 'AdminModuleTypeAdditionsController', array(
					'except' => array('create', 'store', 'destroy'),
				));
				Route::resource(URL_ADMIN . '/module_types', 'AdminModuleTypesController', array(
					'except' => array('create', 'store', 'destroy'),
				));
			});
		});
	});

	Route::post('form/{formeId}', 'FormsController@send')->where('formeId', '\\d+');
	Route::get('/lk/{any}', array('before' => 'auth.user', 'uses' => 'PagesController@show'))->where('any', '.*');
	Route::get('{any}', 'PagesController@show')->where('any', '.*');
});
