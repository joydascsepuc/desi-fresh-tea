<div class="" id="header_img" style="min-height: 150vh;">
	<div class="text-center" style="">
		<br><br><br><br>
		<a href="">
			<img src="/storage/website_images/mainLogo.png" class="" style="width: 220px; height: 220px;">
		</a>
	</div>
	<br><br><br><br>
	<div class="row text-center" style="font-size: 1.3rem; font-weight: bold;">	
		<div class="col-md-2 col-sm-2 headlinks"></div>
		<div class="col-md-1 col-sm-1 headlinks" style="margin: 0; padding: 0;">
			<a href="{{ route('homePage') }}" class="text-uppercase">HOME</a>
		</div>
		<div class="col-sm-2 col-md-2 headlinks" style="padding: 0; margin: 0;">
			<li class="nav-item dropdown" style="list-style: none;">
		        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          OUR STORY
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		          <a class="dropdown-item" href="{{ route('aboutCompany') }}">-- About Company</a>
		          <a class="dropdown-item" href="{{ route('historyWithTea') }}">-- Our History with Tea</a>
		          <a class="dropdown-item" href="{{ route('missionVision') }}">-- Vision and Mission</a>
		          <a class="dropdown-item" href="{{ route('ceomessage') }}">-- CEO's Message</a>
		        </div>
		    </li>
		</div>
		<div class="col-md-1 com-sm-1 headlinks" style="padding-left: 0px; margin-left: 0px;">
		    <a href="{{ route('ourProduct') }}" class="text-uppercase">product</a>
		</div>
		<div class="col-md-1 com-sm-1 headlinks" style="padding-left: 0px; margin-left: 0px;">
		    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="{{ route('gallery') }}" class="text-uppercase">Gallery</a>
		</div>
		<div class="col-md-1 com-sm-1 headlinks" style="padding-left: 0px; margin-left: 0px;">
		   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="{{ route('corporateSocialResponsibilities') }}" class="text-uppercase">csr</a>
		</div>
		<div class="col-md-1 com-sm-1 headlinks" style="padding-left: 0px; margin-left: 0px;">
		    &nbsp;&nbsp;&nbsp;&nbsp;<a href="{{ route('contact') }}" class="text-uppercase">contact</a>
		</div>
		<div class="col-md-2 col-sm-2"></div>
	
	</div>
	<br><br><br>
	<?php if($data == 'homepage'){?>
		<div class="text-center">
			<h4 class="text-uppercase" style="font-size: 4.6rem; color: white; font-weight: bold;">WITH HIGH QUALITY, STANDARD</h4>
			<h4 class="text-uppercase" style="font-size: 3.6rem; color: #B4D9A6; font-weight: bold;">AND GREAT TASTE IT IS THE BEST</h4>
		</div>
	<?php }else{ ?>
		<br><br><br><br><br><br><br><br><br><br>
		<h3 class="text-center" style="color: white; font-weight: bold; font-size: 3.5rem;"><?=$data['header']?></h3>
		<h4 class="text-center" style="font-weight: bold; font-size: 2.5rem; color: white;"><?=$data['firstLine']?>&nbsp;/&nbsp;<?=$data['secondLine']?></h4>
	<?php }?>

</div>
