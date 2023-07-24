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
                            <h3 class="card-title">تعديل بيانات مستخدم</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST" action="{{ route('users.update', $users->id) }}">
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
                                    <label for="name" class="form-lable">اسم المستخدم</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="أدخل اسم المستخدم" value="{{ old('name') }}">
                                </div>
                                <div class="form-group">
                                    <label for="email" class="form-lable">إيميل المستخدم</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder=""
                                        value="{{ old('email') }}">
                                </div>
                                <div class="form-group">
                                    <label class="form-lable">صنف الطالب</label>
                                    <select class="form-select" name="type">
                                        <option value="2">admin</option>
                                        <option value="1">teacher</option>
                                        <option value="0">user</option>
                                    </select>
                                </div>

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
