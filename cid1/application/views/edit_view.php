<!DOCTYPE html>
<html lang="en">
<head>
  <title>แก้ไขข้อมูล</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<body style="background-color: #CCFFCC">
<div class="container">
  <h2>Edit data</h2>
  <!----<form class="form-horizontal">--->
  <?php echo form_open('member/update/'.$rs['id']);?>
    <div class="form-group">
      <label class="control-label col-sm-2" for="id">id</label>
      <div class="col-sm-10">
        <input type="text" value="<?php echo $rs['id'] ?>" class="form-control" id="id" placeholder="Enter id" name="id" readonly>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">name</label>
      <div class="col-sm-10">          
        <input type="text" value="<?php echo $rs['name'] ?>"  class="form-control" id="name" placeholder="Enter name" name="name">
      </div>
    </div>
	 <div class="form-group">
      <label class="control-label col-sm-2" for="password">password</label>
      <div class="col-sm-10">          
        <input type="text" value="<?php echo $rs['password'] ?>" class="form-control" id="password" placeholder="Enter password" name="password">
      </div>
    </div>
   	 <div class="form-group">
      <label class="control-label col-sm-2" for="status">status</label>
      <div class="col-sm-10">          
        <input type="text" value="<?php echo $rs['status'] ?>"  class="form-control" id="status" placeholder="Enter status" name="status">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
        <button type="submit" class="btn btn-default"><a href="<?=base_url();?>index.php/member/show">กลับไปหน้าหลัก</button>
      </div>
    </div>
  <?php echo form_close();?>
</div>

</body>
</html>