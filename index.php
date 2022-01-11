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
                            <a class="text-weather-last text-weather text-muted" href="https://openweathermap.org/">Cập nhật lúc 08:44 PM. OpenWeather</a>
                            
                        </div>
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

                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </main>