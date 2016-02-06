<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AdminAuthTest extends TestCase
{
    use DatabaseMigrations, DatabaseTransactions;

    /** @test */
    public function it_redirect_administrator_from_superadmin_pages()
    {
        $this->loginAsAdmin()
             ->visit('/superadmin/home')
             ->seePageIs('/administrator/home');
        
        $this->loginAsAdmin()
             ->visit('/superadmin/anggota')
             ->seePageIs('/administrator/home');  
    }

    /** @test */
    public function it_redirect_superadmin_from_administrator_pages()
    {
        $this->loginAsSuperAdmin()
             ->visit('/administrator/home')
             ->seePageIs('/superadmin/home');

        $this->loginAsSuperAdmin()
             ->visit('/administrator/anggota')
             ->seePageIs('/superadmin/home');
    }

    /** @test */
    public function it_redirects_admins_to_respected_page_from_login_page()
    {
        $this->loginAsAdmin()
             ->visit('/login')
             ->seePageIs('/administrator/home');

        $this->loginAsSuperAdmin()
             ->visit('/login')
             ->seePageIs('/superadmin/home');
    }

    /** @test */
    public function a_guest_can_access_login_page()
    {
        $this->visit('/login')
             ->seePageIs('/login');
    }

    protected function loginAsAdmin()
    {
        $admin = factory(App\User::class)->create( ['role_id' => 2] );

        return $this->actingAs( $admin );
    }

    protected function loginAsSuperAdmin()
    {
        $admin = factory(App\User::class)->create( ['role_id' => 1] );

        return $this->actingAs( $admin );
    }
}
