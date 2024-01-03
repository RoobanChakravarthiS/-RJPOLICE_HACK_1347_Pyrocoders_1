<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Police Mission Feedback</title>
        <style>
            
#header
{
    padding: 11px;
    background-color: #2F3651;
    color: aliceblue;
    text-align: center;
    text-transform: uppercase;
    background-image: url(raj_icon.webp);
    background-repeat: no-repeat;
    background-size: contain;
    font-size: larger;
    clip-path: polygon(
    0% 0%, 100% 0%,calc(100% - 118px) 100%,0% 100%
    );
} 

#font
{
    animation: font 0.5s linear;
}

body {
    font-family: Arial, sans-serif;
    align-items: center;
    margin: 0;  
    max-width: 100%;
    height: 100%;
}

.star-rating1 
{
    display: flex;
    justify-content: center;
    overflow: hidden;
    flex-direction: row-reverse; 
    animation: font 0.5s linear;
    margin-bottom: 8px;
}

.star-rating 
{
    display: flex;
    justify-content: center;
    overflow: hidden;
    flex-direction: row-reverse; 
    animation: font 0.5s linear;
    margin-bottom: 8px;
    grid-column-start: 1;
    grid-column-end: 3;
}
.star-rating input 
{
    display: none;
}
.star-rating label 
{
font-size: 50px;
padding: 5px;
cursor: pointer;
color: #ccc;
}
.star-rating input:checked + label,.star-rating input:checked ~ label 
{
color: #ff9800; 
}
.star-rating :hover  + label,.star-rating :hover ~ label 
{
color: #ff9800; 
}
#preheader
{
    background-color: #bf0808;
}
#prebottom
{
    background-color: #bf0808;
}

marquee
{
    color: #2F3651;
}

.bg
{
    background-image: url(police-headquarter.png);
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    height: 640px;
    opacity: 0.9;
}

html{
    scroll-behavior: smooth;
}
#feedback-form {
    
    color: aliceblue;
    margin: 0 auto;
    background-color :#24293e62;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    width: 400px;
    animation: box 1s ease-in-out;
    overflow:hidden;
    white-space: nowrap;
    height: fit-content;
}

label {
    padding: 5px;
    animation: font 0.5s linear;
}
select
{
    width: 100%;
    padding: 8px;
    box-sizing: border-box;
    white-space: nowrap;
    margin-bottom: 10px;
    margin-top: 10px;
    position: relative;
    transition: all 0.2s;
    
}
input, textarea {
    width: 100%;
    padding: 8px;
    box-sizing: border-box;
    white-space: nowrap;
    margin-bottom: 10px;
    margin-top: 10px;
}

button {
    background-color: #293565;
    color: #fff;
    padding: 10px;
    border: solid #293565;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #2f4084;
    border: solid whitesmoke;
}

#bottom
{
    height: 63px;
    background-color:#2F3651;
    clip-path: polygon(
    0% 0%, 53% 0%,47% 100%,0% 100%
    );
}

#feedback
{
    margin-top: 0;
    resize: none;
    font-family: Arial, Helvetica, sans-serif;
    white-space: nowrap;
    overflow: hidden;
    grid-column-start: 1;
    grid-column-end: 3;
}

#form
{
    display: grid;
    grid-template-columns: auto 30px;
    column-gap: 7px;
}

button
{
    margin-left: 140px;
}

@keyframes box
{
    0%{width:10px;}
    100% {width:400px;}
}

@keyframes font
{
    0%{opacity: 0;}
    100%{opacity: 1;}
}

.input_wrapper
{
    position: relative;
 
}
.input_field
{
    transition: all 0.2s;
}

.input_field::placeholder
{
    color: transparent;
}

.input_field:placeholder-shown~.input_label
{
    cursor:text;
    font-size: 1rem;
    top:16px;
}
div>div>label,
.input_field:focus~.input_label
{
    position: absolute;
    top:1px;
    display: box;
    left:18px;
    padding: 2px;
    font-size: 14px;
    transition:  0.3s;
}
.input_label
{
    color: #2F3651;
    background-color: #fff;
    border-radius: 3px;
    /*text-shadow: -1px 1px 0 #fff,1px 1px 0 #fff,1px -1px 0 #fff,-1px -1px 0 #fff;
    background-image: linear-gradient(360deg,white,white,white,white,white,white,rgba(255,255,255,0),rgba(255,255,255,0),rgba(255,255,255,0),rgba(255,255,255,0),rgba(255,255,255,0),rgba(255,255,255,0));*/
    animation: font 0.5s linear;
}


.mbl{
    background-color: #BDC3C7;
}
.mbl>p
{
    display: inline-block;
    padding-left: 15px;
    font-weight: bold;
    color: #2F3651;
}

#mic
{
    height: 35.5px;
    cursor: pointer;
    padding: 5px;
    background-color: gray;
    border: 0.5px grey solid;
    border-radius: 2px;
}

#mic1
{
    margin: 0 0 3px;
    height: 33px;
    cursor: pointer;
    padding: 5px;
    background-color: gray;
    border: 0.5px grey solid;
    border-radius: 2px;
}

#mic1:hover,#mic:hover
{
    background-color: #BDC3C7;
    border: 1px solid #293565;
}
#sub{
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
}
        </style>
        </head>
        <body>
            <section id="preheader">
                <section id="header">
                    <h2 id="font">Police Mission Feedback</h2>
                </section>  
            </section>
            <section class="bg">  
                <marquee behavior="left" direction="left" vspace="15">Your feedback helps us to make the services look better and help in the better functionality of the <font color="red"><strong>Police Department.</strong></font></marquee>
                <div id="feedback-form">
                    <form id="form" action="store2.php" method="post" name="form">
                <div class="box">
                    <label for="district">Select District:</label><br>
                    <select id="district" name="district" aria-placeholder=" "  onchange="updatePoliceStations()">
                        <option value="jaipur">Jaipur</option>
                        <option value="udaipur">Udaipur</option>
                    </select>
                </div><br>
                <div>
                    <label for="policeStation">Select Police Station:</label><br>
                    <select id="policeStation" name="policeStation"></select>
                </div><br><br>
                <div class="box">
                    <div class="input_wrapper">
                    <input type="text" id="name" name="offname" placeholder="" required class="input_field">
                    <label for="name" class="input_label">Officer Name</label>
                </div>
</div><br><br>>
<div class="box">
    <div class="input_wrapper">
        <input type="tel" id="name" name="mobile" pattern="[0-9]{10}" placeholder="" required class="input_field">
        <label for="name" class="input_label">Mobile Number</label>
    </div>
</div><br><br>
                        <label for="rating1">Rating:<font color="lightgrey">(Sincerity)</font></label>
                        <div class="star-rating">
                            <input type="radio" id="star1" name="starRating" value="1" required><label for="star1">&#9733;</label>
                            <input type="radio" id="star2" name="starRating" value="2" required><label for="star2">&#9733;</label>
                            <input type="radio" id="star3" name="starRating" value="3" required><label for="star3">&#9733;</label>
                            <input type="radio" id="star4" name="starRating" value="4" required><label for="star4">&#9733;</label>
                            <input type="radio" id="star5" name="starRating" value="5" required><label for="star5">&#9733;</label>
                        </div>
                        <label>Feedback:</label>
                        <textarea id="feedback" name="feedback" cols="4" rows="5" placeholder="#Feedback Here"></textarea>
                        <input type="submit" id="sub" value="Submit Feedback" name="submit"></input>
                    </form>
                    
                </div>
            </section>
            <section class="mbl">
                <p>Emergency No. : <font color="red">112</font></p>
                <p>Garima Helpline : <font color="red">1090</font></p>
                <p>Child Helpline : <font color="red">1098</font></p>
                <p>Ambulance No. : <font color="red">108</font></p>
                <p>CyberCrime Helpline : <font color="red">1930</font></p>
                <p>State Centralized Call Center no. : <font color="red">181</font></p>
            </section>
            <section id="prebottom">
                <section id="bottom"></section>
            </section>
            <script>
                function updatePoliceStations() {
                    var selectedDistrict = document.getElementById("district").value;
                    var policeStationDropdown = document.getElementById("policeStation");
                    policeStationDropdown.innerHTML = "";
                    if (selectedDistrict === "jaipur") {
                        addPoliceStationOption("station 1", "Station 1");
                        addPoliceStationOption("station 2", "Station 2");
                    } else if (selectedDistrict === "udaipur") {
                        addPoliceStationOption("station 3", "Station 3");
                        addPoliceStationOption("station 4", "South east");
                    }            
                    function addPoliceStationOption(value, text) {
                        var option = document.createElement("option");
                        option.value = value;
                        option.text = text;
                        policeStationDropdown.appendChild(option);
                    }
                }
            </script>
        </body>
        </html>
        
       