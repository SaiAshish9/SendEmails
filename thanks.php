<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Thanks for your message</title>
  </head>
  <style media="screen">
h1{
  color:purple;

    animation: textcolor 10s ease-in infinite;
  }
  /* .form-control{
    margin: 10px auto ;
  } */
  h5{
    color: blue;
      margin: 10px auto !important ;
  }
  @keyframes textcolor {
  25%{
    color:yellow;
  }
   50%{
     color:blue;
   }
   75%{
     color:orange;
   }
   100%{
     color: green;
   }
  }

    .form{
      border: 2px solid blue;
margin-top: 70px;
border-radius: 20px;
    }
  </style>
  <body>
    <?php
    ob_start();
     ?>
<div class="container-fluid">
  <div class="row">
    <div class="col form">

<h1>Thanks</h1>
<div class="alert alert-success">
Thanks for your message.We will reply you within few days.
</div>

    </div>

  </div>
</div>



    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



    <?php
    ob_flush();
     ?>
  </body>
</html>
