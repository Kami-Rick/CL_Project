<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ===== BOX ICONS ===== -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <!-- ===== BOOTSTRAP 4 ===== -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="styles_hyp.css">
    <!-- ===== SEARCH FUNCTION ===== -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

</head>
<body id="body-pd">
<header class="header" id="header">
    <div class="header__toggle">
        <i class='bx bx-menu' id="header-toggle"></i>
    </div>
    <div class="action">
        <div class="profile" onclick="myFunction()">
            <img src="pexels-photo-3134555.jpeg">
        </div>
        <div class="menu">
            <h3>Someone else
                <div>Director</div>
            </h3>
            <ul>
                <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i> My Profile</a></li>
                <li><a href="#"><i class="fas fa-edit" aria-hidden="true"></i> Edit Profile</a></li>
                <li><a href="#"><i class="fa fa-cogs" aria-hidden="true"></i> Settings</a></li>
                <li><a href="#"><i class="fa fa-question" aria-hidden="true"></i> Help</a></li>
                <li><a href="#"><i class="fa fa-sign-out-alt" aria-hidden="true"></i> Logout</a></li>
            </ul>
        </div>
    </div>
</header>
<div class="l-navbar" id="nav-bar">
    <nav class="nav">
        <div>
            <a href="#" class="nav__logo">
                <i class='bx bx-layer nav__logo-icon'></i>
                <span class="nav__logo-name">Business helper</span>
            </a>

            <div class="nav__list">
                <a href="site_description.php" class="nav__link active">
                    <i class='bx bx-grid-alt nav__icon' ></i>
                    <span class="nav__name">Site description</span>
                </a>

                <a href="hypotheses.html" class="nav__link">
                    <i class='bx bx-user nav__icon' ></i>
                    <span class="nav__name">Hypotheses</span>
                </a>

                <a href="lib_hyp.php" class="nav__link">
                    <i class='bx bx-message-square-detail nav__icon' ></i>
                    <span class="nav__name">Library of hypotheses</span>
                </a>

                <a href="traffic.html" class="nav__link">
                    <i class='bx bx-bookmark nav__icon' ></i>
                    <span class="nav__name">Traffic</span>
                </a>

                <a href="#" class="nav__link">
                    <i class='bx bx-folder nav__icon' ></i>
                    <span class="nav__name">Finance</span>
                </a>
                <a href="sign.php" class="nav__link">
                    <i class='bx bx-right-arrow nav__icon'></i>
                    <span class="nav__name">Register</span>
                </a>
            </div>
        </div>

        <a href="#" class="nav__link">
            <i class='bx bx-log-out nav__icon' ></i>
            <span class="nav__name">Log Out</span>
        </a>
    </nav>
</div>


<div class="container-fluid rounded shadow p-5 mb-9 bg-white rounded" style="border:2px solid lavenderblush">
    <p><b>Library of hypotheses</b></p>
    <div class="row" >
        <div class="col-sm-2 box  rounded shadow p-3 mb-5 bg-white rounded" id="divid">
            <p class="p1">
            <p class="p3"><b><em>Analysis</em></b></p>
            <p class="p2">If you agree with well-known bloggers of the city, restaurants or barbecue delivery, for example, mutual advertising subscribers can increase, and, consequently, requests and sales</p>
            <p id="fontword" ><i class='far fa-comments'></i>79 <i class='fas fa-user-alt'>245</i></p>
        </div>
        <div class="col-sm-2 box  rounded shadow p-3 mb-5 bg-white rounded" id="divid">
            <p class="p1">
            <p class="p3"><b><em1>Analysis</em1></b></p>
            <p class="p2">If you agree with well-known bloggers of the city, restaurants or barbecue delivery, for example, mutual advertising subscribers can increase, and, consequently, requests and sales</p>
            <p id="fontword" ><i class='far fa-comments'></i> 15<i class='fas fa-user-alt'> 54</i></p>
        </div>
        <div class="col-sm-2 box  rounded shadow p-3 mb-5 bg-white rounded" id="divid">
            <p class="p1">
            <p class="p3"><b><em2>Analysis</em2></b></p>
            <p class="p2">If you agree with well-known bloggers of the city, restaurants or barbecue delivery, for example, mutual advertising subscribers can increase, and, consequently, requests and sales</p>
            <p id="fontword" ><i class='far fa-comments'></i>79 <i class='fas fa-user-alt'>245</i></p>
        </div>
        <div class="col-sm-2 box  rounded shadow p-3 mb-5 bg-white rounded" id="divid">
            <p class="p1">
            <p class="p3"><b><em3>Analysis</em3></b></p>
            <p class="p2">If you agree with well-known bloggers of the city, restaurants or barbecue delivery, for example, mutual advertising subscribers can increase, and, consequently, requests and sales</p>
            <p id="fontword" ><i class='far fa-comments'></i>9 <i class='fas fa-user-alt'>96</i></p>
        </div>
        <div class="col-sm-2 box  rounded shadow p-3 mb-5 bg-white rounded" id="divid">
            <p class="p1">
            <p class="p3"><b><em2>Analysis</em2></b></p>
            <p class="p2">If you agree with well-known bloggers of the city, restaurants or barbecue delivery, for example, mutual advertising subscribers can increase, and, consequently, requests and sales</p>
            <p id="fontword" ><i class='far fa-comments'></i>23 <i class='fas fa-user-alt'>74</i></p>
        </div>
        <div class="col-sm-2 box  rounded shadow p-3 mb-5 bg-white rounded" id="divid">
            <p class="p1">
            <p class="p3"><b><em3>Analysis</em3></b></p>
            <p class="p2">If you agree with well-known bloggers of the city, restaurants or barbecue delivery, for example, mutual advertising subscribers can increase, and, consequently, requests and sales</p>
            <p id="fontword" ><i class='far fa-comments'></i>85 <i class='fas fa-user-alt'>97 </i></p>
        </div>
        <div class="col-sm-2 box  rounded shadow p-3 mb-5 bg-white rounded" id="divid">
            <p class="p1">
            <p class="p3"><b><em>Analysis</em></b></p>
            <p class="p2">If you agree with well-known bloggers of the city, restaurants or barbecue delivery, for example, mutual advertising subscribers can increase, and, consequently, requests and sales</p>
            <p id="fontword" ><i class='far fa-comments'></i>10 <i class='fas fa-user-alt'>31</i></p>
        </div>
        <div class="col-sm-2 box  rounded shadow p-3 mb-5 bg-white rounded" id="divid">
            <p class="p1">
            <p class="p3"><b><em1>Analysis</em1></b></p>
            <p class="p2">If you agree with well-known bloggers of the city, restaurants or barbecue delivery, for example, mutual advertising subscribers can increase, and, consequently, requests and sales</p>
            <p id="fontword" ><i class='far fa-comments'></i>85 <i class='fas fa-user-alt'>46</i></p>
        </div>
        <div class="col-sm-2 box  rounded shadow p-3 mb-5 bg-white rounded" id="divid">
            <p class="p1">
            <p class="p3"><b><em1>Analysis</em1></b></p>
            <p class="p2">If you agree with well-known bloggers of the city, restaurants or barbecue delivery, for example, mutual advertising subscribers can increase, and, consequently, requests and sales</p>
            <p id="fontword" ><i class='far fa-comments'></i>65 <i class='fas fa-user-alt'>74</i></p>
        </div>
        <div class="col-sm-2 box  rounded shadow p-3 mb-5 bg-white rounded" id="divid">
            <p class="p1">
            <p class="p3"><b><em3>Analysis</em3></b></p>
            <p class="p2">If you agree with well-known bloggers of the city, restaurants or barbecue delivery, for example, mutual advertising subscribers can increase, and, consequently, requests and sales</p>
            <p id="fontword" ><i class='far fa-comments'></i> 45<i class='fas fa-user-alt'>53 </i></p>
        </div>
        <div class="col-sm-2 box  rounded shadow p-3 mb-5 bg-white rounded" id="divid">
            <p class="p1">
            <p class="p3"><b><em2>Analysis</em2></b></p>
            <p class="p2">If you agree with well-known bloggers of the city, restaurants or barbecue delivery, for example, mutual advertising subscribers can increase, and, consequently, requests and sales</p>
            <p id="fontword" ><i class='far fa-comments'></i>72 <i class='fas fa-user-alt'>75</i></p>
        </div>
        <div class="col-sm-2 box  rounded shadow p-3 mb-5 bg-white rounded" id="divid">
            <p class="p1">
            <p class="p3"><b><em>Analysis</em></b></p>
            <p class="p2">If you agree with well-known bloggers of the city, restaurants or barbecue delivery, for example, mutual advertising subscribers can increase, and, consequently, requests and sales</p>
            <p id="fontword" ><i class='far fa-comments'></i>8 <i class='fas fa-user-alt'>54</i></p>
        </div>
        <div class="col-sm-2 box  rounded shadow p-3 mb-5 bg-white rounded" id="divid">
            <p class="p1">
            <p class="p3"><b><em3>Analysis</em3></b></p>
            <p class="p2">If you agree with well-known bloggers of the city, restaurants or barbecue delivery, for example, mutual advertising subscribers can increase, and, consequently, requests and sales</p>
            <p id="fontword" ><i class='far fa-comments'></i>14 <i class='fas fa-user-alt'>59</i></p>
        </div>
        <div class="col-sm-2 box  rounded shadow p-3 mb-5 bg-white rounded" id="divid">
            <p class="p1">
            <p class="p3"><b><em2>Analysis</em2></b></p>
            <p class="p2">If you agree with well-known bloggers of the city, restaurants or barbecue delivery, for example, mutual advertising subscribers can increase, and, consequently, requests and sales</p>
            <p id="fontword" ><i class='far fa-comments'></i> 44<i class='fas fa-user-alt'> 58</i></p>
        </div>
        <div class="col-sm-2 box  rounded shadow p-3 mb-5 bg-white rounded" id="divid">
            <p class="p1">
            <p class="p3"><b><em1>Analysis</em1></b></p>
            <p class="p2">If you agree with well-known bloggers of the city, restaurants or barbecue delivery, for example, mutual advertising subscribers can increase, and, consequently, requests and sales</p>
            <p id="fontword" ><i class='far fa-comments'></i>68 <i class='fas fa-user-alt'>126</i></p>
        </div>
        <div class="col-sm-2 box  rounded shadow p-3 mb-5 bg-white rounded" id="divid">
            <p class="p1">
            <p class="p3"><b><em>Analysis</em></b></p>
            <p class="p2">If you agree with well-known bloggers of the city, restaurants or barbecue delivery, for example, mutual advertising subscribers can increase, and, consequently, requests and sales</p>
            <p id="fontword" ><i class='far fa-comments'></i>85 <i class='fas fa-user-alt'>565</i></p>
        </div>
        <div class="col-sm-2 box  rounded shadow p-3 mb-5 bg-white rounded" id="divid">
            <p class="p1">
            <p class="p3"><b><em>Analysis</em></b></p>
            <p class="p2">If you agree with well-known bloggers of the city, restaurants or barbecue delivery, for example, mutual advertising subscribers can increase, and, consequently, requests and sales</p>
            <p id="fontword" ><i class='far fa-comments'></i>79 <i class='fas fa-user-alt'>245</i></p>
        </div>
        <div class="col-sm-2 box  rounded shadow p-3 mb-5 bg-white rounded" id="divid">
            <p class="p1">
            <p class="p3"><b><em1>Analysis</em1></b></p>
            <p class="p2">If you agree with well-known bloggers of the city, restaurants or barbecue delivery, for example, mutual advertising subscribers can increase, and, consequently, requests and sales</p>
            <p id="fontword" ><i class='far fa-comments'></i> 15<i class='fas fa-user-alt'> 54</i></p>
        </div>
        <div class="col-sm-2 box  rounded shadow p-3 mb-5 bg-white rounded" id="divid">
            <p class="p1">
            <p class="p3"><b><em2>Analysis</em2></b></p>
            <p class="p2">If you agree with well-known bloggers of the city, restaurants or barbecue delivery, for example, mutual advertising subscribers can increase, and, consequently, requests and sales</p>
            <p id="fontword" ><i class='far fa-comments'></i>79 <i class='fas fa-user-alt'>245</i></p>
        </div>
        <div class="col-sm-2 box  rounded shadow p-3 mb-5 bg-white rounded" id="divid">
            <p class="p1">
            <p class="p3"><b><em3>Analysis</em3></b></p>
            <p class="p2">If you agree with well-known bloggers of the city, restaurants or barbecue delivery, for example, mutual advertising subscribers can increase, and, consequently, requests and sales</p>
            <p id="fontword" ><i class='far fa-comments'></i>9 <i class='fas fa-user-alt'>96</i></p>
        </div>
        <div class="col-sm-2 box  rounded shadow p-3 mb-5 bg-white rounded" id="divid">
            <p class="p1">
            <p class="p3"><b><em2>Analysis</em2></b></p>
            <p class="p2">If you agree with well-known bloggers of the city, restaurants or barbecue delivery, for example, mutual advertising subscribers can increase, and, consequently, requests and sales</p>
            <p id="fontword" ><i class='far fa-comments'></i>23 <i class='fas fa-user-alt'>74</i></p>
        </div>
        <div class="col-sm-2 box  rounded shadow p-3 mb-5 bg-white rounded" id="divid">
            <p class="p1">
            <p class="p3"><b><em3>Analysis</em3></b></p>
            <p class="p2">If you agree with well-known bloggers of the city, restaurants or barbecue delivery, for example, mutual advertising subscribers can increase, and, consequently, requests and sales</p>
            <p id="fontword" ><i class='far fa-comments'></i>85 <i class='fas fa-user-alt'>97 </i></p>
        </div>
        <div class="col-sm-2 box  rounded shadow p-3 mb-5 bg-white rounded" id="divid">
            <p class="p1">
            <p class="p3"><b><em>Analysis</em></b></p>
            <p class="p2">If you agree with well-known bloggers of the city, restaurants or barbecue delivery, for example, mutual advertising subscribers can increase, and, consequently, requests and sales</p>
            <p id="fontword" ><i class='far fa-comments'></i>10 <i class='fas fa-user-alt'>31</i></p>
        </div>
        <div class="col-sm-2 box  rounded shadow p-3 mb-5 bg-white rounded" id="divid">
            <p class="p1">
            <p class="p3"><b><em1>Analysis</em1></b></p>
            <p class="p2">If you agree with well-known bloggers of the city, restaurants or barbecue delivery, for example, mutual advertising subscribers can increase, and, consequently, requests and sales</p>
            <p id="fontword" ><i class='far fa-comments'></i>85 <i class='fas fa-user-alt'>46</i></p>
        </div>
        <div class="col-sm-2 box  rounded shadow p-3 mb-5 bg-white rounded" id="divid">
            <p class="p1">
            <p class="p3"><b><em1>Analysis</em1></b></p>
            <p class="p2">If you agree with well-known bloggers of the city, restaurants or barbecue delivery, for example, mutual advertising subscribers can increase, and, consequently, requests and sales</p>
            <p id="fontword" ><i class='far fa-comments'></i>65 <i class='fas fa-user-alt'>74</i></p>
        </div>
        <div class="col-sm-2 box  rounded shadow p-3 mb-5 bg-white rounded" id="divid">
            <p class="p1">
            <p class="p3"><b><em3>Analysis</em3></b></p>
            <p class="p2">If you agree with well-known bloggers of the city, restaurants or barbecue delivery, for example, mutual advertising subscribers can increase, and, consequently, requests and sales</p>
            <p id="fontword" ><i class='far fa-comments'></i> 45<i class='fas fa-user-alt'>53 </i></p>
        </div>
        <div class="col-sm-2 box  rounded shadow p-3 mb-5 bg-white rounded" id="divid">
            <p class="p1">
            <p class="p3"><b><em2>Analysis</em2></b></p>
            <p class="p2">If you agree with well-known bloggers of the city, restaurants or barbecue delivery, for example, mutual advertising subscribers can increase, and, consequently, requests and sales</p>
            <p id="fontword" ><i class='far fa-comments'></i>72 <i class='fas fa-user-alt'>75</i></p>
        </div>
        <div class="col-sm-2 box  rounded shadow p-3 mb-5 bg-white rounded" id="divid">
            <p class="p1">
            <p class="p3"><b><em>Analysis</em></b></p>
            <p class="p2">If you agree with well-known bloggers of the city, restaurants or barbecue delivery, for example, mutual advertising subscribers can increase, and, consequently, requests and sales</p>
            <p id="fontword" ><i class='far fa-comments'></i>8 <i class='fas fa-user-alt'>54</i></p>
        </div>
        <div class="col-sm-2 box  rounded shadow p-3 mb-5 bg-white rounded" id="divid">
            <p class="p1">
            <p class="p3"><b><em3>Analysis</em3></b></p>
            <p class="p2">If you agree with well-known bloggers of the city, restaurants or barbecue delivery, for example, mutual advertising subscribers can increase, and, consequently, requests and sales</p>
            <p id="fontword" ><i class='far fa-comments'></i>14 <i class='fas fa-user-alt'>59</i></p>
        </div>
        <div class="col-sm-2 box  rounded shadow p-3 mb-5 bg-white rounded" id="divid">
            <p class="p1">
            <p class="p3"><b><em2>Analysis</em2></b></p>
            <p class="p2">If you agree with well-known bloggers of the city, restaurants or barbecue delivery, for example, mutual advertising subscribers can increase, and, consequently, requests and sales</p>
            <p id="fontword" ><i class='far fa-comments'></i> 44<i class='fas fa-user-alt'> 58</i></p>
        </div>
        <div class="col-sm-2 box  rounded shadow p-3 mb-5 bg-white rounded" id="divid">
            <p class="p1">
            <p class="p3"><b><em1>Analysis</em1></b></p>
            <p class="p2">If you agree with well-known bloggers of the city, restaurants or barbecue delivery, for example, mutual advertising subscribers can increase, and, consequently, requests and sales</p>
            <p id="fontword" ><i class='far fa-comments'></i>68 <i class='fas fa-user-alt'>126</i></p>
        </div>
        <div class="col-sm-2 box  rounded shadow p-3 mb-5 bg-white rounded" id="divid">
            <p class="p1">
            <p class="p3"><b><em>Analysis</em></b></p>
            <p class="p2">If you agree with well-known bloggers of the city, restaurants or barbecue delivery, for example, mutual advertising subscribers can increase, and, consequently, requests and sales</p>
            <p id="fontword" ><i class='far fa-comments'></i>85 <i class='fas fa-user-alt'>565</i></p>
        </div>
    </div>
</div>

<script src="main.js"></script>
</body>
</html>
