@extends('layouts.Panel')
@section('content')
    <section class="content">

    <div class="box">
            <div class="box-header">
                <h3 class="box-title">کاربران</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                    <div class="row">

                        <div class="col-sm-6">
                            <div id="example1_filter" class="dataTables_filter">
                                <form method="GET" action="{{route('Users.All')}}">
                                    <label>جست و جو: <input type="text" class="form-control input-sm" placeholder="" aria-controls="example1" name="SearchTerm"></label>
                                    <input class="btn btn-info" type="submit" value="جست و جو">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6"></div>
                        <div class="col-sm-6"></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="example2" class="table table-bordered table-hover dataTable" role="grid"
                                   aria-describedby="example2_info">
                                <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1"
                                        colspan="1" aria-sort="ascending"
                                        aria-label="#: activate to sort column descending">#
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                        aria-label="نام: activate to sort column ascending">نام
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                        aria-label="نام خانوادگی: activate to sort column ascending">نام خانوادگی
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                        aria-label="عکس: activate to sort column ascending">عکس
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                        aria-label="عملیات: activate to sort column ascending">عملیات
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($Users as $user)
                                <tr role="row" class="odd">
                                    <td class="sorting_1">{{$user->id}}</td>
                                    <td>{{$user->FirstName}}</td>
                                    <td>{{$user->LastName}}</td>
                                    <td><img src="{{$user->Image}}" width="50" height="50"></td>
                                    <td>
                                        <a href="{{route('Users.Edit' , $user->id)}}">ویرایش</a> |
                                        <a href="{{route('Users.Delete' , $user->id)}}">حذف</a>

                                    </td>
                                </tr>
                                @endforeach


                                </tbody>
                                <tfoot>
                                <tr>
                                    <th rowspan="1" colspan="1">#</th>
                                    <th rowspan="1" colspan="1">نام</th>
                                    <th rowspan="1" colspan="1">لینک</th>
                                    <th rowspan="1" colspan="1">عکس</th>
                                    <th rowspan="1" colspan="1">عملیات</th>
                                </tr>
                                </tfoot>
                            </table>

                            {!! $Users->links() !!}
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>

    </div>
    </section>
@endsection
