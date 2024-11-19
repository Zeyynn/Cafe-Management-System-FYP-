<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Duwa Menu</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@500&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Artifika:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Arvo:wght@400&display=swap" />
    <link rel="stylesheet" href="{{ asset('css/HomePage.css') }}">
    @vite('resources/css/HomePage.css')
    <script>
      document.querySelectorAll('.flex-row-c a').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const targetId = this.getAttribute('href').substring(1);
        const targetElement = document.getElementById(targetId);

        window.scrollTo({
            top: targetElement.offsetTop - 100, // Adjust offset if header is sticky
            behavior: 'smooth'
        });
    });
});
    </script>
  </head>
  <body>
    <div class="main-container">
      <div class="rectangle">
        <div class="flex-row-bb">
          <img class="logo" src="img/duwa1.png" alt="Logo" />
          <div class="removal"></div>
          <a href="/order" class="order-link">
            <button class="rectangle-1"></button>
            <span class="order">Order</span>
          </a>
          <a href="{{ route('stores') }}" class="stores-link">
            <span class="stores">Stores</span>
          </a>
          <div class="artboard"></div>
          
          <span class="sign-in">Sign In</span>
        </div>
        <div class="flex-row-c">
          <a href="#sourdough-pizza" class="sourdough-pizza">| Sourdough Pizza</a>
          <a href="#pasta" class="pasta">| Pasta</a>
          <a href="#soup" class="soup">| Soup</a>
          <a href="#toast" class="toast">| Toast</a>
          <a href="#dessert" class="dessert">| Dessert</a>
          <a href="#et-cetera" class="et-cetera">| Et Cetera</a>
          <a href="#drink" class="drink">| Drink</a>
          <div class="toolbar-icon"></div>
        </div>
        <div class="line"></div>
      </div>
      <section id="sourdough-pizza">
      <span class="sourdough-pizza-2" >| Sourdough Pizza</span>
      </section>
      <div class="flex-row">
        <div class="rectangle-3">
          <div class="aec-cfb-e-bf-aeeec"></div>
          <img class="chicken-pesto-pizza" src="/img/margherita.png" />
          <div class="flex-column">
            <span class="classic-margherita">Classic Margherita</span
            ><span class="fresh-marinara"
              >Made with fresh marinara sauce, mozzarella cheese, and
              basil</span
            ><span class="price">RM 20.00</span
            ><button class="rectangle-4"><span class="add">Add</span></button>
          </div>
        </div>
        <div class="rectangle-5">
          <div class="barbecue-bacon-pizza"></div>
          <img class="chicken-pesto-pizza" src="/img/meatmadness.png" />
          <div class="flex-column-ba">
            <span class="meat-madness">Meat Madness</span
            ><span class="meat-mania"
              >Our Meat Mania Pizza comes fully loaded with pepperoni, bacon
              crumble, & mild sausage.</span
            ><span class="price-6">RM 28.00</span
            ><button class="rectangle-7"><span class="add-8">Add</span></button>
          </div>
        </div>
      </div>
      <div class="flex-row-be">
        <div class="rectangle-9">
          <img class="chicken-pesto-pizza" src="/img/pestopizza.png" />
          <div class="chicken-pesto-pizza"></div>
          <div class="flex-column-a">
            <span class="creamy-chicken-pesto">Creamy Chicken Pesto</span
            ><span class="thin-crust"
              >This Creamy Pesto Chicken Pizza has a delicious thin crust and
              juicy sun dried tomatoes.</span
            ><span class="price-b">RM 35.00</span
            ><button class="rectangle-c"><span class="add-d">Add</span></button>
          </div>
        </div>
        <div class="rectangle-e">
          <div class="image"></div>
          <img class="chicken-pesto-pizza" src="/img/bbqbacon.png" />
          <div class="flex-column-fba">
            <span class="bbq-bacon-mushroom">BBQ Bacon Mushroom</span
            ><span class="our-bbq-mushroom-bacon-pizza"
              >Our BBQ Mushroom Bacon Pizza comes fully loaded with BBQ sauce,
              savory mushrooms, and crispy bacon crumble.</span
            ><span class="rm-35">RM 35.00</span
            ><button class="rectangle-f">
              <span class="add-10">Add</span>
            </button>
          </div>
        </div>
      </div>
      <section id="pasta">
      <span class="pasta-11">| Pasta</span>
      </section>
      <div class="flex-row-be-12">
        <div class="rectangle-13">
          <img class="chicken-pesto-pizza" src="/img/pesto.png" />
          <div class="flex-row-14">
            <div class="pesto-pasta"></div>
            <span class="basil-pesto">Basil Pesto</span
            ><span class="contains-nut">*Contains nut</span
            ><span class="creamy-pesto-pasta"
              >This Creamy Pesto Pasta features al dente noodles, rich pesto
              sauce, and juicy cherry tomatoes.</span
            ><span class="rm-35-15">RM 35.00</span>
          </div>
          <div class="flex-row-bb-16">
            <button class="rectangle-1c">
              <span class="add-19">Add</span>
            </button>
          </div>
        </div>
        <div class="rectangle-1a">
          <div class="spaghetti-aglio-olio-seafood"></div>
          <img class="chicken-pesto-pizza" src="/img/aglioolio.png" />
          <div class="flex-column-ead">
            <span class="aglio-olio">Aglio Olio</span
            ><span class="spaghetti-aglio-olio"
              >This Spaghetti Aglio Olio is a simple delight with garlic-infused
              olive oil, al dente pasta, and a hint of chili.</span
            ><span class="rm-35-1b">RM 35.00</span
            ><button class="rectangle-1c">
              <span class="add-1d">Add</span>
            </button>
          </div>
        </div>
      </div>
      <div class="flex-row-1e">
        <div class="rectangle-1f">
          <img class="chicken-pesto-pizza" src="/img/macncheese.png" />
          <div class="flex-row-dbae">
            <div class="image-20"></div>
            <span class="mac-cheese">Mac & Cheese</span
            ><span class="mac-n-cheese"
              >This Mac n Cheese is a creamy classic with tender pasta smothered
              in rich, gooey cheese.</span
            ><span class="rm-35-22">RM 35.00</span>
          </div>
          <div class="flex-row-a">
            <div class="rectangle-23"></div>
              <span class="add-25">Add</span>
            </button>
          </div>
        </div>
        <div class="rectangle-26">
          <img class="chicken-pesto-pizza" src="/img/pesto.png" />
          <div class="flex-row-eb">
            <div class="image-27"></div>
            <span class="alfredo">Alfredo</span
            ><span class="pasta-alfredo"
              >This Pasta Alfredo is a creamy indulgence with tender noodles
              coated in a rich, velvety sauce.</span
            ><span class="price-29">RM 35.00</span>
          </div>
          <div class="flex-row-d">
            <div class="rectangle-2a"></div>
              <span class="add-2c">Add</span>
            </button>
          </div>
        </div>
      </div>
      <section id="soup">
      <span class="soup-2d">| Soup</span>
      </section>
      <div class="flex-row-2e">
        <div class="rectangle-2f">
          <img class="chicken-pesto-pizza" src="/img/pumpkin.png" />
          <div class="flex-row-30">
            <div class="image-31"></div>
            <span class="pumpkin">Pumpkin</span
            ><span class="pumpkin-soup"
              >This Pumpkin Soup is a cozy blend of creamy pumpkin, warm spices,
              and a hint of sweetness.</span
            ><span class="price-33">RM 35.00</span>
          </div>
          <div class="flex-row-b">
            <div class="rectangle-34"></div>
              <span class="add-36">Add</span>
            </button>
          </div>
        </div>
        <div class="rectangle-37">
          <img class="chicken-pesto-pizza" src="/img/mushroom.png" />
          <div class="flex-row-b-38">
            <div class="image-39"></div>
            <span class="pumpkin-3a">Pumpkin</span
            ><span class="pumpkin-soup-3b"
              >This Pumpkin Soup is a cozy blend of creamy pumpkin, warm spices,
              and a hint of sweetness.</span
            ><span class="price-3d">RM 35.00</span>
          </div>
          <div class="flex-row-fd">
            <div class="rectangle-3e"></div>
              <span class="add-40">Add</span>
            </button>
          </div>
        </div>
      </div>
      <section id="dessert">
      <span class="dessert-41">| Dessert</span>
      </section>
      <div class="rectangle-42">
        <img class="chicken-pesto-pizza" src="/img/creme.png" />
        <div class="flex-row-43">
          <div class="image-44"></div>
          <span class="creme-brulee">Creme Brulee</span
          ><span class="creme-brulee-45"
            >This Crème Brûlée is a creamy custard topped with a perfectly
            caramelized sugar crust.</span
          ><span class="price-47">RM 35.00</span>
        </div>
        <div class="flex-row-48">
          <button class="rectangle-4a"><span class="add-4b">Add</span></button>
        </div>
      </div>
      <section id="et-cetera">
      <span class="et-cetera-4c">| Et Cetera</span>
      </section>
      <div class="flex-row-f">
        <div class="rectangle-4d">
          <img class="chicken-pesto-pizza" src="/img/meatball.png" />
          <div class="flex-row-b-4e">
            <span class="meatball-and-mash">Meatball and Mash</span
            ><span class="meatball-and-mash-description"
              >This Meatball and Mash is a hearty dish with juicy meatballs and
              creamy mashed potatoes.</span
            ><span class="price-51">RM 35.00</span>
          </div>
          <div class="flex-row-ed">
            <div class="rectangle-52"></div>
              <span class="add-button">Add</span>
            </button>
          </div>
        </div>
        <div class="rectangle-54">
          <img class="chicken-pesto-pizza" src="/img/tenders.png" />
          <div class="flex-row-db">
            <div class="image-55"></div>
            <span class="chicken-tenders">Chicken Tenders</span
            ><span class="chicken-tenders-description"
              >These Chicken Tenders are crispy on the outside, tender on the
              inside, and perfectly seasoned.</span
            ><span class="price-57">RM 35.00</span>
          </div>
          <div class="flex-row-e">
            <div class="rectangle-58"></div>
              <span class="add-button-5a">Add</span>
            </button>
          </div>
        </div>
      </div>
      <section id="drink">
      <span class="drinks">| Drinks</span>
      </section>
      <div class="flex-row-fc">
        <div class="rectangle-5b">
          <img class="chicken-pesto-pizza" src="/img/americano.png" />
          <div class="flex-row-d-5c">
            <div class="image-5d"></div>
            <span class="americano">Americano</span
            ><span class="americano-description"
              >This Americano is a bold, smooth espresso diluted with hot water
              for a rich, full-bodied flavor.</span
            ><span class="price-5f">RM 6.00</span>
          </div>
          <div class="flex-row-a-60">
            <div class="rectangle-61"></div>
              <span class="add-button-63">Add</span>
            </button>
          </div>
        </div>
        <div class="rectangle-64">
          <img class="chicken-pesto-pizza" src="/img/mocha.png" />
          <div class="flex-row-a-65">
            <span class="mocha">Mocha</span
            ><span class="mocha-description"
              >This Mocha is a perfect blend of rich espresso, velvety
              chocolate, and creamy milk, topped with a frothy finish.</span
            ><span class="price-68">RM 10.00</span>
          </div>
          <div class="flex-row-fc-69">
            <div class="rectangle-6a"></div>
              <span class="add-button-6c">Add</span>
            </button>
          </div>
        </div>
      </div>
      <div class="flex-row-f-6d">
        <div class="rectangle-6e">
          <img class="chicken-pesto-pizza" src="/img/cafe.png" />
          <div class="flex-row-ca">
            <span class="cafe-latte">Cafe Latte</span
            ><span class="cafe-latte-description"
              >This Café Latte is a smooth combination of rich espresso and
              steamed milk, topped with a light layer of foam.</span
            ><span class="rm-price-70">RM 8.00</span>
          </div>
          <div class="flex-row-ede">
            <div class="rectangle-71"></div>
              <span class="add-button-73">Add</span>
            </button>
          </div>
        </div>
        <div class="rectangle-74">
          <img class="chicken-pesto-pizza" src="/img/cappuccino.png" />
          <div class="flex-row-e-75">
            <span class="cappuccino">Cappuccino</span
            ><span class="cappuccino-description"
              >This Cappuccino is a frothy mix of rich espresso, steamed milk,
              and a thick layer of velvety foam.</span
            ><span class="rm-price-78">RM 8.00</span>
          </div>
          <div class="flex-row-a-79">
            <div class="rectangle-7a"></div>
              <span class="add-button-7c">Add</span>
            </button>
          </div>
        </div>
      </div>
      <div class="flex-row-ed-7d">
        <div class="rectangle-7e">
          <img class="chicken-pesto-pizza" src="/img/choco.png" />
          <div class="flex-row-7f">
            <span class="dark-chocolate">Dark Chocolate</span
            ><span class="dark-chocolate-description"
              >This Dark Hot Chocolate is a rich, velvety blend of smooth dark
              chocolate and creamy milk, with a deep, intense flavor.</span
            ><span class="rm-price-82">RM 9.00</span>
          </div>
          <div class="flex-row-cd">
            <div class="rectangle-83"></div>
              <span class="add-button-85">Add</span>
            </button>
          </div>
        </div>
        <div class="rectangle-86">
          <img class="chicken-pesto-pizza" src="/img/matcha.png" />
          <div class="flex-row-f-87">
            <span class="matcha-latte">Matcha Latte</span
            ><span class="matcha-latte-description"
              >This Matcha Latte is a smooth blend of earthy matcha green tea
              and creamy milk, with a delicate, calming flavor.</span
            ><span class="rm-price-8a">RM 12.00</span>
          </div>
          <div class="flex-row-bc">
            <div class="rectangle-8b"></div>
              <span class="add-button-8d">Add</span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
