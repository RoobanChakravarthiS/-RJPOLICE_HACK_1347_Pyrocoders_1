<?php

class MyClass {
  private $conn;

  // Constructor
  public function __construct() {
    // Connect to the database
    $this->conn = new mysqli('localhost', 'Feedback', 'rjpolice', 'feedbacks');

    // Check connection
    if ($this->conn->connect_error) {
      die("Connection failed: " . $this->conn->connect_error);
    }

    // Increment the count value in the table
    $sql = "UPDATE `count` SET count = count + 1";
    $result = $this->conn->query($sql);

    // Check if the query was successful
    if (!$result) {
      die("Query failed: " . $this->conn->error);
    }
  }
}

// Create an instance of the class
$obj = new MyClass();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
    integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
    crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
    integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
    crossorigin=""></script>
    <style>
        
            html
            {
                scroll-behavior: smooth;
            }
        #preheader
        {
            background: rgb(2,0,36);
            background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 57%, rgba(255,0,0,1) 100%);
            border-bottom: aliceblue solid 0.5px ;
        }
        body
        {
        font-family: Arial, sans-serif;
        align-items: center;
        margin: 0;  
    max-width: 100%;
    user-select: none;
    background-color: #090979;
    overflow-x:hidden;
    }

    ul
    {
        list-style: none;
    }

    #hr
    {
        margin: 0 auto;
    }

    .main
    {
        position: relative;
        height:fit-content;
        /* background-image: url(police-admin.avif); */
        background-image: url("police-background.jpg ");
        background-size: cover;
        background-position: center;
        border-image:fill 0 linear-gradient(rgba(0, 0, 0, 0.324),#000); 
    }

    
    #header
    {
    display: flex;
    flex-wrap: wrap;
    color: aliceblue;
    text-transform: uppercase;
    background-image: url(raj_icon.webp);
    background-repeat: no-repeat;
    background-size: contain;
    font-size: larger;
    } 
  
    #img
    {
        background-image: url("feedback.webp");
        background-size:200px;
        background-position: center;
        background-repeat: no-repeat;
        height: 200px;
        width: 200px;
        background-color: #000;
        clip-path:polygon(0% 0%,100% 0%,100% 80%,0% 100%);
        margin-inline: auto;
    }
    
    #img1
    {
        background-image: url("official-login.jpeg");
        background-size:350px;
        background-position: top;
        background-repeat: no-repeat;
        height: 200px;
        width: 200px;
        background-color: #000;
        clip-path:polygon(0% 0%,100% 0%,100% 80%,0% 100%);
        margin-inline: auto;
    }
    
    #img2
    {
        background-image: url("fir.jpeg");
        background-size:350px;
        background-position: top;
        background-repeat: no-repeat;
        height: 200px;
        width: 200px;
        background-color: #000;
        clip-path:polygon(0% 0%,100% 0%,100% 80%,0% 100%);
        margin-inline: auto;
    }

    .redirect
    {
        margin-inline: auto;
        width:calc(100%-10px);
        overflow-x: auto;
        overflow-y: hidden;
        scrollbar-width: thin;
        padding: 10px;
        display: grid;
        column-gap: 10px;
        grid-template-columns: repeat(3,1fr);
    }
    
    .redirect::-webkit-scrollbar
    {
        width: 10px;
    }
    
    .redirect::-webkit-scrollbar-track
     {
        background: #f1f1f1;
     }
    
     .redirect::-webkit-scrollbar-thumb
     {
        background: #090979;
     }

    #box
    {
        display: flex;
        flex-wrap: wrap;
        margin-inline: auto;
        margin-top: 40px;
        margin-bottom: 20px;
        border: solid 0.5px white;
        background-color:rgba(255,255,255,0.2);
        backdrop-filter: blur(8px);                            
        height: 350px;
        /* width:clamp(200px,75%,250px); */
        width:250px;
        border-radius: 3px;
        cursor: pointer;
        transition: all 0.2s;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }

    #overflow
    {
        padding: 0 30px
    }

    #box:hover
    {
        transform: scale(1.1);
        transition: all 0.2s ease-in;
    }

    #box>p
    {
        text-align: center;
        color: azure;
        padding: 10px;
        line-height: 22px;
        margin: 0;
        margin-inline: auto;
        text-indent: 10px;
        text-transform: capitalize;
    }

    #font
    {
        animation: font 0.5s linear;
        width: clamp(260px,75%,500px);
        line-height: 130%;
        margin-inline: auto;
        text-align: center;
        padding: 10px;
    }

    #fullscreen
    {
        background-image: url("fullscreen.jpg");
        width: 30px;
        height: 30px;
        background-size: contain;
        border: 0;
        margin-inline: auto ;
        margin-top: 0;
    }

    #fullscreen:hover
    {
        background-blend-mode: exclusion;
        cursor: pointer;
    }

    #mapcontrol
    {
        display: grid;
        grid-template-columns: auto;
        grid-template-rows: 30px 30px auto;
        margin-inline: 0 auto;
    }

    #bottom
{
    height: 63px;
    background-color:#2F3651;
    clip-path: polygon(
    0% 0%, 53% 0%,47% 100%,0% 100%
    );
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

#prebottom
{
    background-color: #bf0808;
}

.login
{
    width: 40px;
    height: 40px;
    padding: 10px;
    border: none;
    float: right;
    margin-right: 5px;
    font-weight: bold;
    font-family:cursive;
    color: aliceblue;
    border-radius: 3px;
    cursor: pointer;
    background-repeat: no-repeat;
    background-image: url("Profile_img.jpg");
    background-size: contain;
}

.login:hover
{
    background-blend-mode: exclusion;
}

#nav
{
    position: sticky;
    top: 0;
}

.menu-container {
    background-color:rgba(255,255,255,0.1);
    backdrop-filter: blur(8px);
    padding: 10px;
    border-bottom: #000 solid 0.5px;
    height: 48px;
}

/* .menu-toggle {
  background-color: #090979;
  color: white;
  border: none;
  padding: 7px;
  cursor: pointer;
  transition: all 0.2s;
  font-size: larger;
  width: 50px;
} */

.menu {
    overflow-x: auto;
    overflow-y: hidden;
    float: right;
/* display: grid;
grid-template-columns: 50px 100px 100px 100px 130px; */
display:flex;
flex-wrap:wrap;
align-items: center;
  list-style-type: none;
  margin: 0;
  padding: 0;
}

.menu li {
  float: right;
}

.menu a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.menu a:hover {
    background-color:rgba(255,255,255,0.1);
    backdrop-filter: blur(12px);
}

.about
{
    padding:0 40px 20px;

    color: azure;
    animation: scroll auto;
    animation-timeline: scroll() ;
    #h2
    {
        margin-top: 63px;
        margin-bottom: 30px;
        color: whitesmoke ;
    }
}

#lower{
    background: rgb(0,172,255);
    background: linear-gradient(0deg, rgba(0,172,255,1) 0%, rgba(0,13,150,1) 33%, rgba(0,0,0,1) 100%);
}

.map
{
    /* background: rgb(255,255,255);
    background: linear-gradient(0deg, rgba(255,255,255,1) 0%, rgba(207,239,255,1) 30%, rgba(7,174,255,1) 100%); */
    margin-top:70px;
    display: flex;
    padding: 20px;
    /* border: 0.5px #f1f1f1 solid; */
}

.about>p
{
    margin: 0;
    text-indent: 30px;
    line-height: 30px;
    font-size: 20px;
}

.contact
{
    display: grid;
    grid-template-columns: auto;
    height: fit-content;
    color:white;
}

#feedback
{
    display: flex;
    flex-wrap: wrap;
    margin:  15px;
    margin-bottom: 30px;
    padding: 10px;
    margin-inline: auto;
    resize: none;
    font-size: medium;
    font-family: Arial, Helvetica, sans-serif;
    width:clamp(250px,75%,400px);
}

#wrap-c
{
    margin-inline: auto;
    padding-inline: 10px ;
    width: 200px;
    text-align: center;
}

#wrap-i
{
    margin-inline: auto;
    width: 300px;
    text-align: center;
}

#contact
{
    margin: 20px auto;
    display:grid;
    grid-template-columns:repeat(4,100px);
    button:hover
    {
        cursor:pointer;
    }
}

 #map
 {
     height: 300px;
     width: 800px;
     margin: auto;
     margin-right: 0;
 }

#insta
{
    height: 60px;
    width: 60px;
    border:0;
    background: transparent;
    object-fit:contain;
    padding:0; 
    margin:auto;
}

#insta:hover
{
    transform: scale(1.1);
    transition: all 0.2s ease-in;
}

#fb
{
    height: 50px;
    width: 50px;
    background:transparent;
    border: 0;
    padding:0; 
    margin:auto;
}

#fb:hover
{
    transform: scale(1.1);
    transition: all 0.2s ease-in;
}

#x
{
    height: 60px;
    width: 60px; 
    background:transparent;
    border: 0;
    padding:0; 
    margin:auto;
}

#x:hover
{
    transform: scale(1.1);
    transition: all 0.2s ease-in;
}

#yt
{
    height: 60px;
    width: 60px; 
    background:transparent;
    border: 0;
    padding:0;
    margin:auto; 
}

#yt:hover
{
    transform: scale(1.1);
    transition: all 0.2s ease-in;
}

#comment
{
    margin:auto;
    #h2
    {
        text-transform: capitalize;
        color: #f1f1f1;
        font-size: 30px;
        font-weight: lighter;
        text-align: center;
    }
}

#locate
{
    background-image: url(location.jpeg);
    width: 30px;
    height: 30px;
    background-size: contain;
    border: 0;
    margin-inline: 0  auto;
}

#locate:hover
{
    background-blend-mode: exclusion;
    cursor: pointer;
}

.mbl{
    #h2
    {
        margin: 0;
        padding: 15px;
        padding-top: 30px;
        text-align: center;
        color:white;
    }
}

#mbl
{
    padding-top:20px ;
    padding-bottom:10px ;
    display: flex;
    flex-wrap: wrap;
}
#sub {
    display: flex;
    flex-wrap: wrap;
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-inline:auto;
        }
#mbl>p
{
    align-items: center;
    font-weight: bold;
    color: white;
    margin-inline: auto;
}

#comment-section
{
    display:flex;
    flex-wrap:flex;
    
    /* flex-direction:flex-row; */
}

#map1
{
    margin:auto;
    height:200px;
    width:35%;
}


@media (min-width:450px) and (max-width:786px)
{
    #font
    {
        font-size:1rem;
        margin-right:10px;
    }
    #contact
    {
        grid-template-columns:repeat(4,25%);
    }
}

@media (max-width:450px)
{
    #font
    {
        font-size:1rem;
        margin-right:10px;
    }
    #contact
    {
        grid-template-columns:repeat(4,25%);
    }
    .menu-container
    {
        height:96px;
    }
}
@keyframes scrol
{
    0%{opacity: 0;}
    40%{opacity: 0;}
    100%{opacity: 1;}
}

@keyframes font
{
    from{opacity: 0;}
    to{opacity: 1;}
}


    </style>
    <script>
  (function (w, d, s, o, f, js, fjs) {
    w["botsonic_widget"] = o;
    w[o] =
      w[o] ||
      function () {
        (w[o].q = w[o].q || []).push(arguments);
      };
    (js = d.createElement(s)), (fjs = d.getElementsByTagName(s)[0]);
    js.id = o;
    js.src = f;
    js.async = 1;
    fjs.parentNode.insertBefore(js, fjs);
  })(window, document, "script", "Botsonic", "https://widget.writesonic.com/CDN/botsonic.min.js");
  Botsonic("init", {
    serviceBaseUrl: "https://api.botsonic.ai",
    token: "9a6356bf-088f-4585-b32f-91bdf55696a5",
  });
</script>
</head>
<body>
    <header id="preheader">
        <section id="header">
            <h2 id="font">Rajasthan Police Portal</h2>
        </section>  
    </header>
    <section id="nav">
        <div class="menu-container">
            <!-- <button class="menu-toggle" onclick="toggleMenu()">&#9776</button> -->
            <ul class="menu" id="main-menu">
                <li><button class="login" onclick="redirect('loginpage.php')"></button></li>
                <li><a href="#preheader">Home</a></li>
                <li><a href="#about">About Us</a></li>
                <!-- <li><a href="https://www.police.rajasthan.gov.in/old/PoliceContacts.aspx">Contact</a></li> -->
                <li><a href="#wrap-i">Contact</a></li>
                <li><a href="#comment-section">A-Comments</a></li>
            </ul>
        </div>
    </section>
    <main class="main">
        <section id="overflow">
            <section class="redirect">
                <button id="box" onclick="redirect('https://police.rajasthan.gov.in/new/dashboard')">
                <div id="img1"></div>
                <p>to the official rajasthan police portal<br><font id="re">click to redirect. </font> | आधिकारिक राजस्थान पुलिस पोर्टल पर
                    रीडायरेक्ट करने के लिए क्लिक करें.</p>
            </button>
            <button id="box" onclick="redirect('police.php')">
                <div id="img"></div>
                <p>give us your valuable feedback to enchance our productivity.<br><font id="re">click to redirect .</font> | हमारी उत्पादकता बढ़ाने के लिए हमें अपनी बहुमूल्य प्रतिक्रिया दें। पुनर्निर्देशन के लिए क्लिक करें</p>
            </button>
            <button id="box" onclick="redirect('trial.php')">
                <div id="img2"></div>
                <p>to get details and to provide feedback about you FIR case.<br><font id="re">click to redirect.</font> | अपने एफआईआर मामले के बारे में विवरण प्राप्त करने और प्रतिक्रिया प्रदान करने के लिए।<br><font id="re">रीडायरेक्ट करने के लिए क्लिक करें।</p>
            </button>
        </section>
    </section>
    <section class="map">
        <div id="map"></div>
        <div id="mapcontrol">
            <button onclick="openFullscreen();" id="fullscreen"></button>
            <button onclick="getLocation()" id="locate"></button>
        </div>
    </section>
    </main> 
    <section id="lower">
    <section class="about" id="about">
        <hr width="90%" id="hr" size="3px" noshade color="white">
        <h2 id="h2">About Us</h2>
        <p>Rajasthan has the unique distinction of being one of the most peaceful States in the country. Established in January 1951, the Rajasthan Police today is an 95,000-strong force that has steadily grown in its organization, equipment, operational techniques, attitude, and outlook. Over the past seventy-three years, whether it was the menace of dacoits in the Chambal ravines, the terror of organized criminal gangs, or the evil design of spies, smugglers, narco-terrorists, and subversive elements from across the 1040 km long international border, the story of Rajasthan Police is a saga of achievements and glory. The mission of the Rajasthan Police is to uphold the law, maintain order, and keep peace. We work with the community to protect life and property, prevent crime and disorder, detect and apprehend offenders, and preserve a sense of security in society. We are a police force that inspires many. Our dynamism and professionalism are the hallmarks of excellence. Values of courage, fairness, loyalty, and integrity guide us. Criminals who are inclined towards crime and disorder are feared by our Force. We treat our people as our most valued asset and serve them with unceasing commitment, humility, and trust. Rajasthan Police is fully geared to meet the challenges of the 21st century. Gone are the days of camels and horses. Today, we are a highly trained force with modern aids like the latest Forensic Science Laboratory, advanced Telecommunication facilities, and now Information Technology. What has not changed, however, is the 'esprit de corps' - a camaraderie that makes every single policeman feel like part of a family as he tries to work in the true spirit of our motto of Rajasthan Police "Sevarth Katibaddhta" सेवार्थ कटिबद्धता</p>
    </section>
    <section class="mbl">
        <div id="wrap-i">
            <h2 id="h2">Important Numbers</h2>
            <hr width="100%" noshade size="3px" color="white">
        </div>
        <div id="mbl">
            <p>Emergency No. : <font color="red">112</font></p>
            <p>Garima Helpline : <font color="red">1090</font></p>
            <p>Child Helpline : <font color="red">1098</font></p>
            <p>Ambulance No. : <font color="red">108</font></p>
            <p>CyberCrime Helpline : <font color="red">1930</font></p>
            <p>State Centralized Call Center no. : <font color="red">181</font></p>
        </div>
    </section>
        <section class="contact">
            <div id="wrap-c">
                <h2 id="h2">Contact Us</h2>
                <hr width="100%" noshade size="3px" color="white">
            </div>
            <div id="contact">
                <button id="x" onclick="redirect('https://twitter.com/PoliceRajasthan')"><img id="x" src="X.png"></button>
                <button id="fb" onclick="redirect('https://www.facebook.com/PoliceRajasthan')"><img id="fb" src="fb-l.png"></button>
                <button id="insta" onclick="redirect('https://www.instagram.com/PoliceRajasthan/')"><img id="insta" src="insta-r.png"></button>
                <button id="yt" onclick="redirect('https://www.youtube.com/@PoliceRajasthanOfficial')"><img id="yt" src="YouTube.png"></button>
            </div>
        </section>
        <section id="comment-section"> 
                <div id="map1"></div>   
                <form id="comment" method="post" action="loginsave.php">
                    <h2 id="h2">anonymous comment section</h2>
                    <textarea id="feedback" name="comments" cols="4" rows="6"></textarea>
                    <input type="hidden" name="lat" id="lat">
                    <input type="hidden" name="lon" id="lon">
                    <input type="submit" value="submit" name="send" id="sub">
                </form>

        </section>
</section>
        <footer >
            <section >

            </section>
        </footer>
    <script>
function redirect(rt)
{
    window.location.href=rt;
}
var map = L.map('map').setView([26.914, 75.81], 13);
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

var map1 = L.map('map1').setView([26.914, 75.81], 13);
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map1);

var popup = L.popup();

var lat,lon;

function onMapClick(e) {
    popup
        .setLatLng(e.latlng)
        .setContent("You clicked the map at " + e.latlng.toString())
        .openOn(map1);
    lat = e.latlng.lat;
    lon = e.latlng.lng;
    console.log(lat);
    // Update hidden input fields with lat and lon values
    document.getElementById('lat').value = lat;
    document.getElementById('lon').value = lon;
}


    console.log(lat);

map1.on('click', onMapClick);

function getLocation() {
  if (navigator.geolocation) 
  {
    navigator.geolocation.getCurrentPosition(showPosition);
    map.locate({setView: true, maxZoom: 16}); 
  } 
}

function showPosition(position) {

    L.marker([position.coords.latitude,position.coords.longitude]).addTo(map)
    .bindPopup('You Are Here!')
    .openPopup();
    var popup = L.popup();
}


L.marker([26.8724147835422, 75.82097724001618]).addTo(map)
    .bindPopup('Jhalana police station')
    .openPopup();
    var popup = L.popup();
L.marker([26.85733594602546, 75.8160951731632]).addTo(map)
    .bindPopup('Malviya nagar')
    .openPopup();
    var popup = L.popup();
L.marker([26.877667704225306, 75.7997082169966]).addTo(map)
    .bindPopup('Bajaj nagar police station')
    .openPopup();
    var popup = L.popup();
L.marker([26.91462615734769, 75.82526608158616]).addTo(map)
    .bindPopup('Lal kothi police station')
    .openPopup();
    var popup = L.popup();
L.marker([226.891392752039774, 75.79490502943716]).addTo(map)
    .bindPopup('Jyoti nagar police station ')
    .openPopup();
    var popup = L.popup();
L.marker([ 26.841637780514016, 75.81421462943716]).addTo(map)
    .bindPopup('Jawahar circle police station')
    .openPopup();
    var popup = L.popup();
L.marker([26.86067372602893, 75.76721388097408]).addTo(map)
    .bindPopup('Shipra path police station')
    .openPopup();
    var popup = L.popup();
L.marker([26.868982282529462, 75.86391710734802]).addTo(map)
    .bindPopup('Kho Nagoariyan police station ')
    .openPopup();
    var popup = L.popup();
L.marker([26.891451910918256, 75.83204786010916]).addTo(map)
    .bindPopup('Jawahar nagar police station')
    .openPopup();

map.setView([ 26.922070, 75.778885], 10);

var elem = document.getElementById("map");
function openFullscreen() {
  if (elem.requestFullscreen) {
    elem.requestFullscreen();
  }
}
    </script>
</body>
</html>