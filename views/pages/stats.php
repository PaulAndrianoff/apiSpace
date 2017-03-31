
<?php
include_once "../../includes/config.php";
include_once "../../api_data_retrieve.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Space Stats</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="../../src/build/reset.min.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../../src/build/style.min.css">
    <link rel="stylesheet" href="../../src/build/graph_style.css">
</head>
<body>
    <div class="container-stats">
        <header>
            <h1 class="title-stats">SPACE STATS</h1>
            <p class="paragraph-stats-presentation">
                CHECK OUT THE CRITERIA OF YOUR CHOICE BY NAVIGATING ON THE WORLD MAP
            </p>
        </header>
        <div class="main">
            <section class="section-map">
                <div id="vmap" class="map"></div>
            </section>
            <section class="section-right">
                <article class="agency agency-one">
                    <div class="description-agency"></div>
                    <div class="graphic-agency">
                        <div class="graph-section1">
                            <div class="graphic-agency-title"></div>
                            <div class="graphic-agency-full">
                                <div class="graphic-agency-current-purcent"></div>
                            </div>
                        </div>
                        <div class="graph-section1">
                            <div class="graphic-agency-title"></div>
                            <div class="graphic-agency-full">
                                <div class="graphic-agency-current-purcent"></div>
                            </div>
                        </div>
                        <div class="graph-section1">
                            <div class="graphic-agency-title"></div>
                            <div class="graphic-agency-full">
                                <div class="graphic-agency-current-purcent"></div>
                            </div>
                        </div>
                        <div class="graph-section1">
                            <div class="graphic-agency-title"></div>
                            <div class="graphic-agency-full">
                                <div class="graphic-agency-current-purcent"></div>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="agency agency-two">
                    <div class="description-agency"></div>
                    <div class="graphic-agency">
                        <div class="graph-section2">
                            <div class="graphic-agency-title"></div>
                            <div class="graphic-agency-full">
                                <div class="graphic-agency-current-purcent"></div>
                            </div>
                        </div>
                        <div class="graph-section2">
                            <div class="graphic-agency-title"></div>
                            <div class="graphic-agency-full">
                                <div class="graphic-agency-current-purcent"></div>
                            </div>
                        </div>
                        <div class="graph-section2">
                            <div class="graphic-agency-title"></div>
                            <div class="graphic-agency-full">
                                <div class="graphic-agency-current-purcent"></div>
                            </div>
                        </div>
                        <div class="graph-section2">
                            <div class="graphic-agency-title"></div>
                            <div class="graphic-agency-full">
                                <div class="graphic-agency-current-purcent"></div>
                            </div>
                        </div>
                    </div>
                </article>
            </section>
        </div>
    </div>


    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="../../src/js/jquery.vmap.js"></script>
    <script type="text/javascript" src="../../src/js/jquery.vmap.world.js" charset="utf-8"></script>
    <script type="text/javascript" src="../../src/js/jquery.vmap.sampledata.js"></script>



    <script type="text/javascript">
    var agency  = JSON.parse('<?php echo json_encode($agency) ;?>');
    var countries  = JSON.parse('<?php echo json_encode($location) ;?>');
    var launches  = JSON.parse('<?php echo json_encode($launch) ;?>');
    var missions  = JSON.parse('<?php echo json_encode($mission) ;?>');
    var pads  = JSON.parse('<?php echo json_encode($pad) ;?>');
    var rockets  = JSON.parse('<?php echo json_encode($rocket) ;?>');
    var status  = JSON.parse('<?php echo json_encode($status) ;?>');
    </script>

    <script type="text/javascript" src="../../src/js/main.js"></script>


</body>
</html>
