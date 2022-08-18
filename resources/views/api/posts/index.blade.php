@extends('api.posts.layout')

@section('content')

<main class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="card"> 
              <div class="card-header card-title">
                <div class="d-flex align-items-center">
                  <h2 class="mb-0">All Posts</h2>
                  <div class="ml-auto">
                    <a href="{{route('posts.create')}}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Add New</a>
                  </div>
                </div>
              </div>
            <div class="card-body">
              <table class="table table-striped table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">User Id</th>
                    <th scope="col">Title</th>       
                    <th scope="col">Body</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @if($message = session('message') )
                    <div class="alert alert-success">{{ $message }}</div>
                  @endif
                  @foreach ($posts as $post)
                    <tr>
                        <th scope="row">{{ $post['id']}}</th>
                        <th>{{ $post['user_id']}}</th>
                        <td>{{ $post['title'] }}</td>
                        <td>{{ $post['body'] }}</td>
                        <td width="150">
                            <a href="{{route('posts.show', $post['id'])}}" class="btn btn-sm btn-circle btn-outline-info" title="Show"><i class="fa fa-eye"></i></a>
                            <a href="{{route('posts.edit', $post['id'])}}" class="btn btn-sm btn-circle btn-outline-secondary" title="Edit"><i class="fa fa-edit"></i></a>
                            <form  id="inner" method="post" action={{route('posts.destroy', $post['id'])}}>
                              @csrf
                              @method('DELETE')
                                <button style="margin-left:70px; margin-top:-58px" class="btn-delete btn btn-sm btn-circle btn-outline-danger"><i class="fa fa-times"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
              </table>
              <div style="margin-left: 40%">
                  {{ $posts->links() }}
              </div> 

            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection