@extends('template.base')
  @section('content')
   <section>
      
      <div class="container">
          
          <div class="row">
              
              <div class="col-6 col-md-6 offset-md-3">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
       <th scope="col"></th>
       <th scope="col"></th>
       <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    
      @foreach($task as $tasks)
    <tr>
      <th scope="row">{{$tasks->id}}</th>
      <td>{{$tasks->email}}</td>
      <td>{{$tasks->telefon}}</td>
      <td>{{$tasks->dr}}</td>
    <td><a href="{{route('task.show',$tasks->id)}}" class="btn btn-primary">Посмотреть</a></td>
      <td><a href="{{route('task.edit',$tasks->id) }}"class="btn btn-success">Обновить</a></td>
      <td>
      <form action="{{route('task.delete',$tasks->id)}}" method="POST">
      @csrf
      @method('delete')
      <button type='submit' class="btn btn-danger">Удалить</button>
    
  </form>
     </td>
   
   
    
    
    @endforeach
  <a href="{{route('task.create')}}"  class="btn btn-primary">Создать новый</a></form>
  
  </tbody>
</table>
                    </div>
              
          </div>
          
      </div>
      
     
  </section>
                  
         
  
  
  
  @endsection