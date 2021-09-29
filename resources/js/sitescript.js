require('./bootstrap');
require('alpinejs');
import '@chenfengyuan/datepicker/dist/datepicker.min.js';
import 'icheck-bootstrap';
import "animate.css"
import Swal from 'sweetalert2/src/sweetalert2.js';
//import Filterizr from 'filterizr';
import 'bootstrap4-duallistbox';
window.toastr = require('toastr');
import moment from 'moment';
moment().format();
import AOS from 'aos';
window.Swal = Swal;
const toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: false,
    didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
});
window.toast = toast;
function toastSuccessAlert(message, title) {
    toastr.success(title, message, {
        "closeButton": false,
        "icon": 'success',
        "debug": false,
        "newestOnTop": true,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "5500",
        "hideDuration": "1000",
        "timeOut": "5500",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    });
}
function toastErrorAlert(message, title) {
    toastr.error(title, message, {
        "closeButton": false,
        "icon": 'error',
        "debug": false,
        "newestOnTop": true,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "5500",
        "hideDuration": "1000",
        "timeOut": "5500",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    });
}
AOS.init();
/* import Swup from 'swup';
const swup = new Swup(); */
$('[data-toggle="datepicker"]').datepicker({
    "language": 'ar',
    "autoHide": true,
    "autoPick": true,
    "format": 'yyyy-mm-dd',
    "startDate": new Date(1980, 1, 14),
    "endDate": new Date(2006, 1, 14)
});
$("#DOB").on('change', function(){
    //importconsole.log($("#DOB").val());
    var datepicked = $('input[name=DOB]').val();
    // alert(datepicked);
    $("#selectDob").val(datepicked);

});

   
// import 'parsleyjs';
var totalStage = 3;
var currentStage = 1;
const prevBtns = document.querySelectorAll(".btn-prev");
const nextBtns = document.querySelectorAll(".btn-next");
const progress = document.getElementById("progress");
const formSteps = document.querySelectorAll(".form-step");
const progressSteps = document.querySelectorAll(".progress-step");

let formStepsNum = 0;
// toastSuccessAlert('Hello', 'Good for You');
// toast.info('Info Title', 'Info Message');
// Swal.fire({
//     icon: 'error',
//     title: 'Oops...',

//     text: 'Something went wrong!',
//     footer: '<a href="">Why do I have this issue?</a>'
// });
// return false;
// toastSuccessAlert(result.more, result.deactiaved);
 // Swal.fire({
//     icon: 'error',
//     title: 'Oops...',
//     text: 'Something went wrong!',
//     footer: '<a href="">Why do I have this issue?</a>'
// });


nextBtns.forEach((btn) => {
    btn.addEventListener("click", () => {  
        if ($(".step1").is(":visible")) {
            var value = $('.form-control:visible').filter(function () {
                return this.value === '';
            });
           
            if (value.length == 0) {
                formStepsNum++;
                updateFormSteps();
                updateProgressbar();
               
            }else if (value.length > 0) {
                Swal.fire({
                    icon: 'error',
                    title: 'Required Fields is not yet filled...',
                    text: 'Kindly filled all required details',
                    width: "24rem"
                });
                return false;
            }           
        } else if ($(".step2").is(":visible")) {
            var value = $('.form-control:visible').filter(function () {
                return this.value === '';
            });
           // alert(value.length);
            var ProfilePhoto = document.querySelector('#ProfilePhoto').files[0];
            var IdCard = document.querySelector('#IdCard').files[0];
            if ((ProfilePhoto != null || IdCard != null) && value.length <=2) {
                formStepsNum++;
                updateFormSteps();
                updateProgressbar();
            }else if (value.length > 2) {
                Swal.fire({
                    icon: 'error',
                    title: 'Upload profile Picture and ID card Image',
                    text: 'Kindly Choose your Profile Photo and the Upload your IDcard picture to continue',
                    width: "24rem"
                });
                return false;
            }
        }
        else if ($(".step3").is(":visible")) {
            var value = $('.form-control:visible').filter(function () {
                return this.value === '';
            });

            if (value.length == 0) {
                var passwordCheck =  $('input[name=password]').val();
                var password_confirmationCheck  = $('input[name=password_confirmation]').val();
                if (passwordCheck != password_confirmationCheck) {
                    toast.fire({
                        icon: 'error',
                        "position": "center",
                        title: 'Password mismatched, Type it Correctly',
                        width: "24rem"
                    });
                    return false;
                }else{
                    formStepsNum++;
                    updateFormSteps();
                    updateProgressbar();
                }
            } else if (value.length > 0) {
                Swal.fire({
                    icon: 'error',
                    title: 'Required Fields is not yet filled...',
                    text: 'Kindly filled all required details',
                    width: "24rem"
                });
                return false;
            }
        }
        // 
        else if ($(".step_submit").is(":visible")) {
            var value = $('.form-control:visible').filter(function () {
                return this.value === '';
            });

            if (value.length == 0) {
                var pinCheck =  $('#securitycode').val();
                var confirm_pinCheck = $('#securityCode_confirmation').val();
                if (pinCheck != confirm_pinCheck) {
                    toast.fire({
                        icon: 'error',
                        "position": "center",
                        title: 'Security Pin you entered does not matched, Type it Correctly',
                        width: "24rem"
                    });
                    return false;
                }
            } else if (value.length > 0) {
                Swal.fire({
                    icon: 'error',
                    title: 'Required Fields is not yet filled...',
                    text: 'Kindly filled all required details',
                    width: "24rem"
                });
                return false;
            }
        }
    });
});

prevBtns.forEach((btn) => {
    btn.addEventListener("click", () => {               
            formStepsNum--;
            updateFormSteps();
            updateProgressbar();               
    });
});

function updateFormSteps() {
    formSteps.forEach((formStep) => {
        formStep.classList.contains("form-step-active") && formStep.classList.remove("form-step-active");
    });

    formSteps[formStepsNum].classList.add("form-step-active")
}

function updateProgressbar() {
    progressSteps.forEach((progressStep, idx) => {
        if (idx < formStepsNum + 1) {
            progressStep.classList.add("progress-step-active");
        } else {
            progressStep.classList.remove("progress-step-active");
        }
    });
    const progressActive = document.querySelectorAll(".progress-step-active");
    progress.style.width =
        ((progressActive.length - 1) / (progressSteps.length - 1)) * 100 + "%"; 
}

$(document).on("click", '.btn-submit', function(e){
    e.preventDefault();
    let fd = new FormData();
    // alert("OKAYTAGGGA");
    var securityCode =  $('#securitycode').val();
    var securityCode_confirmation = $('#securityCode_confirmation').val();
    if (securityCode != securityCode_confirmation) {
        toast.fire({
            icon: 'error',
            "position": "center",
            title: 'Security Pin you entered does not matched, Type it Correctly',
            width: "24rem"
        });
        return false;
    }
    let formSubmitUrl = $('.workersRegisterForm').attr('action');
    var Firstname = $('input[name=Firstname]').val();
    var Lastname = $('input[name=Lastname]').val();
    var Othername = $('input[name=Othername]').val();
    var MobileN01 = $('input[name=MobileN01]').val();
    var MobileN02 = $('input[name=MobileN02]').val();
    var MobileN03 = $('input[name=MobileN03]').val();    
    var ResidentialAddress = $('#residentialAddress').val();
    if ($("#ProfilePhoto").length) {
        var ProfilePhoto = document.querySelector('#ProfilePhoto').files[0];
        fd.append('ProfilePhoto', ProfilePhoto);
    }

    if ($("#LegalPapersUploaded").length) {
        var LegalPapersUploaded = document.querySelector('#LegalPapersUploaded').files[0];
        fd.append('LegalPapersUploaded', LegalPapersUploaded);
    }

    if ($("#OtherDocsHandPrint").length) {
        var OtherDocsHandPrint = document.querySelector('#OtherDocsHandPrint').files[0];
        fd.append('OtherDocsHandPrint', LegalPapersUploaded);
    }

    if ($("#IdCard").length) {
        var IdCard = document.querySelector('#IdCard').files[0];
        fd.append('IdCard', IdCard);
    } 
    var nationalcardno = $('input[name=nationalcardno]').val();
    var dob = $('input[name=dob]').val();
    var gender = $('select[name=gender]').val();
    var email = $('input[name=email]').val();
    var password = $('input[name=password]').val();
    var password_confirmation = $('input[name=password_confirmation]').val();
    var username = $('input[name=username]').val();
    
    fd.append('Firstname', Firstname);
    fd.append('Lastname', Lastname);
    fd.append('Othername', Othername);
    fd.append('MobileN01', MobileN01);
    fd.append('MobileN02', MobileN02);
    fd.append('MobileN03', MobileN03);
    fd.append('ResidentialAddress', ResidentialAddress);
    fd.append('nationalcardno', nationalcardno);
    fd.append('dob', dob);
    fd.append('gender', gender);
    fd.append('email', email);
    fd.append('password', password);
    fd.append('password_confirmation', password_confirmation);
    fd.append('username', username);
    fd.append('securityCode', securityCode);
    fd.append('securityCode_confirmation', securityCode_confirmation);
    if ($(".btn-submit").is(":visible")) {
        axios({
            method: 'POST', 
            url: formSubmitUrl,
            headers: {
                'Content-Type': 'multipart/form-data'
            },
            data: fd
        })
        .then(function (response) {
            console.log(response);
            if (response.data.status == 1) {
                toastSuccessAlert('Account Profile Created', response.data.message);
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: response.data.created,
                    showConfirmButton: false,
                    width: '36rem',
                });
                setTimeout(function () { 
                    //$(location).attr('href', response.data.redirect);
                    pageRedirect(response.data.redirect);
                }, 3500);
            }
            if (response.data.status == 0 && response.data.problem == 'exist') {
                toastErrorAlert(response.data.title, 'Something went wrong');
                SwalError(response.data.message, response.data.title);
                return false;
            }
            if (response.data.status == 0) {
                toastErrorAlert(response.data.message, 'Something went wrong');
                return false;
            }
        })
        .catch((errors) => {
            if (errors.response) {
                toastErrorAlert('Make sure to fill all required fields', 'Something went wrong');
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
function pageRedirect(url) {
    window.location.href = url;
}

/* login worker */
import "./login.js";