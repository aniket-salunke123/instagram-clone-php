<?php
    include "./includes/user_info.php";
    include "./includes/config.php";
    // session_destroy();
    if(!isset($_SESSION['logged_in_user']))
    {
        session_destroy();
        header("location: login");

    }       
    else
    {
        $USER = new user_class($_SESSION['logged_in_user']);
        global $USER;
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Instagram</title>
    <link rel="stylesheet" type="text/css" href="./css/index.css">
    <link rel="stylesheet" type="text/css" href="./css/font-awesome/css/font-awesome.min.css">
</head>

<body>
    <header>
        <div class="site-logo">
            <img src="./images/instalogo.png" onclick=location.href="./" class="profile-pic-image">
        </div>

        <div class="search">
            <input type="text" placeholder="Search">
        </div>

        <div class="header-icons">
            <i class="fa fa-home fa-2x" onclick=location.href="./"></i>
            <i class="fa fa-comment-o fa-2x" onclick=location.href="./dm.php"></i>
            <i class="fa fa-compass fa-2x"></i>
            <i class="fa fa-heart-o fa-2x"></i>
            <img src="<?php echo $USER->get_user_profile_pic();?>" class="profile-button profile-pic-image" onclick=location.href="profile">
        </div>
    </header>

    <main>
        <div class="posts-div">
            <!-- This is section for stories and uploaded posts -->

            <!-- Stories Section begins here -->

            <div class="stories-board">
                <div class="story-card">
                    <img src="./images/67805-web-language-wide-markup-html-scalable-vector.png">
                    <p class="story-username"><?php echo $USER->get_user_username();?></p>
                </div>

                <div class="story-card">
                    <img src="./images/67805-web-language-wide-markup-html-scalable-vector.png">
                    <p class="story-username"><?php echo $USER->get_user_username();?></p>
                </div>

                <div class="story-card">
                    <img src="./images/67805-web-language-wide-markup-html-scalable-vector.png">
                    <p class="story-username"><?php echo $USER->get_user_username();?></p>
                </div>

                <div class="story-card">
                    <img src="./images/67805-web-language-wide-markup-html-scalable-vector.png">
                    <p class="story-username"><?php echo $USER->get_user_username();?></p>
                </div>

                <div class="story-card">
                    <img src="./images/67805-web-language-wide-markup-html-scalable-vector.png">
                    <p class="story-username"><?php echo $USER->get_user_username();?></p>
                </div>

                <div class="story-card">
                    <img src="./images/67805-web-language-wide-markup-html-scalable-vector.png">
                    <p class="story-username"><?php echo $USER->get_user_username();?></p>
                </div>

                <div class="story-card">
                    <img src="./images/67805-web-language-wide-markup-html-scalable-vector.png">
                    <p class="story-username"><?php echo $USER->get_user_username();?></p>
                </div>

                <div class="story-card">
                    <img src="./images/67805-web-language-wide-markup-html-scalable-vector.png">
                    <p class="story-username"><?php echo $USER->get_user_username();?></p>
                </div>

                <div class="story-card">
                    <img src="./images/67805-web-language-wide-markup-html-scalable-vector.png">
                    <p class="story-username"><?php echo $USER->get_user_username();?></p>
                </div>
            </div>
            <!-- end of stories board -->

            <!-- fetching posts begins here -->

            <div class="post">
                <div class="post-header">
                   <div class="user-profile-pic">
                       <!-- <img src="./images/christopher-gower-m_HRfLhgABo-unsplash.jpg"> -->
                       <img src="<?php echo $USER->get_user_profile_pic();?>" class="profile-pic-image">
                   </div> 

                   <div class="post-info">
                       <p class="post-username bold-font"><?php echo $USER->get_user_username();?></p>
                       <p class="post-extras">extra info</p>
                   </div>

                   <div class="post-moreoptions">
                       <i class="fa fa-ellipsis-h"></i>
                   </div>
                </div>

                <div class="post-content">
                    <img src="./images/christopher-gower-m_HRfLhgABo-unsplash.jpg">
                </div>

                <div class="post-footer">
                    <div class="post-actions">
                        <i class="fa fa-heart-o fa-2x"></i>
                        <i class="fa fa-wechat fa-2x"></i>
                        <i class="fa fa-share fa-2x"></i>
                        <i class="fa fa-bookmark-o fa-2x"></i>
                    </div> 

                 <div class="post-likescount">
                    616 likes
                 </div>

                 <div class="post-caption">
                    <b class="bold-font"><?php echo $USER->get_user_username();?></b> My First Cool Post
                 </div>

                 <div class="post-viewComments">
                    view all 20 comments
                 </div>
                 <p>6 minutes ago</p>

                 <hr>
                 <div class="post-addComment">
                     <i class="fa fa-smile-o fa-2x"></i>
                     <input type="text" name="comment" placeholder="add a comment..">
                     <a href="#">Post</a>
                 </div>
                </div>
            </div>

            <div class="post">
                <div class="post-header">
                   <div class="user-profile-pic">
                       <img src="./images/christopher-gower-m_HRfLhgABo-unsplash.jpg">
                   </div> 

                   <div class="post-info">
                       <p class="post-username bold-font"><?php echo $USER->get_user_username();?></p>
                       <p class="post-extras">extra info</p>
                   </div>

                   <div class="post-moreoptions">
                       <i class="fa fa-ellipsis-h"></i>
                   </div>
                </div>

                <div class="post-content">
                    <video src="./videos/sample_vid1.mp4" controls=""></video>
                </div>

                <div class="post-footer">
                    <div class="post-actions">
                        <i class="fa fa-heart-o fa-2x"></i>
                        <i class="fa fa-wechat fa-2x"></i>
                        <i class="fa fa-share fa-2x"></i>
                        <i class="fa fa-bookmark-o fa-2x"></i>
                    </div> 

                    <div class="post-likescount">
                        616 likes
                    </div>

                    <div class="post-caption">
                        <b class="bold-font"><?php echo $USER->get_user_username();?></b> My First Cool Post
                    </div>

                    <div class="post-viewComments">
                        view all 20 comments
                    </div>
                    
                    <p>6 minutes ago</p>

                    <hr>

                    <div class="post-addComment">
                        <i class="fa fa-smile-o fa-2x"></i>
                        <input type="text" name="comment" placeholder="add a comment..">
                        <a href="#">Post</a>
                    </div>
                </div>
            </div>

            <div class="post">
                <div class="post-header">
                   <div class="user-profile-pic">
                       <img src="./images/christopher-gower-m_HRfLhgABo-unsplash.jpg">
                   </div> 

                   <div class="post-info">
                       <p class="post-username bold-font"><?php echo $USER->get_user_username();?></p>
                       <p class="post-extras">extra info</p>
                   </div>

                   <div class="post-moreoptions">
                       <i class="fa fa-ellipsis-h"></i>
                   </div>
                </div>

                <div class="post-content">
                    <img src="./images/oskar-yildiz-cOkpTiJMGzA-unsplash.jpg">
                </div>

                <div class="post-footer">
                    <div class="post-actions">
                    <i class="fa fa-heart-o fa-2x"></i>
                    <i class="fa fa-wechat fa-2x"></i>
                    <i class="fa fa-share fa-2x"></i>
                    <i class="fa fa-bookmark-o fa-2x"></i>
                    </div> 

                    <div class="post-likescount">
                        616 likes
                    </div>

                    <div class="post-caption">
                        <b class="bold-font"><?php echo $USER->get_user_username();?></b> My First Cool Post
                    </div>

                    <div class="post-viewComments">
                        view all 20 comments
                    </div>
                    
                    <p>6 minutes ago</p>

                    <hr>

                    <div class="post-addComment">
                        <i class="fa fa-smile-o fa-2x"></i>
                        <input type="text" name="comment" placeholder="add a comment..">
                        <a href="#">Post</a>
                    </div>
                </div>
            </div>

            <div class="post">
                <div class="post-header">
                   <div class="user-profile-pic">
                       <img src="./images/christopher-gower-m_HRfLhgABo-unsplash.jpg">
                   </div> 

                   <div class="post-info">
                       <p class="post-username bold-font"><?php echo $USER->get_user_username();?></p>
                       <p class="post-extras">extra info</p>
                   </div>

                   <div class="post-moreoptions">
                       <i class="fa fa-ellipsis-h"></i>
                   </div>
                </div>

                <div class="post-content">
                    <img src="./images/pexels-alex-andrews-816608.jpg">
                </div>

                <div class="post-footer">
                    <div class="post-actions">
                        <i class="fa fa-heart-o fa-2x"></i>
                        <i class="fa fa-wechat fa-2x"></i>
                        <i class="fa fa-share fa-2x"></i>
                        <i class="fa fa-bookmark-o fa-2x"></i>
                    </div> 

                    <div class="post-likescount">
                        616 likes
                    </div>

                    <div class="post-caption">
                        <b class="bold-font"><?php echo $USER->get_user_username();?></b> My First Cool Post
                    </div>

                    <div class="post-viewComments">
                        view all 20 comments
                    </div>

                    <p>5 minutes ago</p>

                    <hr>
                    <div class="post-addComment">
                        <i class="fa fa-smile-o fa-2x"></i>
                        <input type="text" name="comment" placeholder="add a comment..">
                        <a href="#">Post</a>
                    </div>
                </div>
            </div>

            <div class="post">
                <div class="post-header">
                   <div class="user-profile-pic">
                       <img src="./images/christopher-gower-m_HRfLhgABo-unsplash.jpg">
                   </div> 

                   <div class="post-info">
                       <p class="post-username bold-font"><?php echo $USER->get_user_username();?></p>
                       <p class="post-extras">extra info</p>
                   </div>

                   <div class="post-moreoptions">
                       <i class="fa fa-ellipsis-h"></i>
                   </div>
                </div>

                <div class="post-content">
                  <img src="./images/pexels-sanaan-mazhar-3052361.jpg">
                </div>

                <div class="post-footer">
                    <div class="post-actions">
                        <i class="fa fa-heart-o fa-2x"></i>
                        <i class="fa fa-wechat fa-2x"></i>
                        <i class="fa fa-share fa-2x"></i>
                        <i class="fa fa-bookmark-o fa-2x"></i>
                    </div> 

                    <div class="post-likescount">
                        616 likes
                    </div>

                    <div class="post-caption">
                        <b class="bold-font"><?php echo $USER->get_user_username();?></b> My First Cool Post
                    </div>

                    <div class="post-viewComments">
                        view all 20 comments
                    </div>
                    
                    <p>6 minutes ago</p>

                    <hr>
                    <div class="post-addComment">
                        <i class="fa fa-smile-o fa-2x"></i>
                        <input type="text" name="comment" placeholder="add a comment..">
                        <a href="#">Post</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- End of the post section  -->

        <!-- profile div / right sidebar begins here -->
        <div class="right-sidebar">
            <div class="profile">
                <div class="profile-pic">
                    <img src="<?php echo $USER->get_user_profile_pic();?>" onclick=location.href="profile" class="profile-pic-image">
                </div>

                <div class="user-info">
                    <p class="username bold-font"><b><?php echo $USER->get_user_username();?></b></p>
                    <p class="username"><?php echo $USER->get_user_full_name()?></p>
                </div>
            </div>

            <div class="suggestions-div">
                <b>Here are some suggesstions </b>
            </div>

            <footer>
                About . Help . Press . API . Jobs . Privacy . Terms
                . Locations . Top Accounts . Hashtags . Language
                <br>
                &copy; 2021 INSTAGRAM CLONE BY ANIKET SALUNKE
            </footer>
        </div>
    </main>
</body>
</html>