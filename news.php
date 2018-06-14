<?php require_once('includes/header.php');
require_once('includes/db_connect.php');?>

<section class="breadcrumb-area" style="background-image:url(images/background/2.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumbs text-center">
                    <h1>News</h1>
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
                        <li>News</li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-7 col-sm-7">
                    <p>We provide <span>100% organic</span> products</p>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="news single_news_page with_sidebar">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-8 col-xs-12">
                <div class="row">
                    <?php
                    $sql="SELECT * FROM `tbl_producer_news`";
                    $query=mysqli_query($conn,$sql);
                    while($row=mysqli_fetch_assoc($query)) {
                    ?>
                    <div class="col-md-12 col-sm-6 col-xs-12">
                        <div class="blogList_single_post clear_fix wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <div class="img_holder">
                                <img src="images\news\<?php echo $row['image']?>" alt="News" class="img-responsive">
                            </div> <!-- End of .img_holder -->
                            <div class="post">
                                    <div class="text">
                                        <h4><a href="blog-details.html"><?php echo $row['newsTitle']?></a></h4>
                                        <ul>
                                            <li><a href="blog-details.html" class="tran3s"><i class="fa fa-user"
                                                                                              aria-hidden="true"></i>
                                                    John abraham</a></li>
                                            <li><a href="blog-details.html" class="tran3s"><i class="fa fa-tag"
                                                                                              aria-hidden="true"></i>
                                                    Healthy</a></li>
                                            <li><a href="blog-details.html" class="tran3s"><i class="fa fa-clock-o"
                                                                                              aria-hidden="true"></i>
                                                    J21st Aug, 2015</a></li>
                                            <li><a href="blog-details.html" class="tran3s"><i class="fa fa-comments"
                                                                                              aria-hidden="true"></i> 26</a>
                                            </li>
                                            <li><a href="blog-details.html" class="tran3s"><i class="fa fa-heart"
                                                                                              aria-hidden="true"></i> 26</a>
                                            </li>
                                        </ul>
                                        <p><?php echo $row['content']?></p>

                                        <div class="link float_left"><a href="#" class="tran3s color1_bg">READ MORE</a>
                                        </div>
                                        <div class="share_box float_right">
                                            <ul class="share-content">
                                                <li>
                                                    <a href="http://www.facebook.com/sharer.php?u=https://www.facebook.com/onekalo"
                                                       class="tran3s popup-share" title="Facebook" target="_blank"><i
                                                            class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                <li>
                                                    <a href="http://twitter.com/share?url=https://twitter.com/Jubayer_alhasan&amp;text=@Jubayer_alhasan"
                                                       class="tran3s popup-share" title="Twitter" target="_blank"><i
                                                            class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                <li>
                                                    <a href="https://plus.google.com/share?url=https://plus.google.com/u/0/105261123196798323015"
                                                       class="tran3s popup-share" title="Goolge-Plus" target="_blank"><i
                                                            class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                            </ul>
                                            <button class="tran3s share" title="Share This Post"><i
                                                    class="fa fa-share-alt" aria-hidden="true"></i></button>
                                        </div>

                                    </div>

                            </div> <!-- End of .post -->
                        </div>

                    </div>
                        <?php
                    }
                    ?>

                </div>
                <ul class="page_pagination">
                    <li><a href="#" class="tran3s"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="active tran3s">1</a></li>
                    <li><a href="#" class="tran3s">2</a></li>
                    <li><a href="#" class="tran3s">3</a></li>
                    <li><a href="#" class="tran3s"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></li>
                </ul>
            </div>

            <!-- _______________________ SIDEBAR ____________________ -->
            <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 sidebar_styleTwo">
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

                    <div class="single-sidebar">
                        <div class="theme_inner_title">
                            <h4>Instagram Photos</h4>
                        </div>
                        <ul class="instagram-feed">
                            <li>
                                <div class="img-holder">
                                    <img src="images\gallery\i1.jpg" alt="Awesome Image">
                                    <div class="overlay">
                                        <div class="icon-holder">
                                            <a href="#"><span class="icon-link2"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="img-holder">
                                    <img src="images\gallery\i2.jpg" alt="Awesome Image">
                                    <div class="overlay">
                                        <div class="icon-holder">
                                            <a href="#"><span class="icon-link2"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="img-holder">
                                    <img src="images\gallery\i3.jpg" alt="Awesome Image">
                                    <div class="overlay">
                                        <div class="icon-holder">
                                            <a href="#"><span class="icon-link2"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="img-holder">
                                    <img src="images\gallery\i4.jpg" alt="Awesome Image">
                                    <div class="overlay">
                                        <div class="icon-holder">
                                            <a href="#"><span class="icon-link2"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="img-holder">
                                    <img src="images\gallery\i5.jpg" alt="Awesome Image">
                                    <div class="overlay">
                                        <div class="icon-holder">
                                            <a href="#"><span class="icon-link2"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="img-holder">
                                    <img src="images\gallery\i6.jpg" alt="Awesome Image">
                                    <div class="overlay">
                                        <div class="icon-holder">
                                            <a href="#"><span class="icon-link2"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>


                    <div class="sidebar_tags wow fadeInUp">
                        <div class="theme_inner_title">
                            <h4>product Tags</h4>
                        </div>

                        <ul>
                            <li><a href="#" class="tran3s">fruits</a></li>
                            <li><a href="#" class="tran3s">Cosmetics</a></li>
                            <li><a href="#" class="tran3s">Farmers</a></li>
                            <li><a href="#" class="tran3s">Healthy</a></li>
                            <li><a href="#" class="tran3s">Catering</a>  </li>
                            <li><a href="#" class="tran3s">Chemical</a></li>
                            <li><a href="#" class="tran3s">Post Format</a> </li>
                            <li><a href="#" class="tran3s">Industry</a></li>
                            <li><a href="#" class="tran3s">Research</a></li>
                        </ul>
                    </div> <!-- End of .sidebar_tags -->

                </div> <!-- End of .wrapper -->
            </div> <!-- End of .sidebar_styleTwo -->

        </div>
    </div>
</section>

<?php require_once('includes/footer.php');?>
