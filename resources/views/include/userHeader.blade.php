<!DOCTYPE html>
<html>
<head>
    <style>
        /* Overall header container */
        .header-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 100px;
            background-color: #f4f5ff;
            box-shadow: 0px 4px 4px #00000040;
            width: 100%;
            max-width: 1440px;
            margin: 0 auto;
            box-sizing: border-box;
        }

        /* Left section for logo and upper links */
        .left-section {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        /* Logo styling */
        .logo {
            height: 50px;
            margin-right: 20px;
        }

        /* Menu icon */
        .menu-icon {
            font-size: 24px;
            cursor: pointer;
        }

        /* Links styling */
        .upper-link {
            text-decoration: none;
            color: #353a66;
            font-weight: bold;
            font-size: 18px;
            font-family: "Artifika-Regular", Helvetica;
            position: relative;
            padding-bottom: 4px;
        }

        .upper-link::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 0;
            height: 2px;
            background-color: #353a66;
            transition: width 0.3s ease;
        }

        .upper-link:hover::after {
            width: 100%;
        }

        /* Breadcrumbs styling */
        .breadcrumbs {
            display: flex;
            gap: 20px;
            font-family: "Artifika-Regular", Helvetica;
            font-size: 20px;
            color: #3f3d35;
        }

        .breadcrumbs a {
            text-decoration: none;
            color: #3f3d35;
            cursor: pointer;
            position: relative;
            padding-bottom: 4px;
        }

        .breadcrumbs a:hover,
        .breadcrumbs a.active {
            color: #01447e;
        }

        .breadcrumbs a.active::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: #01447e;
        }

        /* Profile button styling */
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

        /* Language icon */
        .artboard {
            margin-left: 10px;
            height: 24px;
            width: 26px;
        }
    </style>
    <meta charset="utf-8" />
</head>
<body>

    <!-- Header Container with combined upper and lower sections -->
    <div class="header-container">
        <!-- Left Section: Logo and "Contact Us" / "Check Out" Links -->
        <div class="left-section">
            <div class="menu-icon">&#9776;</div>
            <img class="logo" src="img/DuwaLogo.jpg" alt="Logo" />
            <a href="#" class="upper-link">Contact Us</a>
            <a href="#" class="upper-link">Check Out</a>
        </div>

        <!-- Right Section: Main Navigation and Profile Button -->
        <div style="display: flex; align-items: center;">
            <nav class="breadcrumbs">
                <a href="#" class="breadcrumb-link">Order</a>
                <a href="#" class="breadcrumb-link">Stores</a>
                <hr>
            </nav>

            <button class="profile-button">
                <div class="rectangle">
                    <div class="text-wrapper-3">Profile</div>
                </div>
            </button>
        </div>
    </div>

    <!-- JavaScript for Breadcrumbs -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const breadcrumbLinks = document.querySelectorAll('.breadcrumb-link');

            breadcrumbLinks.forEach(link => {
                link.addEventListener('click', (event) => {
                    // Remove "active" class from all links
                    breadcrumbLinks.forEach(breadcrumb => breadcrumb.classList.remove('active'));

                    // Add "active" class to the clicked link
                    event.target.classList.add('active');
                });
            });
        });
    </script>
</body>
</html>
