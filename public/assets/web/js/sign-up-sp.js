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
    $(".next").click(function () {

        let name = document.getElementById('name').value;
        let email = document.getElementById('email').value;
        let password = document.getElementById('password').value;
        if (name === '') {
            nameError.innerHTML = 'Name is required';
            //return false;
            return true;
        } else {
            nameError.innerHTML = '';
        }
        if (email === '') {
            emailError.innerHTML = 'Email is required';
            //return false;
            return true;
        } else {
            emailError.innerHTML = '';
        }
        let regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@.#$!%*?&])[A-Za-z\d@.#$!%*?&]{8,15}$/;
        let pass = (password, regex.test(password));
        //alert(pass);
        if (password === '') {
            passwordError.innerHTML = 'Password is required';
            return false;
        } else if (password.length < 6) {
            passwordError.innerHTML = 'you have to enter at least 6 digit!';
            return false;
        } else if (pass === false) {
            passwordError.innerHTML = 'Password must be 8 characters long uppercase, lowercase, numbers, and symbols';
            return false;
        } else {
            passwordError.innerHTML = '';
        }

        // if (current === 2) {
        //
        //     let password = document.getElementById('password').value;
        //
        //     function validE(e) {
        //         const patt = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        //         return patt.test(e);
        //     }
        //
        //     if (email === '') {
        //         emailError.innerHTML = 'Email is required';
        //         return false;
        //     } else if (email != '') {
        //         const e = email;
        //         if (validE(e)) {
        //             emailError.innerHTML = "";
        //             valid = true;
        //         } else {
        //             emailError.innerHTML = 'Email is Not Valid';
        //             return false;
        //         }
        //     } else {
        //         emailError.innerHTML = '';
        //     }
        //
        //     let regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@.#$!%*?&])[A-Za-z\d@.#$!%*?&]{8,15}$/;
        //     let pass = (password, regex.test(password));
        //     //alert(pass);
        //     if (password === '') {
        //         passwordError.innerHTML = 'Name is required';
        //         return false;
        //     } else if (password.length < 6) {
        //         passwordError.innerHTML = 'you have to enter at least 6 digit!';
        //         return false;
        //     } else if (pass === false) {
        //         passwordError.innerHTML = 'Password must be 8 characters long uppercase, lowercase, numbers, and symbols';
        //         return false;
        //     } else {
        //         passwordError.innerHTML = '';
        //     }
        // }

        // return false;

        if (current === 2) {
            let postcode = document.getElementById('postcode').value;
            let phonenumber = document.getElementById('phonenumber').value;
            if ((postcode === '') || (phonenumber === '')) {
                if (postcode === '') {
                    postcodeError.innerHTML = 'Postcode is required';
                    valid = false;
                } else {
                    postcodeError.innerHTML = '';
                }
                if (phonenumber === '') {
                    phonenumberError.innerHTML = 'Phone Number is required';
                    valid = false;
                } else {
                    phonenumberError.innerHTML = '';
                }
                return false;
            }
        }
        if (current === 3) {
            const servicesError = document.getElementById('servicesError'); // Assuming you have an element to show errors

            // Check if any service checkbox is checked
            const isAnyServiceSelected = $('input[name^="service"]:checked').length > 0;

            if (isAnyServiceSelected) {
                servicesError.innerHTML = ''; // Clear error message

                // Collect all selected services into an array
                const services = $('input[name^="service"]:checked').map(function () {
                    return this.value;
                }).get();
                let formData = new FormData();
                formData.append('name', $('#name').val());
                formData.append('email', $('#email').val());
                formData.append('password', $('#password').val());
                formData.append('postcode', $('#postcode').val());
                formData.append('phonenumber', $('#phonenumber').val());
                formData.append('other_service', $('#other_service').val());
                formData.append('services', JSON.stringify(services));
                axios
                    .post(APP_URL + '/provider-signup-store', formData)
                    .then(function (response) {
                        loaderHide();
                        notificationToast(response.data.message, 'success');
                    })
                    .catch(function (error) {
                        console.log(error)
                        notificationToast(error.response.data.message, 'warning')
                        loaderHide();
                    });
            } else {
                servicesError.innerHTML = 'At Least One Service Must be Selected.';
                return false;
            }
        }
        if (current === 4) {
            let primaryservice = document.getElementsByName('primaryservice');
            var genValue1 = false;
            for (var i = 0; i < primaryservice.length; i++) {
                if (primaryservice[i].checked == true) {
                    genValue1 = true;
                }
            }
            if (!genValue1) {
                servicesError.innerHTML = 'At Least One Service Must be Selected.';
                return false;
            }
        }
        if (current === 5) {
            let serviceexperience = document.getElementsByName('serviceexperience');
            var genValue = false;
            for (var i = 0; i < serviceexperience.length; i++) {
                if (serviceexperience[i].checked == true) {
                    genValue = true;
                }
            }
            if (!genValue) {
                experienceError.innerHTML = 'At Least One Service Must be Selected.';
                return false;
            }
            // if($('input[name=serviceexperience]').is(':checked')){
            // 	experienceError.innerHTML = '';
            // } else{

            // 	return false;
            // }
        }
        if (current === 6) {
            if ($('input[name=wwccertificate]').is(':checked') || $('input[name=firstaid]').is(':checked') ||
                $('input[name=childresuscitation]').is(':checked') || $('input[name=advancedchildcare]').is(':checked') || $('input[name=earlyIII]').is(':checked') || $('input[name=earlyIV]').is(':checked') || $('input[name=registerednurse]').is(':checked')) {
                qualificationsError.innerHTML = '';
            } else {
                qualificationsError.innerHTML = 'At Least One Service Must be Selected.';
                return false;
            }
        }
        if (current === 7) {
            let achievement = document.getElementById('achievement').value;
            let dogwhisperer = document.getElementById('dogwhisperer').value;
            if ((achievement === '') || (dogwhisperer === '')) {
                if (achievement === '') {
                    achievementError.innerHTML = 'Achievement is required';
                    valid = false;
                } else {
                    achievementError.innerHTML = '';
                }
                if (dogwhisperer === '') {
                    dogwhispererError.innerHTML = 'This field is required';
                    valid = false;
                } else {
                    dogwhispererError.innerHTML = '';
                }
                return false;
            }
        }

        if (current === 9) {
            let profilepic = document.getElementById('profilepic').value;
            if (profilepic === '') {
                profilepicError.innerHTML = 'Profile image is required';
                return false;
            }
        }
        current_fs = $(this).parent();
        next_fs = $(this).parent().next();

        //Add Class Active
        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

        //show the next fieldset
        next_fs.show();

        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function (now) {

                // for making fielset appear animation
                opacity = 1 - now;
                current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                });
                next_fs.css({'opacity': opacity});
            },
            duration: 500
        });
        setProgressBar(++current);
    });

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
