@if(isset($seo))
    @include("admin.components.breadcrumb",["title" => $seo['title'],"tableHeading" => $seo['tableHeading']])
@endif

<form class="box form-group" action="">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-5">
                <div class="panel-head">
                    <div class="panel-title">
                        <h5>
                            Thông tin chung
                        </h5>
                    </div>
                    <div class="panel-description">
                        <p>
                            Nhập thông tin chung của người dùng
                        </p>
                        <p class="mt-2 text-xl">
                            Lưu ý: Những trường có dấu <span class="text-danger">(*)</span> là những trường bắt buộc
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="ibox">
                    <div class="ibox-title">
                        <h5>
                            Thông tin chung
                        </h5>
                    </div>
                    <div class="ibox-content">
                        <div class="row mb-4">
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="email" class="control-label text-left">
                                        Email
                                    </label>
                                    <span class="text-danger">
                                        (*)
                                    </span>
                                    <input autocomplete="off" placeholder="Email người dùng" value="" name="email"
                                           type="email"
                                           class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="email" class="control-label text-left">
                                        Họ và tên
                                    </label>
                                    <span class="text-danger">
                                        (*)
                                    </span>
                                    <input
                                        autocomplete="off"
                                        placeholder="Họ và tên"
                                        value=""
                                        name="full_name"
                                        type="text"
                                        class="form-control"
                                    >
                                </div>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="email" class="control-label text-left">
                                        Nhóm thành viên
                                    </label>
                                    <span class="text-danger">
                                        (*)
                                    </span>
                                    <select class="form-control cursor-pointer setup-select-2">
                                        <option value="0">[Lựa chọn nhóm thành viên]</option>
                                        <option value="1">Nhóm thành viên 1</option>
                                        <option value="2">Nhóm thành viên 2</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="birthday" class="control-label text-left">
                                        Ngày sinh
                                    </label>
                                    <input clearabel autocomplete="off" placeholder="Ngày sinh nhật" value=""
                                           name="birthday"
                                           type="date"
                                           class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="password" class="control-label text-left">
                                        Mật khẩu
                                    </label>
                                    <span class="text-danger">
                                        (*)
                                    </span>
                                    <input
                                        placeholder="Mật khẩu"
                                        type="text"
                                        autocomplete="off"
                                        required name="password"
                                        class="form-control"
                                    />
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="birth_day" class="control-label text-left">
                                        Nhập lại mật khẩu
                                    </label>
                                    <span class="text-danger">
                                        (*)
                                    </span>
                                    <input
                                        autocomplete="off"
                                        placeholder="Nhập lại mật khẩu"
                                        value=""
                                        name="re_password"
                                        type="text"
                                        class="form-control"
                                    >
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-row">
                                    <label for="email" class="control-label text-left">
                                        Ảnh đại diện
                                    </label>
                                    <input type="text" autocomplete="off" required name="password"
                                           class="form-control"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr class="my-2">

        <div class="row">
            <div class="col-lg-5">
                <div class="panel-head">
                    <div class="panel-title">
                        <h5>
                            Thông tin liên hệ
                        </h5>
                    </div>
                    <div class="panel-description">
                        Địa chỉ, quê quán, số điện thoại...
                    </div>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="ibox">
                    <div class="ibox-title">
                        <h5>
                            Thông tin liên hệ
                        </h5>
                    </div>
                    <div class="ibox-content">
                        <div class="row mb-4">
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="province_id" class="control-label text-left">
                                        Thành phố/Tỉnh
                                    </label>
                                    <select data-target="district"
                                            class="form-control cursor-pointer setup-select-2 province location"
                                            name="province_id">
                                        <option value="0">
                                            -- Chọn thành/tỉnh --
                                        </option>
                                        @if(isset($provinces))
                                            @foreach($provinces as $province)
                                                <option value="{{$province->code}}">
                                                    {{$province->name}}
                                                </option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="district_id" class="control-label text-left">
                                        Quận/Huyện
                                    </label>
                                    <select data-target="ward"
                                            class="form-control cursor-pointer setup-select-2 district location"
                                            name="district_id">
                                        <option value="0">
                                            -- Chọn quận/huyện --
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="ward_id" class="control-label text-left">
                                        Phường/Xã
                                    </label>
                                    <select class="form-control cursor-pointer setup-select-2 ward"
                                            name="ward_id">
                                        <option value="0">
                                            -- Chọn phường/xã --
                                        </option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="address" class="control-label text-left">
                                        Địa chỉ cụ thể
                                    </label>
                                    <input
                                        autocomplete="off"
                                        placeholder="Địa chỉ cụ thể"
                                        value="" name="address"
                                        type="text"
                                        class="form-control"
                                    >
                                </div>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="phone" class="control-label text-left">
                                        Địa thoại
                                    </label>

                                    <input
                                        type="text"
                                        autocomplete="off"
                                        name="phone"
                                        class="form-control"
                                        placeholder="Số điện thoại"
                                    />
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="descriptions" class="control-label text-left">
                                        Mô tả
                                    </label>
                                    <input
                                        placeholder="Ngày sinh nhật"
                                        value=""
                                        name="descriptions"
                                        type="text"
                                        class="form-control"
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-row-reverse gap-3">
            <a class="btn btn-success rounded-md" href="">
                <i class="fa fa-plus-circle">
                </i>
                Lưu người dùng
            </a>

            <a class="btn btn-default rounded-md" href="{{route("dashboard.index")}}">
                Hủy
            </a>
        </div>
    </div>
</form>
