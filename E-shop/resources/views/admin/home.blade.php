<!-- <x-app-layout>

</x-app-layout> -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
      @include('admin.css')
    <!-- End layout styles -->
    <link rel="shortcut icon" href="admin/assets/images/logo_transparent(2).png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      <!-- navbar -->
      @include('admin.header')      
        <!-- partial -->
      @include('admin.body')      
    <!-- container-scroller -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>