<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>MoU - Bannari Amman Institute of Technology</title>
   <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/bit.png') }}">
   <link rel="stylesheet" href="{{ asset('css/style.css') }}">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>
<body>
   <div class="container">
       <div class="form-container sign-up-container">
           <form method="post" action="{{ url('dashboard') }}">
               <h1>Login Account</h1><br>
               <div class="social-container">
                   <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
               </div><br>
               <span>or use your BIT Account for Login</span><br>
               <input type="email" name="email" placeholder="Email" required>
               <input type="password" name="password" placeholder="Password" required>
               <button type="submit">Log In</button>
           </form>
       </div>
       <div class="overlay-container">
           <div class="overlay">
               <div class="overlay-panel overlay-right">
                   <img src="{{ asset('images/bitlogo.jpg') }}" alt="BIT Logo"><br>
                   <p>MoU - Memorandum of Understandings</p>
               </div>
           </div>    
       </div>
   </div>
</body>
</html>


