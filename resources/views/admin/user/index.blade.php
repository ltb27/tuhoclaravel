@include("admin.user.components.breadcrumb")
<div class="row mt-5 text-md">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>{{config("apps.user.userTableName")}}</h5>
                @include("admin.user.components.toolbox")
            </div>
            <div class="ibox-content">
                @include("admin.user.components.filter")
                @include("admin.user.components.table")
            </div>
        </div>
    </div>
</div>

