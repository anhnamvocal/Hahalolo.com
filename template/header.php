<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bảng tin | Hahalolo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
<<<<<<< HEAD
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  
</head>
<body>
<header>
        <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">TLU - Administration</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                    </li>
                   
                    <?php
                        if(isset($_SESSION['isLoginOK']))
                        {
                            echo "<a class='nav-link'>Welcome: ".$_SESSION['isLoginOK']."</a>";
                            echo "<a class='nav-link text-danger' href='logout.php'>Logout</a>";
                        }
                    ?>
                    
=======
    <script src="http://code.jquery.com/jquery-1.5.js"></script>
  
</head>
<body>
    <!-- <header>
        <div id="container">
            <a href="#"><img src="img\Capture.PNG" alt="icon"></a>
            <input type="text" placeholder="Tìm kiếm..."/>
            <nav>
                <ul class="ctn-center">
                    <li><a href="#"><img src="img\2983803.png" alt="news"></a></li>
                    <li><a href="#"><img src="img\3942054.png" alt="trai nghiem"></a></li>
                    <li><a href="#"><img src="img\3405685.png" alt="locations"></a></li>
                    <li><a href="#"><img src="img\2086058.png" alt="hotels"></a></li>
                    <li><a href="#"><img src="img\1085493.png" alt="may bay"></a></li>
                    <li><a href="#"><img src="img\2330438.png" alt="thue xe"></a></li>
                    <li><a href="#"><img src="img\1656850.png" alt="mua sam"></a></li>
>>>>>>> 72a96e9e0bd57c48d0a88f2e583c50e02eff4d4f
                </ul>
                
                </div>
            </div>
            </nav>
        </div>
    </header> -->