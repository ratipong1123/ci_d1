<!DOCTYPE html>
<html lang="en">
<head>
  <title>Show</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<body style="background-color: #CCFFCC">
<div class="container">
  <h2>งาน</h2>          
  <p><a href="add"></a>เพิ่ม ลบ แก้ไข</p>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>id</th>
        <th>name</th>
        <th>password</th>
        <th>status</th>
        <th>edit</th>
        <th>del</th>
      </tr>
    </thead><?php foreach 

    ($rs as $r) {?>
    <tbody>

      <tr>
        <td> <?php echo $r['id'] ?> </td>
        <td> <?php echo $r['name'] ?> </td>
        <td> <?php echo $r['password'] ?> </td>
        <td> <?php echo $r['status'] ?> </td>
        <td><a href="edit/<?php echo $r['id'] ?>">แก้ไขข้อมูล</td>
        <th><a href="del/<?php echo $r['id'] ?>" onclick="return confirm('คุณต้องการจะลบใช่หรือไม่?')";>ลบขอมูล</th>
      </tr>

      <?php } ?>
  

    </tbody>
  </table>
  <button type="submit" class="btn btn-danger"><a href="<?=base_url();?>index.php/member/add">เพิ่มข้อมูล</button>
  <button type="submit" class="btn btn-danger"><a href="<?=base_url();?>index.php/member/logout">ออกจากระบบ</button>
</div>

</body>
</html>