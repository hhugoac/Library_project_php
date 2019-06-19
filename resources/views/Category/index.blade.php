@extends('layouts.layout')
@section('content')
<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>List of categories</h3></div>
         <!--
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{ route('category.create') }}" class="btn btn-info" >Add category</a>
            </div>
          </div>
         -->
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
             <th>Id</th>
               <th>Name</th>
               <th>Description</th>
               <th>Number ob books</th>
               
               

             </thead>
             <tbody>
              @if($categories->count())  
              @foreach($categories as $category)  
              <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->name}}</td>
                <td>{{$category->description}}</td>
                <td>{{$category->manybooks}}</td>
                              </tr>
               @endforeach 
               @else
               <tr>
                <td colspan="8">There are not registered categories yet !!!</td>
              </tr>
              @endif
            </tbody>

          </table>
        </div>
      </div>
      {{ $categories->links() }}
    </div>
  </div>
</section>

@endsection