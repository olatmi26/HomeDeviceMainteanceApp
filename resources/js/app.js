require('./bootstrap');

require('alpinejs');
import 'icheck-bootstrap';
import Swal from 'sweetalert2/src/sweetalert2.js';
import $ from 'jquery';
import Filterizr from 'filterizr';
import 'dropzone';
import 'bootstrap4-duallistbox';
window.toastr = require('toastr');
window.swal = Swal;
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