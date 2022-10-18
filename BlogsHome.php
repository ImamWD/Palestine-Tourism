<?php 
session_start(); 
if(!isset($_SESSION['customer']))
{
    header("Location:./login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palestine Tourism</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.3.3/sweetalert2.css" rel="stylesheet">
    <link rel="stylesheet" href="style/all.min.css">
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="style/Blogs.css">

</head>
<body>
    <?php include "navbar.php"?>

<header class="d-flex">

    <div class=" Blogs container">
    <h1>Explore Blogs</h1>
        <div class="Explore-blogs container">
            <div class="row" style="justify-content: space-between;">
            <?php 
            $Blogsnum = 9;
            $i =0;
            for($i = 0 ; $i < $Blogsnum ;$i++)
            { ?>
            <div class="Blog" style="width:45% ">
                <div class="d-flex" style="align-items: center; justify-content: flex-start;">
                    <img src="./images/download1.png" class="profile-img"/>
                    <h5 class="user-name">User Name</h5>
                </div>
                <div class="container">
                <p class="post-time">10-2-2022 4:32 PM</p>
                <h3 class="blog-title">Blog Title </h3>
                <p class="blog-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, pariatur illum quas doloremque repudiandae impedit corrupti assumenda explicabo excepturi! Consequuntur reiciendis ad libero suscipit dolor, culpa officiis quod tenetur quidem sequi labore provident soluta corrupti fugit sapiente nobis molestias. Iste! </p>
                <img class="Post-image " src="./images/home-images/p-alpha4.png" />
                <div class="Like">
                    <div class="d-flex" style="align-items: center;">
                        <p class="num likes">324</p>
                        <i class="fa-regular fa-heart foot-icons" onclick="heart(this,<?php echo $i ?> , 'likes')"></i>
                    </div> 
                    <div class="d-flex" style="align-items: center;" >
                        <p class="num" >87</p>
                        <i class="fa-regular fa-comment foot-icons comm_icon<?php echo $i ?>"  onclick="opens(<?php echo $i ?>)"></i>
                    </div>
                    <div class="d-flex" style="align-items: center;" >
                        <p class="num">12</p>
                        <i class="fa-solid fa-share foot-icons"></i>
                    </div>
                    
                </div>
                <div class="commentes<?php echo $i ?>" style="display:none;">
                <?php 
                $commentsnum =3;
                for($k=0; $k < $commentsnum ;$k++)
                { ?>
                    <div class="comment">
                        <div class="d-flex">
                            <img src="./images/download1.png" class="profile-img1"/>
                            <h6 class="user-name1">User Name</h6>
                        </div>
                        <p class="post-time">10-2-2022 4:32 PM</p>
                        <p class="comment-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit aliquam quidem vero ea, ipsa quae. Consequatur atque ea quo ipsam natus, sed asperiores, quasi amet, esse nihil id? Soluta, quia?</p>
                    </div>
                    <?php } ?>
                    <form class="d-flex mb-3">
                            <input type="text" name="newcom" placeholder="Add Comment" class="form-control" />
                            <input type="submit" name="sub" class="btn btn-success" value="Comment"  style="background-color: var(--main-color) !important; border: 0;" />
                        </form>
                </div>
                </div>
            </div>
            <?php
            } ?>
            </div>
        </div>
    </div>

   
    <div class="My-Blogs">
        <div class="inner-MyBlog">
        <h1 class="Add-new">Add New Blog?<button onclick="AddNewBlog()" class="btn btn-warning" style="background-color: var(--main-color) !important; border: 0;"><i class="fa-solid fa-blog"></i></button></h1>
        <h3 class="Add-new">My Blogs</h1>
        <?php 
            $MyBlogsnum = 2;
            for($j = $i ; $j < $MyBlogsnum+$i ;$j++)
            { ?>
            <div class="Blog">
                <div class="d-flex" style="align-items: center; justify-content: flex-start;">
                    <img src="./images/download1.png" class="profile-img"/>
                    <h5 class="user-name">User Name</h5>
                </div>
                <div class="container">
                <p class="post-time">10-2-2022 4:32 PM</p>
                <h3 class="blog-title">Blog Title </h3>
                <p class="blog-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, pariatur illum quas doloremque repudiandae impedit corrupti assumenda explicabo excepturi! Consequuntur reiciendis ad libero suscipit dolor, culpa officiis quod tenetur quidem sequi labore provident soluta corrupti fugit sapiente nobis molestias. Iste! </p>
                <img class="Post-image " src="./images/home-images/p-alpha4.png" />
                <div class="Like">
                    <div class="d-flex" style="align-items: center;">
                        <p class="num love">324</p>
                        <i class="fa-regular fa-heart foot-icons"  onclick="heart(this,<?php echo $j-$i ?> , 'love')" ></i>
                    </div> 
                    <div class="d-flex" style="align-items: center;" >
                        <p class="num">87</p>
                        <i class="fa-regular fa-comment foot-icons comm_icon<?php echo $j ?>"  onclick="opens(<?php echo $j ?>)"></i>
                    </div>
                    <div class="d-flex" style="align-items: center;" >
                        <p class="num">12</p>
                        <i class="fa-solid fa-share foot-icons"></i>
                    </div>
                    
                </div>
                <div class="commentes<?php echo $j ?>" style="display:none;">
                <?php 
                $commentsnum =2;
                for($k=0; $k < $commentsnum ;$k++)
                { ?>

                    <div class="comment">
                        <div class="d-flex">
                            <img src="./images/download1.png" class="profile-img1"/>
                            <h6 class="user-name1">User Name</h6>
                        </div>
                        <p class="post-time">10-2-2022 4:32 PM</p>
                        <p class="comment-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit aliquam quidem vero ea, ipsa quae. Consequatur atque ea quo ipsam natus, sed asperiores, quasi amet, esse nihil id? Soluta, quia?</p>
                    </div>
                    <?php } ?>
                    <form class="d-flex mb-3">
                            <input type="text" name="newcom" placeholder="Add Comment" class="form-control" />
                            <input type="submit" name="sub" class="btn btn-success" value="Comment"style=" background-color: var(--main-color) !important; border: 0;"/>
                        </form>
                </div>
                </div>
            </div>
            <?php
            } ?>
            </div>
    </div>
    <button onclick="slideMyBlog(this)" class="My-btn btn btn-primary"><i class="fa-solid fa-angles-right"></i></button>

</header>
    <?php include "footer.php" ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.3.3/sweetalert2.min.js" integrity="sha512-F3F53+tMh/CBxMQ60GN5R4EiFW7PcuND+9IDC3Qpkwc7SfxgzHigRdUO3+2+mNal2ot3Wp6KR0zx8r8BbsW+Bg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
     <script src="javascript/jquery-3.6.0.min.js"></script>
     <script src="javascript/bootstrap.bundle.js"></script>
     <script src="javascript/Blogs.js"></script>
</body>
</html>