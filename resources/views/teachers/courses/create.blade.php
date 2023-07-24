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
                            <h3 class="card-title">إضافة دورة</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST" action="{{ route('courses.store') }}">
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
                                    <label for="name" class="form-lable">اسم الدورة</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="أدخل اسم الدورة" value="{{ old('name') }}">
                                </div>
                                <div class="form-group">
                                    <label for="teacher_name" class="form-lable">اسم الشيخ</label>
                                    <input type="text" class="form-control" id="teacher_name" name="teacher_name"
                                        placeholder="أدخل اسم الشيخ" value="{{ old('teacher_name') }}">
                                </div>
                                <div class="form-group">
                                    <label for="hours" class="form-lable">عدد الساعات</label>
                                    <input type="text" class="form-control" id="hours" name="hours"
                                        placeholder="أدخل عدد الساعات" value="{{ old('hours') }}">
                                </div>
                                <div class="form-group">
                                    <label for="start_date" class="form-lable">تاريخ البدء</label>
                                    <input type="date" class="form-control" id="start_date" name="start_date"
                                        placeholder="أدخل تاريخ البدء" value="{{ old('start_date') }}">
                                </div>
                                <div class="form-group">
                                    <label for="end_date" class="form-lable">تاريخ الإنتهاء</label>
                                    <input type="date" class="form-control" id="end_date" name="end_date"
                                        placeholder="أدخل تاريخ الإنتهاء" value="{{ old('end_date') }}">
                                </div>
                                <div class="form-group" class="form-lable">
                                    <label for="time">مدة الدورة</label>
                                    <input type="text" class="form-control" id="time" name="time"
                                        placeholder="أدخل مدة الدورة" value="{{ old('time') }}">
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

{{-- <select class="form-select form-select-sm" aria-label=".form-select-sm example">
    @foreach ($students as $student)
        <option value="{{ $student->student_id }}">
            {{ $student->name }}
        </option>
    @endforeach
</select> --}}
