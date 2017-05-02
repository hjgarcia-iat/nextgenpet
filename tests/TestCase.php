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
     * @return \App\User
     */
    protected function createNextGenPetUser()
    {
        $account = factory(App\Account::class)->create();
        $role = factory(App\Role::class)->create(['name' => 'nextgen_pet_user']);
        $role->users()->save($account->user);

        return $account->user;
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
            'first_name' => 'first',
            'last_name' => 'last',
        ]);

        $role = factory(App\Role::class)->create(['name' => 'teacher']);
        $role->users()->save($user);

        return $user;
    }
}
