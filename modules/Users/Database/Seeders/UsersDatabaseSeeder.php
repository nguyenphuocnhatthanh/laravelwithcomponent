<?php namespace Modules\Users\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Users\Entities\User;
use Faker\Factory;

class UsersDatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{

		Model::unguard();
        $faker = Factory::create();
        for($i = 0; $i < 20; $i++) {
            $user = new User();
            $user->name = $faker->name;
            $user->email = $faker->email;
            $user->password = bcrypt('123456');
            $user->save();
        }
	}

}