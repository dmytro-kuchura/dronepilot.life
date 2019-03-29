$('#subscribeform').submit(function () {

    var action = $(this).attr('action');

    $("#mesaj").slideUp(750, function () {
        $('#mesaj').hide();
        $('#subsubmit')
            .after('')
            .attr('disabled', 'disabled');
        $.post(action, {
                email: $('#subemail').val()
            },
            function (data) {
                document.getElementById('mesaj').innerHTML = data;
                $('#mesaj').slideDown('slow');
                $('#subscribeform img.subscribe-loader').fadeOut('slow', function () {
                    $(this).remove()
                });
                $('#subsubmit').removeAttr('disabled');
                if (data.match('success') != null) $('#subscribeform').slideUp('slow');
            }
        );
    });
    return false;
});

$('#cform').on("submit", function (event) {
    event.preventDefault();

    // var action = $(this).attr('action');

    // $("#message").slideUp(750, function () {
        // $('#message').hide();
        // $('#submit').before('<div class="text-center"><img src="images/ajax-loader.gif" class="contact-loader" /></div>').attr('disabled', 'disabled');
        // $.post(action, {
        //         name: $('#name').val(),
        //         companyname: $('#companyname').val(),
        //         email: $('#email').val(),
        //         tel: $('#tel').val(),
        //         comments: $('#comments').val(),
        //     },
        //
        //     function (data) {
        //         document.getElementById('message').innerHTML = data;
        //         $('#message').slideDown('slow');
        //         $('#cform img.contact-loader').fadeOut('slow', function () {
        //             $(this).remove()
        //         });
        //         $('#submit').removeAttr('disabled');
        //         if (data.match('success') != null) $('#cform').slideUp('slow');
        //     }
        // );
    // });
    return false;
});
