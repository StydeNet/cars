<?php

use Illuminate\Foundation\Testing\DatabaseTransactions;

class AutocompleteTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $duilio = seed('User', [
            'name'  => 'Duilio',
            'email' => 'admin@styde.net'
        ]);

        $jeffer = seed('User', [
            'name'  => 'Jeffer',
            'email' => 'jeffer@styde.net'
        ]);

        $jesus = seed('User', [
            'name'  => 'Jesus',
            'email' => 'jesus@styde.net'
        ]);

        seed('User', ['name' => 'Clemir', 'email' => 'clemir@styde.net']);
        seed('User', ['name' => 'Dimitri', 'email' => 'dimitri@styde.net']);
        seed('User', ['name' => 'Rafael', 'email' => 'rafael@styde.net']);

        $this->get('autocomplete/users?term=duilio')
            ->seeStatusCode(200)
            ->seeJsonEquals([
               [
                   'id'    => $duilio->id,
                   'name'  => 'Duilio',
                   'email' => 'admin@styde.net'
               ]
            ]);

        $this->get('autocomplete/users?term=je')
            ->seeStatusCode(200)
            ->seeJsonEquals([
                [
                    'id'    => $jeffer->id,
                    'name'  => 'Jeffer',
                    'email' => 'jeffer@styde.net'
                ],
                [
                    'id'    => $jesus->id,
                    'name'  => 'Jesus',
                    'email' => 'jesus@styde.net'
                ],
            ]);
    }
}
