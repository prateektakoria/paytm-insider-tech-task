<!DOCTYPE html>
<html>
<head>
        <title>UEFA Football League</title>
        <meta charset="utf-8">
        <link href="/css/style.css" rel='stylesheet' type='text/css' />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            @font-face {
                font-family: century-gothic;
                src: url(/fonts/gothic.woff);
            }
            body{
                font-family: century-gothic;
            }
            .error{
                color: red !important;
                display: none;
            }
            .right-form input[type=submit]{
                margin: 1em 0em;
            }
        </style>
</head>
<body>
    <div class="main">
        <div class="header" >
            <img src="/images/logo.png" style="width: 150px; margin-bottom: 10px;">
        </div>
            <p>You need an API Token to access the group of clubs for the UEFA League. Create an Account or Login to Continue.</p>
            <form action="/register" method="post" style="padding-bottom: unset;">
                @csrf
                <ul class="left-form">
                    <h2>New Account:</h2>
                    <li>
                        <input type="text"   placeholder="Name" name="name" required/>
                        <div class="clear"> </div>
                    </li> 
                    <li>
                        <input type="email"   placeholder="Email" name="email" required/>
                        <div class="clear"> </div>
                    </li> 
                    <li>
                        <input type="password" name="password" placeholder="Password" required/>
                        <div class="clear"> </div>
                    </li> 
                    <li>
                        <input type="password" name="password_confirmation"  placeholder="Confirm Password" required/>
                        <div class="clear"> </div>
                    </li>
                    <input type="submit" onclick="myFunction()" value="Create Account">
                        <div class="clear"> </div>
                </ul>

            </form> 

            <form method="post" action="/login">
                @csrf
                <ul class="right-form">
                    <h3>Login:</h3>
                    <div>
                        <li><input type="text" name="email" placeholder="Email" required/></li>
                        <li> <input type="password" name="password" placeholder="Password" required/></li>
                        <input type="submit" value="Login" >
                    </div>
                    <div class="clear"> </div>
                </ul>
                <div class="clear"> </div>
                    
            </form>
            
        </div>
</body>
</html>