<div class="left-sidebar">
	<div class="left-sidebar-section">
		<div class="left-sidebar-image">
			<img class="short-avatar" src="/images/profile/{{Auth::user()->avatar}}">
		</div>
		<div class="left-sidebar-content">
			<h3>{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</h3>
			<span class="handle">@</span><span class="handle">{{ Auth::user()->username }}</span>
		</div>
		<div class="left-sidebar-socail">
			<ul>
				<li class="social"><a href="https://"><i class="ti ti-twitter"></i></a></li>
				<li class="social"><a href="https://"><i class="ti ti-instagram"></i></a></li>
				<li class="social"><a href="https://"><i class="ti ti-facebook"></i></a></li>
			</ul>
		</div>
	</div>
</div>