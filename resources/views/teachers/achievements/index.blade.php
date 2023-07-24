@extends('teachers.TeacherHome')

@section('text')
    <div class="content">
        <!-- Content Header (Page header) -->
        <section class="p-3 text-success" style="direction: rtl;">
            <h1> <i class="fa fa-fw fa-user"></i>
                السجل اليومي
            </h1>
        </section>
        <!-- Main content -->
        <section class="content container">
            <div style="padding: 10px;">
                <a class="btn btn-success btn-lg btn-block col-12" href="{{ route('teachers.achievements.create') }}"
                    role="button">تسجيل
                    تسميع لطالب<i class="fa fa-fw fa-plus"></i></a>
            </div>
            <div class="col-xs-12">
                <div class="box" style="direction: rtl;">
                    <div class="box-header">
                        <h3 class="box-title">السجل</h3>

                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table direction table-hover" style="direction: rtl;">
                            <thead>

                                <tr class="text-center">
                                    <th>#</th>
                                    <th>اسم الطالب</th>
                                    <th>التاريخ</th>
                                    <th>اليوم</th>
                                    <th>السورة</th>
                                    <th>التسميع</th>
                                    <th>النوع</th>
                                    <th>التقييم</th>
                                    <th>الملاحظات</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($achievements as $achievement)
                                    <tr class="text-center">
                                        <td>{{ $achievement->id }}</td>
                                        <td>{{ $achievement->student->name }}</td>
                                        <td>{{ $achievement->date }}</td>
                                        <td>{{ $achievement->day }}</td>
                                        <td>{{ $achievement->surah }}</td>
                                        <td>{{ $achievement->count }}</td>
                                        <td>{{ $achievement->type_active }}</td>
                                        <td>{{ $achievement->evaluation }}</td>
                                        <td>{{ $achievement->note }}</td>
                                        <td style="display: flex; ">
                                            <a href="{{ route('teachers.achievements.edit', $achievement->id) }}"
                                                class="btn btn-primary mr-2 ">تعديل</a>
                                            <form action="{{ route('teachers.achievements.destroy', $achievement->id) }}"
                                                method="POST">
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




