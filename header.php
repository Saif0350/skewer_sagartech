<!--begin header -->
<header class="header">

    <!--begin nav -->
    <nav class="navbar navbar-default navbar-fixed-top">

        <!--begin container -->
        <div class="container">

            <!--begin navbar -->
            <div class="navbar-header">
                <button data-target="#navbar-collapse-02" data-toggle="collapse" class="navbar-toggle" type="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a style="margin-top: 0px;" href="index.php" class="navbar-brand brand scrool"><img width="200px" src="images/logo.png" alt="logo"></a>
            </div>

            <div id="navbar-collapse-02" class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="<?php if ($page == 'home') echo 'selected'; ?>"><a href="index.php">Home</a></li>
                    <li class="<?php if ($page == 'about') echo 'selected'; ?>"><a href="about.php">About Us</a></li>
                    <li class="<?php if ($page == 'gallery') echo 'selected'; ?>"><a href="gallery.php">Gallery</a></li>
                    <li class="<?php if ($page == 'menu') echo 'selected'; ?>"><a href="menu.php">Menu</a></li>
                    <li class="<?php if ($page == 'contact') echo 'selected'; ?>"><a href="contact.php">Contact</a></li>
                </ul>
            </div>
            <!--end navbar -->

        </div>
        <!--end container -->

    </nav>
    <!--end nav -->

</header>
<!--end header -->