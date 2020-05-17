<?php

class WpProQuiz_View_InfoAdaptation extends WpProQuiz_View_View
{
    public function show()
    {
        ?>

        <div class="wrap">
            <h2><?php _e('Cleancoded-Pro-Quiz special modification', 'Cleancoded-Pro-Quiz'); ?></h2>

            <p><?php _e('You need special Cleancoded-Pro-Quiz modification for your website?', 'Cleancoded-Pro-Quiz'); ?></p>

            <h3><?php _e('We offer you:', 'Cleancoded-Pro-Quiz'); ?></h3>
            <ol style="list-style-type: disc;">
                <li><?php _e('Design adaption for your theme', 'Cleancoded-Pro-Quiz'); ?></li>
                <li><?php _e('Creation of additional modules for your needs', 'Cleancoded-Pro-Quiz'); ?></li>
                <li style="display: none;"><?php _e('Premium Support', 'Cleancoded-Pro-Quiz'); ?></li>
            </ol>

            <h3><?php _e('Contact us:', 'Cleancoded-Pro-Quiz'); ?></h3>
            <ol style="list-style-type: disc;">
                <li><?php _e('Send us an e-mail', 'Cleancoded-Pro-Quiz'); ?> <a href="mailto:Cleancoded-Pro-Quiz@it-gecko.de"
                                                                        style="font-weight: bold;">Cleancoded-Pro-Quiz@it-gecko.de</a>
                </li>
                <li><?php _e('The e-mail must be written in english or german', 'Cleancoded-Pro-Quiz'); ?></li>
                <li><?php _e('Explain your wish detailed and exactly as possible', 'Cleancoded-Pro-Quiz'); ?>
                    <ol style="list-style-type: disc;">
                        <li><?php _e('You can send us screenshots, sketches and attachments', 'Cleancoded-Pro-Quiz'); ?></li>
                    </ol>
                </li>
                <li><?php _e('Send us your full name and your web address (webpage-URL)', 'Cleancoded-Pro-Quiz'); ?></li>
                <li><?php _e('If you wish design adaption, we additionally need the name of your theme',
                        'Cleancoded-Pro-Quiz'); ?></li>
            </ol>

            <p>
                <?php _e('After receiving your e-mail we will verify your request on feasibility. After this you will receive e-mail from us with further details and offer.',
                    'Cleancoded-Pro-Quiz'); ?>
            </p>

            <p>
                <?php _e('Extended support in first 6 months. Reported bugs and updates of WP Pro Quiz are supported. Exception are major releases (update of main version)',
                    'Cleancoded-Pro-Quiz'); ?>
            </p>
        </div>

        <?php
    }
}