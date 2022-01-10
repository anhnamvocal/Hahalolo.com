<?php
        // Trước khi cho người dùng xâm nhập vào bên trong
        // Phải kiểm tra THẺ LÀM VIỆC
        session_start();
        if(!isset($_SESSION['isLoginOK'])){
            header("location:login.php");
        }
        
        require "template/header.php";
    ?>

    <main>
        <div class="container-fuild">
            <div class="row">
                <div class="left-site col-md-3">
                    <div class="left-site-inside">
                        <div class="information" style="background-image: url('images/download.png')">
                            <div class="myInfor ">
                                <button onclick="location.href='Mada.php'" type="button" class="myInfor-btn mt-3 px-3">
                                    <div class="icon-person">
                                        <i class="bi bi-person-circle"></i>
                                    </div>
                                    <div class="LeNam">
                                        <h5 class="Ten">Le Nam</h5>
                                        <p>Xem Hồ Sơ Của Bạn</p>
                                    </div>
                                </button>
                            </div>
                            <button class="btn-detail">
                                <i class="bi bi-currency-dollar icon-detail"></i><span class="text-detail-coin">0 Xu</span>
                            </button>
                            <button class="btn-detail">
                                <i class="bi bi-journal-code icon-detail"></i></i><span class="text-detail">Sổ tay</span>
                            </button>
                            <button class="btn-detail">
                                <i class="bi bi-coin icon-detail"></i><span class="text-detail">Tài khoản kinh doanh</span>
                            </button>
                            <button class="btn-detail">
                                <i class="bi bi-wallet icon-detail"></i><span class="text-detail">Tài khoản thanh toán</span>
                            </button>
                            <button class="btn-detail">
                                <i class="bi bi-share icon-detail"></i><span class="text-detail">Tài khoản bán hàng</span>
                            </button>
                            <button class="btn-detail">
                                <i class="bi bi-people-fill icon-detail"></i><span class="text-detail">Bạn bè</span>
                            </button>
                            <button class="btn-detail">
                                <i class="bi bi-image icon-detail"></i><span class="text-detail">Hình ảnh</span>
                            </button>
                            <button class="btn-detail">
                                <i class="bi bi-star icon-detail"></i><span class="text-detail">Bookmarks</span>
                            </button>
                            
                        </div>
                        <div class="Mty">
                        </div>
                        <div class="img">
                            <img class="img-inside" src="images/bay.jpg" alt="">
                        </div>
                        <div class="weather">
                            <div class="weather-inside">
                                <h5 class="where">Thach That, VN</h5>
                                <p>CN, 10/01/2022</p>
                                <div class="brief">
                                    <div class="box-images">
                                            <img class="box-images-inside" src="images/cloud.png" alt="">
                                    </div>
                                    <div class="text-brief">
                                        <span>14</span><span type="button">°C</span>|<span type="button">°F</span>
                                        <p>Mây đen u ám</p>
                                    </div>
                                </div>
                                <div class="detail-weather">
                                    <div class="row-weather">
                                        <div class="element-weather">
                                            <label class="text-weather text-muted"for="">Khoảng nhiệt</label>
                                            <p class="text-weather">14°C - 14°C</p>
                                        </div>
                                        <div class="element-weather">
                                            <label class="text-weather text-muted"for="">Độ ẩm</label>
                                            <p class="text-weather">77%</p>
                                        </div>
                                        <div class="element-weather">
                                            <label class="text-weather text-muted"for="">Áp suất</label>
                                            <p class="text-weather">1018hPa</p>
                                        </div>
                                    </div>
                                    <div class="row-weather">
                                        <div class="element-weather">
                                            <label class="text-weather text-muted"for="">Tốc độ gió</label>
                                            <p class="text-weather">1m/s</p>
                                        </div>
                                        <div class="element-weather">
                                            <label class="text-weather text-muted"for="">Khả năng mưa</label>
                                            <p class="text-weather">100%</p>
                                        </div>
                                        <div class="element-weather">
                                            <label class="text-weather text-muted"for="">Tầm nhìn</label>
                                            <p class="text-weather">10Km</p>
                                        </div>
                                    </div>
                                    <div class="row-weather">
                                        <div class="element-weather">
                                            <label class="text-weather text-muted"for="">Bình minh</label>
                                            <p class="text-weather">06:35 AM</p>
                                        </div>
                                        <div class="element-weather">
                                            <label class="text-weather text-muted"for="">Hoàng hôn</label>
                                            <p class="text-weather">05:31 PM</p>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <a class="text-weather-last text-weather text-muted" style="text-decoration: none" href="https://openweathermap.org/">Cập nhật lúc 08:44 PM. OpenWeather</a>
                            
                        </div>
                    </div>
                </div>
                <div class="middle-site col-md-6">
                    <div class="middle-site-inside">
                        <div class="middle-site-inside-top">
                            <div class="middle-site-inside-top-blue">
                                <div class="create-news">
                                    <button class="create-news-inside"> 
                                        <span>Tạo bài viết</span>
                                    </button>
                                </div><div class="share-ex">
                                    <button class="share-ex-inside"> 
                                        <span>Chia sẻ trải nghiệm</span>
                                    </button>
                                </div>
                            </div>
                            <div class="middle-site-inside-content">
                                <div class="row">
                                    <i class="bi bi-person-circle"></i><span>Haha, hôm nay bạn thế nào?</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right-site col-md-3">
                    <div class="right-site-inside">
                        <div class="img img-affilate">
                            <img class="img-inside" src="images/affiliate-hhll.jpg" alt="">
                        </div>
                        <div class="Mty">
                        </div>
                        <div class="ex-right">
                            <div class="ex-right-inside">
                                <div class="ex-right-inside-top ">
                                        <span style="float:left">Trải nghiệm nổi bật</span>
                                        <a style="text-decoration: none;float:right" href="https://www.hahalolo.com/experience">Xem tất cả</a>    
                                </div>
                                <hr>
                            </div>
                            <div class="img-sexy-girl">
                                <div class="img-sexy-girl-inside" style="background-image:url('images/sexy-girl.jpg');filter:brightness(90%) ">
                                    <h3 class="text-img">Top resort Phú Quốc sang – xịn – giá cực mịn cho chuyến du lịch đầu năm</h3>
                                </div>
                            </div>
                            <div class="voucher-hhll">
                                <div class="voucher-hhll-img mt-3">
                                    <img src="images/hhll-voucher.jpg" alt="">
                                </div>
                                <div>
                                    <a style="color:black;text-decoration: none;font-size: 1.25rem;" href="https://www.hahalolo.com/experience">SĂN VOUCHER CÙNG HAHALOLO</a>
                                    <div>
                                        <span style="padding-left:40px" class="text-muted">8 ngày trc</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="Mty">
                        </div>
                        <div class="box-logo">
                            <a href="">
                                <img class="img-logo" src="images/bo-cong-thuong.png" alt="">
                            </a>
                            <a href="">
                                <img class="img-logo" src="images/tb-bct.png" alt="">
                            </a>
                            <a href="">
                                <img class="img-logo" src="images/ustoa.png" alt="">
                            </a>
                        </div>
                        <div class="Mty">
                        </div>
                        <footer>
                            <div class="footer-right">
                                <div class="footer-right-inside">
                                    <div class="element-footer1">
                                        <a href="">Giới thiệu</a>
                                        <a href="">Quyền riêng tư</a>
                                    </div>
                                    <div class="element-footer1">
                                        <a href="">Điều khoản</a>
                                        <a href="">Cookie</a>
                                        <a href="">Tuyển dụng</a>
                                    </div>
                                    <div class="element-footer1">
                                        <a href="">Hỗ trợ</a>
                                        <a href="">Tiếp thị liên kết</a>
                                    </div>
                                    <p style="font-size:0.8em;padding: top 10px;" class=" text-muted">© Hahalolo 2017. Đã đăng ký bản quyền</p>
                                </div>
                                
                            </div>
                        </footer>
                    </div>
                    
                </div>
            </div>
        </div>
    </main>