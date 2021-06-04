<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDummyAccounts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $faker = Faker\Factory::create();
        $gender = $faker->randomElement(['male', 'female']);
$faker->addProvider(new Faker\Provider\en_AU\Address($faker));
    for($i = 0; $i < 101; $i++) {
        User::create([
            'username' => $faker->userName,
            'full_name' => $faker->name,
            'email' => $faker->email,
            'password' => bcrypt('secret'),
            'gender'  => $gender,
            'country' => 'Australia',
            'city' => $faker->state,
        ]);
    }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dummy_accounts');
    }
}
