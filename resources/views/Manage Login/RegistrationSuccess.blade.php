<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Success!</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Artifika:wght@400&display=swap" />
    <link rel="stylesheet" href="index.css" />
    @vite('resources/css/RegistrationSuccess.css')
  </head>
  <body>
    <div class="main-container">
      <span class="account-created">Account has been created!</span>
      <span class="browse-menu">You can now browse through duwa’s menu lists and make an order!</span>
      <div class="rectangle"></div>
      <button class="button"></button>
      <a href="{{ route('login') }}" class="login-link">
      <span class="main-page">Return to Login Page</span>
      <span class="continue">Continue</span></a>
    </div>
  </body>
</html>
