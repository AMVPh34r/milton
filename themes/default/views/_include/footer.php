<footer class="bg-white">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2 text-center">
				<p class="text-muted">Copyright &copy;2015 Archer Technologies.
				Site design by Alex Schaeffer.</p>
			</div>
			<div class="col-lg-2 text-right">
				<p class="text-muted">
					<?php
					if (ENVIRONMENT !== 'production') {
						echo 'Page generated in ' . $this->benchmark->elapsed_time() . 's.';
					}
					?>
				</p>
			</div>
		</div>
	</div>
</footer>