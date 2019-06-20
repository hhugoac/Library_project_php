@extends('layouts.layout')
@section('content')
<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default">
        

      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>List of books</h3></div>
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{ route('book.create') }}" class="btn btn-info" >Add book</a>
            </div>
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             

             <thead>
               <th>Name</th>
               <th>Author</th>
               <th>Category</th>
               <th>Published Date</th>
               <th>User</th>
               <th>Status</th>
               
               <th>Edit</th>
               <th>Delete</th>
             </thead>
             <tbody>
              @if($books->count())  
              @foreach($books as $book)  
              <tr>
                <td>{{$book->name}}</td>
                <td>{{$book->author}}</td>
                <td>{{$book->category_id}}</td>
                <td>{{$book->publish_date}}</td>
                <td>{{$book->user}}</td>
                <th>
                  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal">Change statusl</button>

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
  
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Change status</h4>
      </div>
      <div class="modal-body">
      <div class="checkbox">
      <input type="checkbox" data-toggle="toggle" data-on="Avialable" data-off="Unavialable"
      data-width="100" data-onstyle="success" data-offstyle="danger">
      <script>
          if $('#toggle-trigger').bootstrapToggle('Avialable')
          {
            $('panel-body').hide();
          }
      </script>

      <div class="panel-body">					
					<div class="table-container">
						<form method="POST" action="{{ route('book.update',$book->id) }}"  role="form">
							{{ csrf_field() }}
							<input name="_method" type="hidden" value="PATCH">
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="user" id="user" class="form-control input-sm" value="{{$book->user}}">
									</div>
								</div>
							</div>
							
							<div class="row">

								<div class="col-xs-12 col-sm-12 col-md-12">
									<input type="submit"  value="Update" class="btn btn-success btn-block">
									<a href="{{ route('book.index') }}" class="btn btn-info btn-block" >Go Back!</a>
								</div>	

							</div>
						</form>
					</div>
				</div>
  </label>
</div>
      </div>
      
    </div>
    
  </div>
</div>

</div>

                </th>

                <td><a class="btn btn-primary btn-xs" href="{{action('BookController@edit', $book->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                <td>
                  <form action="{{action('BookController@destroy', $book->id)}}" method="post">
                   {{csrf_field()}}
                   <input name="_method" type="hidden" value="DELETE">

                   <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
                 </td>
               </tr>
               @endforeach 
               @else
               <tr>
                <td colspan="8">There are not registered books yet !!!</td>
              </tr>
              @endif
            </tbody>

          </table>
        </div>
      </div>
      {{ $books->links() }}
    </div>
  </div>
</section>

@endsection