<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office" style="-ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; background: #f1f1f1; margin: 0 auto; padding: 0; height: 100%; width: 100%;">
<head>
    <meta charset="utf-8"> <!-- utf-8 works for most cases -->
    <meta name="viewport" content="width=device-width"> <!-- Forcing initial-scale shouldn't be necessary -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Use the latest (edge) version of IE rendering engine -->
    <meta name="x-apple-disable-message-reformatting">  <!-- Disable auto-scale in iOS 10 Mail entirely -->
    <title></title> <!-- The title tag shows in email notifications, like Android 4.4. -->

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700" rel="stylesheet">


</head>

<body width="100%" style="-ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; background: #f1f1f1; font-family: 'Nunito Sans', sans-serif; font-weight: 400; font-size: 15px; line-height: 1.8; color: rgba(0,0,0,.4); mso-line-height-rule: exactly; background-color: #222222; margin: 0 auto; height: 100%; width: 100%; padding: 0;">
  <center style="-ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; width: 100%; background-color: #f1f1f1;">
    <div style="-ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; display: none; font-size: 1px; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; mso-hide: all; font-family: sans-serif;">
      &zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;
    </div>
    <div style="-ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; max-width: 600px; margin: 0 auto;" class="email-container">
      <!-- BEGIN BODY -->



      <table style="max-width:800px;margin:0px auto;background:#f7f8f2; width:100%; border-collapse:collapse;">
    <tr style="background:#000 !important; border-bottom:5px solid #cea749;"> 
      <td>
        <p style="max-width:160px; padding:5px 10px;  width:100%; display:inline-block;">
          <img src="https://royalcg.com/demo/assets/images/logo.png" style="width:100%"></p> 
      </td>
      <td>
        <p style="color:#c5931c;font-size:16px;font-weight:400;padding:10px 20px;text-decoration:none;">Home</p>
      </td>
      <td>
        <p style="color:#fff;font-size:16px;font-weight:400;padding:10px 20px;text-decoration:none;">About us</p>
      </td>
      <td>
        <p style="color:#fff; font-size:16px; font-weight:400; padding:10px 20px; text-decoration:none;"> Services</p>
      </td>
      <td>
        <p style="color:#fff; font-size:16px; font-weight:400; padding:10px 20px; text-decoration:none;"> Cities</p>
      </td>
      <td>
        <p style="color:#fff; font-size:16px; font-weight:400; padding:10px 20px; text-decoration:none;">Contact</p>
      </td>
    </tr>
</table>

<table style="padding:15px; max-width:620px;margin:0px auto;width:100%; border-collapse:collapse; text-align:center; background:#000; border:10px solid #fff; margin-top:20px;">
  <tbody>
    <tr>
      <td style="padding-top:15px;">
        <p style="display: block;overflow:hidden;padding:0px;">
            <img style="max-width:160px;width: 100%;" src="http://votivephp.in/risparmi/public/admin/fund_img/logo.png">
        </p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:2px solid #d2d2d2;margin:15px auto 15px;padding:10px;display:block;overflow:hidden;max-width: 400px;">
        <h2 style="margin:0 0; color:#fff;">Hi <?php echo $emaildata->name; ?></h2>
      </td>
    </tr>
    <tr>
      <td>
        <p style=" margin:0 0 8px 0; color:#fff; ">Your Inquiry has been submitted.</p>             
      </td>
    </tr>
    <tr>
      <!-- <td>   
        <p style="color:#cea749;font-size:14px;font-weight:600;">Get More Details</p>
      </td> -->
    </tr>
  </tbody>
</table>

<table style="padding:15px; max-width:620px;margin:0px auto;width:100%; border-collapse:collapse; text-align:center; background:#fff; border:10px solid #cea749; margin-bottom:20px;">
  <tbody>
    <tr>
      <td style="padding-top:18px;"><b>Thanks For Inquiry</b></td>
    </tr>
    <tr>
      <td>
       
      </td>
    </tr>
    <tr>
      <td>
        <strong style="width: 45%;display: inline-block;text-align: left;padding-left: 15px"> User Email</strong> <span style="width: 45%;display: inline-block;text-align: left"><?php echo $emaildata->email;?></span>          
      </td>
    </tr>
    <tr>
      <td>
         <strong style="width: 45%;display: inline-block;text-align: left;padding-left: 15px"> User Contact</strong> <span style="width: 45%;display: inline-block;text-align: left"><?php echo $emaildata->contact;?></span>         
      </td>
    </tr>
    <tr>
      <td>   
       <strong style="width: 45%;display: inline-block;text-align: left;padding-left: 15px">  City</strong> <span style="width: 45%;display: inline-block;text-align: left"><?php
            $city = $this->db->get_where('tbl_city', array('city_id' => $emaildata->city_id))->row();
        echo $city->city_name;?></span>
      </td>
    </tr>
    <tr>
      <td>   
      
      </td>
    </tr>
    <tr>
      <td style="padding-bottom:15px;">   
       <!-- <p style="color:#ffffff; font-size:14px; font-weight:600; padding: 8px 15px; border:2px solid #cea749; display:inline-block; background:#cea749; text-decoration:none;">Royal Cg</p> -->
      </td>
    </tr>
  </tbody>
</table>
<table style="padding:15px; max-width:800px;margin:0px auto;width:100%; border-collapse:collapse; text-align:center; background:#000;">
  <tbody>
    <tr>
      <td style="padding:15px;">
        <p style="max-width:200px;margin:0px auto 0px;float:none;display:block;">
          <img src="http://votivephp.in/risparmi/public/admin/fund_img/logo.png" style="width:100%;">
        </p>
      </td>
    </tr>    
  </tbody>
</table>
<table style="padding:15px; max-width:800px;margin:0px auto;width:100%; border-collapse:collapse; text-align:center; background:#000;">
  <tbody>
    <tr>
      <td style="color:#a5a5a5; font-size:15px; line-height:23px; font-weight:400; text-align:center; margin-bottom:0px; padding:15px; margin-top:5px;">
        Copyright @ 2019 Concierge, All Rights Reserved.
      </td>
    </tr>    
  </tbody>
</table>



<!-- 


<table style="padding:15px; max-width:800px;margin:0px auto;width:100%; border-collapse:collapse; text-align:center; background:#000;">
  <tbody>
    <tr>
      <td style="vertical-align:top;">
          <table style="max-width:100%;margin:0px auto;width:100%; border-collapse:collapse; text-align:left;">
            <tbody>
              <tr style="">
                <td style="color:#a5a5a5; font-size:18px; line-height:23px; font-weight:400; padding-bottom:25px; padding-left:10px;">Contact Us</td>
              </tr>
              <tr>
                <td style="margin-bottom:5px; padding-left:10px;">
                  <span style="color:#a5a5a5;  font-size:12px; line-height:23px;font-weight:400; padding-left:0px;display: block;"><i class="fa fa-map-marker" aria-hidden="true" style="font-size: 25px; color: #a5a5a5;"></i> 132, My Street, Kingston, New York 12401</span>
                </td>
              </tr>
              <tr>
                <td style="margin-bottom:5px; padding-left:10px;">
                  <span style="color:#a5a5a5;  font-size:12px; line-height:23px;font-weight:400; padding-left:0px;display: block;"><a href="tel:2701886026" rel="nofollow" style="color: #a5a5a5;  font-size: 12px; line-height: 23px; font-weight: 400;display: block; text-decoration:none;"><i class="fa fa-mobile" aria-hidden="true" style="font-size: 25px; color: #a5a5a5;"></i> 270 - 188 - 6026</a></span>
                </td>
              </tr>
              <tr>
                <td style="margin-bottom:5px; padding-left:10px;">
                  <span style="color:#a5a5a5;  font-size:12px; line-height:23px;font-weight:400; padding-left:0px;display: block;"><a href="mailto:domain@expooler.com" rel="nofollow" style="color: #a5a5a5;  font-size: 12px; line-height: 23px; font-weight: 400; display: block; text-decoration:none;"><i class="fa fa-envelope-o" aria-hidden="true" style="font-size: 25px; color: #a5a5a5;"></i> info@royalcg.com</a></span>
                </td>
              </tr> 

              <tr>
                <td style="margin-bottom:5px; padding-left:10px; padding-top:15px;">
                  <a href="#" class="facebook" rel="nofollow" style="display:inline-block; color:#a5a5a5; font-size:12px; line-height:23px; font-weight:400; padding:3px 5px; text-decoration:none;"><i class="fa fa-facebook" style="font-size: 25px;"></i></a>
       
                  <a href="#" class="twitter" rel="nofollow" style="display:inline-block; color:#a5a5a5; font-size:12px; line-height:23px; font-weight:400; padding:3px 5px; text-decoration:none;"><i class="fa fa-twitter" style="font-size:25px;"></i></a>

                  <a href="#" class="linkedin" rel="nofollow" style="display:inline-block; color:#a5a5a5; font-size:12px; line-height:23px; font-weight:400; padding:3px 5px; text-decoration:none;"><i class="fa fa-linkedin" style="font-size: 25px;"></i></a>

                  <a href="#" class="google-plus" rel="nofollow" style="display:inline-block; color: #a5a5a5; font-size: 12px; line-height: 23px; font-weight: 400; padding: 3px 5px; text-decoration:none;"><i class="fa fa-google-plus" style="font-size: 25px;"></i></a>

                  <a href="#" class="instagram" rel="nofollow" style="display:inline-block; color:#a5a5a5; font-size:12px; line-height:23px; font-weight:400; padding:3px 5px; text-decoration:none;"><i class="fa fa-instagram" style="font-size:25px;"></i></a>
                </td>
              </tr>              
            </tbody>
          </table>        
      </td>
      <td style="vertical-align:top;">
          <table style="max-width:100%;margin:0px auto;width:100%; border-collapse:collapse; text-align:left;">
            <tbody>
              <tr style="">
                <td style="color:#a5a5a5; font-size:18px; line-height:23px; font-weight:400; padding-bottom:25px; padding-left:10px;">Book Now</td>
              </tr>
              <tr>
                <td style="margin-bottom:5px; padding-left:10px;">
                  <a href="#" rel="nofollow" style="display: block; color: #a5a5a5; font-size: 12px; line-height: 22px; font-weight: 400; padding: 0px 0; text-decoration:none;">Hotels</a>
                </td>
              </tr>
               <tr>
                <td style="margin-bottom:5px; padding-left:10px;">
                  <a href="#" rel="nofollow" style="display: block; color: #a5a5a5; font-size: 12px; line-height: 22px; font-weight: 400; padding: 0px 0; text-decoration:none;">Cruises</a>
                </td>
              </tr>
               <tr>

                <td style="margin-bottom:5px; padding-left:10px;">
                  <a href="#" rel="nofollow" style="display: block; color: #a5a5a5; font-size: 12px; line-height: 22px; font-weight: 400; padding: 0px 0; text-decoration:none;">Tours</a>
                </td>
              </tr>

               <tr>                <td style="margin-bottom:5px; padding-left:10px;">
                  <a href="#" rel="nofollow" style="display: block; color: #a5a5a5; font-size: 12px; line-height: 22px; font-weight: 400; padding: 0px 0; text-decoration:none;">Car Rental</a>
                </td>
              </tr>
               <tr>
                <td style="margin-bottom:5px; padding-left:10px;">
                  <a href="#" rel="nofollow" style="display: block; color: #a5a5a5; font-size: 12px; line-height: 22px; font-weight: 400; padding: 0px 0; text-decoration:none;">Luxury Jets</a>
                </td>
              </tr>
               <tr>
                <td style="margin-bottom:5px; padding-left:10px;">
                  <a href="#" rel="nofollow" style="display: block; color: #a5a5a5; font-size: 12px; line-height: 22px; font-weight: 400; padding: 0px 0; text-decoration:none;">Medical Travel</a>
                </td>
              </tr>
               <tr>
                <td style="margin-bottom:5px; padding-left:10px;">
                  <a href="#" rel="nofollow" style="display: block; color: #a5a5a5; font-size: 12px; line-height: 22px; font-weight: 400; padding: 0px 0; text-decoration:none;">Education</a>
                </td>
              </tr>
               <tr>
                <td style="margin-bottom:5px; padding-left:10px;">
                  <a href="#" rel="nofollow" style="display: block; color: #a5a5a5; font-size: 12px; line-height: 22px; font-weight: 400; padding: 0px 0; text-decoration:none;">Restaurants</a>
                </td>
              </tr>
               <tr>
                <td style="margin-bottom:5px; padding-left:10px;">
                  <a href="#" rel="nofollow" style="display: block; color: #a5a5a5; font-size: 12px; line-height: 22px; font-weight: 400; padding: 0px 0; text-decoration:none;">Security Guards</a>
                </td>
              </tr>
            </tbody>
          </table>        
      </td>
      <td style="vertical-align:top;">
          <table style="max-width:100%;margin:0px auto;width:100%; border-collapse:collapse; text-align:left;">
            <tbody>
              <tr style="">
                <td style="color:#a5a5a5; font-size:18px; line-height:23px; font-weight:400; padding-bottom:25px; padding-left:10px;">Exploore</td>
              </tr>
              <tr>
                <td style="margin-bottom:5px; padding-left:10px;">
                  <a href="#" rel="nofollow" style="display: block; color: #a5a5a5; font-size: 12px; line-height: 22px; font-weight: 400; padding: 0px 0; text-decoration:none;">About Royalcg</a>
                </td>
              </tr>
              <tr>
                <td style="margin-bottom:5px; padding-left:10px;">
                  <a href="#" rel="nofollow" style="display: block; color: #a5a5a5; font-size: 12px; line-height: 22px; font-weight: 400; padding: 0px 0; text-decoration:none;">Privacy Police</a>
                </td>
              </tr>
              <tr>
                <td style="margin-bottom:5px; padding-left:10px;">
                  <a href="#" rel="nofollow" style="display: block; color: #a5a5a5; font-size: 12px; line-height: 22px; font-weight: 400; padding: 0px 0; text-decoration:none;">Teams & Condition</a>
                </td>
              </tr>
              <tr>
                <td style="margin-bottom:5px; padding-left:10px;">
                  <a href="#" rel="nofollow" style="display: block; color: #a5a5a5; font-size: 12px; line-height: 22px; font-weight: 400; padding: 0px 0; text-decoration:none;">Travel Agents</a>
                </td>
              </tr>
              <tr>
                <td style="margin-bottom:5px; padding-left:10px;">
                  <a href="#" rel="nofollow" style="display: block; color: #a5a5a5; font-size: 12px; line-height: 22px; font-weight: 400; padding: 0px 0; text-decoration:none;">SiteMap</a>
                </td>
              </tr>
              <tr>
                <td style="margin-bottom:5px; padding-left:10px;">
                  <a href="#" rel="nofollow" style="display: block; color: #a5a5a5; font-size: 12px; line-height: 22px; font-weight: 400; padding: 0px 0; text-decoration:none;">Group Services</a>
                </td>
              </tr>
              <tr>
                <td style="margin-bottom:5px; padding-left:10px;">
                  <a href="#" rel="nofollow" style="display: block; color: #a5a5a5; font-size: 12px; line-height: 22px; font-weight: 400; padding: 0px 0; text-decoration:none;">Add Property</a>
                </td>
              </tr> 
              <tr>
                <td style="margin-bottom:5px; padding-left:10px;">
                  <a href="#" rel="nofollow" style="display: block; color: #a5a5a5; font-size: 12px; line-height: 22px; font-weight: 400; padding: 0px 0; text-decoration:none;">Add Activity</a>
                </td>
              </tr>             
            </tbody>
          </table>        
      </td>

      <td style="vertical-align:top;">
          <table style="max-width:100%;margin:0px auto;width:100%; border-collapse:collapse; text-align:left;">
            <tbody>
              <tr style="">
                <td style="color:#a5a5a5; font-size:18px; line-height:23px; font-weight:400; padding-bottom:25px; padding-left:10px;">Top Deals</td>
              </tr> 
              <tr>
                <td style="margin-bottom:5px; padding-left:10px;">
                  <a href="#" rel="nofollow" style="display: block; color: #a5a5a5; font-size: 12px; line-height: 22px; font-weight: 400; padding: 0px 0; text-decoration:none;">Edemil HotelAQ</a>
                </td>
              </tr>              
              <tr>
                <td style="margin-bottom:5px; padding-left:10px;">
                  <a href="#" rel="nofollow" style="display: block; color: #a5a5a5; font-size: 12px; line-height: 22px; font-weight: 400; padding: 0px 0; text-decoration:none;">Turhal Hotel</a>
                </td>
              </tr>              
              <tr>
                <td style="margin-bottom:5px; padding-left:10px;">
                  <a href="#" rel="nofollow" style="display: block; color: #a5a5a5; font-size: 12px; line-height: 22px; font-weight: 400; padding: 0px 0; text-decoration:none;">Kadirly Hotel</a>
                </td>
              </tr>              
              <tr>
                <td style="margin-bottom:5px; padding-left:10px;">
                  <a href="#" rel="nofollow" style="display: block; color: #a5a5a5; font-size: 12px; line-height: 22px; font-weight: 400; padding: 0px 0; text-decoration:none;">Sarina Hotel</a>
                </td>
              </tr>              
              <tr>
                <td style="margin-bottom:5px; padding-left:10px;">
                  <a href="#" rel="nofollow" style="display: block; color: #a5a5a5; font-size: 12px; line-height: 22px; font-weight: 400; padding: 0px 0; text-decoration:none;">Amasya Hotel</a>
                </td>
              </tr>  
              <tr>
                <td style="margin-bottom:5px; padding-left:10px;">
                  <a href="#" rel="nofollow" style="display: block; color: #a5a5a5; font-size: 12px; line-height: 22px; font-weight: 400; padding: 0px 0; text-decoration:none;">Matel Hotel</a>
                </td>
              </tr>              
            </tbody>
          </table>        
      </td>
    </tr>    
  </tbody>
</table>

 -->
</div>
  </center>
</body>
</html>
