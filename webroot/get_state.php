<?php
$DB_host = "localhost";
$DB_user = "rusev1gj_r";
$DB_pass = "E1b%3&Rq";
$DB_name = "rusev1gj_r";

      try
      {
            $DB_con = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
            $DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      }
            catch(PDOException $e)
      {
            $e->getMessage();
      }

if($_POST['id'])
{
      $id=$_POST['id'];
      
      $stmt = $DB_con->prepare("SELECT * FROM articles WHERE category_id=:id");
      $stmt->execute(array(':id' => $id));
      ?>
      
     <?php
      while($row=$stmt->fetch(PDO::FETCH_ASSOC))
      {
      ?>
            <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
            <?php
      }
}
?>