<div class="flex items-center justify-between mb-4">
    <select class="min-w-120 border h-[34px] p-3 rounded-md cursor-pointer" name="perpage" id="perpage">
        @for($i=20;$i<200;$i = $i+20)
            <option value="{{$i}}">
                {{$i}} bản ghi
            </option>
        @endfor
    </select>
    <div class="flex items-center justify-between gap-4">
        <select class="min-w-fit border h-[34px] p-3 rounded-md cursor-pointer" name="" id="">
            <option selected value="">chọn nhóm thành viên</option>
            <option value="">chọn nhóm 2</option>
            <option value="">chọn nhóm 3</option>
        </select>
        <div class="flex justify-between items-center gap-2">
            <input class="rounded-lg w-300 border h-[34px] p-3" type="text"
                   placeholder="Tìm kiếm thành viên">

            <a style="margin-bottom: 0 !important;" class="btn btn-success rounded-lg"><i
                    class="fa fa-search"></i> Tìm kiếm</a>
        </div>
        <a href="{{route("user.create")}}" style="margin-bottom: 0 !important;" class="btn btn-primary rounded-lg"><i
                class="fa fa-plus"></i>
            Thêm mới thành viên
        </a>
    </div>
</div>
