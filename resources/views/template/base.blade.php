

<!DOCTYPE html>
<html>
  <head>
    <title>@yield('page.title',config('app.name'))</title>
    
        
   
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
     <style>
         .required:after {content: '*'; color:red; margin-left: 3px; margin-bottom: 3px; }
         
     </style>
  </head>
  <body>
  <container>
      <div class="d-flex flex-column justify-content-between min-vh-100">
          @include('includes.alert')
          @include('includes.header')
          
      <main class="flex-grow-1 py-3">
       @yield('content')
          
      </main>
      
      
      
      @include('includes.footer')
      </div>
     
      <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/js/bootstrap.min.js"></script>
       </container>
  </body>
</html>



