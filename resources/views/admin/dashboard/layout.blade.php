<!DOCTYPE html>
<html>
@include("admin.components.head")
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
