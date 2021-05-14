<!DOCTYPE html>
<html>
<head>
    <style>
        .bkgd-img {
            width: 100;
            height: 100;
            background: url(https://awik.io/demo/background-image-zoom/traffic3.png);
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            transition: all 1s;
            z-index: -1;
        }

        a {
            text-decoration: none;
            color: rgba(255, 255, 255, 0.5);
            transition: 0.5s;
        }

        .bkgd {
            height: 100%;
            width: 100%;
            /*height: 400px;*/
            padding-bottom: 60%;
            background-size: cover;
            overflow: hidden;
            transition: all 0.5s;
        }

        .txt {
            width: 100%;
            position: absolute;
            bottom: 0px;
            transition: 0.5s;
            /* padding-bottom: 60%; */
            background-size: cover;
        }

        .txt_title {
            position: absolute;
            width: 100%;
            /*left: 0px;*/
            padding-top: 10px;
            bottom: 0px;

            text-align: right;
            color: rgba(255, 255, 255, 0.5);
            transition: 0.5s;
            background: linear-gradient(to bottom, rgba(16, 27, 30, 0) 0%, rgba(12, 2, 2, 1) 90%);
        }

        .txt_author {
            position: absolute;
            width: 100%;

            bottom: -16px;
            text-align: right;
            padding-right: 2px;
            color: rgba(255, 255, 255, 255);
            transition: 0.5s;
            background-color: rgba(12, 2, 2, 0.9);
        }

        .bkgd:hover .txt {
            position: absolute;
            bottom: 16px;
            /*text-align: right;*/
            /*color: white;*/
            transition: 0.5s;
        }

        /*.bkgd:hover {*/
        /*    transform: scale(1.1);*/
        /*    transition: 0.5s;*/
        /*}*/

        .bkgd:hover a {
            transition: 0.5s;
            color: rgba(255, 255, 255, 1);
        }

        #divBackground {
           
            /* background-image: url(https://picsum.photos/900/600?); */
            position: absolute;
        }

        img#imgBackground {
            position: absolute;
            top: 0;
            left: 0;
            /* z-index: -1; */
           max-width: 100%;
           max-height: 100%;
           
        }

    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A layout example that shows off a responsive photo gallery.">
    <title>Photo Gallery &ndash; Layout Examples &ndash; Pure</title>
    <link rel="stylesheet" href="/css/pure/pure-min.css">
    <link rel="stylesheet" href="/css/pure/grids-responsive-min.css">
    <link rel="stylesheet" href="/css/layouts/gallery/styles.css">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <script type="text/javascript">

    </script>


</head>
<body>







<div class="header">
    <div class="pure-menu pure-menu-horizontal">
        <a class="pure-menu-heading" href="">Photo Gallery</a>

        <ul class="pure-menu-list">
            <li class="pure-menu-item pure-menu-selected"><a href="#" class="pure-menu-link">Home</a></li>
            <li class="pure-menu-item"><a href="#" class="pure-menu-link">Blog</a></li>
            <li class="pure-menu-item"><a href="#" class="pure-menu-link">About</a></li>
        </ul>
    </div>
</div>
<div class="pure-g">
    <div class="photo-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-3" style="height: 60%; overflow: hidden">
        <div class="bkgd" style="background-image: url('k65mini.jpg');">

            <div class="txt">


                <div class="txt_title">
                    <a style="right: 2px; font-size: 150% "
                       href="https://www.corsair.com/us/en/Categories/Products/Gaming-Keyboards/RGB-Mechanical-Gaming-Keyboards/K65-RGB-MINI-60%25-Mechanical-Gaming-Keyboard/p/CH-9194014-NA">
                        Corsair K65 RGB Mini – a stunning 60% gaming keyboard</a>
                </div>
                <div class="txt_author">
                        <span style="color: #aaaaaa; font-size: 80%; ">by
                        <a style="right: 2px; color:#ffffff; " href="http://www.facebook.com/024zealous">
                            Damien Mason</a>
                        </span>
                </div>
            </div>

        </div>
    </div>

    <div class="photo-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-3" style="height: 60%; overflow: hidden">
        <div class="bkgd"
             style="background-image: url('1_3Osuu98QDhGCMirXSMmczQ.jpeg');"


        >
        

            <div class="txt">
                <div class="txt_title">
                    <a style=" font-size: 150%; right: 2px; "
                       href="https://www.corsair.com/us/en/Categories/Products/Gaming-Keyboards/RGB-Mechanical-Gaming-Keyboards/K65-RGB-MINI-60%25-Mechanical-Gaming-Keyboard/p/CH-9194014-NA">
                        Can We Find Hope in the Japanese Art of Kintsugi?</a>
                </div>
                <div class="txt_author">
                        <span style="color: #aaaaaa; font-size: 80%; ">by
                        <a style="right: 2px; color:#ffffff; " href="http://www.facebook.com/024zealous">
                            Jennifer Geer</a>
                        </span>
                </div>
            </div>

        </div>
    </div>

    <div class="photo-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-3" style="height: 60%">
        <div class="bkgd refresh"  id="0101" style="background-image: url('https://picsum.photos/900/600');">
            
            <div class="txt">
                
                <div class="txt_title">
                    <a style="right: 2px; font-size: 150%"
                       href="https://www.corsair.com/us/en/Categories/Products/Gaming-Keyboards/RGB-Mechanical-Gaming-Keyboards/K65-RGB-MINI-60%25-Mechanical-Gaming-Keyboard/p/CH-9194014-NA">
                        Can We Find Hope in the Japanese Art of Kintsugi?</a>
                </div>
                <div class="txt_author">
                        <span style="color: #aaaaaa; font-size: 80%; ">by
                        <a style="right: 2px; color:#ffffff;" href="http://www.facebook.com/024zealous">
                            Jennifer Geer</a>
                        </span>
                </div>
            </div>

        </div>
    </div>
</div>
<script>
    $(function () {
        $('.refresh').click(function () {
            var url = "https://picsum.photos/900/600?" + new Date().getSeconds();

            document.getElementById('0101').style.backgroundImage = "url(" + url + ")";

            //$(this).css("background-image", "url(" + url +  ")");
        });
    });
    //
    // function reloadbackground() {
    //     var d = new Date().getSeconds();
    //     var url = "https://picsum.photos/900/600?" + d;
    //     document.getElementById('0101').style.backgroundImage = "url(" + url + ")";
    //
    // };
    //
    // function myFunction() {
    //     setInterval(document.getElementById('0101').onLoad.reloadbackground(), 1000);
    // }
    // function reloadBackground1() {
    //     url = "https://picsum.photos/900/600?" + new Date().getTime();
    //     img = document.getElementById("0101");
    //     img.style.backgroundImage = "url(" + url + ")";
    // }
    // function reloadBackground2() {
    //     url = "https://picsum.photos/900/600?" + new Date().getTime();
    //     img = document.getElementById("imgBackground")
    //     img.src = url;
    // }
    // window.setInterval(reloadBackground2, 5000);


</script>


</body>
</html>
