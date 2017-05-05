<?php namespace App\Repositories;

use App\Http\Requests\RegisterRequest;
use App\User;
use Carbon\Carbon;

/**
 * TeacherRepository
 *
 * @package App\Repositories;
 */
class TeacherRepository
{
    /**
     * @var CollegeRepository
     */
    private $college;

    /**
     * TeacherRepository constructor.
     * @param CollegeRepository $college
     */
    public function __construct(CollegeRepository $college)
    {
        $this->college = $college;
    }

    /**
     * Create a College User
     *
     * @param  RegisterRequest $request
     *
     * @return \App\User
     */
    public function register(RegisterRequest $request)
    {
        $user = \DB::transaction(function () use ($request) {
            $user = $this->createUser($request);
            //create college
            $college = $this->college->createCollege($request->all());
            //attach college to user
            $user->colleges()->attach($college);
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
}
