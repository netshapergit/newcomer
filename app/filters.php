<?php

/*
|--------------------------------------------------------------------------
| Application & Route Filters
|--------------------------------------------------------------------------
|
| Below you will find the "before" and "after" events for the application
| which may be used to do any work before or after a request into your
| application. Here you may also register your custom route filters.
|
*/

App::before(function($request)
{
	//
});


App::after(function($request, $response)
{
	//
});

/*
|--------------------------------------------------------------------------
| Authentication Filters
|--------------------------------------------------------------------------
|
| The following filters are used to verify that the user of the current
| session is logged into this application. The "basic" filter easily
| integrates HTTP Basic authentication for quick, simple checking.
|
*/

Route::filter('update', function()
{
	if (file_exists(app_path('storage/lock')))
	{
		$admin = Auth::admin()->get();

		if (!$admin || !$admin->is('superuser'))
		{
			return View::make('_.system.update');
		}
	}
});

Route::filter('auth.user', function()
{
	if (!Auth::user()->get())
	{
		return Redirect::guest('/?login=yes');
	}
});

Route::filter('auth', function()
{
	if (!Auth::admin()->get())
	{
		return Redirect::guest('auth/login/admin');
	}
});

foreach (Admin::getRoles() as $role)
{
	Route::filter($role, function() use ($role)
	{
		$user = Auth::admin()->get();

		if (!$user || !($user instanceof Admin))
		{
			return Redirect::guest('auth/login/admin');
		}
		elseif (!$user->is(Admin::getRoles($role)))
		{
			return Redirect::guest(URL_ADMIN);
		}
	});
}


Route::filter('auth.basic', function()
{
	return Auth::admin()->basic('auth/login/admin');
});

/*
|--------------------------------------------------------------------------
| Guest Filter
|--------------------------------------------------------------------------
|
| The "guest" filter is the counterpart of the authentication filters as
| it simply checks that the current user is not logged in. A redirect
| response will be issued if they are, which you may freely change.
|
*/

Route::filter('guest', function()
{
	if (Auth::admin()->check()) return Redirect::to('/');
});

/*
|--------------------------------------------------------------------------
| CSRF Protection Filter
|--------------------------------------------------------------------------
|
| The CSRF filter is responsible for protecting your application against
| cross-site request forgery attacks. If this special token in a user
| session does not match the one given in this request, we'll bail.
|
*/

Route::filter('csrf', function()
{
	if (Session::token() != Input::get('_token'))
	{
		throw new Illuminate\Session\TokenMismatchException;
	}
});
