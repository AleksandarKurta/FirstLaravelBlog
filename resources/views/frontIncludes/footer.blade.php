<div class="container-fluid bg-dark pt-5 pb-3">
        <div class="row justify-content-center">
            <div class="col-md-4 text-center">
                <h2>Lorem ipsum dolor sit amet</h2>
                <div class="underline-light-green mb-3"></div>
                    <p>
                        {{ $settings->footer_information }}
                    </p> 
            </div>
        </div>

        <div class="container h-100 mt-5 border-top border-secondary">
            <div class="row h-100 justify-content-center align-items-center pt-3">
                <div class="col-md-4 d-flex align-items-center">
                    <i class="fas fa-phone-square fa-7x"></i>&nbsp;&nbsp;
                    {{ $settings->contact_number }}
                </div>
                <div class="col-md-4 d-flex align-items-center">
                    <i class="fas fa-envelope-open-text fa-7x"></i>&nbsp;&nbsp;
                    {{ $settings->contact_email }}
                </div>
                <div class="col-md-4 d-flex align-items-center">
                    <i class="fas fa-globe-europe fa-7x"></i>&nbsp;&nbsp;
                    {{ $settings->address }}
                </div>
            </div>
        </div>
    </div>

<script src="{{ asset('js/app.js') }}"></script>
<script>
    @if(Session::has('subscribed'))
        toastr.success("{{ Session::get('subscribed') }}");
    @endif
</script>    
</body>
</html>