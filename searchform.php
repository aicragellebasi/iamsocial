<?php
/**
 * Include the search form in the top nav bar, formatted with Bootstrap styles
 *
 * @package WordPress
 * @subpackage IAMSocial 2.0
 * @since IAMSocial 1.0.0
 */
?>
<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" class="form-inline">
	<div class="form-group">
		<input type="text" class="form-control" name="s" id="s" placeholder="Search...." />
		<input type="submit" id="searchsubmit" value="Search" class="btn btn-default" />
	</div>
</form>