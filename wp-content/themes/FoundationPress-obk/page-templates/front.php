<?php
/*
Template Name: Front
*/
get_header(); ?>

<?php do_action( 'foundationpress_before_content' ); ?>
<section role="main">
	<div class="row expanded">
	  <div class="medium-8 columns callOutSection">

			<?php
			$loopIndex= 0;
			$catquery = new WP_Query( 'cat=1&posts_per_page=3' );
			while($catquery->have_posts()) : $catquery->the_post();
			?>
				<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
					//the_post_thumbnail('thumbnail');  NOT using this
					$thumb_id = get_post_thumbnail_id();
					$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
					$thumb_url = $thumb_url_array[0];
				}?>
				<?php if($loopIndex === 0): ?>
					<div class="small-12 medium-12 large-12 columns callOutContainer">
						<div class="callOutContent">
							<a href="<?php the_permalink() ?>">
								<div class="callOutImgContainer">
									<img src="<?php echo $thumb_url; ?>" class="callOutImg">
								</div>
								<div class="callOutText">
									<h3><?php the_title();?></h3>
									<p><?php //the_content(); ?></p>
								</div>
							</a>
						</div>
					</div>
					</div>
					<div class="medium-4 columns callOutSection">

				<?php endif; ?>

				<?php if( 0 < $loopIndex): ?>
					<div class="small-12 medium-12 large-12 columns callOutContainer">
						<div class="callOutContent">
							<a href="<?php the_permalink() ?>">
								<div class="callOutImgContainer">
									<img src="<?php echo $thumb_url; ?>" class="callOutImg">
								</div>
								<div class="callOutText">
									<h3><?php the_title(); ?></h3>
									<p><?php //the_content(); ?></p>
								</div>
							</a>
						</div>
					</div>
				<?php endif; ?>

				<?php if($loopIndex === 2): ?>
				</div>
			<?php endif; ?>

			<?php $loopIndex++;?>
			<?php endwhile; ?>

				<?php// Restore original Post Data
				wp_reset_postdata();?>

	</div>

<div class="row column">
  <h4 class="text-center">LATEST STORIES</h4>
</div>


<div class="row expanded">
  <div class="large-8 columns" style="border-right: 1px solid #E3E5E8;">

  <article>

<?php
$loopIndex= 0;
$query = new WP_Query(array(
    'posts_per_page'   => 10,
));

while ($query->have_posts()): $query->the_post(); ?>
<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
	//the_post_thumbnail('thumbnail');  NOT using this
	$thumb_id = get_post_thumbnail_id();
	$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
	$thumb_url = $thumb_url_array[0];
}?>

		<div class="row">
			<div class="large-6 columns">
				<p><img src="<?php echo $thumb_url; ?>" alt="image for article" alt="article preview image"></p>
			</div>
			<div class="large-6 columns">
				<h5><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h5>
				<p>
					<span><i class="fi-torso"> By Thadeus &nbsp;&nbsp;</i></span>
					<span><i class="fi-calendar"> 11/23/16 &nbsp;&nbsp;</i></span>
					<span><i class="fi-comments"> 6 comments</i></span>
				</p>
				<p><?php the_excerpt(); ?></p>
			</div>
		</div>

		<hr>


<?php endwhile;?>

<ul class="pagination" role="navigation" aria-label="Pagination">
	<li class="disabled">Previous <span class="show-for-sr">page</span></li>
	<li class="current"><span class="show-for-sr">You're on page</span> 1</li>
	<li><a href="#" aria-label="Page 2">2</a></li>
	<li><a href="#" aria-label="Page 3">3</a></li>
	<li><a href="#" aria-label="Page 4">4</a></li>
	<li><a href="#" aria-label="Next page">Next <span class="show-for-sr">page</span></a></li>
</ul>

</article>

</div>


  <div class="large-4 columns">

    <aside>

      <div class="row small-up-3">

        <div class="column text-center">
          <i class="fi-social-facebook"></i>
          <h6>56,009</h6>
          <p><small>FOLLOWERS</small></p>
          <br>
        </div>

        <div class="column text-center">
          <i class="fi-social-twitter"></i>
          <h6>76,905</h6>
          <p><small>FOLLOWERS</small></p>
          <br>
        </div>

        <div class="column text-center">
          <i class="fi-social-instagram"></i>
          <h6>34,099</h6>
          <p><small>FOLLOWERS</small></p>
          <br>
        </div>

        <div class="column text-center">
          <i class="fi-social-tumblr"></i>
          <h6>13,765</h6>
          <p><small>FOLLOWERS</small></p>
        </div>

        <div class="column text-center">
          <i class="fi-social-pinterest"></i>
          <h6>9,283</h6>
          <p><small>FOLLOWERS</small></p>
        </div>

        <div class="column text-center">
          <i class="fi-social-youtube"></i>
          <h6>99,000</h6>
          <p><small>FOLLOWERS</small></p>
        </div>

      </div>

      <br>

      <div class="row column">
        <p class="lead">FROM OUR FRIENDS</p>
        <p><img src="http://placehold.it/400x300&text=Buy Me!" alt="advertisement of ShamWow"></p>
      </div>

      <br>

      <div class="row column">
        <p class="lead">TRENDING POSTS</p>

        <div class="media-object">
          <div class="media-object-section">
            <img class="thumbnail" src= "http://placehold.it/100">
          </div>
          <div class="media-object-section">
            <h5>All I need is a space suit and I'm ready to go.</h5>
          </div>
        </div>

        <div class="media-object">
          <div class="media-object-section">
            <img class="thumbnail" src= "http://placehold.it/100">
          </div>
          <div class="media-object-section">
            <h5>Are the stars out tonight? I don't know if it's cloudy or bright.</h5>
          </div>
        </div>

        <div class="media-object">
          <div class="media-object-section">
            <img class="thumbnail" src= "http://placehold.it/100">
          </div>
          <div class="media-object-section">
            <h5>And the world keeps spinning.</h5>
          </div>
        </div>

        <div class="media-object">
          <div class="media-object-section">
            <img class="thumbnail" src= "http://placehold.it/100">
          </div>
          <div class="media-object-section">
            <h5>Cold hearted orb that rules the night.</h5>
          </div>
        </div>

      </div>

    </aside>

  </div>
</div>
	<!--<div class="fp-intro">

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<footer>
				<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
				<p><?php the_tags(); ?></p>
			</footer>
			<?php do_action( 'foundationpress_page_before_comments' ); ?>
			<?php comments_template(); ?>
			<?php do_action( 'foundationpress_page_after_comments' ); ?>
		</div>

	</div>-->

</section>
<?php do_action( 'foundationpress_after_content' ); ?>

<div class="section-divider">
	<hr />
</div>

<?php get_footer();
