@extends('admin.parent')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content">
        <!-- Content Header (Page header) -->
        <section class="p-3 text-success" style="direction: rtl;">

            <h1><i class="fa fa-fw fa-server"></i> الدورات الحالية </h1>

            <div style="padding: 10px;">
                <a class="btn btn-success btn-lg btn-block col-12" href="{{ route('courses.create') }}"
                    role="button">إضــافــة دورة
                    جــديــدة<i class="fa fa-fw fa-plus"></i></a>
            </div>
        </section>

        <!-- Main content -->
        <section class="content container" style="direction: rtl;">
            <div class="box ">
                <div class="box-body no-padding">
                    <table class="table direction table-striped">
                        @foreach ($courses as $course)
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="box collapsed-box">
                                            <div class="box-header with-border">
                                                <a href="#">
                                                    <h3 class="box-title text ">
                                                        <i class="fa fa-fw fa-server"></i> {{ $course->name }}
                                                    </h3>
                                                </a>
                                                {{-- <h4>شعبة :{{ $course->id }}</h4> --}}

                                                <div class="box-tools pull-right">
                                                    <button type="button" class="btn btn-success box-title "
                                                        data-widget="collapse" data-toggle="tooltip" title=""
                                                        data-original-title="Collapse">
                                                        <i class="fa fa-plus"></i> عرض التفاصيل</button>

                                                </div>
                                            </div>
                                            <div class="box-body" style="display: none;">
                                                <div class="col-xs-12">
                                                    <div class="box">
                                                        <div class="box-header">
                                                            <h6>معلومات الدورة</h6>
                                                            <table class="table direction table-hover">
                                                                <tr class="text-center">
                                                                    <th>
                                                                        اسم الشيخ:
                                                                    </th>
                                                                    <th> تاريخ بدء الدورة</th>
                                                                    <th>تاريخ إنتهاء الدورة </th>
                                                                    <th>عدد الساعات</th>
                                                                    <th>مدة الدورة</th>
                                                                    {{-- <th> الشعبة:</th> --}}

                                                                </tr>
                                                                <tr class="text-center">
                                                                    <td>{{ $course->teacher_name }}</td>
                                                                    <td>{{ $course->start_date }}</td>
                                                                    <td>{{ $course->end_date }}</td>
                                                                    <td>{{ $course->hours }}</td>
                                                                    <td>{{ $course->time }}</td>
                                                                    {{-- <td>{{ $course->id }}</td> --}}
                                                                </tr>
                                                            </table>
                                                        </div>
                                                        <!-- /.box-header -->
                                                        <div class="box-body table-responsive no-padding">

                                                            <table class="table direction table-hover">
                                                                {{-- <tbody>
                                                                    <h6>معلومات الطلاب </h6>
                                                                    <tr class="text-center">

                                                                        <th>إسم الطالب</th>
                                                                        <th>درجة الإختبار</th>
                                                                    </tr>
                                                                    <button type="button" class="btn btn-primary"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#exampleModal"
                                                                        data-bs-whatever="@mdo">إضافة طالب
                                                                    </button>
                                                                    <tr class="text-center">
                                                                        <td>{{ $course->id }}</td> --}}
                                                                        {{-- <td>{{$course->students->student_id}}</td>
                                                                        <td>
                                                                            <select class="form-select form-select-sm"
                                                                                aria-label=".form-select-sm example">
                                                                                @foreach ($students as $student)
                                                                                    <option
                                                                                        value="{{ $student->student_id }}">
                                                                                        {{ $student->name }}
                                                                                    </option>
                                                                                @endforeach
                                                                            </select>
                                                                        </td>
                                                                        <td>{{ $course->mark }}</td>

                                                                    </tr>
                                                                </tbody> --}}
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        @endforeach
                    </table>
                </div>

            </div>
        </section>
    </div>
@endsection
