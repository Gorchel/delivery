<?php

use Illuminate\Database\Seeder;
use App\Categorie;
use App\Good;
use App\Order;
use App\File;

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

        foreach (Order::all() as $value) {
            $value->delete();
        }

        $order_array = [
            ['order_id' => 1, 'order_amount' => '1233' , 'order_client_name' => 'Oleg', 'order_client_phone' => '+79787676543','order_client_address' => 'Sevastopol','order_comment' => 'lorem ipsum','good' => [1,4,5]],
            ['order_id' => 2, 'order_amount' => '233' , 'order_client_name' => 'Vasia', 'order_client_phone' => '+79787676543','order_client_address' => 'Sevastopol','order_comment' => 'lorem ipsum','good' => [2,5,8]],
            ['order_id' => 3, 'order_amount' => '444' , 'order_client_name' => 'Serega', 'order_client_phone' => '+79787676543','order_client_address' => 'Sevastopol','order_comment' => 'lorem ipsum','good' => [4,11,9]],
            ['order_id' => 4, 'order_amount' => '551' , 'order_client_name' => 'Fedor', 'order_client_phone' => '+79787676543','order_client_address' => 'Sevastopol','order_comment' => 'lorem ipsum','good' => [2,6,10]],
            ['order_id' => 5, 'order_amount' => '2000' , 'order_client_name' => 'Vasil', 'order_client_phone' => '+79787676543','order_client_address' => 'Sevastopol','order_comment' => 'lorem ipsum','good' => [1,11]],
            ['order_id' => 6, 'order_amount' => '1500' , 'order_client_name' => 'Alex', 'order_client_phone' => '+79787676543','order_client_address' => 'Sevastopol','order_comment' => 'lorem ipsum','good' => [3,4,10]],
        ];

        foreach ($order_array as $value) {
            $order = new Order;
            $order->order_id = $value['order_id'];
            $order->order_amount = $value['order_amount'];
            $order->order_client_name = $value['order_client_name'];
            $order->order_client_phone = $value['order_client_phone'];
            $order->order_client_address = $value['order_client_address'];
            $order->order_comment = $value['order_comment'];
            $order->save();

            $order->goods()->attach($value['good']);
        }

        foreach (File::all() as $value) {
            $value->delete();
        }

        $file_array = [
            ['file_id' => 1, 'item_id' => 1, 'item_type' => 'good', 'file_url' => '/images/test/p1.jpg'],
            ['file_id' => 2, 'item_id' => 2, 'item_type' => 'good', 'file_url' => '/images/test/p2.jpg'],
            ['file_id' => 3, 'item_id' => 3, 'item_type' => 'good', 'file_url' => '/images/test/p3.jpg'],
            ['file_id' => 4, 'item_id' => 4, 'item_type' => 'good', 'file_url' => '/images/test/s1.jpg'],
            ['file_id' => 5, 'item_id' => 5, 'item_type' => 'good', 'file_url' => '/images/test/s2.jpg'],
            ['file_id' => 6, 'item_id' => 6, 'item_type' => 'good', 'file_url' => '/images/test/s3.jpg'],
            ['file_id' => 7, 'item_id' => 7, 'item_type' => 'good', 'file_url' => '/images/test/s4.jpg'],
            ['file_id' => 8, 'item_id' => 8, 'item_type' => 'good', 'file_url' => '/images/test/s5.jpg'],
            ['file_id' => 9, 'item_id' => 9, 'item_type' => 'good', 'file_url' => '/images/test/s6.jpg'],
            ['file_id' => 10, 'item_id' => 10, 'item_type' => 'good', 'file_url' => '/images/test/fanta.jpg'],
            ['file_id' => 11, 'item_id' => 11, 'item_type' => 'good', 'file_url' => '/images/test/coca-cola.jpg'],
        ];

        foreach ($file_array as $value) {
            $file = new File;
            $file->file_id = $value['file_id'];
            $file->item_id = $value['item_id'];
            $file->item_type = $value['item_type'];
            $file->file_url = $value['file_url'];
            $file->save();
        }
    }
}
