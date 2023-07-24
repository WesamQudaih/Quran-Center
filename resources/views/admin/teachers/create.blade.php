@extends('admin.parent')
@section('title', 'Create')

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
              <h3 class="card-title">إضافة محفظ</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="POST" action="{{ route("teachers.store")}}">
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
                    <label for="name" class="form-lable">اسم المحفظ</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="أدخل اسم المحفظ" value="{{ old('name') }}">
                  </div>
                  <div class="form-group">
                    <label for="count" class="form-lable">عدد الطلاب</label>
                    <input type="text" class="form-control" id="count" name="count" placeholder="أدخل عدد الطلاب" value="{{ old('count') }}">
                  </div>
                  <div class="form-group">
                    <label class="form-lable">اسم الحلقة</label>
                      <select class="form-control" name="circle_id">
                        @foreach ($circles as $circle)
                            <option value="{{ $circle->id }}">{{ $circle->name }}</option>
                        @endforeach
                      </select>
                  </div>
                  <div class="form-group">
                    <label class="form-lable">تقييم المحفظ</label>
                    <select class="form-control" name="evaluation">
                      <option selected>0</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                    </select>
                    </div>
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
