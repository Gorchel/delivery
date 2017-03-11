<?php

use Illuminate\Database\Seeder;
use App\Categorie;
use App\Good;
use App\Order;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        foreach (Categorie::all() as $value) {
            $value->delete();
        }

        $categorie_array = [
            ['categorie_id' => 1, 'categorie_name' => 'Пицца' , 'categorie_slug' => 'pizza', 'categorie_color' => 'red'],
            ['categorie_id' => 2, 'categorie_name' => 'Суши' , 'categorie_slug' => 'sushi', 'categorie_color' => 'blue'],
            ['categorie_id' => 3, 'categorie_name' => 'Роллы' , 'categorie_slug' => 'roll', 'categorie_color' => 'green'],
            ['categorie_id' => 4, 'categorie_name' => 'Вода' , 'categorie_slug' => 'water', 'categorie_color' => 'yellow'],
        ];

        foreach ($categorie_array as $value) {
            $categorie = new Categorie;
            $categorie->categorie_id = $value['categorie_id'];
            $categorie->categorie_name = $value['categorie_name'];
            $categorie->categorie_slug = $value['categorie_slug'];
            $categorie->categorie_color = $value['categorie_color'];
            $categorie->save();
        }
    }
}
