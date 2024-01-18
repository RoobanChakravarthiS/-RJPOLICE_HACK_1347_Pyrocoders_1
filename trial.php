<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            width: 100%;
            background-color: #2F3651;
            overflow-x: hidden;
        }
        #below{
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            align-items: center;
            justify-content: center;
            height: 100%;
            background-image: url(bg1.png.jpg);
            background-repeat:no-repeat;
            width: 100%;
            background-size:cover;
            background-position: center;
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
        .feedback-form {
            background-color: #24293e62;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
            border-radius: 10px;
            width: clamp(250px,75%,400px);
            text-align: center;
            overflow: hidden;
            margin: 0 auto;
            animation: box 1s ease-in-out;
        }
        #wrap{
white-space: nowrap;
        }
        .feedback-form label {
            display: block;
            margin-bottom: 8px;
        }
        #feedback
        {
            resize: none;
            font-family: Arial, Helvetica, sans-serif;
            white-space: nowrap;
            overflow: hidden;
        }
        .feedback-form input,
        .feedback-form textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        .feedback-form textarea {
            height: 100px;
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
@keyframes box{
    0%{width:10px;}
    100% {width:clamp(250px,75%,400px);}
}

@media (max-width:768px)
{
    #font
    {
        font-size:0.8rem;
    }
}
        .feedback-form #sub {
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

        .feedback-form #sub:hover {
            background-color: #45a049;
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

        #top{
            background-image: url(raj_icon.webp.jpg);
            background-repeat: no-repeat;
            align-items: center;
            background-size: contain;
            padding: 11px;
            font-size: larger;
            text-align: center;
            clip-path: polygon(0% 0%,100% 0%,calc(100% - 118px) 100%,0% 100%);
            background-color:#2F3651;
        }
        #top h1{
            color: white;
        }
        #pretop{
            background-color: #bf0808;
        }
        #bottom{
            height:80px;
            background-color: #2F3651;
            clip-path: polygon(0% 0%,53% 0%,47% 100%,0% 100%)
        }
        #prebottom{
            background-color: #bf0808;
        }
        
    </style>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
$(document).ready(function() {
    $("#sub").click(function() {
        var inputValue = $("#firNumber").val();
        if (inputValue) {
            var data = { firNumber: inputValue };
            console.log('Sending data:', data);
            searchData(data);
        } else {
            alert("Please enter a FIR number.");
        }
    });
});

function searchData(inputData) {
    $.ajax({
        type: 'POST',
        url: 'search.php',
        data: JSON.stringify(inputData),
        contentType: 'application/json',
        success: function(response) {
            console.log('Received response:', response);
            document.getElementById('handlingOfficer').value = response.HandlingOfficer;
            document.getElementById('i6').value = response.MobileNumber;
            document.getElementById('station').value = response.Station;
        },
        error: function(xhr, status, error) {
            console.error('Error:', xhr.responseText);
        }
    });
}

</script>
</head>
<body>
  <section id="pretop">  
<section id="top">
     <h1 id="font">CASE FEEDBACK SYSTEM </h1>
</section>
</section>
<section id="below">
        <marquee behavior="" direction="" vspace="15" ;>
        Your Feedback helps us to make the services look better and help in the better Functionality of the <span style="color: red; font-weight: bolder;">Police Department </span>       आपकी प्रतिक्रिया हमें सेवाओं को बेहतर बनाने और उनकी कार्यक्षमता को बेहतर बनाने में मदद करती है <span style="color: red; font-weight: bolder;">पुलिस विभाग</span>  
        </marquee>
        <h1 id="msg"></h1>
    <div class="feedback-form">
        <div id="wrap">
        <h1>Feedback Form</h1>
        <hr id="hr" width="90%">
        <form action="store.php" method="post" name="form">
        <label for="firNumber" style="font-size: larger; font-weight: bolder; color: white;">FIR Number | 
                एफ आई आर नंबर</label>
            <input type="text" id="firNumber" name="firno" required>
    </div>
    <button id="sub" type="button" style="white-space:none;" name="search" onclick="searchData()">Verify</button>
    
    <label for="otp" class="input_label" style="font-size: larger; font-weight: bolder;color: white">OTP </label>
    <input type="text" id="otp" name="otp" placeholder="" required class="input_field">
    <input type="button" id="sendOtp" value="Check OTP" onclick="checkOTP()" />
    <div id="wrap">
        
            <div id="wrap">
                <label for="handlingOfficer" style="font-size: larger; font-weight: bolder;color: white">Handling Officer | हैंडलिंग अधिकारी</label>
            <input id="handlingOfficer" name="offname" >
</div>
                <div id="wrap">
                        <label for="i6" style="font-size: larger; font-weight: bolder;color: white" >Mobile Number | मोबाइल नंबर</label>
                        <input  id="i6" name="mobile" pattern="[0-9]{10}" required >
                </div>
            
            <label for="Station" style="font-size: larger; font-weight: bolder;color: white">Station Name</label>
            <input id="station" name="policeStation">
</div>


<label style="font-size: larger; font-weight: bolder;color: white; white-space:nowrap;">Time Management:</label>
            <div class="star-rating">
                <input type="radio" id="star1" name="starRating" value="1" required><label for="star1">&#9733; </label>
                <input type="radio" id="star2" name="starRating" value="2" required><label for="star2">&#9733; </label>
                <input type="radio" id="star3" name="starRating" value="3" required><label for="star3">&#9733; </label>
                <input type="radio" id="star4" name="starRating" value="4" required><label for="star4">&#9733; </label>
                <input type="radio" id="star5" name="starRating" value="5" required><label for="star5">&#9733; </label>
            </div> 
            <label style="font-size: larger; font-weight: bolder;color: white ;white-space:nowrap">Management of the case:</label>
            <div class="star-rating">
                <input type="radio" id="star1" name="starRating"  required><label for="star1">&#9733; </label>
                <input type="radio" id="star2" name="starRating"  required><label for="star2">&#9733; </label>
                <input type="radio" id="star3" name="starRating"  required><label for="star3">&#9733; </label>
                <input type="radio" id="star4" name="starRating"  required><label for="star4">&#9733; </label>
                <input type="radio" id="star5" name="starRating"  required><label for="star5">&#9733; </label>
            </div> 
            <label style="font-size: larger; font-weight: bolder;color: white; white-space:nowrap">Interaction with public:</label>
            <div class="star-rating">
                <input type="radio" id="star1" name="starRating"  required><label for="star1">&#9733; </label>
                <input type="radio" id="star2" name="starRating"  required><label for="star2">&#9733; </label>
                <input type="radio" id="star3" name="starRating"  required><label for="star3">&#9733; </label>
                <input type="radio" id="star4" name="starRating"  required><label for="star4">&#9733; </label>
                <input type="radio" id="star5" name="starRating"  required><label for="star5">&#9733; </label>
            </div> 
            <label for="feedback" style="font-size: larger; font-weight: bolder;color: white;">Feedback</label>
            <textarea id="feedback" name="feedback"></textarea>
    </div>
            <input style="white-space:nowrap;" type="submit" value="Submit Feedback | फ़ॉर्म स4बमिट करें" id="sub" name="submit"></input>
        </form>
        
        
</div>
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
    $(document).ready(function () {
        // Your other document ready code
        // ...

        // Disable the OTP input field and the submit button initially
        $('#otp').prop('disabled', true);
        $('#submit').prop('disabled', true);

        // Attach a click event handler to the search button
        $('#search').click(function () {
            const firNumber = $('#firNumber').val();

            if (firNumber) {
                const inputData = { firNumber: firNumber };
                searchData(inputData);
            } else {
                alert('Please enter an FIR number.');
            }
        });
    });

    function searchData(inputData) {
        $.ajax({
            type: 'POST',
            url: 'search.php',
            data: JSON.stringify(inputData),
            contentType: 'application/json',
            success: function (response) {
                console.log('Received response:', response);
                const mobile = response.MobileNumber;
                sendOTP(mobile);
            },
            error: function (xhr, status, error) {
                console.error('Error:', xhr.responseText);
            }
        });
    }

    function sendOTP(mobile) {
        $.ajax({
            type: 'POST',
            url: 'sendotp.php',
            data: { mobile: mobile },
            success: function () {
                alert('OTP sent successfully!');
                // Enable the OTP input field for the user to enter OTP
                $('#otp').prop('disabled', false);
            },
            error: function (xhr, status, error) {
                alert('Error sending OTP: ' + xhr.responseText);
            }
        });
    }



    $(document).ready(function() {
    $("#sendOtp").click(function() {
        checkOTP();
    });
});

    function checkOTP() {
    const enteredOTP = $('#otp').val();
    const firNumber = $('#firNumber').val();

    // Check if both enteredOTP and firNumber have values
    if (enteredOTP && firNumber) {
        $.ajax({
            type: 'POST',
            url: 'checkotp.php',
            data: JSON.stringify({ otp: enteredOTP, firno: firNumber }),
            contentType: 'application/json', // Specify content type for JSON data
            success: function (response) {
                if (response.error) {
                    alert('Error checking OTP: ' + response.error);
                } else {
                    // Update fields using jQuery for consistency
                    $('#handlingOfficer').val(response.HandlingOfficer);
                    $('#i6').val(response.MobileNumber);
                    $('#station').val(response.Station);

                    // Enable the submit button now that the data has been filled
                    $('#submit').prop('disabled', false);
                    console.log('AJAX success:', response);
                }
            },
            error: function (xhr, status, error) {
                alert('Error checking OTP: ' + xhr.responseText);
                console.error('AJAX error:', xhr.responseText);
            },
            complete: function () {
                // Continue with the rest of the function here, if needed
                console.log('AJAX complete');
            }
        });
    } else {
        // Handle the case where either enteredOTP or firNumber is empty
        alert('Please enter both OTP and FIR Number.');
    }
}

</script>



</script>
</body>
</html>

