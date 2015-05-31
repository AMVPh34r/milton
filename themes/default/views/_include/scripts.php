<?php if (ENVIRONMENT === 'production'): ?>
	<script src="/vendor/js/jquery.min.js"></script>
	<script src="/vendor/js/bootstrap.min.js"></script>
	<script src="/vendor/js/jquery-validation/jquery.validate.min.js"></script>
	<script src="/vendor/js/underscore.min.js"></script>
	<script src="/vendor/js/calendar.min.js"></script>

	<script src="/<?php echo $this->sThemePath; ?>js/script.min.js"></script>
<?php else: ?>
	<script src="/vendor/js/jquery.js"></script>
	<script src="/vendor/js/bootstrap.js"></script>
	<script src="/vendor/js/jquery-validation/jquery.validate.js"></script>
	<script src="/vendor/js/underscore.js"></script>
	<script src="/vendor/js/calendar.js"></script>

	<script src="/<?php echo $this->sThemePath; ?>js/script.js"></script>
<?php endif; ?>
