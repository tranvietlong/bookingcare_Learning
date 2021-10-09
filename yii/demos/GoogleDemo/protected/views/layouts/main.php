<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
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
        position: relative;
         

    }
    header {
        
        position: sticky;
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
        position: fixed;
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

    .view {
        display: block;
        justify-content: center;
        padding-left: 90px;
        margin: 0;
        position: relative;
        margin-left: -40px;
        z-index: -1;
    }

    table, th, td {
        border:1px solid black;
    }
</style>
<body>
    <?php echo $content; ?>
    <footer>
        <div class="footer">&copy; coppyright 2021</div>
    </footer>
</body>
</html>
