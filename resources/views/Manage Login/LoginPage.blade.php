<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Page</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Artifika:wght@400&display=swap" />
    <link rel="stylesheet" href="index.css" />
    <link rel="stylesheet" href="{{ asset('css/LoginPage.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite('resources/css/LoginPage.css')
  </head>
  <body>
    <div class="main-container">
      <!-- Logo Section -->
      <div class="removal">
        <img class="logo" src="img/duwa1.png" alt="Logo" />
      </div>
    
      <!-- Welcome Message -->
      <span class="welcome">Welcome</span>
      
      <!-- E-mail Label -->
      <span class="email">E-mail:</span>
    
      <!-- The White Box (Form Area) -->
      <div>
        <!-- Login Form -->
        <form class="login-form" action="{{ route('login.submit') }}" method="POST">
          @csrf
          <!-- Email Input -->
          <input type="email" name="email" placeholder="Enter your email" required class="rectangle" />
          
          <!-- Password Label & Input -->
          <span class="password">Password:</span>
          <input type="password" name="password" placeholder="Enter your password" required class="rectangle-2" />
          
          <!-- Login Button -->
          <button type="submit" class="submit-button">Login</button>
          <button type= "submit" class="rectangle-button"></button>
        </form>
      
        <!-- Additional Texts/Links -->
        <div class="extra-links">
          <span class="no-account">No account yet?</span>
        </div>
    
      <!-- Additional Sections/Buttons -->
      <div class="rectangle-1"></div>
      <div class="main-content"></div>
      
      <span class="login-span">Login</span>
      <button class="rectangle-button-3"></button>
      <a href="{{ route('registration') }}" class="login-link">
      <span class="sign-up-span">Sign Up</span></a>
      
    </div>
  </div>
  
  </body>
</html>


