<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="theme-color" content="#f6f2e9">
	<title>Tucano Coffee | Good coffee, good company</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Fraunces:opsz,wght@9..144,500;9..144,600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<header class="site-header">
		<a class="wordmark" href="#home" aria-label="Tucano Coffee home">
			<span class="wordmark-mark" aria-hidden="true">T</span>
			<span>Tucano<span class="wordmark-light">Coffee</span></span>
		</a>
		<nav class="main-nav" aria-label="Main navigation">
			<a href="#story">Our story</a>
			<a href="#menu">The menu</a>
			<a class="nav-visit" href="#visit">Come by <span aria-hidden="true">↗</span></a>
		</nav>
	</header>

	<main id="home">
		<section class="hero" aria-labelledby="hero-title">
			<div class="hero-copy">
				<p class="eyebrow"><span class="eyebrow-dot"></span> Your neighborhood coffee stop</p>
				<h1 id="hero-title">Good coffee.<br><em>Good company.</em></h1>
				<p class="hero-description">A little corner for slow mornings, familiar faces, and coffee worth taking your time over.</p>
				<div class="hero-actions">
					<a class="button button-dark" href="#menu">Explore the menu <span aria-hidden="true">↗</span></a>
					<a class="text-link" href="#story">A bit about us <span aria-hidden="true">↓</span></a>
				</div>
				<div class="hero-note">
					<span class="note-icon" aria-hidden="true">✳</span>
					<p>Thoughtfully sourced.<br><strong>Lovingly made, every day.</strong></p>
				</div>
			</div>
			<div class="hero-visual" role="img" aria-label="Freshly brewed coffee and pastries on a cafe table">
				<div class="image-caption"><span>Made for your kind of morning</span><span aria-hidden="true">✳</span></div>
				<span class="image-stamp" aria-hidden="true">BREW<br>LOCAL</span>
			</div>
		</section>

		<section class="welcome-strip" id="story" aria-label="About Tucano Coffee">
			<p>Small batch beans <span>✳</span> Big table energy <span>✳</span> Always room for one more</p>
			<a href="#visit">A little more about Tucano <span aria-hidden="true">↗</span></a>
		</section>

		<section class="menu-preview" id="menu" aria-labelledby="menu-title">
			<div class="section-heading">
				<div>
					<p class="eyebrow">A few house favorites</p>
					<h2 id="menu-title">Your next usual.</h2>
				</div>
				<a class="text-link" href="#visit">See what's brewing <span aria-hidden="true">↗</span></a>
			</div>
			<div class="drinks-list">
				<article class="drink-item">
					<span class="drink-number">01</span>
					<div><h3>Honey Oat Latte</h3><p>Espresso, oat milk, a little local honey.</p></div>
					<span class="drink-mark" aria-hidden="true">✳</span>
				</article>
				<article class="drink-item">
					<span class="drink-number">02</span>
					<div><h3>House Cappuccino</h3><p>Our everyday espresso, wrapped in silky foam.</p></div>
					<span class="drink-mark" aria-hidden="true">✳</span>
				</article>
				<article class="drink-item">
					<span class="drink-number">03</span>
					<div><h3>Slow Day Cold Brew</h3><p>Steeped overnight. Smooth all the way through.</p></div>
					<span class="drink-mark" aria-hidden="true">✳</span>
				</article>
			</div>
		</section>
	</main>

	<footer class="site-footer" id="visit">
		<p>Drop in, stay awhile.</p>
		<a href="mailto:hello@tucanocoffee.com">Say hello <span aria-hidden="true">↗</span></a>
	</footer>
</body>
</html>
