<?php include('header.php');?>
<!-- Header End====================================================================== -->
<!-- Banner -->
 <?php include('banner.php');?>
<!-- End banner -->
<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->
	<?php include('sidebar.php');?>
<!-- Sidebar end=============================================== -->
		<div class="span9">		
			<div class="well well-small">
			<h4>Featured Products <small class="pull-right">200+ featured products</small></h4>
			<div class="row-fluid">
			<div id="featured" class="carousel slide">
			<div class="carousel-inner">
			  <div class="item active">
			  <ul class="thumbnails">
			  	<?php foreach($pro as $prod){?>
			  		<?php $protime = $prod->pro_time;
			  		 $strtime = strtotime($protime);
			  		 $prodate = date('y-m-d',$strtime);
			  		 $today = date('y-m-d');
			  		 //echo $today;

			  		 //exit;?>
				<li class="span3">
				  <div class="thumbnail">
				  	<?php if($prodate==$today){?>
				  <i class="tag"></i>
				<?php }?>
					<a href="<?php echo base_url('Product/products');?>?pid=<?php echo $prod->pro_id;?>"><img src="<?php echo $prod->pro_image;?>" alt=""></a>
					<div class="caption">
					  <h5><?php echo $prod->pro_name;?></h5>
					  <h4><a class="btn" href="<?php echo base_url('Product/products');?>?pid=<?php echo $prod->pro_id;?>">VIEW</a> <span class="pull-right">Rs-<?php echo $prod->pro_price;?>/-</span></h4>
					</div>
				  </div>
				</li>
			<?php }?>
			  </ul>
			  </div>
			 
			
			
			   <div class="item">
			  <ul class="thumbnails">
			  <?php foreach($pro1 as $pro){?>
			  <li class="span3">
				  <div class="thumbnail">
				  <i class="tag"></i>
					<a href="<?php echo base_url('Product/products');?>"><img src="<?php echo $pro->pro_image;?>?pid=<?php echo $pro->pro_id;?>" alt=""></a>
					<div class="caption">
					  <h5><?php echo $pro->pro_name;?></h5>
					  <h4><a class="btn" href="<?php echo base_url('Product/products');?>?pid=<?php echo $pro->pro_id;?>">VIEW</a> <span class="pull-right">Rs-<?php echo $pro->pro_price;?>/-</span></h4>
					</div>
				  </div>
				</li>
              <?php }?>
				
			  </ul>
			  </div>
			 
			  </div>
			  <a class="left carousel-control" href="#featured" data-slide="prev">‹</a>
			  <a class="right carousel-control" href="#featured" data-slide="next">›</a>
			  </div>
			  </div>
		</div>
		<h4>Latest Products </h4>
			  <ul class="thumbnails">
			  	<?php foreach($pro2 as $pro2){;?>
				<li class="span3">
				  <div class="thumbnail">
					<a  href="product_details.html"><img src="<?php echo $pro2->pro_image;?>" alt=""/></a>
					<div class="caption">
					  <h5><?php echo $pro2->pro_name;?></h5>
					  <p> 
						Lorem Ipsum is simply dummy text. 
					  </p>
					 
					  <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
					</div>
				  </div>
				</li>
			<?php }?>
			  </ul>	

		</div>
		</div>
	</div>
</div>
<!-- Footer ================================================================== --><?php
include('footer.php');?>