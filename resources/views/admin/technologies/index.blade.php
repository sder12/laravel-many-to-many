{{-- TECHNOLOGIES INDEX --}}
@extends('layouts.admin')


@section('content')
    <div class="container">
        <div class="row">

            <h3 class="text-center my-5">Technologies</h3>

            {{-- MESSAGE FROM CONTROLLER --}}
            @include('partials.session-message')
            {{-- / MESSAGE FROM CONTROLLER --}}

            {{-- ERROR --}}
            @include('partials.errors')
            {{-- / ERROR --}}

            {{-- FORM Button addons --}}
            <div class="col-4 px-5">
                <form action="{{ route('admin.technologies.store') }}" method="POST">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Add new technology" name="name"
                            aria-label="Add new technology" aria-describedby="create-technology-btn">
                        <button class="input-group-text btn btn-success" id="create-technology-btn"
                            type="submit">save</button>
                    </div>
                </form>
            </div>
            {{-- / FORM  --}}

            <div class="col-8">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Project n°</th>
                            <th scope="col">Actions</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($technologies as $tech)
                            <tr>
                                {{-- <td>{{ $tech->name }}</td> --}}
                                {{-- EDIT link to btn in actions, linked tro id-form form-btn --}}
                                <td>
                                    <form id="edit-technology-{{ $tech->id }}"
                                        action="{{ route('admin.technologies.update', $tech->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <input type="text" name="name" id="name" class="form-control border-0"
                                            value="{{ $tech->name }}">
                                    </form>
                                </td>
                                <td>{{ $tech->slug }}</td>

                                {{-- Show --}}
                                <td>
                                    <span class="me-2">{{ count($tech->projects) }}</span>
                                    <a href="{{ route('admin.technologies.show', $tech->id) }}" class="btn btn-light">
                                        <i class="fa-regular fa-eye"></i>
                                    </a>
                                </td>
                                {{-- / Show --}}

                                {{-- Edit + Delete --}}
                                <td>
                                    {{-- edit --}}
                                    <button form="edit-technology-{{ $tech->id }}" class="btn btn-warning"
                                        href="" type="submit">
                                        edit
                                    </button>
                                    {{-- delete --}}
                                    <form action="{{ route('admin.technologies.destroy', $tech->id) }}" method="POST">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="btn btn-danger"> x </button>
                                    </form>
                                </td>
                                {{-- /Edit + Delete --}}


                            </tr>
                        @endforeach

                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
