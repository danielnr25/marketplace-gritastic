<div class="modal fade" id="register-modal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="margin-left: 8rem; color:black" id="registerModalLabel">{{ __("Regístrate en Gritastic") }}</h5>
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
                <form class="register-form" action="{{ route('register') }}" method="POST">
                    @csrf
                    <input type="hidden" name="role" value="{{ \App\Models\User::STUDENT }}" >
                    <input
                        type="text"
                        name="name"
                        value="{{ old('name') }}"
                        placeholder="{{ __('Nombre completo') }}"
                    />
                    <input
                        type="text"
                        name="email"
                        class="last-s"
                        value="{{ old('email') }}"
                        placeholder="{{ __('Correo electrónico') }}"
                    />
                    <input
                        type="password"
                        name="password"
                        placeholder="{{ __("Contraseña") }}"
                    />
                    <input
                        type="password"
                        name="password_confirmation"
                        class="last-s"
                        placeholder="{{ __("Confirma la contraseña") }}"
                    />
                    <button
                        type="submit"
                        class="site-btn btn-block">{{ __("Crear cuenta") }}
                    </button>
                </form>
                <!-- ./login form -->
            </div>
        </div>
    </div>
</div>
