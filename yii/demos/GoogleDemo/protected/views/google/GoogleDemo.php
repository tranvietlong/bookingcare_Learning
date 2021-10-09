<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/x-icon" href="https://staffordonline.org/wp-content/uploads/2019/01/Google.jpg">
    <title>Google</title>
    <style type="text/css">
        body{
            margin: 0;
            padding: 0;
            background: #fff;
        }
        nav{
            float: right;
            font-family: Arial, sans-serif;
            font-size: 13px;
        }
        .navtext{
            color: #444;
            text-decoration: none;
            top: -12px;
            position: relative;
            margin: 5px
        }
        .navtext:hover{
            text-decoration: underline;
        }
        .avt{
            /* vertical-align: middle; */
            /* height: 35px; */
            width: 35px;
            border-radius: 50%;
           margin: 10px 20px 0 0;
        }
        .dotmenu{
            position: relative;
            margin: 10px;
            top: -3px;
            color: #555;
            cursor: pointer;
            height: 18px; width: 18px 
        }
        .main{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-100%);
         }
        .google{
            width: 380px;
            top: 80px;
        }
        .searchb{
            width: 500px;
            height: 45px;
            position: absolute;
            transform: translate(-20%,50%);
        }
            input[type="text"]{
            position: absolute;
            width: 100%;
            height: 100%;
            left: 0;
            border-radius: 50px;
            border: 1px solid #d5d4d4;
            outline: none;
            padding: 0 40px 0 45px;
            font-size: 16px;
            font-family: noto sans hk;
            box-shadow: 0 2px 10px -7px #000;
        }
        .searchicon{
            height:18px;
            width:18px;
            top: 13px;
            left: 18px;
            color: #777;
            font-size: 21px;
            z-index: 1;
            position: absolute;
        }
        .mic{
            position: absolute;
            width: 13px;
            right: -65px;
            top: 13px;
        }
        .sbutton{
            position: relative;
            top: 100px;
            text-align: center;
        }
        input[type="button"]{
            background: #ebe8e8;
            border: none;
            padding: 8px 20px;
            margin: 10px;
            color: #4e4d4d;
            border-radius: 5px;
            outline: none;
        }
        input[type="button"]:hover{
            box-shadow: 0 0 2px #000;
            color: #000;
            background: #ede8e8;
        }
        a:hover{
            text-decoration: underline;
        }
    </style>
    <body>
        <nav>
            <a href="https://mail.google.com/mail/" class="navtext">Gmail</a>
            <a href="https://www.google.com.vn/imghp?hl=vi&authuser=0&ogbl" class="navtext">Images</a>
            <image class="dotmenu" src="./icon/dots-menu.png"/>
            <image class='avt' src="https://scontent.fhan5-4.fna.fbcdn.net/v/t1.6435-9/213048985_3022033338076397_3362579364284545028_n.jpg?_nc_cat=104&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=nZxt3lFwUOsAX-zg8go&_nc_ht=scontent.fhan5-4.fna&oh=bbde4dfdcd2f69b171f96fdb436ba52b&oe=616E0222"></image></a>
        </nav>
        <div class="main">
            <div class="">
                <image src='https://www.google.com/logos/doodles/2021/mid-autumn-festival-2021-vietnam-6753651837109078-l.webp' alt="" class="google"/>
            </div>
            <form action="#" method="post" enctype="multipart/form">
            <div class="searchb">
                <img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSIP-zagesI6oIDc6Z_EtyZSeHi4C949tp1VA&usqp=CAU' class='searchicon'/>
                <input type="text" name='txtsearch' value="" placeholder="Search Google or type a URL" required>
                <img src="./icon/miclogo.png" alt="" class="mic">
            </div>
            <div class="sbutton">
                <input type="submit" name="search" value="Google Search">
                <input type="reset" name="" value="I'm Feeling Lucky">
            </form>
                <br>
                <p>Google offerd in: <a href=''> Tiếng việt </a> <a href=''> Français </a> <a href=''> 中文（繁體）</a></p>
            </div>
        </div>
    </body>
</html>