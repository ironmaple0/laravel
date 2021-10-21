<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\item;

class itemSeeder extends Seeder
{
    
    public function run()
    {
        $goods =  [
             ['itemid'=>101,'item_name'=>'えんぴつ','price'=>50],
             ['itemid'=>102,'item_name'=>'消しゴム','price'=>100],
             ['itemid'=>103,'item_name'=>'定規','price'=>150],
             ['itemid'=>104,'item_name'=>'シャープペンシル',100],
             ['itemid'=>105,'item_name'=>'筆箱','price'=>500]
        ];
        item::insert($goods);
    }
}
