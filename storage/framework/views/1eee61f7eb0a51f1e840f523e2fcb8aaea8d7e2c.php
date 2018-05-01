<div class="header">

	<div class="headerTitle">
		<h1><a class="mainTitle" href="/">Vickys Paws and Biscuits</a></h1>
	</div>

	<div class="headerNav">
		<nav>
			<ul>
				<li><a href="/">Home</a></li>
				<span class="navDivider">|</span>

				<li><a href="/customerPage">Customers</a></li>
				<span class="navDivider">|</span>

				<li><a href="/admin">Admin</a></li>
				<span class="navDivider">|</span>

				<?php if(!Auth::check()): ?>
				<li><a href="/login">Login</a></li>
				<?php endif; ?>

				<?php if(Auth::check()): ?>
				<li><a href="/login"><?php echo e(Auth::user()->name); ?></a></li>
				<?php endif; ?>

			</ul>
		</nav>
	</div>

</div>