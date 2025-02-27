  @extends('template.auth')
  @section('content')
 
  
 
                  
            <section>
      
      <div class="container">
          
          <div class="row">
              
              <div class="col-12 col-md-6 offset-md-3">
                  
              <x-card>
                      
                      <x-card-header>
                          
                          <h4 class="m-0">
                              
                              {{__('Добавить новуюзадачу')}}
                              
                          </h4>
                          
                      </x-card-header>
                     
                     <x-slot name="right">   
                         
                    <a href="{{route('task.store')}}">{{__('Регистрация')}}</a>
                    
                     </x-slot>
                      
                      <x-card-body>
                          
                          <x-form action="{{route('task.update',1)}}" enctype="multipart/form-data" method="POST">
                              
                              @csrf
                              @method('PATCH')
                              
                              <x-form-item>
                                  
                                  <x-label reguired >{{ __('title')}}</x-label>
                                  
                                  <input type="title" name="title" value="title" class="form-control" autofocus>
                                  
                              </x-form-item>
                              
                              <x-form-item>
                                  
                                  <x-label required >{{ __('content')}}</x-label>
                                  
                                  <input type="content" name="content" value = "content" class="form-control" >
                                  
                              </x-form-item>
                              
                               <x-form-item>
                                  
                                  <x-label reguired >{{ __('Email')}}</x-label>
                                  
                                  <input type="name" name="name" value="name" class="form-control" autofocus>
                                  
                              </x-form-item>
                              
                               <x-form-item>
                                  
                                  <x-label reguired >{{ __('Дата родения')}}</x-label>
                                  
                                  <input type="date" name="dr" class="form-control" autofocus>
                                  
                              </x-form-item>
                              
                               <x-form-item>
                                  
                                   <div class="col-12 mb-3">
                                  <x-label reguired >{{ __('Фото')}}</x-label>
                                  
                                  <input type="file" name="img" class="form-control" accept="image/phg, image/jpeg, image/jpg" >
                                   </div>
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
          
          
          
  