
<?php
$files = scandir("uploads");
for($a = 2; $a < count($files); $a++)
	{

		
		?>
		
		<div class="flex-container">
		<a download="<?php echo $files[$a] ?>" href="uploads/<?php echo $files[$a] ?>"><?php echo $files[$a] ?></a>
		</div>
		<?php
	}


