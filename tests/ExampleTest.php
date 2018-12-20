<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\User;
use App\Client;
use App\Deal;
use Auth;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->visit('/')
             ->see('Laravel');
    }

    public function testClientSources()
    {
      $user = new User([
        'id' => 1,
        'name' => 'user',
        'email' => 'user@yandex.ru',
        'password' => bcrypt("qwerty"),
        'Role_id' => 2
      ]);

      // $this->be($user);

        $this->actingAs($user)
             ->visit('/clientMenu')
             ->click('Мои сделки')
             ->seePageIs('/clientDeals');
    }

    public function testGETReponce()
    {
      $deals = [];
      $user = new User([
        'id' => 1,
        'name' => 'user',
        'email' => 'user@yandex.ru',
        'password' => bcrypt("qwerty"),
        'Role_id' => 2
      ]);
      $client = Client::where('user_id', $user->id)->first();
      if($client) {
        $realties = Realty::where('client_id', $client->id)->get();
        foreach ($realties as $realty) {
            $ds = $realty->deals()->get();
            $deals = $ds->merge($deals);
        }
      }

      $response = $this->actingAs($user)->call('GET', '/clientDeals');
      $this->assertResponseOk();
      $this->assertViewHas('deals', $deals);
    }

    public function testBoss()
    {
      $user = new User([
        'id' => 1,
        'name' => 'user',
        'email' => 'user@yandex.ru',
        'password' => bcrypt("qwerty"),
        'Role_id' => 1
      ]);


      $response = $this->actingAs($user)->call('GET', '/bossMenu');
      $this->assertResponseOk();
    }

    public function testBossAuth()
    {
      $user = new User([
        'id' => 1,
        'name' => 'user',
        'email' => 'user@yandex.ru',
        'password' => bcrypt("qwerty"),
        'Role_id' => 1
      ]);

      $this->actingAs($user)->visit('/bossRate')
           ->dontsee('Sorry');
    }
}
