@if(isset($seo))
    @include("admin.components.breadcrumb",["title" => $seo['title'],"tableHeading" => $seo['tableHeading']])
@endif


<div class="row mt-5 text-md">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>{{$seo['tableHeading'] }}</h5>
                @include("admin.user.components.toolbox")
            </div>
            <div class="ibox-content">
                @include("admin.user.components.filter")
                @include("admin.user.components.table")
            </div>
        </div>
    </div>
</div>

