<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <link rel="shortcut icon" href="images/download2.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>Music App</title>
</head>

<body>
    <header>
        <!-------- Side Menu Content Area --------->
        <div class="menu-side">
            <h1>Playlist</h1>
            <div class="playlist">
                <h4 class="active"><span></span><i class='bx bxs-music'></i>Playlist</h4>
                <h4><span></span><i class='bx bxs-music'></i>Last Listening</h4>
                <h4><span></span><i class='bx bxs-music'></i>Recommended</h4>
            </div>
            <div class="menu-song">
                <li class="songItem">
                    <span>01</span>
                    <img src="images/23.jpeg" alt="">
                    <h5>On My Way <br>
                        <div class="subtitle">Alan Walker</div>
                    </h5>
                    <i class='bx playListplay bxs-caret-right-circle' id="1"></i>
                </li>
                <li class="songItem">
                    <span>02</span>
                    <img src="images/23.jpeg" alt="">
                    <h5>On My Way <br>
                        <div class="subtitle">Alan Walker</div>
                    </h5>
                    <i class='bx playListplay bxs-caret-right-circle' id="2"></i>
                </li>
                <li class="songItem">
                    <span>03</span>
                    <img src="images/23.jpeg" alt="">
                    <h5>On My Way <br>
                        <div class="subtitle">Alan Walker</div>
                    </h5>
                    <i class='bx playListplay bxs-caret-right-circle' id="3"></i>
                </li>
                <li class="songItem">
                    <span>04</span>
                    <img src="images/23.jpeg" alt="">
                    <h5>On My Way <br>
                        <div class="subtitle">Alan Walker</div>
                    </h5>
                    <i class='bx playListplay bxs-caret-right-circle' id="4"></i>
                </li>
                <li class="songItem">
                    <span>05</span>
                    <img src="images/23.jpeg" alt="">
                    <h5>On My Way <br>
                        <div class="subtitle">Alan Walker</div>
                    </h5>
                    <i class='bx playListplay bxs-caret-right-circle' id="5"></i>
                </li>
                <li class="songItem">
                    <span>06</span>
                    <img src="images/23.jpeg" alt="">
                    <h5>On My Way <br>
                        <div class="subtitle">Alan Walker</div>
                    </h5>
                    <i class='bx playListplay bxs-caret-right-circle' id="6"></i>
                </li>
                <li class="songItem">
                    <span>07</span>
                    <img src="images/23.jpeg" alt="">
                    <h5>On My Way <br>
                        <div class="subtitle">Alan Walker</div>
                    </h5>
                    <i class='bx playListplay bxs-caret-right-circle' id="7"></i>
                </li>
                <li class="songItem">
                    <span>08</span>
                    <img src="images/23.jpeg" alt="">
                    <h5>On My Way <br>
                        <div class="subtitle">Alan Walker</div>
                    </h5>
                    <i class='bx playListplay bxs-caret-right-circle' id="8"></i>
                </li>
                <li class="songItem">
                    <span>09</span>
                    <img src="images/23.jpeg" alt="">
                    <h5>On My Way <br>
                        <div class="subtitle">Alan Walker</div>
                    </h5>
                    <i class='bx playListplay bxs-caret-right-circle' id="9"></i>
                </li>
            </div>
        </div>

        <!-------- Songs Contents Area --------->
        <div class="song-side">
            <nav>
                <ul>
                    <li>Discover <span></span></li>
                    <li>MY LIBRARY</li>
                    <li>RADIO</li>
                </ul>
                <div class="search">
                    <i class='bx bx-search'></i>
                    <input type="text" placeholder="Search Music..."/>
                    <div class="search-results">
                        <!-- <a href="" class="card">
                            <img src="images/23.jpeg" alt="">
                            <div class="content">
                                Heat Waves
                                <div class="subtitle">Glass Animmals</div>
                            </div>
                        </a> -->
                    </div>
                </div>
                <div class="user">

                    <img src="images/download.png" alt="">
                </div>
            </nav>
            <div class="content">
                <h1>Alan Walker-Fade</h1>
                <p>You were the shadow to my light did you feel us Another start you fade <br> Away afraid our aim is
                    out of sight Wan see us Alive</p>
                <div class="buttons">
                    <button>PLAY</button>
                    <button>FOLLOW</button>
                </div>
            </div>

            <div class="popular-song">
                <div class="h4">
                    <h4>Popular Song</h4>
                    <div class="btn-5">
                        <i class='bx bx-left-arrow-alt' id="pop-left"></i>
                        <i class='bx bx-right-arrow-alt' id="pop-right"></i>
                    </div>
                </div>
                <div class="pop-song">
                    <li class="songItem">
                        <div class="img-play">
                            <img src="images/23.jpeg" alt="">
                            <i class='bx playListplay bxs-caret-right-circle' id="10"></i>
                        </div>
                        <h5>On My Way <br>
                            <div class="subtitle">Alan Walker</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img-play">
                            <img src="images/23.jpeg" alt="">
                            <i class='bx playListplay bxs-caret-right-circle' id="11"></i>
                        </div>
                        <h5>On My Way <br>
                            <div class="subtitle">Alan Walker</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img-play">
                            <img src="images/23.jpeg" alt="">
                            <i class='bx playListplay bxs-caret-right-circle' id="12"></i>
                        </div>
                        <h5>On My Way <br>
                            <div class="subtitle">Alan Walker</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img-play">
                            <img src="images/23.jpeg" alt="">
                            <i class='bx playListplay bxs-caret-right-circle' id="13"></i>
                        </div>
                        <h5>On My Way <br>
                            <div class="subtitle">Alan Walker</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img-play">
                            <img src="images/23.jpeg" alt="">
                            <i class='bx playListplay bxs-caret-right-circle' id="14"></i>
                        </div>
                        <h5>On My Way <br>
                            <div class="subtitle">Alan Walker</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img-play">
                            <img src="images/23.jpeg" alt="">
                            <i class='bx playListplay bxs-caret-right-circle' id="15"></i>
                        </div>
                        <h5>On My Way <br>
                            <div class="subtitle">Alan Walker</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img-play">
                            <img src="images/23.jpeg" alt="">
                            <i class='bx playListplay bxs-caret-right-circle' id="16"></i>
                        </div>
                        <h5>On My Way <br>
                            <div class="subtitle">Alan Walker</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img-play">
                            <img src="images/23.jpeg" alt="">
                            <i class='bx playListplay bxs-caret-right-circle' id="17"></i>
                        </div>
                        <h5>On My Way <br>
                            <div class="subtitle">Alan Walker</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img-play">
                            <img src="images/23.jpeg" alt="">
                            <i class='bx playListplay bxs-caret-right-circle' id="18"></i>
                        </div>
                        <h5>On My Way <br>
                            <div class="subtitle">Alan Walker</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img-play">
                            <img src="images/23.jpeg" alt="">
                            <i class='bx playListplay bxs-caret-right-circle' id="19"></i>
                        </div>
                        <h5>On My Way <br>
                            <div class="subtitle">Alan Walker</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img-play">
                            <img src="images/23.jpeg" alt="">
                            <i class='bx playListplay bxs-caret-right-circle' id="20"></i>
                        </div>
                        <h5>On My Way <br>
                            <div class="subtitle">Alan Walker</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img-play">
                            <img src="imag23.jpeg" alt="">
                            <i class='bx playListplay bxs-caret-right-circle' id="21"></i>
                        </div>
                        <h5>On My Way <br>
                            <div class="subtitle">Alan Walker</div>
                        </h5>
                    </li>
                </div>
            </div>
            <div class="popular-artists">
                <div class="h4">
                    <h4>Popular Artists</h4>
                    <div class="btn-5">
                        <i class='bx bx-left-arrow-alt' id="pop-art-left"></i>
                        <i class='bx bx-right-arrow-alt' id="pop-art-right"></i>
                    </div>
                </div>
                <div class="item">
                    <li>
                        <a href="darshanr.html"><img src="images/art5.jpeg" alt=""></a>
                    </li>
                    <li>
                        <img src="images/art5.jpeg" alt="">
                    </li>
                    <li>
                        <img src="images/art5.jpeg" alt="">
                    </li>
                    <li>
                        <img src="images/art5.jpeg" alt="">
                    </li>
                    <li>
                        <img src="images/art5.jpeg" alt="">
                    </li>
                    <li>
                        <img src="images/art5.jpeg" alt="">
                    </li>
                    <li>
                        <img src="images/art5.jpeg" alt="">
                    </li>
                    <li>
                        <img src="images/art5.jpeg" alt="">
                    </li>
                    <li>
                        <img src="images/art5.jpeg" alt="">
                    </li>
                    <li>
                        <img src="images/art5.jpeg" alt="">
                    </li>
                    <li>
                        <img src="images/art5.jpeg" alt="">
                    </li>
                    <li>
                        <img src="images/art5.jpeg" alt="">
                    </li>
                    <li>
                        <img src="images/art5.jpeg" alt="">
                    </li>
                    <li>
                        <img src="images/art5.jpeg" alt="">
                    </li>
                    <li>
                        <img src="images/art5.jpeg" alt="">
                    </li>
                    <li>
                        <img src="images/art5.jpeg" alt="">
                    </li>
                    <li>
                        <img src="images/art5.jpeg" alt="">
                    </li>
                </div>
            </div>
        </div>


        <!-------- Song Menu Contents Area --------->
        <div class="bottom-side">
            <div class="wave" id="wave">
                <div class="wave1"></div>
                <div class="wave1"></div>
                <div class="wave1"></div>
            </div>
            <img src="images/23.jpeg" alt="" id="poster-bottom-play">
            <h5 id="title">
                Heat Waves
                <div class="subtitle">Glass Animals</div>
            </h5>
            <div class="icon">
                <i class='bx shuffle bxs-music'>next</i>
                <i class='bx bx-skip-previous' id="back"></i>
                <i class='bx bx-play' id="masterPlay"></i>
                <i class='bx bx-skip-next' id="next"></i>
                <a href="" download id="cloud1"><i class='bx bxs-cloud-download'></i></a>
            </div>
            <span id="currStart">0:00</span>
            <div class="bar">
                <input type="range" id="seek" min="0" max="100">
                <div class="bar2" id="bar2"></div>
                <div class="dot"></div>
            </div>
            <span id="currEnd">0:30</span>
            <div class="vol">
                <i class='bx bxs-volume-full' id="vol-icon"></i>
                <!-- <i class='bx bxs-volume-low' ></i> -->
                <input type="range" id="vol" min="0" max="100">
                <div class="vol-bar"></div>
                <div class="dot" id="vol-dot"></div>
            </div>
        </div>
    </header>
    <script src="app.js"></script>
</body>

</html>