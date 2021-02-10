<?php if( comments_open() ){ ?>
	<div id="comments">
		<p>コメント</p>
		<?php if( have_comments() ){ ?>
		<ol id="comments-list">
			<?php wp_list_comments(); ?>
		</ol>
		<?php } ?>
		<?php comment_form(); ?>
	</div>
<?php } ?>