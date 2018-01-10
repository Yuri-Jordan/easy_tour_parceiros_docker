<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TabelaUsuarioSeeder::class);
    }
}

class TabelaUsuarioSeeder extends Seeder
{
	public function run()
	{
    $user = new \App\User();
		$user->name = 'admin';
		$user->email = 'easytourbrasil.rn@gmail.com';
		$user->password = bcrypt('123456');
		$user->save();

    $user = new \App\User();
    $user->name = 'admin2';
    $user->email = 'admin2.admin@gmail.com';
    $user->password = bcrypt('1234');
    $user->save();

	}
}
