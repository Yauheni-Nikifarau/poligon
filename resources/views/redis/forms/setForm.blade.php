<form action="/api/redis/set" method="POST" class="mb-5" id="set-form">
    @csrf
    <h2>Set Form</h2>
    <div class="mb-3">
        <label for="set-form-key" class="form-label">Select key</label>
        <input type="text" class="form-control" id="set-form-key" name="key">
    </div>
    <div class="mb-3">
        <label for="set-form-value" class="form-label">Enter Value</label>
        <input type="text" class="form-control" id="set-form-value" name="value">
    </div>
    <button type="submit" class="btn btn-primary">Set</button>
</form>
