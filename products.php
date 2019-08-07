<!doctype html>
<html lang="en">
	<head>
		<title>So Freo - Our products</title>
		<?php 
		$meta = 'Get some information about the veggie paté and more products soon';
		include 'includes/meta.php';
		?>
    </head>
    <body>
        <?php 
        include 'includes/nav.php';
        ?>
        <main>
            <div class="pic">
                <h1>Veggie Paté &amp; Co</h1>
                <div>
                <p>We are excited to share with you our products : the Original Veggie Paté and the Thai Veggie Paté!</p>
                <p>Soon you find new treats to add to your favorite vegan meal! <br>Stay connected!</p>
                </div>
            </div>
            <br class="clearfloat">
            <div class="container">
                <section class="row mx-md-3">
                    <div class="col-12 col-md-4 text-center"><h3>Veggie Paté</h3><a href="veggie-pate.php"><img src="img/original-veggie-pate.jpg" class="no-animation animated wow fadeInUp rounded" alt="Veggie Paté"></a></div>
                    <div class="col-12 col-md-4 text-center"><h3>Thai Veggie Paté</h3><a href="thai-pate.php"><img src="img/thai-veggie-pate.jpg" class="no-animation animated wow fadeInUp rounded" data-wow-delay="0.2s" alt="Thai Veggie Paté"></a></div>
                    <div class="col-12 col-md-4 text-center"><h3>Be patient !</h3><img src="img/coming-soon.svg" class="wow rounded" alt="Coming Soon"></div>
                </section>
            </div>
        <?php include 'includes/footer.php'; ?>