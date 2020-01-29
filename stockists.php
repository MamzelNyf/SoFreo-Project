<!doctype html>
<html lang="en">
	<head>
		<title>So Freo - Stockists</title>
		<?php 
		$meta = 'Find all the amazing places where to buy and/or taste the Veggie Paté! ';
		include 'includes/meta.php';
		?>
    </head>
    <body>
        <?php 
        include 'includes/nav.php';
        ?>
        <main>
            <div class="pic">
                <h1>Where to find our products? </h1>
                <div class="bold">
                    <p>This page contains all the amazing places where you can buy and/or taste the Veggie Paté!</p>
                </div>
            </div>
            <br class="clearfloat">
            <section class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md-4 article-block px-4">
                        <h3>Meet us at the market!</h3>
                        <p>Every week-end, come and meet Alex at the market, fortnightly at Subiaco Farmers Market and Mt Claremont market.
                        <br>You will find all of our events, tasting and market dates on our Calendar!</p>
                        <h3>Too Far? You can also buy online.</h3>
                        <p>With Perth Organics, add the Veggie Paté to your box of organic and local products and get it delivered to your place.</p>
                        <ul class="text-white">
                            <li>Add some <a href="https://www.perthorganics.com/vegpate230g" target="_blank" rel="noopener noreferrer"> Veggie Paté</a> to your basket<br></li>
                            <li>I prefer to order the tasty <a href="https://www.perthorganics.com/veggie-pate-THAI-so-freo-230g" target="_blank" rel="noopener noreferrer">Thai Veggie Paté</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-4"><img srcset="img/market-sm.jpg 500w, img/market-lg.jpg 1440w" src="img/market-lg.jpg" class="cover animated no-animation fadeIn rounded" alt="So Freo Market"></div>
                    <div class="col-12 col-md-4 map" id="calendar"><iframe src="https://calendar.google.com/calendar/embed?height=400&amp;wkst=2&amp;bgcolor=%23e6a756&amp;ctz=Australia%2FPerth&amp;src=MnZxYXBkYnJ1ZDlucmgxOXU1YmFjaWU4YWdAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;src=MWlqN2hydTc3c2NuMGc2YnJiN29ibDU4bjRAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;src=ZmJhMDdwMmtwdGswdnM3N2dza2xxMDJjbHNAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;src=OGo0dmphamgxZmRnMm9yZGNlOGl0cjlrdThAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;color=%23b87014&amp;color=%233366CC&amp;color=%23227F63&amp;color=%23DD5511&amp;title=Come%2C%20meet%20us%20%26%20get%20your%20favorite%20Veggie%20Pat%C3%A9!&amp;showTz=0&amp;showPrint=0&amp;showDate=1&amp;showCalendars=0" style="border-width:0" width="600" height="400" frameborder="0" scrolling="no"></iframe></div>
                    </div>
            </section>
            <section class="container-fluid">
                <div class="row mt-4">
                    <div class="col-12 col-md-6 article-block order-md-2 px-4">
                        <h3>Our favorite places</h3>
                        <p>Check for new places where you can find your favorite Veggie Paté!
                        <p>As soon as we find new places to supply our products, we will let you know on Facebook &amp; Instagram!</p>
                        <div class="cell">
                            <ul>
                                <li><a href="https://www.mannawholefoods.com.au/" target="_blank" rel="noopener noreferrer">Manna Wholefood Cafe</a></li>
                                <li><a href="https://www.facebook.com/IGARossmoyne/" target="_blank" rel="noopener noreferrer">Rossmoyne IGA</a></li>
                                <li><a href="https://peachesfresh.com.au/" target="_blank" rel="noopener noreferrer">Peaches Fresh Food</a></li>
                                <li><a href="https://www.boatshedmarket.com.au/" target="_blank" rel="noopener noreferrer">Boatshed</a></li>
                                <li><a href="https://localfoodiehub.com.au/" target="_blank" rel="noopener noreferrer">Local Foodie Hub</a></li>
                                <li><a href="https://www.perthorganics.com/" target="_blank" rel="noopener noreferrer">Perth Organics</a></li>
                                <li><a href="https://malibufresh.com.au/" target="_blank" rel="noopener noreferrer">Malibu Fresh Essentials</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 map order-md-1" id="map">

                    <!-- </div>
                    <script>
                    var map;
                    var src = 'https://sofreo.com.au/js/SoFreoCuisineStockists.kmz';
                    
                    function initMap() {
                        map = new google.maps.Map(document.getElementById('map'), {
                            center: new google.maps.LatLng(-31.97653, 115.85002),
                            mapTypeId: 'terrain'
                        });
                        var kmlLayer = new google.maps.KmlLayer(src, {
                            suppressInfoWindows: true,
                            preserveViewport: false,
                            map: map
                        });
                        kmlLayer.addListener('click', function(event) {
                            var content = event.featureData.infoWindowHtml;
                            var infobox = document.createElement("div"); 
                            infobox.setAttribute("id", "infobox"); 
                            infobox.innerHTML = content; 
                            document.getElementById("map").appendChild(infobox);
                        });
                        // kmlLayer.addListener('click', function(event) {
                        //     location.href='https://www.google.com/maps/d/viewer?mid=1MWEcXiTxag2AcU7GL0Yy96M0Vitl-zzx&ll=-31.97478378191586%2C115.86051900000007&z=12';
                        // });
                    }
                        </script> -->
                    <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1MWEcXiTxag2AcU7GL0Yy96M0Vitl-zzx" ></iframe>
                    </div>
                </div>
            </section>
            </main>
        <div class="clearfloat"> </div>
        <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA3PXzgSYzdDC2UF4Yx_dJrfxHPPaGRTAA&callback=initMap">
        </script>
        <?php include 'includes/footer.php'; ?>
