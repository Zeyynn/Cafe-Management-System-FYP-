<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration Page</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Artifika:wght@400&display=swap" />
    <link rel="stylesheet" href="index.css" />
    @vite('resources/css/RegistrationPage.css')
  </head>
  <body>
    <div class="main-container"> <!--The Main Container-->

        <form action="{{ url('/submit-registration') }}" method="POST">
        @csrf
        <span class="username">Username:</span>
        <input type="text" name="username" placeholder="Enter your username" required class="rectangle" />
        <span class="phone-number">Phone Number:</span>
        <input type="tel" name="phone" placeholder="Enter your phone number" required class="rectangle-1" />
        <span class="email-input">E-mail:</span>
        <input type="email" name="email" placeholder="Enter your email" required class="rectangle-2" />
        <span class="password-input">Password:</span>
        <input type="password" name="password" placeholder="Enter your password" required class="rectangle-3" />
        <span class="reenter-password-input">Re-Enter Password:</span>
        <input type="password" name="repassword" placeholder="Re-enter your password" required class="rectangle-4" />
        <div class="rectangle-5"></div>
        <div class="rectangle-6"></div>
        <div class="sign-up">Sign Up</div>
        <button type="submit" class="rectangle-7"></button>
        <span class="sign-up-8">Sign Up</span>
    </div>
  </body>
</html>
