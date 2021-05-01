<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="public/JQuery/jquery_3.6.0.min.js"></script>
    <link rel="stylesheet" href="public/font-awesome-4.7.0/css/font-awesome.min.css">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="public/css/style.css">
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
            <!-- <?php  echo $subview; ?> -->
            <section>
                <table id="purchase_table">
                    <thead>
                        <tr role="row">
                            <th class="checkboxes-select-all checkboxes"><input type="checkbox"></th>
                            <th>Date</th>
                            <th>Reference No</th>
                            <th>Supplier</th>
                            <th>Items</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr role="row" data-purchase="">
                            <td class="checkboxes-cell checkboxes"><input type="checkbox" name="" id=""></td>
                            <td>2021-04-28 18:35:22</td>
                            <td>0835927309</td>
                            <td>Đoàn Minh Vương</td>
                            <td>1</td>
                            <td>1</td>
                            <td>500</td>
                            <td>
                                <div class="btn-group">
                                    <a href="#" title="view" class="btn btn-view"><i class="fa fa-eye"></i></a>
                                    <a href="#" title="edit" class="btn btn-edit"><i class="fa fa-pencil"></i></a>
                                    <a href="#" title="delete" class="btn btn-del"><i class="fa fa-times"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr role="row" data-purchase="">
                            <td class="checkboxes-cell"><input type="checkbox" name="" id=""></td>
                            <td>2021-04-28 18:35:22</td>
                            <td>0835927309</td>
                            <td>Đoàn Minh Vương</td>
                            <td>1</td>
                            <td>1</td>
                            <td>500</td>
                            <td>
                                <div class="btn-group">
                                    <a href="#" title="view" class="btn btn-view"><i class="fa fa-eye"></i></a>
                                    <a href="#" title="edit" class="btn btn-edit"><i class="fa fa-pencil"></i></a>
                                    <a href="#" title="delete" class="btn btn-del"><i class="fa fa-times"></i></a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <th rowspan="1" colspan="1"></th>
                        <th rowspan="1" colspan="1">Total:</th>
                        <th rowspan="1" colspan="1"></th>
                        <th rowspan="1" colspan="1"></th>
                        <th rowspan="1" colspan="1"></th>
                        <th rowspan="1" colspan="1"></th>
                        <th rowspan="1" colspan="1">1000</th>
                        <th rowspan="1" colspan="1"></th>
                    </tfoot>
                </table>
            </section>
        </div>
    </div>
    <script src="public/js/giaodien.js"></script>
</body>
</html>