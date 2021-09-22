require('./bootstrap');
require('alpinejs');
import '@chenfengyuan/datepicker/dist/datepicker.min.js';
import 'icheck-bootstrap';
import Swal from 'sweetalert2/src/sweetalert2.js';
//import Filterizr from 'filterizr';
import 'bootstrap4-duallistbox';
window.toastr = require('toastr');
import moment from 'moment';
moment().format();
import AOS from 'aos';
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
AOS.init();
import Swup from 'swup';
const swup = new Swup();
$('[data-toggle="datepicker"]').datepicker({
    "language": 'ar',
    "autoHide": true,
    "autoPick": true,
    "format": 'yyyy-mm-dd',
    "startDate": new Date(1980, 1, 14),
    "endDate": new Date(2006, 1, 14)
});
