$('#subscribe-form').submit(function (event) {
    event.preventDefault();

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

$('#comment-form').on("submit", function (event) {
    event.preventDefault();

    var action = $(this).attr('action');

    $.post(action, {
            name: $('#name').val(),
            companyname: $('#companyname').val(),
            email: $('#email').val(),
            tel: $('#tel').val(),
            comments: $('#comments').val(),
        },

        function (data) {
            document.getElementById('message').innerHTML = data;
            $('#submit').removeAttr('disabled');
            if (data.match('success') != null) $('#cform').slideUp('slow');
        }
    );
});
