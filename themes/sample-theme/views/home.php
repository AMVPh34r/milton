<?php $this->load->view('_include/header'); ?>

<div id="container">
	<h1>Sample Theme Page</h1>

	<div id="body">
		<p>The page you are looking at is being generated dynamically.</p>

		<p>If you would like to edit this page you'll find it located at:</p>
		<code>themes/sample-theme/views/home.php</code>

		<p>The following is the hierarchy of the theme directory:</p>
		<code>
			<b>./ </b>- Main theme directory. You should keep this emtpy of all files used by the site, but you may place license or readme files here.<br />
			<b>css/</b> - Contains all theme stylesheets. Place all of your CSS files here.<br />
			<b>fonts/</b> - Place all theme font files here.<br />
			<b>img/</b> - Place all images used directly in your theme here. This should mainly be icons, backgrounds, etc. Non-constant images (user icons, blog post images, and so on) should be managed separately.<br />
			<b>js/</b> - Place all JavaScript files here.<br />
			<b>views/</b> - All HTML/Php pages should be placed here. You may either place views for individual pages directly in this directory, or create subdirectories as you wish to better organize files. All files should have a .php extension<br />
			<b>views/_include/</b> - Common-use components should be placed here. This includes files such as navbars, headers and footers.
		</code>

		<p>To include a component in your page:</p>
		<code>$this->load->view('_include/filename'); // Including the .php extension is not necessary.</code>

		<p>To load a stylesheet:</p>
		<code>echo link_tag($this->sThemePath . 'css/style.css'); // $this->sThemePath is automatically set. Note the inclusion of the 'css' directory.</code>

		<p>To load a JavaScript file</p>
		<code>
			&lt;?php echo '&lt;script src="' . $this->sThemePath . 'js/script.js"&gt;&lt;/script&gt;'; ?&gt;<br />
			OR<br />
			&lt;script src="&lt;?php echo $this->sThemePath; ?&gt;js/jquery.min.js"&gt;&lt;/script&gt;
		</code>

		<p>There are a few global variables that you can use throughout your theme:</p>
		<code>
			<b>$this->sTheme</b> - The name of the current theme, this will be the same as the theme's directory.<br />
			<b>$this->sThemePath</b> - The path to the theme's files.<br />
			<b>$this->sPageTitle</b> - The title of the current page, as set by the controller.
		</code>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

<?php $this->load->view('_include/footer'); ?>