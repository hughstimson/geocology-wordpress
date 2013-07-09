<?php get_header(); ?>
			<div class="grid_5" id="topNavLinks">
				<h2>
					<span class="navLink"><a href="<?php bloginfo('url'); ?>/#recentprojects" title="jump down to recent projects we've been working on" >recent projects</a> &darr;</span>
					<span class="navLink"><a href="<?php bloginfo('url'); ?>/#about" title="jump down to some background about Geocology Research"> about us</a> &darr;</span>
				</h2>
			</div>
		</div><!-- contactNav -->
        <div class="sectionBreak"> </div>
        <div class="grid_12" id="featuredproject">
            <h1>featured project</h1>
        </div>
        <?php 
            query_posts('post_type=geo_project&display=featured&posts_per_page=1&orderby=rand');
            while (have_posts()) : the_post();
        ?>
        <div class="grid_6">
            <a href="<?php the_permalink(); ?>">
                <?php 
					$img_args = array(
						'title'	=> 'click to go to the project page',
					);
                    if ( has_post_thumbnail() ) {
                    the_post_thumbnail( 'project-medium');
                    } 
                ?>
            </a>
        </div>
        <div class="grid_6">
            <a href="<?php the_permalink(); ?>" title="click to go to the project page">
                <h2>
                    <?php the_title(); ?>
                </h2>
            </a>
            <div class="grid_3 alpha" id="projectDescription">
                <?php
                    the_excerpt();
                    if ( $post->post_content != "" ) { ?>
                        <span class="navLink"><a href="<?php the_permalink(); ?>" title="click to go to the project page">more</a> &rarr;</span>
                    <?php }
                ?>
            </div>
            <div class="grid_3 omega" id="projectMeta">
                <table>
                    <?php 
                        $for = get_post_meta($post->ID, 'for', true);
                        if (!empty($for)) {
                            echo '
                            <tr>
                                <td class="key">for</td>
                                <td class="partner">';
                                echo $for;
                                echo '</td>
                            </tr>';
                        }
                        $with = get_post_meta($post->ID, 'with', true);
                        if (!empty($with)) {
                            echo '
                            <tr>
                                <td class="key">with</td>
                                <td class="partner">';
                                echo $with;
                                echo '</td>
                            </tr>';
                        } 
                        $and = get_post_meta($post->ID, 'and', true);
                        if (!empty($and)) {
                            echo '
                            <tr>
                                <td class="key">and</td>
                                <td class="partner">';
                                echo $and;
                                echo '</td>
                            </tr>';
                        } 
                    ?>	
                </table>
            </div>
        </div>
        <?php 
            endwhile; 
            wp_reset_query()
        ?>
        <div class="grid_12" id="recentprojects">
            <h1><span>recent projects</span></h1>
        </div>
        <!-- query adapted from diceone http://wordpress.org/support/topic/297090#post-1186292 and http://wordpress.org/support/topic/adding-a-different-class-to-every-third-post -->
        <?php
            query_posts('post_type=geo_project&display=recent&orderby=date&order=DESC&posts_per_page=4');
            while (have_posts()) : the_post();
        ?>
        <div class="grid_3 projectCard">
			<?php 
				$excerpt = strip_tags(get_the_excerpt());
				$excerpt = $excerpt . ' Click for more info.';
				$img_args = array(
					'title'	=> $excerpt,
				);
			?>
            <a href="<?php the_permalink(); ?>">
            <?php
            if ( has_post_thumbnail() ) {
            the_post_thumbnail( 'project-thumbnail', $img_args);
            }
            ?>
            </a>
            <a href="<?php the_permalink(); ?>" title="<?php echo $excerpt ?>">
                <?php the_title(); ?>
            </a>
        </div>
        <?php
            endwhile;
            wp_reset_query()
        ?>
        <div class="grid_12 navLinks" id="recentProjectsNavLinks">
            <span class="navLink"><a href="#top" title="jump back to the top of this page">top</a> &uarr;</span> <span class="navLink"><a href="<?php bloginfo('url'); ?>/projects" title="go to a page with all of our projects">more projects</a> &rarr;</span>
        </div>
        <div class="grid_12" id="about">
            <h1><span>about Geocology</span></h1>
        </div>
        <div class="grid_6" id="whatwedo">
            <h2>what we do</h2>
                <p>
                    Geocology provides GIS and informatics capacity to environmental and community organizations that don't have that capacity in-house.
                </p>
                <p>
                    We combine technical skills like GIS, database  and web with background in ecology, outreach, communications and policy.
                </p>
                <p>
                    Our goal is to become a shared resource of best practices and repeatable experience that Vancouver and coastal area organizations can collectively draw on.
                </p>
        </div>
        <div class="grid_6" id="partners">
            <h2>who we've worked with</h2>
            <div class="grid_2 alpha">
                <a href="http://davidsuzuki.org" title="link to the David Suzuki Foundation website">
                    <img src="<?php bloginfo('template_url'); ?>/images/suzuki150x74.png" />
                </a>
            </div>
            <div class="grid_2">
                <a href="http://dogwoodinitiative.org" title="link to the Dogwood Initiative website">
                    <img src="<?php bloginfo('template_url'); ?>/images/dogwood150x74.png" />
                </a>
            </div>
            <div class="grid_2 omega">
                <a href="http://www.elizabethmay.ca" title="link to the Elizabeth May campaign website">
                    <img src="<?php bloginfo('template_url'); ?>/images/gpc150x74.png" />
                </a>
            </div>
            <div class="grid_2 alpha">
                <a href="http://geomemes.com" title="link to the Geomemes Research website">
                    <img src="<?php bloginfo('template_url'); ?>/images/geomemes150x74.png" />
                </a>
            </div>
            <div class="grid_2">
                <a href="http://echotrack.com" title="link to the Echotrack Inc website">
                    <img src="<?php bloginfo('template_url'); ?>/images/echotrack150x74.png" />
                </a>
            </div>
            <div class="grid_2 omega">
                <a href="http://www.mcallister-research.com" title="link to the McCallister Opinion Research website">
                    <img src="<?php bloginfo('template_url'); ?>/images/mcallister150x74.png" />
                </a>
            </div>
            <br />
            <p>
                We love working with these people. These are awesome people.
            </p>
        </div>
        <div class="grid_12" id="staff">
            <h2>who we are</h2>
            <div class="grid_3 alpha meta">
                <img src="<?php bloginfo('template_url'); ?>/images/hughAuric3.jpg" />
                <h3>Hugh Stimson</h3>
                environmental geographer<br />
                <br />
                <a href="mailto:hugh@geocology.ca">hugh@geocology.ca</a><br />
                <a href="http://twitter.com/hughstimson">@hughstimson</a><br />
                604.440.1989<br />
            </div>
            <div class="grid_3">
                <p>
                    Hugh studied ecology at the University of Guelph before working in conservation GIS and remote sensing at UC Davis and the Smithsonian Institution.
                </p>
                <p>
                    He combined his interests in ecology, complex systems theory and geospatial methods in a Masters thesis at the University of Michigan studying dryland vegetation patterning.
                </p>
                <p>
                    Hugh used to like motorcycles and deserts but now likes camper vans and fjords. He has planted over a million trees by hand. True fact.
                </p>
            </div>
            <div class="grid_3 meta">
                <img src="<?php bloginfo('template_url'); ?>/images/janeBarnacles.jpg" />
                <h3>Jane Boles</h3>
                human geographer<br />
                <br />
                <a href="mailto:jane@geocology.ca">jane@geocology.ca</a><br />
                <a href="https://twitter.com/bolesfin">@bolesfin</a><br />
                604.603.6764
            </div>
            <div class="grid_3 omega">
				<p>Jane works with forest dependent communities on climate change and participatory natural resource governance.</p> 
				<p>For the last several years she has worked in the Congo basin leveraging REDD and other carbon programs towards climate change mitigation/adaptation and livelihood enhancement.</p>
				<p>Jane studied Geography and Political Science at Concordia University, and is endlessly grateful to do work that involves good measures of reading, writing, talking, and stomping around in the muck.</p>
            </div>
        </div>
        <div class="grid_12" id="location">
            <h2>where we are</h2>
            <div class="grid_3 alpha">
                <p>
                    East Vancouver.<br />
                    Chinatown counts as East Van right?
                </p>
                <p>
                    <a href="http://maps.google.com/maps?q=211+East+Georgia+Street,+Vancouver,+BC,+Canada&hl=en&ll=49.278576,-123.099434&spn=0.001904,0.009645&sll=49.278649,-123.099372&layer=c&cbp=11,347.66,,0,7.21&cbll=49.278576,-123.099434&hnear=211+E+Georgia+St,+Vancouver,+Greater+Vancouver+Regional+District,+British+Columbia+V6A+1Z7,+Canada&t=m&z=17&panoid=1T3bgakrFvhAwdCdpRpr8Q">
                        Suite 105 - 211 East Georgia St<br />
                        Vancouver BC Canada<br />
                        V6A 1Z6
                    </a>
                </p>
                <p>
                    But it sure would be nice to get back out into the field one of these days.
                </p>
            </div>
            <div class="grid_9 omega">
                <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps/ms?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;aq=&amp;vpsrc=0&amp;ie=UTF8&amp;hq=&amp;hnear=211+E+Georgia+St+%23105,+Vancouver,+Greater+Vancouver+Regional+District,+British+Columbia+V6A+1Z7,+Canada&amp;msa=0&amp;t=m&amp;msid=209097672507989927806.0004b0b52464e65fcd18e&amp;z=13&amp;output=embed"></iframe>
            </div>
        </div>
        <div class="grid_12 navLinks">
            <span class="navLink"><a href="#top" title="jump back to the top of this page">top</a> &uarr;</span>
        </div>
		<?php get_footer(); ?>