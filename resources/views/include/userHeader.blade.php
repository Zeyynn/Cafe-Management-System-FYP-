<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    @vite('resources/css/userHeader.css')
</head
    <div class="main-container">
    <div class="rectangle">
        <div class="flex-row-bb">
          <div class="removal">
            <a href="/menu">
                <img class="logo" src="img/duwa1.png" alt="Logo" />
                </a>
          </div>
            <span class="rectangle-1"></span>
          <a href="{{ route('stores') }}" class="stores-link">
            <span class="stores">Stores</span>
          </a>
          <div class="artboard"></div>
          <a href="{{ route('profile') }}" class="profile-link">
          <span class="sign-in">Profile</span>
          </a>
          <a href="#" class="english" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            Log Out
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        </div>
        <div class="line"></div>
      </div>
    </div>
</html>