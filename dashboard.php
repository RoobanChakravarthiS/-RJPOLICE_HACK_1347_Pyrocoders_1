<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <title>Feedback Form</title>
        <style>
            html
            {
                scroll-behavior: smooth;
                box-sizing: border-box;
            }
            body 
            {
                user-select: none;
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                width: 100%;
                display: grid;
                grid-template-columns: 70px auto;
                grid-template-rows: 74px auto;
            }
            
            .top
            {
                background-color: #101720;
                padding: 10px;
                font-size: larger;
                display: flex;
                color: #fff;
                #profile
                {
                  font-size: xx-large;
                  background: transparent;
                  color: #b2c7e1;
                  margin: auto 0px auto auto;
                }
                #user
                {
                  margin: auto 20px auto 10px ;
                  font-size: 1.2rem;
                }
                #logout
                {
                  font-size: xx-large;
                  background: transparent;
                  color: #b2c7e1;
                }
            }

            .sidebar
            {
              background-color:#101720;
              width: 70px;
              min-height: 100vh;
              grid-row-start: 1;
              grid-row-end: 3;
              display: flex;
              flex-direction: column;
              #img
              {
                height: 73px;
                object-fit: cover;
              }
              .nav
              {
                color: #b2c7e1;
                height: 70px;
                border: 0;
                background: transparent;
                font-size: xx-large;
              }

              .nav:hover
              {
                background-color:rgba(255,255,255,0.1);
                backdrop-filter: blur(8px);
              }
            }
            
            
            #districts
            {
              display: grid;
              grid-template-columns: repeat(2,auto);
              font-size: larger;
              height: 80%;
                padding:10px; 
                margin-top: 40px;
                border-right: solid;
                #h1 , #hr
                {
                    text-transform: uppercase;
                    text-align: center;
                    margin:auto;
                    grid-column-start: 1;
                    grid-column-end: 3;
                }
            }

            #districts>a
            {
                margin: auto;
                font-size: larger;
            }
            
            a>button
            {
              color: #fff;
              font-size: large;
            }
            
            a>button:hover 
            {
              text-decoration: underline; 
            }
            
            #disp-stat-button
            {
              border: 0;
              background: transparent;
            }
            
            #disp-stat
            {
              padding-left: 10px;
              display: grid;
              column-gap: 5px;
              row-gap: 10px;
              grid-template-columns: repeat(3,auto);
              grid-template-rows: 70px;
              height:  auto;
              overflow-y: auto;
              overflow-x: hidden;
              #disp-stat-area
              {
                text-decoration: underline;
                font-weight: bold;
                text-transform: uppercase;
                grid-column-start: 1;
                grid-column-end: 4;
                margin: auto;
              }
            }
            
            #disp-stat>div
            {
              display: none;
              align-items: center;
              align-content: start;
            }
            
            #disp-stat>div>p:nth-child(2n+1)
            {
              text-align:center;
            }
            
            #disp-stat>div>p:nth-child(2n)
            {
              margin-bottom: 5px;
            }
            
            #disp-stat>div>p:not(:first-child)
            {
              margin:0 ;
            }
            
            #disp-stat>div>p:first-child
            {
              font-weight: bold;
            }

            #station
            { 
                height: fit-content;
                background: rgb(26,88,160);
                background: linear-gradient(270deg, rgba(26,88,160,1) 0%, rgba(1,18,65,1) 100%);
                color: #f9f6ee;
                display:none;
                grid-template-columns: 1fr 2fr;
                column-gap: 10px;
                row-gap: 10px;
                padding: 10px;
                height: 100%;
            }
            
            #officerfeed
            { 
                height: fit-content;
                background: rgb(26,88,160);
                background: linear-gradient(270deg, rgba(26,88,160,1) 0%, rgba(1,18,65,1) 100%);
                color: #f9f6ee;
                display:none;
                grid-template-columns: repeat(4,auto);
                grid-template-rows: 280px;
                padding: 20px;
                height: 100%;
            }

            #nobility{
                height: fit-content;
                background: rgb(26,88,160);
                background: linear-gradient(270deg, rgba(26,88,160,1) 0%, rgba(1,18,65,1) 100%);
                color: #f9f6ee;
                display:none;
                grid-template-columns: 400px auto;
                column-gap: 10px;
                row-gap: 10px;
                padding: 10px;
                height: 100%;
            }
            #div{
                margin-top: auto;
                margin-bottom: auto;
                display: grid;
                grid-template-columns: repeat(2,auto);
                padding: 20px;
                border-right: solid ;
                height: 80%;
                hr{
                  grid-column-start:1;
                  grid-column-end: 3;
                  margin: auto;
                }
                label{
                    font-size: 1.2rem; 
                }
            }

            #div:nth-child(n)
            {
                align-items: center;
            }


            #offform
            {
              border-right: solid white;
              border-bottom: solid white;
              display:grid;
              grid-template-columns: repeat(2,auto);
              column-gap: 10px;
              padding: 10px;
              #h3 , #input
              {
                margin: auto;
              }
            }
            
            #show-feed
            {
              grid-column-start:2;
              grid-column-end: 5;
              border-bottom: solid  white;
              padding: 0px 10px 10px 10px;
              text-align: center;
                overflow-y:auto;
                overflow-x:hidden;
                display: grid;
                grid-template-columns:auto ;
                grid-template-rows: 50px 10px;
                #hr
                {
                  margin: 1px auto;
                }
                #h3
                {
                    margin: auto;
                }
            }

            #ambigous
            {
              border-right: solid white;
              grid-column-start:1;
              grid-column-end: 3;
              padding: 10px;
              text-align: center;
                overflow-y:auto;
                overflow-x:hidden;
                display: grid;
                grid-template-columns:auto ;
                grid-template-rows: 50px 10px;
                #hr
                {
                  margin: 1px auto;
                }
            }

            #badass
            {
                grid-column-start:3;
               grid-column-end: 5;
               text-align: center;
               padding: 10px;
                overflow-y:auto;
                overflow-x:hidden;
                display: grid;
                grid-template-columns:auto ;
                grid-template-rows: 50px 10px;
                #hr
                {
                  margin: 1px auto;
                }
            }

            .table
            {
                display: grid;
                grid-template-columns: 350px auto;
                grid-template-rows: 100px 10px;
                column-gap: 10px;
                row-gap: 10px;
                text-align: center;
                #hr , #data
                {
                    grid-column-start: 1;
                    grid-column-end: 3;
                    margin-top:0;
                    margin-inline: auto;
                }
                #h3
                {
                    font-size: xx-large;
                    text-transform: uppercase;
                    margin-top:auto;
                    margin-bottom:auto;
                }
                #data
                {
                    align-items: center;
                    padding: 10px;
                    width: 100%;
                    margin-top: 0;
                    display: grid;
                    grid-template-columns: 350px auto;
                    overflow-x:hidden;
                    overflow-y:auto;
                }
            }

            #sub
            {
                grid-column-start:1;
                grid-column-end:3;
                margin: auto;
                background-color: #4CAF50;
                color: white;
                padding: 10px 20px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
            }                   

            #boxes{
              grid-column-start: 1;
              grid-column-end: 3;
              display: grid;
              grid-template-columns: repeat(4,auto); 
              padding: 10px;
              #box{
                padding: 5px;
                height: 150px;
                width:250px;
                margin:auto;
                border-radius: 5px;
                color: #101720;
                background-color: #e3e3e3;
                p
                {
                 text-align: center;
                 text-decoration: underline;
                 text-transform: uppercase;
                }
              }

              h4{
                text-align: center;
                font-size: larger;
                font-weight: bolder;
              }
              h2{
                font-weight: bolder;
                text-align: center;
              }
            }

            
            #overflow
            {
              overflow-y:auto;
                overflow-x:hidden;
            }
            
            #sub
            {
                grid-column-start:1;
                grid-column-end:3;
                margin: auto;
                background-color: #4CAF50;
                color: white;
                padding: 10px 20px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                font-weight: lighter;
                text-transform: uppercase;
            }
            #home{
                height: fit-content;
                background: rgb(26,88,160);
                background: linear-gradient(270deg, rgba(26,88,160,1) 0%, rgba(1,18,65,1) 100%);
                color: #f9f6ee;
                display:grid;
                min-height: 100%;
                grid-template-columns: auto auto;
                padding: 10px;
            }

            #ranking
            {
              padding: 10px;
              border-right: solid white ;
            }
            .topnob{
              display:grid;
              grid-template-columns: 150px auto;
              column-gap: 10px;
                row-gap: 10px;
              text-align: center;
              overflow-x: hidden;
              overflow-y: auto;
              h3{
                color: #f9f6ee;
              text-align: center;
              font-size: x-large;
              }
              
            }
            #comments{

              padding: 10px;
              h1{
                text-align: center;
              }
              #showcomments{
                padding: 10px;
                display:grid;
                column-gap: 10px;
                row-gap: 10px;
                grid-template-columns:100px auto;
              }
            }
  
        </style>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
      <section class="sidebar">
        <img src="raj_icon.webp" id="img">
        <button id="nav0" class="nav" ><i class="fa fa-home"></i></button>
        <button id="nav1" class="nav" onclick="direct('feed.php')"><i class="fa fa-address-book"></i></button>
        <button id="nav2" class="nav" onclick="direct('noblity.php')"><i class="fa fa-search"></i></button>
        <button id="nav3" class="nav" onclick="direct('dist.php')"><i class="fa fa-map"></i></button>
      </section>
      <section class="top">
        <div id="profile"><i class="fa fa-user"></i></div>
        <p id="user">#dynamicname</p>
        <button id="logout" onclick="redirect()"><i class="fa fa-sign-out"></i></button>
      </section>
<section id="home">
  <section id="boxes">
    <div id="box">
      <p style="margin:1px 10px;">Views Count</p>
      <canvas id="viewscount"></canvas>
    </div>


    <div id="box">
      <p style="margin:1px 10px;">Comments-Data</p>
        <canvas id="ccount"></canvas>
    </div>
    <div id="box">
        <p>Total Feedbacks</p>
        <?php
        $con = mysqli_connect("localhost", "Feedback", "rjpolice", "feedbacks");

        if (!$con) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        $query = "SELECT COUNT(*) FROM `credits`";
        $run = mysqli_query($con, $query);
        if ($run) {
            $counttot = mysqli_fetch_array($run)[0];
            ?>
            <h2><?php echo $counttot;?></h2>
            <?php
        }
        else {
            echo "Error executing query: " . mysqli_error($con);
        }
        mysqli_close($con);
        ?>
        <?php
        $con = mysqli_connect("localhost", "Feedback", "rjpolice", "feedbacks");

        if (!$con) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        $query = "SELECT COUNT(*) FROM `fir feedback` WHERE rating > 3;";
        $run = mysqli_query($con, $query);
        if ($run) {
            $countgc = mysqli_fetch_array($run)[0];
            ?>
            <?php echo "<script>var gc= $countgc;</script>";?>
            <?php
        }
        else {
            echo "Error executing query: " . mysqli_error($con);
        }
        mysqli_close($con);
        ?>


        <?php
        $con = mysqli_connect("localhost", "Feedback", "rjpolice", "feedbacks");

        if (!$con) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        $query = "SELECT COUNT(*) FROM `fir feedback` WHERE rating = 3;";
        $run = mysqli_query($con, $query);
        if ($run) {
            $countac = mysqli_fetch_array($run)[0];
            ?>
            <?php echo "<script>var ac= $countac;</script>";?>
            <?php
        }
        else {
             echo "Error executing query: " . mysqli_error($con);
        }
        mysqli_close($con);
        ?>
    </div>

      <?php
        $con = mysqli_connect("localhost", "Feedback", "rjpolice", "feedbacks");

        if (!$con) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        $query = "SELECT COUNT(*) FROM `fir feedback` WHERE rating < 3;";
        $run = mysqli_query($con, $query);
        if ($run) {
            $countbc = mysqli_fetch_array($run)[0];
            ?>
            <?php echo "<script>var bc = $countbc;</script>";?>
            <?php
            
        }
        else {
            echo "Error executing query: " . mysqli_error($con);
        }
        mysqli_close($con);
        ?>

        <?php
        $con = mysqli_connect("localhost", "Feedback", "rjpolice", "feedbacks");

        if (!$con) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        $query = "SELECT * FROM `count`";
        $run = mysqli_query($con, $query);
        if ($run) {
            $jan = mysqli_fetch_array($run)[0];
            ?>
            <?php echo "<script>var jan = $jan;</script>";?>
            <?php
            
        }
        else {
            echo "Error executing query: " . mysqli_error($con);
        }
        mysqli_close($con);
        ?>

    <div id="box">
      <p>TOP NOBILITY RANKER</p>
      <?php
        $con = mysqli_connect("localhost", "Feedback", "rjpolice", "feedbacks");

        if (!$con) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        $query = "SELECT Officer_Name FROM `credits` WHERE credit = (SELECT MAX(credit) FROM `credits`);";
        $run = mysqli_query($con, $query);
        if ($run) {
            $result = mysqli_fetch_assoc($run);
            ?>
            <h2><?php echo $result['Officer_Name']; ?></h2>
            <?php
        }
        else {
            echo "Error executing query: " . mysqli_error($con);
        }
        mysqli_close($con);
        ?>
    </div>

  </section>
  
  <section id="ranking">
    <h1 style="text-align: center;">Nobility Ranking Toppers</h1>
    <hr noshade width="70%" color="white" style="margin: auto;">
    <div class = "topnob">
      <h3>Rank</h3>
      <h3>Name</h3>
      <?php
$con = mysqli_connect("localhost", "Feedback", "rjpolice", "feedbacks");

if (!$con) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$query = "SELECT * FROM  `credits` ORDER BY credit DESC LIMIT 10;";
$run = mysqli_query($con, $query);

$rank = 1;

if ($run) {
if (mysqli_num_rows($run) > 0) {
  while ($items = mysqli_fetch_assoc($run)) {
      ?>
      <div><?php echo $rank; ?></div>
      <div><?php echo $items['Officer_Name']; ?></div>
      
      <?php
      $rank++;
  }
} else {
  ?>
  <div><?php echo "No Record Found"; ?></div>
  <?php
}
} else {
echo "Query failed: " . mysqli_error($con);
}

mysqli_close($con);
?>

    </div>
  </section>

  <section id="comments">
    <h1>Comments From The People</h1>
    <hr noshade width="70%" color="white" style="margin: auto;">
    <div id="overflow">
    <div id="showcomments">
      <?php
      $con = mysqli_connect("localhost", "Feedback", "rjpolice", "feedbacks");
  
      if (!$con) {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
      } else {
          $query = "SELECT * FROM comments";
          $run = mysqli_query($con, $query);
          $rank = 1;
          if ($run) {
              if (mysqli_num_rows($run) > 0) {
                  while ($items = mysqli_fetch_assoc($run)) {
                      ?>
                      <div style="align-items:center;width:100px;"><?php echo $rank; ?></div>
                      <div><?php echo htmlspecialchars($items['comments']); ?></div>
                      <?php
                      $rank++;
                  }
              } else {
                  ?>
                  <div>No comments found.</div>
                  <?php
              }
          } else {
              echo "Query failed: " . mysqli_error($con);
          }
  
          mysqli_close($con);
      }
      ?>
    </div>  
    </div>
  </section>    
</section> 
    </section>
</body>
</html>
<script>

const views = document.getElementById('viewscount');

let a=10,b=4,c=9;
new Chart(views, {
  type: 'line',
  data: {
    labels: ['October', 'November', 'December', 'January'],
    datasets: [{
      label: 'of Views',
      data: [a,b, c, jan],
      borderWidth: 1,
      color: '#fff',
      borderColor: '#699ede',
      backgroundColor: '#b2c7e1',
    }]
  },
  options: {
    scales: {
      y: {
        beginAtZero: true
      }
    }
  }
});

const bagcount = document.getElementById('ccount');
console.log(gc);
console.log(ac);
console.log(bc);
new Chart(bagcount, {
  type: 'bar',
  data: {
    labels: ['Good', 'Ambiguous', 'Bad'],
    datasets: [{
      label: 'of comments',
      data: [gc,ac,bc],
      borderWidth: 1,
      color: '#fff',
      borderColor: '#699ede',
      backgroundColor: '#b2c7e1',
    }]
  },
  options: {
    scales: {
      y: {
        beginAtZero: true
      }
    }
  }
});
function direct(rt)
{
    window.location.href=rt;
}

  function redirect()
  {
    window.location.replace("loginpage.html");
  }

  const pages=["home","officerfeed","nobility","station"];
  document.getElementById("nav0").style.backdropFilter="blur(8px)";
  document.getElementById("nav0").style.backgroundColor="rgba(255,255,255,0.1)";
</script>
</body>
</html>