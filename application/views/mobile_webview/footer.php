 <?php $lang = $this->uri->segment(3); 
  /* print_r($lang); die();*/
 ?>
 <style>
   label {
    display: inline-block;
    margin-bottom: .5rem;
    color: red;
}
 </style>
  <!-- Start Footer -->

  <!-- jQuery library -->

  <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>  
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>  
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jqueryui-1.10.3.min.js"></script>              <!-- Load jQueryUI -->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/slick.js"></script>
 
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.magnific-popup.min.js"></script>
  <!-- Date Picker -->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js"></script>
  <!-- Ajax contact form  -->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/app.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/validate.js"></script>
  <!-- Custom js -->
  <script src="<?php echo base_url(); ?>assets/js/custom.js"></script>   
<script src="<?php echo base_url(); ?>assets/js/wow.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script> 
<script type="text/javascript">

      jQuery(window).scroll(function() { 
      if (jQuery(window).scrollTop() >=75) { 
      if(jQuery('.top-menu').hasClass( "stricy" ))
      {
        //jQuery('#header').removeClass("fixed-theme");

      }
      else
      {
        jQuery('.top-menu').addClass("stricy");

      }

      }

    else{

      jQuery('.top-menu').removeClass("stricy");

    }

   });

    

</script>

<!-- <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script type="text/javascript">
   
// for every slide in carousel, copy the next slide's item in the slide.
// Do the same for the next, next item.
$('.multi-item-carousel .item').each(function(){
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));
  
  if (next.next().length>0) {
    next.next().children(':first-child').clone().appendTo($(this));
  } else {
    $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
  }
});

//Allows bootstrap carousels to display 3 items per page rather than just one
$('.carousel.carousel-multi .item').each(function () {
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().attr("aria-hidden", "true").appendTo($(this));

  if (next.next().length > 0) {
    next.next().children(':first-child').clone().attr("aria-hidden", "true").appendTo($(this));
  }
  else {
    $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
  }
});
$('.carousel[data-type="multi"] .item').each(function(){
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));
  
  for (var i=0; i<1; i++) {
    next=next.next();
    if (!next.length) {
      next = $(this).siblings(':first');
    }
    
    next.children(':first-child').clone().appendTo($(this));
  }
});




(function(){
  // setup your carousels as you normally would using JS
  // or via data attributes according to the documentation
  // https://getbootstrap.com/javascript/#carousel
  $('#carousel123').carousel({ interval: 2000 });
  $('#carouselABC').carousel({ interval: 3600 });
}());

(function(){
  $('.carousel-showmanymoveone .item').each(function(){
    var itemToClone = $(this);

    for (var i=1;i<1;i++) {
      itemToClone = itemToClone.next();

      // wrap around if at end of item collection
      if (!itemToClone.length) {
        itemToClone = $(this).siblings(':first');
      }

      // grab item, clone, add marker class, add to collection
      itemToClone.children(':first-child').clone()
        .addClass("cloneditem-"+(i))
        .appendTo($(this));
    }
  });
}());

 

 </script>


   
    <script>
        $(document).ready(function(){  //alert();

          $.validator.addMethod("alphabetsnspace", function(value, element) {
              return this.optional(element) || /^[a-zA-Z ]*$/.test(value);
            });

          $.validator.addMethod("nowhitespace", function(value, element) {
            return this.optional(element) || /^\S+$/i.test(value);
          }, "Blank space is not required.");


          jQuery.validator.addMethod("alphanumeric", function(value, element) {
               return this.optional(element) || /^[\w.]+$/i.test(value);
      }, "Letters, numbers, and underscores only please.");

          jQuery.validator.addMethod("emails", function(value, element) {
    return this.optional(element) || /^[a-z][a-zA-Z0-9_]*(\.[a-zA-Z][a-zA-Z0-9_]*)?@[a-z][a-zA-Z-0-9]*\.[a-z]+(\.[a-z]+)?$/i.test(value);
}, "Please enter valid email.");

  $(function () {
      $('#name').keydown(function (e) {
          if (e.shiftKey || e.ctrlKey || e.altKey) {
              e.preventDefault();
          } else {
              var key = e.keyCode;
              if (!((key == 8) || (key == 32) || (key == 46) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {
                  e.preventDefault();
              }
          }
      });
  });
         


          $("#page_form").validate({
            // Specify validation rules
            ignore: [],
              debug: false,
            rules: {
            
             
           email: {
              required:true,
               email: true,
               emails:true,
              nowhitespace: true
            },
            contact: {
              minlength: 7,
              maxlength: 14,
              required: true
            },
             city_id: {
              required: true
            },
            name: {
              required: true,
              alphanumeric: true,
              nowhitespace: true
            }, 
            message:{
              required:true
            }

        
         },
            messages: {
              name: {
              required: "<?php if ($lang == 'ar') { 
                               echo " مطلوب اسم. ";
                            }elseif ($lang == 'ru') { 
                               echo "Имя обязательно.";
                       }elseif ($lang == 'zh') { 
                               echo "名称为必填项。";
                            }else{ 
                               echo "Name is required.";
                            } 
                      ?>"
             },
            city_id: {
              required: "<?php if ($lang == 'ar') {  
                               echo " .الرجاء اختيار المدينة ";
                            }elseif ($lang == 'ru') {  
                               echo "Пожалуйста, выберите город.";
                       }elseif ($lang == 'zh') {  
                               echo "请选择城市 .";
                            }else{ 
                               echo "Please Select City.";
                            } 
                      ?>"
             
             },
          
             email: {
              required: "<?php $email =$this->db->get_where('tbl_website_translate', array('lang_id' =>40))->row(); 
                      if ($lang == 'ar' && $email->arabic!="") { 
                             echo ucfirst($email->arabic);
                            }elseif ($lang == 'ru' && $email->russian!="") { 
                               echo ucfirst($email->russian);
                       }elseif ($lang == 'zh' && $email->chiness!="") { 
                               echo ucfirst($email->chiness);
                            }else{ 
                               echo ucfirst($email->title);
                            } 
                      ?>",
               emails: "<?php $emails =$this->db->get_where('tbl_website_translate', array('lang_id' =>41))->row(); 
                      if ($lang == 'ar' && $emails->arabic!="") { 
                             echo ucfirst($emails->arabic);
                            }elseif ($lang == 'ru' && $emails->russian!="") { 
                               echo ucfirst($emails->russian);
                       }elseif ($lang == 'zh' && $emails->chiness!="") { 
                               echo ucfirst($emails->chiness);
                            }else{ 
                               echo ucfirst($emails->title);
                            } 
                      ?>",
                    },
           message: {
              required: "<?php if ($lang == 'ar') { 
                               echo " .الرسالة المطلوبة ";
                            }elseif ($lang == 'ru') { 
                               echo "Требуется сообщение.";
                       }elseif ($lang == 'zh') { 
                               echo "需要留言 .";
                            }else{ 
                               echo "Message required.";
                            } 
                      ?>"
             
             },
             
             contact: {
              minlength: "<?php if ($lang == 'ar') { 
                               echo "الحد الأدنى للطول هو";
                            }elseif ($lang == 'ru') { 
                               echo "Минимальная длина";
                       }elseif ($lang == 'zh') { 
                               echo "最小长度为";
                            }else{ 
                               echo "Minimum length is";
                            } 
                      ?> 7",
              maxlength: "<?php if ($lang == 'ar') { 
                               echo " الحد الأقصى للطول هو ";
                            }elseif ($lang == 'ru') { 
                               echo "Максимальная длина";
                       }elseif ($lang == 'zh') { 
                               echo "最大长度为";
                            }else{ 
                               echo "Max length is";
                            } 
                      ?>  14.",              
              required: "<?php $phone =$this->db->get_where('tbl_website_translate', array('lang_id' =>42))->row(); 
                      if ($lang == 'ar' && $phone->arabic!="") { 
                             echo ucfirst($phone->arabic);
                            }elseif ($lang == 'ru' && $phone->russian!="") { 
                               echo ucfirst($phone->russian);
                       }elseif ($lang == 'zh' && $phone->chiness!="") { 
                               echo ucfirst($phone->chiness);
                            }else{ 
                               echo ucfirst($phone->title);
                            } 
                      ?>",

             },
 
             
            },
         
          });

         

    });


       
  </script>



<style type="text/css">
/*.msgname {
    
    display: none;
}
.errorname {
    color: red;
}
.success {
    color: green;
}
*/




  /* override position and transform in 3.3.x */
.carousel-inner .item.left.active {
  transform: translateX(-33%);
}
.carousel-inner .item.right.active {
  transform: translateX(33%);
}

.carousel-inner .item.next {
  transform: translateX(33%)
}
.carousel-inner .item.prev {
  transform: translateX(-33%)
}

.carousel-inner .item.right,
.carousel-inner .item.left { 
  transform: translateX(0);
}


.carousel-control.left,.carousel-control.right {background-image:none;}



/*3*/
.carousel-control        { width:  4%; }
.carousel-control.left,.carousel-control.right {margin-left:15px;background-image:none;}

@media (min-width: 767px) and (max-width: 992px ) {
  .carousel-inner .active.left { left: -50%; }
  .carousel-inner .next        { left:  50%; }
  .carousel-inner .prev    { left: -50%; } 
  .active > div:first-child { display:block; }
  .active > div:first-child + div { display:block; }
}
@media (min-width: 992px ) {
  .carousel-inner .active.left { left: -25%; }
  .carousel-inner .next        { left:  25%; }
  .carousel-inner .prev    { left: -25%; }  
}

</style>
<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"> -->
  </body>

</html>
