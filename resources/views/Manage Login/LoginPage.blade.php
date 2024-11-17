@extends('include.userHeader')

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="style.css" />

    <style>
      .menu-inferface {
        background-color: #ffffff;
        display: flex;
        flex-direction: row;
        justify-content: center;
        width: 100%;
      }
      
      .menu-inferface .div {
        background-color: #ffffff;
        overflow: hidden;
        width: 1440px;
        height: 1024px;
        position: relative;
      }

      .menu-inferface.overlap {
        position: absolute;
        width:1440px;
        height: 45px;
        top: 0;
        left: 0;
        background-color: #f4f5ff
        box-shadow: 0px 4px 4px #00000040;
      }

      .menu-inferface.group{
        position: absolute;
        width: 154px;
        height: 45px;
        top: 47px;
        left: 1162px;
      }

      .menu-inferface.overlap-group{
        position: relative;
        width: 152px;
        height: 45px;
      }

      .menu-inferface.rectangle {
        width:117px;
        height: 45px;
        top: 0;
        background-color: #353a66;
        border-radius: 113px;
        position:absolute;
        left: 0;
      }

      .menu-inferface.text-wrapper{
        position: absolute;
        width: 125px;
        top: 11px;
        left: 27px;
        font-weight: 500;
        color: #ffffff;
        font-size: 20px;
        letter-spacing: 0;
        line-height: normal;
        
      }
    </style>

  </head>
  <body>
    <div class="menu-interface">
      <div class="div">
        <div class="overlap">
          <div class="group">
            <div class="overlap-group">
              <div class="rectangle"></div>
              
          <img class="artboard" src="img/artboard-84-512-1.png" />
          <div class="text-wrapper-5">| Sourdough Pizza</div>
          <div class="text-wrapper-6">| Pasta</div>
          <div class="text-wrapper-7">| Toast</div>
          <div class="text-wrapper-8">| Dessert</div>
          <div class="text-wrapper-9">| Et Cetera</div>
          <div class="text-wrapper-10">| Soup</div>
          <div class="text-wrapper-11">| Drink</div>
          <img class="removal" src="img/removal-1.png" />
          <img class="line" src="img/line-1.svg" />
          <img class="toolbar-icon" src="img/toolbar-icon-1.png" />
        </div>
        <div class="text-wrapper-12">| Sourdough Pizza</div>
        <div class="overlap-2">
          <div class="group-2">
            <div class="rectangle-2"></div>
            <div class="text-wrapper-13">| Pasta</div>
          </div>
          <img class="element" src="img/1460a7ec-cf3b-40e8-b05f-a21e12e85ec6-1.png" />
          <div class="rectangle-3"></div>
          <div class="text-wrapper-14">Classic Margherita</div>
          <p class="p">Made with fresh marinara sauce, mozzarella cheese, and basil</p>
          <div class="group-3">
            <div class="div-2"></div>
            <div class="text-wrapper-15">RM 20.00</div>
          </div>
          <div class="text-wrapper-16">Add</div>
          <img class="chicken-pesto-pizza" src="img/chicken-pesto-pizza-2-sq-014-1.png" />
          <div class="text-wrapper-17">Creamy Chicken Pesto</div>
          <p class="text-wrapper-18">
            This Creamy Pesto Chicken Pizza has a delicious thin crust and juicy sun dried tomatoes.
          </p>
          <div class="group-4">
            <div class="div-2"><div class="text-wrapper-19">Add</div></div>
            <div class="text-wrapper-15">RM 35.00</div>
          </div>
        </div>
        <div class="overlap-3">
          <img class="BARBECUE-BACON" src="img/BARBECUE-BACON-pizza2-1.png" />
          <div class="text-wrapper-20">Meat Madness</div>
          <p class="our-meat-mania-pizza">
            Our Meat Mania Pizza comes fully loaded with pepperoni, bacon crumble, &amp; mild sausage.
          </p>
          <div class="group-5">
            <div class="div-2"><div class="text-wrapper-19">Add</div></div>
            <div class="text-wrapper-15">RM 28.00</div>
          </div>
        </div>
        <div class="overlap-4">
          <div class="text-wrapper-21">BBQ Bacon Mushroom</div>
          <p class="text-wrapper-22">
            Our BBQ Mushroom Bacon Pizza comes fully loaded with BBQ sauce, savory mushrooms, and crispy bacon crumble.
          </p>
          <div class="group-6">
            <div class="div-2"><div class="text-wrapper-19">Add</div></div>
            <div class="text-wrapper-15">RM 35.00</div>
          </div>
          <img class="image" src="img/image-4.png" />
        </div>
        <div class="overlap-5">
          <div class="text-wrapper-23">Basil Pesto Pasta</div>
          <div class="text-wrapper-24">*Contains nut</div>
          <img class="pesto-pasta" src="img/pesto-pasta-2-1-2.png" />
        </div>
        <div class="overlap-6">
          <div class="text-wrapper-25">Aglio Olio</div>
          <div class="text-wrapper-26">Easy delicious pasta with shrimp, olive oil,</div>
          <img class="spaghetti-aglio-olio" src="img/spaghetti-aglio-olio-seafood-2.png" />
        </div>
      </div>
    </div>
  </body>
</html>
