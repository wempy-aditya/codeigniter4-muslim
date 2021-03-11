<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>404 Page Not Found</title>

	<style>
	div.logo {
		height: 200px;
		width: 155px;
		display: inline-block;
		opacity: 0.08;
		position: absolute;
		top: 2rem;
		left: 50%;
		margin-left: -73px;
	}
	body {
		height: 100vh;
		background: #5c8d89;
		font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
		color: #777;
		font-weight: 300;
	}
	#particles-js{
		width: 100%;
		height: 100%;
		top:0px;
		background-color: #5c8d89;
		background-size: cover;
		background-position: 50% 50%;
		background-repeat: no-repeat;
		position: relative;
	}
	h1 {
		font-weight: 500;
		letter-spacing: 0.8;
		font-size: 4rem;
		margin-top: 0;
		margin-bottom: 0;
		color: #5c8d89;
	}
	.wrap {
		width:70%;
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		padding: 2rem;
		background-color:#f4f9f4;
		text-align: center;
		border-radius: 2rem;
	}
	pre {
		white-space: normal;
		margin-top: 1.5rem;
	}
	code {
		background: #fafafa;
		border: 1px solid #efefef;
		padding: 0.5rem 1rem;
		border-radius: 5px;
		display: block;
	}
	p {
		margin-top: 1.2rem;
		font-size: 1.2rem;
		color: #5c8d89;
	}
	.footer {
		margin-top: 2rem;
		border-top: 1px solid #efefef;
		padding: 1em 2em 0 2em;
		font-size: 85%;
		color: #999;
	}
	a:active,
	a:link,
	a:visited {
		color: #dd4814;
	}
</style>
</head>
<body>
	<div id="particles-js">
		<div class="wrap">
			<h1>404 - File Not Found</h1>
			<p>
				<?php if (! empty($message) && $message !== '(null)') : ?>
					<?= esc($message) ?>
				<?php else : ?>
					Sorry! Cannot seem to find the page you were looking for.
				<?php endif ?>
			</p>
		</div>
	</div>

	<script src="/assets/public/plugins/particlejs/particles.js"></script>
    <script>
        particlesJS.load('particles-js', '/assets/public/plugins/particlejs/particlesjs-config.json', function() {
            console.log('callback - particles.js config loaded');
        });
    </script>
</body>
</html>
