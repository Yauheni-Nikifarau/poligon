<form action="/api/redis/rename" method="POST" class="mb-5" id="rename-form" style="display: none">
    @csrf
    <h2>Rename Form</h2>
    <div class="mb-3">
        <label for="rename-form-key" class="form-label">Select key</label>
        <select id="rename-form-key" class="form-select" name="key">
            @foreach( $redis_table as $redis_key => $redis_value )
                <option>{{$redis_key}}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="rename-form-new-name" class="form-label">Enter New Name</label>
        <input type="text" class="form-control" id="rename-form-new-name" name="new_name">
    </div>
    <button type="submit" class="btn btn-primary">Rename</button>
</form>
