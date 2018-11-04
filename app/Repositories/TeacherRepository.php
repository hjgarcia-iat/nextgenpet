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
     * Crete a next gen pet user
     *
     * @param RegisterRequest $request
     * @return mixed
     * @throws \Throwable
     */
    public function register(RegisterRequest $request)
    {
        $teacher = \DB::transaction(function () use ($request) {
            //create the teacher
            $teacher = $this->create($request->get('first_name'), $request->get('last_name'), $request->get('register_email'));
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
     * @param string $first_name
     * @param string $last_name
     * @param string $email
     * @return User
     */
    protected function create($first_name, $last_name, $email)
    {
        //create the teacher
        $teacher = User::create([
            'email'              => $email,
            'username'           => $email,//needed for database
            'account_status'     => 'Pending',
            'user_group_id'      => 1,//needed for database
            'account_expiration' => Carbon::now()->addYear(4),//needed for database
            'order_number'       => 'NextGenPET',//needed for database
        ]);

        //create account for the teacher
        $teacher->account()->create([
            'first_name' => $first_name,
            'last_name'  => $last_name,
        ]);

        return $teacher;
    }
}
