<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function work(Request $request) {
        $data = $request-> input('textbox');
            if($data >= 0 and $data < 50) {
               $message = '頑張りましょう';
            }else if($data >=50 and $data < 80){
                $message = 'よくできました';
        }
        //return view('testform')->with('message1', $message); 
        return view('testform',compact('message'));
   }

    public function homework(Request $request) {
        $data2 = $request-> input('textbox');
        $num = 0;
        for($i = 1; $i <=$data2; $i++){
        $num= $num + $i;
     }
        return view('testform2',compact('num','data2'));
    } 

    public function assignment(Request $request) {
        $id = ["100","101","102","103","104","105"];
        $data3 = $request -> input('textbox');
        if(in_array($data3,$id)){
            $memo = '登録されています';
        }else{
            $memo = '登録されていません';
        }
         return view('testform3',compact('memo','data3'));
    }
}

