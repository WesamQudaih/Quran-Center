@extends('teachers.TeacherHome')

@section('content')
    <div class="content">
        <!-- Content Header (Page header) -->
        <section class="p-3 text-success" style="direction: rtl;">
            <h1> <i class="fa fa-fw fa-user"></i>
                الطلاب
            </h1>
        </section>
        <!-- Main content -->
        <section class="content container">
            <div style="padding: 10px;">
                <a class="btn btn-success btn-lg btn-block col-12" href="{{ route('teachers.students.create') }}"
                    role="button">إضــافــة
                    طالب جــديــد<i class="fa fa-fw fa-plus"></i></a>
            </div>
            <div class="col-xs-12">
                <div class="box" style="direction: rtl;">
                    <div class="box-header">
                        <h3 class="box-title">جميع الطلاب</h3>

                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table direction table-hover" style="direction: rtl;">
                            <thead>

                                <tr class="text-center">
                                    <th>رقم الطالب</th>
                                    <th>اسم الطالب</th>
                                    <th>تاريخ ميلاد الطالب</th>
                                    <th>صنف الطالب</th>
                                    <th>عنوان الطالب</th>
                                    <th>رقم الطالب</th>
                                    <th>صورة الطالب</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($students as $student)
                                    <tr class="text-center">
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $student->name }}</td>
                                        <td>{{ $student->birth_date }}</td>
                                        <td>{{ $student->gender }}</td>
                                        <td>{{ $student->address }}</td>
                                        <td>{{ $student->phone }}</td>
                                        <td>
                                            <img src="{{ url('public/Image/' . $student->image) }}"
                                                style="height: 100px; width: 150px;">
                                        </td>
                                        <td style="display: flex; ">
                                            <a href="{{ route('teachers.students.edit', $student->id) }}"
                                                class="btn btn-primary mr-2 ">تعديل</a>
                                            <form action="{{ route('teachers.students.destroy', $student->id) }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger">حذف</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>


                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
