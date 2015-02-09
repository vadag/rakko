<?php namespace App\Modules\Kagi\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Modules\Kagi\Http\Controllers\SocialAuthenticateUser;
use App\Modules\Kagi\Http\Listeners\AuthenticateUserListener;

class SocialAuthController extends Controller implements AuthenticateUserListener {

	/**
	 * @param AuthenticateUser $authenticateUser
	 * @param Request $request
	 * @return \Symfony\Component\HttpFoundation\RedirectResponse
	 */
	public function login(SocialAuthenticateUser $authenticateUser, Request $request)
	{
		$hasCode = $request->has('code');
//dd($hasCode);

		return $authenticateUser->execute($hasCode, $this);
	}

	/**
	 * When a user has successfully been logged in...
	 *
	 * @param $user
	 * @return \Illuminate\Routing\Redirector
	 */
	public function userHasLoggedIn($user)
	{
		return redirect('/');
	}

}