@extends('admin.parent')

@section('content')
<!-- Main content -->
<section class="content">
    <div class="container-fluid" style="direction: rtl;">

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">

                <section class="p-3 text-success" style="direction: rtl;">

                    <h1><i class="fa fa-fw fa-server"></i>إضافة حلقة</h1>

                    <div style="padding: 10px;">
                      <a class="btn btn-success btn-lg btn-block col-12" href="{{route('divisions.create')}}" role="button">إضــافــة شعبة
                        جــديــدة<i class="fa fa-fw fa-plus"></i></a>
                    </div>
                  </section>

              <h3 class="card-title">الشعب</h3>

              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">

                  {{-- <div class="input-group-append">

                  </div> --}}
                </div>

              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap" >
                <thead>
                  <tr>
                    <th>رقم الشعبة</th>
                    <th>اسم الشعبة</th>
                    <th>اسم الدورة</th>
                  </tr>
                </thead>
                <tbody>

                    @foreach ($divisions as $division)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $division->name }}</td>
                        <td >{{ $division->cours_id }}</td>
                        {{-- <td>
                            @foreach ($courses as $course)
                                        <td value="{{ $course->id }}">
                                            {{ $course->name }}
                                        </td>
                                    @endforeach
                        </td> --}}
                        <td style="display: flex; ">
                            <a href="{{ route('divisions.edit', $division->id) }}" class="btn btn-primary mr-2">تعديل</a>
                            <form action="{{ route('divisions.destroy', $division->id) }}" method="POST" >
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
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
@endsection
