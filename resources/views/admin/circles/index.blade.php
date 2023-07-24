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

                    {{-- <h1><i class="fa fa-fw fa-server"></i>إضافة حلقة</h1> --}}

                    <div style="padding: 10px;">
                      <a class="btn btn-success btn-lg btn-block col-12" href="{{route('circles.create')}}" role="button">إضــافــة حلقة
                        جــديــدة<i class="fa fa-fw fa-plus"></i></a>
                    </div>
                  </section>

              <h3 class="card-title">الحلقات</h3>

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
                    <th>رقم الحلقة</th>
                    <th>اسم الحلقة</th>
                    <th>نوع الحلقة</th>
                  </tr>
                </thead>
                <tbody>

                    @foreach ($circles as $circle)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $circle->name }}</td>
                        <td>{{ $circle->level }}</td>
                        <td style="display: flex; ">
                            <a href="{{ route('circles.edit', $circle->id) }}" class="btn btn-primary mr-2">تعديل</a>
                            <form action="{{ route('circles.destroy', $circle->id) }}" method="POST" >
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
