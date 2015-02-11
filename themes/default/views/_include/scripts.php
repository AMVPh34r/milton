<?php if (in_array(ENVIRONMENT, array('development', 'testing'))): ?>
	<script src="/vendor/js/jquery.js"></script>
	<script src="/vendor/js/bootstrap.js"></script>
<?php else: ?>
	<script src="/vendor/js/jquery.min.js"></script>
	<script src="/vendor/js/bootstrap.min.js"></script>
<?php endif; ?>
