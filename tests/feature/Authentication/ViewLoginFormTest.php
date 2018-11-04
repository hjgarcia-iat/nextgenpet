<?php

namespace Tests\Feature\Authentication;

use Tests\TestCase;

/**
 * Class ViewLoginFormTest
 * @package Tests\Feature\Authentication
 */
class ViewLoginFormTest extends TestCase
{
    public function test_we_can_view_the_login_form_page()
    {
        $this->visit(route('login.create'))->assertResponseStatus(200);
    }
}