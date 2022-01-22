<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Arvo:wght@700&display=swap" rel="stylesheet"> 

    <!-- NEW -->
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;400;900&display=swap" rel="stylesheet">
    <!--  -->

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"> 

    <link rel="stylesheet" type="text/css" href="./css/login.css"> 
    <title>Login</title>
</head>
<body>

<div class="nav"> <div class="ghost"><i class="fas fa-ghost"></i></div><div class="newusr">new to <b style="font-weight: 400;">Widmo</b>?</div>
<a href="#" class="button"><input type="button" class="button-design top-button" value="Sign Up"></a></div>

<div id="login-box">

    <div id="login-text"><h1>Login</h1></div>

    <form id="form-grid">
        <div class="grid-items" id="email"> <div style="order:2"><input type="text" id="email-input">  </div><div ><label id="label" for="email-input" > Email</label>  </div></div>
        <div class="grid-items" id="password"> <div style="order:2;"><input type="text" id="password-input">  </div><div ><label id="label" fid="label" or="password-input" > Password</label></div> </div>
        <div class="grid-items" id="submit"> <input type="button" class="button-design" onclick= "window.location.href = 'dashboard.php';" value="Submit"></div>
        
    </form>
    
</div>
    
</body>
</html>