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
                        <div class="img">
                            <img class="img-inside" src="images/bay.jpg" alt="">
                        </div>
                        <div class="weather">
                            <div class="weather-inside">
                                <h5 class="where">Thach That, VN</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="middle-site col-md-6">
                    <div class="middle-site-inside">
                        v0LyOwvv0LyOwvv0LyOwvv0Ly
                    </div>
                </div>
                <div class="right-site col-md-3">
                    <div class="right-site-inside">
                        v0LyOwvv0LyOwvv0LyOwvv0Ly
                    </div>
                </div>
            </div>
        </div>
    </main>