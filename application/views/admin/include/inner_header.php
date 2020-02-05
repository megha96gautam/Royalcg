        <div class="extrabar">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2">
				<div class="info-tile info-tile-alt tile-warning">
					<div class="tile-icon"><i class="ti ti-eye"></i></div>
					<div class="tile-heading"><span>Page Views</span></div>
					<div class="tile-body"><span>1,600</span></div>
					<div class="tile-footer"><span class="text-danger">-7.6% <i class="ti ti-arrow-down"></i></span></div>
				</div>
			</div>
			<div class="col-md-2">
				<div class="info-tile info-tile-alt tile-success">
					<div class="tile-icon"><i class="ti ti-thumb-up"></i></div>
					<div class="tile-heading"><span>Likes</span></div>
					<div class="tile-body"><span>345</span></div>
					<div class="tile-footer"><span class="text-success">+15.4% <i class="ti ti-arrow-up"></i></span></div>
				</div>
			</div>
			<div class="col-md-2">
				<div class="info-tile info-tile-alt tile-danger">
					<div class="tile-icon"><i class="ti ti-check-box"></i></div>
					<div class="tile-heading"><span>Bugs Fixed</span></div>
					<div class="tile-body"><span>21</span></div>
					<div class="tile-footer"><span class="text-success">+10.4% <i class="ti ti-arrow-up"></i></span></div>
				</div>
			</div>
			<div class="col-md-2">
				<div class="info-tile info-tile-alt tile-info">
					<div class="tile-icon"><i class="ti ti-user"></i></div>
					<div class="tile-heading"><span>New Members</span></div>
					<div class="tile-body"><span>124</span></div>
					<div class="tile-footer"><span class="text-danger">-25.4% <i class="ti ti-arrow-down"></i></span></div>
				</div>
			</div>
			<div class="col-md-2">
				<div class="info-tile info-tile-alt tile-teal">
					<div class="tile-icon"><i class="ti ti-gift"></i></div>
					<div class="tile-heading"><span>Gifts</span></div>
					<div class="tile-body"><span>16</span></div>
					<div class="tile-footer"><span class="text-danger">-7.6% <i class="ti ti-arrow-down"></i></span></div>
				</div>
			</div>
			<div class="col-md-2">
				<div class="info-tile info-tile-alt tile-indigo">
					<div class="tile-icon"><i class="ti ti-menu-alt"></i></div>
					<div class="tile-heading"><span>Tasks</span></div>
					<div class="tile-body"><span>17</span></div>
					<div class="tile-footer"><span class="text-danger">-26.4% <i class="ti ti-arrow-down"></i></span></div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="extrabar-underlay"></div>

<header id="topnav" class="navbar navbar-bluegray navbar-fixed-top">

	<div class="logo-area">
		<span id="trigger-sidebar" class="toolbar-trigger toolbar-icon-bg">
			<a data-toggle="tooltips" data-placement="right" title="Toggle Sidebar">
				<span class="icon-bg">
					<i class="ti ti-shift-left"></i>
				</span>
			</a>
		</span>
		<h4>
		<a class="" href="<?php echo base_url()?>admin/dashboard">Royalcg</a>
        </h4>

	    </div><!-- logo-area -->


	<ul class="nav navbar-nav toolbar pull-right">


  <!--
        <li class="toolbar-icon-bg hidden-xs" id="trigger-extrabar">
            <a href="#"><span class="icon-bg"><i class="ti ti-view-grid"></i></span></a>
        </li> -->

        <li class="toolbar-icon-bg hidden-xs" id="trigger-fullscreen">
            <a href="#" class="toggle-fullscreen"><span class="icon-bg"><i class="ti ti-fullscreen"></i></span></i></a>
        </li>
        <li class="dropdown toolbar-icon-bg">
			<a href="#" class="dropdown-toggle" data-toggle='dropdown'><span class="icon-bg"><i class="ti ti-user"></i></span></i></a>
			<ul class="dropdown-menu userinfo arrow">
			    <li><a href="<?php echo base_url();?>admin/profile"><i class="ti ti-user"></i><span>Profile</span></a></li>
			    <li><a href="<?php echo base_url();?>admin/change_password"><i class="ti ti-pencil"></i><span>change password</span></a></li>
	            <li><a href="<?php echo base_url();?>admin/logout"><i class="ti ti-shift-right"></i><span>Sign Out</span></a></li>
				
			</ul>
		</li>

	</ul>

</header>

        <div id="wrapper">
            <div id="layout-static">
                <div class="static-sidebar-wrapper sidebar-bluegray">
                    <div class="static-sidebar">
                        <div class="sidebar">
	<div class="widget">
        <div class="widget-body">
            <div class="userinfo">
                <div class="avatar">
                    <img src="" class="img-responsive img-circle"> 
                </div>
                <div class="info">
                    <span class="username"><?php echo $this->session->userdata['logged_in']['username'];?></span>
                    <span class="useremail"></span>
                </div>
            </div>
        </div>
    </div>
	<div class="widget stay-on-collapse" id="widget-sidebar">
        <nav class="widget-body">
	<ul class="acc-menu">
		<li class="nav-separator"><span>Explore</span></li>
		<li><a href="<?php echo base_url() ;?>admin"><i class="ti ti-home"></i><span>Dashboard</span><span class="badge badge-info"></span></a></li>
		          <li>
				<a href="<?php echo base_url();?>admin/manage_language"><i class="ti ti-shield"></i><span>Language</span></a>
				 </li>
				 <li>
				<a href="<?php echo base_url();?>admin/page"><i class="ti ti-shield"></i><span> managae service page</span></a>
				 </li>
				 <li>
				<a href="<?php echo base_url();?>admin/service_slider"><i class="ti ti-view-grid"></i><span>Service Slider</span></a>
				</li>
				
		        <li><a href="javascript:;"><i class="ti ti-layoutti ti-layout"></i><span>Category/Listing</span></a>
			       <ul class="acc-menu">
				
				         <li><a href="<?php echo base_url();?>admin/category">Manage Category </a></li>
				          <li><a href="<?php echo base_url();?>admin/subcategory">Manage Subcategory </a></li>
				          <li><a href="<?php echo base_url();?>admin/manage_listing"> Manage Product</a></li>
						  
						
					
			      </ul>
		        </li>
				<li>
				<a href="<?php echo base_url();?>admin/banner"><i class="ti ti-layout-slider"></i><span>Banner</span></a>
				</li>
				<li>
				<a href="<?php echo base_url();?>admin/website_transulate"><i class="ti ti-view-grid"></i><span>Website Headings Content</span></a>
				</li>
				<!-- <li>
				<a href="<php echo base_url();?>admin/testimonial"><i class="ti ti-view-grid"></i><span>Testimonial</span></a>
				</li> -->
				<li>
				<a href="<?php echo base_url();?>admin/destinations"><i class="ti ti-view-grid"></i><span>Destinations</span></a>
				</li>
				<li>
				<a href="<?php echo base_url();?>admin/team"><i class="ti ti-view-grid"></i><span>Our Team</span></a>
				</li>
				<li>
				<a href="<?php echo base_url();?>admin/contact_footer/1"><i class="ti ti-view-grid"></i><span>FOOTER CONTACT</span></a>
				</li>
				
               <li>
				<a href="<?php echo base_url();?>admin/contact_us"><i class="ti ti-layout-column3-alt"></i><span>Contact Us</span></a>
				</li>
				<li>
				<a href="<?php echo base_url();?>admin/manage_cities"><i class="ti ti-layout-column3-alt"></i><span>City</span></a>
				</li>
				<li>
				<a href="<?php echo base_url() ;?>admin/manage_event"><i class="ti ti-shield"></i><span>City Event</span></a>
				</li>
				<li>
				<a href="<?php echo base_url();?>admin/feedback"><i class="ti ti-layout-column3-alt"></i><span>FeedBack</span></a>
				</li>
				
			
               	<li>
				<a href="<?php echo base_url();?>admin/enquiry"><i class="ti ti-shield"></i><span>Enquiry</span></a>
				</li> 
				
			
  
		      
				
				
			  <li>
			  <a href="javascript:;">
			  <i class="ti ti-layoutti ti-layout"></i>
			  <span>
			  Other
			  </span>
			  </a>
			       <ul class="acc-menu">
			       	<li>
						<a href="<?php echo base_url();?>admin/subscription"><i></i><span>View Subscription</span></a>
			       </li>
				    <li>
						<a href="<?php echo base_url();?>admin/view_templates"><i></i><span>View Templates</span></a>
			       </li>
			        <li>
						<a href="<?php echo base_url();?>admin/email_history"><i></i><span>Email Send History</span></a>
			       </li>
			        <li>
						<a href="<?php echo base_url();?>admin/add_sendemail"><i></i><span> Email Send</span></a>
			       </li>
				  			 
				</ul>
		        

	</ul>
</nav>
    </div>


</div>
</div>
</div>