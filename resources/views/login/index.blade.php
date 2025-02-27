  @extends('template.auth')
  @section('content')
 
  
 
                  
            <section>
      
      <div class="container">
          
          <div class="row">
              
              <div class="col-12 col-md-6 offset-md-3">
                  
              <x-card>
                      
                      <x-card-header>
                          
                          <h4 class="m-0">
                              
                              {{__('Вход')}}
                              
                          </h4>
                          
                      </x-card-header>
                     
                     <x-slot name="right">   
                         
                    <a href="{{route('login.store')}}">{{__('Регистрация')}}</a>
                    
                     </x-slot>
                      
                      <x-card-body>
                          
                          <x-form action="{{route('login.store')}}" method="POST">
                              
                              @csrf
                              
                              <x-form-item>
                                  
                                  <x-label reguired >{{ __('Email')}}</x-label>
                                  
                                  <input type="email" name="email" class="form-control" autofocus>
                                  
                              </x-form-item>
                              
                              <x-form-item>
                                  
                                  <x-label required >{{ __('Password')}}</x-label>
                                  
                                  <input type="password" name="pasword" class="form-control" >
                                  
                              </x-form-item>
                               
                                  <x-form-item>
                                      
                                      <x-chekbox name="rememder">
                                          
                                          {{__('Запомнить')}}
                                         
                                         </x-chekbox>
                                       
                                       </x-form-item>
                              
                              
                                <x-form-item>
                                  
                                  
                                  <button type='submit' class="btn btn-primary btn-sm" >{{__('Войти в систему')}}</button>
                                  
                              </x-form-item>
                              
                          </x-form>
                          
                     </x-card-body>
                      
                 </x-card>
                  
              </div>
              
          </div>
          
      </div>
      
     
  </section>
                  
         
  
  
  
  @endsection
          
          
          
    