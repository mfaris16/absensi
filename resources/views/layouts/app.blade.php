<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Absensi Pramuka</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{url('assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{url('assets/images/favicon.png')}}" />
  </head>
  <body>
     @yield('content')

    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{url('assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{url('assets/vendors/chart.js/Chart.min.js')}}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{url('assets/js/off-canvas.js')}}"></script>
    <script src="{{url('assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{url('assets/js/misc.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{url('assets/js/dashboard.js')}}"></script>
    <script src="{{url('assets/js/todolist.js')}}"></script>
    <script src="{{url('assets/js/ddtf.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <!-- End custom js for this page -->

    {{-- MENGAMBIL JURUSAN --}}
    <script type="text/javascript">
      jQuery(document).ready(function ()
      {
              jQuery('select[name="id_kelas"]').on('change',function(){
                 var kelasID = jQuery(this).val();
                 if(kelasID)
                 {
                    jQuery.ajax({
                       url : 'daftarlist/getjurusan/' +kelasID,
                       type : "GET",
                       dataType : "json",
                       success:function(data)
                       {
                          console.log(data);
                          jQuery('select[name="id_jurusan"]').empty();
                          jQuery.each(data, function(key,value){
                             $('select[name="id_jurusan"]').append('<option value="'+ key +'">'+ value +'</option>');
                          });
                       }
                    });
                 }
                 else
                 {
                    console.log('Tidak Ada Data');
                 }
              });
      });
      </script>
      {{-- END MENGAMBIL JURUSAN --}}

      {{-- MENGAMBIL JURUSAN --}}
    <script type="text/javascript">
      jQuery(document).ready(function ()
      {
              jQuery('select[name="id_ambalan"]').on('change',function(){
                 var ambalanID = jQuery(this).val();
                 if(ambalanID)
                 {
                    jQuery.ajax({
                       url : 'daftarlist/getsangga/' +ambalanID,
                       type : "GET",
                       dataType : "json",
                       success:function(data)
                       {
                          console.log(data);
                          jQuery('select[name="id_sangga"]').empty();
                          jQuery.each(data, function(key,value){
                             $('select[name="id_sangga"]').append('<option value="'+ key +'">'+ value +'</option>');
                          });
                       }
                    });
                 }
                 else
                 {
                    console.log('Tidak Ada Data');
                 }
              });
      });
      </script>
      {{-- END MENGAMBIL JURUSAN --}}
      <script>
            $(document).ready(function(){
                $('#tabel-data').DataTable({
                   paging: false,
                   responsive: true
                });
            });
        </script>

<script type="text/javascript">
   $(document).ready(function () {
       $('#tanggal').datepicker({
        //merubah format tanggal datepicker ke dd-mm-yyyy
           format: "dd-mm-yyyy",
           //aktifkan kode dibawah untuk melihat perbedaanya, disable baris perintah diatasa
           //format: "dd-mm-yyyy",
           autoclose: true
       });
   });
</script>
  </body>
</html>