<?php namespace App\Repositories;

use App\College;
use App\Http\Requests\RegisterRequest;
use App\State;
use App\User;
use App\Zip;
use Carbon\Carbon;

/**
 * CollegeUserRepository
 *
 * @package App\Repositories;
 */
class CollegeUserRepository
{

	/**
	 * Create a College User
	 *
	 * @param  RegisterRequest $request
	 *
	 * @return \App\User
	 */
	public function create(RegisterRequest $request)
	{
		$user = \DB::transaction(function () use ($request){
			$user = $this->createUser($request);
			//create college
			$college = $this->createCollege($request);
			//attach college to user
			$user->colleges()->attach($college->id);
			//attach the role
			$user->assignRole('nextgen_pet_user');

			return $user;
		});

		return $user;
	}

	/**
	 * Create the user
	 *
	 * @param RegisterRequest $request
	 *
	 * @return User
	 */
	protected function createUser(RegisterRequest $request)
	{
		//create the user
		$user = User::create([
			'email'              => $request->get('register_email'),
			'username'           => $request->get('register_email'),
			'account_status'     => 'Pending',
			'user_group_id'      => 1,
			'account_expiration' => Carbon::now()->addYear(4),
			'order_number'       => 'NextGenPET',
		]);

		//create account for the user
		$user->account()->create([
			'first_name' => $request->get('first_name'),
			'last_name'  => $request->get('last_name'),
		]);

		return $user;
	}

	/**
	 * Create College
	 *
	 * @param RegisterRequest $request
	 *
	 * @return College
	 */
	protected function createCollege(RegisterRequest $request)
	{
		$zip     = Zip::whereZipCode($request->get('zip'))->firstOrFail();
		$state   = State::whereAbbr($zip->state_prefix)->firstOrFail();
		$college = College::create([
			'name'     => $request->get('institution'),
			'state_id' => $state->id,
			'address'  => '-',
			'city'     => $zip->city,
			'zip'      => $zip->zip_code,
		]);

		return $college;
	}
}
