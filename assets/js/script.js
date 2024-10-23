$(document).ready(function () {
    $('#login').click(function (e) {
        e.preventDefault();
        $('#registration-form').hide();
        $('#login-form').show();
    });

    $('#registration').click(function (e) {
        e.preventDefault();
        $('#login-form').hide();
        $('#registration-form').show();
    });


    $('.btn-submit').click(function (e) {
        e.preventDefault();

        let action = $(this).data('action');
        let form;

        if (action === 'register') {
            form = $('.registration-form');
        } else {
            form = $('.login-form');
        }

      //  form.find('.input-form').removeClass('error');

      //  let isValid = true;
      //  form.find('.input-form[required]').each(function () {
      //      if (!$(this).val()) {
      //          $(this).addClass('error');
      //          isValid = false;
      //      }
      //  });

      //  if (!isValid) {
      //      return;
      //  }

        $.ajax({
            type: 'POST',
            url: 'form.php',
            data: form.serialize(),
            dataType: 'json',
            success: function (response) {
                alert(response.message);
            },
            error: function (xhr, status, error) {
                alert('Произошла ошибка: ' + error);
            }
        });
    });

});