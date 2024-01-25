<?php

use PHPUnit\Framework\TestCase;
use PhpunitUnitTesting\User;

class UserTest extends TestCase
{
    public $user;

    public function setUp(): void
    {
        $this->user = new User(20, "Sardor");

    }

    public function test_tell_name()
    {
        $this->assertStringContainsString('Sardor', $this->user->tellName());
    }

    public function test_tell_age()
    {
        $this->assertStringContainsString(20, $this->user->tellAge());
        $this->assertEquals(20, $this->user->age);
    }

    /** @test */    

    public function add_favorite_movie()
    {
        $this->user->addFavoriteMovie("Iron Man");
        $this->user->addFavoriteMovie("Bat Man");
        $this->user->addFavoriteMovie("Spider Man");
        $this->assertContains("Iron Man", $this->user->favorite_movies);
        $this->assertTrue($this->user->addFavoriteMovie("Aqu Man"));
        $this->assertCount(4, $this->user->favorite_movies);
    }

    /** @test */

    public function remove_favorite_movie()
    {
        $this->user->addFavoriteMovie("Sipder Man");
        $this->user->addFavoriteMovie("Venom");
        $this->user->addFavoriteMovie("Tor");

        $this->user->removeFavoriteMovie("Venom");

        $this->assertCount(2, $this->user->favorite_movies);
        $this->assertNotContains("Venom", $this->user->favorite_movies);
    }
} 
