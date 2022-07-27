@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Details Contact</div>

          <div class="card-body d-flex justify-content-around">
            <div class="mt-5 mx-0">
              <img src="{{ Storage::url($contact->profile_picture) }}"
                class="profile-picture-show" />
            </div>
            <div class="mt-5 ">
              <p>Name: {{ $contact->name }}</p>
              <p>
                Email:
                <a class="text-decoration-none">
                  {{ $contact->email }}
                </a>
              </p>
              <p>Edad: {{ $contact->age }}</p>
              <p>
                Phone Number:
                <a class="text-decoration-none">
                  {{ $contact->phone_number }}
                </a>
              </p>
              <p>Created: {{ $contact->created_at }}</p>
              <p>Updated: {{ $contact->updated_at }}</p>
            </div>
          </div>
          <div class="d-flex justify-content-center">
            <a href="{{ route('contacts.edit', $contact->id) }}"
              class="btn btn-secondary mb-2 mx-2">Edit Contact</a>
            <form action="{{ route('contacts.destroy', $contact->id) }}"
              method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger mb-2">Delete
                Contact</button>
            </form>
          </div>
          

        </div>
      </div>
    </div>
  </div>
@endsection