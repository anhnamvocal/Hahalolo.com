<?php
        // Trước khi cho người dùng xâm nhập vào bên trong
        // Phải kiểm tra THẺ LÀM VIỆC
        session_start();
        if(!isset($_SESSION['isLoginOK'])){
            header("location:login.php");
        }
        
        require "template/header.php";
    ?>

<<<<<<< HEAD
=======
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
                                        <h5 class="Ten">User_from_dtb</h5>
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
>>>>>>> aea8e9bf8947a16584949aba7c2b270947d19973
<main>
    <div class="container-fuild class-include">
        <div id="id-index-view" class="row index-view">
            <div class="left-site col-md-3">
                <div class="left-site-inside">
                    <div class="information" style="background-image: url('images/download.png')">
                        <div class="myInfor ">
                            <button onclick="location.href='Mada.php'" type="button" class="myInfor-btn mt-3 px-3">
                                <div class="icon-person">
                                    <i class="bi bi-person-circle text-muted"></i>
                                </div>
                                <div class="LeNam">
                                    <h5 class="Ten">Le Nam</h5>
                                    <p>Xem Hồ Sơ Của Bạn</p>
                                </div>
                            </button>
                        </div>
<<<<<<< HEAD

=======
                    </div>
                </div>
                <div class="middle-site col-md-6">
                    <div class="middle-site-inside">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, dolor mollitia soluta incidunt perspiciatis in non praesentium, obcaecati est fuga porro sed distinctio eligendi laborum enim illum quisquam minus deleniti, nihil voluptate esse ipsam eius quae harum. Necessitatibus placeat veritatis autem blanditiis perspiciatis impedit reprehenderit molestias, asperiores porro laudantium, assumenda suscipit aliquid voluptatem saepe veniam sequi cum neque eaque eveniet. Aperiam vero delectus et necessitatibus recusandae quis accusantium nam, perspiciatis quibusdam facilis dicta optio a fugiat! Quisquam, molestias sit enim reprehenderit ut quasi labore totam ad accusantium. Quia, minima? Rerum, quibusdam! Incidunt nisi in sequi nihil excepturi, quo minus quaerat!</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, dolor mollitia soluta incidunt perspiciatis in non praesentium, obcaecati est fuga porro sed distinctio eligendi laborum enim illum quisquam minus deleniti, nihil voluptate esse ipsam eius quae harum. Necessitatibus placeat veritatis autem blanditiis perspiciatis impedit reprehenderit molestias, asperiores porro laudantium, assumenda suscipit aliquid voluptatem saepe veniam sequi cum neque eaque eveniet. Aperiam vero delectus et necessitatibus recusandae quis accusantium nam, perspiciatis quibusdam facilis dicta optio a fugiat! Quisquam, molestias sit enim reprehenderit ut quasi labore totam ad accusantium. Quia, minima? Rerum, quibusdam! Incidunt nisi in sequi nihil excepturi, quo minus quaerat!</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, dolor mollitia soluta incidunt perspiciatis in non praesentium, obcaecati est fuga porro sed distinctio eligendi laborum enim illum quisquam minus deleniti, nihil voluptate esse ipsam eius quae harum. Necessitatibus placeat veritatis autem blanditiis perspiciatis impedit reprehenderit molestias, asperiores porro laudantium, assumenda suscipit aliquid voluptatem saepe veniam sequi cum neque eaque eveniet. Aperiam vero delectus et necessitatibus recusandae quis accusantium nam, perspiciatis quibusdam facilis dicta optio a fugiat! Quisquam, molestias sit enim reprehenderit ut quasi labore totam ad accusantium. Quia, minima? Rerum, quibusdam! Incidunt nisi in sequi nihil excepturi, quo minus quaerat!</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, dolor mollitia soluta incidunt perspiciatis in non praesentium, obcaecati est fuga porro sed distinctio eligendi laborum enim illum quisquam minus deleniti, nihil voluptate esse ipsam eius quae harum. Necessitatibus placeat veritatis autem blanditiis perspiciatis impedit reprehenderit molestias, asperiores porro laudantium, assumenda suscipit aliquid voluptatem saepe veniam sequi cum neque eaque eveniet. Aperiam vero delectus et necessitatibus recusandae quis accusantium nam, perspiciatis quibusdam facilis dicta optio a fugiat! Quisquam, molestias sit enim reprehenderit ut quasi labore totam ad accusantium. Quia, minima? Rerum, quibusdam! Incidunt nisi in sequi nihil excepturi, quo minus quaerat!</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, dolor mollitia soluta incidunt perspiciatis in non praesentium, obcaecati est fuga porro sed distinctio eligendi laborum enim illum quisquam minus deleniti, nihil voluptate esse ipsam eius quae harum. Necessitatibus placeat veritatis autem blanditiis perspiciatis impedit reprehenderit molestias, asperiores porro laudantium, assumenda suscipit aliquid voluptatem saepe veniam sequi cum neque eaque eveniet. Aperiam vero delectus et necessitatibus recusandae quis accusantium nam, perspiciatis quibusdam facilis dicta optio a fugiat! Quisquam, molestias sit enim reprehenderit ut quasi labore totam ad accusantium. Quia, minima? Rerum, quibusdam! Incidunt nisi in sequi nihil excepturi, quo minus quaerat!</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, dolor mollitia soluta incidunt perspiciatis in non praesentium, obcaecati est fuga porro sed distinctio eligendi laborum enim illum quisquam minus deleniti, nihil voluptate esse ipsam eius quae harum. Necessitatibus placeat veritatis autem blanditiis perspiciatis impedit reprehenderit molestias, asperiores porro laudantium, assumenda suscipit aliquid voluptatem saepe veniam sequi cum neque eaque eveniet. Aperiam vero delectus et necessitatibus recusandae quis accusantium nam, perspiciatis quibusdam facilis dicta optio a fugiat! Quisquam, molestias sit enim reprehenderit ut quasi labore totam ad accusantium. Quia, minima? Rerum, quibusdam! Incidunt nisi in sequi nihil excepturi, quo minus quaerat!</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, dolor mollitia soluta incidunt perspiciatis in non praesentium, obcaecati est fuga porro sed distinctio eligendi laborum enim illum quisquam minus deleniti, nihil voluptate esse ipsam eius quae harum. Necessitatibus placeat veritatis autem blanditiis perspiciatis impedit reprehenderit molestias, asperiores porro laudantium, assumenda suscipit aliquid voluptatem saepe veniam sequi cum neque eaque eveniet. Aperiam vero delectus et necessitatibus recusandae quis accusantium nam, perspiciatis quibusdam facilis dicta optio a fugiat! Quisquam, molestias sit enim reprehenderit ut quasi labore totam ad accusantium. Quia, minima? Rerum, quibusdam! Incidunt nisi in sequi nihil excepturi, quo minus quaerat!</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, dolor mollitia soluta incidunt perspiciatis in non praesentium, obcaecati est fuga porro sed distinctio eligendi laborum enim illum quisquam minus deleniti, nihil voluptate esse ipsam eius quae harum. Necessitatibus placeat veritatis autem blanditiis perspiciatis impedit reprehenderit molestias, asperiores porro laudantium, assumenda suscipit aliquid voluptatem saepe veniam sequi cum neque eaque eveniet. Aperiam vero delectus et necessitatibus recusandae quis accusantium nam, perspiciatis quibusdam facilis dicta optio a fugiat! Quisquam, molestias sit enim reprehenderit ut quasi labore totam ad accusantium. Quia, minima? Rerum, quibusdam! Incidunt nisi in sequi nihil excepturi, quo minus quaerat!</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, dolor mollitia soluta incidunt perspiciatis in non praesentium, obcaecati est fuga porro sed distinctio eligendi laborum enim illum quisquam minus deleniti, nihil voluptate esse ipsam eius quae harum. Necessitatibus placeat veritatis autem blanditiis perspiciatis impedit reprehenderit molestias, asperiores porro laudantium, assumenda suscipit aliquid voluptatem saepe veniam sequi cum neque eaque eveniet. Aperiam vero delectus et necessitatibus recusandae quis accusantium nam, perspiciatis quibusdam facilis dicta optio a fugiat! Quisquam, molestias sit enim reprehenderit ut quasi labore totam ad accusantium. Quia, minima? Rerum, quibusdam! Incidunt nisi in sequi nihil excepturi, quo minus quaerat!</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, dolor mollitia soluta incidunt perspiciatis in non praesentium, obcaecati est fuga porro sed distinctio eligendi laborum enim illum quisquam minus deleniti, nihil voluptate esse ipsam eius quae harum. Necessitatibus placeat veritatis autem blanditiis perspiciatis impedit reprehenderit molestias, asperiores porro laudantium, assumenda suscipit aliquid voluptatem saepe veniam sequi cum neque eaque eveniet. Aperiam vero delectus et necessitatibus recusandae quis accusantium nam, perspiciatis quibusdam facilis dicta optio a fugiat! Quisquam, molestias sit enim reprehenderit ut quasi labore totam ad accusantium. Quia, minima? Rerum, quibusdam! Incidunt nisi in sequi nihil excepturi, quo minus quaerat!</p>

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
                                <img class="img-sexy-girl-inside" src="images/sexy-girl.jpg" alt="">
                            </div>
                            <div class="voucher-hhll">
                                <div class="voucher-hhll-img mt-3">
                                    <img src="images/hhll-voucher.jpg" alt="">
                                </div>
                               <a style="color:black;text-decoration: none;font-size: 1.25rem;" href="https://www.hahalolo.com/experience">SĂN VOUCHER CÙNG HAHALOLO</a>
                            </div>
>>>>>>> aea8e9bf8947a16584949aba7c2b270947d19973
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
                            <i class="bi bi-wallet icon-detail"></i><span class="text-detail">Tài khoản thanh
                                toán</span>
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
                                        <label class="text-weather text-muted" for="">Khoảng nhiệt</label>
                                        <p class="text-weather">14°C - 14°C</p>
                                    </div>
                                    <div class="element-weather">
                                        <label class="text-weather text-muted" for="">Độ ẩm</label>
                                        <p class="text-weather">77%</p>
                                    </div>
                                    <div class="element-weather">
                                        <label class="text-weather text-muted" for="">Áp suất</label>
                                        <p class="text-weather">1018hPa</p>
                                    </div>
                                </div>
                                <div class="row-weather">
                                    <div class="element-weather">
                                        <label class="text-weather text-muted" for="">Tốc độ gió</label>
                                        <p class="text-weather">1m/s</p>
                                    </div>
                                    <div class="element-weather">
                                        <label class="text-weather text-muted" for="">Khả năng mưa</label>
                                        <p class="text-weather">100%</p>
                                    </div>
                                    <div class="element-weather">
                                        <label class="text-weather text-muted" for="">Tầm nhìn</label>
                                        <p class="text-weather">10Km</p>
                                    </div>
                                </div>
                                <div class="row-weather">
                                    <div class="element-weather">
                                        <label class="text-weather text-muted" for="">Bình minh</label>
                                        <p class="text-weather">06:35 AM</p>
                                    </div>
                                    <div class="element-weather">
                                        <label class="text-weather text-muted" for="">Hoàng hôn</label>
                                        <p class="text-weather">05:31 PM</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <a class="text-weather-last text-weather text-muted" style="text-decoration: none"
                            href="https://openweathermap.org/">Cập nhật lúc 08:44 PM. OpenWeather</a>   
                    </div>
                </div>
            </div>
            <div class="middle-site col-md-6">
                <div class="middle-site-inside">
                    <div class="middle-site-inside-top">
                        <div class="middle-site-inside-top-blue tab">
                            <div class="create-news  ">
                                <button name="cl-news" onClick="reply_click(this.name)" class="create-news-inside tablinks ">
                                    <span>Tạo bài viết</span>
                                </button>
                            </div>
                            <div class="share-ex tablinks">
                                <button name="cl-ex" onClick="reply_click(this.name)" class="share-ex-inside tablinks active">
                                    <span>Chia sẻ trải nghiệm</span>
                                </button>
                            </div>
                        </div>
                        <div class="middle-site-inside-content">
                            <div  style="display:block;" class="tabcontent cl-news">
                                <button name="cl-news" class="middle-site-inside-content-btn" onClick="reply_click(this.name)" >
                                    <div class="row">
                                        <div class="avt-user">
                                            <i class="bi bi-person-circle text-muted"></i>
                                        </div>
                                        <div class="para text-muted">
                                            <p>Haha, hôm nay bạn thế nào?</p>
                                        </div>
                                    </div>
                                </button>
                                <hr style ="margin:0px">
                                <div class="action-user">
                                    <button class="action-user-inside">
                                        <i class="bi bi-image icon-detail" style="color:blue"></i><span> Ảnh/video</span>
                                    </button>
                                    <button class="action-user-inside">
                                        <i class="bi bi-geo-alt" style="color:pink"></i><span> Địa điểm</span>
                                    </button>
                                    <button class="action-user-inside">
                                        <i class="bi bi-emoji-smile" style="color:orange"></i><span> Cảm xúc</span>
                                    </button>
                                </div>
                            </div>
                            <div  class="tabcontent cl-ex">
                                <button name="cl-ex" onClick="reply_click(this.name)" class="middle-site-inside-content-btn">
                                    <div class="row">
                                        <div class="avt-user">
                                            <i class="bi bi-person-circle text-muted"></i>
                                        </div>
                                        <div class="para text-muted">
                                            <p>Chia sẻ trải nghiệm của bản thân!</p>
                                        </div>
                                    </div><hr style ="margin:0px">
                                </button>
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
                                <a style="text-decoration: none;float:right"
                                    href="https://www.hahalolo.com/experience">Xem tất cả</a>
                            </div>
                            <hr>
                        </div>
                        <div class="img-sexy-girl">
                            <div class="img-sexy-girl-inside"
                                style="background-image:url('images/sexy-girl.jpg');filter:brightness(90%) ">
                                <h3 class="text-img">Top resort Phú Quốc sang – xịn – giá cực mịn cho chuyến du lịch đầu
                                    năm</h3>
                            </div>
                        </div>
                        <div class="voucher-hhll">
                            <div class="voucher-hhll-img mt-3">
                                <img src="images/hhll-voucher.jpg" alt="">
                            </div>
                            <div>
                                <a style="color:black;text-decoration: none;font-size: 1.25rem;"
                                    href="https://www.hahalolo.com/experience">SĂN VOUCHER CÙNG HAHALOLO</a>
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
                                <p style="font-size:0.8em;padding: top 10px;" class=" text-muted">© Hahalolo 2017. Đã
                                    đăng ký bản quyền</p>
                            </div>

                        </div>
                    </footer>
                </div>

            </div>
        </div>
        
    </div>
    <div class="upload-box">
            <div id="news" class="upload-box-news  cl-news">
                <div class="upload-box-news-top">
                    <div class="upload-box-news-top-label col-md-10">
                        <h2>Tạo bài viết</h2>
                    </div>
                    <div class="box-icon-x">
                        <button class="box-icon-x-btn" href="index.php" onclick="window.location.href='index.php'"><i class="bi bi-x"></i>
                        </button>
                    </div>
                </div>
                <hr>
                <div class="upload-box-news-body">
                    <div class="upload-box-news-body-inside">
                        <div class="upload-box-news-body-inside-left">
                            <i class="bi bi-person-circle text-muted"></i>
                        </div>
                        <div class="upload-box-news-body-inside-right">
                            <div>Lê Nam</div>
                            <select name="cb-mode-post" id="" class="cb-mode-post">
                                <option value="">Công khai</option>
                                <option value="">Bạn bè</option>
                                <option value="">Chỉ mình tôi</option>
                            </select>
                        </div>
                        <div class="upload-box-news-body-inside-caption">
                            <input type="text" placeholder="Haha, hôm nay bạn thế nào?" class="caption-inside">
                        </div>
                        <div class="upload-box-news-body-inside-add-bg-emo mt-5">
                            <button style="border: none;outline:none;color:orange " class="btn-bg">
                                <i class="bi bi-palette"></i>
                            </button>
                            <button style="border: none;outline:none;color:orange" class="btn-emotion">
                                <i class="bi bi-emoji-smile"></i>
                            </button>
                        </div>
                        <div class="upload-box-news-body-inside-add-info">
                            <button class="box-add-info" style="background-color: rgb(93, 210, 252);">
                                <i class="bi bi-image"></i>
                            </button>
                            <button class="box-add-info" style="transform: rotateY(180deg);background-color: rgb(67, 212, 143);">
                                <i class="bi bi-tag"></i>
                            </button>
                            <button class="box-add-info" style="background-color: rgb(255, 179, 33);">
                                <i class="bi bi-emoji-smile"></i>
                            </button>
                            <button class="box-add-info" style="background-color: rgb(255, 126, 126);">
                                <i class="bi bi-geo-alt"></i>
                            </button>
                            <button class="box-add-info" style="background-color: rgb(171, 136, 255);">
                                <i class="bi bi-images"></i>
                            </button>
                        </div>
                        <div class="upload-box-news-body-inside-btn-share">
                            <button class="upload-box-news-body-inside-btn-share-inside">
                                <span>Chia sẻ</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div id="ex" class="upload-box-ex  cl-ex">
                <div class="upload-box-ex-top">
                    <div class="upload-box-ex-top-label col-md-10">
                        <h2>Chia sẻ trải nghiệm</h2>
                    </div>
                    <div class="upload-box-ex-top-box-icon-x">
                        <button class="box-icon-x-btn" href="index.php" onclick="window.location.href='index.php'">
                            <i class="bi bi-x"></i>
                        </button>
                    </div>
                </div>
                <hr>
                <div class="upload-box-ex-body-inside">
                    <div class="upload-box-ex-body-inside-left">
                            <i class="bi bi-person-circle text-muted"></i>
                    </div>
                    <div class="upload-box-news-body-inside-right">
                        <div>Lê Nam</div>
                        <select name="cb-mode-post" id="" class="cb-mode-post">
                            <option value="">Công khai</option>
                            <option value="">Bạn bè</option>
                            <option value="">Chỉ mình tôi</option>
                        </select>
                    </div>
                    <div class="upload-box-news-body-inside-include">
                        <div class="upload-box-news-body-inside-img">
                            <button class="upload-box-news-body-inside-img-btn">
                                <img src="images/noimage.jpg" alt=""> 
                            </button>
                            <button class="upload-box-news-body-inside-img-icon"><i class="bi bi-three-dots"></i>
                            </button>
                        </div>
                        <div class="upload-box-ex-body-inside-topic">
                            <input class ="upload-box-ex-body-inside-topic-input" placeholder="Chủ đề bài trải nghiệm" type="text" >
                        </div>
                        <hr>
                        <div  class="upload-box-ex-body-inside-content">
                            <textarea name="" id="field" onkeyup="countChar(this)" row='2' placeholder="Type, paste, cut text here..."></textarea>
                        </div>
                        
                        <div class="upload-box-ex-body-inside-number">
                            <div class="upload-box-ex-body-inside-number-inside">
                                <span id="charNum" class="charNum1 ">0</span><span class="charNum2">/1500</span>
                            </div>
                        </div>
                        <div class="upload-box-ex-body-inside-emoji">
                            <i class="bi bi-emoji-smile"></i>
                        </div>
                        <div class="upload-box-ex-body-inside-add-info">
                            <button class="box-add-info" style="background-color: rgb(93, 210, 252);">
                                <i class="bi bi-image"></i>
                            </button>
                            <button class="box-add-info" style="transform: rotateY(180deg);background-color: rgb(67, 212, 143);">
                                <i class="bi bi-tag"></i>
                            </button>
                            <button class="box-add-info" style="background-color: rgb(255, 126, 126);">
                                <i class="bi bi-geo-alt"></i>
                            </button>
                        </div>
                        
                    </div>
                    <div class="upload-box-news-body-inside-btn-share">
                            <button class="upload-box-news-body-inside-btn-share-inside">
                                <span>Chia sẻ</span>
                            </button>
                        </div>
                </div>
            </div>
        </div>
</main>

<?php
        
        require "template/footer.php";
    ?>