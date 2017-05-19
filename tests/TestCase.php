<?php

abstract class TestCase extends Illuminate\Foundation\Testing\TestCase
{
    /**
     * The base URL to use while testing the application.
     *
     * @var string
     */
    protected $baseUrl = 'http://localhost';

    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        $app = require __DIR__ . '/../bootstrap/app.php';

        $app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

        return $app;
    }

    /**
     * Create a NextGenPET User
     *
     * @param array $values
     * @return \App\User
     */
    protected function createNextGenPetUser($values = [])
    {
        //create the user, college, and account
        $user = factory(App\User::class)->create($values);
        $college = factory(App\College::class)->create();
        $user->account()->create([
            'first_name' => 'Jane',
            'last_name'  => 'Doe',
        ]);

        $user->colleges()->attach($college);
        //assign the role
        $role = factory(App\Role::class)->create(['name' => 'nextgen_pet_user']);
        $role->users()->save($user);

        //return user
        return $user;
    }

    /**
     * Create a Generic User
     *
     * @param array $values
     * @return \App\User
     */
    protected function createGenericUser($values = [])
    {
        $user = factory(App\User::class)->create($values);
        $user->account()->create([
            'first_name' => 'Jane',
            'last_name' => 'Doe',
        ]);

        $role = factory(App\Role::class)->create(['name' => 'teacher']);
        $role->users()->save($user);

        return $user;
    }
}
