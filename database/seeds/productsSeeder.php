<?php

use Illuminate\Database\Seeder;

class productsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(array(
            array('title'=>'Canon 5D Mk IV','price'=>'$2799','image'=>'https://www.bhphotovideo.com/images/images1500x1500/canon_eos_5d_mark_iv_1274707.jpg','description'=>'This is a Canon Camera, it is pretty great.'),
        	array('title'=>'Nikon','price'=>'$1499','image'=>'https://www.bhphotovideo.com/images/images2500x2500/nikon_26510b_coolpix_b700_digital_camera_1365794.jpg','description'=>'This is a Nikon Camera, it is okay.'),
        	array('title'=>'Sony','price'=>'$3499','image'=>'https://img.bbystatic.com/BestBuy_US/store/ee/2017/cam/pr/SOL-17086-sony-camera/SOL-17086_sony-camera-mirrorless-5925900_0730.jpg','description'=>'This is a Sony Camera, it is awesome.'),
        ));
    }
}
