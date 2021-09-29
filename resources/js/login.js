import toastSuccessAlert from './sitescript';
// import toastErrorAlert from './sitescript';
var working = false;
$(document).on('click', '.loginWorker', function (e) {
  e.preventDefault();
    working = true;
    var email = $('input[name=email]').val();
    var password = $('input[name=password]').val();
    var remember = $('input[name=remember]').is(':checked');
    if ((email == '') || (password == '')) {
        toast.fire({
            position:'center',
            icon: 'error',
            title: '<strong class="text-red">Email and Password Required</strong>',
            showConfirmButton: false,
            width: '24rem',
            timer: 2500
        });
        return false;
    }else{
        let url = $('.workerLoginForm').attr('action');
        $(".loginWorker").attr('disabled', true);
        $('.loginWorker > span').html('Authenticating...');
        $('.loginWorker > i').removeClass('d-none');
        let fd = new FormData();
        fd.append('email', email);
        fd.append('password', password);
        axios({
            method: 'POST',
            url: url,
            data: fd
        })
        .then(function (response) {           
            console.log(response);
           // return false;
            if (response.data.status == 1) {
                
            }
            if (response.data.status == 0 && response.data.problem == 'exist') {
                
            }
            if (response.data.status == 0) {

                return false;
            }
        })
        .catch((errors) => {
            if (errors.response) {                
                
                var el;
                $.each(errors.response.data.errors, function (i, value) {
                    el = $(document).find('[name="' + i + '"]');
                    el.hasClass("is-invalid") ? el.removeClass('is-invalid') : '';
                    if (el.parent().find($('span')).length) {
                        el.closest().find($('span')).remove();
                    } else {
                        el.after($('<span class="text-danger">' + value + '</span>'));
                    }
                });
            }
        });
    }
});