/*
author http://codecanyon.net/user/creativeinteractivemedia
*/

(function($) {

    $(document).ready(function() {

        $.ajax({

            type: "POST",
            url: 'admin-ajax.php?page=real3d_flipbook_admin',
            data: {
                security: window.r3d_nonce[0],
                action: "r3d_generate_posts"
            },

            success: function(data, textStatus, jqXHR) {

                location.href = "edit.php?post_type=r3d"

            },

            error: function(XMLHttpRequest, textStatus, errorThrown) {

                alert("Status: " + textStatus);
                alert("Error: " + errorThrown);

            }
        })

    });
})(jQuery);