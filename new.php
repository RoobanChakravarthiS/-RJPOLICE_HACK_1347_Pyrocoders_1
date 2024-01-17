<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div>
    <?php
        $con = mysqli_connect("localhost", "Feedback", "rjpolice", "feedbacks");

        if (!$con) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        $query = "SELECT COUNT(*) FROM `fir feedback` WHERE rating < 3;";
        $run = mysqli_query($con, $query);
        if ($run) {
            $count = mysqli_fetch_array($run)[0];
            ?>
            <?php echo "<script>var count = $count; </script>"?>
            <?php
        }
        else {
            echo "Error executing query: " . mysqli_error($con);
        }
        mysqli_close($con);
        ?>
  </div>
  <script>console.log(count)</script>
</body>
</html> 
 
 
 <?php
        $con = mysqli_connect("localhost", "Feedback", "rjpolice", "feedbacks");

        if (!$con) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        $query = "SELECT COUNT(*) FROM `fir feedback` WHERE rating < 3;";
        $run = mysqli_query($con, $query);
        if ($run) {
            $count = mysqli_fetch_array($run)[0];
            ?>
            <h2><?php echo $count; ?></h2>
            <?php
        }
        else {
            echo "Error executing query: " . mysqli_error($con);
        }
        mysqli_close($con);
        ?>