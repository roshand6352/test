$(document).ready(function () {

    var readURL = function (input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.profile-pic').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }


    $(".file-upload").on('change', function () {
        readURL(this);
    });

    $(".upload-button").on('click', function () {
        $(".file-upload").click();
    });


    var current_fs, next_fs, previous_fs;
    var opacity;
    var current = 1;
    var steps = $("fieldset").length;


    setProgressBar(current);
    // $(".next").click(function(){
    //
    //     if (current === 1) {
    //     	let email = document.getElementById('email').value;
    //     	let password = document.getElementById('password').value;
    //     	let img = document.createElement('img');
    //         img.src = './images/error.png';
    //
    //
    //
    //         if (email === '' || password === '') {
    //         	passwordError1.innerHTML = ' Email & Password don’t match';
    //         	document.getElementById('passwordError').appendChild(img);
    //         	return false;
    //         }
    //         else {
    //         	window.location = "dashboard.html";
    //         }
    // 	}
    //
    //
    //
    //
    //
    //
    // 	current_fs = $(this).parent();
    // 	next_fs = $(this).parent().next();
    //
    // 	//Add Class Active
    // 	$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
    //
    // 	//show the next fieldset
    // 	next_fs.show();
    //
    // 	//hide the current fieldset with style
    // 	current_fs.animate({opacity: 0}, {
    // 		step: function(now) {
    //
    // 			// for making fielset appear animation
    // 			opacity = 1 - now;
    // 			current_fs.css({
    // 				'display': 'none',
    // 				'position': 'relative'
    // 			});
    // 			next_fs.css({'opacity': opacity});
    // 		},
    // 		duration: 500
    // 	});
    // 	setProgressBar(++current);
    // });

    function setProgressBar(curStep) {
        var percent = parseFloat(100 / steps) * curStep;
        percent = percent.toFixed();
        $(".progress-bar")
            .css("width", percent + "%")
    }

    $(".submit").click(function () {

        return false;
    })

});

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
})
let $form = $('#msform')
$form.on('submit', function (e) {
    e.preventDefault()
    loaderView();
    let formData = new FormData($form[0])
    axios
        .post(APP_URL + '/provider-login-check', formData)
        .then(function (response) {
            $form[0].reset();
            loaderHide();
            setTimeout(function () {
                window.location.href = APP_URL + '/provider-dashboard'
            }, 1000)
            notificationToast(response.data.message, 'success');
        })
        .catch(function (error) {
            console.log(error)
            notificationToast(error.response.data.message, 'warning')
            loaderHide();
        });
})

let $mscform = $('#mscform')
$mscform.on('submit', function (e) {
    e.preventDefault()
    loaderView();
    let formData = new FormData($mscform[0])
    axios
        .post(APP_URL + '/customer-login-check', formData)
        .then(function (response) {
            $mscform[0].reset();
            loaderHide();
            setTimeout(function () {
                window.location.href = APP_URL + '/customer-dashboard'
            }, 1000)
            notificationToast(response.data.message, 'success');
        })
        .catch(function (error) {
            console.log(error)
            notificationToast(error.response.data.message, 'warning')
            loaderHide();
        });
})
