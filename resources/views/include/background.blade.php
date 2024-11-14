<!DOCTYPE html>
<html>
  <head>
    <style>
        .background {
            background-color: #ffffff;
            display: flex;
            justify-content: center;
            width: 100%;
        }

        .overlap-wrapper {
            background-color: #ffffff;
            width: 100%;
            display: flex;
            justify-content: center;
        }

        .overlap {
            position: relative;
            width: 100%;
            max-width: 1440px;
            height: 100px; /* Set a fixed height */
            background-color: #f4f5ff;
            box-shadow: 0px 4px 4px #00000040;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 100px;
            box-sizing: border-box;
        }

        .breadcrumbs {
            display: flex;
            gap: 20px;
            font-family: "Artifika-Regular", Helvetica;
            font-size: 20px;
            color: #3f3d35;
            text-decoration: none;
        }

        .breadcrumbs a {
            text-decoration: none;
            color: #3f3d35;
        }

        .profile-button {
            display: flex;
            align-items: center;
            background-color: transparent;
            border: none;
            cursor: pointer;
            font-family: "Fira Sans-Medium", Helvetica;
            font-size: 20px;
            font-weight: 500;
        }

        .rectangle {
            width: 117px;
            height: 45px;
            background-color: #353a66;
            border-radius: 113px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .text-wrapper-3 {
            color: #ffffff;
            font-size: 20px;
        }

        .logo {
            height: 50px; /* Adjust as needed */
        }

        .artboard {
            margin-left: 10px;
            height: 24px;
            width: 26px;
        }
    </style>
    <meta charset="utf-8" />
  </head>
  <body>
    <div class="background">
      <div class="overlap-wrapper">
        <div class="overlap">
          <!-- Left side: Logo -->
          <img class="logo" src="img/removal-1.png" alt="Logo" />
          
          <!-- Right side: Navigation and Profile button -->
          <div style="display: flex; align-items: center;">
            <nav class="breadcrumbs">
              <a href="#">Order</a>
              <a href="#">Stores</a>
              <a href="#">English</a>
              <img class="artboard" src="img/artboard-84-512-1.png" alt="Language Icon" />
            </nav>

            <button class="profile-button">
              <div class="rectangle">
                <div class="text-wrapper-3">Profile</div>
              </div>
            </button>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
