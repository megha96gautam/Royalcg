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
     <!--  <td>
        <p style="max-width:160px; padding:5px 10px;  width:100%; display:inline-block;">
          <img src="http://votivephp.in/risparmi/public/admin/fund_img/logo.png" style="width:100%"></p> 

      </td> -->
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
        <h2 style="margin:0 0; color:#fff;">Hi Malik</h2>
      </td>
    </tr>
    <tr>
      <td>
        <?php $cate= $this->db->get_where('pages_detail', array('id' =>$emaildata->category))->row(); ?>
        <p style=" margin:0 0 8px 0; color:#fff; ">Request you to please check the "<b><?php echo $cate->page_title; ?></b>" service and please do respond to this inquiry person</p>             
      </td>
    </tr>
    <tr>
      <td>   
        <!-- <a style="color:#cea749;font-size:14px;font-weight:600;" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700">Get More Details</a> -->
       
      </td>
    </tr>
  </tbody>
</table>

<table style="padding:15px; max-width:620px;margin:0px auto;width:100%; border-collapse:collapse; text-align:center; background:#fff; border:10px solid #cea749; margin-bottom:20px;">
  <tbody>
    <tr>
      <td style="padding-top:18px;"><b>Plesae Response User</b></td>
    </tr>
    <tr>
      <td>
       
      </td>
    </tr>
    <tr>
      <td>
        <strong style="width: 45%;display: inline-block;text-align: left;padding-left: 15px"> User Name</strong> <span style="width: 45%;display: inline-block;text-align: left"><?php echo $emaildata->name;?></span>          
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
       <strong style="width: 45%;display: inline-block;text-align: left;padding-left: 15px"> City</strong> <span style="width: 45%;display: inline-block;text-align: left"><?php
            $city = $this->db->get_where('tbl_city', array('city_id' => $emaildata->city_id))->row();
        echo $city->city_name;?></span>
      </td>
    </tr>
    <tr>
      <td>   
       <?php echo $emaildata->message;?>
      </td>
    </tr>
    <tr>
     <!--  <td style="padding-bottom:15px;">   
       <p style="color:#ffffff; font-size:14px; font-weight:600; padding: 8px 15px; border:2px solid #cea749; display:inline-block; background:#cea749; text-decoration:none;">Royal Cg</p>
      </td> -->
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

</div>
  </center>
</body>
</html>