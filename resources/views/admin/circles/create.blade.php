@extends('admin.parent')
@section('title', 'Create')

@section('content')
<!-- Main content -->
<section class="content" >
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">إنشاء حلقة</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="POST" action="{{ route("circles.store")}}" style="direction: rtl;">
                @csrf
              <div class="card-body">
                @if ($errors->any())
                  <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fas fa-ban"></i>Validation Error!</h5>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                  </div>
                @endif
                <div class="form-group">
                    <label for="name" class="form-lable">اسم الحلقة</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="ادخل اسم الحلقة" value="{{ old('name') }}">
                  </div>
                  <div class="form-group">
                    <label class="form-lable">نوع الحلقة</label>
                      <select class="form-select" name="level">
                            <option>تطوع</option>
                            <option>مكفولة</option>
                      </select>
                  </div
              </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
@endsection
