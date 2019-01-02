<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="delete_process.php" method="post">
      <input type="hidden" name="id" value="<?=$_GET['id']?>">
      <input type="submit" name="confirm" value="yes">
      <input type="submit" name="confirm" value="no">
    </form>
  </body>
</html>
