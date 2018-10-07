
<html>
    <head>
    <title><?php echo $title ;?></title>
    <link rel="stylesheet" href="style_sheet.css">
    </head>
<body>
    <div id="wholepage">
        <div id="banner">
            <h1 id="store_name">UVOART ONLINE</h1>

        </div>
        <nav id="navigation">
            <ul id="nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Art</a></li>
                <li><a href="#">Shop</a></li>
                <li><a href="#">About</a></li>

        </nav>
        <div id="content_area">
            <?php 
                echo $content; 
            ?>
        </div>
        <div id="sidebar1">
        
        </div>
        <!-- <div id="sidebar2">
        
        </div>
        <div id="sidebar3">
        
        </div>
        <div id="sidebar4">
        
        </div> -->


        <footer>
            <p>All rights reserved</p>
        </footer>
    </div>
</body>
</html>