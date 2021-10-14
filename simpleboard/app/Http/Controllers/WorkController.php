<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function work(Request $request) {
        $data = $request-> input('textbox');
          if(is_numeric($data)){
             if($data >= 0 and $data < 50) {
               $message = '頑張りましょう';
            }else if($data >=50 and $data < 80){
                $message = 'よくできました';
            }else if($data >=80 and $data <=100) {
                $message = '大変よくできました';
            }
         }else{
               $message = '数字を入力してください';
         }
        //return view('testform')->with('message1', $message); 
        return view('testform',compact('message'));
   }

    public function homework(Request $request) {
        $data2 = $request-> input('textbox');
        $num = 0;
        if(is_numeric($data2)) {
         for($i = 1; $i <=$data2; $i++){
          $num= $num + $i;
        }
       }else {
        $num = '数字を入力してください';
       }
        return view('testform2',compact('num','data2'));
    } 

    public function assignment(Request $request) {
        $id = ["100","101","102","103","104","105"];
        $data3 = $request -> input('textbox');
        if(is_numeric($data3)) {
          if(in_array($data3,$id)){
            $memo = '登録されています';
         }else{
            $memo = '登録されていません';
         }
       }else{
            $memo = '数字を入力してください';
        }
         return view('testform3',compact('memo','data3'));
    }
}

