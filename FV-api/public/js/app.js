
$(function () {
    $('form').on('submit', function (e) {
        e.preventDefault();
        let data = $("form input").filter(function () {
            return !!this.value;
        }).serialize();
        console.log(data);
        $.ajax({
            type: 'post',
            url: '/api/submitAddress',
            data: data,
            success: function( response ) {
                $('.form-response').html('You address is: ' + JSON.stringify(response));
            },
            error: function () {
                alert('submit failed');
            }
        });
    });

    //validate
    $('.form-group').each(function (){
        let _this = $(this);
        _this.find('input').on('input', function() {
            let len = $(this).val().length;
            _this.find('span').text(len);
            $(this).val($(this).val().replace(/[^a-zA-Z0-9\s,'-]*$/gi, ''));
        });
    });
});
