<div class="container">
	<div class="row">
		<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
			<div class="ui-block">
				<div class="top-header top-header-favorit">
					<div class="top-header-thumb">
						<img src="<?php echo base_url('resources/user/img/top-header5.png')?>" alt="nature">
						<div class="top-header-author">
							<div class="author-thumb">
								<img src="<?php echo base_url("upload/company/".$_SESSION['companylogo'])?>" alt="author" height="120px" width="120px">
							</div>
							<div class="author-content">
								<a href="" class="h3 author-name"><?php echo $_SESSION['companytitle']?></a>
								<div class="country"><?php echo $_SESSION['companydesp']?></div>
							</div> 
						</div>
					</div>
					
					<div class="profile-section">
						<div class="row">
							<div class="col col-xl-8 m-auto col-lg-8 col-md-12">
								<ul class="profile-menu">
									<li>
										<a href="<?php echo site_url("company/OfferC")?>">Home</a>
									</li>
									<li>
										
									</li>
									<li>
										<a href="<?php echo site_url('company/CompanyDetailsC')?>">View Company</a>
									</li>
									<li>
										
									</li>
									<li>
										<a href="<?php echo site_url('company/ResponseOfferC')?>">Partnership Response</a>
									</li>
								</ul>
							</div>
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>