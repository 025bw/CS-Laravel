<!DOCTPE html>
    <html>

    <head>
        <title>List user</title>
    </head>

    <body>
        <table border="1">
            <tr>
                <td>username</td>
                <td>password</td>
                <td>admin</td>
            </tr>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->username }}</td>
                <td>{{ $user->password }}</td>
                <td>{{ $user->admin }}</td>
            </tr>
            @endforeach
        </table>
    </body>

    </html>