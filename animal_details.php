<?php require_once('includes/header.php');
require_once('includes/db_connect.php');?>

<?php
$myid=$_GET['user_id'];
if ($myid !="") {
    $sql = "SELECT * FROM `tbl_animals` WHERE animal_id = '$myid'";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($query);
}
?>

<section class="breadcrumb-area" style="background-image:url(images/background/2.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumbs text-center">
                    <h1>Animal Details Page</h1>
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
                        <li><a href="#">Livestock Farming</a></li>
                        <li><a href=""><i class="fa fa-angle-right"></i></a></li>
                        <li>Animal Details</li>
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
                        <div class="">
                            <img src="images/animals/<?php echo $row['image'];?>" alt="News" class="img-responsive">
                        </div> <!-- End of .img_holder -->
                        <div class="post">

                            <div class="text">
                                <u><h4><a href="blog-details.html">About <?php echo $row['name'];?> </a></h4></u>

                                <p><?php echo $row['about']?>".</p>

                            </div>
                            <div class="qoute">
                                <u><h4><a href="blog-details.html">Favourable Climate </a></h4></u>
                                <h3>
                                    <?php echo $row['climate']?>"</h3>
                                <span class="author color1">- Bianca Jones -	</span>
                            </div>

                            <div class="text">
                                <u><h4 style=""><a href="blog-details.html">Duration Till Maturity </a></h4></u>
                                <p><?php echo $row['duration_to_grow'];?></p>
                            </div>
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
