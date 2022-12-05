
    <link href='/css/contacts/new.css' rel='stylesheet'>

    @if ($contactSaved)
        <div test='contact-added-confirmation' class='alert alert-success'>Thank you, your contact was added! <a
                href='/contacts/index'>View All Contacts</a></div>
    @endif

    @if ($app->errorsExist())
        <div test='validation-errors-alert' class='alert alert-danger'>Please correct the errors below</div>
    @endif

    <div><a href='/'>Back To Home </a></div>

    <form id='new-contact-form' method='POST' action='/contacts/save'>
        <h2>New Contact</h2>
        <div class='info'>All fields are required</div>

        <div class='form-group'>
            <label for='first_name'>First Name</label>
            <input test='first-name-input' type='text' class='form-control' name='first_name' id='first_name'
                value='{{ $app->old('first_name') }}'>
        </div>

        <div class='form-group'>
            <label for='last_name'>Last Name</label>
            <input test='sku-input' type='text' class='form-control' name='last_name' id='last_name'
                value='{{ $app->old('last_name') }}'>
            <div class='info'>Can only contain letters.</div>
        </div>

        <div class='form-group'>
            <label for='street'>Street</label>
            <textarea test='street-input' name='street' id='street' class='form-control'>{{ $app->old('street') }}</textarea>
        </div>

        <div class='form-group'>
            <label for='city'>City</label>
            <input test='city-input' type='text' class='form-control' name='city' id='city'
                value='{{ $app->old('city') }}'>
        </div>    

        <div class='form-group'>
            <label for='state'>State</label>
            <input test='state-input' type='text' class='form-control' name='state' id='state'
                value='{{ $app->old('state') }}'>
        </div>

        <div class='form-group'>
            <label for='zip'>zip</label>
            <input test='zip-input' type='text' class='form-control' name='zip' id='zip'
                value='{{ $app->old('zip') }}'>
        </div>

        <div class='form-group'>
            <label for='phone'>Phone</label>
            <input test='phone-input' type='text' class='form-control' name='phone' id='phone'
                value='{{ $app->old('phone') }}'>
        </div>

        <div class='form-group'>
            <label for='email'>Email</label>
            <input test='email-input' type='text' class='form-control' name='email' id='email'
                value='{{ $app->old('email') }}'>
        </div>

        <button test='submit-button' type='submit' class='btn btn-primary'>Add Contact</button>
    </form>

    @if ($app->errorsExist())
        <ul class='error alert alert-danger'>
            @foreach ($app->errors() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

