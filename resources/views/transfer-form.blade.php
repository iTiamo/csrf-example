<form method="post" action="transfer">
    <div class="form-group">
        <label>To player</label>
        <select class="form-control" name="player" required>
            @foreach ($allUsers as $u)
                <option value="{{ $u->id }}">{{ $u->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label>Amount</label>
        <input class="form-control" name="amount" type="number" required min="1">
    </div>

    <button class="btn btn-primary" type="submit">Transfer</button>
</form>