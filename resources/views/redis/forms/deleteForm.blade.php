<form action="/api/redis/delete" method="POST" class="mb-5" id="delete-form" style="display: none">
    @csrf
    <h2>Delete Form</h2>
    <div class="mb-3">
        <label for="set-form-key" class="form-label">Select key</label>
        <select id="set-form-key" class="form-select" name="key">
            @foreach( $redis_table as $redis_key => $redis_value )
                <option>{{$redis_key}}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Delete</button>
</form>
