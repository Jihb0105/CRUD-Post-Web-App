@extends('api.posts.layout')

@section('content')
<!-- content -->
<main class="py-5">
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header card-title">
              <strong>Post Details</strong>
            </div>           
            <div class="card-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <label for="first_name" class="col-md-3 col-form-label">Title</label>
                    <div class="col-md-9">
                      <p class="form-control-plaintext text-muted">{{ $post['title'] }}</p>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="last_name" class="col-md-3 col-form-label">Body</label>
                    <div class="col-md-9">
                      <p class="form-control-plaintext text-muted">{{ $post['body'] }}</p>
                    </div>
                  </div>

                  <div class="form-group row mb-0">
                    <div class="col-md-9 offset-md-3">
                        <a href="{{route('posts.index')}}" class="btn btn-info">Back</a>
                        
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</main>

@endsection