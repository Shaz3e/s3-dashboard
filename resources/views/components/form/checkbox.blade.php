@props(['name', 'value' => '', 'label' => '', 'checked' => false, 'required' => false])

<div class="mb-3 form-check">
    <input type="checkbox" name="{{ $name }}" id="{{ $name }}" value="{{ $value }}"
        class="form-check-input" {{ $checked ? 'checked' : '' }} {{ $required ? 'required' : '' }}>
    <label for="{{ $name }}" class="form-check-label">{{ $label }}</label>
    @error($name)
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
