@extends('admin.parent')

@section('content')
    <div class="content">
        <!-- Content Header (Page header) -->
        <section class="p-3 text-success" style="direction: rtl;">
            <h1> <i class="fa fa-fw fa-user"></i>
                المحفظين
            </h1>
        </section>
        <!-- Main content -->
        <section class="content container">
            <div style="padding: 10px;">
                <a class="btn btn-success btn-lg btn-block col-12" href="{{ route('teachers.create') }}"
                    role="button">إضــافــة
                    مــحــفــظ جــديــد<i class="fa fa-fw fa-plus"></i></a>
            </div>
            <div class="col-xs-12">
                <div class="box" style="direction: rtl;">
                    <div class="box-header">
                        <h3 class="box-title">جميع المحفظين</h3>

                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table direction table-hover" style="direction: rtl;">
                            <thead>

                                <tr class="text-center">
                                    <th>رقم المحفظ</th>
                                    <th>اسم المحفظ</th>
                                    <th>عدد طلاب الحلقة</th>
                                    <th>اسم الحلقة</th>
                                    <th>تقييم</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($teachers as $teacher)
                                    <tr class="text-center">
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $teacher->name }}</td>
                                        <td>{{ $teacher->count }}</td>
                                        <td>{{ $teacher->circle->name}}</span></td>
                                        <td>{{ $teacher->evaluation }}</td>
                                        <td style="display: flex; ">
                                            <a href="{{ route('teachers.edit', $teacher->id) }}"
                                                class="btn btn-primary mr-2 ">تعديل</a>
                                            <form action="{{ route('teachers.destroy', $teacher->id) }}" method="POST">
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
