<?php include 'inc/header.php'?>
   <?php 
    $sql = 'SELECT * FROM feedback';
    $result = mysqli_query($conn , $sql);
    $feedback = mysqli_fetch_all($result, MYSQLI_ASSOC)
   
   
   
   
   
   ?>
    <h2>Feedback</h2>
    <?php if(empty($feedback)):?>
      <p class="lead">there is no feedback</p>
    <?php endif;?>  

    <?php foreach($feedback as $item):?>
    <div class="card my-3">
     <div class="card-body">
      <?php echo $item['body'];?>
     </div>
   </div>
   <?php endforeach;?>


   <?php include 'inc/footer.php'?>