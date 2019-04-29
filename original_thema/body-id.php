<?php if(is_front_page()): ?>
<body id="toppage">
<?php elseif(is_category() || is_single() || is_archive()): ?>
<body id="<?php
$tmp = get_the_category();

if(is_array($tmp))
{
	if(count($tmp) > 1)
	{
		foreach($tmp as $value)
		{
			if(!$value -> parent)
			{
				$result = $value -> slug;
			}
		}
	}
	else
	{
		$result = $tmp[0] -> slug;
	}
}
{echo $result;}
?>">
<?php elseif(is_page()): ?>
<body id="<?php echo $parent_slug = get_page_uri($post->post_parent); ?>">
<?php endif; ?>