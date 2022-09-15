<div class="task">
    <div class="title">
        <input type="checkbox" @if ($data and $data['done'])
            checked
        @endif />
        <div class="task_title"> {{$data['title'] ?? ''}}</div>
    </div>
    <div class="priority">
        <div class="sphere"></div>
        <div>{{$data['category'] ?? ''}}</div>
    </div>
    <div class="actions">
        <a href="edit/{{$data['id']}}">
            <img src="/assets/images/icon-edit.png"/>
        </a>
        <a href="delete/{{$data['id']}}">
            <img src="/assets/images/icon-delete.png"/>
        </a>
    </div>
</div>
