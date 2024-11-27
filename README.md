# Writingor Solonick Plugin Fixer

The user has a Portfolio page on their WordPress site and wants to add pagination for their portfolio items. The "portfolio" post type was created using the Solonick Plugin. However, pagination isn't possible without the ```'has_archive' => true``` option enabled for the post type in WordPress.

To solve this, I created the Writingor Solonick Plugin Fixer that updates the post type options after it’s registered by the Solonick Plugin.
