<?php
require_once "vendor/autoload.php";
use App\classes\Home;
use App\classes\Auth;
use App\classes\FileUpload;

if(isset($_GET['pages']))
{
    if($_GET['pages']=='view-products')
    {
        $fileUpload= new FileUpload();
        $products= $fileUpload->getAllProductInfo();
        include 'pages/viewProducts.php';
    }
    elseif($_GET['pages']=='order-products')
    {
        $fileUpload= new FileUpload();
        $orderProducts= $fileUpload->getAllProductInfoForOrder($_GET['productId']);
        include 'pages/orderProducts.php';
    }

    elseif ($_GET['pages']=='login')
    {
        include 'pages/login.php';
    }
    elseif($_GET['pages']== 'file-upload')
    {
        include 'pages/file-upload.php';
    }

    elseif ($_GET['pages']=='logout')
    {
        $auth = new Auth();
        $auth->logout();
    }

}
elseif ($_POST['loginBtn'])
{
    $auth = new Auth($_POST);
    $message= $auth->login();
    include 'pages/login.php';

}
elseif ($_POST['btn'])
{
    $fileUpload = new FileUpload($_POST, $_FILES);
    $message=$fileUpload->index();
    include 'pages/file-upload.php';

}
