
    <link href='/css/contacts/show.css' rel='stylesheet'>

    @if ($app->errorsExist())
        <div class='alert alert-danger'>Please correct the errors below</div>
    @endif

    <div id='contact-show'>
        <h2>{{ $contact['first_name'] }} {{ $contact['last_name'] }} </h2>

        <p class='contact-phone'>
            {{ $contact['phone'] }}
        </p>
    </div>

    @if ($app->errorsExist())
        <ul class='error alert alert-danger'>
            @foreach ($app->errors() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif



    <a href='/contacts'>&larr; All Contacts</a>
@endsection