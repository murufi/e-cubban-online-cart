<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    </head>
    <body>
		<header class="header">
			<div class="header__inner">
				<h4 class="logo">Welcome To e-cubana</h4>
				<p>Order Now</p>
			</div>
		</header>

		<main>
			<div class="container">
				<div class="food-category">
					<button class="active">All</button>
					<button>Foods</button>
					<button>Drinks</button>
					<button>Rooms</button>
				</div>

				<div class="menu-list">
					<div class="item">
						<div class="image">
							<img src="{{ asset('img/Hennesy VS.jpg') }}" alt="" />
						</div>
						<div class="content">
							<h4>Hennessy VS</h4>
							<p></p>
							<span>₦ 100,000.00 </span>
						</div>
					</div>

					<div class="item">
						<div class="image">
							<img src="{{ asset('img/Hennesy VSOP.jpg') }}" alt="" />
						</div>
						<div class="content">
							<h4>Hennesy V Sop</h4>
							<p></p>
							<span>₦ 130,000.00 </span>
						</div>
					</div>

					<div class="item">
						<div class="image">
							<img src="{{ asset('img/Best cream small.jpg') }}" alt="" />
						</div>
						<div class="content">
							<h4>Best Cream Small</h4>
							<p></p>
							<span>₦ 20,000.00 </span>
						</div>
					</div>
					
					<div class="item">
						<div class="image">
							<img src="{{ asset('img/Odogwu bitters.jpg') }}" alt="" />
						</div>
						<div class="content">
							<h4>Odogwu Bitters</h4>
							<p></p>
							<span>₦ 15,000.00 </span>
						</div>
					</div>
					
					
					<div class="item">
						<div class="image">
							<img src="{{ asset('img/Climax.jpeg') }}" alt="" />
						</div>
						<div class="content">
							<h4>Climax</h4>
							<p></p>
							<span>₦ 700.00 </span>
						</div>
					</div>
					
					
					<div class="item">
						<div class="image">
							<img src="{{ asset('img/Chivita.webp') }}" alt="" />
						</div>
						<div class="content">
							<h4>Chi Active</h4>
							<p></p>
							<span>₦ 2,000.00 </span>
						</div>
					</div>
					
					<div class="item">
						<div class="image">
							<img src="{{ asset('img/Exotic.jpeg') }}" alt="" />
						</div>
						<div class="content">
							<h4>Exotic</h4>
							<p></p>
							<span>₦ 2,000.00 </span>
						</div>
					</div>
					
					
					<div class="item">
						<div class="image">
							<img src="{{ asset('img/Hollandia.jpg') }}" alt="" />
						</div>
						<div class="content">
							<h4>Hollandia</h4>
							<p></p>
							<span>₦ 2,000.00 </span>
						</div>
					</div>
					
					
					<div class="item">
						<div class="image">
							<img src="{{ asset('img/coke.jpeg') }}" alt="" />
						</div>
						<div class="content">
							<h4>Coke</h4>
							<p></p>
							<span>₦ 500.00 </span>
						</div>
					</div>
					
					
					<div class="item">
						<div class="image">
							<img src="{{ asset('img/Ace Bitters.jpeg') }}" alt="" />
						</div>
						<div class="content">
							<h4>Ace Bitters</h4>
							<p></p>
							<span>₦ 1,500.00 </span>
						</div>
					</div>
					
					
					<div class="item">
						<div class="image">
							<img src="{{ asset('img/Small Origin Bitters.jpeg') }}" alt="" />
						</div>
						<div class="content">
							<h4>Orijin Bitters</h4>
							<p></p>
							<span>₦ 1,000.00 </span>
						</div>
					</div>
					
					<div class="item">
						<div class="image">
							<img src="{{ asset('img/Life_lager_beer_can_sh2gas.jpeg') }}" alt="" />
						</div>
						<div class="content">
							<h4>Life</h4>
							<p></p>
							<span>₦ 1,000.00 </span>
						</div>
					</div>
					
					
					<div class="item">
						<div class="image">
							<img src="{{ asset('img/Goldberg.webp') }}" alt="" />
						</div>
						<div class="content">
							<h4>Goldberg</h4>
							<p></p>
							<span>₦ 1,000.00 </span>
						</div>
					</div>
					
					
					<div class="item">
						<div class="image">
							<img src="{{ asset('img/Fayrouz.webp') }}" alt="" />
						</div>
						<div class="content">
							<h4>Fayrouz</h4>
							<p></p>
							<span>₦ 700.00 </span>
						</div>
					</div>
					
					
					<div class="item">
						<div class="image">
							<img src="{{ asset('img/Double Black.jpeg') }}" alt="" />
						</div>
						<div class="content">
							<h4>Double Black</h4>
							<p></p>
							<span>₦ 1,500.00 </span>
						</div>
					</div>
					
					
					<div class="item">
						<div class="image">
							<img src="{{ asset('img/Cosaco.jpeg') }}" alt="" />
						</div>
						<div class="content">
							<h4>Cosaco</h4>
							<p></p>
							<span>₦ 10,000.00 </span>
						</div>
					</div>
					
					
					<div class="item">
						<div class="image">
							<img src="{{ asset('img/Baron De Vals.webp') }}" alt="" />
						</div>
						<div class="content">
							<h4>Baron De Vals</h4>
							<p></p>
							<span>₦ 10,000.00 </span>
						</div>
					</div>
					
					
					<div class="item">
						<div class="image">
							<img src="{{ asset('img/Baron Romero.jpeg') }}" alt="" />
						</div>
						<div class="content">
							<h4>Baron Romero</h4>
							<p></p>
							<span>₦ 10,000.00 </span>
						</div>
					</div>
					
					
					<div class="item">
						<div class="image">
							<img src="{{ asset('img/CARLO-ROSSI-RED75CL-1.jpg') }}" alt="" />
						</div>
						<div class="content">
							<h4>Carlo Rossi</h4>
							<p></p>
							<span>₦ 10,000.00 </span>
						</div>
					</div>
					
					
					<div class="item">
						<div class="image">
							<img src="{{ asset('img/Jack Daniels.jpeg') }}" alt="" />
						</div>
						<div class="content">
							<h4>Jack Daniels</h4>
							<p></p>
							<span>₦ 30,000.00 </span>
						</div>
					</div>
					
					
					<div class="item">
						<div class="image">
							<img src="{{ asset('img/Andrerose.jpeg') }}" alt="" />
						</div>
						<div class="content">
							<h4>Andrerose</h4>
							<p></p>
							<span>₦ 20,000.00 </span>
						</div>
					</div>
					
					
					<div class="item">
						<div class="image">
							<img src="{{ asset('img/Jameson Green.jpeg') }}" alt="" />
						</div>
						<div class="content">
							<h4>Jameson Green</h4>
							<p></p>
							<span>₦ 35,000.00 </span>
						</div>
					</div>
					
					
						<div class="item">
						<div class="image">
							<img src="{{ asset('img/Grants-triple-Wood.png') }}" alt="" />
						</div>
						<div class="content">
							<h4>Grants Whiskey</h4>
							<p></p>
							<span>₦ 20,000.00 </span>
						</div>
					</div>
					
					
					
					<div class="item">
						<div class="image">
							<img src="{{ asset('img/Toma-Red-wine-myliquorhhub.jpg') }}" alt="" />
						</div>
						<div class="content">
							<h4>Toma Toma</h4>
							<p></p>
							<span>₦ 10,000.00 </span>
						</div>
					</div>
					
					
					<div class="item">
						<div class="image">
							<img src="{{ asset('img/Red Label.jpg') }}" alt="" />
						</div>
						<div class="content">
							<h4>Red Label</h4>
							<p></p>
							<span>₦ 25,000.00 </span>
						</div>
					</div>
					
					
					<div class="item">
						<div class="image">
							<img src="{{ asset('img/William Lawson.jpeg') }}" alt="" />
						</div>
						<div class="content">
							<h4>William Lawson</h4>
							<p></p>
							<span>₦ 35,000.00 </span>
						</div>
					</div>
					
					
					<div class="item">
						<div class="image">
							<img src="{{ asset('img/Jelzin.jpg') }}" alt="" />
						</div>
						<div class="content">
							<h4>Jelzin</h4>
							<p></p>
							<span>₦ 10,000.00 </span>
						</div>
					</div>
					
					
					
					

					<div class="item">
						<div class="image">
							<img src="{{ asset('img/Jameson Black.jpg') }}" alt="" />
						</div>
						<div class="content">
							<h4>Jameson Black</h4>
							<p></p>
							<span>₦ 55,000.00 </span>
						</div>
					</div>

					<div class="item">
						<div class="image">
							<img src="{{ asset('img/Martell VS.jpg') }}" alt="" />
						</div>
						<div class="content">
							<h4>Martell VS</h4>
							<p></p>
							<span>₦ 70,000.00 </span>
						</div>
					</div>

					<div class="item">
						<div class="image">
							<img src="{{ asset('img/Martell VSOP.webp') }}" alt="" />
						</div>
						<div class="content">
							<h4>Martell VSOP</h4>
							<p></p>
							<span>₦ 120,000.00 </span>
						</div>
					</div>

					<div class="item">
						<div class="image">
							<img src="{{ asset('img/chicken.png') }}" alt="" />
						</div>
						<div class="content">
							<h4>GiLoron</h4>
							<p></p>
							<span>₦ 100,000.00 </span>
						</div>
					</div>

					<div class="item">
						<div class="image">
							<img src="{{ asset('img/Black Label.jpg') }}" alt="" />
						</div>
						<div class="content">
							<h4>Black Label</h4>
							<p></p>
							<span>₦ 45,000.00 </span>
						</div>
					</div>

					<div class="item">
						<div class="image">
							<img src="{{ asset('img/Balentines.jpg') }}" alt="" />
						</div>
						<div class="content">
							<h4>Ballentines</h4>
							<p></p>
							<span>₦ 250,000.00 </span>
						</div>
					</div>

					<div class="item">
						<div class="image">
							<img src="{{ asset('img/American Honey.webp') }}" alt="" />
						</div>
						<div class="content">
							<h4>American honey.</h4>
							<p>Spicy with Garlic</p>
							<span>₦ 3,500.00 </span>
						</div>
					</div>

					<div class="item">
						<div class="image">
							<img src="{{ asset('img/Glenfiddich 12 years.jpeg') }}" alt="" />
						</div>
						<div class="content">
							<h4>GlenFiddich 12 yrs</h4>
							<p></p>
							<span>₦ 90,000.00 </span>
						</div>
					</div>

					<div class="item">
						<div class="image">
							<img src="{{ asset('M&G Gold.webp') }}" alt="" />
						</div>
						<div class="content">
							<h4>M & G Gold</h4>
							<p></p>
							<span>₦ 10,000.00 </span>
						</div>
					</div>

					<div class="item">
						<div class="image">
							<img src="{{ asset('img/Singleton-15-years.png') }}" alt="" />
						</div>
						<div class="content">
							<h4>Singleton 15yrs</h4>
							<p></p>
							<span>₦ 9,000.00 </span>
						</div>
					</div>

					<div class="item">
						<div class="image">
							<img src="{{ asset('img/chicken.png') }}" alt="" />
						</div>
						<div class="content">
							<h4>Eyics</h4>
							<p>Spicy with Garlic</p>
							<span>₦ 10,000.00 </span>
						</div>
					</div>

					<div class="item">
						<div class="image">
							<img src="{{ asset('img/chicken.png') }}" alt="" />
						</div>
						<div class="content">
							<h4>Gemo</h4>
							<p></p>
							<span>₦ 10,000.00 </span>
						</div>
					</div>

					<div class="item">
						<div class="image">
							<img src="{{ asset('img/chicken.png') }}" alt="" />
						</div>
						<div class="content">
							<h4>Christ marvin</h4>
							<p></p>
							<span>₦ 10,000.00 </span>
						</div>
					</div>

					<div class="item">
						<div class="image">
							<img src="{{ asset('img/4 Cousins.jpeg') }}" alt="" />
						</div>
						<div class="content">
							<h4>Four Cousins</h4>
							<p></p>
							<span>₦ 10,000.00 </span>
						</div>
					</div>

					<div class="item">
						<div class="image">
							<img src="{{ asset('img/GIOVANNI-ICE-ROSE.jpg') }}" alt="" />
						</div>
						<div class="content">
							<h4>Giovanı Rose</h4>
							<p></p>
							<span>₦ 15,000.00 </span>
						</div>
					</div>
					
					<div class="item">
						<div class="image">
							<img src="{{ asset('img/GIOVANNI-ICE-ROSE.jpg') }}" alt="" />
						</div>
						<div class="content">
							<h4>Focus</h4>
							<p></p>
							<span>₦ 100,000.00 </span>
						</div>
					</div>
					
					<div class="item">
						<div class="image">
							<img src="{{ asset('img/GIOVANNI-ICE-ROSE.jpg') }}" alt="" />
						</div>
						<div class="content">
							<h4>John Bon </h4>
							<p></p>
							<span>₦ 20,000.00 </span>
						</div>
					</div>

					<div class="item">
						<div class="image">
							<img src="{{ asset('img/X1.jpg') }}" alt="" />
						</div>
						<div class="content">
							<h4>Smirnoff X1</h4>
							<p></p>
							<span>₦ 10,000.00 </span>
						</div>
					</div>
				</div>
			</div>
		</main>

		<footer class="footer">
			<div class="footer__inner">
				<div class="content">
					<h3>e-cubana</h3>
					<p>
						All Rights Reserved
					</p>
				</div>
			</div>
		</footer>
	</body>
</html>
