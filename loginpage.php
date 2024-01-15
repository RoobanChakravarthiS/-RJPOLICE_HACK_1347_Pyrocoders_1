<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        #preheader
        {
            background-color: #bf0808;
            border-bottom: #000 solid ;
        }
        
    body
    {
    font-family: Arial, sans-serif;
    align-items: center;
    margin: 0;  
    max-width: 100%;
    height:90vh;
    user-select: none;
    overflow:hidden;
    }

    .main
    {
        opacity: 1;
    }

    #header
    {
    display: flex;
    flex-wrap: wrap;
    background-color: #2F3651;
    color: aliceblue;
    text-transform: uppercase;
    background-image: url(raj_icon.webp);
    background-repeat: no-repeat;
    background-size: contain;
    font-size: larger;
    clip-path: polygon(
    0% 0%, 100% 0%,calc(100% - 118px) 100%,0% 100%
    );
    } 

    #bg
    {
        background-image: url(rj_login.jpg);
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        display:grid;
        height:90%;
        opacity: 0.9;
        border-image:fill 0 linear-gradient(#0003,#000);
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

    input {
    width: 100%;
    padding: 8px;
    box-sizing: border-box;
    height: 37px;
    border: 0;
    border-radius: 3px;
    white-space: nowrap;
    margin-bottom: 5px;
    margin-top: 10px;
}
    
#login-box {
    
    color: aliceblue;
    margin:auto;
    background-color :#24293e62;
    padding: 20px;    
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    width:clamp(250px,75%,400px);
    animation: box 1s ease-in-out;
    overflow:hidden;
    white-space: nowrap;
    display:grid;
    grid-template-columns: auto;

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
    top:17px;
}
div>div>label,
.input_field:focus~.input_label
{
    position: absolute;
    top:2px;
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

#hr
{
    margin-bottom: 30px;
}

h2
{
    margin-inline: auto;
}

p
{
    margin-top:0 ;
    text-indent: 1rem;
    opacity: 0.5;
    font-size: 12px;
}

.my-shake
{
    animation: shake 0.2s ease-in infinite;
    border: 1px solid red;
}

#button
{
    margin-top: 25px;
    margin-bottom: 10px;
    width: 100px;
    height: 42px;
    margin-inline: auto;
    background-color: #232b4d;
    border: 1px solid white;
    border-radius: 3px;
    font-size: large;
    color: aliceblue;
}

#button:hover
{
    border: 2px solid aliceblue;
    background-color: #404c84;
}

#bottom
{
    height: 63px;
    background-color:#2F3651;
    clip-path: polygon(
    0% 0%, 53% 0%,47% 100%,0% 100%
    );
}

#prebottom
{
    background-color: #bf0808;
}

@keyframes shake
{
    0%{transform: translateX(5px);}
    25%{transform: translateX(-5px);}
    75%{transform: translateX(-5px);}
    100%{transform: translateX(5px);}
}

    @keyframes font
{
    0%{opacity: 0;}
    100%{opacity: 1;}
}
    </style>
</head>
<body>
    <header id="preheader">
        <section id="header">
            <h2 id="font">Admin Login Page</h2>
        </section>  
    </header>
    <main id="bg">
        <!-- <marquee behavior="" direction="left" vspace="20"><font color="white">Feedback helps us to make the services look better and help in the better functionality of the </font><font color="red"><strong>Police Department.</strong></font></marquee> -->
        <form id="login-box" action="loginsave.php" method="post">
            <h2>LOGIN FORM</h2>
            <hr id="hr" width="90%">
            <div class="box">
                <div class="input_wrapper">
                    <input name="username" type="text" id="username"  placeholder="" required class="input_field">
                    <label class="input_label">Username</label>
                </div>
                <p>*Enter a valid Username</p>
            </div>
            <div class="box">
                <div class="input_wrapper">
                    <input name="pass" type="password" id="password" placeholder="" required class="input_field">
                    <label class="input_label">Password</label>
                </div>
            </div>
            <button type="submit" id="button">Login</button>
        </form>
    </main>
    <footer id="prebottom">
        <section id="bottom">
        </section>
    </footer>
    </body>
</html>
