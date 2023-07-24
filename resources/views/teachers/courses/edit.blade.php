@extends('admin.parent')
@section('title', 'edit')

@section('content')
<!-- Main content -->
<section class="content">
    <div class="container-fluid" style="direction: rtl;">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Edit User</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="POST" action="{{ route("courses.update", $courses->id )}}">
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
                    <label for="name">اسم الدورة</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="أدخل اسم الدورة" value="{{ old('name') ?? $courses->name }}">
                  </div>
                  <div class="form-group">
                    <label for="teacher_name" class="form-lable">اسم الشيخ</label>
                    <input type="text" class="form-control" id="teacher_name" name="teacher_name" placeholder="أدخل اسم الشيخ" value="{{ old('teacher_name') ?? $courses->teacher_name }}">
                  </div>
                  <div class="form-group">
                    <label for="start_date">تاريخ البدء</label>
                    <input type="date" class="form-control" id="start_date" name="start_date" placeholder="أدخل تاريخ البدء" value="{{ old('start_date') ?? $courses->start_date }}">
                  </div>
                  <div class="form-group">
                    <label for="end_date">تاريخ الإنتهاء</label>
                    <input type="date" class="form-control" id="end_date" name="end_date" placeholder="أدخل تاريخ الإنتهاء" value="{{ old('end_date') ?? $courses->end_date }}">
                  </div>
                  <div class="form-group">
                    <label for="time">مدة الدورة</label>
                    <input type="text" class="form-control" id="time" name="time" placeholder="أدخل مدة الدورة" value="{{ old('time') ?? $courses->time }}">
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

