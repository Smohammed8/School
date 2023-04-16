<?php
namespace Database\Seeders;

use App\Models\Nationality;
use Illuminate\Database\Seeder;


class NationalitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nationals = array(
            'Tigray', 'Afar', 'Amhara', 'Oromia', 'Somali', 'Benishangul-Gumuz', 'South West Region', 'Gambella', 'Harari', 'Sidama', 'Addis Abeba','Dire Dawa',
        );

        foreach ($nationals as $n) {
            Nationality::create(['name' => $n]);
        }
    }
}
