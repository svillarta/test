<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.css"/>
  </head>
  <body>
    <div class="container">
      <!-- add button -->
      <div class="col">
        <a href="addArticle.php" name="button" class="btn btn-primary">
          Create New Article
        </a>
      </div>
      <!-- table for view -->
      <div class="col">
        <?php
          include ('handShake.php');
          $query = mysqli_query($con,"SELECT * FROM articles");
          while ($row = mysqli_fetch_assoc($query)) {
            ?>
            <div class="container">
              <div class="col" align="right">
                <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">Edit</a>|
                <a href="" class="btn btn-danger" id="btndel" delID="<?php echo  $row['id']?>">Delete</a>
              </div>
              <div class="container">
                <div class="col-md-5"><h1><b><?php echo $row['articleTitle'] ?></b><h1></div>
                <div class="col-md-5"><p> Publish on: <?php echo $row['datePublish'] ?></p></div>
                <div class="col"><?php echo $row['articleContent'] ?></div>
              </div>
            </div>
            <?php
          }
        ?>
        
      </div>
    </div>
  </body>

  <div class="modal" id="del" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Modal body text goes here.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

</html>
<script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


<script type="text/javascript">
  $('#btndel').on('click',function(event){
    event.preventDefault();
    delID  = jQuery(this).attr('sid');
  });
</script>

