<?php
if(function_exists('bcn_display'))
{
// Display the <span class="searchterm1">breadcrumb</span>
echo '<div id="topicpath"><div class="topicpath_inner"><p>';
bcn_display();
echo '</p></div></div><!--/topicpath -->';
}
?>
