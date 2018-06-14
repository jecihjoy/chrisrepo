<?php require_once('includes/header.php');
require_once('includes/db_connect.php');?>

<?php
$sql="SELECT *
                FROM
                    agriculture_database.tbl_animals
                    INNER JOIN agriculture_database.tbl_animal_category
                        ON (tbl_animals.cat_id = tbl_animal_category.cat_id)
                        WHERE tbl_animals.cat_id = 2";
$query=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($query);
?>

<section class="breadcrumb-area" style="background-image:url(images/background/2.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumbs text-center">
                    <h1>Cash Crops</h1>
                    <h4>Welcome to certified online organic products suppliersr</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcrumb-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-5 col-sm-5">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href=""><i class="fa fa-angle-right"></i></a></li>
                        <li><a href="#">Crop Farming</a></li>
                        <li><a href=""><i class="fa fa-angle-right"></i></a></li>
                        <li>Cash Crops</li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-7 col-sm-7">
                    <p>We provide <span>100% organic</span> products</p>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="news single_news_page with_sidebar news_single">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-8 col-xs-12">
                <div class="single_left_bar">
                    <div class="blogList_single_post clear_fix wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="img_holder">
                            <img src="images\blog\4.jpg" alt="News" class="img-responsive">
                            <div class="opacity tran3s">
                            </div> <!-- End of .opacity -->
                        </div> <!-- End of .img_holder -->
                        <div class="post">

                            <div class="text">
                                <h4><a href="blog-details.html">Interesting facts about organic food and organic store.</a></h4>
                                <ul>
                                    <li><a href="blog-details.html" class="tran3s"><i class="fa fa-user" aria-hidden="true"></i> John abraham</a></li>
                                    <li><a href="blog-details.html" class="tran3s"><i class="fa fa-tag" aria-hidden="true"></i> Healthy</a></li>
                                    <li><a href="blog-details.html" class="tran3s"><i class="fa fa-clock-o" aria-hidden="true"></i> J21st Aug, 2015</a></li>
                                    <li><a href="blog-details.html" class="tran3s"><i class="fa fa-comments" aria-hidden="true"></i> 26</a></li>
                                    <li><a href="blog-details.html" class="tran3s"><i class="fa fa-heart" aria-hidden="true"></i> 26</a></li>
                                </ul>
                                <p>How all this mistaken idea denouncing pleasure and praising will give you a completed  take a trivial sed example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with man sed who chooses to enjoyonsequences which of us every physical exercise.</p><p>
                                    Praising will give you a completed  take a trivial sed example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with man sed who chooses to enjoy.</p>

                            </div>
                            <div class="qoute">
                                <h3>
                                    Men who are so beguiled and demoralized by the charms of pleasure of <br> the moment, so blinded by desire, they cannot foresee.</h3>
                                <span class="author color1">- Bianca Jones -	</span>
                            </div>
                            <div class="text"><p>
                                    All this mistaken idea of denouncing pleasure and praising pain was born and I will give you seds our complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. </p></div>
                            <div class="share_option clear_fix">
                                <h4 class="float_left">If you like this post, please share to others.</h4>
                                <ul class="social_icon float_left">
                                    <li><a href="#" class="tran3s" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#" class="tran3s" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#" class="tran3s" title="Linkedin"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                    <li><a href="#" class="tran3s" title="Youtube"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>

                        </div> <!-- End of .post -->
                    </div>

                </div>
            </div>

            <!-- _______________________ SIDEBAR ____________________ -->
            <div class="col-md-3 col-sm-4 col-xs-12 sidebar_styleTwo">
                <div class="wrapper">
                    <div class="sidebar_search">
                        <form action="#">
                            <input type="text" placeholder="Search heare...">
                            <button class="tran3s color1_bg"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </form>
                    </div> <!-- End of .sidebar_styleOne -->

                    <div class="sidebar_categories">
                        <div class="theme_inner_title">
                            <h4>Categories</h4>
                        </div>
                        <ul>
                            <li><a href="" class="tran3s">Vegetables   (15)</a></li>
                            <li><a href="" class="tran3s">Fruits & Drinks   (06)</a></li>
                            <li><a href="" class="tran3s">Fresh Meat   (12)</a></li>
                            <li><a href="" class="tran3s">Beauty Care   (14)</a></li>
                        </ul>
                    </div> <!-- End of .sidebar_categories -->

                    <div class="popular_news">
                        <div class="theme_inner_title">
                            <h4>popular news</h4>
                        </div>

                        <div class="recent-posts">
                            <div class="post">
                                <div class="post-thumb"><a href="#"><img src="images\blog\p1.jpg" alt=""></a></div>
                                <h4><a href="#">How to make organic foods in store?</a></h4>
                                <div class="post-info"><i class="fa fa-clock-o"></i>17st Aug, 2015</div>
                            </div>
                            <div class="post">
                                <div class="post-thumb"><a href="#"><img src="images\blog\p2.jpg" alt=""></a></div>
                                <h4><a href="#">How to make organic foods in store?</a></h4>
                                <div class="post-info"><i class="fa fa-clock-o"></i>21st Aug, 2015</div>
                            </div>
                            <div class="post">
                                <div class="post-thumb"><a href="#"><img src="images\blog\p3.jpg" alt=""></a></div>
                                <h4><a href="#">How to make organic foods in store?</a></h4>
                                <div class="post-info"><i class="fa fa-clock-o"></i>24st Aug, 2015</div>
                            </div>
                        </div>
                    </div>

                    <div class="sidebar_categories">
                        <div class="theme_inner_title">
                            <h4>archive</h4>
                        </div>
                        <ul>
                            <li><a href="" class="tran3s">February 2016</a></li>
                            <li><a href="" class="tran3s">January 2016</a></li>
                            <li><a href="" class="tran3s">October 2015</a></li>
                            <li><a href="" class="tran3s">August 2015 </a></li>
                        </ul>
                    </div> <!-- End of .sidebar_categories -->

                </div> <!-- End of .wrapper -->
            </div> <!-- End of .sidebar_styleTwo -->

        </div>
    </div>
</section>

<?php require_once('includes/footer.php');?>
