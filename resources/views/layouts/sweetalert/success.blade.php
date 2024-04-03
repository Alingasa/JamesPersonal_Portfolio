
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
   @if(session('success'))
       Swal.fire({
           icon: 'success',
           title: 'Success!',
           showConfirmButton: false,
           timer: 2500
       });
       @elseif(session('update_success'))
       Swal.fire({
           icon: 'success',
           title: 'Success!',
           showConfirmButton: false,
           timer: 2500
       });
   @endif
</script>

<script>
   @if(session('delete'))
       Swal.fire({
           icon: 'success',
           title: 'Success!',
           showConfirmButton: false,
           timer: 2500
       });
   @endif
</script>