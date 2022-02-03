@if (Session::has('flash_message') and Session::get('flash_message')!= 'You must be logged in')
    <div class="alert alert-{{ Session::get('flash_message_type') }}">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{ Session::get('flash_message') }}
    </div>
    @section('scripts')
        <script>
            $(document).ready(function() {
                setTimeout(function () {
                    toastr.options = {
                        closeButton: true,
                        progressBar: true,
                        showMethod: 'slideDown',
                        timeOut: 4000
                    };
                    toastr['{{ Session::get('flash_message_type') }}']('{{ Session::get('flash_message') }}', 'GROUP GIFT: ');
                }, 1300);
            })
        </script>
    @endsection
@endif