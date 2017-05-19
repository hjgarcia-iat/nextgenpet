<?php

use App\Repositories\CollegeRepository;
use App\State;
use App\Zip;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

/**
 * Class CollegeRepositoryTest
 */
class CollegeRepositoryTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * @test
     */
    public function we_can_add_a_college()
    {
        $zip         = factory(Zip::class)->create();
        $state       = factory(State::class)->create(['abbr' => $zip->state_prefix]);
        $collegeRepo = new CollegeRepository();
        $college     = $collegeRepo->create($zip->zip_code, 'College');

        $this->seeInDatabase('colleges', $college->toArray());
    }

}