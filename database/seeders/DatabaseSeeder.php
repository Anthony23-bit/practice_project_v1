<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('products')->insert(
            [
            'id'              => '1',
            'product_title'   => 'Lorem Ipsum',
            'product_desc'    => 'Ulamco laboris nisi ut aliquip ex ea commodo consequat. Et consectetur ducimus vero placeat'
            ]
            );
        DB::table('products')->insert(
            [
            'id'              => '2',
            'product_title'   => 'Repellat Nihil',
            'product_desc'    => 'Dolorem est fugiat occaecati voluptate velit esse. Dicta veritatis dolor quod et vel dire leno para dest'
            ]
            );
    }
}
