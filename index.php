<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styles.css">

    <title>Developers Forum</title>
  </head>
  <body style="margin-bottom:100px">
  <?php include 'dbconnect.php';?>
  <?php
    include 'header.php'; ?>
    <!-- slider start here -->



  <div class="container">
    <div class="row row-content ">
    <div class="col">
     <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
     <ol class="carousel-indicators">
       <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
       <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
       <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://source.unsplash.com/2400x700/?coding,python" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://source.unsplash.com/2400x700/?programmer,java" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://source.unsplash.com/2400x700/?coding,apple" class="d-block w-100" alt="...">
      </div>
     </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
     </a>
     <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
       <span class="carousel-control-next-icon" aria-hidden="true"></span>
       <span class="sr-only">Next</span>
     </a>
    </div>
   </div>
  </div>
 </div>
</div>
<!-- categories container start here -->
    <div class="container ">
    <div class="row justify-content-center ml-3">
    <?php $sql="SELECT * FROM `categories`";
    $result=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($result))
    {
    // echo $row['categery_id'];
    // echo $row['categery_name'];
    $cat =$row['categery_name'];
    $id =$row['categery_id'];
    $desc =$row['categery_description'];
  echo '<div class="col-md-4 my-3">
    <div class="card align-center" style="width: 18rem;">
  <img src="https://source.unsplash.com/500x400/?'. $cat .',coding" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><a href="thread.php?catid='. $id .'">'. $cat . '</a></h5>
    <p class="card-text">'. substr($desc,0,30) .'</p>
    <a href="thread.php?catid=' . $id .'" class="btn btn-primary">view threads</a>
  </div>
</div>
    </div>';
  
    }
    ?>

<!-- use a loop to iterate through categories -->

  </div>
  </div>

    <?php include 'footer.php';

?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>