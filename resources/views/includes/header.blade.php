
        
             
       
 
<header class="py-3 border-bottom">
 
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
      
    <a href="{{route('home')}}"  class="navbar-brand" >{{config('app.name')}}</a>
    
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         
   <span class="navbar-toggler-icon"></span>
        
        </button>
   
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          
         <li class="nav-item">
             
            <a href="{{route('home')}}" class="nav-link {{Route::is('home') ? 'active' : ''}}" aria-current="page" >{{__('Главная')}}</a>
            
        </li>
        
      <li class="nav-item">
           
           <a href="{{route('blog')}}" class="nav-link" >Посты</a>
           
               </li>
        
        <li class="nav-item ">
            
          <a href="{{route('blog')}}" class="nav-link {{Route::is('blog') ? 'active' : ''}}" >
            
              {{__('Блог')}}
              
                </a>
            
       </li>
       
              <li class="nav-item">
                  
               <a href="{{route('blog')}}" class="nav-link {{Route::is('blog') ? 'active' : ''}}" >
               
                 {{__('Вход')}}
               
               </a>
             
        </li>
        
      </ul>
       <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          
         
       <li class="nav-item ">
            
          <a href="{{route('login')}}" class="nav-link {{Route::is('login') ? 'active' : ''}}" >
            
                 {{__('Вход')}}
              
                </a>
            
       </li>
       
              <li class="nav-item">
                  
               <a href="{{route('register')}}" class="nav-link {{Route::is('register') ? 'active' : ''}}" >
               
                 {{__('Регистрация')}}
               
               </a>
             
        </li>
        
      </ul>
    </div>
  </div>
</nav>
 </header>
         