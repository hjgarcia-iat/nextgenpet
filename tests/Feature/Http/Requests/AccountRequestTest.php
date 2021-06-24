<?php

namespace Tests\Feature\Http\Requests;

use App\Http\Requests\AccountRequest;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AccountRequestTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_has_the_correct_rules()
    {
        $account_request = new AccountRequest();
        $user            = User::factory()->create();
        $rules           = [
            'first_name' => 'required',
            'last_name'  => 'required',
            'email'      => 'required|email|unique:users,email,' . $user->id,
            'password'   => 'confirmed|case_diff|numbers|letters|min:8',
        ];
        auth()->login($user);

        $this->assertEquals($rules, $account_request->rules());
    }
}
