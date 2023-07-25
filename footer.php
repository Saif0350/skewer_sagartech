<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<button onclick="topFunction()" id="myBtn" title="Go to top"><i style='font-size:24px' class='fas'>&#xf102;</i></button>
<style>
    #myBtn {
        display: none;
        position: fixed;
        bottom: 20px;
        right: 30px;
        z-index: 99;
        font-size: 18px;
        border: none;
        outline: none;
        background-color: red;
        color: white;
        cursor: pointer;
        padding: 15px;
        border-radius: 4px;
        scroll-behavior: smooth;
    }

    #myBtn:hover {
        background-color: #555;
    }

    a.popup2:hover {
        color: #f30806;
    }
</style>

<script>
    // Get the button
    let mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>
<!--begin footer -->
<div class="footer">

    <!--begin container -->
    <div class="container">

        <!--begin row -->
        <div class="row footer-top">

            <!--begin col-md-3 -->
            <div class="col-md-4 padding-bottom-50">

                <h4>ABOUT SKEWER</h4>

                <p>Savor mouthwatering skewer delights from Skewer Kitchen, Mumbai's top destination for delectable grilled and barbecued dishes.</p>

                <a href="about.php" class="btn btn-lg btn-yellow-x-small scrool">OUR STORY</a>

            </div>
            <!--end col-md-3 -->
            <style>
                ul.footer-gallery li.popup-gallery a:hover {
                    color: red;
                }

                ul.footer_social li a:hover {
                    color: white !important;
                }
            </style>
            <!--begin col-md-3 -->
            <div class="col-md-4 padding-bottom-50">

                <h4>FEATURED PLATES</h4>

                <ul class="footer-gallery">

                    <li class="popup-gallery">
                        <a href="index.php">home
                        </a>
                    </li>

                    <li class="popup-gallery">
                        <a href="about.php">about Us
                        </a>
                    </li>

                    <li class="popup-gallery">
                        <a href="menu.php">menu
                        </a>
                    </li>

                    <li class="popup-gallery">
                        <a href="gallery.php">gallery
                        </a>
                    </li>

                    <li class="popup-gallery">
                        <a href="contact.php">contact us
                        </a>
                    </li>

                </ul>

            </div>
            <!--end col-md-3 -->

            <!--begin col-md-3 -->
            <div class="col-md-4 padding-bottom-50">

                <h4>CONTACT DETAILS</h4>


                <p class="contact_info"><i class="fa fa-map-marker"></i> Ground floor -217,Parekh Mahal, Lady Jamshedji Rd, Opposite Hari Niwas, Kasaravadi, Shivaji Park, Mumbai, Maharashtra 400016</p>

                <p class="contact_info"><i class="fa fa-phone"></i>+91 7678041567 / +91 7506110567</p>

                <p class="contact_info"><i class="fa fa-envelope-square"></i> <a href="mailto:goldenbayleaf@skewer.co.in">goldenbayleaf@skewer.co.in</a></p>

            </div>
            <!--end col-md-3 -->

        </div>
        <!--end row -->

        <!--begin row -->
        <div class="row">

            <!--begin footer-bottom -->
            <div class="footer-bottom">

                <!--begin col-md-5 -->
                <div class="col-md-6">

                    <!--begin copyright -->
                    <div class="copyright ">
                        <p>© 2023 Skewer All Rights Reserved.</p>

                    </div>
                    <!--end copyright -->

                </div>
                <!--end col-md-5 -->




                <!--begin col-md-5 -->
                <div class="col-md-6">

                    <!--begin footer_social -->
                    <ul class="footer_social">
                        <li>
                            Crafted by <a style="color: #ec544c;" href="https://sagartech.co.in/">Sagar Tech - Technical Solution</a>
                        </li>
                    </ul>
                    <!--end footer_social -->

                </div>
                <!--end col-md-5 -->

            </div>
            <!--end footer-bottom -->

        </div>
        <!--end row -->

    </div>
    <!--end container -->

</div>
<!--end footer -->