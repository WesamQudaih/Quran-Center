@extends('teachers.TeacherHome')
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
                            <h3 class="card-title">إضافة طالب</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST" action="{{ route('teachers.students.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                @if ($errors->any())
                                    <div class="alert alert-danger alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert"
                                            aria-hidden="true">×</button>
                                        <h5><i class="icon fas fa-ban"></i>Validation Error!</h5>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <div class="form-group">
                                    <label for="name" class="form-lable">اسم الطالب</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="أدخل اسم الطالب" value="{{ old('name') }}">
                                </div>
                                <div class="form-group">
                                    <label for="birth_date" class="form-lable">تاريخ ميلاد الطالب</label>
                                    <input type="date" class="form-control" id="birth_date" name="birth_date"
                                        placeholder="أدخل تاريخ ميلاد الطالب" value="{{ old('birth_date') }}">
                                </div>
                                <div class="form-group">
                                    <label for="address" class="form-lable">عنوان الطالب</label>
                                    <input type="text" class="form-control" id="address" name="address"
                                        placeholder="أدخل عنوان الطالب" value="{{ old('address') }}">
                                </div>
                                <div class="form-group">
                                    <label for="phone" class="form-lable">رقم الطالب</label>
                                    <input type="text" class="form-control" id="phone" name="phone"
                                        placeholder="أدخل رقم الطالب" value="{{ old('phone') }}">
                                </div>
                                <div class="form-group">
                                    <label class="form-lable">جنس الطالب</label>
                                      <select class="form-select" name="gender">
                                            <option>ذكر</option>
                                            <option>أنثى</option>
                                      </select>
                                  </div
                                <div class="image">
                                    <label class="form-lable">
                                        <h4>صورة للطالب</h4>
                                    </label>
                                    <input type="file" class="form-control" name="image" value="{{ old('image') }}">
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
