@extends('layouts.app')

@section('content')
  <div class="container">
    @forelse ($contacts as $contact)
      <div class="d-flex justify-content-between rounded px-4 py-2">
        <div>
          <a href="{{ route('contacts.show', $contact->id) }}">
            <img src="{{ Storage::url($contact->profile_picture) }}"
              class="profile-picture-index" />
          </a>
        </div>
        <div class="d-flex aling-items-center">
          <p class="me-2 mb-0">
            {{ $contact->name }}
          </p>
          <p class="me-2 mb-0">
            <a href="mailto:{{ $contact->email }}"
              class="d-none d-md-block text-decoration-none">
              {{ $contact->email }}
            </a>
          </p>
          <p class="me-2 mb-0">
            <a href="tel:{{ $contact->phone_number }}"
              class="d-none d-md-block text-decoration-none">
              {{ $contact->phone_number }}
            </a>
          </p>
          <div>
            <a class="btn btn-secondary mb-0 me-2 p-2 px-2"
              href="{{ route('contacts.edit', $contact->id) }}">
              {{-- <x-icon icon="pencil" /> --}} Edit
            </a>
          </div>
          <form action="{{ route('contacts.destroy', $contact->id) }}"
            method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger mb-0 me-2 p-2 px-2">
              {{-- <x-icon icon="trash" /> --}} Delete
            </button>
          </form>
        </div>
      </div>
    @empty
      <div class="col-md-4 mx-auto">
        <div class="card card-body text-center">
          <p>No contacts saved yet</p>
          <a href="{{ route('contacts.create') }}">Add One!</a>
        </div>
      </div>
    @endforelse
    {{-- {{ $contacts->links() }} --}}
  </div>
@endsection
