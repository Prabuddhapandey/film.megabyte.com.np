@extends('admin.layouts.app')
@section('destination')
<main id="main" class="main">
    <div class="pagetitle">
      <h1>Data Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a>Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create Award</div>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form method="post" action={{url('admin/store/award')}} enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Award Name</label>
                                <input type="text" name="award_name" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="">Images</label>
                                <input type="file" name="award_image" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="">Award Date</label>
                                <input type="string" name="date" class="form-control" required>
                            </div>


                          
                            <button type="submit" class="btn btn-primary">Create Destination</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
@endsection