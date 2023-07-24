@extends('teachers.TeacherHome')

@section('content')
    <div class="content">
        <!-- Content Header (Page header) -->
        <section class="p-3 text-success" style="direction: rtl;">
            <h1> <i class="fa fa-fw fa-user"></i>
                الأنشطة
            </h1>
        </section>
        <!-- Main content -->
        <section class="content container">
            <div style="padding: 10px;">
                <a class="btn btn-success btn-lg btn-block col-12" href="{{ route('teachers.activities.create') }}"
                    role="button">إضــافــة
                    نشاط جــديــد<i class="fa fa-fw fa-plus"></i></a>
            </div>
            <div class="col-xs-12">
                <div class="box" style="direction: rtl;">
                    <div class="box-header">
                        <h3 class="box-title">جميع الأنشطة</h3>

                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table direction table-hover" style="direction: rtl;">
                            <thead>

                                <tr class="text-center">
                                    <th>رقم النشاط</th>
                                    <th>اسم النشاط</th>
                                    <th>وصف النشاط</th>
                                    <th>الحلقة</th>
                                    <th>تاريخ النشاط</th>
                                    <th>صورة للنشاط</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($activities as $activity)
                                    <tr class="text-center">
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $activity->title }}</td>
                                        <td>{{ $activity->description }}</td>
                                        <td>{{ $activity->circle->name }}</td>
                                        <td>{{ $activity->date }}</td>
                                        <td>
                                            <img src="{{ url('public/' . $activity->image) }}"
                                                style="height: 100px; width: 150px;">
                                        </td>
                                        <td style="display: flex; ">
                                            <a href="{{ route('teachers.activities.edit', $activity->id) }}"
                                                class="btn btn-primary mr-2 ">تعديل</a>
                                            <form action="{{ route('teachers.activities.destroy', $activity->id) }}" method="POST">
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
