jQuery(document).ready(function($) {
    $('.notice[data-notice="theme_info"]').on('click', '.notice-dismiss', function() {
        var notice = $(this).closest('.notice');
        
        // Perform the AJAX request to dismiss the notice
        $.ajax({
            type: 'POST',
            data: {
                action: 'charity_aid_dismiss_notice',
            },
            url: ajaxurl,
            success: function(response) {
                // On success, hide the notice immediately
                if(response.success) {
                    notice.fadeOut();
                }
            }
        });
    });
});