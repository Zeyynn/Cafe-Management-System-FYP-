@include('include.userHeader')

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="styleguide.css" />
    <link rel="stylesheet" href="style.css" />
    <style>
        .customer-engagement {
  background-color: #ffffff;
  display: flex;
  flex-direction: row;
  justify-content: center;
  width: 100%;
}

.customer-engagement .div {
  background-color: #ffffff;
  width: 1440px;
  height: 1024px;
  position: relative;
}

.customer-engagement .overlap {
  position: absolute;
  width: 1440px;
  height: 256px;
  top: -5px;
  left: 0;
  background-color: #f4f5ff;
  box-shadow: 0px 4px 4px #00000040;
}

.customer-engagement .group {
  width: 154px;
  top: 52px;
  left: 1162px;
  position: absolute;
  height: 45px;
}

.customer-engagement .overlap-group {
  position: relative;
  width: 152px;
  height: 45px;
}

.customer-engagement .rectangle {
  width: 117px;
  height: 45px;
  left: 0;
  background-color: #353a66;
  border-radius: 113px;
  position: absolute;
  top: 0;
}

.customer-engagement .text-wrapper {
  position: absolute;
  width: 125px;
  top: 11px;
  left: 27px;
  font-family: "Fira Sans-Medium", Helvetica;
  font-weight: 500;
  color: #ffffff;
  font-size: 20px;
  letter-spacing: 0;
  line-height: normal;
}

.customer-engagement .text-wrapper-2 {
  position: absolute;
  top: 62px;
  left: 812px;
  font-family: "Artifika-Regular", Helvetica;
  font-weight: 400;
  color: #3f3d35;
  font-size: 20px;
  letter-spacing: 0;
  line-height: normal;
  white-space: nowrap;
}

.customer-engagement .text-wrapper-3 {
  position: absolute;
  top: 62px;
  left: 909px;
  font-family: "Artifika-Regular", Helvetica;
  font-weight: 400;
  color: #3f3d35;
  font-size: 20px;
  letter-spacing: 0;
  line-height: normal;
  white-space: nowrap;
}

.customer-engagement .text-wrapper-4 {
  position: absolute;
  top: 62px;
  left: 1032px;
  font-family: "Artifika-Regular", Helvetica;
  font-weight: 400;
  color: #3f3d35;
  font-size: 20px;
  letter-spacing: 0;
  line-height: normal;
  white-space: nowrap;
}

.customer-engagement .artboard {
  position: absolute;
  width: 26px;
  height: 24px;
  top: 63px;
  left: 999px;
  object-fit: cover;
}

.customer-engagement .text-wrapper-5 {
  top: 207px;
  left: 79px;
  font-family: "Artifika-Regular", Helvetica;
  color: #353a67;
  font-size: 24px;
  position: absolute;
  font-weight: 400;
  letter-spacing: 0;
  line-height: normal;
}

.customer-engagement .text-wrapper-6 {
  position: absolute;
  top: 207px;
  left: 276px;
  font-family: "Artifika-Regular", Helvetica;
  font-weight: 400;
  color: #00000087;
  font-size: 24px;
  letter-spacing: 0;
  line-height: normal;
}

.customer-engagement .removal {
  position: absolute;
  width: 201px;
  height: 110px;
  top: 47px;
  left: 100px;
  object-fit: cover;
}

.customer-engagement .toolbar-icon {
  position: absolute;
  width: 32px;
  height: 21px;
  top: 212px;
  left: 22px;
  object-fit: cover;
}

.customer-engagement .line {
  position: absolute;
  width: 146px;
  height: 6px;
  top: 250px;
  left: 82px;
}

.customer-engagement .text-wrapper-7 {
  position: absolute;
  top: 289px;
  left: 54px;
  font-family: "Artifika-Regular", Helvetica;
  font-weight: 400;
  color: #000000a1;
  font-size: 28px;
  letter-spacing: 0;
  line-height: normal;
}

.customer-engagement .p {
  position: absolute;
  width: 583px;
  top: 432px;
  left: 122px;
  font-family: "Artifika-Regular", Helvetica;
  font-weight: 400;
  color: #000000a1;
  font-size: 24px;
  letter-spacing: 0;
  line-height: normal;
}

.customer-engagement .overlap-2 {
  position: absolute;
  width: 517px;
  height: 586px;
  top: 381px;
  left: 797px;
  background-color: #353a67;
  border-radius: 48px;
}

.customer-engagement .nama {
  position: absolute;
  width: 391px;
  height: 56px;
  top: 44px;
  left: 56px;
}

.customer-engagement .overlap-3 {
  position: relative;
  width: 396px;
  height: 32px;
  top: 16px;
  left: -10px;
}

.customer-engagement .rectangle-2 {
  width: 387px;
  height: 32px;
  left: 9px;
  background-color: #d3d6f0;
  border-radius: 2px;
  border: 1px solid;
  border-color: #c9c9c9;
  box-shadow: var(--box-shadow);
  position: absolute;
  top: 0;
}

.customer-engagement .text-wrapper-8 {
  position: absolute;
  width: 146px;
  top: 4px;
  left: 0;
  font-family: "Jacques Francois-Regular", Helvetica;
  font-weight: 400;
  color: #7d796ae3;
  font-size: 16px;
  text-align: center;
  letter-spacing: 0;
  line-height: normal;
}

.customer-engagement .overlap-wrapper {
  top: 106px;
  position: absolute;
  width: 385px;
  height: 47px;
  left: 56px;
}

.customer-engagement .div-wrapper {
  position: relative;
  width: 387px;
  height: 32px;
  top: 16px;
  left: -1px;
  background-color: #d3d6f0;
  border-radius: 2px;
  border: 1px solid;
  border-color: #c9c9c9;
  box-shadow: var(--box-shadow);
}

.customer-engagement .text-wrapper-9 {
  width: 146px;
  top: 3px;
  left: 8px;
  font-family: "Jacques Francois-Regular", Helvetica;
  color: #7d796ae3;
  font-size: 16px;
  text-align: center;
  position: absolute;
  font-weight: 400;
  letter-spacing: 0;
  line-height: normal;
}

.customer-engagement .overlap-group-wrapper {
  top: 170px;
  position: absolute;
  width: 385px;
  height: 47px;
  left: 56px;
}

.customer-engagement .overlap-4 {
  position: relative;
  width: 413px;
  height: 32px;
  top: 16px;
  left: -27px;
}

.customer-engagement .rectangle-3 {
  position: absolute;
  width: 387px;
  height: 32px;
  top: 0;
  left: 26px;
  background-color: #d3d6f0;
  border-radius: 2px;
  border: 1px solid;
  border-color: #c9c9c9;
  box-shadow: var(--box-shadow);
}

.customer-engagement .nama-2 {
  top: 234px;
  position: absolute;
  width: 385px;
  height: 47px;
  left: 56px;
}

.customer-engagement .overlap-5 {
  position: relative;
  width: 405px;
  height: 32px;
  top: 16px;
  left: -19px;
}

.customer-engagement .rectangle-4 {
  position: absolute;
  width: 387px;
  height: 32px;
  top: 0;
  left: 18px;
  background-color: #d3d6f0;
  border-radius: 2px;
  border: 1px solid;
  border-color: #c9c9c9;
  box-shadow: var(--box-shadow);
}

.customer-engagement .text-wrapper-10 {
  position: absolute;
  width: 270px;
  top: 5px;
  left: 0;
  font-family: "Jacques Francois-Regular", Helvetica;
  font-weight: 400;
  color: #7d796ae3;
  font-size: 16px;
  text-align: center;
  letter-spacing: 0;
  line-height: normal;
}

.customer-engagement .icon-wrapper-h {
  display: flex;
  width: 12px;
  align-items: center;
  position: absolute;
  top: 10px;
  left: 380px;
}

.customer-engagement .height-change-size {
  display: inline-flex;
  align-items: center;
  gap: 12px;
  position: relative;
  flex: 0 0 auto;
  margin-left: -6.00px;
  overflow: hidden;
  transform: rotate(-90deg);
}

.customer-engagement .ignore {
  position: relative;
  width: 1px;
  height: 1px;
}

.customer-engagement .icon-select-down {
  position: relative;
  flex: 1;
  align-self: stretch;
  flex-grow: 1;
}

.customer-engagement .rectangle-wrapper {
  top: 397px;
  position: absolute;
  width: 385px;
  height: 47px;
  left: 56px;
}

.customer-engagement .rectangle-5 {
  position: relative;
  width: 400px;
  height: 139px;
  top: -81px;
  left: -8px;
  background-color: #d3d6f0;
  border-radius: 2px;
  border: 1px solid;
  border-color: #c9c9c9;
  box-shadow: var(--box-shadow);
}

.customer-engagement .text-wrapper-11 {
  position: absolute;
  width: 194px;
  top: 325px;
  left: 50px;
  font-family: "Jacques Francois-Regular", Helvetica;
  font-weight: 400;
  color: #7d796ae3;
  font-size: 16px;
  text-align: center;
  letter-spacing: 0;
  line-height: normal;
}

.customer-engagement .group-2 {
  width: 161px;
  top: 514px;
  left: 210px;
  position: absolute;
  height: 45px;
}

.customer-engagement .overlap-6 {
  position: relative;
  width: 159px;
  height: 45px;
}

.customer-engagement .rectangle-6 {
  position: absolute;
  width: 117px;
  height: 45px;
  top: 0;
  left: 0;
  background-color: #d3d6f1;
  border-radius: 113px;
}

.customer-engagement .text-wrapper-12 {
  position: absolute;
  width: 125px;
  top: 11px;
  left: 34px;
  font-family: "Fira Sans-Medium", Helvetica;
  font-weight: 500;
  color: #353a67;
  font-size: 20px;
  letter-spacing: 0;
  line-height: normal;
}

.customer-engagement .icon-pin {
  width: 51px;
  top: 572px;
  left: 100px;
  position: absolute;
  height: 47px;
}

.customer-engagement .text-wrapper-13 {
  position: absolute;
  width: 332px;
  top: 627px;
  left: 167px;
  font-family: "Artifika-Regular", Helvetica;
  font-weight: 400;
  color: #000000a1;
  font-size: 18px;
  letter-spacing: 0;
  line-height: normal;
}

.customer-engagement .text-wrapper-14 {
  position: absolute;
  top: 580px;
  left: 167px;
  font-family: "Artifika-Regular", Helvetica;
  font-weight: 400;
  color: #000000a1;
  font-size: 24px;
  letter-spacing: 0;
  line-height: normal;
}

.customer-engagement .icon-phone {
  width: 45px;
  top: 744px;
  left: 106px;
  position: absolute;
  height: 47px;
}

.customer-engagement .element {
  position: absolute;
  top: 752px;
  left: 167px;
  font-family: "Artifika-Regular", Helvetica;
  font-weight: 400;
  color: #000000a1;
  font-size: 24px;
  letter-spacing: 0;
  line-height: normal;
}

.customer-engagement .icon-email {
  width: 47px;
  top: 839px;
  left: 111px;
  position: absolute;
  height: 47px;
}

.customer-engagement .text-wrapper-15 {
  position: absolute;
  top: 846px;
  left: 173px;
  font-family: "Artifika-Regular", Helvetica;
  font-weight: 400;
  color: #000000a1;
  font-size: 24px;
  letter-spacing: 0;
  line-height: normal;
}

.customer-engagement .STAY-CONNECTED {
  position: absolute;
  top: 390px;
  left: 115px;
  font-family: "Artifika-Regular", Helvetica;
  font-weight: 400;
  color: #000000a1;
  font-size: 28px;
  letter-spacing: 0;
  line-height: normal;
}
    </style>
  </head>
  <body>
    <div class="customer-engagement">
      <div class="div">
        </div>
        <div class="text-wrapper-7">| Contact Us</div>
        <p class="p">Let us hear from you ! Leave us your details and we will get back to you.</p>
        <div class="overlap-2">
          <div class="nama">
            <div class="overlap-3">
              <div class="rectangle-2"></div>
              <div class="text-wrapper-8">Full Name*</div>
            </div>
          </div>
          <div class="overlap-wrapper">
            <div class="div-wrapper"><div class="text-wrapper-9">Contact Number*</div></div>
          </div>
          <div class="overlap-group-wrapper">
            <div class="overlap-4">
              <div class="rectangle-3"></div>
              <div class="text-wrapper-8">Email*</div>
            </div>
          </div>
          <div class="nama-2">
            <div class="overlap-5">
              <div class="rectangle-4"></div>
              <p class="text-wrapper-10">What topic you are up to?</p>
              <div class="icon-wrapper-h">
                <div class="height-change-size">
                  <div class="ignore"></div>
                  <div class="ignore"></div>
                </div>
                <img class="icon-select-down" src="img/icon-select-down.svg" />
              </div>
            </div>
          </div>
          <div class="rectangle-wrapper"><div class="rectangle-5"></div></div>
          <p class="text-wrapper-11">How we can help you?</p>
          <div class="group-2">
            <div class="overlap-6">
              <div class="rectangle-6"></div>
              <div class="text-wrapper-12">Send</div>
            </div>
          </div>
        </div>
        <img class="icon-pin" src="img/icon-pin.png" />
        <p class="text-wrapper-13">
          No 7, 0, Jalan 3/4c, Desa Melawati, 53100 Kuala Lumpur, Wilayah Persekutuan Kuala Lumpur
        </p>
        <div class="text-wrapper-14">Duwa Delights</div>
        <img class="icon-phone" src="img/icon-phone.png" />
        <div class="element">+6012-5673747</div>
        <img class="icon-email" src="img/icon-email.png" />
        <div class="text-wrapper-15">duwadelights@gmail.com</div>
        <div class="STAY-CONNECTED">STAY CONNECTED</div>
      </div>
    </div>
  </body>
</html>


Open in Playground