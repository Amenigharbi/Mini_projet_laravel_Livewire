<div>
    <style>.colored-icon { color: rgb(118, 15, 85) ; }</style>

@if($currentPage==PageCreate)
 @include('livewire.utilisateurs.create')

@endif
 @if($currentPage==PageEdit)
 @include("livewire.utilisateurs.edit")

@endif
@if($currentPage==PageListe)
@include("livewire.utilisateurs.liste")

@endif
