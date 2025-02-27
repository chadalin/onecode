@extends('template.base')


@section('content')

<x-section>
    
          <div class="container" >
              
              
              <form action="{{route('blog.create')}}" method="get">
       
              <x-button type="submit">
                  
                  {{__('Создать')}}
                  
              </x-button>
                  
              </form>
              
              <x-container>
                  
                  <x-title>
                      
                       {{__('Cписок, блогов')}}
                      
                  </x-title>
                  
                  
                  <div class="row">
                      
                       @if(empty($posts))
                       
                   {{__('Нет ни одного поста')}}
    </div>
                @else
      <div 
    
           
         <div class="row">
                 @foreach ($posts as $post)
                 
                     <div class="col-12 col-md-4">
                     
                      <x-post.card :post="$post" />
                     
                               </div>
                     
                        @endforeach
              
                         </div>
          
                       @endif              
                 
                    </div>
                     
               
                    </x-container>  
              
                </x-section>
                     
              @endsection        
                  
              
              
              


