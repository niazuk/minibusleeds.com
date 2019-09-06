<div class="wraper_top">
	<div class="blck_str1">
		<div class="blck_str">
			<div class="container">
				<div class="top_part">
					<div class="logo"><a href="/"><img src="images/logo.png" alt="{{config('data.meta.logoalt')}}"/></a></div>
					<div class="navi">
						<div id='cssmenu'>
							<ul>
								<li {{ Request::is('/') ? 'class=active' : null }}><a href="/">Home</a></li>
								<!--li {{ Request::is('coach-hire') ? 'class=active' : null }}><a href="/coach-hire">Coach Hire</a></li>
								<li {{ Request::is('minibus-hire') ? 'class=active' : null }}><a href="/minibus-hire">Minibus Hire</a></li>
								<li {{ Request::is('airport-minibus') ? 'class=active' : null }}><a href="/airport-minibus">Airport Minibus</a></li>
								<li {{ Request::is('self-driving-minibus') ? 'class=active' : null }}><a href="/self-driving-minibus">Self Drive Minibus</a></li-->
								<li {{ Request::is('minibus-fleet') ? 'class=active' : null }}><a href="/minibus-fleet">Minibus Fleet</a></li>
								<li {{ Request::is('about-us') ? 'class=active' : null }}><a href="/about-us">About us</a></li>
								<li {{ Request::is('contact-us') ? 'class=active' : null }}><a href="/contact-us">Contact  us</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="cls"></div>
			</div>
		</div>
	</div>
</div>