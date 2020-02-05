<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <title>Royalcg</title>
        <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon.png" type="image/x-icon">
    <!-- Font awesome -->
    <link href="<?php echo base_url(); ?>assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet"> 
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/slick.css">      <!-- Date Picker -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap-datepicker.css">  
     <!-- Gallery Lightbox -->
    <link href="<?php echo base_url(); ?>assets/css/magnific-popup.css" rel="stylesheet">
    <!-- Theme color -->
    <link id="switcher" href="<?php echo base_url(); ?>assets/css/default-theme.css" rel="stylesheet">
    <!-- Main style sheet -->
     <?php if ($_SESSION['Language']== 'arabic') { ?>
      <link href="<?php echo base_url(); ?>assets/css/arabic_style.css" rel="stylesheet">    
     <?php } ?>
      <?php if ($_SESSION['Language']== 'russian') { ?>
      <link href="<?php echo base_url(); ?>assets/css/russian_style.css" rel="stylesheet">    
     <?php } ?>
    <link href="<?php echo base_url(); ?>assets/css/animate.min.css" rel="stylesheet">  
    <link href="<?php echo base_url(); ?>assets/css/master.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
     </head>
<?php   $data_id =$this->uri->segment(1);  ?>
  <body class="<?php if($data_id =='details'){ echo 'head-class';} ?>">
  <div class="top-menu inner-menu">
    <div class="container">
      <div class="row">
        <div class="col-md-12  wow fadeInDown">
          <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <a class="navbar-brand form-logo" href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/images/logo.png"></a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" aria-expanded="false">
              <span class="navbar-toggler-icon"></span>
            </button>       
          <div class="navbar-collapse collapse" id="collapsibleNavbar" style="">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item <?php if($data_id==''){ echo 'active';} ?>">
             <a class="nav-link " href="<?php echo base_url(); ?>">
        <?php $home =$this->db->get_where('tbl_website_translate', array('lang_id' =>1))->row(); 
               if ($_SESSION['Language']== 'arabic' && $home->arabic!="") { 
                          echo ucfirst($home->arabic);
                        }elseif ($_SESSION['Language']== 'russian' && $home->russian!="") { 
                         echo ucfirst($home->russian);
                        }elseif ($_SESSION['Language']== 'chiness' && $home->chiness!="") { 
                         echo ucfirst($home->chiness);
                          }else{ 
                          echo ucfirst($home->title);
                        } 
                ?></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link <?php if($data_id =='about-us'){ echo 'active';} ?>" href="<?php echo base_url(); ?>about-us">
                     <?php $about =$this->db->get_where('pages_detail', array('id' =>18))->row(); 
                       if ($_SESSION['Language']== 'arabic' && $about->title_arabic!="") { 
                          echo ucfirst($about->title_arabic);
                        }elseif ($_SESSION['Language']== 'russian' && $about->title_russian!="") { 
                         echo ucfirst($about->title_russian);
                        }elseif ($_SESSION['Language']== 'chiness' && $about->title_chiness!="") { 
                         echo ucfirst($about->title_chiness);
                          }else{ 
                          echo ucfirst($about->page_title);
                        } 
                    ?>               

                </a>
                </li>
                 <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?php if($data_id =='details'){ echo 'active';} ?>" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <?php $service =$this->db->get_where('tbl_website_translate', array('lang_id' =>2))->row(); 
                       if ($_SESSION['Language']== 'arabic' && $service->arabic!="") { 
                          echo ucfirst($service->arabic);
                        }elseif ($_SESSION['Language']== 'russian' && $service->russian!="") { 
                         echo ucfirst($service->russian);
                        }elseif ($_SESSION['Language']== 'chiness' && $service->chiness!="") { 
                            echo ucfirst($service->chiness);
                          }else{ 
                          echo ucfirst($service->title);
                        } 
                ?>
                   
                    </a>
                  <ul class="dropdown-menu Drop_down_services_menu" aria-labelledby="navbarDropdownMenuLink">
                  <!--  <?php print_r($categories); ?> -->
                 <?php foreach ($pages_cate as $cate) { ?>
                            <li><a class="dropdown-item" href="<?php echo base_url(); ?>details/<?php echo $cate['id'];?>">
                              <?php if ($_SESSION['Language']== 'arabic' && $cate['title_arabic']!="") {
                                   echo ucfirst($cate['title_arabic']);
                                  }elseif ($_SESSION['Language']== 'russian' && $cate['title_russian']!="") {
                                   echo ucfirst($cate['title_russian']);
                                 }elseif ($_SESSION['Language']== 'chiness' && $cate['title_chiness']!="") {
                                  echo ucfirst($cate['title_chiness']);
                                 }else{
                                  echo ucfirst($cate['page_title']);
                                 } ?></a></li>
                                  <?php } ?>
                       </ul>
                </li>


                 <li class="nav-item dropdown">
                   <a class="nav-link dropdown-toggle <?php if($data_id =='events'){ echo 'active';} ?>" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                     <?php $city =$this->db->get_where('tbl_website_translate', array('lang_id' =>3))->row(); 
                       if ($_SESSION['Language']== 'arabic' && $city->arabic!="") { 
                          echo ucfirst($city->arabic);
                        }elseif ($_SESSION['Language']== 'russian' && $city->russian!="") { 
                         echo ucfirst($city->russian);
                        }elseif ($_SESSION['Language']== 'chiness' && $city->chiness!="") { 
                            echo ucfirst($city->chiness);
                          }else{ 
                          echo ucfirst($city->title);
                        } 
                         ?>
                   </a>
                         <ul class="dropdown-menu Drop_down_services_menu" aria-labelledby="navbarDropdownMenuLink">
                            <?php foreach ($cities as $cate) { ?>
                            <li>
                              <a class="dropdown-item" href="<?php echo base_url(); ?>events/<?php echo $cate['city_id']?>">
                                 <?php if ($_SESSION['Language']== 'arabic' && $cate['city_arabic']!="") {
                                   echo $cate['city_arabic'];
                                  }elseif ($_SESSION['Language']== 'russian' && $cate['city_russian']!="") {
                                   echo $cate['city_russian'];
                                 }elseif ($_SESSION['Language']== 'chiness' && $cate['city_chiness']!="") {
                                  echo $cate['city_chiness'];
                                 }else{
                                  echo $cate['city_name'];
                                 } ?>
                              
                                  
                                </a>
                            </li>
                            <?php } ?>
                   </ul>
                  </li>  
                   
              <li class="nav-item">
                  <a class="nav-link <?php if($data_id =='contact'){ echo 'active';} ?>" href="<?php echo base_url(); ?>contact">
                      <?php $contact =$this->db->get_where('tbl_website_translate', array('lang_id' =>4))->row(); 
                       if ($_SESSION['Language']== 'arabic' && $contact->arabic!="") { 
                          echo ucfirst($contact->arabic);
                        }elseif ($_SESSION['Language']== 'russian' && $contact->russian!="") { 
                         echo ucfirst($contact->russian);
                        }elseif ($_SESSION['Language']== 'chiness' && $contact->chiness!="") { 
                            echo ucfirst($contact->chiness);
                          }else{ 
                          echo ucfirst($contact->title);
                        } 
                ?>
                              
                 </a>
                </li>
               
                 <li class="nav-item dropdown">
                   <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         <?php if ($_SESSION['Language']== 'arabic') { ?>
                                <img width="20px" height="20px" src="<?php echo base_url();?>images/lang/Saudi-Arabia-Flag.png"> AR
                                <?php } elseif ($_SESSION['Language']== 'russian') { ?>
                                <img width="20px" height="20px" src="<?php echo base_url();?>images/lang/download.png"> Rus
                                <?php } elseif ($_SESSION['Language'] == 'chiness') { ?>
                                <img width="20px" height="20px" src="<?php echo base_url();?>images/lang/Chinese.png"> Ch
                                <?php } else{ ?>
                               <img width="20px" height="20px" src="<?php echo base_url();?>images/lang/United-States-Flag.png"> EN
                                <?php } ?></a>
                         <ul class="dropdown-menu Drop_down_services_menu" aria-labelledby="navbarDropdownMenuLink">
                            
                            <li id='myid'>
                              <?php $languages = $this->db->get_where('language', array('lang_status' => 1))->result();

                                foreach ($languages as  $value) { ?>
                                 
                              <a href="javascript:void(0)"  onclick="javascript:window.location.href='<?php echo base_url(); ?>switchLang/<?php echo $value->lang_name ?>'" class="<?php if($site_lang ==  $value->lang_name) echo 'active'; ?>">  <img width="20px" height="20px" src="<?php echo base_url();?>images/lang/<?php echo $value->image ?>"> <?php echo ucfirst($value->lang_code); ?></a>

                              <?php  }  ?>
                               
                            </li>
                            
                 
              </ul>
              <li class="nav-item dropdown">
                   <a class="nav-link dropdown-toggle " href="javascript:void(0)" id="navbarDropdownMenuLinkOne" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    <?php if($_SESSION['currency']==""){ echo 'AED'; }else{ echo $_SESSION['currency']; } ?></a>
                        <ul class="dropdown-menu Drop_down_services_menu dbcur" aria-labelledby="navbarDropdownMenuLinkOne">
                            <li><a class="dropdown-item" href="javascript:void(0)" onclick="javascript:window.location.href='<?php echo base_url(); ?>currency/INR'">Indian Rupee</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0)" onclick="javascript:window.location.href='<?php echo base_url(); ?>currency/ARS'">Argentine peso</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0)" onclick="javascript:window.location.href='<?php echo base_url(); ?>currency/AMD'">Armenian dram</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0)" onclick="javascript:window.location.href='<?php echo base_url(); ?>currency/AWG'">Aruban florin</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0)" onclick="javascript:window.location.href='<?php echo base_url(); ?>currency/AUD'">Australian dollar</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0)" onclick="javascript:window.location.href='<?php echo base_url(); ?>currency/BGN'">Bulgarian lev</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0)" onclick="javascript:window.location.href='<?php echo base_url(); ?>currency/BRL'">Brazilian real</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0)" onclick="javascript:window.location.href='<?php echo base_url(); ?>currency/BSD'">Bahamian dollaruro</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0)" onclick="javascript:window.location.href='<?php echo base_url(); ?>currency/CAD'">Canadian dollar</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0)" onclick="javascript:window.location.href='<?php echo base_url(); ?>currency/CHF'">Swiss franc</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0)" onclick="javascript:window.location.href='<?php echo base_url(); ?>currency/CLP'">Chilean peso</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0)" onclick="javascript:window.location.href='<?php echo base_url(); ?>currency/CNY'">Renminbi</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0)" onclick="javascript:window.location.href='<?php echo base_url(); ?>currency/COP'">Colombian peso</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0)" onclick="javascript:window.location.href='<?php echo base_url(); ?>currency/CZK'">Czech koruna</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0)" onclick="javascript:window.location.href='<?php echo base_url(); ?>currency/DKK'">Danish krone</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0)" onclick="javascript:window.location.href='<?php echo base_url(); ?>currency/DOP'">Dominican peso</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0)" onclick="javascript:window.location.href='<?php echo base_url(); ?>currency/EGP'">Egyptian pound</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0)" onclick="javascript:window.location.href='<?php echo base_url(); ?>currency/USD'">United states dollar</a></li>
                           
                                                
                        </ul>
                  </li>

            </div>  
          </nav>
        </div>
      </div>
    </div>
  </div>