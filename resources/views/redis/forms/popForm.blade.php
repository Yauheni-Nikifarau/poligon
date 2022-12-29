<form action="/api/redis/pop" method="POST" class="mb-5" id="pop-form" style="display: none">
    @csrf
    <h2>Pop Form</h2>
    <div class="mb-3">
        <label for="pop-form-key" class="form-label">Select key</label>
        <input type="text" class="form-control" id="pop-form-key" name="key">
    </div>
    <button type="submit" class="btn btn-primary">Pop</button>
</form>
