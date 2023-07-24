@extends('admin.parent')
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
                            <h3 class="card-title">تعديل بيانات نشاط</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST" action="{{ route('activities.update', $activities->id) }}" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
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
                                    <label for="title" class="form-lable">اسم النشاط</label>
                                    <input type="text" class="form-control" id="title" name="title"
                                        placeholder="أدخل اسم النشاط" value="{{ old('title') ?? $activities->title }}">
                                </div>
                                <div class="form-group" class="form-lable">
                                    <label for="description" class="form-lable">وصف النشاط</label>
                                    <input type="text" class="form-control" id="description" name="description"
                                        placeholder="أدخل وصف النشاط" value="{{ old('description') ?? $activities->description }}">
                                </div>
                                <div class="form-group" class="form-lable">
                                    <label for="circle_id">رقم الحلقة</label>
                                    <select class="form-control" name="circle_id">
                                        @foreach ($circles as $circle)
                                            <option value="{{ $circle->id }}">{{ $circle->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="date" class="form-lable">تاريخ النشاط</label>
                                    <input type="date" class="form-control" id="date" name="date"
                                        placeholder="أدخل تاريخ النشاط" value="{{ old('date') ?? $activities->date  }}">
                                </div>
                                <div class="form-group">
                                    <label class="form-lable" for="image">
                                        <h4>صورة للنشاط</h4>
                                    </label>
                                    <div class="input-group">
                                        <input type="file" class="form-control" name="image" id="image"
                                            value="{{ old('image') ?? $activities->image}}">
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
