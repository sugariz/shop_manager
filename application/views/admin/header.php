<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AdminLTE 3 | Dashboard</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/fontawesome-free/css/all.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Tempusdominus Bbootstrap 4 -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
        <!-- iCheck -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
        <!-- JQVMap -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/jqvmap/jqvmap.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/adminlte.min.css">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/daterangepicker/daterangepicker.css">
        <!-- summernote -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/summernote/summernote-bs4.css">
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <style>
            ul#side-menu {
                display: block;
                border-bottom: none;
            }

            ul.btn-user li {
                list-style: none;
                display: inline-block;
                margin: 83px 31px;
            }

            ul.btn-user {
                text-align: center;
            }

            .selected {
                color: #fff;
            }

            table#table-user tbody tr td img {
                width: 28%;
            }

            table#table-user tbody tr td {
                position: relative;
                text-align: center;
            }

            table#table-user tbody tr th {
                text-align: center;
            }

            th {
                text-align: center !important;
            }

            li#li-u {
                position: relative;
            }

            i.fas.fa-user {
                position: absolute;
                top: 12px;
                margin: 0px 66px;
            }

            ul#side-menu li a {
                margin: 0px 54px;
                text-align: center;
                border-radius: 19px;
            }

            li#li-p {
                position: relative;
            }

            i.fas.fa-store {
                position: absolute;
                top: 13px;
                margin: 0px 64px;
            }

            li#li-o {
                position: relative;
            }

            i.fas.fa-shopping-cart {
                position: absolute;
                margin: 0px 63px;
                top: 12px;
            }

            .image-preview {
                width: 300px;
                min-height: 100px;
                border: 2px solid #dddddd;
                margin-top: 15px;
                display: flex;
                align-items: center;
                justify-content: center;
                font-weight: bold;
                color: #cccccc;
                margin: 9px auto;
            }

            .image-preview__image {
                display: none;
                width: 100%;
            }

        </style>
    </head>