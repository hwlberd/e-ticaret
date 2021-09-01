<?php include 'header.php';




//Belirli veri seçme işlemi
$ayarsor=$db->prepare("SELECT * from hakkımızda where hakkimizda_id=:id");
$ayarsor->execute(array(
  'id'=>0
));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);


?>
		

	
	
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="page-title-wrap">
					<div class="page-title-inner">
					<div class="row">
						<div class="col-md-4">
							
							<div class="bigtitle">Hakkımızda</div>
						</div>
						
					</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-9"><!--Main content-->

               <div class="title-bg">
					<div class="title">Video</div>
				</div>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $ayarcek['hakkimizda_video'] ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                         

               <div class="title-bg">
					<div class="title">Misyon</div>
				</div>
                    <blockquote><?php ?><?php echo $ayarcek['hakkimizda_misyon']?></blockquote>

                    <div class="title-bg">
					<div class="title">Vizyon</div>
                         <blockquote><?php ?><?php echo $ayarcek['hakkimizda_vizyon']?></blockquote>
				</div>

				<div class="title-bg">
					<div class="title"><?php echo $ayarcek['hakkimizda_baslik']?></div>
				</div>
				<div class="page-content">
					<p>
                         <?php echo $ayarcek['hakkimizda_icerik']?>
					</p>
					
				</div>

                   

			</div>
			<!-- sidebar buraya gelicek -->
               <?php include 'sidebar.php' ?>
		</div>
		<div class="spacer"></div>
	</div>
	
	<?php include 'footer.php';?>