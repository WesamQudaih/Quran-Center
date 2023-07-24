@extends('teachers.TeacherHome')
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
                            <h3 class="card-title">تعديل بيانات الحفظ</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST" action="{{ route('teachers.achievements.update', $achievements->id) }}">
                            @method('PUT')
                            @csrf
                            <input type="hidden" name="id" value="{{ $achievements->id }}">
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
                                    <label class="form-lable">اسم الطالب</label>
                                    <select class="form-control" name="student_id">
                                        @foreach ($students as $student)
                                            <option value="{{ $student->id }}">{{ $student->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="date" class="form-lable">التاريخ </label>
                                    <input type="date" class="form-control" id="date" name="date"
                                        placeholder="أدخل تاريخ اليوم" value="{{ old('date') ?? $achievements->date }}">
                                </div>
                                <div class="form-group">
                                    <label for="day" class="form-lable">اسم اليوم</label>
                                    <select class="form-select" name="day">
                                        <option>السبت</option>
                                        <option>الأحد</option>
                                        <option>الإثنين</option>
                                        <option>الثلاثاء</option>
                                        <option>الأربعاء</option>
                                        <option>الخميس</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="surah" class="form-lable">السورة</label>
                                    <input type="text" class="form-control" id="surah" name="surah"
                                        placeholder="أدخل اسم السورة" value="{{ old('surah') ?? $achievements->surah }}">
                                </div>
                                <div class="form-group">
                                    <label for="count" class="form-lable">مقدار التسميع</label>
                                    <input type="text" class="form-control" id="count" name="count"
                                        placeholder="من 1-10" value="{{ old('count') ?? $achievements->count }}">
                                </div>
                                <div class="form-group">
                                    <label for="type_active" class="form-lable">النوع</label>
                                    <select class="form-select" name="type_active">
                                        <option>حفظ</option>
                                        <option>مراجعة</option>
                                        <option>حفظ + مراجعة</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-lable">تقييم الحفظ</label>
                                    <select class="form-control" name="evaluation">
                                        <option selected>0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="note" class="form-lable">ملاحظة</label>
                                    <input type="text" class="form-control" id="note" name="note"
                                        placeholder="ملاحظة عن إنجاز الطالب"
                                        value="{{ old('note') ?? $achievements->note }}">
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
