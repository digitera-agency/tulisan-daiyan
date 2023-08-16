/*
author http://codecanyon.net/user/creativeinteractivemedia
*/

(function($) {

    function downloadObjectAsJson(exportObj, exportName){
        var dataStr = "data:text/json;charset=utf-8," + encodeURIComponent(exportObj);
        var downloadAnchorNode = document.createElement('a');
        downloadAnchorNode.setAttribute("href",     dataStr);
        downloadAnchorNode.setAttribute("download", exportName + ".json");
        document.body.appendChild(downloadAnchorNode); // required for firefox
        downloadAnchorNode.click();
        downloadAnchorNode.remove();
      }

    $(document).ready(function() {

        $('#import').on('click', function(e){
            e.preventDefault()

            importFlipbooks()
        })

        $('#download').on('click', function(e){
            e.preventDefault()

            downloadJSON()
        })
        
        function importFlipbooks(){

            var json = $('#flipbook-admin-json').val()

            json = JSON.stringify(JSON.parse(json))

            if (confirm('Import flipbooks from JSON. This will delete any existing flipbooks. Are you sure?')) {

                $.ajax({

                    type: "POST",
                    url: 'admin-ajax.php?page=real3d_flipbook_admin',
                    data: {
                        flipbooks: json,
                        security: window.r3d_nonce[0],
                        action: "r3d_import"
                    },

                    success: function(data, textStatus, jqXHR) {

                        // location.href = "edit.php?post_type=r3d"
                        location.href = "admin.php?page=real3d_flipbook_activation"

                    },

                    error: function(XMLHttpRequest, textStatus, errorThrown) {

                        alert("Status: " + textStatus);
                        alert("Error: " + errorThrown);

                    }
                })

            }

        }

        function downloadJSON(){

            $.ajax({

                type: "POST",
                url: 'admin-ajax.php?page=real3d_flipbook_admin',
                data: {
                    security: window.r3d_nonce[0],
                    action: "r3d_get_json"
                },

                success: function(data, textStatus, jqXHR) {

                    downloadObjectAsJson(data, "flipbooks")

                },

                error: function(XMLHttpRequest, textStatus, errorThrown) {

                    alert("Status: " + textStatus);
                    alert("Error: " + errorThrown);

                }
            })

        }

    });
})(jQuery);