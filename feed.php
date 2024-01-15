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
                height:100vh;
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
            
            #show-feed
            {
              grid-column-start:2;
              grid-column-end: 5;
              border-bottom: solid  white;
              padding: 0px 10px 10px 10px;
              text-align: center;
               
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
                    font-size: 2rem; 
                    font-weight: bolder; 
                }
            }
            #officerfeed
            { 
                height: 100%;
                background: rgb(26,88,160);
                background: linear-gradient(270deg, rgba(26,88,160,1) 0%, rgba(1,18,65,1) 100%);
                color: #f9f6ee;
                display:grid;
                grid-template-columns: repeat(4,auto);
                grid-template-rows: 50%;
                padding: 20px;
                height: 100%;
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
                #h3
                {
                  font-size: large; 
                  font-weight: lighter;
                }
              }
              #badass
              {
                  grid-column-start:3;
                 grid-column-end: 5;
                 text-align: center;
                 padding: 10px;
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
                    font-size: 2rem; 
                    font-weight: bolder; 
                  }

                }

                #ambigous
                {
                  border-right: solid white;
                  grid-column-start:1;
                  grid-column-end: 3;
                  padding: 10px;
                  text-align: center;
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
                    font-size: 2rem; 
                    font-weight: bolder; 
                  }
                }
                
                #overflow
                {
                 overflow-y:auto;
                 overflow-x:hidden;
                div
                {
                   font-size: 1.5rem; 
                   font-weight: bolder;
                  }
               }

            @media (max-width: 768px)
            {
              #officerfeed
              {
                height: 100vh; 
                grid-template-columns: 100%;
                grid-template-rows: 38% repeat(3,20.6%);
              }
              #show-feed
              {
                grid-column-start:1;
                #h3
                {
                  font-size:1rem;
                }
              }
              #h3
              {
                font-size:1rem;
                font-weight:bolder;
              }
              #overflow
              {
                div
                {
                  font-weight:lighter;
                  font-size:.8rem;
                }
              }
            #badass
            {
              grid-column-start:1;
              #h3
              {
                font-size:1rem;
              }
            }
            #offform
            {
              border-right:0;
              grid-template-columns:100%;
              column-gap:0;
              #h3
              {
                font-size:1rem;
                margin-left:0;
              }

              input, label
              {
                grid-column-start:1;
              }
            }
            #ambigous
            {
              border-right:0;
              border-bottom:solid;
              #h3
              {
                font-size:1rem;
              }
            }
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
              display: grid;
              grid-template-columns: repeat(4,auto); 
              padding: 10px;
              #box{
                height: 150px;
                width:250px;
                margin-inline:auto;
                border-radius: 15px;
                color: #101720;
                background-color: #e3e3e3;
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
                grid-template-columns: auto;
                padding: 10px;
            }
            .topnob{
              display:grid;
              grid-template-columns: repeat(2,auto);
              text-align: center;
              h3{
                color: #f9f6ee;
              text-align: center;
              font-size: xx-large;
              font-weight: bolder;
              }
              h1{
                text-align: center;
              font-size: xx-large;
              font-weight: bolder;
              }
              
            }
            #comments{
              h1{
                text-align: center;
                font-size: xx-large;
                font-weight: bolder;
              }
              #showcomments{
                display:grid;
                grid-template-columns:30px auto;
              }
            }
  
        </style>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
      <section class="sidebar">
        <img src="raj_icon.webp" id="img">
        <button id="nav0" class="nav" onclick="direct('dashboard.php')"><i class="fa fa-home"></i></button>
        <button id="nav1" class="nav" ><i class="fa fa-address-book"></i></button>
        <button id="nav2" class="nav" onclick="direct('noblity.php')"><i class="fa fa-search"></i></button>
        <button id="nav3" class="nav" onclick="direct('dist.php')"><i class="fa fa-map"></i></button>
      </section>
      <section class="top">
        <div id="profile"><i class="fa fa-user"></i></div>
        <p id="user">#dynamicname</p>
        <button id="logout" onclick="redirect()"><i class="fa fa-sign-out"></i></button>
      </section>  
    <section id="officerfeed">
        <form id="offform" method="GET">
          <label  id="h3">Enter District Name :</label>
          <input id="input" name="district" value="<?php if(isset($_GET['district'])){echo $_GET['district'];}else{echo '';} ?>">
          <label id="h3">Enter Station Name :</label>
          <input id="input" name="station" value="<?php if(isset($_GET['station'])){echo $_GET['station'];}else{echo '';} ?>">
          <label id="h3">Enter Officer Name :</label>
          <input id="input" name="name" value="<?php if(isset($_GET['name'])){echo $_GET['name'];}else{echo '';} ?>">
          <button type="submit" value="search" id="sub" name="search" style="margin-inline: auto;">Search</button>
        </form>
        <section id="show-feed"> 
            <h5 id="h3" >GOOD FEEDBACKS</h5>  
            <hr noshade color="white" width="70%" id="hr">  
            <div id="overflow">       
            <?php
            $con = mysqli_connect("localhost", "Feedback", "rjpolice", "feedbacks");

            if (!$con) 
            {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }
            
            $name = isset($_GET['name']) ? mysqli_real_escape_string($con, $_GET['name']) : '';
            $district = isset($_GET['district']) ? mysqli_real_escape_string($con, $_GET['district']) : '';
            $station = isset($_GET['station']) ? mysqli_real_escape_string($con, $_GET['station']) : '';
            
            $query = "SELECT Feedback FROM `fir feedback` WHERE 1=1 AND rating > 3";
            
            if (!empty($name)) {
                $query .= " AND HandlingOfficer = '$name'";
            }
            
            if (!empty($district)) {
                $query .= " AND district = '$district'";
            }
            
            if (!empty($station)) {
                $query .= " AND station = '$station'";
            }
            
            $run = mysqli_query($con, $query);
            
            if ($run) 
            {
                if (mysqli_num_rows($run) > 0) 
                {
                    while ($items = mysqli_fetch_assoc($run)) 
                    {
                    ?>
                        <div>
                            <?php echo isset($items['Feedback']) ? $items['Feedback'] : 'Default Value'; ?></div><br>
                    <?php
                    }
                }
                else 
                {
                ?>
                    <div><?phpecho "No Record Found" ;?></div>
                <?php
                }
            }
            else 
            {
                echo "Query failed: " . mysqli_error($con);
            }
            ?>
            </div>
        </section>
        <section id="ambigous">
          <h5 id="h3">AMBIGUOUS FEEDBACKS</h5>
          <hr noshade color="white" width="70%" id="hr">  
          <div id="overflow">       
          <?php
          $con = mysqli_connect("localhost", "Feedback", "rjpolice", "feedbacks");

          if (!$con) 
          {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
          }
          
          $name = isset($_GET['name']) ? mysqli_real_escape_string($con, $_GET['name']) : '';
          $district = isset($_GET['district']) ? mysqli_real_escape_string($con, $_GET['district']) : '';
          $station = isset($_GET['station']) ? mysqli_real_escape_string($con, $_GET['station']) : '';
          
          $query = "SELECT Feedback FROM `fir feedback` WHERE 1=1 AND rating = 3";
          
          if (!empty($name)) {
              $query .= " AND HandlingOfficer = '$name'";
          }
          
          if (!empty($district)) {
              $query .= " AND district = '$district'";
          }
          
          if (!empty($station)) {
              $query .= " AND station = '$station'";
          }
          
          $run = mysqli_query($con, $query);
          
          if ($run) 
          {
              if (mysqli_num_rows($run) > 0) 
              {
                  while ($items = mysqli_fetch_assoc($run)) 
                  {
                  ?>
                      <div>
                          
                          <?php echo isset($items['Feedback']) ? $items['Feedback'] : 'Default Value'; ?></div><br>
                  <?php
                  }
              }
              else 
              {
              ?>
                  <div><?phpecho "No Record Found" ;?></div>
              <?php
              }
          }
          else 
          {
              echo "Query failed: " . mysqli_error($con);
          }
          ?>
          </div>
        </section>
        <section id="badass"> 
          <h5 id="h3">BAD FEEDBACKS</h5>
          <hr noshade color="white" width="70%" id="hr"> 
          <div id="overflow">        
          <?php
          $con = mysqli_connect("localhost", "Feedback", "rjpolice", "feedbacks");

          if (!$con) 
          {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
          }
          
          $name = isset($_GET['name']) ? mysqli_real_escape_string($con, $_GET['name']) : '';
          $district = isset($_GET['district']) ? mysqli_real_escape_string($con, $_GET['district']) : '';
          $station = isset($_GET['station']) ? mysqli_real_escape_string($con, $_GET['station']) : '';
          
          $query = "SELECT Feedback FROM `fir feedback` WHERE 1=1 AND rating < 3";
          
          if (!empty($name)) {
              $query .= " AND HandlingOfficer = '$name'";
          }
          
          if (!empty($district)) {
              $query .= " AND district = '$district'";
          }
          
          if (!empty($station)) {
              $query .= " AND station = '$station'";
          }
          
          $run = mysqli_query($con, $query);
          
          if ($run) 
          {
              if (mysqli_num_rows($run) > 0) 
              {
                  while ($items = mysqli_fetch_assoc($run)) 
                  {
                  ?>
                      <div>
                          
                          <?php echo isset($items['Feedback']) ? $items['Feedback'] : 'Default Value'; ?></div>
                  <?php
                  }
              }
              else 
              {
              ?>
                  <div><?phpecho "No Record Found" ;?></div>
              <?php
              }
          }
          else 
          {
              echo "Query failed: " . mysqli_error($con);
          }
          ?>
          </div>
    </section>
</section>  
    </section>
</body>
</html>
<script>

function direct(rt)
{
    window.location.href=rt;
}

  function redirect()
  {
    window.location.replace("loginpage.html");
  }

  const pages=["home","officerfeed","nobility","station"];
  document.getElementById("nav1").style.backdropFilter="blur(8px)";
  document.getElementById("nav1").style.backgroundColor="rgba(255,255,255,0.1)";
</script>
</body>
</html>