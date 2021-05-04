<?php
require 'constants/config.php';
require 'constants/check-login.php';

?>
<div class="tg-select form-control">
  <select name="area" id="area">
    <option value="" selected disabled>Select Area</option>
    <?php
    if (isset($_POST["country"])) {
      // Capture selected country
      $country = $_POST["country"];

      try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        $stmt = $conn->prepare("SELECT SubCity FROM `subcity` WHERE City = '$country'");
        $stmt->execute();
        $result = $stmt->fetchAll();
        if ($result == null) {
          print '<option disabled value="No Area">No area available</option>';
        } else {
          foreach ($result as $row) {
            print '<option value="' . $row['SubCity'] . '">' . $row['SubCity'] . '</option>';
          }
        }
      } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
      }
    }
    ?>
  </select>
</div>