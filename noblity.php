<!DOCTYPE html>
<html lang="en" style="font-size: clamp(14px, 2vw, 18px);">
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
                overflow:hidden;
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
                height: 100%; 
                background: rgb(26,88,160);
                background: linear-gradient(270deg, rgba(26,88,160,1) 0%, rgba(1,18,65,1) 100%);
                color: #f9f6ee;
                display:grid;
                grid-template-columns:40% 60%;
                column-gap: 10px;
                row-gap: 10px; 
                padding: 10px;
            }

            @media (max-width: 768px)
            {

              #nobility{
                height: 100vh; 
                grid-template-columns: 100%;
                grid-template-rows:30% 70%;
                column-gap: 10px;
                row-gap: 10px; 
                padding: 10px;
                #div
                {
                  width:clamp(250px,75%,470px);
                  margin-top:0;
                  margin-inline:auto;
                  margin-bottom:0px;
                  border-right:0;
                  height:fit-content;
                  text-align:center;
                  padding:5px;
                  h1{
                    font-size: 1.5rem; 
                  }
                  label
                  {
                    font-size: .9rem; 
                    padding-top:15px;
                    padding-bottom:15px;
                  }
                }
                .table
                {
                  grid-template-rows: 60px 10px;
                  row-gap:0px;
                  height:68vh;
                  h3
                  {
                    font-size: 1.5rem; 
                  }
                  #data{
                       height:50vh;
                        padding:0;
                        div
                        {
                          margin-top:10px;
                          margin-bottom:0px;
                        }
                  }
                }
            }
            }
            #div{
                margin-top: auto;
                margin-bottom: auto;
                display: grid;
                grid-template-columns: 40% 60%;
                padding: 20px;
                border-right: solid ;
                height: 80%;
                h1
              {
                font-size: xx-large; 
                grid-column-start: 1;
                grid-column-end: 3;
                margin: auto;
              }
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
                grid-template-columns: 60% 40%;
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
                    /* height:70%; */
                    margin-top: 0;
                    display: grid;
                    grid-template-columns: 60% 40%;
                    overflow-x:hidden;
                    overflow-y:auto;
                    div
                    {
                      font-size: larger; font-weight: bolder; margin-top:15px; margin-bottom:15px;
                    }
                    
                }
            }

            #overflow
            {
              height:74vh;
              overflow-x:hidden;
              overflow-y:auto;
              grid-column-start:1;
              grid-column-end:3;
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
        <button id="nav1" class="nav" onclick="direct('feed.php')"><i class="fa fa-address-book"></i></button>
        <button id="nav2" class="nav" ><i class="fa fa-search"></i></button>
        <button id="nav3" class="nav" onclick="direct('dist.php')"><i class="fa fa-map"></i></button>
      </section>
      <section class="top">
        <div id="profile"><i class="fa fa-user"></i></div>
        <p id="user">#dynamicname</p>
        <button id="logout" onclick="redirect()"><i class="fa fa-sign-out"></i></button>
      </section>
        <section id="nobility">
        <form action="" method="GET" id="div">
                    <h1>FILTER FOR RANKING</h1>
                    <hr noshade width="80%">
                    <label>Enter District :</label>
                    <input name="district" value="<?php if(isset($_GET['district'])){echo $_GET['district'];}else{echo '';} ?>">
                    <label>Enter Station :</label>
                    <input name="station" value="<?php if(isset($_GET['station'])){echo $_GET['station'];}else{echo '';} ?>">
                    <button type="submit" value="search" id="sub" name="submit">Search</button>
        </form>
            <div class="table">
                <h3 id="h3">Name</h3>
                <h3 id="h3">Credit</h3>
                <hr noshade id="hr" color="white" width="80%">
                <div id="overflow">
                <div id="data">
                <?php
        $con = mysqli_connect("localhost", "Feedback", "rjpolice", "feedbacks");

        if (!$con) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

        $district = isset($_GET['district']) ? mysqli_real_escape_string($con, $_GET['district']) : '';
        $station = isset($_GET['station']) ? mysqli_real_escape_string($con, $_GET['station']) : '';
        $query = "SELECT Officer_Name, Credit FROM `credits`   WHERE 1=1";

        if (!empty($district)) {
            $query .= " AND district = '$district'";
        }

        if (!empty($station)) {
            $query .= " AND station = '$station'";
        }

        $run = mysqli_query($con, $query);

        if ($run) {
            if (mysqli_num_rows($run) > 0) {
                while ($items = mysqli_fetch_assoc($run)) {
                    ?>
                    <div>
                        <?php echo isset($items['Officer_Name']) ? $items['Officer_Name'] : 'Default Value'; ?>
                    </div>
                    <div>
                        <?php echo isset($items['Credit']) ? $items['Credit'] : 'Default Value'; ?>
                    </div>
                    <?php
                }
            } else {
                ?>
                <div>
                    <?phpecho "No Record Found" ;?>
                </div>
                <?php
            }
        } else {
            echo "Query failed: " . mysqli_error($con);
        }
        mysqli_close($con);
        ?>  
                </div>
                </div>
            </div>
      </div>
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
  document.getElementById("nav2").style.backdropFilter="blur(8px)";
  document.getElementById("nav2").style.backgroundColor="rgba(255,255,255,0.1)";
</script>
</body>
</html>