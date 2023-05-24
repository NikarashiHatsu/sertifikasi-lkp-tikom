import './bootstrap';

import Alpine from 'alpinejs';
import Swal from 'sweetalert2';

window.Alpine = Alpine;
window.Swal = Swal;

Alpine.start();

const alertSuccess = (message) => {
    Swal.fire(
        'Berhasil!',
        message,
        'success'
    );
};

const alertError = (message) => {
    Swal.fire(
        'Terjadi kegagalan',
        message,
        'error'
    );
};

const alertConfirm = (event, message, callback) => {
    event.preventDefault();

    Swal.fire({
        title: 'Hapus data ini?',
        text: message,
        icon: 'question',
        showCancelButton: true,
    }).then((result) => {
        if (result.isConfirmed) {
            return callback();
        }

        return Swal.fire(
            'Dibatalkan',
            'Data tidak jadi dihapus',
            'info'
        );
    });
};

window.alertSuccess = alertSuccess;
window.alertError = alertError;
window.alertConfirm = alertConfirm;
