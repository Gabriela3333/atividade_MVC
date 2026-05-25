<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram</title>
    <link rel="stylesheet" href="./sass/vender/bootstrap.css">
    <link rel="stylesheet" href="./sass/vender/bootstrap.min.css">
    <link rel="stylesheet" href="./owlcarousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="./owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.2/emojionearea.min.css">
    <link rel="stylesheet" href="./sass/main.css">
</head>
<body>

    <div class="post_page">
        <!--***** nav menu start ****** -->
        <div class="nav_menu">
            <div class="fix_top">
                <!-- nav for big->medium screen -->
                <div class="nav">
                    <div class="logo">
                        <a href="./home">
                            <img class="d-block d-lg-none small-logo" src="./images/instagram.png" alt="logo">
                            <img class="d-none d-lg-block" src="./images/logo_menu.png" alt="logo">
                        </a>
                    </div>
                    <div class="menu">
                        <ul>
                            <li>
                                <a class="active" href="home">
                                    <img src="./images/accueil.png">
                                    <span class="d-none d-lg-block ">Home</span>
                                </a>
                            </li>
                            <li id="search_icon">
                                <a href="#">
                                    <img src="./images/search.png">
                                    <span class="d-none d-lg-block search">Search </span>
                                </a>
                            </li>
                            <li>
                                <a href="./explore">
                                    <img src="./images/compass.png">
                                    <span class="d-none d-lg-block ">Explore</span>
                                </a>
                            </li>
                            <li>
                                <a href="./reels">
                                    <img src="./images/video.png">
                                    <span class="d-none d-lg-block ">Reels</span>
                                </a>
                            </li>
                            <li>
                                <a href="./messages">
                                    <img src="./images/send.png">
                                    <span class="d-none d-lg-block ">Messages</span>
                                </a>
                            </li>
                            <li class="notification_icon">
                                <a href="#">
                                    <img src="./images/love.png">
                                    <span class="d-none d-lg-block ">Notifications</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#create_modal">
                                    <img src="./images/tab.png">
                                    <span class="d-none d-lg-block ">Create</span>
                                </a>

                            </li>
                            <li>
                                <a href="./profile">
                                    <img class="circle story" src="/images/Diva.png">
                                    <span class="d-none d-lg-block ">Profile</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="more">
                        <div class="btn-group dropup">
                            <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <img src="./images/menu.png">
                                <span class="d-none d-lg-block ">More</span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">
                                        <span>Settings</span>
                                        <img src="./images/reglage.png">
                                    </a></li>
                                <li><a class="dropdown-item" href="#">
                                        <span>Your activity</span>
                                        <img src="./images/history.png">
                                    </a></li>
                                <li><a class="dropdown-item" href="#">
                                        <span>Saved</span>
                                        <img src="./images/save-instagram.png">
                                    </a></li>
                                <li><a class="dropdown-item" href="#">
                                        <span>Switch apperance</span>
                                        <img src="./images/moon.png">
                                    </a></li>
                                <li><a class="dropdown-item" href="#">
                                        <span>Report a problem</span>
                                        <img src="./images/problem.png">
                                    </a></li>
                                <li><a class="dropdown-item bold_border" href="#">
                                        <span>Switch accounts</span>
                                    </a></li>
                                <li><a class="dropdown-item" href="./login">
                                        <span>Log out</span>
                                    </a></li>
                            </ul>
                        </div>
                        <!--  -->

                    </div>
                </div>
                <!-- nav for small screen  -->
                <div class="nav_sm">
                    <div class="content">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <img class="logo" src="./images/logo_menu.png">
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">
                                        <span>Following</span>
                                        <img src="./images/add-friend.png">
                                    </a></li>
                                <li><a class="dropdown-item" href="#">
                                        <span>Favorites</span>
                                        <img src="./images/star.png">
                                    </a></li>
                            </ul>
                        </div>
                        <div class="left">
                            <div class="search_bar">
                                <div class="input-group">
                                    <div class="form-outline">
                                        <div>
                                            <img src="./images/search.png" alt="search">
                                        </div>
                                        <input type="search" id="form1" class="form-control" placeholder="Search" />
                                    </div>
                                </div>
                            </div>
                            <div class="notifications notification_icon">
                                <a href="./notification">
                                     <img src="./images/love.png">
                                </a>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- nav for ex-small screen  -->
                <div class="nav_xm">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <img class="logo" src="./images/logo_menu.png">
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">
                                    <span>Following</span>
                                    <img src="./images/add-friend.png">
                                </a></li>
                            <li><a class="dropdown-item" href="#">
                                    <span>Favorites</span>
                                    <img src="./images/star.png">
                                </a></li>
                        </ul>
                    </div>
                    <div class="left">
                        
                        <img src="./images/send.png">
                        <a href="./notification">
                            <img class="notification_icon" src="./images/love.png">
                        </a>
                        
                    </div>
                </div>
            </div>
            <!-- menu in the botton for smal screen  -->
            <div class="nav_bottom">
                <a href="./home"><img src="./images/accueil.png"></a>
                <a href="./explore"><img src="./images/compass.png"></a>
                <a href="./reels"><img src="./images/video.png"></a>
                <a  href="#" data-bs-toggle="modal" data-bs-target="#create_modal"><img src="./images/tab.png"></a>
                <a href="profile"><img class="circle story" src="https://fastcompanybrasil.com/wp-content/uploads/2025/05/quer-ser-mais-feliz-confira-5habitos-para-adotar-ainda-hoje.jpg"></a>
            </div>
        </div>
        <!-- search  -->
        <div id="search" class="search_section">
            <h2>Search</h2>
            <form method="post">
                <input type="text" placeholder="Search">
            </form>
            <div class="find">
                <div class="desc">
                    <h4>Recent</h4>
                    <p><a href="#">Clear all</a></p>
                </div>
                <div class="account">
                    <div class="cart">
                        <div>
                            <div class="img">
                                <img src="https://blog.unyleya.edu.br/wp-content/uploads/2017/12/saiba-como-a-educacao-ajuda-voce-a-ser-uma-pessoa-melhor.jpeg" alt="">
                            </div>
                            <div class="info">
                                <p class="name">Zineb_essoussi</p>
                                <p class="second_name">Zim Ess</p>
                            </div>
                        </div>
                        <div class="clear">
                            <a href="#">X</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- notification -->
        <div id="notification" class="notification_section">
            <h2>Notifications</h2>
            <div class="notifications">
                <div class="notif follow_notif">
                    <div class="cart">
                        <div>
                            <div class="img">
                                <img src="https://img.magnific.com/fotos-gratis/retrato-de-homem-branco-isolado_53876-40306.jpg?semt=ais_hybrid&w=740&q=80" alt="">
                            </div>
                            <div class="info">
                                <p class="name">
                                    Zineb_essoussi
                                    <span class="desc">started following you.</span>
                                    <span class="time">2h</span>
                                </p>

                            </div>
                        </div>
                        <div class="follow_you">
                            <button class="follow_text">Follow</button>
                        </div>
                    </div>
                </div>
                <div class="notif follow_notif">
                    <div class="cart">
                        <div>
                            <div class="img">
                                <img src="https://blog.unyleya.edu.br/wp-content/uploads/2017/12/saiba-como-a-educacao-ajuda-voce-a-ser-uma-pessoa-melhor.jpeg" alt="">
                            </div>
                            <div class="info">
                                <p class="name">
                                    Zineb_essoussi
                                    <span class="desc">started following you.</span>
                                    <span class="time">2h</span>
                                </p>

                            </div>
                        </div>
                        <div class="follow_you">
                            <button class="follow_text">Follow</button>
                        </div>
                    </div>
                </div>
                <div class="notif story_notif">
                    <div class="cart">
                        <div>
                            <div class="img">
                                <img src="https://static.significados.com.br/foto/pessoa-og.jpg?class=ogImageRectangle" alt="">
                            </div>
                            <div class="info">
                                <div class="info">
                                    <p class="name">
                                        Zineb_essoussi
                                        <span class="desc">liked your story.</span>
                                        <span class="time">2d</span>
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="story_like">
                            <img src="./images/img2.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="notif follow_notif">
                    <div class="cart">
                        <div>
                            <div class="img">
                                <img src="https://img.magnific.com/fotos-gratis/jovem-bonito-vestindo-camiseta-casual-sobre-o-rosto-feliz-de-fundo-azul-sorrindo-com-os-bracos-cruzados-olhando-para-a-camera-pessoa-positiva_839833-12963.jpg?semt=ais_hybrid&w=740&q=80" alt="">
                            </div>
                            <div class="info">
                                <p class="name">
                                    Zineb_essoussi
                                    <span class="desc">started following you.</span>
                                    <span class="time">2h</span>
                                </p>

                            </div>
                        </div>
                        <div class="follow_you">
                            <button class="follow_text">Follow</button>
                        </div>
                    </div>
                </div>
                <div class="notif story_notif">
                    <div class="cart">
                        <div>
                            <div class="img">
                                <img src="https://blog.unyleya.edu.br/wp-content/uploads/2017/12/saiba-como-a-educacao-ajuda-voce-a-ser-uma-pessoa-melhor.jpeg" alt="">
                            </div>
                            <div class="info">
                                <div class="info">
                                    <p class="name">
                                        Zineb_essoussi
                                        <span class="desc">liked your story.</span>
                                        <span class="time">2d</span>
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="story_like">
                            <img src="./images/img2.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="notif follow_notif">
                    <div class="cart">
                        <div>
                            <div class="img">
                                <img src="https://media.istockphoto.com/id/1326417862/pt/foto/young-woman-laughing-while-relaxing-at-home.jpg?s=612x612&w=0&k=20&c=F0vQkVvqGT3jOFrJ4bs_fs0d4xJPjP9jLSvZRm_BBD4=" alt="">
                            </div>
                            <div class="info">
                                <p class="name">
                                    Zineb_essoussi
                                    <span class="desc">started following you.</span>
                                    <span class="time">2h</span>
                                </p>

                            </div>
                        </div>
                        <div class="follow_you">
                            <button class="follow_text">Follow</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @yield('conteudo')
          <!-- <script src="./sass/vender/bootstrap.bundle.js"></script>
    <script src="./sass/vender/bootstrap.bundle.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <script src="./owlcarousel/jquery.min.js"></script>
    <script src="./owlcarousel/owl.carousel.min.js"></script>
    <script src="./js/carousel.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.2/emojionearea.min.js"></script>
    <script src="./js/main.js"></script>
</body>

</html>