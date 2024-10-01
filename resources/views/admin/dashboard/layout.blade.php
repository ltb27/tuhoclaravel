<!DOCTYPE html>
<html>
@if(isset($seo))
    @include("admin.components.head",["title" => $seo['title']])
@else
    @include("admin.components.head")
@endif

<body>
<div id="wrapper">
    @include("admin.components.sidebar")
    <div id="page-wrapper" class="gray-bg">
        @include("admin.components.navbar")
        @include($content)
        @include("admin.components.footer")
    </div>
</div>
@include("admin.components.script")
</body>
</html>
