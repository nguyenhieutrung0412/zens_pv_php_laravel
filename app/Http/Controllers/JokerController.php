<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jokes;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Encryption\DecryptException;


class JokerController extends Controller
{
  
      public function index(Request $request){
        $notification='';
        //  $get_redding = Cookie::get('id_jokes');
        //đọc dữ liệu được lưu ở cookie
         $get_redding = $request->cookie('id_jokes');
         //chuyển dữ liệu từ chuỗi(cookie) thành mảng để truy vấn dữ liệu
         $arr_id =  explode(',',$get_redding);
        //nếu dữ liệu cookie chưa được khởi tạo thì sẽ lấy dữ liệu đầu tiên trang database
         if($get_redding == ''){
          $joke = Jokes::all()->first();
         }
         //nếu dữ liệu cookie tồn tại thì loại trừ id dựa trên mảng đã chuyển
         else{
            $joke = Jokes::whereNotIn('id',$arr_id)->first();
         }
        //nếu mảng rỗng thì ra xuất thông báo
         if($joke ==  '')
         {
            $notification = "That's all the jokes for today! Come back another day!";
         }
         else{
          //mã hóa mật khẩu 
          $joke->id_security = base64_encode($joke->id);
         }
        // var_dump($joke);die;
        return view('joker')->with('joke',$joke)->with('notification',$notification);
    }
    
    function like(Request $request){
      //giải mã lấy id
      $base= base64_decode($request->id);
     
      //lấy id bài được like
       $id_joke = $base;
       $id_cokkie = $request->cookie('id_jokes');
      $id_new = $id_cokkie.','.$id_joke;
      //lưu id đã được xem lên cookie có thời gian die cookie là 1 tháng
      Cookie::queue('id_jokes', $id_new , time() + (86400 * 30));// 86400 = 1 day;

     
     
     //update tăng số lượng like bài joke đó lên 1
      $joke = Jokes::find($id_joke);
     
      $joke->like++;
      $joke->update();
      return Redirect::back();
    }
    function dislike(Request $request){
      //giải mã lấy id
      $base= base64_decode($request->id);
      $id_joke = $base;

      $id_cokkie = $request->cookie('id_jokes');
     $id_new = $id_cokkie.','.$id_joke;
      //lưu id đã được xem lên cookie có thời gian die cookie là 1 tháng
      Cookie::queue('id_jokes', $id_new , time() + (86400 * 30));// 86400 = 1 day;
     // Cookie::queue('joke_dislike', $id_joke , time() + (86400 * 30));// 86400 = 1 day;
     //update tăng số lượng dislike bài joke đó lên 1
      $joke = Jokes::find($id_joke);
      $joke->dislike++;
      $joke->update();

      return Redirect::back();
    }
}
