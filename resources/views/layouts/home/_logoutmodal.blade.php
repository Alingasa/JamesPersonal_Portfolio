<!-- Include SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<!-- JavaScript function to handle log out with SweetAlert -->
<script>
function logoutWithSweetAlert() {
    Swal.fire({
        title: 'Confirm Logout',
        text: 'Are you sure you want to log out?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'log me out!',
        cancelButtonText: 'Cancel'
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('logout-form').submit();
        }
    });
}
</script>

<!-- Logout button -->

