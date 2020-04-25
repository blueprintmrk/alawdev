<?php get_header(); ?>


				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
					<div class="entry-meta">
						<span class="meta-prep meta-prep-author">By </span>
						<span class="author vcard"><?php echo nc_generate_more_posts_by_author_link(); ?></span>
						<span class="meta-sep"> | </span>
						<span class="meta-prep meta-prep-entry-date">Posted on </span>
						<span class="entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php the_time( get_option( 'date_format' ) ); ?></abbr></span>
					<?php
						$posttags = get_the_tags();
						if ($posttags) {
							$maxTags = count($posttags);
							echo '<span class="tag-links"><span class="entry-utility-prep entry-utility-prep-tag-links">Tags: </span>';
							$ii = 0;
							foreach($posttags as $tag) {
								$ii++;
								echo '<a href="/tag/' . $tag->slug . '">' . $tag->name . '</a>';
								if($ii < $maxTags) {echo ',';}
								echo ' ';
							}
							echo '</span>';
						}
					?>
					</div>
				<?php endwhile; ?>
				<?php endif; ?>

<?php //comments_template('', true);
?>


<?php get_footer(); ?>