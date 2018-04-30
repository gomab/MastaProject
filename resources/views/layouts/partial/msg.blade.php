<!-- Msg Error -->
@if ($errors->any())
    @foreach ($errors->all() as $error)

        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <i class="material-icons">close</i>
            </button>
            <span>
                <b> Danger - </b> {{ $error }}
            </span>
        </div>
    @endforeach
@endif
<!-- End Msg Error -->


<!-- Msg Success -->
@if (session('successMsg'))

    <div class="col-md-4">
        <button class="btn btn-primary btn-block" onclick="showNotification('top','right')">Top Right</button>
    </div>

    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <i class="material-icons">close</i>
        </button>
        <span>
            <b> Success - </b> {{ session('successMsg') }}
        </span>
    </div>
@endif
<!-- End Msg Success -->

@push('script')
    <script>
        function showNotification(from, align){

            $.notify({
                icon: "add_alert",
                message: "Welcome to <b>Brazza Hip-Hop</b> {{ session('successMsg') }}"

            },{
                type: 'success',
                timer: 4000,
                placement: {
                    from: from,
                    align: align
                }
            });
        }
    </script>
@endpush
