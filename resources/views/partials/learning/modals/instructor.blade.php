<div class="modal fade" id="instructor-modal" tabindex="-1" role="dialog" aria-labelledby="instructorModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="margin-left: 6rem; color:black" id="instructorModalLabel">{{ __("¿Quieres vender en Gritastic?") }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @if(session('error-login'))
                <div class="form-errors">
                    <p>{{ session('error-login') }}</p>
                </div>
                @endif
                <!-- login form -->
                <form class="signup-form" id="teacher-form" action="{{ route('register') }}" method="POST">
                    @csrf
                    <input type="hidden" name="role" value="{{ \App\Models\User::TEACHER }}">
                    <input
                        autocomplete="off"
                        name="name"
                        value="{{old("name")}}"
                        type="text"
                        placeholder="{{ __("Nombre") }}"
                    />
                    <input
                        autocomplete="off"
                        name="email"
                        value="{{old("email")}}"
                        type="text"
                        placeholder="{{ __("Correo electrónico") }}"
                    />
                    <input
                        autocomplete="off"
                        name="password"
                        type="password"
                        placeholder="{{ __("Contraseña") }}"
                    />
                    <input
                        autocomplete="off"
                        name="password_confirmation"
                        type="password"
                        placeholder="{{ __("Confirma tu contraseña") }}"
                    />
                    <button
                        class="site-btn btn-block">{{ __("Crear cuenta") }}
                    </button>
                </form>
                <!-- ./login form -->
            </div>
        </div>
    </div>
</div>

@push("js")
    <script>
        jQuery(document).ready(function () {
           $("#teacher-form").on("click", function (e) {
               e.preventDefault()
               const fields = ['name', 'email', 'password', 'password_confirmation'];
               fields.map(field => jQuery(`#teacher-form input[name=${field}]`)
               .removeClass('field-is-invalid'));
               jQuery.ajax({
                   method:"POST",
                   url: "{{ route('register') }}",
                   data: $(this).serialize(),
                   success: function(data) {
                       const message = data.message;
                       $("#success-teacher-signup").show().html(`<p>${message}</p>`);
                       setTimeout(() => {
                           window.location.href = '/';
                       }, 3000);
                   },
                   error: function(error) {
                        const teacherForm = jQuery("#teacher-form");
                        const errors = JSON.parse(error.responseText);
                        if (errors.hasOwnProperty('errors')) {
                            for (let error in errors.errors) {
                                teacherForm
                                .find(`input[name=${error}]`)
                                .addClass('field-is-invalid');
                                if (error == 'password') {
                                    teacherForm
                                        .find(`input[name=password_confirmation]`)
                                        .addClass('field-is-invalid');
                                }
                            }
                        }
                   }
               });
           });
        });
    </script>
@endpush
