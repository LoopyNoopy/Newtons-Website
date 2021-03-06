<!DOCTYPE html>
<html lang = "en">
<head>
      <?php include("includes/header.html"); ?>
</head>
    
<body>
        
<?php include("includes/navbar/nav.php"); ?>

<div class="container">
    <div class="row">
        <div class="col-xs-8 col-xs-offset-2">
            <h1>Contact Us</h1>
        </div>
    </div>
</div>
        
<div class="container">
    <div class="row">
        
        <div class="col-xs-8 col-xs-offset-2">
            <!--<div class="well">-->
                <div class="iframe-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2535.3263895153214!2d-3.5006216840335993!3d50.54669998830547!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x486d094baa374e1b%3A0xaf15186efeac271f!2sS.J.+Newton+Electrical+Ltd!5e0!3m2!1sen!2suk!4v1490833998562" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            <!--</div>-->
        </div>
        
    </div>  
</div>

<br>

<div class="container">
    <div class="row">
        <div class="col-xs-8 col-xs-offset-2 col-lg-2 col-lg-offset-2">
            <div class="well">
                Phone number:
                <br>
                <span class="glyphicon glyphicon-earphone"></span><a href="tel:01626 778955"> 01626 778955</a>
            </div>
        </div>
        
        <div class="col-xs-8 col-xs-offset-2 col-lg-2 col-lg-offset-0">
            <div class="well">
                <address>
                    Address:
                    <br>
                    S J Newton Electrical
                    <br>
                    2 Pellew Arcade
                    <br>
                    Teign Street
                    <br>
                    Teignmouth
                    <br>
                    TQ14 8EB
                </address>
            </div>
         </div>
            
        <div class="col-xs-8 col-xs-offset-2 col-lg-2 col-lg-offset-0">
            <div class="well">
                Email:
                <br>
                <span class="glyphicon glyphicon-envelope"></span><a href="mailto:danieljbburgess@hotmail.co.uk" target="_top"> danieljbburgess@hotmail.co.uk</a>
            </div>
        </div>
        
        <div class="col-xs-8 col-xs-offset-2 col-lg-2 col-lg-offset-0">
            <div class="well" style="text-align: center;">
                <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#repairForm">Repair form</button>
            </div>
        </div>
        
    </div>
</div>

<div id="repairForm" class="modal fade" role="dialog">
    <?php include("modals/repairForm.php"); ?>
 </div>

       
    </body>
</html>