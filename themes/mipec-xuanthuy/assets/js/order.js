jQuery(document).ready(function($) {
    $.validator.addMethod(
    "required",
    function(value, element) {
        return ($.trim(value) != '');
    },
    'Không được bỏ trống!'
    );
    /*=========== Form validate ===========*/
    $('.frm-registration').validate({
        rules: {
            phone: {
                required: true,
                minlength:10,
            },
        },
        messages: {
           
            phone: {
                required: "Trường này không thể để trống!",
                minlength:"số điện thoại không đúng định dạng",
                maxlength:"số điện thoại không đúng định dạng",
            },
        }
    });

    $('.frm-donhang').validate({
        rules: {
            phone: {
                number: true,
                required: true,
                minlength:10,
            },
        },
        messages: {
            phone: {
                number: "Số điện thoại phải là chữ số!",
                required: "Trường này không thể để trống!",
                minlength:"số điện thoại không đúng định dạng",
                maxlength:"số điện thoại không đúng định dạng",
            },
        }
    });
    $('.bottom-form').validate({
        rules: {
            phone: {
                number: true,
                required: true,
                minlength:10,
            },
        },
        messages: {
            phone: {
                number: "Số điện thoại phải là chữ số!",
                required: "Trường này không thể để trống!",
                minlength:"số điện thoại không đúng định dạng",
                maxlength:"số điện thoại không đúng định dạng",
            },
        }
    });

    $(document).on('submit', '.bottom-form', function(event) {
            event.preventDefault();
            $('#wait-load').css('display','block');
             $('.bottom-form-wait').css('display','none');
        $.request('donhang::onCreateData', {
            data: {
                name: $('.bottom-name').val(),
                email: $('.bottom-email').val(),
                phone: $('.bottom-phone').val(),
            },
            success: function(res) {
                  $('#wait-load').css('display','none');
                $('form').trigger("reset"); 
                alert('Thông tin của bạn đã được gửi thành công!');
                $('.success-form').css('display','block')       
            },
            error : function () {
                 $('#wait-load').css('display','none');
                alert("Có lỗi vui lòng thử lại sau");
            }
        });
        return false; 
    });

	$(document).on('submit', '.frm-donhang', function(event) {
			event.preventDefault();
            $('#wait-load').css('display','block');
   		$.request('donhang::onCreateData', {
			data: {
				name: $('#name_data').val(),
				email: $('#email_data').val(),
				phone: $('#phone_data').val(),
				content: $('#content_data').val()
			},
			success: function(res) {
                $('#wait-load').css('display','none');
				$('form').trigger("reset"); 
                alert('Thông tin của bạn đã được gửi thành công!');
				$('.success-form').css('display','block')		
			},
			error : function () {
                 $('#wait-load').css('display','none');
				alert("Có lỗi vui lòng thử lại sau");
			}
		});
		return false; 
	});

	$(document).on('submit', '.frm-registration', function(event) {
			event.preventDefault();
            $('#wait-load').css('display','block');
   		$.request('donhang::onCreateData', {
			data: {
				name: $('.name_data').val(),
				email: $('.email_data').val(),
				phone: $('.phone_data').val(),
				content: $('.content').val(),
			},
			success: function(res) {
                $('#wait-load').css('display','none');
				$('form').trigger("reset"); 
                alert('Thông tin của bạn đã được gửi thành công!');
				$('.createdata-success').css('display','block');		
			},
			error : function () {
                $('#wait-load').css('display','none');
				alert("Có lỗi vui lòng thử lại sau");
			}
		});
		return false; 
	});
    $('body ul .mh-list-location').remove('ul');



    $('.image-popup-vertical-fit').magnificPopup({
        type: 'image',
        closeOnContentClick: true,
        mainClass: 'mfp-img-mobile',
        image: {
            verticalFit: true
        }
        
    });

});