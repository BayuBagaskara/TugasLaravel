<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class configurationTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $matapelajaran_x = config("coba.matapelajaran.matapelajaran_x");
        

        $matapelajaran_xi = config("coba.matapelajaran.matapelajaran_xi");
        $matapelajaran_xii = config("coba.matapelajaran.matapelajaran_xii");


        self::assertEquals($matapelajaran_x,"informatika");
        self::assertEquals($matapelajaran_xi, "webDev");
        self::assertEquals($matapelajaran_xii, "cyber");




    }
}
