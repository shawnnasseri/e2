
    <link href='/css/contacts/show.css' rel='stylesheet'>
    <h2>All Contacts</h2>
    
    <a href='/contacts/new'> <button type="button">Add New Contact</button></a>
    <a href='/'> <button type="button">Home Page</button></a>

    <div id='contact-index'>
        <ul>
        @foreach ($contacts as $contact)
           <li> 
              {{ $contact['first_name'] }} {{ $contact['last_name'] }}
              {{ $contact['street'] }}
              {{ $contact['city'] }} {{ $contact['state'] }} {{ $contact['zip'] }}
              {{ $contact['phone'] }} {{ $contact['email'] }}
           </li>
        @endforeach
        </ul>
    </div>
