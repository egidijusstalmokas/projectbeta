<div class="menu row">
	 <a class="{{ (request()->segment(1) == 'lesson') ? 'active-menu' : '' }} nav-item nav-link" href="/lesson/1">Apie mus</a>
	<a class="{{ (request()->segment(1) == 'post') ? 'active-menu' : '' }} nav-item nav-link" href="/post/1">Paslaugos</a>
	<a class="{{ (request()->segment(1) == 'about') ? 'active-menu' : '' }} nav-item nav-link" href="/about">Kontaktai</a>
</div>