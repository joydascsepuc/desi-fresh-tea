<div class="" id="header_img" style="">
	<div class="text-center">
		<a href="">
			<img src="/storage/website_images/mainLogo.png" class="" style="width: 220px; height: 220px;">
		</a>
	</div>
	<div class="row text-center" style="font-size: 1.5rem; font-weight: bold;">	
		<div class="col-md-2 col-sm-2 headlinks">
			<a href="{{ route('homePage') }}" class="text-uppercase">HOME</a>
		</div>
		<div class="col-md-2 col-sm-2 headlinks">
			<li class="nav-item dropdown" style="list-style: none;">
		        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          OUR STORY
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		          <a class="dropdown-item" href="{{ route('aboutCompany') }}">-- About Company</a>
		          <a class="dropdown-item" href="#">-- Our History with Tea</a>
		          <a class="dropdown-item" href="#">-- Vision and Mission</a>
		          <a class="dropdown-item" href="#">-- CEO's Message</a>
		        </div>
		    </li>
		</div>
		<div class="col-md-2 col-sm-2 headlinks">
			<a href="" class="text-uppercase">product</a>
		</div>
		<div class="col-md-2 col-sm-2 headlinks">
			<a href="" class="text-uppercase">Gallery</a>
		</div>
		<div class="col-md-2 col-sm-2 headlinks">
			<a href="" class="text-uppercase">csr</a>
		</div>
		<div class="col-md-2 col-sm-2 headlinks">
			<a href="" class="text-uppercase">contact</a>
		</div>
	</div>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<?php if($data == 'homepage'){?>
		<div class="text-center">
			<h4 class="text-uppercase" style="font-size: 4.6rem; color: white; font-weight: bold;">WITH HIGH QUALITY, STANDARD</h4>
			<h4 class="text-uppercase" style="font-size: 3.6rem; color: green; font-weight: bold;">AND GREAT TASTE IT IS THE BEST</h4>
		</div>
	<?php }else{ ?>
		<h4 class="text-center" style="font-weight: bold; font-size: 2.5rem; color: white;"><?=$data['firstLine']?>&nbsp;/&nbsp;<?=$data['secondLine']?></h4>
	<?php }?>

</div>
