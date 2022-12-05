<?php
get_header('secondary');


while ( have_posts() ) : the_post();
	?>
	<div class="container single-post">
		<div class="container">
			<div class="single-container">

				<h1><?php the_title(); ?></h1>

				<div class="meta-wrapper">
					<div class="category">
						<a class="crowdfundly-resource-heading__carosel-desc__resource-record--btn-body">
							<?php
							$cats = get_the_category();
							if ( ! empty( $cats ) ) {
								echo esc_html( $cats[0]->name );
							}
							?>
						</a>
					</div>

					<p class="crowdfundly-resource-heading__carosel-desc__resource-record--title">
						<?php echo esc_html( get_the_date() ); ?>
					</p>
				</div>

				<?php
				if ( has_post_thumbnail() ) :
					?>
					<div class="crowdfundly-blog-info-card__wrapper__image">
						<?php the_post_thumbnail( 'full', [ 'class' => 'crowdfundly-blog-info-card__wrapper__image-img' ] ); ?>
					<!-- <img class="crowdfundly-blog-info-card__wrapper__image-img" src="<?php //cftheme_asset( 'images/blog/How_to_use_social_proof_notification_to_get_more_donation_1280_720 1.png' ); ?>" /> -->
					</div>
					<?php
				endif;    
				?>

				<div class="crowdfundly-blog-info-card-content__body-desc">
					<?php the_content(); ?>
				</div>

			</div>
		</div>
	</div>
	<?php
endwhile;

get_footer();
