@extends('admin.parent')

@section('content')
    <div class="content">
        <!-- Content Header (Page header) -->
        <section class="p-3 text-success" style="direction: rtl;">
            <h1> <i class="fa fa-fw fa-user"></i>
                المستخدمين
            </h1>
        </section>
        <!-- Main content -->
        <section class="content container">
            <div style="padding: 10px;">
                <a class="btn btn-success btn-lg btn-block col-12" href="{{ route('users.create') }}"
                    role="button">إضــافــة
                    مستخدم جــديــد<i class="fa fa-fw fa-plus"></i></a>
            </div>
            <div class="col-xs-12">
                <div class="box" style="direction: rtl;">
                    <div class="box-header">
                        <h3 class="box-title">جميع المستخدمين</h3>

                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table direction table-hover" style="direction: rtl;">
                            <thead>

                                <tr class="text-center">
                                    <th>اسم المستخدم</th>
                                    <th>إيميل المستخدم</th>
                                    <th>صنف الطالب</th>
                                    <th>تاريخ الإضافة</th>
                                    <th>تاريخ التعديل</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($users as $user)
                                    <tr class="text-center">
                                        <td>{{ $user->index + 1 }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->type }}</td>
                                        <td>{{ $user->created_at }}</td>
                                        <td>{{ $user->updated_at }}</td>
                                        <td style="display: flex; ">
                                            <a href="{{ route('users.edit', $user->id) }}"
                                                class="btn btn-primary mr-2 ">تعديل</a>
                                            <form action="{{ route('users.destroy', $user->id) }}" method="POST">
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
