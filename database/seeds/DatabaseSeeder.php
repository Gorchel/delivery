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

        foreach (Good::all() as $value) {
            $value->delete();
        }

        $good_array = [
            ['good_id' => 1, 'good_name' => 'Капричеза' , 'good_vendor_code' => '323432', 'good_old_price' => '100','good_price' => '120','good_weight' => '120','good_description' => 'lorem ipsum','good_categorie_id' => 1],
            ['good_id' => 2, 'good_name' => 'Цезарь' , 'good_vendor_code' => '34232', 'good_old_price' => '120','good_price' => '160','good_weight' => '120','good_description' => 'lorem ipsum','good_categorie_id' => 1],
            ['good_id' => 3, 'good_name' => 'Четыре сыра' , 'good_vendor_code' => '4332', 'good_old_price' => '130','good_price' => '170','good_weight' => '320','good_description' => 'lorem ipsum','good_categorie_id' => 1],

            ['good_id' => 4, 'good_name' => 'Филадельфия' , 'good_vendor_code' => '3213', 'good_old_price' => '110','good_price' => '180','good_weight' => '220','good_description' => 'lorem ipsum','good_categorie_id' => 2],
            ['good_id' => 5, 'good_name' => 'Калифорния' , 'good_vendor_code' => '4322', 'good_old_price' => '120','good_price' => '110','good_weight' => '120','good_description' => 'lorem ipsum','good_categorie_id' => 2],
            ['good_id' => 6, 'good_name' => 'Дракон' , 'good_vendor_code' => '321323', 'good_old_price' => '130','good_price' => '130','good_weight' => '220','good_description' => 'lorem ipsum','good_categorie_id' => 2],

            ['good_id' => 7, 'good_name' => 'Теплый' , 'good_vendor_code' => '3546', 'good_old_price' => '130','good_price' => '150','good_weight' => '230','good_description' => 'lorem ipsum','good_categorie_id' => 3],
            ['good_id' => 8, 'good_name' => 'Холодные' , 'good_vendor_code' => '543', 'good_old_price' => '200','good_price' => '220','good_weight' => '120','good_description' => 'lorem ipsum','good_categorie_id' => 3],
            ['good_id' => 9, 'good_name' => 'Чизаро' , 'good_vendor_code' => '5645', 'good_old_price' => '110','good_price' => '120','good_weight' => '220','good_description' => 'lorem ipsum','good_categorie_id' => 3],

            ['good_id' => 10, 'good_name' => 'Фанта' , 'good_vendor_code' => '432', 'good_old_price' => '23','good_price' => '43','good_weight' => '320','good_description' => 'lorem ipsum','good_categorie_id' => 4],
            ['good_id' => 11, 'good_name' => 'Кола' , 'good_vendor_code' => '543453', 'good_old_price' => '40','good_price' => '60','good_weight' => '420','good_description' => 'lorem ipsum','good_categorie_id' => 4],
        ];

        foreach ($good_array as $value) {
            $good = new Good;
            $good->good_id = $value['good_id'];
            $good->good_name = $value['good_name'];
            $good->good_vendor_code = $value['good_vendor_code'];
            $good->good_old_price = $value['good_old_price'];
            $good->good_price = $value['good_price'];
            $good->good_weight = $value['good_weight'];
            $good->good_description = $value['good_description'];
            $good->good_categorie_id = $value['good_categorie_id'];
            $good->save();
        }
    }
}
