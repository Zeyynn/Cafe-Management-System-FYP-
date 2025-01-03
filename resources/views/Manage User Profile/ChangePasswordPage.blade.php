<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Change Password</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Artifika:wght@400&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@500&display=swap"
    />
    @vite('resources/css/ChangePasswordPage.css')
  </head>
  <body>
    <div class="main-container">
      <!-- Header Section -->
      <div class="rectangle">
        <div class="removal">
          <img class="logo" src="img/duwa1.png" alt="Logo" />
        </div>
        <a
          href="#"
          class="english"
          onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
        >
          Log Out
        </a>
        <form
          id="logout-form"
          action="{{ route('logout') }}"
          method="POST"
          style="display: none;"
        >
          @csrf
        </form>
        <span class="stores">Stores</span>
        <span class="order">Order</span>
        <div class="artboard"></div>
        <span class="profile">Profile</span>
      </div>

      <!-- Content Section -->
      <div class="flex-row-b">
        <span class="change-password-heading">Change Password</span>
      </div>
      <div class="form-container">
        <form class="password-form" action="{{ route('password.change') }}" method="POST">
          @csrf
          <div class="form-group">
            <label for="current-password" class="label">Current Password:</label>
            <input type="password" id="current-password" name="current_password" class="input-field" required />
          </div>
          <div class="form-group">
            <label for="new-password" class="label">New Password:</label>
            <input type="password" id="new-password" name="new_password" class="input-field" required />
          </div>
          <div class="form-group">
            <label for="confirm-password" class="label">Re-enter New Password:</label>
            <input
              type="password"
              id="confirm-password"
              name="new_password_confirmation"
              class="input-field"
              required
            />
          </div>
          <div class="flex-row-buttons">
            <button type="button" class="cancel-button" onclick="location.href='{{ route('profile') }}'">
              Cancel
            </button>
            <button type="submit" class="submit-button">Set</button>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
