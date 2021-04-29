<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./public/JQuery/jquery_3.6.0.min.js"></script>
    <link rel="stylesheet" href="./public/font-awesome-4.7.0/css/font-awesome.min.css">
    <title>Layout Master</title>
    <link rel="stylesheet" href="./public/css/style.css">
</head>
<body>
    <div class="container">
        <header class="header">
            <div class="navbar">
                <a href="#" id="menu_icon"><i class="fa fa-bars" aria-hidden="true"></i></a>
                <span class="brand">
                    <img src="./public/images/my_logo.png" alt="">
                    <h2>Shop SGU</h2>
                </span>
                <div id="account">
                    <a href="#" id="account-show">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        My Account
                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </header>
        <nav class="side-navbar">
            <ul id="list-menu">
                <li id="dashboard"><a href="#"><i class="fa fa-home"></i> dashboard</a></li>
                <li id="products"><a href="#"><i class="fa fa-list"></i> products</a></li>
                <li id="customer"><a href="#"><i class="fa fa-user-o"></i> customer</a></li>
                <li id="purchase"><a href="#"><i class="fa fa-file-text-o"></i> purchase list</a></li>
                <li id="sale-list"><a href="#"><i class="fa fa-pencil-square-o"></i> sale list</a></li>
                <li id="report"><a href="#"><i class="fa fa-bar-chart"></i> report</a></li>
            </ul>
        </nav>
        <div class="page">

        </div>
    </div>
    <script src="./public/js/toggle_show_hiden.js"></script>
</body>
</html>