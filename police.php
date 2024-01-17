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


.star-rating 
{
    display: flex;
    margin-inline:auto;
    overflow: hidden;
    flex-direction: row-reverse; 
    animation: font 0.5s linear;
    margin-bottom: 8px;
}


.star-rating label 
{
font-size: 50px;
padding: 5px;
cursor: pointer;
color: #ccc;
}

#feedback-form {
    
    color: aliceblue;
    margin: 0 auto;
    background-color :#24293e62;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    width: clamp(250px,75%,400px);
    animation: box 1s ease-in-out;
    overflow:hidden;
    white-space: nowrap;
    height: fit-content;
    select
    {
        font-size: larger; 
        font-weight: bolder; 
        color: Black;
    }
}
#feedback-form>label
{
    font-size: larger; 
    font-weight: bolder; 
    color: white;
}

@media (min-width:495px) and (max-width:768px)
{
    #font
    {
        font-size:1.1rem;
    }
}
@media (max-width:495px)
{
    .star-rating
    {
        margin-inline:0;
        justify-content:left;
    }
    #font
    {
        font-size:0.9rem;
    }
}


.star-rating input 
{
    display: none;
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
    height: 100%;
}

html{
    scroll-behavior: smooth;
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

}

#form
{
    display: flex;
    flex-wrap:wrap;
    flex-direction:column;
}

button
{
    margin-left: 140px;
}

@keyframes box
{
    0%{width:10px;}
    100% {width: clamp(250px,75%,400px);}
}

@keyframes font
{
    0%{opacity: 0;}
    100%{opacity: 1;}
}


.mbl{
    background-color: #BDC3C7;
    display:flex;
    flex-wrap: wrap;
    width: 100%;
}
.mbl>p
{
    margin-inline:auto;
    font-weight: bold;
    color: #2F3651;
}
#sub{
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
}
#sendOtp{
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
}
        </style>
            <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
       

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
                    <label for="district" style="">Select District: | 
जिला चयन करें:</label>
                    <select id="district" name="district" aria-placeholder=" " onchange="updatePoliceStations()">
                        <option value="Jaipur">Jaipur</option>
                        <option value="Udaipur">Udaipur</option>
                    </select>
                    <label for="policeStation">Select Police Station:
पुलिस स्टेशन चयन करें:</label>
                    <select id="policeStation" name="policeStation">
                </select>
                    <label for="name" class="input_label">Officer Name | 
अधिकारी का नाम:</label>
                    <input type="text" id="name" name="offname" placeholder="" required class="input_field">


                    <label for="name" class="input_label">Mobile Number | 
मोबाइल नंबर:</label>
                        <input type="tel" id="mobile" name="mobile" pattern="[0-9]{10}" placeholder="" required class="input_field">
                        <input type="button" id="sendOtp" value="Send OTP" onclick="sendOTP()" />

                        <label for="otp" class="input_label" >OTP  | 
अधिकारी का नाम:</label>
                        <input type="text" id="otp" name="otp" placeholder="" required class="input_field">
                        
                        <label>Rating:<font color="lightgrey">(Sincerity)</font></label>
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
                    if (selectedDistrict === "Jaipur") {
                        addPoliceStationOption("Station3", "Station3");
                        addPoliceStationOption("Station4", "Station4");
                    } else if (selectedDistrict === "Udaipur") {
                        addPoliceStationOption("Station1", "Station1");
                        addPoliceStationOption("Station2", "Station2");
                    }            
                    function addPoliceStationOption(value, text) {
                        var option = document.createElement("option");
                        option.value = value;
                        option.text = text;
                        policeStationDropdown.appendChild(option);
                    }
                }
                function sendOTP() {
    // Get the mobile number
    var mobile = document.getElementById('mobile').value;

    // Send an AJAX request to send OTP
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'sendotp.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            alert('OTP sent successfully!');
        } else if (xhr.readyState == 4 && xhr.status != 200) {
            alert('Error sending OTP: ' + xhr.responseText);
        }
    };
    xhr.send('mobile=' + mobile);
}

            </script>
        </body>
        </html>
        
       