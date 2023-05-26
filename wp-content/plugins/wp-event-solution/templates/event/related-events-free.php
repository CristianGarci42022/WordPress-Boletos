<?php

use \Etn\Utils\Helper;

defined( 'ABSPATH' ) || exit;

if ( is_array( $data ) && ! empty( $data ) ) {
	?>
	<div class="etn-event-related-post">
			<h3 class="related-post-title">
					<?php
					$related_events_title = apply_filters( 'etn_event_related_event_title', $title );
					echo Helper::render( $related_events_title );
					?>
			</h3>
			<div class="etn-row">
					<?php
					foreach ($data as $value) {

							$category  = Helper::cate_with_link( $value->ID, 'etn_category');
							$category  = !empty( $category ) ? $category : "";

							$start_date  = get_post_meta( $value->ID, 'etn_start_date', true);
							$start_date  = Helper::etn_date( $start_date );
							$related_event_location = get_post_meta( $value->ID, 'etn_event_location', true);
							$event_location_type    = get_post_meta( $value->ID, 'etn_event_location_type', true );
							$event_terms            = !empty(get_the_terms($value->ID, 'etn_location')) ? get_the_terms($value->ID, 'etn_location') : [];

							?>
							<div class="etn-col-lg-<?php echo esc_attr( $column ); ?> etn-col-md-6">
									<div class="etn-event-item">
											<?php
											if ( get_the_post_thumbnail_url($value->ID) ) {
													?>
													<div class="etn-event-thumb">
															<a 
																href="<?php echo esc_url(get_the_permalink($value->ID)); ?>" 
																aria-label="<?php echo get_the_title(); ?>"
															>
																<?php echo get_the_post_thumbnail($value->ID, 'medium'); ?>
															</a>
															<div class="etn-event-category">
																	<?php echo  Helper::kses($category); ?>
															</div>
													</div>
													<?php
											}
											?>
											<div class="etn-event-content">
													<?php if ( ! empty($related_event_location) && $event_location_type === 'existing_location' ) : ?>
														<div class="etn-event-location">
															<i class="etn-icon etn-location"></i>
															<?php echo esc_html( $related_event_location ); ?>
														</div>
													<?php endif; ?>

													<?php if( $event_location_type === 'new_location' ) : ?>
														<div class="etn-event-location">
															<i class="etn-icon etn-location"></i>
															<?php foreach( $event_terms as $term ) : ?>
																<span><?php echo esc_html( $term->name ); ?></span>
															<?php endforeach; ?>
														</div>
													<?php endif; ?>

													<h3 class="etn-title etn-event-title">
														<a href="<?php echo esc_url(get_the_permalink($value->ID)); ?>">
															<?php echo esc_html(get_the_title($value->ID)); ?>
														</a>
													</h3>
													<p>
														<?php echo esc_html( Helper::trim_words( $value->post_excerpt, 8 ) ); ?>
													</p>
													<div class="etn-event-footer">
															<div class="etn-event-date">
																	<i class="etn-icon etn-calendar"></i>
																	<?php echo esc_html($start_date); ?>
															</div>
															<div class="etn-atend-btn">
																	<a href="<?php echo esc_url(get_the_permalink($value->ID)); ?>" class="etn-btn etn-btn-border" title="<?php echo get_the_title($value->ID); ?>"><?php echo esc_html__('attend', "eventin") ?> <i class="etn-icon etn-arrow-right"></i></a>
															</div>
													</div>
											</div>
									</div>
							</div>
					<?php
					}
					?>
			</div>
	</div>
	<?php
}
