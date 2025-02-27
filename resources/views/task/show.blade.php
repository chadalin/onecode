
@extends('template.auth')
  @section('content')
 <section>
      
      <div class="container">
          
          <div class="row">
              
              <div class="col-6 col-md-6 offset-md-3">
<div class="card" style="width: 18rem;">
  <img src="{{$task->img}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">{{$task->content}}</p>
    <a href="{{route('index')}}" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
                  
                  <div class="row">
                      <div class="col-lg-5 col-md-6">
                          <dl>
                      <dt>{{$task->email}}</dt>
                      <dd>{{$task->id}}</dd>
                      <dt>{{$task->telefon}}</dt>
                      <dd>{{$task->dr}}</dd>
                      <dt>Birsdey</dt>
                      <dd>12/12/12</dd>
                      <dt>content</dt>
                      <dd>dfgdfvdfvd</dd>
                          </dl>
                          
                  </div>    
                      
                      <div class="col-lg-5 col-md-6">
                         
                          <p>Foto</p>
                          <div sryle="max-width: 300px; border:1px solid#797979;" 
                               <img src="{{$task->img}}" class="img-fluid" alt="Ajnj bdfyjd">
                      </div>
                  
                  
                    </div>
               </div>       
                  
                  
                    </div>
          </div>
          
      </div>
      
     
  </section>
                  
         
  
  
  
  @endsection
