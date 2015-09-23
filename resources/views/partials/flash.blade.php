@if (Session::has('flash_message'))
         <script>
                 swal ({
                        title : "{{ session('flash_message.title') }}",
                        text : "{{ session('flash_message.message') }}",
                        type : "{{ session('flash_message.type') }}",
                        allowEscapekey : true,
                        allowOutsideClick : true
                });
        </script>                       
@endif

