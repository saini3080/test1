<footer class="container-fluid">
	<div class="container">
		<p>
			<span class="pull-left tx-copy">&copy; {{date('Y')}} {{ config('app.name', 'Laravel') }} All rights reserved
			</span>
			<span class="pull-right footer-socials">
				<i class="fa fa-facebook"></i>&nbsp;
				<i class="fa fa-twitter"></i>&nbsp;
				<i class="fa fa-google-plus"></i>&nbsp;
				<i class="fa fa-linkedin"></i>&nbsp;
				<i class="fa fa-pinterest"></i>&nbsp;
				<i class="fa fa-instagram"></i>&nbsp;
			</span>
		</p>
	</div>
</footer>
<!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')
</body>
</html>