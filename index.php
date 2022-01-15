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
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
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
>>>>>>> 72a96e9e0bd57c48d0a88f2e583c50e02eff4d4f
>>>>>>> 9a9078e77d7f8099e1625b4df62138308145acd1
=======
>>>>>>> 2c4c05e3b18a72c2c918c0f5e60cf1f3376c03e5
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
                                    
                                    <h5 class="Ten">
                                        <?php
                                            if(isset($_SESSION['isLoginOK']))
                                            {
                                                echo "<a class='nav-link name_user'>".$_SESSION['isLoginOK']."</a>";
                                            }
                                        ?>
                                    </h5>
                                    <p>Xem Hồ Sơ Của Bạn</p>
                                </div>
                            </button>
                        </div>

<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
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
>>>>>>> 72a96e9e0bd57c48d0a88f2e583c50e02eff4d4f
>>>>>>> 9a9078e77d7f8099e1625b4df62138308145acd1
=======
>>>>>>> 2c4c05e3b18a72c2c918c0f5e60cf1f3376c03e5
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
                        <a href=""><img class="img-inside" src="images/bay.jpg" alt=""></a>
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
                                    <span>14</span><span type="button" class="text-brief-hover">°C</span>|<span type="button" class="text-brief-hover">°F</span>
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 9a9078e77d7f8099e1625b4df62138308145acd1
=======
>>>>>>> 2c4c05e3b18a72c2c918c0f5e60cf1f3376c03e5
                    <div class="middle-site-inside-bg">
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
<<<<<<< HEAD
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
                        <div class="Mty">
                        </div>
                        <div class="middle-site-inside-body">
                            <?php
                                require 'connect-db.php';
                                $sql = "SELECT * FROM posts";
                                $result = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_array($result)){
                            ?>        
                                <div class="middle-site-inside-body-posts">
                                    <div class="middle-site-inside-body-margin">
                                        <div class="middle-site-inside-body-margin-top">
                                            <div class="middle-site-inside-body-margin-top-row">
                                                <div class="avt-user ">
                                                    <i class="bi bi-person-circle text-muted"></i>
                                                </div>
                                                <div class="para text-muted middle-site-inside-body-top-left-name-user">
                                                    <h4 >
                                                        <?php
                                                        if(isset($_SESSION['isLoginOK']))
                                                        {
                                                            echo "<a class='nav-link name_user'>".$_SESSION['isLoginOK']."</a>";
                                                        }
                                                        ?>
                                                    </h4>
                                                </div>
                                                <button class="middle-site-inside-body-three-dots"><i class="bi bi-three-dots"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="middle-site-inside-body-margin-para">
                                            <p><?php echo $row['title']; ?></p>
                                        </div>
                                        <div class="middle-site-inside-body-margin-content">
                                            <img src="<?php echo $row['image']; ?>" class="upload-preview" style="width: inherit;"/>
                                        </div>
                                        <div class="middle-site-inside-body-margin-interative">
                                            <div class="middle-site-inside-body-margin-interative-brief">
                                                <div class="middle-site-inside-body-margin-interative-brief-like">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="MuiSvgIcon-root jss462" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><g data-name="Group 29727"><path data-name="Rectangle 6" fill="none" d="M0 0h24v24H0z"></path><g data-name="Group 74"><g data-name="Group 67"><path data-name="Path 62" d="M21 12.002a8.83 8.83 0 01-.291 2.273c-.006.028-.015.052-.021.08l-.055.19A8.991 8.991 0 0112.003 21a8.215 8.215 0 01-1.1-.071 9 9 0 1110.1-8.928z" fill="#24a8d8"></path></g><g data-name="Group 73"><path data-name="Path 91" d="M10.874 15.368l-.94 2.362a.43.43 0 00.4.589h3.673a.43.43 0 00.394-.257l.582-1.319a1.125 1.125 0 00.1-.454v-.16z" fill="#fff"></path><path data-name="Path 92" d="M10.774 15.606a1.279 1.279 0 00.857.186 1.645 1.645 0 001.29.508s.9.529 1.386.413a1.614 1.614 0 00.767-.428s-3.179-.873-3.21-.873-1.09.194-1.09.194z" fill="#e5e7de"></path><path data-name="Path 93" d="M12.571 9.143l-.775 1.412a4.368 4.368 0 01-1.805-1.586c-1.308-1.92-1.009-2.332-.716-2.527a.97.97 0 011.2.249c.056.051.175.18.328.357l.176.207c.622.736 1.592 1.888 1.592 1.888z" fill="#fff"></path><path data-name="Path 94" d="M10.975 7.252l-.99 1.477.814-1.685z" fill="#e5e7de"></path><path data-name="Path 95" d="M12.163 8.669a1.8 1.8 0 00-.37.714l.43-.642z" fill="#e5e7de"></path><path data-name="Path 96" d="M14.389 10.132l-.027.032-1.123 1.338.05-2a.129.129 0 01.2-.1 4.685 4.685 0 01.9.73z" fill="#e5e7de"></path><path data-name="Path 97" d="M14.389 10.131l-.027.032c-.1.08-.2.116-.245 0a3.624 3.624 0 00-.624-.767 4.686 4.686 0 01.896.735z" fill="#fff"></path><path data-name="Path 98" d="M15.851 11.781l-.005-.006-.014-.015a1.155 1.155 0 00-.48-.312l-.11-.037.062-.143a.884.884 0 00-.432-1.151.947.947 0 00-.421-.1.906.906 0 00-.15.012.951.951 0 00-.619.382.405.405 0 00-.023.034c-.008.011-.015.024-.022.036s-.027.046-.039.071l-.112.23-.008.015-.232.477.2-.417.229-.473a.852.852 0 00-.148-.958.839.839 0 00-.172-.139l-.273-.167a.942.942 0 00-.411-.137.964.964 0 00-.877.4c.325-.623.6-1.172.727-1.442a1.514 1.514 0 01.141-.243c.3-.421 1.154-1.955.468-2.357-.958-.562-1.867 1.33-2.164 1.754S8.597 11.162 8.3 11.687s-.7 1.691-.211 2.328a2.211 2.211 0 00.906.662 2.631 2.631 0 00.448.145 2.645 2.645 0 00.681.535 2.066 2.066 0 001.477.234.192.192 0 01.176.05 1.714 1.714 0 001.135.463.336.336 0 01.2.075 1.715 1.715 0 001.313.4 1.835 1.835 0 001.116-.829.886.886 0 00.153-.5v-.741l.413-1.691a1.163 1.163 0 00-.256-1.037zm-2.753-.206l.143-.295a6.728 6.728 0 01-.146.295z" fill="#fff"></path><path data-name="Path 99" d="M15.832 11.76a.668.668 0 00-.51-.044 15.409 15.409 0 00-1.2 2.283c.474-1.227 1.063-2.466 1.117-2.58v-.008l.11.037a1.155 1.155 0 01.483.312z" fill="#e5e7de"></path><path data-name="Path 100" d="M13.635 10.478a.672.672 0 01.047-.071.656.656 0 01-.047.071z" fill="#f5c99e"></path><path data-name="Path 101" d="M12.667 8.984a1.712 1.712 0 00-.89.677c-.342.506-1.158 2-1.259 2.186l1.272-2.46a.965.965 0 01.877-.403z" fill="#e5e7de"></path><path data-name="Path 102" d="M14.3 10.027s-.218.014-.934 1.119c0 0-.247.381-.315.521l.4-.813.03-.06.008-.015.173-.336a.4.4 0 01.023-.034.951.951 0 01.615-.382z" fill="#e5e7de"></path></g></g></g></svg>
                                                    <a href="">50k</a>
                                                </div>
                                                <div class="middle-site-inside-body-margin-interative-brief-cmt">
                                                    <a href="">10k  Bình luận</a>
                                                </div>
                                            </div>
                                            <hr >
                                            <div class="middle-site-inside-body-margin-interative-action">
                                                <div class="middle-site-inside-body-margin-interative-action-btn">
                                                    <button class="middle-site-inside-body-margin-interative-action-btn-inside">
                                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><g data-name="Group 28312"><path data-name="Rectangle 4393" fill="none" d="M0 0h24v24H0z"></path><g data-name="Group 27888"><path data-name="Path 20090" d="M8.77 17.222a4.375 4.375 0 01-1.465-1.059.4.4 0 00-.166-.085 2.558 2.558 0 01-1.317-.959c-.143-.219-.324-.415-.466-.635a1.911 1.911 0 01-.117-2.032c.606-1.132 1.271-2.234 1.919-3.344.2-.343.418-.677.643-1a.244.244 0 00-.015-.349 7.29 7.29 0 01-1.17-1.981 1.315 1.315 0 01.2-1.525 1.639 1.639 0 011.66-.373 4.029 4.029 0 011.458.774c.069.052.14.1.218.158.292-.331.571-.658.863-.974a7.207 7.207 0 011.873-1.565 1.86 1.86 0 011.4-.21 1.36 1.36 0 011 1.771 6.6 6.6 0 01-1.16 2.141c-.4.552-.812 1.1-1.249 1.688a6.565 6.565 0 00.534.387 2.53 2.53 0 011.475 1.627 2.057 2.057 0 011.509.319 1.851 1.851 0 01.827 1.236 2.858 2.858 0 01.007.777c-.012.12 0 .185.1.253a2.416 2.416 0 01.822 2.857c-.263.59-.474 1.2-.683 1.816a4.136 4.136 0 01-.728 1.327.527.527 0 00-.146.333 1.789 1.789 0 01-.275.987c-.293.607-.606 1.2-.923 1.8a1.106 1.106 0 01-1.037.622H8.725a1.21 1.21 0 01-1.168-1.684c.399-1.026.802-2.048 1.213-3.098zm1.868-7.967c.3-.431.6-.84.881-1.263.389-.591.749-1.2 1.143-1.787.426-.634.89-1.242 1.309-1.88a2.579 2.579 0 00.324-.782c.084-.335-.03-.478-.373-.518a.675.675 0 00-.39.073 6.233 6.233 0 00-.882.579 15.1 15.1 0 00-2.246 2.513 50.276 50.276 0 00-3.16 4.749 35.04 35.04 0 00-1.063 1.939.859.859 0 00-.118.586 2.346 2.346 0 001.629 1.719.689.689 0 01.319.215 2.907 2.907 0 002.688 1.1.951.951 0 01.845.251 2.183 2.183 0 001.458.615 1.014 1.014 0 01.688.295 1.741 1.741 0 00.936.472 1.085 1.085 0 001.061-.239 3.237 3.237 0 00.75-1.123c.258-.712.526-1.421.792-2.13a1.312 1.312 0 00-.663-1.621l-.625-.3c.025-.082.045-.142.06-.2a5.1 5.1 0 00.227-.936.918.918 0 00-.828-.9c-.3-.054-.594.165-.773.58a22.3 22.3 0 01-.221.5.626.626 0 01-.779.341.511.511 0 01-.224-.727 7.7 7.7 0 01.374-.793.912.912 0 00-.113-1.1 4.566 4.566 0 00-.594-.444.858.858 0 00-1.161.194c-.15.2-.3.408-.456.624zm4.749 9.888a3.068 3.068 0 01-2.391-.74.315.315 0 00-.174-.056 3.319 3.319 0 01-1.541-.521 1.426 1.426 0 00-.458-.2c-.29-.057-.589-.069-.882-.113a.177.177 0 00-.231.134c-.386 1-.782 2-1.169 3-.089.23 0 .341.256.345s.518 0 .777 0h4.637c.091 0 .232-.035.266-.1.304-.557.592-1.13.91-1.748zM9.54 5.612c-.24-.163-.468-.342-.718-.481a2.46 2.46 0 00-.7-.289.7.7 0 00-.531.11c-.082.072-.056.334.006.475.165.374.369.733.571 1.091.1.176.226.336.352.521z"></path></g></g></svg></span>
                                                        <span>Haha</span>
                                                    </button>
                                                    <button class="middle-site-inside-body-margin-interative-action-btn-inside">
                                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><g data-name="Group 29291"><g data-name="Group 29283"><g data-name="Group 29233"><g data-name="Group 29103"><path data-name="Rectangle 4726" fill="none" d="M0 0h24v24H0z"></path></g></g></g><g data-name="Group 29285"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.9" data-name="Group 29284"><path data-name="Path 15107" d="M16.384 4h-12.6a.777.777 0 00-.787.765v8.419a.777.777 0 00.787.765h2.365v3.826l5.51-3.827h4.725a.777.777 0 00.787-.765V4.765A.777.777 0 0016.384 4z"></path><path data-name="Path 15108" d="M12.341 16.239h1.574l3.936 3.24v-3.24h2.362a.8.8 0 00.787-.81V6.514a.8.8 0 00-.787-.81h-.787"></path></g></g></g></svg></span>
                                                        <span>Bình luận</span>
                                                    </button>
                                                    <button class="middle-site-inside-body-margin-interative-action-btn-inside">
                                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><defs><clipPath id="ShareAltIcon_svg__a"><path fill="none" stroke="currentColor" stroke-width="0.9" d="M0 0h18v18H0z"></path></clipPath></defs><g data-name="Group 29290"><g data-name="Group 29286"><g data-name="Group 29233"><g data-name="Group 29103"><path data-name="Rectangle 4726" fill="none" d="M0 0h24v24H0z"></path></g></g></g><g data-name="Vector Smart Object7 copy" transform="translate(3 3)" clip-path="url(#ShareAltIcon_svg__a)"><path d="M17.55 8.592L9.403.45v5.2c-5.964.575-8.287 4.718-8.957 11.9 2.713-3.721 5.556-5.957 8.958-5.948v5.13z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.9"></path></g></g></svg></span>
                                                        <span>Chia sẻ</span>
                                                    </button>
                                                    <button class="middle-site-inside-body-margin-interative-action-btn-inside">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><defs><linearGradient id="Point10Icon_svg__b" x1="0.5" y1="1" x2="0.5" gradientUnits="objectBoundingBox"><stop offset="0" stop-color="#008ad9"></stop><stop offset="0.883" stop-color="#0dc6ff"></stop></linearGradient><linearGradient id="Point10Icon_svg__c" x1="0.5" y1="1" x2="0.5" gradientUnits="objectBoundingBox"><stop offset="0.235" stop-color="#008dda"></stop><stop offset="0.679" stop-color="#3fd1ff"></stop></linearGradient><clipPath id="Point10Icon_svg__a"><path data-name="Path 21740" d="M348.512 317.007a7.956 7.956 0 002.166 5.6 7.58 7.58 0 0011.119 0 8.27 8.27 0 000-11.189 7.647 7.647 0 00-11.106 0 7.885 7.885 0 00-2.179 5.589zm4.442 0a3.93 3.93 0 01.878-2.551 3.127 3.127 0 014.841-.014 3.921 3.921 0 01.863 2.565 4.05 4.05 0 01-.863 2.58 3.031 3.031 0 01-4.826-.029 3.964 3.964 0 01-.892-2.551z" transform="translate(-348.512 -309.029)" fill="none"></path></clipPath></defs><g data-name="Group 30324"><path data-name="Rectangle 4908" fill="none" d="M0 0h24v24H0z"></path><g data-name="Group 30323"><g data-name="Group 30289"><g data-name="Group 30288" transform="translate(6.539 4)" clip-path="url(#Point10Icon_svg__a)"><g data-name="Group 30287"><path data-name="Path 21806" d="M2.264 2.336A7.078 7.078 0 00.538 4.942a8.138 8.138 0 00-.539 3.059h3.7L5.358 3.86z" fill="#0fbdff"></path><path data-name="Path 21807" d="M-.001 8.001a8.432 8.432 0 00.539 3.033 7.608 7.608 0 001.726 2.64c1.029-.506 2.059-1.026 3.089-1.532l-1.65-4.141z" fill="#008ad9"></path><path data-name="Path 21808" d="M2.228 2.336l3.131 1.523 2.372-1.021V-.003a7.1 7.1 0 00-3.134.647 8.407 8.407 0 00-2.369 1.692z" fill="#3fd1ff"></path><path data-name="Path 21809" d="M2.265 13.66a7.182 7.182 0 002.3 1.706 8.239 8.239 0 003.168.639v-2.844l-2.381-1.019z" fill="#009cf4"></path><path data-name="Path 21810" d="M7.729 13.161v2.844a7.311 7.311 0 003.161-.673 6.943 6.943 0 002.306-1.672l-3.094-1.518z" fill="#0fbdff"></path><path data-name="Path 21811" d="M7.729-.003v2.841l2.373 1.021 3.123-1.523a7.334 7.334 0 00-2.5-1.76 8.091 8.091 0 00-2.996-.579z" fill="#66e2ff"></path><path data-name="Path 21812" d="M10.106 3.863l1.658 4.141h3.7a8.112 8.112 0 00-.542-3.029 7.439 7.439 0 00-1.695-2.636c-1.029.504-2.09 1.014-3.121 1.524z" fill="#76ecff"></path><path data-name="Path 21813" d="M11.764 8.001l-1.658 4.141L13.2 13.66a8.042 8.042 0 001.724-2.631A8.479 8.479 0 0015.466 8z" fill="#3fd1ff"></path><path data-name="Path 21814" d="M10.106 12.142l.923 3.156-3.3-2.137z" fill="#32cdff"></path><path data-name="Path 21815" d="M5.352 12.142l-.584 3.326 2.965-2.307z" fill="#00adea"></path><path data-name="Path 21816" d="M7.725 8.001l2.381 4.141-2.373 1.019-2.381-1.019z" fill="#00abf7"></path><path data-name="Path 21817" d="M10.106 3.86l1.658 4.141-1.658 4.141-2.381-4.141z" fill="#4ad4ff"></path><path data-name="Path 21818" d="M5.361 3.86l2.365 4.141-2.373 4.141-1.65-4.141z" fill="#00bff2"></path><path data-name="Path 21819" d="M7.733 2.838l2.373 1.021L7.725 8 5.36 3.859z" fill="#00bdff"></path><path data-name="Path 21820" d="M5.361 3.86L3.702 8.001l1.65 4.141 2.381 1.019 2.373-1.019 1.658-4.141-1.658-4.141-2.373-1.021z" fill="#3fd1ff" style="mix-blend-mode: soft-light; isolation: isolate;"></path><path data-name="Path 21821" d="M10.106 3.859l.483-3.216-2.86 2.195z" fill="#7becff"></path><path data-name="Path 21822" d="M4.597.644l3.134 2.194-2.372 1.021z" fill="#6ce2ff"></path><path data-name="Path 21823" d="M11.764 8.001l3.022 3.338-4.68.8z" fill="#6ce2ff"></path><path data-name="Path 21824" d="M11.764 8.001l3.018-3.229-4.68-.913z" fill="#88f4ff"></path><path data-name="Path 21825" d="M5.363 3.86L3.704 8.001.863 4.534" fill="#0dc6ff"></path><path data-name="Path 21826" d="M5.352 12.144l-4.679-.973 3.029-3.168z" fill="#009cf4"></path></g></g></g><g data-name="Group 30290"><path data-name="Path 21827" d="M341.621 452.584s1.151-1.252 2.3-.948c0 0 1.726.44.745 3.249a7.99 7.99 0 00-.609 2.4c.079.174.338.2.778.1 0 0 .745-.3 1.015.169a1.013 1.013 0 01-.44 1.218 3.557 3.557 0 01-3.655.711s-1.489-.846-.677-3.046l1.388-2.809s.448-1.046-.237.914a6.142 6.142 0 01-1.21 2.406l.527-3.658" transform="translate(-334.558 -442.764)" fill="url(#Point10Icon_svg__b)"></path><g data-name="Group 30332"><g data-name="Group 30271"><path data-name="Path 21744" d="M7.954 10.15a1.32 1.32 0 01.955-.462.616.616 0 01.553.294 1.38 1.38 0 01.153.749 4.066 4.066 0 01-.154.943l-.809 2.717a6.157 6.157 0 00-.133.842q-.015.514.34.525a1.12 1.12 0 00.418-.053 2.825 2.825 0 00.365-.134c.211-.1.4-.2.4-.2s.16-.076.593-.339a.1.1 0 01.132.141 2.258 2.258 0 01-.327.352 2.4 2.4 0 01-2.02.723 1.492 1.492 0 01-1.024-.451 1.4 1.4 0 01-.328-1.008 2.912 2.912 0 01.057-.476q.051-.259.145-.655l.969-3.3a.28.28 0 00.032-.086c0-.02.009-.037.013-.049a.052.052 0 00-.009-.049l-.027-.033a.009.009 0 00-.011 0" fill="#fff"></path></g></g><path data-name="Path 21742" d="M216.642 327.59a2.481 2.481 0 01-1.186-.254 1.9 1.9 0 01-.714-.71l-.024-.046a2.125 2.125 0 01-.285-.871c0-.046-.008-.088-.013-.128a3.775 3.775 0 010-.877v-.034l1.7-11.362v-.052a.576.576 0 01.351-.541l.031-.011 2.987-.921a.548.548 0 01.728.595l-1.986 13.777a1.76 1.76 0 01-1.39 1.423l-.043.006a1.606 1.606 0 01-.156.006zm2.818-15.322" transform="translate(-212.396 -307.659)" fill="url(#Point10Icon_svg__c)"></path><g data-name="Group 30270"><path data-name="Path 21743" d="M7.799 10.593a11.7 11.7 0 00-.714 1.337 46 46 0 00-1.944 6.008q-.226.95-.827 1a.864.864 0 01-.589-.181 1.645 1.645 0 01-.494-.6 2.4 2.4 0 01-.248-.893 2.754 2.754 0 01.058-.854l1.533-10.1a.371.371 0 01.228-.292l1.689-.682a.163.163 0 01.222.174L4.781 18.025l-.018.167a.013.013 0 000 .006l.044.117a.525.525 0 01.031-.091.276.276 0 01.062-.092.012.012 0 000-.006q.01-.058.125-.575.119-.533.208-.992.263-1.165.533-2.154a17.405 17.405 0 01.7-2.023 7.21 7.21 0 01.969-1.725 1.719 1.719 0 011.163-.747" fill="#fff"></path></g></g></g></g></svg>                                            </button>
                                                    </button>    
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="middle-site-inside-body-margin-interative-view-cmt">
                                                <div class="middle-site-inside-body-margin-interative-view-cmt-person">
                                                    <div class="middle-site-inside-body-margin-interative-view-cmt-person-avt">
                                                        <i class="bi bi-person-circle text-muted"></i><span> Le Nam</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="Mty">
                                    </div>
                                </div>
                            <?php
                                }
                            ?>
                            
                            <div class="middle-site-inside-body-posts">
                                <div class="middle-site-inside-body-margin">
                                    <div class="middle-site-inside-body-margin-top">
                                        <div class="middle-site-inside-body-margin-top-row">
                                            <div class="avt-user ">
                                                <i class="bi bi-person-circle text-muted"></i>
                                            </div>
                                            <div class="para text-muted middle-site-inside-body-top-left-name-user">
                                                <h4 >
                                                    <?php
                                                    if(isset($_SESSION['isLoginOK']))
                                                    {
                                                        echo "<a class='nav-link name_user'>".$_SESSION['isLoginOK']."</a>";
                                                    }
                                                    ?>
                                                </h4>
                                            </div>
                                            <button class="middle-site-inside-body-three-dots"><i class="bi bi-three-dots"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="middle-site-inside-body-margin-para">
                                        <p>middle-site-inside-bodymiddle-site-inside-bodymiddle-site-inside-bodymiddle-site-inside-bodymiddle-site-inside-bodymiddle-site-inside-body</p>
                                    </div>
                                    <div class="middle-site-inside-body-margin-content">
                                        image is here!
                                    </div>
                                    <div class="middle-site-inside-body-margin-interative">
                                        <div class="middle-site-inside-body-margin-interative-brief">
                                            <div class="middle-site-inside-body-margin-interative-brief-like">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="MuiSvgIcon-root jss462" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><g data-name="Group 29727"><path data-name="Rectangle 6" fill="none" d="M0 0h24v24H0z"></path><g data-name="Group 74"><g data-name="Group 67"><path data-name="Path 62" d="M21 12.002a8.83 8.83 0 01-.291 2.273c-.006.028-.015.052-.021.08l-.055.19A8.991 8.991 0 0112.003 21a8.215 8.215 0 01-1.1-.071 9 9 0 1110.1-8.928z" fill="#24a8d8"></path></g><g data-name="Group 73"><path data-name="Path 91" d="M10.874 15.368l-.94 2.362a.43.43 0 00.4.589h3.673a.43.43 0 00.394-.257l.582-1.319a1.125 1.125 0 00.1-.454v-.16z" fill="#fff"></path><path data-name="Path 92" d="M10.774 15.606a1.279 1.279 0 00.857.186 1.645 1.645 0 001.29.508s.9.529 1.386.413a1.614 1.614 0 00.767-.428s-3.179-.873-3.21-.873-1.09.194-1.09.194z" fill="#e5e7de"></path><path data-name="Path 93" d="M12.571 9.143l-.775 1.412a4.368 4.368 0 01-1.805-1.586c-1.308-1.92-1.009-2.332-.716-2.527a.97.97 0 011.2.249c.056.051.175.18.328.357l.176.207c.622.736 1.592 1.888 1.592 1.888z" fill="#fff"></path><path data-name="Path 94" d="M10.975 7.252l-.99 1.477.814-1.685z" fill="#e5e7de"></path><path data-name="Path 95" d="M12.163 8.669a1.8 1.8 0 00-.37.714l.43-.642z" fill="#e5e7de"></path><path data-name="Path 96" d="M14.389 10.132l-.027.032-1.123 1.338.05-2a.129.129 0 01.2-.1 4.685 4.685 0 01.9.73z" fill="#e5e7de"></path><path data-name="Path 97" d="M14.389 10.131l-.027.032c-.1.08-.2.116-.245 0a3.624 3.624 0 00-.624-.767 4.686 4.686 0 01.896.735z" fill="#fff"></path><path data-name="Path 98" d="M15.851 11.781l-.005-.006-.014-.015a1.155 1.155 0 00-.48-.312l-.11-.037.062-.143a.884.884 0 00-.432-1.151.947.947 0 00-.421-.1.906.906 0 00-.15.012.951.951 0 00-.619.382.405.405 0 00-.023.034c-.008.011-.015.024-.022.036s-.027.046-.039.071l-.112.23-.008.015-.232.477.2-.417.229-.473a.852.852 0 00-.148-.958.839.839 0 00-.172-.139l-.273-.167a.942.942 0 00-.411-.137.964.964 0 00-.877.4c.325-.623.6-1.172.727-1.442a1.514 1.514 0 01.141-.243c.3-.421 1.154-1.955.468-2.357-.958-.562-1.867 1.33-2.164 1.754S8.597 11.162 8.3 11.687s-.7 1.691-.211 2.328a2.211 2.211 0 00.906.662 2.631 2.631 0 00.448.145 2.645 2.645 0 00.681.535 2.066 2.066 0 001.477.234.192.192 0 01.176.05 1.714 1.714 0 001.135.463.336.336 0 01.2.075 1.715 1.715 0 001.313.4 1.835 1.835 0 001.116-.829.886.886 0 00.153-.5v-.741l.413-1.691a1.163 1.163 0 00-.256-1.037zm-2.753-.206l.143-.295a6.728 6.728 0 01-.146.295z" fill="#fff"></path><path data-name="Path 99" d="M15.832 11.76a.668.668 0 00-.51-.044 15.409 15.409 0 00-1.2 2.283c.474-1.227 1.063-2.466 1.117-2.58v-.008l.11.037a1.155 1.155 0 01.483.312z" fill="#e5e7de"></path><path data-name="Path 100" d="M13.635 10.478a.672.672 0 01.047-.071.656.656 0 01-.047.071z" fill="#f5c99e"></path><path data-name="Path 101" d="M12.667 8.984a1.712 1.712 0 00-.89.677c-.342.506-1.158 2-1.259 2.186l1.272-2.46a.965.965 0 01.877-.403z" fill="#e5e7de"></path><path data-name="Path 102" d="M14.3 10.027s-.218.014-.934 1.119c0 0-.247.381-.315.521l.4-.813.03-.06.008-.015.173-.336a.4.4 0 01.023-.034.951.951 0 01.615-.382z" fill="#e5e7de"></path></g></g></g></svg>
                                                <a href="">50k</a>
                                            </div>
                                            <div class="middle-site-inside-body-margin-interative-brief-cmt">
                                                <a href="">10k  Bình luận</a>
                                            </div>
                                        </div>
                                        <hr >
                                        <div class="middle-site-inside-body-margin-interative-action">
                                            <div class="middle-site-inside-body-margin-interative-action-btn">
                                                <button class="middle-site-inside-body-margin-interative-action-btn-inside">
                                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><g data-name="Group 28312"><path data-name="Rectangle 4393" fill="none" d="M0 0h24v24H0z"></path><g data-name="Group 27888"><path data-name="Path 20090" d="M8.77 17.222a4.375 4.375 0 01-1.465-1.059.4.4 0 00-.166-.085 2.558 2.558 0 01-1.317-.959c-.143-.219-.324-.415-.466-.635a1.911 1.911 0 01-.117-2.032c.606-1.132 1.271-2.234 1.919-3.344.2-.343.418-.677.643-1a.244.244 0 00-.015-.349 7.29 7.29 0 01-1.17-1.981 1.315 1.315 0 01.2-1.525 1.639 1.639 0 011.66-.373 4.029 4.029 0 011.458.774c.069.052.14.1.218.158.292-.331.571-.658.863-.974a7.207 7.207 0 011.873-1.565 1.86 1.86 0 011.4-.21 1.36 1.36 0 011 1.771 6.6 6.6 0 01-1.16 2.141c-.4.552-.812 1.1-1.249 1.688a6.565 6.565 0 00.534.387 2.53 2.53 0 011.475 1.627 2.057 2.057 0 011.509.319 1.851 1.851 0 01.827 1.236 2.858 2.858 0 01.007.777c-.012.12 0 .185.1.253a2.416 2.416 0 01.822 2.857c-.263.59-.474 1.2-.683 1.816a4.136 4.136 0 01-.728 1.327.527.527 0 00-.146.333 1.789 1.789 0 01-.275.987c-.293.607-.606 1.2-.923 1.8a1.106 1.106 0 01-1.037.622H8.725a1.21 1.21 0 01-1.168-1.684c.399-1.026.802-2.048 1.213-3.098zm1.868-7.967c.3-.431.6-.84.881-1.263.389-.591.749-1.2 1.143-1.787.426-.634.89-1.242 1.309-1.88a2.579 2.579 0 00.324-.782c.084-.335-.03-.478-.373-.518a.675.675 0 00-.39.073 6.233 6.233 0 00-.882.579 15.1 15.1 0 00-2.246 2.513 50.276 50.276 0 00-3.16 4.749 35.04 35.04 0 00-1.063 1.939.859.859 0 00-.118.586 2.346 2.346 0 001.629 1.719.689.689 0 01.319.215 2.907 2.907 0 002.688 1.1.951.951 0 01.845.251 2.183 2.183 0 001.458.615 1.014 1.014 0 01.688.295 1.741 1.741 0 00.936.472 1.085 1.085 0 001.061-.239 3.237 3.237 0 00.75-1.123c.258-.712.526-1.421.792-2.13a1.312 1.312 0 00-.663-1.621l-.625-.3c.025-.082.045-.142.06-.2a5.1 5.1 0 00.227-.936.918.918 0 00-.828-.9c-.3-.054-.594.165-.773.58a22.3 22.3 0 01-.221.5.626.626 0 01-.779.341.511.511 0 01-.224-.727 7.7 7.7 0 01.374-.793.912.912 0 00-.113-1.1 4.566 4.566 0 00-.594-.444.858.858 0 00-1.161.194c-.15.2-.3.408-.456.624zm4.749 9.888a3.068 3.068 0 01-2.391-.74.315.315 0 00-.174-.056 3.319 3.319 0 01-1.541-.521 1.426 1.426 0 00-.458-.2c-.29-.057-.589-.069-.882-.113a.177.177 0 00-.231.134c-.386 1-.782 2-1.169 3-.089.23 0 .341.256.345s.518 0 .777 0h4.637c.091 0 .232-.035.266-.1.304-.557.592-1.13.91-1.748zM9.54 5.612c-.24-.163-.468-.342-.718-.481a2.46 2.46 0 00-.7-.289.7.7 0 00-.531.11c-.082.072-.056.334.006.475.165.374.369.733.571 1.091.1.176.226.336.352.521z"></path></g></g></svg></span>
                                                    <span>Haha</span>
                                                </button>
                                                <button class="middle-site-inside-body-margin-interative-action-btn-inside">
                                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><g data-name="Group 29291"><g data-name="Group 29283"><g data-name="Group 29233"><g data-name="Group 29103"><path data-name="Rectangle 4726" fill="none" d="M0 0h24v24H0z"></path></g></g></g><g data-name="Group 29285"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.9" data-name="Group 29284"><path data-name="Path 15107" d="M16.384 4h-12.6a.777.777 0 00-.787.765v8.419a.777.777 0 00.787.765h2.365v3.826l5.51-3.827h4.725a.777.777 0 00.787-.765V4.765A.777.777 0 0016.384 4z"></path><path data-name="Path 15108" d="M12.341 16.239h1.574l3.936 3.24v-3.24h2.362a.8.8 0 00.787-.81V6.514a.8.8 0 00-.787-.81h-.787"></path></g></g></g></svg></span>
                                                    <span>Bình luận</span>
                                                </button>
                                                <button class="middle-site-inside-body-margin-interative-action-btn-inside">
                                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><defs><clipPath id="ShareAltIcon_svg__a"><path fill="none" stroke="currentColor" stroke-width="0.9" d="M0 0h18v18H0z"></path></clipPath></defs><g data-name="Group 29290"><g data-name="Group 29286"><g data-name="Group 29233"><g data-name="Group 29103"><path data-name="Rectangle 4726" fill="none" d="M0 0h24v24H0z"></path></g></g></g><g data-name="Vector Smart Object7 copy" transform="translate(3 3)" clip-path="url(#ShareAltIcon_svg__a)"><path d="M17.55 8.592L9.403.45v5.2c-5.964.575-8.287 4.718-8.957 11.9 2.713-3.721 5.556-5.957 8.958-5.948v5.13z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.9"></path></g></g></svg></span>
                                                    <span>Chia sẻ</span>
                                                </button>
                                                <button class="middle-site-inside-body-margin-interative-action-btn-inside">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><defs><linearGradient id="Point10Icon_svg__b" x1="0.5" y1="1" x2="0.5" gradientUnits="objectBoundingBox"><stop offset="0" stop-color="#008ad9"></stop><stop offset="0.883" stop-color="#0dc6ff"></stop></linearGradient><linearGradient id="Point10Icon_svg__c" x1="0.5" y1="1" x2="0.5" gradientUnits="objectBoundingBox"><stop offset="0.235" stop-color="#008dda"></stop><stop offset="0.679" stop-color="#3fd1ff"></stop></linearGradient><clipPath id="Point10Icon_svg__a"><path data-name="Path 21740" d="M348.512 317.007a7.956 7.956 0 002.166 5.6 7.58 7.58 0 0011.119 0 8.27 8.27 0 000-11.189 7.647 7.647 0 00-11.106 0 7.885 7.885 0 00-2.179 5.589zm4.442 0a3.93 3.93 0 01.878-2.551 3.127 3.127 0 014.841-.014 3.921 3.921 0 01.863 2.565 4.05 4.05 0 01-.863 2.58 3.031 3.031 0 01-4.826-.029 3.964 3.964 0 01-.892-2.551z" transform="translate(-348.512 -309.029)" fill="none"></path></clipPath></defs><g data-name="Group 30324"><path data-name="Rectangle 4908" fill="none" d="M0 0h24v24H0z"></path><g data-name="Group 30323"><g data-name="Group 30289"><g data-name="Group 30288" transform="translate(6.539 4)" clip-path="url(#Point10Icon_svg__a)"><g data-name="Group 30287"><path data-name="Path 21806" d="M2.264 2.336A7.078 7.078 0 00.538 4.942a8.138 8.138 0 00-.539 3.059h3.7L5.358 3.86z" fill="#0fbdff"></path><path data-name="Path 21807" d="M-.001 8.001a8.432 8.432 0 00.539 3.033 7.608 7.608 0 001.726 2.64c1.029-.506 2.059-1.026 3.089-1.532l-1.65-4.141z" fill="#008ad9"></path><path data-name="Path 21808" d="M2.228 2.336l3.131 1.523 2.372-1.021V-.003a7.1 7.1 0 00-3.134.647 8.407 8.407 0 00-2.369 1.692z" fill="#3fd1ff"></path><path data-name="Path 21809" d="M2.265 13.66a7.182 7.182 0 002.3 1.706 8.239 8.239 0 003.168.639v-2.844l-2.381-1.019z" fill="#009cf4"></path><path data-name="Path 21810" d="M7.729 13.161v2.844a7.311 7.311 0 003.161-.673 6.943 6.943 0 002.306-1.672l-3.094-1.518z" fill="#0fbdff"></path><path data-name="Path 21811" d="M7.729-.003v2.841l2.373 1.021 3.123-1.523a7.334 7.334 0 00-2.5-1.76 8.091 8.091 0 00-2.996-.579z" fill="#66e2ff"></path><path data-name="Path 21812" d="M10.106 3.863l1.658 4.141h3.7a8.112 8.112 0 00-.542-3.029 7.439 7.439 0 00-1.695-2.636c-1.029.504-2.09 1.014-3.121 1.524z" fill="#76ecff"></path><path data-name="Path 21813" d="M11.764 8.001l-1.658 4.141L13.2 13.66a8.042 8.042 0 001.724-2.631A8.479 8.479 0 0015.466 8z" fill="#3fd1ff"></path><path data-name="Path 21814" d="M10.106 12.142l.923 3.156-3.3-2.137z" fill="#32cdff"></path><path data-name="Path 21815" d="M5.352 12.142l-.584 3.326 2.965-2.307z" fill="#00adea"></path><path data-name="Path 21816" d="M7.725 8.001l2.381 4.141-2.373 1.019-2.381-1.019z" fill="#00abf7"></path><path data-name="Path 21817" d="M10.106 3.86l1.658 4.141-1.658 4.141-2.381-4.141z" fill="#4ad4ff"></path><path data-name="Path 21818" d="M5.361 3.86l2.365 4.141-2.373 4.141-1.65-4.141z" fill="#00bff2"></path><path data-name="Path 21819" d="M7.733 2.838l2.373 1.021L7.725 8 5.36 3.859z" fill="#00bdff"></path><path data-name="Path 21820" d="M5.361 3.86L3.702 8.001l1.65 4.141 2.381 1.019 2.373-1.019 1.658-4.141-1.658-4.141-2.373-1.021z" fill="#3fd1ff" style="mix-blend-mode: soft-light; isolation: isolate;"></path><path data-name="Path 21821" d="M10.106 3.859l.483-3.216-2.86 2.195z" fill="#7becff"></path><path data-name="Path 21822" d="M4.597.644l3.134 2.194-2.372 1.021z" fill="#6ce2ff"></path><path data-name="Path 21823" d="M11.764 8.001l3.022 3.338-4.68.8z" fill="#6ce2ff"></path><path data-name="Path 21824" d="M11.764 8.001l3.018-3.229-4.68-.913z" fill="#88f4ff"></path><path data-name="Path 21825" d="M5.363 3.86L3.704 8.001.863 4.534" fill="#0dc6ff"></path><path data-name="Path 21826" d="M5.352 12.144l-4.679-.973 3.029-3.168z" fill="#009cf4"></path></g></g></g><g data-name="Group 30290"><path data-name="Path 21827" d="M341.621 452.584s1.151-1.252 2.3-.948c0 0 1.726.44.745 3.249a7.99 7.99 0 00-.609 2.4c.079.174.338.2.778.1 0 0 .745-.3 1.015.169a1.013 1.013 0 01-.44 1.218 3.557 3.557 0 01-3.655.711s-1.489-.846-.677-3.046l1.388-2.809s.448-1.046-.237.914a6.142 6.142 0 01-1.21 2.406l.527-3.658" transform="translate(-334.558 -442.764)" fill="url(#Point10Icon_svg__b)"></path><g data-name="Group 30332"><g data-name="Group 30271"><path data-name="Path 21744" d="M7.954 10.15a1.32 1.32 0 01.955-.462.616.616 0 01.553.294 1.38 1.38 0 01.153.749 4.066 4.066 0 01-.154.943l-.809 2.717a6.157 6.157 0 00-.133.842q-.015.514.34.525a1.12 1.12 0 00.418-.053 2.825 2.825 0 00.365-.134c.211-.1.4-.2.4-.2s.16-.076.593-.339a.1.1 0 01.132.141 2.258 2.258 0 01-.327.352 2.4 2.4 0 01-2.02.723 1.492 1.492 0 01-1.024-.451 1.4 1.4 0 01-.328-1.008 2.912 2.912 0 01.057-.476q.051-.259.145-.655l.969-3.3a.28.28 0 00.032-.086c0-.02.009-.037.013-.049a.052.052 0 00-.009-.049l-.027-.033a.009.009 0 00-.011 0" fill="#fff"></path></g></g><path data-name="Path 21742" d="M216.642 327.59a2.481 2.481 0 01-1.186-.254 1.9 1.9 0 01-.714-.71l-.024-.046a2.125 2.125 0 01-.285-.871c0-.046-.008-.088-.013-.128a3.775 3.775 0 010-.877v-.034l1.7-11.362v-.052a.576.576 0 01.351-.541l.031-.011 2.987-.921a.548.548 0 01.728.595l-1.986 13.777a1.76 1.76 0 01-1.39 1.423l-.043.006a1.606 1.606 0 01-.156.006zm2.818-15.322" transform="translate(-212.396 -307.659)" fill="url(#Point10Icon_svg__c)"></path><g data-name="Group 30270"><path data-name="Path 21743" d="M7.799 10.593a11.7 11.7 0 00-.714 1.337 46 46 0 00-1.944 6.008q-.226.95-.827 1a.864.864 0 01-.589-.181 1.645 1.645 0 01-.494-.6 2.4 2.4 0 01-.248-.893 2.754 2.754 0 01.058-.854l1.533-10.1a.371.371 0 01.228-.292l1.689-.682a.163.163 0 01.222.174L4.781 18.025l-.018.167a.013.013 0 000 .006l.044.117a.525.525 0 01.031-.091.276.276 0 01.062-.092.012.012 0 000-.006q.01-.058.125-.575.119-.533.208-.992.263-1.165.533-2.154a17.405 17.405 0 01.7-2.023 7.21 7.21 0 01.969-1.725 1.719 1.719 0 011.163-.747" fill="#fff"></path></g></g></g></g></svg>                                            </button>
                                                </button>    
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="middle-site-inside-body-margin-interative-view-cmt">
                                            <div class="middle-site-inside-body-margin-interative-view-cmt-person">
                                                <div class="middle-site-inside-body-margin-interative-view-cmt-person-avt">
                                                    <i class="bi bi-person-circle text-muted"></i><span> Le Nam</span>
                                                </div>
                                            </div>
=======
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
                        <div class="Mty">
                        </div>
                        <div class="middle-site-inside-body">
                            <?php
                                require 'connect-db.php';
                                $sql = "SELECT * FROM posts";
                                $result = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_array($result)){
                            ?>        
                                <div class="middle-site-inside-body-posts">
                                    <div class="middle-site-inside-body-margin">
                                        <div class="middle-site-inside-body-margin-top">
                                            <div class="middle-site-inside-body-margin-top-row">
                                                <div class="avt-user ">
                                                    <i class="bi bi-person-circle text-muted"></i>
                                                </div>
                                                <div class="para text-muted middle-site-inside-body-top-left-name-user">
                                                    <h4 >
                                                        <?php
                                                        if(isset($_SESSION['isLoginOK']))
                                                        {
                                                            echo "<a class='nav-link name_user'>".$_SESSION['isLoginOK']."</a>";
                                                        }
                                                        ?>
                                                    </h4>
                                                </div>
                                                <button class="middle-site-inside-body-three-dots"><i class="bi bi-three-dots"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="middle-site-inside-body-margin-para">
                                            <p><?php echo $row['title']; ?></p>
                                        </div>
                                        <div class="middle-site-inside-body-margin-content">
                                            <img src="<?php echo $row['image']; ?>" class="upload-preview" style="width: inherit;"/>
                                        </div>
                                        <div class="middle-site-inside-body-margin-interative">
                                            <div class="middle-site-inside-body-margin-interative-brief">
                                                <div class="middle-site-inside-body-margin-interative-brief-like">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="MuiSvgIcon-root jss462" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><g data-name="Group 29727"><path data-name="Rectangle 6" fill="none" d="M0 0h24v24H0z"></path><g data-name="Group 74"><g data-name="Group 67"><path data-name="Path 62" d="M21 12.002a8.83 8.83 0 01-.291 2.273c-.006.028-.015.052-.021.08l-.055.19A8.991 8.991 0 0112.003 21a8.215 8.215 0 01-1.1-.071 9 9 0 1110.1-8.928z" fill="#24a8d8"></path></g><g data-name="Group 73"><path data-name="Path 91" d="M10.874 15.368l-.94 2.362a.43.43 0 00.4.589h3.673a.43.43 0 00.394-.257l.582-1.319a1.125 1.125 0 00.1-.454v-.16z" fill="#fff"></path><path data-name="Path 92" d="M10.774 15.606a1.279 1.279 0 00.857.186 1.645 1.645 0 001.29.508s.9.529 1.386.413a1.614 1.614 0 00.767-.428s-3.179-.873-3.21-.873-1.09.194-1.09.194z" fill="#e5e7de"></path><path data-name="Path 93" d="M12.571 9.143l-.775 1.412a4.368 4.368 0 01-1.805-1.586c-1.308-1.92-1.009-2.332-.716-2.527a.97.97 0 011.2.249c.056.051.175.18.328.357l.176.207c.622.736 1.592 1.888 1.592 1.888z" fill="#fff"></path><path data-name="Path 94" d="M10.975 7.252l-.99 1.477.814-1.685z" fill="#e5e7de"></path><path data-name="Path 95" d="M12.163 8.669a1.8 1.8 0 00-.37.714l.43-.642z" fill="#e5e7de"></path><path data-name="Path 96" d="M14.389 10.132l-.027.032-1.123 1.338.05-2a.129.129 0 01.2-.1 4.685 4.685 0 01.9.73z" fill="#e5e7de"></path><path data-name="Path 97" d="M14.389 10.131l-.027.032c-.1.08-.2.116-.245 0a3.624 3.624 0 00-.624-.767 4.686 4.686 0 01.896.735z" fill="#fff"></path><path data-name="Path 98" d="M15.851 11.781l-.005-.006-.014-.015a1.155 1.155 0 00-.48-.312l-.11-.037.062-.143a.884.884 0 00-.432-1.151.947.947 0 00-.421-.1.906.906 0 00-.15.012.951.951 0 00-.619.382.405.405 0 00-.023.034c-.008.011-.015.024-.022.036s-.027.046-.039.071l-.112.23-.008.015-.232.477.2-.417.229-.473a.852.852 0 00-.148-.958.839.839 0 00-.172-.139l-.273-.167a.942.942 0 00-.411-.137.964.964 0 00-.877.4c.325-.623.6-1.172.727-1.442a1.514 1.514 0 01.141-.243c.3-.421 1.154-1.955.468-2.357-.958-.562-1.867 1.33-2.164 1.754S8.597 11.162 8.3 11.687s-.7 1.691-.211 2.328a2.211 2.211 0 00.906.662 2.631 2.631 0 00.448.145 2.645 2.645 0 00.681.535 2.066 2.066 0 001.477.234.192.192 0 01.176.05 1.714 1.714 0 001.135.463.336.336 0 01.2.075 1.715 1.715 0 001.313.4 1.835 1.835 0 001.116-.829.886.886 0 00.153-.5v-.741l.413-1.691a1.163 1.163 0 00-.256-1.037zm-2.753-.206l.143-.295a6.728 6.728 0 01-.146.295z" fill="#fff"></path><path data-name="Path 99" d="M15.832 11.76a.668.668 0 00-.51-.044 15.409 15.409 0 00-1.2 2.283c.474-1.227 1.063-2.466 1.117-2.58v-.008l.11.037a1.155 1.155 0 01.483.312z" fill="#e5e7de"></path><path data-name="Path 100" d="M13.635 10.478a.672.672 0 01.047-.071.656.656 0 01-.047.071z" fill="#f5c99e"></path><path data-name="Path 101" d="M12.667 8.984a1.712 1.712 0 00-.89.677c-.342.506-1.158 2-1.259 2.186l1.272-2.46a.965.965 0 01.877-.403z" fill="#e5e7de"></path><path data-name="Path 102" d="M14.3 10.027s-.218.014-.934 1.119c0 0-.247.381-.315.521l.4-.813.03-.06.008-.015.173-.336a.4.4 0 01.023-.034.951.951 0 01.615-.382z" fill="#e5e7de"></path></g></g></g></svg>
                                                    <a href="">50k</a>
                                                </div>
                                                <div class="middle-site-inside-body-margin-interative-brief-cmt">
                                                    <a href="">10k  Bình luận</a>
                                                </div>
                                            </div>
                                            <hr >
                                            <div class="middle-site-inside-body-margin-interative-action">
                                                <div class="middle-site-inside-body-margin-interative-action-btn">
                                                    <button class="middle-site-inside-body-margin-interative-action-btn-inside">
                                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><g data-name="Group 28312"><path data-name="Rectangle 4393" fill="none" d="M0 0h24v24H0z"></path><g data-name="Group 27888"><path data-name="Path 20090" d="M8.77 17.222a4.375 4.375 0 01-1.465-1.059.4.4 0 00-.166-.085 2.558 2.558 0 01-1.317-.959c-.143-.219-.324-.415-.466-.635a1.911 1.911 0 01-.117-2.032c.606-1.132 1.271-2.234 1.919-3.344.2-.343.418-.677.643-1a.244.244 0 00-.015-.349 7.29 7.29 0 01-1.17-1.981 1.315 1.315 0 01.2-1.525 1.639 1.639 0 011.66-.373 4.029 4.029 0 011.458.774c.069.052.14.1.218.158.292-.331.571-.658.863-.974a7.207 7.207 0 011.873-1.565 1.86 1.86 0 011.4-.21 1.36 1.36 0 011 1.771 6.6 6.6 0 01-1.16 2.141c-.4.552-.812 1.1-1.249 1.688a6.565 6.565 0 00.534.387 2.53 2.53 0 011.475 1.627 2.057 2.057 0 011.509.319 1.851 1.851 0 01.827 1.236 2.858 2.858 0 01.007.777c-.012.12 0 .185.1.253a2.416 2.416 0 01.822 2.857c-.263.59-.474 1.2-.683 1.816a4.136 4.136 0 01-.728 1.327.527.527 0 00-.146.333 1.789 1.789 0 01-.275.987c-.293.607-.606 1.2-.923 1.8a1.106 1.106 0 01-1.037.622H8.725a1.21 1.21 0 01-1.168-1.684c.399-1.026.802-2.048 1.213-3.098zm1.868-7.967c.3-.431.6-.84.881-1.263.389-.591.749-1.2 1.143-1.787.426-.634.89-1.242 1.309-1.88a2.579 2.579 0 00.324-.782c.084-.335-.03-.478-.373-.518a.675.675 0 00-.39.073 6.233 6.233 0 00-.882.579 15.1 15.1 0 00-2.246 2.513 50.276 50.276 0 00-3.16 4.749 35.04 35.04 0 00-1.063 1.939.859.859 0 00-.118.586 2.346 2.346 0 001.629 1.719.689.689 0 01.319.215 2.907 2.907 0 002.688 1.1.951.951 0 01.845.251 2.183 2.183 0 001.458.615 1.014 1.014 0 01.688.295 1.741 1.741 0 00.936.472 1.085 1.085 0 001.061-.239 3.237 3.237 0 00.75-1.123c.258-.712.526-1.421.792-2.13a1.312 1.312 0 00-.663-1.621l-.625-.3c.025-.082.045-.142.06-.2a5.1 5.1 0 00.227-.936.918.918 0 00-.828-.9c-.3-.054-.594.165-.773.58a22.3 22.3 0 01-.221.5.626.626 0 01-.779.341.511.511 0 01-.224-.727 7.7 7.7 0 01.374-.793.912.912 0 00-.113-1.1 4.566 4.566 0 00-.594-.444.858.858 0 00-1.161.194c-.15.2-.3.408-.456.624zm4.749 9.888a3.068 3.068 0 01-2.391-.74.315.315 0 00-.174-.056 3.319 3.319 0 01-1.541-.521 1.426 1.426 0 00-.458-.2c-.29-.057-.589-.069-.882-.113a.177.177 0 00-.231.134c-.386 1-.782 2-1.169 3-.089.23 0 .341.256.345s.518 0 .777 0h4.637c.091 0 .232-.035.266-.1.304-.557.592-1.13.91-1.748zM9.54 5.612c-.24-.163-.468-.342-.718-.481a2.46 2.46 0 00-.7-.289.7.7 0 00-.531.11c-.082.072-.056.334.006.475.165.374.369.733.571 1.091.1.176.226.336.352.521z"></path></g></g></svg></span>
                                                        <span>Haha</span>
                                                    </button>
                                                    <button class="middle-site-inside-body-margin-interative-action-btn-inside">
                                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><g data-name="Group 29291"><g data-name="Group 29283"><g data-name="Group 29233"><g data-name="Group 29103"><path data-name="Rectangle 4726" fill="none" d="M0 0h24v24H0z"></path></g></g></g><g data-name="Group 29285"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.9" data-name="Group 29284"><path data-name="Path 15107" d="M16.384 4h-12.6a.777.777 0 00-.787.765v8.419a.777.777 0 00.787.765h2.365v3.826l5.51-3.827h4.725a.777.777 0 00.787-.765V4.765A.777.777 0 0016.384 4z"></path><path data-name="Path 15108" d="M12.341 16.239h1.574l3.936 3.24v-3.24h2.362a.8.8 0 00.787-.81V6.514a.8.8 0 00-.787-.81h-.787"></path></g></g></g></svg></span>
                                                        <span>Bình luận</span>
                                                    </button>
                                                    <button class="middle-site-inside-body-margin-interative-action-btn-inside">
                                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><defs><clipPath id="ShareAltIcon_svg__a"><path fill="none" stroke="currentColor" stroke-width="0.9" d="M0 0h18v18H0z"></path></clipPath></defs><g data-name="Group 29290"><g data-name="Group 29286"><g data-name="Group 29233"><g data-name="Group 29103"><path data-name="Rectangle 4726" fill="none" d="M0 0h24v24H0z"></path></g></g></g><g data-name="Vector Smart Object7 copy" transform="translate(3 3)" clip-path="url(#ShareAltIcon_svg__a)"><path d="M17.55 8.592L9.403.45v5.2c-5.964.575-8.287 4.718-8.957 11.9 2.713-3.721 5.556-5.957 8.958-5.948v5.13z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.9"></path></g></g></svg></span>
                                                        <span>Chia sẻ</span>
                                                    </button>
                                                    <button class="middle-site-inside-body-margin-interative-action-btn-inside">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><defs><linearGradient id="Point10Icon_svg__b" x1="0.5" y1="1" x2="0.5" gradientUnits="objectBoundingBox"><stop offset="0" stop-color="#008ad9"></stop><stop offset="0.883" stop-color="#0dc6ff"></stop></linearGradient><linearGradient id="Point10Icon_svg__c" x1="0.5" y1="1" x2="0.5" gradientUnits="objectBoundingBox"><stop offset="0.235" stop-color="#008dda"></stop><stop offset="0.679" stop-color="#3fd1ff"></stop></linearGradient><clipPath id="Point10Icon_svg__a"><path data-name="Path 21740" d="M348.512 317.007a7.956 7.956 0 002.166 5.6 7.58 7.58 0 0011.119 0 8.27 8.27 0 000-11.189 7.647 7.647 0 00-11.106 0 7.885 7.885 0 00-2.179 5.589zm4.442 0a3.93 3.93 0 01.878-2.551 3.127 3.127 0 014.841-.014 3.921 3.921 0 01.863 2.565 4.05 4.05 0 01-.863 2.58 3.031 3.031 0 01-4.826-.029 3.964 3.964 0 01-.892-2.551z" transform="translate(-348.512 -309.029)" fill="none"></path></clipPath></defs><g data-name="Group 30324"><path data-name="Rectangle 4908" fill="none" d="M0 0h24v24H0z"></path><g data-name="Group 30323"><g data-name="Group 30289"><g data-name="Group 30288" transform="translate(6.539 4)" clip-path="url(#Point10Icon_svg__a)"><g data-name="Group 30287"><path data-name="Path 21806" d="M2.264 2.336A7.078 7.078 0 00.538 4.942a8.138 8.138 0 00-.539 3.059h3.7L5.358 3.86z" fill="#0fbdff"></path><path data-name="Path 21807" d="M-.001 8.001a8.432 8.432 0 00.539 3.033 7.608 7.608 0 001.726 2.64c1.029-.506 2.059-1.026 3.089-1.532l-1.65-4.141z" fill="#008ad9"></path><path data-name="Path 21808" d="M2.228 2.336l3.131 1.523 2.372-1.021V-.003a7.1 7.1 0 00-3.134.647 8.407 8.407 0 00-2.369 1.692z" fill="#3fd1ff"></path><path data-name="Path 21809" d="M2.265 13.66a7.182 7.182 0 002.3 1.706 8.239 8.239 0 003.168.639v-2.844l-2.381-1.019z" fill="#009cf4"></path><path data-name="Path 21810" d="M7.729 13.161v2.844a7.311 7.311 0 003.161-.673 6.943 6.943 0 002.306-1.672l-3.094-1.518z" fill="#0fbdff"></path><path data-name="Path 21811" d="M7.729-.003v2.841l2.373 1.021 3.123-1.523a7.334 7.334 0 00-2.5-1.76 8.091 8.091 0 00-2.996-.579z" fill="#66e2ff"></path><path data-name="Path 21812" d="M10.106 3.863l1.658 4.141h3.7a8.112 8.112 0 00-.542-3.029 7.439 7.439 0 00-1.695-2.636c-1.029.504-2.09 1.014-3.121 1.524z" fill="#76ecff"></path><path data-name="Path 21813" d="M11.764 8.001l-1.658 4.141L13.2 13.66a8.042 8.042 0 001.724-2.631A8.479 8.479 0 0015.466 8z" fill="#3fd1ff"></path><path data-name="Path 21814" d="M10.106 12.142l.923 3.156-3.3-2.137z" fill="#32cdff"></path><path data-name="Path 21815" d="M5.352 12.142l-.584 3.326 2.965-2.307z" fill="#00adea"></path><path data-name="Path 21816" d="M7.725 8.001l2.381 4.141-2.373 1.019-2.381-1.019z" fill="#00abf7"></path><path data-name="Path 21817" d="M10.106 3.86l1.658 4.141-1.658 4.141-2.381-4.141z" fill="#4ad4ff"></path><path data-name="Path 21818" d="M5.361 3.86l2.365 4.141-2.373 4.141-1.65-4.141z" fill="#00bff2"></path><path data-name="Path 21819" d="M7.733 2.838l2.373 1.021L7.725 8 5.36 3.859z" fill="#00bdff"></path><path data-name="Path 21820" d="M5.361 3.86L3.702 8.001l1.65 4.141 2.381 1.019 2.373-1.019 1.658-4.141-1.658-4.141-2.373-1.021z" fill="#3fd1ff" style="mix-blend-mode: soft-light; isolation: isolate;"></path><path data-name="Path 21821" d="M10.106 3.859l.483-3.216-2.86 2.195z" fill="#7becff"></path><path data-name="Path 21822" d="M4.597.644l3.134 2.194-2.372 1.021z" fill="#6ce2ff"></path><path data-name="Path 21823" d="M11.764 8.001l3.022 3.338-4.68.8z" fill="#6ce2ff"></path><path data-name="Path 21824" d="M11.764 8.001l3.018-3.229-4.68-.913z" fill="#88f4ff"></path><path data-name="Path 21825" d="M5.363 3.86L3.704 8.001.863 4.534" fill="#0dc6ff"></path><path data-name="Path 21826" d="M5.352 12.144l-4.679-.973 3.029-3.168z" fill="#009cf4"></path></g></g></g><g data-name="Group 30290"><path data-name="Path 21827" d="M341.621 452.584s1.151-1.252 2.3-.948c0 0 1.726.44.745 3.249a7.99 7.99 0 00-.609 2.4c.079.174.338.2.778.1 0 0 .745-.3 1.015.169a1.013 1.013 0 01-.44 1.218 3.557 3.557 0 01-3.655.711s-1.489-.846-.677-3.046l1.388-2.809s.448-1.046-.237.914a6.142 6.142 0 01-1.21 2.406l.527-3.658" transform="translate(-334.558 -442.764)" fill="url(#Point10Icon_svg__b)"></path><g data-name="Group 30332"><g data-name="Group 30271"><path data-name="Path 21744" d="M7.954 10.15a1.32 1.32 0 01.955-.462.616.616 0 01.553.294 1.38 1.38 0 01.153.749 4.066 4.066 0 01-.154.943l-.809 2.717a6.157 6.157 0 00-.133.842q-.015.514.34.525a1.12 1.12 0 00.418-.053 2.825 2.825 0 00.365-.134c.211-.1.4-.2.4-.2s.16-.076.593-.339a.1.1 0 01.132.141 2.258 2.258 0 01-.327.352 2.4 2.4 0 01-2.02.723 1.492 1.492 0 01-1.024-.451 1.4 1.4 0 01-.328-1.008 2.912 2.912 0 01.057-.476q.051-.259.145-.655l.969-3.3a.28.28 0 00.032-.086c0-.02.009-.037.013-.049a.052.052 0 00-.009-.049l-.027-.033a.009.009 0 00-.011 0" fill="#fff"></path></g></g><path data-name="Path 21742" d="M216.642 327.59a2.481 2.481 0 01-1.186-.254 1.9 1.9 0 01-.714-.71l-.024-.046a2.125 2.125 0 01-.285-.871c0-.046-.008-.088-.013-.128a3.775 3.775 0 010-.877v-.034l1.7-11.362v-.052a.576.576 0 01.351-.541l.031-.011 2.987-.921a.548.548 0 01.728.595l-1.986 13.777a1.76 1.76 0 01-1.39 1.423l-.043.006a1.606 1.606 0 01-.156.006zm2.818-15.322" transform="translate(-212.396 -307.659)" fill="url(#Point10Icon_svg__c)"></path><g data-name="Group 30270"><path data-name="Path 21743" d="M7.799 10.593a11.7 11.7 0 00-.714 1.337 46 46 0 00-1.944 6.008q-.226.95-.827 1a.864.864 0 01-.589-.181 1.645 1.645 0 01-.494-.6 2.4 2.4 0 01-.248-.893 2.754 2.754 0 01.058-.854l1.533-10.1a.371.371 0 01.228-.292l1.689-.682a.163.163 0 01.222.174L4.781 18.025l-.018.167a.013.013 0 000 .006l.044.117a.525.525 0 01.031-.091.276.276 0 01.062-.092.012.012 0 000-.006q.01-.058.125-.575.119-.533.208-.992.263-1.165.533-2.154a17.405 17.405 0 01.7-2.023 7.21 7.21 0 01.969-1.725 1.719 1.719 0 011.163-.747" fill="#fff"></path></g></g></g></g></svg>                                            </button>
                                                    </button>    
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="middle-site-inside-body-margin-interative-view-cmt">
                                                <div class="middle-site-inside-body-margin-interative-view-cmt-person">
                                                    <div class="middle-site-inside-body-margin-interative-view-cmt-person-avt">
                                                        <i class="bi bi-person-circle text-muted"></i><span> Le Nam</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="Mty">
                                    </div>
                                </div>
                            <?php
                                }
                            ?>
                            
                            <div class="middle-site-inside-body-posts">
                                <div class="middle-site-inside-body-margin">
                                    <div class="middle-site-inside-body-margin-top">
                                        <div class="middle-site-inside-body-margin-top-row">
                                            <div class="avt-user ">
                                                <i class="bi bi-person-circle text-muted"></i>
                                            </div>
                                            <div class="para text-muted middle-site-inside-body-top-left-name-user">
                                                <h4 >
                                                    <?php
                                                    if(isset($_SESSION['isLoginOK']))
                                                    {
                                                        echo "<a class='nav-link name_user'>".$_SESSION['isLoginOK']."</a>";
                                                    }
                                                    ?>
                                                </h4>
                                            </div>
                                            <button class="middle-site-inside-body-three-dots"><i class="bi bi-three-dots"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="middle-site-inside-body-margin-para">
                                        <p>middle-site-inside-bodymiddle-site-inside-bodymiddle-site-inside-bodymiddle-site-inside-bodymiddle-site-inside-bodymiddle-site-inside-body</p>
                                    </div>
                                    <div class="middle-site-inside-body-margin-content">
                                        image is here!
                                    </div>
                                    <div class="middle-site-inside-body-margin-interative">
                                        <div class="middle-site-inside-body-margin-interative-brief">
                                            <div class="middle-site-inside-body-margin-interative-brief-like">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="MuiSvgIcon-root jss462" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><g data-name="Group 29727"><path data-name="Rectangle 6" fill="none" d="M0 0h24v24H0z"></path><g data-name="Group 74"><g data-name="Group 67"><path data-name="Path 62" d="M21 12.002a8.83 8.83 0 01-.291 2.273c-.006.028-.015.052-.021.08l-.055.19A8.991 8.991 0 0112.003 21a8.215 8.215 0 01-1.1-.071 9 9 0 1110.1-8.928z" fill="#24a8d8"></path></g><g data-name="Group 73"><path data-name="Path 91" d="M10.874 15.368l-.94 2.362a.43.43 0 00.4.589h3.673a.43.43 0 00.394-.257l.582-1.319a1.125 1.125 0 00.1-.454v-.16z" fill="#fff"></path><path data-name="Path 92" d="M10.774 15.606a1.279 1.279 0 00.857.186 1.645 1.645 0 001.29.508s.9.529 1.386.413a1.614 1.614 0 00.767-.428s-3.179-.873-3.21-.873-1.09.194-1.09.194z" fill="#e5e7de"></path><path data-name="Path 93" d="M12.571 9.143l-.775 1.412a4.368 4.368 0 01-1.805-1.586c-1.308-1.92-1.009-2.332-.716-2.527a.97.97 0 011.2.249c.056.051.175.18.328.357l.176.207c.622.736 1.592 1.888 1.592 1.888z" fill="#fff"></path><path data-name="Path 94" d="M10.975 7.252l-.99 1.477.814-1.685z" fill="#e5e7de"></path><path data-name="Path 95" d="M12.163 8.669a1.8 1.8 0 00-.37.714l.43-.642z" fill="#e5e7de"></path><path data-name="Path 96" d="M14.389 10.132l-.027.032-1.123 1.338.05-2a.129.129 0 01.2-.1 4.685 4.685 0 01.9.73z" fill="#e5e7de"></path><path data-name="Path 97" d="M14.389 10.131l-.027.032c-.1.08-.2.116-.245 0a3.624 3.624 0 00-.624-.767 4.686 4.686 0 01.896.735z" fill="#fff"></path><path data-name="Path 98" d="M15.851 11.781l-.005-.006-.014-.015a1.155 1.155 0 00-.48-.312l-.11-.037.062-.143a.884.884 0 00-.432-1.151.947.947 0 00-.421-.1.906.906 0 00-.15.012.951.951 0 00-.619.382.405.405 0 00-.023.034c-.008.011-.015.024-.022.036s-.027.046-.039.071l-.112.23-.008.015-.232.477.2-.417.229-.473a.852.852 0 00-.148-.958.839.839 0 00-.172-.139l-.273-.167a.942.942 0 00-.411-.137.964.964 0 00-.877.4c.325-.623.6-1.172.727-1.442a1.514 1.514 0 01.141-.243c.3-.421 1.154-1.955.468-2.357-.958-.562-1.867 1.33-2.164 1.754S8.597 11.162 8.3 11.687s-.7 1.691-.211 2.328a2.211 2.211 0 00.906.662 2.631 2.631 0 00.448.145 2.645 2.645 0 00.681.535 2.066 2.066 0 001.477.234.192.192 0 01.176.05 1.714 1.714 0 001.135.463.336.336 0 01.2.075 1.715 1.715 0 001.313.4 1.835 1.835 0 001.116-.829.886.886 0 00.153-.5v-.741l.413-1.691a1.163 1.163 0 00-.256-1.037zm-2.753-.206l.143-.295a6.728 6.728 0 01-.146.295z" fill="#fff"></path><path data-name="Path 99" d="M15.832 11.76a.668.668 0 00-.51-.044 15.409 15.409 0 00-1.2 2.283c.474-1.227 1.063-2.466 1.117-2.58v-.008l.11.037a1.155 1.155 0 01.483.312z" fill="#e5e7de"></path><path data-name="Path 100" d="M13.635 10.478a.672.672 0 01.047-.071.656.656 0 01-.047.071z" fill="#f5c99e"></path><path data-name="Path 101" d="M12.667 8.984a1.712 1.712 0 00-.89.677c-.342.506-1.158 2-1.259 2.186l1.272-2.46a.965.965 0 01.877-.403z" fill="#e5e7de"></path><path data-name="Path 102" d="M14.3 10.027s-.218.014-.934 1.119c0 0-.247.381-.315.521l.4-.813.03-.06.008-.015.173-.336a.4.4 0 01.023-.034.951.951 0 01.615-.382z" fill="#e5e7de"></path></g></g></g></svg>
                                                <a href="">50k</a>
                                            </div>
                                            <div class="middle-site-inside-body-margin-interative-brief-cmt">
                                                <a href="">10k  Bình luận</a>
                                            </div>
                                        </div>
                                        <hr >
                                        <div class="middle-site-inside-body-margin-interative-action">
                                            <div class="middle-site-inside-body-margin-interative-action-btn">
                                                <button class="middle-site-inside-body-margin-interative-action-btn-inside">
                                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><g data-name="Group 28312"><path data-name="Rectangle 4393" fill="none" d="M0 0h24v24H0z"></path><g data-name="Group 27888"><path data-name="Path 20090" d="M8.77 17.222a4.375 4.375 0 01-1.465-1.059.4.4 0 00-.166-.085 2.558 2.558 0 01-1.317-.959c-.143-.219-.324-.415-.466-.635a1.911 1.911 0 01-.117-2.032c.606-1.132 1.271-2.234 1.919-3.344.2-.343.418-.677.643-1a.244.244 0 00-.015-.349 7.29 7.29 0 01-1.17-1.981 1.315 1.315 0 01.2-1.525 1.639 1.639 0 011.66-.373 4.029 4.029 0 011.458.774c.069.052.14.1.218.158.292-.331.571-.658.863-.974a7.207 7.207 0 011.873-1.565 1.86 1.86 0 011.4-.21 1.36 1.36 0 011 1.771 6.6 6.6 0 01-1.16 2.141c-.4.552-.812 1.1-1.249 1.688a6.565 6.565 0 00.534.387 2.53 2.53 0 011.475 1.627 2.057 2.057 0 011.509.319 1.851 1.851 0 01.827 1.236 2.858 2.858 0 01.007.777c-.012.12 0 .185.1.253a2.416 2.416 0 01.822 2.857c-.263.59-.474 1.2-.683 1.816a4.136 4.136 0 01-.728 1.327.527.527 0 00-.146.333 1.789 1.789 0 01-.275.987c-.293.607-.606 1.2-.923 1.8a1.106 1.106 0 01-1.037.622H8.725a1.21 1.21 0 01-1.168-1.684c.399-1.026.802-2.048 1.213-3.098zm1.868-7.967c.3-.431.6-.84.881-1.263.389-.591.749-1.2 1.143-1.787.426-.634.89-1.242 1.309-1.88a2.579 2.579 0 00.324-.782c.084-.335-.03-.478-.373-.518a.675.675 0 00-.39.073 6.233 6.233 0 00-.882.579 15.1 15.1 0 00-2.246 2.513 50.276 50.276 0 00-3.16 4.749 35.04 35.04 0 00-1.063 1.939.859.859 0 00-.118.586 2.346 2.346 0 001.629 1.719.689.689 0 01.319.215 2.907 2.907 0 002.688 1.1.951.951 0 01.845.251 2.183 2.183 0 001.458.615 1.014 1.014 0 01.688.295 1.741 1.741 0 00.936.472 1.085 1.085 0 001.061-.239 3.237 3.237 0 00.75-1.123c.258-.712.526-1.421.792-2.13a1.312 1.312 0 00-.663-1.621l-.625-.3c.025-.082.045-.142.06-.2a5.1 5.1 0 00.227-.936.918.918 0 00-.828-.9c-.3-.054-.594.165-.773.58a22.3 22.3 0 01-.221.5.626.626 0 01-.779.341.511.511 0 01-.224-.727 7.7 7.7 0 01.374-.793.912.912 0 00-.113-1.1 4.566 4.566 0 00-.594-.444.858.858 0 00-1.161.194c-.15.2-.3.408-.456.624zm4.749 9.888a3.068 3.068 0 01-2.391-.74.315.315 0 00-.174-.056 3.319 3.319 0 01-1.541-.521 1.426 1.426 0 00-.458-.2c-.29-.057-.589-.069-.882-.113a.177.177 0 00-.231.134c-.386 1-.782 2-1.169 3-.089.23 0 .341.256.345s.518 0 .777 0h4.637c.091 0 .232-.035.266-.1.304-.557.592-1.13.91-1.748zM9.54 5.612c-.24-.163-.468-.342-.718-.481a2.46 2.46 0 00-.7-.289.7.7 0 00-.531.11c-.082.072-.056.334.006.475.165.374.369.733.571 1.091.1.176.226.336.352.521z"></path></g></g></svg></span>
                                                    <span>Haha</span>
                                                </button>
                                                <button class="middle-site-inside-body-margin-interative-action-btn-inside">
                                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><g data-name="Group 29291"><g data-name="Group 29283"><g data-name="Group 29233"><g data-name="Group 29103"><path data-name="Rectangle 4726" fill="none" d="M0 0h24v24H0z"></path></g></g></g><g data-name="Group 29285"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.9" data-name="Group 29284"><path data-name="Path 15107" d="M16.384 4h-12.6a.777.777 0 00-.787.765v8.419a.777.777 0 00.787.765h2.365v3.826l5.51-3.827h4.725a.777.777 0 00.787-.765V4.765A.777.777 0 0016.384 4z"></path><path data-name="Path 15108" d="M12.341 16.239h1.574l3.936 3.24v-3.24h2.362a.8.8 0 00.787-.81V6.514a.8.8 0 00-.787-.81h-.787"></path></g></g></g></svg></span>
                                                    <span>Bình luận</span>
                                                </button>
                                                <button class="middle-site-inside-body-margin-interative-action-btn-inside">
                                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><defs><clipPath id="ShareAltIcon_svg__a"><path fill="none" stroke="currentColor" stroke-width="0.9" d="M0 0h18v18H0z"></path></clipPath></defs><g data-name="Group 29290"><g data-name="Group 29286"><g data-name="Group 29233"><g data-name="Group 29103"><path data-name="Rectangle 4726" fill="none" d="M0 0h24v24H0z"></path></g></g></g><g data-name="Vector Smart Object7 copy" transform="translate(3 3)" clip-path="url(#ShareAltIcon_svg__a)"><path d="M17.55 8.592L9.403.45v5.2c-5.964.575-8.287 4.718-8.957 11.9 2.713-3.721 5.556-5.957 8.958-5.948v5.13z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.9"></path></g></g></svg></span>
                                                    <span>Chia sẻ</span>
                                                </button>
                                                <button class="middle-site-inside-body-margin-interative-action-btn-inside">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><defs><linearGradient id="Point10Icon_svg__b" x1="0.5" y1="1" x2="0.5" gradientUnits="objectBoundingBox"><stop offset="0" stop-color="#008ad9"></stop><stop offset="0.883" stop-color="#0dc6ff"></stop></linearGradient><linearGradient id="Point10Icon_svg__c" x1="0.5" y1="1" x2="0.5" gradientUnits="objectBoundingBox"><stop offset="0.235" stop-color="#008dda"></stop><stop offset="0.679" stop-color="#3fd1ff"></stop></linearGradient><clipPath id="Point10Icon_svg__a"><path data-name="Path 21740" d="M348.512 317.007a7.956 7.956 0 002.166 5.6 7.58 7.58 0 0011.119 0 8.27 8.27 0 000-11.189 7.647 7.647 0 00-11.106 0 7.885 7.885 0 00-2.179 5.589zm4.442 0a3.93 3.93 0 01.878-2.551 3.127 3.127 0 014.841-.014 3.921 3.921 0 01.863 2.565 4.05 4.05 0 01-.863 2.58 3.031 3.031 0 01-4.826-.029 3.964 3.964 0 01-.892-2.551z" transform="translate(-348.512 -309.029)" fill="none"></path></clipPath></defs><g data-name="Group 30324"><path data-name="Rectangle 4908" fill="none" d="M0 0h24v24H0z"></path><g data-name="Group 30323"><g data-name="Group 30289"><g data-name="Group 30288" transform="translate(6.539 4)" clip-path="url(#Point10Icon_svg__a)"><g data-name="Group 30287"><path data-name="Path 21806" d="M2.264 2.336A7.078 7.078 0 00.538 4.942a8.138 8.138 0 00-.539 3.059h3.7L5.358 3.86z" fill="#0fbdff"></path><path data-name="Path 21807" d="M-.001 8.001a8.432 8.432 0 00.539 3.033 7.608 7.608 0 001.726 2.64c1.029-.506 2.059-1.026 3.089-1.532l-1.65-4.141z" fill="#008ad9"></path><path data-name="Path 21808" d="M2.228 2.336l3.131 1.523 2.372-1.021V-.003a7.1 7.1 0 00-3.134.647 8.407 8.407 0 00-2.369 1.692z" fill="#3fd1ff"></path><path data-name="Path 21809" d="M2.265 13.66a7.182 7.182 0 002.3 1.706 8.239 8.239 0 003.168.639v-2.844l-2.381-1.019z" fill="#009cf4"></path><path data-name="Path 21810" d="M7.729 13.161v2.844a7.311 7.311 0 003.161-.673 6.943 6.943 0 002.306-1.672l-3.094-1.518z" fill="#0fbdff"></path><path data-name="Path 21811" d="M7.729-.003v2.841l2.373 1.021 3.123-1.523a7.334 7.334 0 00-2.5-1.76 8.091 8.091 0 00-2.996-.579z" fill="#66e2ff"></path><path data-name="Path 21812" d="M10.106 3.863l1.658 4.141h3.7a8.112 8.112 0 00-.542-3.029 7.439 7.439 0 00-1.695-2.636c-1.029.504-2.09 1.014-3.121 1.524z" fill="#76ecff"></path><path data-name="Path 21813" d="M11.764 8.001l-1.658 4.141L13.2 13.66a8.042 8.042 0 001.724-2.631A8.479 8.479 0 0015.466 8z" fill="#3fd1ff"></path><path data-name="Path 21814" d="M10.106 12.142l.923 3.156-3.3-2.137z" fill="#32cdff"></path><path data-name="Path 21815" d="M5.352 12.142l-.584 3.326 2.965-2.307z" fill="#00adea"></path><path data-name="Path 21816" d="M7.725 8.001l2.381 4.141-2.373 1.019-2.381-1.019z" fill="#00abf7"></path><path data-name="Path 21817" d="M10.106 3.86l1.658 4.141-1.658 4.141-2.381-4.141z" fill="#4ad4ff"></path><path data-name="Path 21818" d="M5.361 3.86l2.365 4.141-2.373 4.141-1.65-4.141z" fill="#00bff2"></path><path data-name="Path 21819" d="M7.733 2.838l2.373 1.021L7.725 8 5.36 3.859z" fill="#00bdff"></path><path data-name="Path 21820" d="M5.361 3.86L3.702 8.001l1.65 4.141 2.381 1.019 2.373-1.019 1.658-4.141-1.658-4.141-2.373-1.021z" fill="#3fd1ff" style="mix-blend-mode: soft-light; isolation: isolate;"></path><path data-name="Path 21821" d="M10.106 3.859l.483-3.216-2.86 2.195z" fill="#7becff"></path><path data-name="Path 21822" d="M4.597.644l3.134 2.194-2.372 1.021z" fill="#6ce2ff"></path><path data-name="Path 21823" d="M11.764 8.001l3.022 3.338-4.68.8z" fill="#6ce2ff"></path><path data-name="Path 21824" d="M11.764 8.001l3.018-3.229-4.68-.913z" fill="#88f4ff"></path><path data-name="Path 21825" d="M5.363 3.86L3.704 8.001.863 4.534" fill="#0dc6ff"></path><path data-name="Path 21826" d="M5.352 12.144l-4.679-.973 3.029-3.168z" fill="#009cf4"></path></g></g></g><g data-name="Group 30290"><path data-name="Path 21827" d="M341.621 452.584s1.151-1.252 2.3-.948c0 0 1.726.44.745 3.249a7.99 7.99 0 00-.609 2.4c.079.174.338.2.778.1 0 0 .745-.3 1.015.169a1.013 1.013 0 01-.44 1.218 3.557 3.557 0 01-3.655.711s-1.489-.846-.677-3.046l1.388-2.809s.448-1.046-.237.914a6.142 6.142 0 01-1.21 2.406l.527-3.658" transform="translate(-334.558 -442.764)" fill="url(#Point10Icon_svg__b)"></path><g data-name="Group 30332"><g data-name="Group 30271"><path data-name="Path 21744" d="M7.954 10.15a1.32 1.32 0 01.955-.462.616.616 0 01.553.294 1.38 1.38 0 01.153.749 4.066 4.066 0 01-.154.943l-.809 2.717a6.157 6.157 0 00-.133.842q-.015.514.34.525a1.12 1.12 0 00.418-.053 2.825 2.825 0 00.365-.134c.211-.1.4-.2.4-.2s.16-.076.593-.339a.1.1 0 01.132.141 2.258 2.258 0 01-.327.352 2.4 2.4 0 01-2.02.723 1.492 1.492 0 01-1.024-.451 1.4 1.4 0 01-.328-1.008 2.912 2.912 0 01.057-.476q.051-.259.145-.655l.969-3.3a.28.28 0 00.032-.086c0-.02.009-.037.013-.049a.052.052 0 00-.009-.049l-.027-.033a.009.009 0 00-.011 0" fill="#fff"></path></g></g><path data-name="Path 21742" d="M216.642 327.59a2.481 2.481 0 01-1.186-.254 1.9 1.9 0 01-.714-.71l-.024-.046a2.125 2.125 0 01-.285-.871c0-.046-.008-.088-.013-.128a3.775 3.775 0 010-.877v-.034l1.7-11.362v-.052a.576.576 0 01.351-.541l.031-.011 2.987-.921a.548.548 0 01.728.595l-1.986 13.777a1.76 1.76 0 01-1.39 1.423l-.043.006a1.606 1.606 0 01-.156.006zm2.818-15.322" transform="translate(-212.396 -307.659)" fill="url(#Point10Icon_svg__c)"></path><g data-name="Group 30270"><path data-name="Path 21743" d="M7.799 10.593a11.7 11.7 0 00-.714 1.337 46 46 0 00-1.944 6.008q-.226.95-.827 1a.864.864 0 01-.589-.181 1.645 1.645 0 01-.494-.6 2.4 2.4 0 01-.248-.893 2.754 2.754 0 01.058-.854l1.533-10.1a.371.371 0 01.228-.292l1.689-.682a.163.163 0 01.222.174L4.781 18.025l-.018.167a.013.013 0 000 .006l.044.117a.525.525 0 01.031-.091.276.276 0 01.062-.092.012.012 0 000-.006q.01-.058.125-.575.119-.533.208-.992.263-1.165.533-2.154a17.405 17.405 0 01.7-2.023 7.21 7.21 0 01.969-1.725 1.719 1.719 0 011.163-.747" fill="#fff"></path></g></g></g></g></svg>                                            </button>
                                                </button>    
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="middle-site-inside-body-margin-interative-view-cmt">
                                            <div class="middle-site-inside-body-margin-interative-view-cmt-person">
                                                <div class="middle-site-inside-body-margin-interative-view-cmt-person-avt">
                                                    <i class="bi bi-person-circle text-muted"></i><span> Le Nam</span>
                                                </div>
                                            </div>
<<<<<<< HEAD
=======
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
>>>>>>> 72a96e9e0bd57c48d0a88f2e583c50e02eff4d4f
>>>>>>> 9a9078e77d7f8099e1625b4df62138308145acd1
=======
>>>>>>> 2c4c05e3b18a72c2c918c0f5e60cf1f3376c03e5
                                        </div>
                                    </div>
                                </div>
                                <div class="Mty">
                                </div>
                                <div class="Mty">
                                </div>
                            </div>
                            
<<<<<<< HEAD
=======
<<<<<<< HEAD
                            
=======
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
>>>>>>> 72a96e9e0bd57c48d0a88f2e583c50e02eff4d4f
>>>>>>> 9a9078e77d7f8099e1625b4df62138308145acd1
=======
>>>>>>> 2c4c05e3b18a72c2c918c0f5e60cf1f3376c03e5
                        </div>
                    </div>
                </div>
            </div>
            <div class="right-site col-md-3">
                <div class="right-site-inside">
                    <div class="img img-affilate">
                        <a href=""><img class="img-inside" src="images/affiliate-hhll.jpg" alt=""></a>
                        
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
                            <a href="">
                                <div class="img-sexy-girl-inside"
                                    style="background-image:url('images/sexy-girl.jpg');filter:brightness(90%) ">
                                    <h3 class="text-img">Top resort Phú Quốc sang – xịn – giá cực mịn cho chuyến du lịch đầu
                                        năm</h3>
                                </div>
                            </a>
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
    <div class="upload-box" >
        <form action="process-add-post.php" id="uploadForm"  method="post" enctype="multipart/form-data">
<<<<<<< HEAD
=======
<<<<<<< HEAD
    <div class="upload-box" >
        <form action="process-add-post.php" id="uploadForm"  method="post" enctype="multipart/form-data">
=======
    <div class="upload-box">
>>>>>>> 72a96e9e0bd57c48d0a88f2e583c50e02eff4d4f
>>>>>>> 9a9078e77d7f8099e1625b4df62138308145acd1
=======
>>>>>>> 2c4c05e3b18a72c2c918c0f5e60cf1f3376c03e5
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 9a9078e77d7f8099e1625b4df62138308145acd1
=======
>>>>>>> 2c4c05e3b18a72c2c918c0f5e60cf1f3376c03e5
                        <div>
                            <div class="upload-box-news-body-inside-right">
                                <div class="avt-user ">
                                    <i class="bi bi-person-circle text-muted"></i>
                                </div>
                                <div class="upload-box-news-body-inside-right-ele">
                                    <div class="upload-box-news-body-inside-right-ele-box">
                                        <div class="para text-muted upload-box-news-body-inside-right-ele-user">
                                            <h4>
                                                <?php
                                                if(isset($_SESSION['isLoginOK']))
                                                {
                                                    echo "<a class='nav-link name_user'>".$_SESSION['isLoginOK']."</a>";
                                                }
                                                ?>
                                            </h4>
                                        </div>
                                        <div class="upload-box-news-body-inside-right-ele-box-select">
                                            <select name="cb-mode-post" id="" class="cb-mode-post">
                                                <option value="">Công khai</option>
                                                <option value="">Bạn bè</option>
                                                <option value="">Chỉ mình tôi</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="upload-box-news-body-inside-caption">
                            <textarea name="title" id="field"  placeholder="Haha, hôm nay bạn thế nào?"></textarea>
                        </div>
                            <div class="upload-box-news-body-inside-box">
                                <div id="targetLayer" name="targetLayer" type="file"></div>
                            </div>  
                            <div class="upload-box-news-body-inside-add-bg-emo">
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
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
>>>>>>> 72a96e9e0bd57c48d0a88f2e583c50e02eff4d4f
>>>>>>> 9a9078e77d7f8099e1625b4df62138308145acd1
=======
>>>>>>> 2c4c05e3b18a72c2c918c0f5e60cf1f3376c03e5
                            <button style="border: none;outline:none;color:orange " class="btn-bg">
                                <i class="bi bi-palette"></i>
                            </button>
                            <button style="border: none;outline:none;color:orange" class="btn-emotion">
                                <i class="bi bi-emoji-smile"></i>
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 9a9078e77d7f8099e1625b4df62138308145acd1
=======
>>>>>>> 2c4c05e3b18a72c2c918c0f5e60cf1f3376c03e5
                            </button>   
                            </div>
                            <div class="upload-box-news-body-inside-add-info">
                                <label  for="image" class="custom-file-upload box-add-info" style="background-color: rgb(93, 210, 252);">
                                    <i class="bi bi-image"></i> 
                                </label>
                                <input type='file' name='image' id='image'>
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
                            <button type="submit" name="btnSubmit" id="btnSubmit" class="upload-box-news-body-inside-btn-share-inside">
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
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
>>>>>>> 72a96e9e0bd57c48d0a88f2e583c50e02eff4d4f
>>>>>>> 9a9078e77d7f8099e1625b4df62138308145acd1
=======
>>>>>>> 2c4c05e3b18a72c2c918c0f5e60cf1f3376c03e5
                                <span>Chia sẻ</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <form action="process-add-post-ex.php">
<<<<<<< HEAD
=======
<<<<<<< HEAD
        </form>
        <form action="process-add-post-ex.php">
=======

>>>>>>> 72a96e9e0bd57c48d0a88f2e583c50e02eff4d4f
>>>>>>> 9a9078e77d7f8099e1625b4df62138308145acd1
=======
>>>>>>> 2c4c05e3b18a72c2c918c0f5e60cf1f3376c03e5
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
        </form>
            
<<<<<<< HEAD
=======
<<<<<<< HEAD
        </form>
            
=======
>>>>>>> 72a96e9e0bd57c48d0a88f2e583c50e02eff4d4f
>>>>>>> 9a9078e77d7f8099e1625b4df62138308145acd1
=======
>>>>>>> 2c4c05e3b18a72c2c918c0f5e60cf1f3376c03e5
        </div>
</main>

<?php
        
        require "template/footer.php";
    ?>
