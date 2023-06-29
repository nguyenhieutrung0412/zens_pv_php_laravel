<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
      header .logo {
        width: 40%;
        float: left;
        padding-left: 143px;
      }
      header .right{
        width:25%;
        float: right;
        padding-right: 50px;
        text-align: right;

      }
      header .right .right_name{
        float: left;
        padding: 18px 10px;
      }
      header .right .right_avt{
      
      float: left;
       
      }
      header .right .right_avt img{
        width: 70px;
     
        border-radius: 50%;
      }
      .banner{
        clear:both;
        width: 100%;
        text-align: center;
        padding: 50px 0;
        background-color: #08b808;
        color:#fff;
      }
      .banner h3{
        font-size: 29px;
      }
      .banner span{
        font-size: 15px;
      }
      .container{
        background-color: #ddd;
        width: 100%;
      }
      .container .container_content{
        padding: 3% 20%;
      }
      .container .container_content .content{
        font-size: 23px;
        line-height: 1.4;
        color:#454141;
        padding: 21px 0;
        
      }
      .container .container_content .select{
        text-align: center;
        padding:15px 0 0 0 ;
      }
      .container .container_content .select .btn{
        padding: 17px 72px;
        color: #fff;
        background-color: #2c7edb;
        margin: 0 15px;
        border-radius:3px
      }.container .container_content .select .btn.notfunny{
        background-color: #29b363;
      }
      footer{
        text-align: center;
        padding: 4% 24% 1% 24%
      }
      footer span{
        color: #7a7878;
        line-height: 1.2;
      }
      footer h6{
        font-size: 15px;
      }


    </style>
</head>

<body>
    <header>
        <div class="logo"><img src="{{asset('./images/logo.png')}}" alt="logo"/></div>
        <div class="right">
            <div class="right_name">
                <span>Handicrafted by</span><br>
                <span class="name">jim HLS</span> 
            </div>
            <div class="right_avt">
                <img src="{{asset('./images/avatar.jpg')}}" alt="avatar"/>
            </div>
          
        </div>
    </header>
    <div class="banner">
        <h3>A joke a day keeps the doctor away</h3>
        <span>If you joke wrong way, you teeth have to pay. (Serious)</span>
    </div>
    <div class="container">
       <div class="container_content">
        <div class="content">
                <span>
                  <!-- nếu dữ liệu tồn tại thì ta xuất dữ liệu ngoài ra xuất thông báo -->
                  @if($joke != '')
                   {{$joke->joke_content}}
                  @else
                  {{$notification}}
                  @endif
                </span>
                <hr>
            </div>
            <!-- Nếu dữ liệu tồn tại thì đã hiển thị button -->
            @if($joke != '')
            <div class="select">
                <a href="{{route('joker_like',$joke->id_security)}}" class="btn">This is funny!</a>
                <a href="{{route('joker_dislike',$joke->id_security)}}" class="btn notfunny">This is not funny.</a>
            </div>
            @endif
       </div>
    </div>
    <footer>
        <span>This website is created as part of Hlsolutions program. The materials contained on this website are provided for general information only and do not constitute any form of advice. HLS assumes no responsiblitity for the accuracy of any particular statement and accepts no liability for any loss or damage which may arise from reliance on the information contaihed on this site</span>
        <h6>Copyright 2021 HLS</h6>
    </footer>
</body>

</html>