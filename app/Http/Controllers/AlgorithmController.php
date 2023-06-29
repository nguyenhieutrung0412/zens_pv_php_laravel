<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AlgorithmController extends Controller
{
    //
    //xử lý xuất ra màn hình
    public function index(Request $request){
        $value = 0;
        if($request->value != '')
        {
          
            $arr = $this->max_min_sum($request->value);
            //chuyển đổi mảng thành chuôi
            $value = implode(' ',$arr);
        }
      
        

        return view('algorithm')->with('value',$value);
    }
   
    //end

    //hàm xử lý tính tổng lớn nhất và tổng nhỏ nhất
     function max_min_sum($arr_string){
        //xử lý chuỗi chuyển chuỗi thành mảng
       
        $arr = explode(' ',$arr_string);
       
        //khai báo tổng lớn nhất và nhỏ nhất
        $max_sum = 0;
     
        //chạy vòng for đầu lấy vị trí để tính tổng mảng trừ vị trí đang đứng hiện tại
        for($i = 0;$i < count($arr); $i++){
            // đặt cờ là giá trị tại vị đang đứng hiện tại
            $flag = $arr[$i];
            //mặc định cho mỗi lần lặp là tổng bằng 0
            $sum = 0;
            //tính tổng toàn bộ mảng
            for($j = 0; $j <count($arr);$j++)
            {
                $sum += $arr[$j];
            }
            //lấy tổng đã tính toàn bộ mảng và trừ đi giá trị tại mảng hiện tại
            $sum = $sum - $flag;
            //xét điều kiện nếu tổng là lớn nhất thì gắn vào max_sum
            if($sum > $max_sum){
                $max_sum = $sum;
            }
            //ngoài ra xét điều kiện nếu tổng là nhỏ nhất thì gắn vào min_sum
            else{
                //nếu tổng nhỏ nhất chưa được khởi tạo tức ra tổng hiện tại sẽ là nhỏ nhất
                if(!isset($min_sum))
                {
                    $min_sum = $sum;
                }
                //nếu tông nhỏ nhất đã được khởi tạo thì so sánh với tổng nhỏ nhất trước
                else if($sum < $min_sum)
                {
                    $min_sum = $sum;
                }
            }
        }
        //trả về giá trị là maảng gồm vị trí đầu là nhỏ nhất và vị trí sau là lớn nhất
        return array($min_sum,$max_sum);
    }
}
