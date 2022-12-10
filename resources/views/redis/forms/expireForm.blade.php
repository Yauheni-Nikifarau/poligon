<form action="/api/redis/expire" method="POST" class="mb-5" id="expire-form" style="display: none">
    @csrf
    <h2>Expire Form</h2>
    <select id="expire-form-key" class="form-select" name="key">
        @foreach( $redis_table as $redis_key => $redis_value )
            <option>{{$redis_key}}</option>
        @endforeach
    </select>
    <div class="mb-3">
        <label for="expire-form-value" class="form-label">Enter Expire Value</label>
        <input type="number" class="form-control" id="expire-form-value" name="expire">
    </div>
    <button type="submit" class="btn btn-primary">Set Expiration time</button>
</form>
