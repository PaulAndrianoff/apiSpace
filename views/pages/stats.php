
<?php 
include_once "../../includes/config.php";
include_once "../../api_data_retrieve.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Space Stats</title>
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
                <!-- MAP : -->

                <div id="vmap"></div>

            </section>
            <section class="section-right">
                <article class="agency agency-one">
                    <div class="description-agency">
                        <h3>agency a</h3>
                    </div>
                    <div class="graphic-agency">
                        <figure class="chart" data-percent="75">
                            <figcaption>graph1</figcaption>
                            <svg width="200" height="200">
                                <circle class="outer" cx="95" cy="95" r="85" transform="rotate(-90, 95, 95)"/>
                            </svg>
                        </figure>
                    </div>
                    <div class="wrapper-close">
                        <a href="#" class="close">X</a>
                    </div>
                </article>
                <article class="agency agency-two">
                    <div class="description-agency">
                        <h3>agency a</h3>
                    </div>
                    <div class="graphic-agency">
                    </div>
                    <div class="wrapper-close">
                        <a href="#" class="close">X</a>
                    </div>
                </article>
            </section>

            <!-- <section class="section-right">

        </section> -->
    </div>
</div>

</body>
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
	console.log(status);
</script>
	
</html>
