<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile Page</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Artifika:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@500&display=swap" />
    @vite('resources/css/ProfilePage.css')
  </head>
  <body>
    <div class="main-container">
      <div class="rectangle">
        <div class="removal">
            <img class="logo" src="img/duwa1.png" alt="Logo" />
        </div>
        <button class="rectangle-button"></button>
        <span class="profile">Profile</span>
        <a href="#" class="english" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
          Log Out
      </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
      </form>
        <span class="stores">Stores</span>
        <span class="order">Order</span>
        <div class="artboard"></div>
      </div>
      <div class="flex-row-b">
        <span class="user-profile-1">User Profile</span>
        <span class="preferences">Preferences</span>
      </div>
      <div class="flex-row-ed">
        <div class="rectangle-2">
          <div class="flex-row">
            <span class="username">Username:</span>
            <span class="address">Address:</span>
            <span class="preferred-food">Preferred Food</span>
          </div>
          <div class="flex-row-f">
            <span class="duwa">{{ $user->name }}</span>
            <span class="my-home">my home</span> <!-- Keep static for now -->
          </div>
          <div class="flex-row-3">
            <span class="birthday">Birthday:</span>
            <span class="preferred-drinks">Preferred Drinks</span>
            <span class="phone-number">Phone Number:</span>
          </div>
          <div class="flex-row-ff">
            <span class="text-f">{{ $user->phone }}</span>
            <span class="text-10">1 jan 2001</span> <!-- Keep static for now -->
          </div>
          <div class="group-3">
            <span class="text-11">Gender :</span>
            <span class="text-12">E-mail:</span>
          </div>
          <div class="wrapper-4">
            <span class="text-13">{{ $user->email }}</span>
            <span class="text-14">male</span> <!-- Keep static for now -->
          </div>
          <div>
        </div>
        <span class="text-16">tea</span>
        <span class="cake">cake</span>
        </div>
      </div>
      <div class="flex-row-bc">
        <button class="rectangle-4" onclick="location.href='/password'">
            <span class="change-password">Change Password</span>
        </button>
        <button class="rectangle-5" onclick="location.href='/profile/edit'">
          <span class="change-profile">Change Profile</span>
        </button>
      </div>
    </div>
    </body>
</html>