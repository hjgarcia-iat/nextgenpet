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
        $teacher = \DB::transaction(function () use ($request) {
            //create the teacher
            $teacher = $this->create($request);
            //create college
            $college = $this->college->create($request->get('zip'), $request->get('institution'));
            //attach college to teacher
            $teacher->colleges()->attach($college);
            //attach the role
            $teacher->assignRole('nextgen_pet_user');

            return $teacher;
        });

        return $teacher;
    }

    /**
     * Create the user
     *
     * @param RegisterRequest $request
     *
     * @return User
     */
    protected function create(RegisterRequest $request)
    {
        //create the teacher
        $teacher = User::create([
            'email'              => $request->get('register_email'),
            'username'           => $request->get('register_email'),//needed for database
            'account_status'     => 'pending',
            'user_group_id'      => 1,//needed for database
            'account_expiration' => Carbon::now()->addYear(4),//needed for database
            'order_number'       => 'NextGenPET',//needed for database
        ]);

        //create account for the teacher
        $teacher->account()->create([
            'first_name' => $request->get('first_name'),
            'last_name'  => $request->get('last_name'),
        ]);

        return $teacher;
    }
}
