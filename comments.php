<?php if( comments_open() ){ ?>
	<div id="comments">
		<p>コメント</p>
		<?php if( have_comments() ){ ?>
		<ol id="comments-list">
			<?php wp_list_comments(); ?>
		</ol>
		<div><?php the_comments_navigation( array( 'prev_text' => '前コメント', 'next_text' => '次コメント' ) ); ?></div>
		<?php } ?>
		<?php comment_form(); ?>
	</div>
<?php } ?>