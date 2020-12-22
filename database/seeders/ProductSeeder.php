<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'LG mobile',
                'price'=>'200$',
                'description'=>'a smartphone with 4gb ram and much more features',
                'category'=>'mobile',
                'gallery'=>'https://www.tunisianet.com.tn/44733-large/telephone-portable-lg-g3-d855-16-go-noir.jpg'
            ],
            [
                'name'=>'OPPO mobile',
                'price'=>'300$',
                'description'=>'a smartphone with 8gb ram and much more features',
                'category'=>'mobile',
                'gallery'=>'https://images-na.ssl-images-amazon.com/images/I/61bOfOcBvML._AC_SX425_.jpg'
            ],
            [
                'name'=>'TV condor',
                'price'=>'400$',
                'description'=>'a smarT tv  much more features',
                'category'=>'TV',
                'gallery'=>'https://www.condor.dz/imgs/prds/2258_8f56f064c76117f0d70b9b0a1767c403.jpg'
        
            ],
            [
                'name'=>'TV condor',
                'price'=>'400$',
                'description'=>'a smarT tv  much more features',
                'category'=>'TV',
                'gallery'=>'https://www.condor.dz/imgs/prds/2258_8f56f064c76117f0d70b9b0a1767c403.jpg'
        
            ]
        ]
            
        );
    }
}
