<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Based ICT Dictionary</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.5/xlsx.full.min.js"></script>
</head>

<body>

    <header>
      <h2 class="logo">ICT DICTIONARY</h2>  
      <form>
            <input type="search" id="searchbox" class="searchbox" placeholder="Search our site">
          </form>
      <nav class="navigation">
        <a href="html.php">HTML</a>
        <a href="css.php">CSS</a>
        <a href="JS.php">JavaScript</a>
        <a href="PHP">PHP</a>
        <button class="btnLogin-popup">Login</button>
        </nav>
        <div class="O"></div>
    <div class="Sidebar">
        <h3>Assignment</h3>
        <ul>
            <li><a href="Home.php"><i class='bx bx-home' ></i>Home</a></li>
            <li><a href="Dashboard.php"><i class='bx bxs-dashboard'></i>Dashboard</a></li>
            <li><a href="Assignment.php"><i class='bx bx-book'></i>Assignment</a></li>
        </ul>
</div>
</div>
    </header>
    
    <div class="wrapper">
        <span class="icon-close">
            <ion-icon name="close"></ion-icon>
        </span>

        <div class="form-box login">
            <h2>Login</h2>
            <form action="#"> 
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="mail"></ion-icon>
                    </span>
                    <input type="email" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="lock-closed">
                        </ion-icon>
                    </span>
                    <input type="password" required>
                    <label>Password</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">Remember me</label>
                    <a href="#" >Forgot Password?</a>               
                 </div>
                <button type="submit" class="btn">Login</button>
                <div class="login-register">
                    <p>Don't have an account? <a href="#" class="register-link">Register</a></p>
                </div>
            </form>
        </div>

        <div class="form-box register">
            <h2>Registration</h2>
            <form action="#"> 
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="person"></ion-icon>
                    </span>
                    <input type="text" required>
                    <label>Username</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="mail"></ion-icon>
                    </span>
                    <input type="email" required>
                    <label>Email</label>
                </div>
                
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="lock-closed">
                        </ion-icon>
                    </span>
                    <input type="password" required>
                    <label>Password</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">I agree to the terms & conditions</label>
                </div>
                <button type="submit" class="btn">Register</button>
                <div class="login-register">
                    <p>Already have an account? <a href="#" class="login-link">Login</a></p>
                </div>
            </form>
        </div>
    </div>

    <script src="script.js"></script>   
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
   
</body>
</html>