

  @extends('template.base')
  @section('content')
  
  <section>
      
      <div class="container">
          
          <div class="row">
              
              <div class="col-12 col-md-6 offset-md-3">
                  
          1     <div class='card'>
                      
                      <div class="card-body">
                          
                          <h4 class="m-0">
                              
                              {{__('Регистрация')}}
                              
                          </h4>
                          
                      </div>
                      
                      <x-card-body>
                          
                          <x-form action="{{route('register.store')}}" method="POST">
                              
                              <input type="hidden" name="_token" value="{{csrf_token()}}">
                               
                                   @csrf
                                 
                              <x-form-item>
                                  
                                  <x-label reguired >{{ __('Email')}}</x-label>
                                  
                                  <input type="email" name="email" value="email" class="form-control" autofocus>
                                  
                              </x-form-item>
                              
                              
                                <x-form-item>
                                  
                                  <x-label reguired >{{ __('Имя')}}</x-label>
                                  
                                  <input type="name" name="name" value="name" class="form-control" >
                                  
                              </x-form-item>
                              
                              <x-form-item>
                                  
                                  <x-label required >{{ __('Password')}}</x-label>
                                  
                                  <input type="password" name="password" value="password" class="form-control" >
                                  
                              </x-form-item>
                              
                              
                              <x-form-item>
                                  
                                  <x-label required >{{ __('Еще раз')}}</x-label>
                                  
                                  <input type="password" name="password-confirm" value="password_confirm" class="form-control" >
                                  
                              </x-form-item>
                               
                                  <x-form-item>
                                      
                                      <x-chekbox name="rememder">
                                          
                                          {{__('Я согласен на обработку данных')}}
                                         
                                         </x-chekbox>
                                       
                                       </x-form-item>
                              
                              
                                <x-form-item>
                                  
                                  
                                  <x-button type='submit'  >{{__('Войти в систему')}}</x-button>
                                  
                              </x-form-item>
                              
                          </x-form>
                          
                     </x-card-body>
                      
          1      </div>
          
                  
              </div>
              
          </div>
          
      </div>
      
  </section>
  
  
  @endsection
          
          
          
    
          
          
    