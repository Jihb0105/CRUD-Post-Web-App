
@extends('api.posts.layout')

@section('content')

<!-- content -->
<main class="py-5">
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header card-title">
              <strong>Edit Post</strong>
            </div>           
            <div class="card-body">
              <form action="{{ route('posts.update', $post['id']) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="row">
                    <div class="col-md-12">
                
                        <input type="hidden" name="id" value="{{$post['id']}}">                        
                        <div class="form-group row">
                        <label for="title" class="col-md-3 col-form-label">Title</label>
                        <div class="col-md-9">
                          <input type="text" name="title" value="{{$post['title']}}" id="title" class="form-control ">
                        </div>
                      </div>
                
                      <div class="form-group row">
                        <label for="body" class="col-md-3 col-form-label">Body</label>
                        <div class="col-md-9">
                          <textarea rows="4" cols="100" name="body" value="{{$post['body']}}" id="body" class="form-control "> {{$post['body']}}</textarea>
                        </div>
                      </div>
                
                
                      <div class="form-group row mb-0">
                        <div class="col-md-9 offset-md-3">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <a href="{{ route('posts.index')}}" class="btn btn-outline-secondary">Cancel</a>
                        </div>
                      </div>
                    </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</main>
@endsection

@section('title', 'Post App | Edit post')