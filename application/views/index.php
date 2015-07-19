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
          background: #ecf0f1;
         }

         .container{
          background: #34495e;
         }


         .cnt {
          float: none;
          margin: 0 auto;
         }

         h1{
          color: #ecf0f1;
         }

         .panel-title{
          background: #2c3e50;
          border-radius: none;
         }

         .panel-content{
          background: #f1c40f;
          border-radius: 0px;
          height: 10%;
         }

         .img-thumbnail{
          border: none;
          background: none;
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
    <div class="container panel panel-default">
        <div class="panel panel-title">
          <h1 style="text-align: center;"><?php if(@$emp != ''){ echo @$emp;} else{ echo "Nueva Campaña.";} ?></h1>
        </div>
        <div class="panel panel-content">
          <div style="background: #ecf0f1; height: 400px;" class="col-md-8 cnt">
            <?php 
                if($this->input->get()){
            ?><div style="padding: 20px 20px;" class="panel panel-default col-md-12"><h1>Formulario</h1><br/><?=@$form_pub;?></div>
             <?php }else{?>
                <h1 class="text-info">Opciones para publicidad</h1>
                <ul style="padding: 20px 20px;" class="nav nav-pills">
                  <li><a class="btn btn-default" href="?data=video">Pub Video</a></li>
                  <li><a class="btn btn-default" href="?data=images">Pub images</a></li>
                </ul>
             <?php } ?>
             <?=br(2)#.@$email;?>
             <?php if(@$img != ""){ ?>
             <div class="embed-responsive embed-responsive-16by9 col-md-5"><?=$this->dt->img(@$img);?></div>
             <?php } ?>
             <?php if(@$video != ""){ ?>
             <div class="embed-responsive embed-responsive-16by9 col-md-7"><?=$this->dt->video(@$video);?></div>
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