<?php
    
    $conn = new mysqli("localhost", "demo", "long123", "medkee") or die ("Couldn't connect to DB");
    $output = "";
    if(isset($_POST['search'])){
        $search = $_POST['txtsearch'];
        // $choose = "SELECT * FROM benhvien WHERE ten LIKE '%$search%'";
        // echo $search; die;
        if ($search != ''){
            // $query = mysql_query($choose) or die("Couldn't seach!");
            // echo $query;die;
            // $results = mysql_num_rows($query);
            $query = "SELECT * FROM benhvien WHERE ten LIKE '%$search%'";
 
            // Kết nối sql
            // mysql_connect("localhost", "root", "vertrigo", "basic");

            // Thực thi câu truy vấn
            // $sql = mysql_query($query);

            // Đếm số đong trả về trong sql.
            $sql = mysqli_query($conn, $query) or die("Couldn't seach!");
            // $num = mysql_num_rows($sql);
            $num = mysqli_num_rows($sql);
            // echo $num;die;

            if ($num == 0){
                $output = "<span style='color: red;'> No results found with keyword ' $search '</span>";
            } else{
                $output = "<span style='color: 555;'>All results with keyword  ' $search ' :$num </span>" . "<br><hr style='width: 200px; float: left;'><br>";
                while ($row = $sql->fetch_assoc()) {
                // while ($row = mysql_fetch_array($sql)){
                    $id = $row['id'];
                    $ten = $row['ten'];
                    $diachi = $row['diachi'];
                    $gioithieu = $row['gioithieu'];

                    $output = "<div>$id<br>$ten<br>$diachi<br>$gioithieu</div>";
                }
            }
        }else{
            $output = "<span style='color: red;'>Please, enter your keyword!</span>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Google Search Page</title>
</head>
<style>
    * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    }
    body {
        font-family: Georgia, 'Times New Roman', Times, serif;
        line-height: 1.4;
    }
    .main {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    header {
        position: fixed;
        top: 0;
        height: 120px;
        width: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: space-between;
        overflow: hidden;
        padding: 5px 20px;
        border-bottom: 0.5px solid #ccc;
        background-color: white;
    }
    .top_header {
        display: flex;
        justify-content: flex-start;
        align-items: center;
    }
    .top_header #right_icons {
        margin-left: auto;
    }
    .top_header img {
        width: 110px;
        margin-right: 50px;
    }

    #search_bar {
        position: relative;
    }
    #search_bar input {
        width: 750px;
        height: 40px;
        border-radius: 50px;
        border: 1px solid gray;
    }
    #search_bar .fa-times {
        position: absolute;
        right: 120px;
        top: 12px;
        
    }
    #search_bar span {
        position: absolute;
        right: 100px;
        top: 8px;
    }
    #search_bar .fa-microphone {
        position: absolute;
        right: 70px;
        top: 12px;
    }
    #search_bar .fa-search {
        position: absolute;
        right: 30px;
        top: 12px;
    }
    #right_icons .fa-th {
        margin-right: 40px;
    }
    #right_icons a {
        text-decoration: none;
        color: white;
        background: #4285F4;
        padding: 5px 10px;
    }


    /* Bottom Header */

    .bottom_header {
        margin-left: 170px;
        margin-top: 20px;
        width: 88%;
        display: flex;
        justify-content: flex-start;
        align-items: center;
        
    }
    .bottom_header > div {
        margin-right: 20px;
    }
    .bottom_header #safesearch {
        margin-left: auto;
        text-decoration: none;
        color: black;
    }
    .bottom_header #all, .bottom_header #news, .bottom_header #videos, .bottom_header #maps, .bottom_header #images, .bottom_header #more  {
        display: flex;
        justify-content: flex-start;
        align-items: center;
    }

    .bottom_header #all p, .bottom_header #news p, .bottom_header #videos p, .bottom_header #maps p, .bottom_header #images p, .bottom_header #more p {
        margin-left: 5px;
    }
    .bottom_header .settings {
        margin-left: 130px;
        text-decoration: none;
        color: black;
    }
    .bottom_header .middle {
        margin-left: 20px;
        text-decoration: none;
        color: black;
    }


    /* Body */

    .body {
        width: 100%;
        margin-top: 130px;
        padding-left: 190px;
        padding-right: 450px;
    }
</style>
<body>
    <div class="main">
        <header>
            <div class="top_header">
                <div id="logo"><img src="https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_92x30dp.png" alt="logo">
                </div>
                <form action="#" method="post" enctype="multipart/form">
                <div id="search_bar">
                    <input type="text" id="search" name="txtsearch" required />
                    <i class="fas fa-times"></i>
                    <span>|</span>
                    <i class="fas fa-microphone"></i>
                    <i class="fas fa-search"></i>
                </div>
                </form>
                <div id="right_icons">
                    <i class="fas fa-th"></i>
                    <a href="#">Sign in</a>
                </div>
            </div>
            <div class="bottom_header">
                <div id="all">
                    <i class="fas fa-search"></i>
                    <p>All</p>
                </div>
                <div id="news">
                    <i class="far fa-newspaper"></i>
                    <p>News</p>
                </div>
                <div id="videos">
                    <i class="far fa-stop-circle"></i>
                    <p>Videos</p>
                </div>
                <div id="maps">
                    <i class="fas fa-map-marker-alt"></i>
                    <p>Maps</p>
                </div>
                <div id="images">
                    <i class="fas fa-image"></i>
                    <p>Images</p>
                </div>
                <div id="more">
                    <i class="fas fa-ellipsis-v"></i>
                    <p>More</p>
                </div>
                <a href="#" class="settings">Settings</a>
                <a href="#" class="middle">Tools</a>
                <a href="#" id="safesearch">SafeSearch on</a>
            </div>
            <?php
                echo $output;
            ?>
</body>
</html>