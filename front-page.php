<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#front-page
 *
 * @package WordPress
 * @subpackage AiOP_2024
 * @copyright  AiOP, Laurie Waxman, Ross Mabbett
 * @since 1.0.0
 * @version 1.0.0
 */

get_header();

?>

<main class="home" id="main-content">
    <!-- <div id="frontpage-background"></div> -->
    <section class="header">
        <!-- Title text -->
        <article id="title">
            <h1>
                <span id="title-1">Art in</span>
                <span id="title-2">Odd Places</span>
                <span id="title-3">2024</span>
                <span id="title-4">CARE</span>
            </h1>
        </article>
    </section>
    <section id="dates">
        <h2 class="date-text h1">
            <span class="month">July</span>
            <span class="days">
                <div style="display:inline-block">25&ndash;</div>27,<span class="year">
                    2025
                </span>
            </span>
            <span class="city">West Hollywood,</span>
            <span class="state">California</span>

        </h2>
        <div class="date-locations h3 semi-bold">
            <ul>
                <li>
                    Friday July 25</br>
                    Plummer Park
                </li>
                <li>
                    Saturday July 26</br>
                    West Hollywood Park
                </li>
                <li>
                    Sunday July 27</br>
                    Sunset Boulevard
                </li>
            </ul>
        </div>
    </section>

    <section id="about">
        <h2 class="byline h1">
            <span id="byline-1">Curated by</span>
            <span id="byline-2">Deborah Oliver</span>
            <!-- <span id="byline-3">& Christopher</span>
            <span id="byline-4">Kaczmarek</span> -->
        </h2>
        <div class="about-text">
            <div class="curatorial">
                <p class="p1">
                    Presented by The City of West Hollywood and curated by Deborah Oliver, <span class="italic">AiOP
                        2025 VOICE</span> celebrates the 40th year of West Hollywood's incorporation as an independent
                    municipality and the 20th edition of this iconic public visual and performance art festival.
                </p>
            </div>
            <!-- <a class="button mustard" href="<?php echo home_url(); ?>/about">About the festival</a> -->
        </div>
    </section>

    <section id="artists">
        <div class="artists-heading">

            <h2 class="h1">
                <span id="artists-count">35+ Artists'</span>
                <span id="artists-projects"> Projects</span>
            </h2>
        </div>
        <!-- <div class="artists-buttons">
            <a class="button beige" href="<?php echo home_url(); ?>/artists">Artists</a>
            <a class="button light-coral" href="<?php echo home_url(); ?>/schedule">Schedule</a>
        </div> -->
        <div class="artists-list">
            <ul class="p">
                <li>Brian Black & Zane Alexander S.B.</li>
                <li>Chelsea Boxwell</li>
                <li>Oleksandr Brzhezytskyi</li>
                <li>Jinseok Choi</li>
                <li>Beck+Col</li>
                <li>Oscar Corona</li>
                <li>Issaiha Cunningham</li>
                <li>Andrea Derujinsky</li>
                <li>Yadira Dockstader</li>
                <li>Paul Donald</li>
                <li>Scott Froschauer</li>
                <li>Kiyo Gutierrez</li>
                <li>Terry S. Hardy</li>
                <li>Asuka Hisa</li>
                <li>Marcus Kuiland-Nazario</li>
                <li>Ibuki Kuramochi</li>
                <li>Mathilda LaZelle</li>
                <li>Olivia Leiter</li>
                <li>Curt Lemieux & Marley Vanpeebles</li>
                <li>Simon Leung</li>
                <li>Association of Hysteric Curators: Maya Mackrandilal, Mary Anna Pomonis, Monet Clark, Scarlett Kim,
                    Marjan Vayghan, & Taryn Lee</li>
                <li>Elana Mann & Chohi Kim</li>
                <li>Kacie Lyn Martinez</li>
                <li>Jeff McMahon & William Roper</li>
                <li>Cade Moga</li>
                <li>Monica Moreno</li>
                <li>Dakota Noot</li>
                <li>Mehregan Pezeshki & Cesar Osorio</li>
                <li>Jynx Prado</li>
                <li>Joseph Ravens</li>
                <li>Renée Reizman</li>
                <li>christy roberts berkowitz & Abbe Land</li>
                <li>Saun Santipreecha & Luc Trahand</li>
                <li>Constance Strickland</li>
                <li>Wes Weisbaum & Parker Wanamaker</li>
                <li>David Yashin</li>
        </div>
    </section>
    <!-- <section id="volunteer">
        <p class="p2">AiOP is a volunteer-run organization; we&rsquo;re always looking for people to help make the
            festival happen in a range of positions. Fill out our form and we&rsquo;ll help find the best spot for you
            on our volunteer team.</p>
        <div class="text">
            <h2 class="d2">CARE to volunteer?</h2>
            <a class="button deep-coral"
                href="https://docs.google.com/forms/d/e/1FAIpQLSfb5jew752cHdCaXX_1nUN-10t-J81IOpejrz80JqI-Xjq3uQ/viewform">Count
                me in!</a>
        </div>
    </section> -->

    <section id="mailing-list">
        <div class="text">
            <h2 class="d2">Join our mailing list!</h2>
            <p class="p1">Sign up to keep informed of major festival events and announcements.</p>
        </div>
        <div id="mc_embed_shell">
            <div id="mc_embed_signup">
                <form
                    action="https://artinoddplaces.us2.list-manage.com/subscribe/post?u=59738127bacb34e4346674bbc&amp;id=e45a88786c&amp;f_id=00cb7fe0f0"
                    method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate"
                    target="_blank">
                    <div id="mc_embed_signup_scroll">
                        <div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
                        <div class="mc-field-group"><label for="mce-EMAIL">Email Address <span
                                    class="asterisk">*</span></label><input type="email" name="EMAIL"
                                class="required email" id="mce-EMAIL" required="" value=""></div>
                        <div class="mc-field-group"><label for="mce-FNAME">First Name </label><input type="text"
                                name="FNAME" class=" text" id="mce-FNAME" value=""></div>
                        <div class="mc-field-group"><label for="mce-LNAME">Last Name </label><input type="text"
                                name="LNAME" class=" text" id="mce-LNAME" value=""></div>
                        <div id="mce-responses" class="clear foot">
                            <div class="response" id="mce-error-response" style="display: none;"></div>
                            <div class="response" id="mce-success-response" style="display: none;"></div>
                        </div>
                        <div aria-hidden="true" style="position: absolute; left: -5000px;">
                            /* real people should not fill this in and expect good things - do not remove this or risk
                            form bot signups */
                            <input type="text" name="b_59738127bacb34e4346674bbc_e45a88786c" tabindex="-1" value="">
                        </div>
                        <div class="optionalParent">
                            <div class="clear foot">
                                <input type="submit" name="subscribe" id="mc-embedded-subscribe" class="button"
                                    value="Subscribe">
                                <p style="margin: 0px auto;"><a href="http://eepurl.com/iXL1Jk"
                                        title="Mailchimp - email marketing made easy and fun"><span
                                            style="display: inline-block; background-color: transparent; border-radius: 4px;"><img
                                                class="refferal_badge"
                                                src="https://digitalasset.intuit.com/render/content/dam/intuit/mc-fe/en_us/images/intuit-mc-rewards-text-dark.svg"
                                                alt="Intuit Mailchimp"
                                                style="width: 220px; height: 40px; display: flex; padding: 2px 0px; justify-content: center; align-items: center;"></span></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <script type="text/javascript" src="//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js"></script>
            <script type="text/javascript">
            (function($) {
                window.fnames = new Array();
                window.ftypes = new Array();
                fnames[0] = 'EMAIL';
                ftypes[0] = 'email';
                fnames[1] = 'FNAME';
                ftypes[1] = 'text';
                fnames[2] = 'LNAME';
                ftypes[2] = 'text';
                fnames[3] = 'MMERGE3';
                ftypes[3] = 'text';
            }(jQuery));
            var $mcj = jQuery.noConflict(true);
            </script>
        </div>

    </section>
</main>

<?php get_footer(); ?>