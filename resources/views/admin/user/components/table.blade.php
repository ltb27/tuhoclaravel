<table class="table table-striped table-bordered table-hover customize-table">
    <thead>
    <tr>
        <th>
            <input type="checkbox" name="checkAll" id="checkAl" class="input-checkbox">
        </th>
        <th style="width: 100px">
            Avatar
        </th>
        <th>Họ và Tên</th>
        <th>
            Email
        </th>
        <th>
            Số điện thoại
        </th>
        <th>Địa chỉ</th>
        <th>
            Trạng thái
        </th>
        <th class="text-center">
            Thao tác
        </th>
    </tr>
    </thead>
    <tbody>
    @if(isset($users) && count($users) > 0)
        @foreach($users as $user)
            <tr>
                <td>
                    <input type="checkbox" value="" class="input-checkbox checkBoxItem" name="" id="">
                </td>
                <td>
            <span class="image img-cover">
                <img class="img-circle" {{--class="img-circle img-responsive img-thumbnail img-md"--}}
                src="https://chiemtaimobile.vn/images/companies/1/%E1%BA%A2nh%20Blog/avatar-facebook-dep/Anh-avatar-hoat-hinh-de-thuong-xinh-xan.jpg?1704788263223"
                     alt="">
            </span></td>
                <td>
                    {{$user->full_name}}
                </td>
                <td>
                    {{$user->email}}
                </td>
                <td>
                    {{$user->phone}}
                </td>
                <td>
                    {{$user->address}}

                </td>
                <td class="text-center">
                    <input type="checkbox" class="js-switch" checked/>
                </td>
                <td class="text-center">
                    <div class="d-flex flex-row justify-content-center align-items-center">
                        <a class="btn btn-success"><i class="fa fa-edit"></i></a>
                        <a class="btn btn-danger"><i class="fa fa-trash-o"></i></a>
                    </div>
                </td>
            </tr>
        @endforeach
    @endif

    </tbody>
</table>

{{$users->links('pagination::bootstrap-4')}}
