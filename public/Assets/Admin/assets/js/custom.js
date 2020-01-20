/**
 *
 * You can write your JS code here, DO NOT touch the default style file
 * because it will make it harder for you to update.
 *
 */

"use strict";

$(document).ready(function() {
    $('.ProductStatus').on('change', function() {
        var id = $(this).attr('rel');
        console.log(url);
        if ($(this).prop('checked') == true) {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'post',
                url: "/admin/update-product-status/",
                data: { status: '1', id: id },
                success: function(data) {
                    Swal.fire(
                        'Status Activate',
                        'You clicked the button!',
                        'success',
                    );
                },
                error: function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Something went wrong!',
                    });
                }
            });
        } else {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'post',
                url: "/admin/update-product-status/",
                data: { status: '0', id: id },
                success: function(resp) {
                    Swal.fire(
                        'Status Deactivate',
                        'You clicked the button!',
                        'success'
                    );
                },
                error: function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Something went wrong!',
                    });
                }
            });
        }

    });

});