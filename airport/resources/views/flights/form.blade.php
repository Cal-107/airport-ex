<div class="mb-3">
    <label for="flight_code" class="form-label">Flight_code</label>
    <input type="text" class="form-control" name="flight_code"
        value="{{ old('flight_code', isset($flight) ? $flight->flight_code : '') }}" required>
    @error('flight_code')
        <div class="alert alert-danger mt-2">{{ $message }}</div>
    @enderror
</div>
<div class="mb-3">
    <label for="date" class="form-label">Date</label>
    <input type="date" class="form-control" name="date"
        value="{{ old('date', isset($flight) ? $flight->date : '') }}" required>
    @error('date')
        <div class="alert alert-danger mt-2">{{ $message }}</div>
    @enderror
</div>
<div class="mb-3">
    <label for="take_off" class="form-label">Take Off</label>
    <input type="time" class="form-control" name="take_off"
        value="{{ old('take_off', isset($flight) ? $flight->take_off : '') }}" required>
    @error('take_off')
        <div class="alert alert-danger mt-2">{{ $message }}</div>
    @enderror
</div>
<div class="mb-3">
    <label for="landing" class="form-label">Landing</label>
    <input class="form-control" type='time' name="landing"
        value="{{ old('landing', isset($flight) ? $flight->landing : '') }}">
    </input>
    @error('landing')
        <div class="alert alert-danger mt-2">{{ $message }}</div>
    @enderror
</div>
