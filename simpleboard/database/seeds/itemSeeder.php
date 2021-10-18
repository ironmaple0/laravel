<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\item;

class itemSeeder extends Seeder
{
    
    public function run()
    {
        $goods[] =  [
             ['itemid'=>'101','Item_name'=>'えんぴつ','price'=>'50'],
             ['itemid'=>'102','Item_name'=>'消しゴム','price'=>'100'],
             ['itemid'=>'103','Item_name'=>'定規','price'=>'150'],
             ['itemid'=>'104','Item_name'=>'シャープペンシル','100'],
             ['itemid'=>'105','Item_name'=>'筆箱','price'=>'500']
        ];
        item::insert($goods);
    }
}
