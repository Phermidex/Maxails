<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Maxails -  Correos Maxivos</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
         body{
          background: #bdc3c7;
         }

         .container{
          background: #bdc3c7;
         }


         .cnt {
          float: none;
          margin: 0 auto;
         }

         h1{
          color: #ecf0f1;
         }

         .panel-title{
          background: #c0392b;
          border-radius: none;
         }

         .panel-default{
          background: #f1c40f;
          border-radius: 0px;
          height: 10%;
         }

         .panel-title{
          color: #fff;
          text-align: center;
         }

         #panel_princ{
          min-height: 400px;
          height: 400px;
         }

         .img-thumbnail{
          border: none;
          background: none;
          width: 100%;
          height: 1024px;
         }

         .video {
          margin-top: 25px; 
         }

         .img {
          margin-top: 22px;
         }
    </style>
  </head>
  <body>
    
    <div class="container">  
          <div id="panel_princ" class="panel penel-default">
               <div class="panel panel-title">
                   <h2><?= @$this->input->get('title'); ?></h2>
               </div>
               <div class="panel panel-content">
                 <?php if(@$this->input->get('img') != ""){ ?>
             <div class="embed-responsive embed-responsive-16by9 col-md-5"><?=$this->dt->img(@$this->input->get('img'));?></div>
             <?php } ?>
             <?php if(@$this->input->get('video') != ""){ ?>
             <div class="embed-responsive embed-responsive-16by9 col-md-7"><?=$this->dt->video(@$this->input->get('video'));?></div>
             <?php } ?>
               </div>
          </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>