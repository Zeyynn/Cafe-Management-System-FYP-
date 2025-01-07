<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Profile</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Artifika:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@500&display=swap" />
    @vite('resources/css/EditProfilePage.css')
  </head>
  <body>
    <div class="main-container">
      <!-- Header Section -->
      <div class="rectangle">
        <div class="removal">
          <a href="/menu">
            <img class="logo" src="img/duwa1.png" alt="Logo" />
            </a>
        </div>
        <a href="#" class="english" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
          Log Out
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
        <span class="stores">Stores</span>
        <span class="order">Order</span>
        <span class="profile">Profile</span>
      </div>

      <!-- Content Section -->
      <div class="flex-row">
        <span class="user-profile-heading">User Profile</span>
        <span class="preferences-heading">Preference</span>
      </div>
      <div class="form-container">
        <form action="{{ route('profile.update') }}" method="POST">
          @csrf
          <div class="form-group">
            <label for="username" class="label">Username:</label>
            <input type="text" id="username" name="username" class="input-field" value="{{ $user->name }}" />
          </div>
          <div class="form-group">
            <label for="phone" class="label">Phone Number:</label>
            <input type="text" id="phone" name="phone" class="input-field" value="{{ $user->phone }}" />
          </div>
          <div class="form-group">
            <label for="email" class="label">E-mail:</label>
            <input type="email" id="email" name="email" class="input-field" value="{{ $user->email }}" />
          </div>
          <div class="form-group">
            <label for="birthday" class="label">Birthday:</label>
            <input type="date" id="birthday" name="birthday" class="input-field" />
          </div>
          <div class="form-group">
            <label for="gender" class="label">Gender:</label>
            <input type="text" id="gender" name="gender" class="input-field" />
          </div>
          <div class="form-group">
            <label for="address" class="label">Address:</label>
            <textarea id="address" name="address" class="input-field"></textarea>
          </div>
          <div class="form-group">
            <label for="food" class="label">Food:</label>
            <input type="text" id="food" name="food" class="input-field" />
          </div>
          <div class="form-group">
            <label for="drink" class="label">Drink:</label>
            <input type="text" id="drink" name="drink" class="input-field" />
          </div>
          <div class="flex-row-buttons">
            <button type="button" class="cancel-button" onclick="location.href='{{ route('profile') }}'">Cancel</button>
            <button type="submit" class="submit-button">Save</button>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
