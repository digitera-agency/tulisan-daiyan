/*
author http://codecanyon.net/user/creativeinteractivemedia
*/

(function($) {
    $(document).ready(function(){

        $(document.body).append('<input type="text" id="copy-text-hidden" value="" style="opacity: 0; pointer-events: none; ">')

         $('.copy-shortcode').on('click', function(){
            var id = $(this).attr("id")
            var shortcode = "[real3dflipbook id='"+id+"']"
            var copyText = document.getElementById("copy-text-hidden");
            copyText.value = shortcode

            /* Select the text field */
            copyText.select();

            /* Copy the text inside the text field */
            document.execCommand("copy");
        })

    })
})(jQuery);