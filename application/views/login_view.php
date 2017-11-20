


<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>ADMINs</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Flaty User login Form template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="<?php echo base_url('web/css/style.css') ?>" rel="stylesheet" type="text/css" media="all" /> 
<!-- //Custom Theme files -->
<!-- js -->
<script src="<?php echo base_url('web/js/jquery-2.2.3.min.js') ?>"></script>
<!-- //js -->  
<!-- web font -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'><!--web font-->
<!-- //web font -->
</head>
<body>
    <!-- main -->
    <div class="main-agileits">
        <h1>Login Admin <br>( <?php echo tanggalx();?> )</h1>
        
        <div class="mainw3-agileinfo form">
            <div id="login">    
                <form action="<?php echo base_url('Login'); ?>" method="post"> 
                    <div class="field-wrap">
                        <label> Masukkan Username<span class="req">*</span> </label>
                        <input type="text" name="username" equired autocomplete="off"/>
                    </div> 
                    <div class="field-wrap">
                        <label> Masukkan Password<span class="req">*</span> </label>
                        <input type="password" name="password" required autocomplete="off"/>
                    </div> 
                    
                    <button class="button button-block"/>Log In</button> 
                </form> 
            </div>
         
        </div>  
    </div>  
    <!-- //main -->
    <!-- copyright -->
    <div class="w3copyright-agile">
        <p>© 2017 Flaty User <a href="LoginCustomer">login</a> Form. All rights reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a></p>
    </div>
    <!-- //copyright --> 
    <script>
    $('.form').find('input, textarea').on('keyup blur focus', function (e) { 
      var $this = $(this),
          label = $this.prev('label');

          if (e.type === 'keyup') {
                if ($this.val() === '') {
              label.removeClass('active highlight');
            } else {
              label.addClass('active highlight');
            }
        } else if (e.type === 'blur') {
            if( $this.val() === '' ) {
                label.removeClass('active highlight'); 
                } else {
                label.removeClass('highlight');   
                }   
        } else if (e.type === 'focus') {
          
          if( $this.val() === '' ) {
                label.removeClass('highlight'); 
                } 
          else if( $this.val() !== '' ) {
                label.addClass('highlight');
                }
        }
 
    }); 
    </script>
</body>
</html>