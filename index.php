                <?php get_header(); ?>
                <div class="col-md-5" id="topNavLinks">
                    <span class="navLink"><a href="<?php bloginfo('url'); ?>/#about" title="jump down to some background about Geocology Research">about</a> &darr;</span>
                    <span class="navLink"><a href="<?php bloginfo('url'); ?>/projects" title="go to a page with all of our projects"> projects</a> &rarr;</span>
                </div>
            </div><!-- contactNav -->
        </div><!-- .row -->
        <div class="row">
            <div class="col-md-12" id="closed-for-business">
                <h1>Geocology has retired</h1>
                <p>As of January 2017, we're no longer taking on new projects under the Geocology Research banner. But Hugh and Adam are still busy helping organizations with geo and coding stuff. Get in touch:</p>
                <p><strong>Hugh</strong> - <a href="http://essa.com/">ESSA Technologies</a> - <a href="mailto:hstimson@essa.com">hstimson@essa.com</a></p>
                <p><strong>Adam</strong> - <a href="adam@bitspatial.com">adam@bitspatial.com</a></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" id="featuredproject">
                <h1>featured project</h1>
            </div>
            <?php
                query_posts('post_type=geo_project&display=featured&posts_per_page=1&orderby=rand');
                while (have_posts()) : the_post();
            ?>
            <div class="col-md-6">
                <a href="<?php the_permalink(); ?>">
                    <?php
                        $img_args = array(
                            'title'	=> 'click to go to the project page',
                            'class' => 'img-responsive'
                        );
                        if ( has_post_thumbnail() ) {
                        the_post_thumbnail( 'project-medium', $img_args);
                        }
                    ?>
                </a>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <a href="<?php the_permalink(); ?>" title="click to go to the project page">
                            <h2>
                                <?php the_title(); ?>
                            </h2>
                        </a>
                    </div>
                    <div class="col-sm-6" id="projectDescription">
                        <?php
                        the_excerpt();
                        if ( $post->post_content != "" ) { ?>
                            <span class="navLink"><a href="<?php the_permalink(); ?>" title="click to go to the project page">more</a> &rarr;</span>
                        <?php }
                        ?>
                    </div>
                    <div class="col-sm-6" id="projectMeta">
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
            </div>
            <?php
                endwhile;
                wp_reset_query()
            ?>
        </div>
        <div class="row">
            <div class="col-md-12" id="recentprojects">
                <h1><span>recent projects</span></h1>
            </div>
            <?php
                query_posts('post_type=geo_project&display=recent&orderby=date&order=DESC&posts_per_page=4');
                while (have_posts()) : the_post();
            ?>
            <div class="col-xs-6 col-sm-3 projectCard">
                <?php
                    $excerpt = strip_tags(get_the_excerpt());
                    $excerpt = $excerpt . ' Click for more info.';
                    $img_args = array(
                        'title'	=> $excerpt,
                        'class' => 'img-responsive'
                    );
                ?>
                <a href="<?php the_permalink(); ?>">
                <?php
                if ( has_post_thumbnail() ) {
                the_post_thumbnail( 'project-thumbnail', $img_args);
                }
                ?>
                </a>
                <div class="projectCardTitle">
                    <a href="<?php the_permalink(); ?>" title="<?php echo $excerpt ?>">
                        <?php the_title(); ?>
                    </a>
                </div>
            </div>
            <?php
                endwhile;
                wp_reset_query()
            ?>
        </div>
        <div class="row">
            <div class="col-md-12 navLinks" id="recentProjectsNavLinks">
                <span class="navLink"><a href="#top" title="jump back to the top of this page">top</a> &uarr;</span> <span class="navLink"><a href="<?php bloginfo('url'); ?>/projects" title="go to a page with all of our projects">more projects</a> &rarr;</span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" id="about">
                <h1><span>about Geocology</span></h1>
            </div>
            <div class="col-sm-6" id="whatwedo">
                <h2>what we do</h2>
                <p>
                    Geocology provides spatial informatics and geodesign capacity to environmental and community organizations that don't have it in-house.
                </p>
                <p>
                    We combine technical skills like GIS, database, and coding with experience in communications and science.
                </p>
                <p>
                    Our goal is to become a shared resource of best practices and repeatable experience that Vancouver and coastal area organizations can collectively draw on.
                </p>
            </div>
            <div class="col-sm-6" id="partners">
                <h2>who we've worked with</h2>
                <div class="row">
                    <div class="col-xs-6 col-sm-4">
                        <a href="http://davidsuzuki.org" title="link to the David Suzuki Foundation website">
                            <img class="img-responsive partnerLogo" alt="David Suzuki Foundation logo" src="<?php bloginfo('template_url'); ?>/images/suzuki150x74.png" />
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-4">
                        <a href="https://dogwoodbc.ca" title="link to the Dogwood Initiative website">
                            <img class="img-responsive partnerLogo" alt="Dogwood Initiative logo"  src="<?php bloginfo('template_url'); ?>/images/dogwood150x74.png" />
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-4">
                        <a href="http://elizabethmaymp.ca/" title="link to the Elizabeth May website">
                            <img class="img-responsive partnerLogo" alt="Green Party of Canada logo" src="<?php bloginfo('template_url'); ?>/images/gpc150x74.png" />
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-4">
                        <a href="http://bcnpha.ca/" title="link to the BC Non-Profit Housing Association website">
                            <img class="img-responsive partnerLogo" alt="BC Non-Profit Housing Association logo"  src="<?php bloginfo('template_url'); ?>/images/bcnpha150x74.png" />
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-4">
                        <a href="http://thetyee.ca" title="link to The Tyee online new magazine">
                            <img class="img-responsive partnerLogo" alt="The Tyee logo" src="<?php bloginfo('template_url'); ?>/images/thetyee150x74.png" />
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-4">
                        <a href="http://echotrack.com" title="link to the Echotrack Inc website">
                            <img class="img-responsive partnerLogo" src="<?php bloginfo('template_url'); ?>/images/echotrack150x74.png" />
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p>We love working with these people. These are awesome people.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h2>who we are</h2>
            </div>
        </div>
        <div class="row bio">
            <div class="col-md-3 col-sm-3 col-xs-5"> <!-- photo -->
                <img class='img-responsive headshot' src="<?php bloginfo('template_url'); ?>/images/hugh.jpg" />
            </div> <!-- photo -->
            <div class="col-md-2 col-sm-3 col-xs-7"> <!-- deets -->
                <h3>Hugh Stimson</h3>
                <p>
                    Spatial developer<br />
                    <a href="mailto:hugh@geocology.ca">hugh@geocology.ca</a><br />
                    604.440.1989<br />
                </p>
            </div> <!-- deets -->
            <div class="col-md-7 col-sm-6 col-xs-12"> <!-- bio -->
                <p>Hugh started out studying spatial ecology, which led to remote sensing, environmental informatics, complex systems theory, and human geography at various labs in California, Virginia and Michigan. Ontario was home, now it's East Vancouver.</p>
                <p>Hugh has been building things with code since grade 5, and has lately been working on web platforms and crafting interactive maps and online interfaces.</p>
                <p>Hugh used to like motorcycles and deserts but now likes camper vans and fjords. He has planted over a million trees by hand. True fact.</p>
            </div> <!-- bio -->
        </div>
        <div class="row bio">
            <div class="col-md-3 col-sm-3 col-xs-5"> <!-- photo -->
                <img class='img-responsive headshot' src="<?php bloginfo('template_url'); ?>/images/adam.jpg" />
            </div> <!-- photo -->
            <div class="col-md-2 col-sm-3 col-xs-7"> <!-- deets -->
                <h3>Adam Valair</h3>
                <p>
                    GIS programmer<br />
                    <a href="mailto:hugh@geocology.ca">adam@geocology.ca</a><br />
                </p>
            </div> <!-- deets -->
            <div class="col-md-7 col-sm-6 col-xs-12"> <!-- bio -->
                <p>Adam originally hails from Northern British Columbia but now spends most of his time in Vancouver.  He is fluent in French and Spanish but his Pig Latin is rusty.</p>
                <p>His academic background is in Geography, Computer Science, and GIS.</p>
                <p>For work, Adam loves writing programs, especially ones that are geospatial-related. For fun, Adam enjoys sampling hot sauces of the world in search of the hottest sauce on the planet.  So far he has managed to keep a few taste buds intact.</p>
            </div> <!-- bio -->
        </div>
        <div class="row">
            <div class="col-md-12 navLinks">
                <span class="navLink"><a href="#top" title="jump back to the top of this page">top</a> &uarr;</span>
            </div>
        </div>
		<?php get_footer(); ?>