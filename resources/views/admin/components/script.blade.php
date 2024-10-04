<!-- Mainly scripts -->
<script src="admin/js/bootstrap.min.js"></script>
<script src="admin/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="admin/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="admin/libs/library.js"></script>

<!-- jQuery UI -->
<script src="admin/js/plugins/jquery-ui/jquery-ui.min.js"></script>

@if(isset($configs['js']) && is_array($configs['js']))
    @foreach($configs['js'] as $js)
        <script src="{{$js}}"></script>
    @endforeach
@endif
