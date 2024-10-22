/*jQuery(document).ready(function($) {
                    let page = 1;
                    let category = '';

                    // Filter posts by category
                    $('.filter-button').on('click', function() {
                        category = $(this).data('category-id');
                        page = 1;

                        $.ajax({
                            url: 'https://ibt-usav2.nerdstudiolab.com/wp-admin/admin-ajax.php',
                            type: 'POST',
                            data: {
                                action: 'filter_posts',
                                category: category,
                                page: page
                            },
                            success: function(response) {
                                $('#post-container').html(response);
                                page++;
                            }
                        });
                    });

                    // Load more posts
                    $('#load-more').on('click', function() {
                        $.ajax({
                            url: 'https://ibt-usav2.nerdstudiolab.com/wp-admin/admin-ajax.php',
                            type: 'POST',
                            data: {
                                action: 'load_more_posts',
                                category: category,
                                page: page
                            },
                            success: function(response) {
                                $('#post-container').append(response);
                                page++;
                            }
                        });
                    });
});*/

jQuery(document).ready(function($) {
    let page = 1;
    let category = '';

    // Filter posts by category
    $('.filter-button').on('click', function() {
        category = $(this).data('category-id');
        page = 1;

        $.ajax({
            url: 'https://ibt-usav2.nerdstudiolab.com/wp-admin/admin-ajax.php',
            type: 'POST',
            data: {
                action: 'filter_posts',
                category: category,
                page: page
            },
            success: function(response) {
                $('#post-container').html(response);
                page++;

                // If the response is empty, hide the "Load More" button
                if (response.trim() === '') {
                    $('#load-more').hide();
                } else {
                    $('#load-more').show();
                }
            }
        });
    });

    // Load more posts
    $('#load-more').on('click', function() {
        $.ajax({
            url: 'https://ibt-usav2.nerdstudiolab.com/wp-admin/admin-ajax.php',
            type: 'POST',
            data: {
                action: 'load_more_posts',
                category: category,
                page: page
            },
            success: function(response) {
                if (response.trim() === '') {
                    // No more posts to load, hide the button
                    $('#load-more').hide();
                } else {
                    $('#post-container').append(response);
                    page++;

                    // Show the button if there are more posts
                    $('#load-more').show();
                }
            }
        });
    });
});