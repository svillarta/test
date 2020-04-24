<?php
   include ('handShake.php');
 ?>
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
      <div class="col">
        <form class="" action="index.html" method="post" id="form">
          <div class="form-group">
            <label for="exampleFormControlInput1">Article Title</label>
            <input type="text" class="form-control" id="articleTitle">
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Article Content Snippet</label>
            <textarea class="form-control" id="articleContent" rows="3"></textarea>
          </div>
          <div class="col-md-2">
            <button  class="btn btn-primary" name="button">Publish</button>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
<script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script type="text/javascript">
  $('#form').on('submit',function(event){
    event.preventDefault();
    var articleTitle = $('#articleTitle').val();
    var articleContent = $('#articleContent').val();
    $.ajax({
          url:"addArticleForm.php",
          type: 'post', // performing a POST request
          data : {
            articleTitle : articleTitle,  // will be accessible in $_POST['data1']
            articleContent : articleContent // will be accessible in $_POST['data1']
          },
          beforeSend: function(){
          },
          success:function(dataa){
            if (dataa == 'success') {
              alert('Successfuly Updated');
            }else if(dataa == 'error'){
              alert('Article not Updated');
            }else if(dataa == 'noContent'){
              alert('No Content');
            }else{
              alert(dataa );
            }
          }
      });
  });
</script>
