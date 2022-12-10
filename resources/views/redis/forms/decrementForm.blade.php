<form action="/api/redis/decr" method="POST" class="mb-5" id="decrement-form" style="display: none">
    @csrf
    <h2>Decrement Form</h2>
    <div class="mb-3">
        <label for="set-form-key" class="form-label">Select key</label>
        <select id="set-form-key" class="form-select" name="key">
            @foreach( $redis_table as $redis_key => $redis_value )
                <option>{{$redis_key}}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Decrement</button>
</form>
