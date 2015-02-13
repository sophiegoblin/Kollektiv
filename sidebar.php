<!-- Secondary Column -->

<a id="entries-sidebar-button" class="entries-sidebar-button background-color" href="#">ENTRIES</a>
<div id="entries-sidebar" class="entries-sidebar background-color">

	<?php if( !dynamic_sidebar( 'blog' ) ): ?>

		<h2 class="module-heading">Sidebar Setup</h2>
		<p>Please add widgets via the admin area!</p>

	<?php endif; ?>

</div>
