<div class="mb-3">
    <label for="firstname" class="form-label">Firstname</label>
    <input type="text" class="form-control" name="firstname"
        value="{{ old('firstname', isset($passenger) ? $passenger->firstname : '') }}" required>
    @error('firstname')
        <div class="alert alert-danger mt-2">{{ $message }}</div>
    @enderror
</div>
<div class="mb-3">
    <label for="lastname" class="form-label">Lastname</label>
    <input type="text" class="form-control" name="lastname"
        value="{{ old('lastname', isset($passenger) ? $passenger->lastname : '') }}" required>
    @error('lastname')
        <div class="alert alert-danger mt-2">{{ $message }}</div>
    @enderror
</div>
<div class="mb-3">
    <label for="birthdate" class="form-label">Birthdate</label>
    <input type="date" class="form-control" name="birthdate"
        value="{{ old('birthdate', isset($passenger) ? $passenger->birthdate : '') }}" required>
    @error('birthdate')
        <div class="alert alert-danger mt-2">{{ $message }}</div>
    @enderror
</div>
<div class="mb-3">
    <label for="flight_id" class="form-label">Flight ID</label>
    <input class="form-control" type='number' name="flight_id"
        value="{{ old('flight_id', isset($passenger) ? $passenger->flight_id : '') }}">
    </input>
    @error('flight_id')
        <div class="alert alert-danger mt-2">{{ $message }}</div>
    @enderror
</div>
<div class="mb-3">
    <label for="code" class="form-label">Code</label>
    <input type="text" class="form-control" name="code"
        value="{{ old('code', isset($passenger) ? $passenger->code : '') }}">
    @error('code')
        <div class="alert alert-danger mt-2">{{ $message }}</div>
    @enderror
</div>
