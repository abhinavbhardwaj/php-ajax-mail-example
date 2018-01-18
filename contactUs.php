<?php include 'header.php'; ?>
<div class="BannerBox_inner"> <img src="images/contact_banner.jpg" style="background:url(images/contact_banner.jpg) center center" class="innerbannerimg center-block" alt="">
  <div class="bannerText">
    <table height="100%" width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="100%"><div class="container">
            <div class="col-xs-12 col-sm-12">
              <div class="topimg"><img src="images/topimg.png" width="100%" alt=""></div>
              <div class="bannerTextBox">
                <div class="bannerTitel">We’re here
                  to help you.</div>
              </div>
            </div>
          </div></td>
      </tr>
    </table>
  </div>
</div>
<div class="maintabsbox">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12">
        <div class="space">&nbsp;</div>
        <div class="normaltext"> Contact us to learn more about our treatment programs or any questions you might have.<br>
          You may call us anytime, or use the form below to submit a confidential inquiry. </div>
        <div class="space">&nbsp;</div>
      </div>
    </div>
  </div>
</div>
<div class="container blockColor">
  <div class="col-xs-12 col-sm-12">
    <div class="space">&nbsp;</div>
    <div class="normaltext addrestext"> <strong>Admission:</strong> (866) 841-4750<br />
      
      <br>
      <strong>Billing & Collections</strong><br />
      (949) 558-4702 | <a href="" style="color:#fff;">collections@koolrecovery.com</a> </div>
    <div class="space">&nbsp;</div>
  </div>
</div>
<div class="container" >
   <form id="ajax-contact" method="post" action="mail.php"> 
       <div class="space">&nbsp;</div>
  <div class="col-xs-12 col-sm-12">
      <div id="form-messages" class="alert fade in alert-dismissable" style="display:none;">
                
       </div> 
    <input type="hidden" name="form_type" class="form-control" value="contact-us" />
    <div class="row">
      <div class="col-xs-6 col-sm-6 text-center">
          <input type="text" name="first_name" class="form-control" required='true' placeholder="first name" />
      </div>
      <div class="col-xs-6 col-sm-6 text-center">
        <input type="text" name="last_name" class="form-control" placeholder="last name" />
      </div>
    </div>
    <br />
    <div class="row">
      <div class="col-xs-6 col-sm-6 text-center">
          <input type="number" name="phone" class="form-control" placeholder="phone" />
      </div>
      <div class="col-xs-6 col-sm-6 text-center">
          <input type="email" name="email" class="form-control"  required='true' placeholder="email" />
      </div>
    </div>
    <br />
    <div class="row">
      <div class="col-xs-12 col-sm-12 text-center">
        <textarea class="form-control"  name="message" rows="5"  required='true' placeholder="message"></textarea>
      </div>
    </div>
    <div class="contactbtn">
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
    <div class="space">&nbsp;</div>
   
  </div> 
</form>
</div>
<div class="lightblutbox">
  <div class="container">
    <div class="space2">&nbsp;</div>
    <div class="row">
      <div class="col-xs-12 col-sm-12 text-center">
       <div class="col-xs-4 col-xs-offset-4 col-sm-8 col-sm-offset-2">
       <div class="phoneimg"><img src="images/detox_phone.png" class="img-responsive center-block" alt=""></div>
       </div>
        <div class="blutnormaltext">Not sure where to start?<br>
          Speak with one of our treatment counselors<br>
          and plan your road map to recovery.<br>
          <br>
          <a class="InnerPhoneno" href="tel:8668414750">866.841.4750</a></div>
      </div>
    </div>
    <div class="space2">&nbsp;</div>
  </div>
</div>
<?php include 'footer.php'; ?>
