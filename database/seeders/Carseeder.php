<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CarStorage;

class Carseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 7; $i++) {
            CarStorage::create([
                "merk" => 'Audi',
                "handelsbenaming" => 'A5 Quattro 2.0 tfsi',
                "apk_verloop_datum" => '2023-06-17 10:09:42',
                "vermogen_in_pk" => 315,
                "vermogen_in_kw" => 231,
                "auto_rook" => true,
                "kenteken" => 'XX-271-G',
                "beschrijving" => 'Audi A5 Quattro met een 2.0 motor en 6,5 seconde tot de 100',
                "prijs" => 19995,
                "img_link" => 'https://www.russcherautos.nl/wp-content/uploads/2020/11/49-2-49-scaled.jpg',
                "bouwjaar" => 2018,
                "kilometerstand" => 88532,
                "owner_id" => 1
            ]);
        }
    }
}
