<x-layout page="B7Web Login Todo">
    <x-slot:btn>
        <a href="{{route('home')}}" class="btn btn-primary">
            Voltar
        </a>
    </x-slot:btn>
    <section id="task_section">
        <h1>Editar tarefa</h1>
        <form method="POST" action="{{route('task.edit_action')}}">
            @csrf
            <input type="hidden" name="id" value="{{$task->id}}"/>
            <x-form.text_input name="title" label="Titulo da tarefa" value="{{$task->title}}"  placeholder="Dígite o título da tarefa" required="required" />

            <x-form.text_input name="due_date" label="Data de realização" value="{{$task->due_date}}" required="required" type="datetime-local"/>

            <x-form.select_input name="category_id" label="Categoria"  required="required">
                @foreach ($categories as $category )
                <option value="{{$category->id}}"
                    @if($category->id == $task->category_id)
                        selected
                    @endif
                    >{{$category->title}}</option>
                @endforeach

            </x-form.select_input>

            <x-form.textarea_input name="description" placeholder="Dígite uma descrição" label="Descrição da tarefa" value="{{$task->description}}"/>

            <x-form.is_done label="Tarefa realizada" check="{{$task->is_done}}"/>
            <x-form.form_button resetText="Resetar" submitText="Confirmar" />

        </form>
    </section>
</x-layout>
