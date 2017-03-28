<!DOCTYPE html>
<html>
    <head>
        <title>Map</title>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
        <!--  appel du css  -->
        <link href="src/styles/style.css" media="screen" rel="stylesheet" type="text/css"/>


    </head>
    <body>
        <div id="vmap" style="width: 600px; height: 400px;"></div>

        <!--DEBUT Graphs-->
        <div id="cible" style="display:none;">
            <div class="clearBoth"></div>
            <section class="container">


                <!-- Graph 1 -->
                <figure class="chart" data-percent="75">
                    <figcaption>graph1</figcaption>
                    <svg width="200" height="200">
                        <circle class="outer" cx="95" cy="95" r="85" transform="rotate(-90, 95, 95)"/>
                    </svg>
                </figure>

                <!-- Graph 2 -->
                <figure class="chart" data-percent="75">
                    <figcaption>graph2</figcaption>
                    <svg width="200" height="200">
                        <circle class="outer" cx="95" cy="95" r="85" transform="rotate(-90, 95, 95)"/>
                    </svg>
                </figure>

                <!-- Graph 3 -->
                <figure class="chart" data-percent="50">
                    <figcaption>graph3</figcaption>
                    <svg width="200" height="200">
                        <circle class="outer" cx="95" cy="95" r="85" transform="rotate(-90, 95, 95)"/>
                    </svg>
                </figure>

                <!-- Graph 4 -->
                <figure class="chart" data-percent="25">
                    <figcaption>graph4</figcaption>
                    <svg width="200" height="200">
                        <circle class="outer" cx="95" cy="95" r="85" transform="rotate(-90, 95, 95)"/>
                    </svg>
                </figure>

            </section>
            <div class="clearBoth"></div>
        </div>
        <!--FIN Graphs-->
    </body>

    <!--  appel des scripts  -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="src/js/jquery.vmap.js"></script>
    <script type="text/javascript" src="src/js/jquery.vmap.world.js" charset="utf-8"></script>
    <script type="text/javascript" src="src/js/jquery.vmap.sampledata.js"></script>
    <script src="src/js/main.js"></script>
</html>