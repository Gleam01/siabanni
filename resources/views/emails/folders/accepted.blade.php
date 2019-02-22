@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Acceptation of your folder') }}</div>

                <div class="card-body">
                    Dear {{ $student->firstName }} {{ $student->lastName }}, <br>
                    We're happy to announce you that your folder has been accepted.<br>
                    @if($student->status !== null)
                        You're granted as a {{ $student->status }} for your training.
                    @endif
                    <br><br>Follow this link to pay your school fees and print your student ID Card. <br>
                    <a class="btn btn-primary btn-block" href="{{ route('') }}"> Pay your school fees...</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
