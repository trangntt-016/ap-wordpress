<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phòng khám đa khoa An Phúc</title>

    <?php wp_head();?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

</head>

<body>
    <header>
        <div class='wrapper'>
            <div class='container ap-icon-social d-flex justify-content-between flex-wrap'>
                <div class='d-flex'>
                        <a class="nav-link" href="https://www.facebook.com/hethongykhoaanphuc">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a class="nav-link" href="https://www.youtube.com/@ykhoaanphuc">
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                </div>
                <div class='d-flex  flex-wrap'>
                    <p>Email: sales@ykhoaanphuc.com</p>
                    <p class="mx-2">Hotline 1: 033 742 4868</p>   
                    <p>Hotline 2: 032 840 4868</p>  
                </div>
            </div>
        </div>
        <div class="banner">
            <img src="<?php echo get_template_directory_uri(); ?>/images/BANNER.jpg"/>
        </div>
        <hr/>
        <div class='wrapper'>
            <div class='container d-flex justify-content-between flex-wrap'>
                <div class='d-flex justify-content-between flex-wrap'>
                    <div class='trang-chu m-2'>
                        <div class="text-uppercase">Trang chủ</div>
                    </div>
                    <div class='gioi-thieu dropdown text-uppercase m-2'>
                        <div class="dropdown-toggle" id="dropdownGioithieu" data-toggle="dropdown">
                        Giới thiệu
                        </div>
                        <div class="dropdown-menu" aria-labelledby="dropdownGioithieu">
                            <a class="dropdown-item" href="#">Tổng quan về PKĐK An Phúc</a>
                            <a class="dropdown-item" href="#">Các chuyên khoa</a>
                            <a class="dropdown-item" href="#">Khách hàng doanh nghiệp</a>
                        </div>
                    </div>
                    <div class='hoat-dong dropdown text-uppercase m-2'>
                        <div class="dropdown-toggle" id="dropdownHoatdong" data-toggle="dropdown">
                        Hoạt động
                        </div>
                        <div class="dropdown-menu" aria-labelledby="dropdownHoatdong">
                            <a class="dropdown-item" href="#">Hoạt động của An Phúc</a>
                            <a class="dropdown-item" href="#">Góc tri ân</a>
                        </div>
                    </div>
                    <div class='doanh-nghiep dropdown text-uppercase m-2'>
                        <div class="dropdown-toggle" id="dropdownDN" data-toggle="dropdown">
                        Dịch vụ cho Doanh nghiệp
                        </div>
                        <div class="dropdown-menu" aria-labelledby="dropdownDN">
                            <a class="dropdown-item" href="#">Khám sức khỏe định kỳ</a>
                            <a class="dropdown-item" href="#">Khám bệnh nghề nghiệp</a>
                            <a class="dropdown-item" href="#">Đo kiểm môi trường lao động</a> 
                            <a class="dropdown-item" href="#">Tập huấn an toàn lao động</a>   
                        </div>
                    </div>
                    <div class='ho-tro dropdown text-uppercase m-2'>
                        <div class="dropdown-toggle" id="dropdownHotro" data-toggle="dropdown">
                        Dịch vụ hỗ trợ
                        </div>
                        <div class="dropdown-menu" aria-labelledby="dropdownHotro">
                            <a class="dropdown-item" href="#">Hỗ trợ y tế - Xe cứu thương</a>   
                        </div>
                    </div>
                    <div class='kien-thuc dropdown text-uppercase m-2'>
                        <div class="dropdown-toggle" id="dropdownKienthuc" data-toggle="dropdown">
                        Kiến thức y học
                        </div>
                        <div class="dropdown-menu" aria-labelledby="dropdownKienthuc">
                            <a class="dropdown-item" href="#">Thông tin y học</a>   
                            <a class="dropdown-item" href="#">Y học thường thức</a>       
                        </div>
                    </div>
                    <div class='contact text-uppercase m-2'>
                        <div>Liên hệ</div>
                    </div>                    
                </div>
                <div class='m-2'>
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
            </div>
        </div>
    </header>
    