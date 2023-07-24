@extends('admin.parent')

@section('content')
    <div class="content">
        <!-- Content Header (Page header) -->
        <section class="p-3 text-success" style="direction: rtl;">
            <h1> <i class="fa fa-fw fa-user"></i>
                طلاب الدورات
            </h1>
        </section>
        <!-- Main content -->
        <section class="content container">
            <div style="padding: 10px;">
                <a class="btn btn-success btn-lg btn-block col-12" href="{{ route('courses_students.create') }}"
                    role="button">إضــافــة
                    طالب جــديــد<i class="fa fa-fw fa-plus"></i></a>
            </div>
            <div class="col-xs-12">
                <div class="box" style="direction: rtl;">
                    <div class="box-header">
                        <h3 class="box-title">جميع طلاب الدورات</h3>

                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table direction table-hover" style="direction: rtl;">
                            <thead>

                                <tr class="text-center">
                                    <th>#</th>
                                    <th>اسم الطالب</th>
                                    <th>الدورة</th>
                                    <th>الشعبة</th>
                                    <th>الدرجة</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($marks as $marks)
                                    <tr class="text-center">
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $marks->student_id }}</td>
                                        <td>{{ $marks->courses_id }}</td>
                                        <td>{{ $marks->division_id }}</td>
                                        <td>{{ $marks->mark }}</td>
                                        <td style="display: flex; ">
                                            <a href="{{ route('courses_students.edit', $marks->id) }}"
                                                class="btn btn-primary mr-2 ">تعديل</a>
                                            <form action="{{ route('courses_students.destroy', $marks->id) }}" method="POST">
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
