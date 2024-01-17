<?php
include("loginsave.php");
?>


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
            
            button
            {
              color: #fff;
              font-size: larger;
            }
            
            button:hover 
            {
              text-decoration: underline; 
            }
            
            #disp-stat-button
            {
              border: 0;
              background: transparent;
            }
            
                        #station
                        { 
                            height: 100%;
                            background: rgb(26,88,160);
                            background: linear-gradient(270deg, rgba(26,88,160,1) 0%, rgba(1,18,65,1) 100%);
                            color: #f9f6ee;
                            display:grid;
                            grid-template-columns: 33% 67%;
                            column-gap: 10px;
                            row-gap: 10px;
                            padding: 10px;
                          }
                          
                          #disp-stat
                          {
                            padding-left: 10px;
                            display: grid;
                            column-gap: 5px;
                            row-gap: 10px;
                            grid-template-columns: 100%;
                            grid-template-rows: 70px;
                            height:  87vh;
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
            @media (max-width: 768px)
            {

              #station
              {
                grid-template-columns: 100%;
                grid-template-rows:30% 70%;
                padding: 10px;
                height:100vh;
              }
              #districts
              {
                margin:0;
                border-right:0;
                height:100%;
                border-bottom:solid;
                h1{
                  font-size:1.5rem;
                }
              }
              #disp-stat
              {
                padding:10px;
                grid-template-columns:100%;
                column-gap:0;
                height:90%;
                padding-bottom:20px;
              }
            }


            #overflow
            {
              height:100%;
              overflow-y: auto;
              overflow-x: hidden;
              display:grid;
              grid-template-columns:100%;
            }
            
            #disp-stat>div>div
            {
              display: none;
              align-items: center;
              align-content: start;
            }
            
            #disp-stat>div>div>p:nth-child(2n+1)
            {
              text-align:center;
            }
            
            #disp-stat>div>div>p:nth-child(2n)
            {
              margin-bottom: 5px;
            }
            
            #disp-stat>div>div>p:not(:first-child)
            {
              margin:0 ;
            }
            
            #disp-stat>div>div>p:first-child
            {
              font-weight: bold;
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
            ::-webkit-scrollbar
{
    width: 5px;
}

 ::-webkit-scrollbar-track
 {
    background: #f1f1f1;
 }

 ::-webkit-scrollbar-thumb
 {
    background: #090979;
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
        <button id="nav2" class="nav" onclick="direct('noblity.php')"><i class="fa fa-search"></i></button>
        <button id="nav3" class="nav" ><i class="fa fa-map"></i></button>
      </section>
      <section class="top">
        <div id="profile"><i class="fa fa-user"></i></div>
        <?php
        ?>
        <p id="user"><?php echo isset($_SESSION['username']) ? $_SESSION['username'] : ''; ?></p>
        <?php
        ?>
        <button id="logout" onclick="redirect()"><i class="fa fa-sign-out"></i></button>
      </section>
    <section id="station">
        <section id="districts">
            <h1 id="h1">District-Wise Stations</h1>
            <hr id="hr" noshade width="80%" color="white">
            <button id="disp-stat-button" onclick="display(0)">Ajmeer</button>
            <button id="disp-stat-button" onclick="display(1)">Alwar</button>
            <button id="disp-stat-button" onclick="display(2)">Banswara</button>
            <button id="disp-stat-button" onclick="display(3)">Baran</button>
            <button id="disp-stat-button" onclick="display(4)">Barmer</button>
            <button id="disp-stat-button" onclick="display(5)">Bharatpur</button>
        </section>  
        <section id="disp-stat">
            <h3 id="disp-stat-area"></h3>
            <div id="overflow">
            <div id="disp1">
                <p id="disp-stat-name1"></p>
                <p>Contact Number:</p><p id="disp-stat-contact1"></p>
                <p>Address:</p><p id="disp-stat-address1"></p>
            </div>
            <div id="disp2">
                <p id="disp-stat-name2"></p>
                <p>Contact Number:</p><p id="disp-stat-contact2"></p>
                <p>Address:</p><p id="disp-stat-address2"></p>
            </div>
            <div id="disp3">
                <p id="disp-stat-name3"></p>
                <p>Contact Number:</p><p id="disp-stat-contact3"></p>
                <p>Address:</p><p id="disp-stat-address3"></p>
            </div>
            <div id="disp4">
                <p id="disp-stat-name4"></p>
                <p>Contact Number:</p><p id="disp-stat-contact4"></p>
                <p>Address:</p><p id="disp-stat-address4"></p>
            </div>
            <div id="disp5">
                <p id="disp-stat-name5"></p>
                <p>Contact Number:</p><p id="disp-stat-contact5"></p>
                <p>Address:</p><p id="disp-stat-address5"></p>
            </div>
            <div id="disp6">
                <p id="disp-stat-name6"></p>
                <p>Contact Number:</p><p id="disp-stat-contact6"></p>
                <p>Address:</p><p id="disp-stat-address6"></p>
            </div>
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
    window.location.replace("loginpage.php");
  }

  const pages=["home","officerfeed","nobility","station"];
  document.getElementById("nav3").style.backdropFilter="blur(8px)";
  document.getElementById("nav3").style.backgroundColor="rgba(255,255,255,0.1)";
  

    const policeStations = [
  {
    district: 'Ajmeer',
    stations: [
      {
        name: 'Kotwali',
        contactNumber: '0145-2627036',
        address: 'Kotwali Road, Ajmer'
      },
      {
        name: 'Christianganj',
        contactNumber: '0145-2644844',
        address: 'Christianganj, Ajmer'
      },
      {
        name: 'Civil Lines',
        contactNumber: '0145-2625732',
        address: 'Civil Lines, Ajmer'
      },
      {
        name: 'Mahila',
        contactNumber: '0145-2660593',
        address: 'Mahila Police Station, Ajmer'
      },
      {
        name: 'Adarsh Nagar',
        contactNumber: '0145-2695124',
        address: 'Adarsh Nagar, Ajmer'
      },
      {
        name: 'Alwar Gate',
        contactNumber: '0145-2660597',
        address: 'Alwar Gate, Ajmer'
      }
    ]
  },
  {
    district: 'Alwar',
    stations: [
      {
        name: 'Alwar Police Station',
        contactNumber: '0144-2332222',
        address: 'Police Lines, Alwar, Rajasthan 301001'
      },
      {
        name: 'Tijara Police Station',
        contactNumber: '0144-2522222',
        address: 'Tijara, Alwar, Rajasthan 301412'
      },
      {
        name: 'Kishangarh Bas Police Station',
        contactNumber: '0144-2622222',
        address: 'Kishangarh Bas, Alwar, Rajasthan 301507'
      },
      {
        name: 'Ramgarh Police Station',
        contactNumber: '0144-2722222',
        address: 'Ramgarh, Alwar, Rajasthan 301706'
      },
      {
        name: 'Kathumar Police Station',
        contactNumber: '0144-2822222',
        address: 'Kathumar, Alwar, Rajasthan 301803'
      },
      {
        name: 'Laxmangarh Police Station',
        contactNumber: '0144-2922222',
        address: 'Laxmangarh, Alwar, Rajasthan 301904'
      }
    ]
  },
  {
    district: 'Banswara',
    stations: [
      {
        name: 'Banswara Police Station',
        contactNumber: '01467-222222',
        address: 'Police Station Road, Banswara, Rajasthan 327001'
      },
      {
        name: 'Ghatol Police Station',
        contactNumber: '01467-233333',
        address: 'Ghatol, Banswara, Rajasthan 327022'
      },
      {
        name: 'Garhi Police Station',
        contactNumber: '01467-244444',
        address: 'Garhi, Banswara, Rajasthan 327023'
      },
      {
        name: 'Khambhalia Police Station',
        contactNumber: '01467-255555',
        address: 'Khambhalia, Banswara, Rajasthan 327024'
      },
      {
        name: 'Kushalgarh Police Station',
        contactNumber: '01467-266666',
        address: 'Kushalgarh, Banswara, Rajasthan 327025'
      },
      {
        name: 'Partapur Police Station',
        contactNumber: '01467-277777',
        address: 'Partapur, Banswara, Rajasthan 327026'
      }
    ]
  },
  {
    district: 'Baran',
    stations: [
      {
        name: 'Baran Sadar Police Station',
        contactNumber: '0140-2222222',
        address: 'Near Collectorate Office, Baran, Rajasthan'
      },
      {
        name: 'Kishanganj Police Station',
        contactNumber: '0140-2223333',
        address: 'Kishanganj, Baran, Rajasthan'
      },
      {
        name: 'Chhabra Police Station',
        contactNumber: '0140-2224444',
        address: 'Chhabra, Baran, Rajasthan'
      },
      {
        name: 'Atru Police Station',
        contactNumber: '0140-2225555',
        address: 'Atru, Baran, Rajasthan'
      },
      {
        name: 'Mangrol Police Station',
        contactNumber: '0140-2226666',
        address: 'Mangrol, Baran, Rajasthan'
      },
      {
        name: 'Shahbad Police Station',
        contactNumber: '0140-2227777',
        address: 'Shahbad, Baran, Rajasthan'
      }
    ]
  },
  {
    district: 'Barmer',
    stations: [
      {
        name: 'Barmer Police Station',
        contactNumber: '02986-222222',
        address: 'Police Station Road, Barmer, Rajasthan 344001'
      },
      {
        name: 'Baytoo Police Station',
        contactNumber: '02986-233333',
        address: 'Baytoo, Barmer, Rajasthan 344023'
      },
      {
        name: 'Chohtan Police Station',
        contactNumber: '02986-244444',
        address: 'Chohtan, Barmer, Rajasthan 344022'
      },
      {
        name: 'Dhorimanna Police Station',
        contactNumber: '02986-255555',
        address: 'Dhorimanna, Barmer, Rajasthan 344036'
      },
      {
        name: 'Gulabpura Police Station',
        contactNumber: '02986-266666',
        address: 'Gulabpura, Barmer, Rajasthan 344035'
      },
      {
        name: 'Jaisalmer Police Station',
        contactNumber: '02986-277777',
        address: 'Jaisalmer, Barmer, Rajasthan 344001'
      }
    ]
  },
  {
    district: 'Bharatpur',
    stations: [
      {
        name: 'Bharatpur City Police Station',
        contactNumber: '0121-2222222',
        address: 'Kotwali, Bharatpur, Rajasthan 321001'
      },
      {
        name: 'Kaman Police Station',
        contactNumber: '0121-2222222',
        address: 'Kaman, Bharatpur, Rajasthan 321023'
      },
      {
        name: 'Nadbai Police Station',
        contactNumber: '0121-2222222',
        address: 'Nadbai, Bharatpur, Rajasthan 321022'
      },
      {
        name: 'Deeg Police Station',
        contactNumber: '0121-2222222',
        address: 'Deeg, Bharatpur, Rajasthan 321004'
      },
      {
        name: 'Bayana Police Station',
        contactNumber: '0121-2222222',
        address: 'Bayana, Bharatpur, Rajasthan 321401'
      },
      {
        name: 'Weir Police Station',
        contactNumber: '0121-2222222',
        address: 'Weir, Bharatpur, Rajasthan 321021'
      }
    ]
  }
];

function display(rt)
{
    document.getElementById("disp-stat-area").innerHTML=policeStations[rt].district;
    for(let i=1;i<=6;i++)
    {
        document.getElementById(`disp${i}`).style.display="block";
        document.getElementById(`disp-stat-name${i}`).innerHTML=policeStations[rt].stations[i-1].name;
        document.getElementById(`disp-stat-contact${i}`).innerHTML=policeStations[rt].stations[i-1].contactNumber;
        document.getElementById(`disp-stat-address${i}`).innerHTML=policeStations[rt].stations[i-1].address;
    }
}
</script>
</body>
</html>