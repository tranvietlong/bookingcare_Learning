
    <div class="main">
        <header>
            <div class="top_header">
                <div id="logo"><img src="https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_92x30dp.png" alt="logo">
                </div>
                <form action="#" method="post" enctype="multipart/form">
                <div id="search_bar">
                    <input type="text" id="search" name="search" required />
                    <input type="submit" value="Search" style='height:5px ; width: 5px' />
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
            
            <a href="https://www.w3schools.com">Visit W3Schools.com!</a>
        </header>
   
    <div class='view'>
        </br>
        </br>
        </br>
        </br>
        <?php foreach($ds as $gg): ?>
            <p> <?php echo $gg -> Url ?> </p>
            <h2> <?php echo $gg -> Title ?> </h2>
            <p><?php echo $gg -> Description ?> </p>
            </br>
        <?php endforeach; ?>
    </div>
 </div>