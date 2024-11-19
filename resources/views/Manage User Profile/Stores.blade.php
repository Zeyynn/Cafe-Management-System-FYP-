<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Our Store</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Artifika:wght@400&display=swap" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@500;700&display=swap" />
    <link rel="stylesheet" href="index.css" />
    <style>
        :root {
  --default-font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
    Ubuntu, "Helvetica Neue", Helvetica, Arial, "PingFang SC",
    "Hiragino Sans GB", "Microsoft Yahei UI", "Microsoft Yahei",
    "Source Han Sans CN", sans-serif;
}

.main-container {
  overflow: hidden;
}

.main-container,
.main-container * {
  box-sizing: border-box;
}

input,
select,
textarea,
button {
  outline: 0;
}

.main-container {
  position: relative;
  width: 1440px;
  height: 1024px;
  margin: 0 auto;
  background: #ffffff;
  overflow: hidden;
}
.rectangle {
  position: relative;
  width: 1440px;
  height: 256px;
  margin: 9px 0 0 0;
  background: #f4f5ff;
  box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.25);
}
.removal {
  position: absolute;
  width: 201px;
  height: 110px;
  top: 33px;
  left: 100px;
  background: url(./assets/images/3384425fe9b81c4fb27576b225d2a40bf8fe4877.png)
    no-repeat center;
  background-size: cover;
  z-index: 5;
}
.rectangle-button {
  position: absolute;
  width: 116.858px;
  height: 45.429px;
  top: 38px;
  left: 1167px;
  cursor: pointer;
  background: #353a66;
  border: none;
  z-index: 7;
  border-radius: 113px;
}
.profile {
  display: flex;
  align-items: flex-start;
  justify-content: flex-start;
  position: absolute;
  height: 24.878px;
  top: 49px;
  left: 1194px;
  color: #ffffff;
  font-family: Fira Sans, var(--default-font-family);
  font-size: 20px;
  font-weight: 500;
  line-height: 24px;
  text-align: left;
  white-space: nowrap;
  z-index: 8;
}
.text-2 {
  display: flex;
  align-items: flex-start;
  justify-content: flex-start;
  position: absolute;
  height: 24px;
  top: 49px;
  left: 1032px;
  color: #3f3d35;
  font-family: Artifika, var(--default-font-family);
  font-size: 20px;
  font-weight: 400;
  line-height: 24px;
  text-align: left;
  white-space: nowrap;
  z-index: 3;
}
.text-3 {
  display: flex;
  align-items: flex-start;
  justify-content: flex-start;
  position: absolute;
  height: 24px;
  top: 49px;
  left: 909px;
  color: #3f3d35;
  font-family: Artifika, var(--default-font-family);
  font-size: 20px;
  font-weight: 400;
  line-height: 24px;
  text-align: left;
  white-space: nowrap;
  z-index: 2;
}
.text-4 {
  display: flex;
  align-items: flex-start;
  justify-content: flex-start;
  position: absolute;
  height: 24px;
  top: 49px;
  left: 812px;
  color: #3f3d35;
  font-family: Artifika, var(--default-font-family);
  font-size: 20px;
  font-weight: 400;
  line-height: 24px;
  text-align: left;
  white-space: nowrap;
  z-index: 1;
}
.pic {
  position: absolute;
  width: 26px;
  height: 24px;
  top: 49px;
  left: 999px;
  background: url(./assets/images/f226a5f894dd05e61e788b9bbca38a5e2aa640f0.png)
    no-repeat center;
  background-size: cover;
  z-index: 4;
}
.section {
  position: relative;
  width: 1364px;
  height: 689px;
  margin: 38px 0 0 26px;
  z-index: 18;
}
.store {
  display: flex;
  align-items: flex-start;
  justify-content: flex-start;
  position: absolute;
  height: 34px;
  top: 0;
  left: 11px;
  color: rgba(0, 0, 0, 0.63);
  font-family: Artifika, var(--default-font-family);
  font-size: 28px;
  font-weight: 400;
  line-height: 34px;
  text-align: left;
  white-space: nowrap;
  z-index: 9;
}
.rectangle-1 {
  position: absolute;
  width: 896px;
  height: 689px;
  top: 0;
  left: 468px;
  background: rgba(53, 58, 103, 0.53);
  opacity: 0.53;
  z-index: 10;
  border-radius: 25px;
}
.image {
  position: absolute;
  width: 601px;
  height: 656px;
  top: 17px;
  left: 495px;
  background: url(./assets/images/720244a00087f4075a9b50085ed76ec75ca003f0.png)
    no-repeat center;
  background-size: cover;
  z-index: 11;
  border-radius: 25px;
}
.image-2 {
  position: absolute;
  width: 210px;
  height: 210px;
  top: 17px;
  left: 1121px;
  background: url(./assets/images/ac46c374a3c857c95af5795aeaaf96843bdf90fd.png)
    no-repeat center;
  background-size: cover;
  z-index: 14;
  border-radius: 25px;
}
.duwa-delights {
  display: flex;
  align-items: flex-start;
  justify-content: flex-start;
  position: absolute;
  width: 189px;
  height: 67px;
  top: 83px;
  left: 70px;
  color: rgba(0, 0, 0, 0.63);
  font-family: Artifika, var(--default-font-family);
  font-size: 24px;
  font-weight: 400;
  line-height: 29.203px;
  text-align: left;
  z-index: 17;
}
.duck-icon-pin {
  position: absolute;
  width: 3.88%;
  height: 7.76%;
  top: 12.48%;
  left: 0;
  background: url(./assets/images/27ffa8b1-bac4-44d3-974c-6daf50e94845.png)
    no-repeat center;
  background-size: 100% 100%;
  z-index: 15;
}
.address {
  display: flex;
  align-items: flex-start;
  justify-content: flex-start;
  position: absolute;
  width: 344px;
  height: 125px;
  top: 150px;
  left: 70px;
  color: rgba(0, 0, 0, 0.63);
  font-family: Artifika, var(--default-font-family);
  font-size: 18px;
  font-weight: 400;
  line-height: 21.902px;
  text-align: left;
  z-index: 16;
}
.image-3 {
  position: absolute;
  width: 210px;
  height: 210px;
  top: 239px;
  left: 1121px;
  background: url(./assets/images/4b435bff337a514bb87a7bcd1ab7ea9fccc79660.png)
    no-repeat center;
  background-size: cover;
  z-index: 13;
  border-radius: 25px;
}
#map {
  position: absolute;
  width: 375px;
  height: 319px;
  top: 286px;
  left: 30px;
  background: url(./assets/images/0addeceacbec66496567bad49df3890e89f43850.png)
    no-repeat center;
  background-size: cover;
  z-index: 18;
  border-radius: 25px;
}
.image-5 {
  position: absolute;
  width: 210px;
  height: 210px;
  top: 461px;
  left: 1121px;
  background: url(./assets/images/b3f6e500cc7a5b0c2201113b4d1a8317903ab490.png)
    no-repeat center;
  background-size: cover;
  z-index: 12;
  border-radius: 25px;
}
.plus-four {
  display: flex;
  align-items: flex-start;
  justify-content: flex-start;
  position: absolute;
  height: 77px;
  top: 67px;
  left: 62px;
  color: #ffffff;
  font-family: Fira Sans, var(--default-font-family);
  font-size: 64px;
  font-weight: 700;
  line-height: 76.8px;
  text-align: left;
  white-space: nowrap;
  z-index: 19;
}

    </style>
    <script>
        function initMap() {
            var location = {lat: 3.2175969696899296, lng: 101.73854527648746};
            var map = new google.maps.Map(document.getElementById("map"), {
                zoom: 4,
                center: location
            });
            var marker = new google.maps.Marker({
                position: location,
                map: map
            });
        }
        
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAyQu2bNr1JPHtpnEV1p5MxIy1QI77YnA8&callback=initMap">

    </script>

  </head>
  <body>
    
    <div class="main-container">
      <div class="rectangle">
        <div class="removal">
            <a href="/menu">
            <img class="logo" src="img/duwa1.png" alt="Logo" />
            </a>
        </div>
        <button class="rectangle-button"></button
        ><span class="profile">Profile</span>
        <span class="text-3">Stores</span><span class="text-4">Order</span>
        <div class="pic"></div>
      </div>
      <div class="section">
        <span class="store">| Store</span>
        <div class="rectangle-1"></div>
        <img class="image" src="/img/store1.png">
        <img class="image-2" src="/img/store2.png">
        <span class="duwa-delights">Duwa Delights</span>
        <div class="duck-icon-pin"></div>
        <span class="address">No 7, 0, Jalan 3/4c, Desa Melawati, 53100 Kuala Lumpur, Wilayah
          Persekutuan Kuala Lumpur</span>
        <img class="image-3" src="/img/store3.png"> <div class="image-4"></div> 
        <div id="map"></div> 
        <img class="image-5" src="/img/store4.png" >
      </div>
    </div>
  </body>
</html>
