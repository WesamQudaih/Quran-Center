@extends('admin.parent')
@section('title', 'edit')

@section('content')
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">تعديل بيانات حلقة</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="POST" action="{{ route("circles.update", $circles->id )}}" style="direction: rtl;">
                @method('PUT')
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
                    <label for="name">اسم الحلقة</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="أدخل اسم الحلقة" value="{{ old('name') ?? $circles->name }}">
                  </div>
                <div class="form-group">
                  <label for="level">نوع الحلقة</label>
                  <select class="form-control" name="level" value="{{ old('level') ?? $circles->level }}">
                        <option>تطوع</option>
                        <option>مكفولة</option>
                    </select>
                </div>
              </div>
              <!-- /.card-body -->

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

