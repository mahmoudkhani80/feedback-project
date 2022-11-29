
<?php include 'inc/header.php' ?>



<?php
$sql = 'SELECT * FROM feedback';
$result = mysqli_query($conn, $sql);
$feedback = mysqli_fetch_all($result, MYSQLI_ASSOC)
?>



      <h2>Feedback</h2>
      <?php if (empty($feedback)) : ?>
        <p class="lead">there is no feedback</p>
      <?php endif; ?>


      <?php
      session_start(); 
      if (isset($_SESSION['username'])) :
        foreach ($feedback as $item) : ?>
          <div class="card my-3 w-35">
            <div class="card-body text-center">
              <?php echo $item['body']; ?>
              <div class="text-secondary mt-2"><?php echo $item['name']; ?>: توسط
                <?php echo date_format(date_create($item['date']), 'D') ?>: روز
              </div>
              <div class="text-secondary">
                <?php
                echo $item['email']
                ?>:ایمیل از طرف </div>

            </div>
          </div>
      <?php endforeach;
      endif;
      ?>


      <?php include 'inc/footer.php' ?>