<?php

class WpProQuiz_View_WpqSupport extends WpProQuiz_View_View
{

    public function show()
    {
        ?>

        <div class="wrap">
            <h2><?php _e('Support Cleancoded-Pro-Quiz', 'Cleancoded-Pro-Quiz'); ?></h2>

        
            <p>
                <?php _e('Cleancoded-Pro-Quiz is small but nice free quiz plugin for WordPress.', 'Cleancoded-Pro-Quiz'); ?> <br>
                <?php _e('I try to implement all wishes as fast as possible and help with problems.', 'Cleancoded-Pro-Quiz'); ?>
                <br>
                <?php _e('Your donations can help to ensure that the project continues to remain free.',
                    'Cleancoded-Pro-Quiz'); ?>
            </p>

            <h3>Cleancoded-Pro-Quiz on Github</h3>

            <a class="button" target="_blank" href="https://github.com/cleancoded/Cleancoded-Pro-Quiz"><?php _e('Cleancoded-Pro-Quiz on Github', 'Cleancoded-Pro-Quiz'); ?></a>


            <h3><?php _e('Cleancoded-Pro-Quiz special modification', 'Cleancoded-Pro-Quiz'); ?></h3>
            <h3><?php _e('Cleancoded-Pro-Quiz special modification', 'Cleancoded-Pro-Quiz'); ?></h3>
            <strong><?php _e('You need special Cleancoded-Pro-Quiz modification for your website?',
                    'Cleancoded-Pro-Quiz'); ?></strong><br>
            <a class="button-primary" href="admin.php?page=wpProQuiz&module=info_adaptation"
               style="margin-top: 5px;"><?php _e('Learn more', 'Cleancoded-Pro-Quiz'); ?></a>

            <h3>Cleancoded-Pro-Quiz Wiki</h3>

            <a class="button-primary" target="_blank" href="https://github.com/cleancoded/Cleancoded-Pro-Quiz/wiki">--> Wiki <--</a>

            <h3 style="margin-top: 40px;"><?php _e('Translate Cleancoded-Pro-Quiz', 'Cleancoded-Pro-Quiz'); ?></h3>

            <p>
                <?php _e('To translate Cleancoded-Pro-Quiz, please follow these steps:', 'Cleancoded-Pro-Quiz'); ?>
            </p>

            <ul style="list-style: decimal; padding: 0 22px;">
                <li><?php _e('Login to your account on wordpress.org (or create an account if you don’t have one yet).', 'Cleancoded-Pro-Quiz'); ?></li>
                <li><?php _e('Go to https://translate.wordpress.org.', 'Cleancoded-Pro-Quiz'); ?></li>
                <li><?php _e('Select your language and click ‘Contribute Translation’.', 'Cleancoded-Pro-Quiz'); ?></li>
                <li><?php _e('Go to the Plugins tab and search for ‘Cleancoded-Pro-Quiz’.', 'Cleancoded-Pro-Quiz'); ?></li>
                <li><?php _e('Select the plugin and start translating!', 'Cleancoded-Pro-Quiz'); ?></li>
            </ul>

        </div>

        <?php
    }
}
