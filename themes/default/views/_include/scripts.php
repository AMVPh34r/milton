<?php if (ENVIRONMENT === 'production'): ?>
	<script src="/vendor/js/jquery.min.js"></script>
	<script src="/vendor/js/bootstrap.min.js"></script>
	<script src="/vendor/js/jquery-validation/jquery.validate.min.js"></script>
<?php else: ?>
	<script src="/vendor/js/jquery.js"></script>
	<script src="/vendor/js/bootstrap.js"></script>
	<script src="/vendor/js/jquery-validation/jquery.validate.js"></script>
<?php endif; ?>
