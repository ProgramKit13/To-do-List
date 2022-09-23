<div class="checkArea">
    <label for="is_done">
        {{$label ?? ''}}
    </label>
    <input type="checkbox" class="check_input" id="is_done" name="is_done"
        @if ($check == 1)
            checked
        @endif
    />
</div>
