<x-layout page="B7Web Login Todo">
    <x-slot:btn>
        <a href="{{route('home')}}" class="btn btn-primary">
            Voltar
        </a>
    </x-slot:btn>
    <section id="task_section">
        <h1>Criar tarefa</h1>
        <form method="POST" action="{{route('task.create_action')}}">
            @csrf
            <x-form.text_input name="title" label="Titulo da tarefa"  placeholder="Dígite o título da tarefa" required="required" />

            <x-form.text_input name="due_date" label="Data de realização"  required="required" type="datetime-local"/>

            <x-form.select_input name="category_id" label="Categoria"  required="required">
                @foreach ($categories as $category )
                <option value="{{$category->id}}">{{$category->title}}</option>
                @endforeach

            </x-form.select_input>

            <x-form.textarea_input name="description" placeholder="Dígite uma descrição" label="Descrição da tarefa" />

            <x-form.form_button resetText="Resetar" submitText="Criar Tarefa" />

        </form>
    </section>
</x-layout>
