<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-8">
        <h2>{{config("apps.user.title")}}</h2>
        <ol class="breadcrumb" style="margin-bottom:10px;">
            <li>
                <a href="{{route("dashboard.index")}}">Dashboard</a>
            </li>
            <li class="active">
                <strong>{{config("apps.user.title")}}</strong>
            </li>
        </ol>
    </div>
</div>

<div class="row mt-5">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>{{config("apps.user.userTableName")}}</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-wrench"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#">Config option 1</a>
                        </li>
                        <li><a href="#">Config option 2</a>
                        </li>
                    </ul>
                    <a class="close-link">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                <table class="table table-striped table-bordered table-hover customize-table">
                    <thead>
                    <tr>
                        <th>
                            <input type="checkbox" name="checkAll" id="checkAl" class="input-checkbox">
                        </th>
                        <th>
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
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <input type="checkbox" value="" class="input-checkbox checkBoxItem" name="" id="">
                        </td>
                        <td>
                            <span class="image">
                                <img class="img-circle img-responsive img-thumbnail img-md"
                                     src="https://chiemtaimobile.vn/images/companies/1/%E1%BA%A2nh%20Blog/avatar-facebook-dep/Anh-avatar-hoat-hinh-de-thuong-xinh-xan.jpg?1704788263223"
                                     alt="">
                            </span></td>
                        <td>
                            Lê Tuấn Bảo
                        </td>
                        <td>
                            letuanbao@mgg8.onmicrosoft.com
                        </td>
                        <td>
                            0379496709
                        </td>
                        <td class="text-navy"><i class="fa fa-level-up"></i> 40%</td>
                        <td>
                            <input type="checkbox" class="js-switch" checked/>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        const elem = document.querySelector('.js-switch');
        var switchery = new Switchery(elem, {color: '#1AB394'});
    })
</script>