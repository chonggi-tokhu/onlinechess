<!DOCTYPE html>
<html lang="en">

<head>
    <script src="/docs/chess/martycopy1_files/jquery-3.4.1.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://code.jquery.com/jquery-3.6.3.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>q0 community home of colourgrey</title>
    <link rel="stylesheet" href="./bootstrap4/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <style>
        @keyframes aggroanie1 {
            from {
                background: darkred;
            }

            12.5% {
                background: #eee;
            }

            25% {
                background: #8181f2;
                ;
            }

            37.5% {
                background: #eee;
            }

            50% {
                background: #7a02bf;
            }

            62.5% {
                background: #eee;
            }

            75% {
                background: orange;
            }

            87.5% {
                background: #eee;
            }

            to {
                background: olive;
            }
        }

        .merong8989 {
            animation: aggroanie1 1s infinite;
        }
    </style>
</head>

<body>
    <input type="range" name="" max="" min="" id="">
    <button id="mutel2">음악 켜기</button>
    <button id="mutel1">음악 끄기</button>
    <audio autoplay id="bgm1" loop src="https://blog.kakaocdn.net/dn/mo0EP/btr0VJxJdgj/sNKI6IYXaKVgjebkcxTwg0/tfile.mp3"></audio>
    <script>
        $("#bgm1")[0].volume = 0.2;
        $("#bgm1")[0].currentTime = 6;
        $("#mutel1").click(function() {
            document.getElementById("bgm1").pause();
        });
        $("#mutel2").click(function() {
            document.getElementById("bgm1").play();
        });
    </script>
    <div>
        <h2 class="merong8989">컬그거임</h2>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="./home.php">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="./home.php">HOME <span class="sr-only">(current)</span></a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="./index.php">write a posting</a>
                    </li>
                    <li class="nav-item">
                        <a href="./docs/tutorial/doc.php" class="nav-link">docs</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">menu</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="./postlist.php">posts list</a>
                            <a class="dropdown-item" href="./default.php">subhome</a>
                            <a href="./mobilesubdefault.php" class="dropdown-item-colourorange btn-orange">mobile sub default</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" onclick="myalert1function(400)"><span class=" btn btn-danger">function</span></a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li>
                    <li>
                        <?php
                        error_reporting(0);
                        $kongjisoljong1 = $_POST['kongji1'];
                        $kongjisoljong2 = $_POST['kongji2'];
                        $kongjidul = ("공지사항");
                        echo $kongjidul;
                        ?>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
        <br>
        <div class="btn-group-vertical">
            <div class="btn-group dropright">
                <button type="button" class="btn btn-success">mushrooms</button>
                <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split-type1" data-toggle="dropdown" aria-expanded="false">
                    <span class="sr-only">Toggle Dropright</span>
                </button>
                <div class="dropdown-menu">
                    <h5>주름버섯목</h5>
                    <a href="./docs/pages/agaricales/amanitaceae" class="dropdown-item">광대버섯과</a>
                    <a href="./docs/pages/agaricales/mycenaceae" class="dropdown-item">애주름버섯과</a>
                    <a href="./docs/pages/agaricales/agaricaceae" class="dropdown-item">주름버섯과</a>
                    <a href="./docs/pages/agaricales/cortinaceae" class="dropdown-item">끈적버섯과</a>
                    <a href="./docs/pages/agaricales/strophariaceae" class="dropdown-item">독청버섯과</a>
                    <a href="./docs/pages/agaricales/marasmiaceae" class="dropdown-item">낙엽버섯과</a>
                    <a href="./docs/pages/agaricales/psathyrellaceae" class="dropdown-item">눈물버섯과</a>
                    <a href="./docs/pages/agaricales/inocybaceae" class="dropdown-item">땀버섯과</a>
                    <a href="./docs/pages/agaricales/physalacreaceae" class="dropdown-item">뽕나무버섯과</a>
                    <a href="./docs/pages/agaricales/pluteaceae" class="dropdown-item">난버섯과</a>
                    <a href="./docs/pages/agaricales/hygrophoraceae" class="dropdown-item">벚꽃버섯과</a>
                    <a href="./docs/pages/agaricales/tricholomataceae" class="dropdown-item">송이버섯과</a>
                    <a href="./docs/pages/agaricales/entolmataceae" class="dropdown-item">외대버섯과</a>
                    <a href="./docs/pages/agaricales/hydnagiaceae" class="dropdown-item">졸각버섯과</a>
                    <a href="./docs/pages/agaricales/repetobasidiaceae" class="dropdown-item">이끼버섯과</a>
                    <a href="./docs/pages/agaricales/bolbitiaceae" class="dropdown-item">소똥버섯과</a>
                    <a href="./docs/pages/agaricales/lyophyllaceae" class="dropdown-item">만가닥버섯과</a>
                    <a href="./docs/pages/agaricales/others" class="dropdown-item">기타</a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row centrefixedbox">
                <div class="col-4">
                    <header>
                        <h1 class="colourdef">q0 co<span onclick="this.style.color='var(--nblue)';">mmun</span>ity</h1>
                        <h3>hello!</h3>
                    </header>
                </div>
                <div class="w-100"></div>
                <div class="col-4"></div>
                <div class="col-4">
                    <p contenteditable="true" id="gotourl1">enter url...</p>
                    <button class="btn btn-primary" onclick="gotourlfunction1()">go to url</button>
                </div>
                <script>
                    function gotourlfunction1() {
                        var myurl1 = document.getElementById("gotourl1").innerHTML;
                        window.location.replace(myurl1);
                    }
                </script>
                <div class="col-4"></div>

            </div>
            <br>
            <div class="row newpagespost1">
                <div class="col-12"></div>
                <div class="w-100"></div>
                <div class="col-12 nav-item-dropdown btn-group">
                    <button class="btn colourpink">체스 웃짤 목록</button>
                    <button class="btn colourpink dropdown-toggle dropdown-toggle-split-type1" data-toggle="dropdown" role="button">
                        <span class="sr-only">웃긴짤들</span>
                    </button>
                    <div class="dropdown-menu">
                        <?php
                        $folder1 = "./docs/pages/";
                        if (is_dir($folder1)) {
                            if ($dh = opendir($folder1)) {
                                while (($file = readdir($dh)) !== false) {
                                    echo "<a href=./docs/pages/" . $file . " class=dropdown-item>" . $file . "</a><br>";
                                }
                                closedir($dh);
                            }
                        }
                        ?>
                    </div>

                </div>
            </div>

        </div>
        <script>
            function myalert1function(times) {
                alert("hello!")
                for (n = 0; n < times; n++) {
                    alert((times - n) + "hello!")
                }
                alert("0hello!")
            }
        </script>
    </div>
    <?php
    error_reporting(0);
    ?>
</body>

</html>
