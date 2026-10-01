@props(['tipe' => 'sukses'])

<div {{ $attributes->merge(['class' => 'alert alert-' . $tipe]) }} role="alert">
    {{ $slot }}
</div>
