<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class LabelRecordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for($i=1;$i<100;$i++)
        {
            DB::table('label_record_598')->insert([
                'lableName' => $faker->word(),
                'adress' => $faker->address(),
                'city' => $faker->state(),
                'country' => $faker->country(),
                'establishedYear' => $faker->year(),
                'ceo' => $faker->name(),
                'contact' => $faker->companyEmail(),
                'website' => $faker->url(),
                'musicGenre' => $faker->word(),
                'famousArtists' => $faker->name(),
                'numberOfAlbums' => $faker->numberBetween($min = 1, $max = 200),
                'revenue' => $faker->numberBetween($min = 10000, $max = 1000000),
            ]);
        }

    }
}
