<x-layout page="B7Web Login Todo">
    <x-slot:btn>
        <a href="{{route('login')}}" class="btn btn-primary">
            Login
        </a>
    </x-slot:btn>

        <section id="task_section">

            <h1>Registro</h1>

            @if ($errors->any())
                <ul class="alert alert-error">
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            @endif


            <form method="POST" action="{{route('user.register_action')}}">
                @csrf
                <x-form.text_input name="name" label="Seu nome"  placeholder="Dígite seu nome" required="required" />

                <x-form.text_input name="email" label="Email"  required="required" type="email"  placeholder="Dígite seu email"/>

                <x-form.text_input name="password" label="Senha"  required="required" type="password"  placeholder="Dígite sua senha"/>

                <x-form.text_input name="password_confirmation" label="Confirme sua senha"  required="required" type="password"  placeholder="Confirme sua senha"/>



                <x-form.form_button resetText="Limpar" submitText="Registrar-se" />

            </form>
        </section>

</x-layout>
