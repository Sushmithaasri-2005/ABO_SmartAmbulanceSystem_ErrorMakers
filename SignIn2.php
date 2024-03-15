<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignIn2</title>
    <style>
        body {
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;

            margin: 0;
            padding: 0;
            
            min-height: 100vh;
            animation: colorFade 5s infinite alternate;
            background-image: url("s22.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }

        @keyframes colorFade {
            0% { background-color: rgba(255, 228, 225, 1); } 
            100% { background-color:rgba(251,1,1,0.8); } 
        }

        .container {
            background-color: rgba(245, 232, 232, 0.5);
            border-radius: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-bottom: 4px solid blue; 
            border-right: 4px solid blue; 
            width: 400px;
            height: 250px;
            margin: auto; 
        }

        .form-group {
            margin-bottom: 20px; 
            padding: 10px;
            margin-top: 0px;
            padding-top: 5px;
        }

        .form-group input {
            border-radius: 5px;
            border: 0px;
            border-bottom: 3px black;
        }

        @media (max-width: 768px) {
            body h1 {
                margin-top: 30%;
                margin-bottom: 10%;
            }
            .container {
                margin-top: 50%;
                width: 90%;
                height: auto;
                max-width: 300px;
                max-height: none;
            }
        }
        .navbar {
            display: flex;
            margin-top: 100;
            margin-left: 10px;
           margin-top: 50px;
            margin-left: 20px;
        
        }

        .navbar a {
            color: white;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar">
            <a href="index.html"  style="color: white; float: left;">Back</a>
        </nav>
    </header>
    <h1 style="text-align: center;font-size: xx-large;font-weight: 700;color: white;margin-top: 5%;margin-bottom: 5%;" align="center">Sign In</h1>
    <div class="container">
        <form action="">
            <div class="block">
                <div class="form-group" style="margin-left: 32px;">
                    <label for="Email">Email<span style="color: red;">*</span></label>
                    <input type="email" id="Email" name="Email">
                </div>
                
                <center><div class="form-group">
                    <label for="password">Password <span style="color: red;">*</span></label>
                    <input type="password" id="password" name="password" required maxlength="8">
                    <br><br>
                    <center><div class="form-group1">
                        <button>Sign In</button>
                    </div ></center><br>
                    <p>Don't have an account? <a href="loginreg2.html">SignUp</a></p></center>
                    
                </div>
            </div>
        </form>
    </div>
</body>
</html>
