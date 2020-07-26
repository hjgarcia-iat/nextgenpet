<?php

namespace Tests\Feature\LectureStyle;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\Factories\UserFactory;
use Tests\TestCase;

/**
 * Class VirtualPageTest
 * @package Tests\StudioStyle
 */
class VirtualPageTest extends TestCase
{
    use RefreshDatabase;

    public function test_we_can_see_the_virtual_page_as_a_next_gen_pet_user()
    {
        $user = UserFactory::createUser();

        $this->actingAs($user)
            ->get('/lecture-style-class/instructor/next-gen-pet-virtual-conference')
            ->assertRedirect('http://ngpfolc.wpengine.com/?p=248');
    }

    public function test_we_can_see_the_virtual_page_as_an_admin()
    {
        $user = UserFactory::createAdminUser();

        $this->actingAs($user)
            ->get('/lecture-style-class/instructor/next-gen-pet-virtual-conference')
            ->assertRedirect('http://ngpfolc.wpengine.com/?p=248');
    }

    public function test_we_cannot_see_the_virtual_page_as_a_guest()
    {
        $this->get('/lecture-style-class/instructor/next-gen-pet-virtual-conference')
            ->assertRedirect(route('login.create'));
    }
}