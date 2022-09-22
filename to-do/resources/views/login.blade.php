<x-layout page="B7Web Login Todo">
    <x-slot:btn>
        <a href="{{route('register')}}" class="btn btn-primary">
            Registre-se
        </a>
    </x-slot:btn>

    <section id="task_section">

        <h1>Login</h1>

        @if ($errors->any())
            <ul class="alert alert-error">
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif


        <form method="POST" action="{{route('user.login_action')}}">
            @csrf

            <x-form.text_input name="email" label="Email"  required="required" type="email"  placeholder="Dígite seu email"/>

            <x-form.text_input name="password" label="Senha"  required="required" type="password"  placeholder="Dígite sua senha"/>




            <x-form.form_button resetText="Limpar" submitText="Logar" />

        </form>
    </section>

</x-layout>
