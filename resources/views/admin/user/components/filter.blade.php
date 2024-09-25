<div class="flex items-center justify-between mb-3  ">
    <select class="min-w-120 border p-2 rounded-md cursor-pointer" name="perpage" id="perpage">
        @for($i=20;$i<200;$i = $i+20)
            <option value="{{$i}}">
                {{$i}} bản ghi
            </option>
        @endfor
    </select>
    <div class="flex items-center justify-between gap-4">
        <select class="min-w-fit border p-2 rounded-md cursor-pointer" name="" id="">
            <option selected value="">chọn nhóm thành viên</option>
            <option value="">chọn nhóm 2</option>
            <option value="">chọn nhóm 3</option>
        </select>
        <div class="flex justify-between items-center">
            <input class="p-2 border focus:border-b-blue-500 rounded-md w-300" type="text"
                   placeholder="Tìm kiếm thành viên">
            <a style="margin-bottom: 0 !important;" class="btn btn-success"><i
                        class="fa fa-search"></i> Tìm kiếm</a>
        </div>
        <a style="margin-bottom: 0 !important;" class="btn btn-primary"><i
                    class="fa fa-plus"></i>
            Thêm mới thành viên
        </a>
    </div>
</div>