<!DOCTYPE html>
<html>
<head>
    <title>Contact Messages</title>
</head>
<body>
    <h1>All Contact Messages</h1>

    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Subject</th>
            <th>Message</th>
            <th>Date</th>
        </tr>

        @foreach($contacts as $contact)
        <tr>
            <td>{{ $contact->id }}</td>
            <td>{{ $contact->name }}</td>
            <td>{{ $contact->email }}</td>
            <td>{{ $contact->subject }}</td>
            <td>{{ $contact->message }}</td>
            <td>{{ $contact->created_at->format('d M Y H:i') }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
