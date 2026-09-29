<?php
// Upgrade the exercise fixture and replace an unavailable historical theme.
require '/var/www/html/wp-load.php';
require_once ABSPATH . 'wp-admin/includes/upgrade.php';
wp_upgrade();
if (!wp_get_theme()->exists()) {
    switch_theme(WP_DEFAULT_THEME);
}
echo "Local fixture is ready.\n";
