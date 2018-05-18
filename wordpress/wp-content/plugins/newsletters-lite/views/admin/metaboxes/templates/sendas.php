<?php

global $ID, $post_ID;
$ID = $this -> get_option('imagespost');
$post_ID = $this -> get_option('imagespost');

if ($this -> language_do()) {
	$languages = $this -> language_getlanguages();
}

?>

<table class="form-table">
	<tbody>
		<tr>
			<th><label for="etmessage_sendas"><?php _e('Email Message', 'wp-mailinglist'); ?></label></th>
			<td>
				<?php if ($this -> language_do()) : ?>
					<?php if (!empty($languages) && is_array($languages)) : ?>
				    	<div id="languagetabssendas">
				        	<ul>
								<?php $tabnumber = 1; ?>
				                <?php foreach ($languages as $language) : ?>
				                 	<li><a href="#languagetabsendas<?php echo $tabnumber; ?>"><?php echo $this -> language_flag($language); ?></a></li>   
				                    <?php $tabnumber++; ?>
				                <?php endforeach; ?>
				            </ul>
				            
				            <?php $tabnumber = 1; ?>
				            <?php $texts = $this -> get_option('etmessage_sendas'); ?>
				            
				            <?php foreach ($languages as $language) : ?>
				            	<div id="languagetabsendas<?php echo $tabnumber; ?>">
					            	<?php 
					
									$settings = array(
										'media_buttons'		=>	true,
										'textarea_name'		=>	'etmessage_sendas[' . $language . ']',
										'textarea_rows'		=>	10,
										'quicktags'			=>	true,
										'teeny'				=>	false,
									);
									
									wp_editor(stripslashes($this -> language_use($language, $texts)), 'etmessage_sendas_' . $language, $settings); 
									
									?>
				            	</div>
				            	<?php $tabnumber++; ?>
				            <?php endforeach; ?>
				    	</div>
				    <?php endif; ?>
				    
				    <script type="text/javascript">
				    jQuery(document).ready(function() {
					    if (jQuery.isFunction(jQuery.fn.tabs)) {
					    	jQuery('#languagetabssendas').tabs();
					    }
				    });
				    </script>
				<?php else : ?>
					<?php 
						
					$settings = array(
						'media_buttons'		=>	true,
						'textarea_name'		=>	'etmessage_sendas',
						'textarea_rows'		=>	10,
						'quicktags'			=>	true,
						'teeny'				=>	false,
					);
						
					wp_editor(stripslashes($this -> get_option('etmessage_sendas')), 'etmessage_sendas', $settings); 
					
					?>
				<?php endif; ?>
				
				<div class="howto">
					<strong><?php _e('Shortcode Information', 'wp-mailinglist'); ?></strong><br/>
					<code>[newsletters_post_loop]...[/newsletters_post_loop]</code> <?php _e('The posts loop. Use the codes below inside.', 'wp-mailinglist'); ?><br/>
					<code>[newsletters_post_id]</code> <?php _e('The ID of the post.', 'wp-mailinglist'); ?><br/>
					<code>[newsletters_post_author]</code> <?php _e('The display name of the author.', 'wp-mailinglist'); ?><br/>
					<code>[newsletters_post_title]</code> <?php _e('The title of the post.', 'wp-mailinglist'); ?><br/>
					<code>[newsletters_post_link]</code> <?php _e('The URL of the post.', 'wp-mailinglist'); ?><br/>
					<code>[newsletters_post_date_wrapper]</code> <?php _e('A wrapper for the date, simply to work with the "showdate" parameter in the shortcode.', 'wp-mailinglist'); ?><br/>
					<code>[newsletters_post_date format="F jS, Y"]</code> <?php _e('The date of the post with an optional "format" parameter.', 'wp-mailinglist'); ?><br/>
					<code>[newsletters_post_thumbnail size="thumbnail"]</code> <?php _e('The thumbnail (if any) of the post with an optional "size" parameter.', 'wp-mailinglist'); ?><br/>
					<code>[newsletters_post_excerpt]</code> <?php _e('The excerpt of the post taken from the content.', 'wp-mailinglist'); ?><br/>
					<code>[newsletters_post_content]</code> <?php _e('The full content of the post as published.', 'wp-mailinglist'); ?>
				</div>
			</td>
		</tr>
	</tbody>
</table>