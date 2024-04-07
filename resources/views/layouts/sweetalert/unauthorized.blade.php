<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script>
   @if(session('unauthorized'))
 Swal.fire({
  title: 'Unauthorized Access',
  icon: 'error',                 
  showConfirmButton: false,
  timer: 3500

});
@endif

</script>