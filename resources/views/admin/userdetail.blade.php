
<table border="1px">

<tr>
    <td>ID</td>
    <td>NAME</td>
    <td>E-Mail</td>
    <td>DELETE</td>
    <td>UPDATE</td>
</tr>
@foreach ($result as $r )


<tr>
    <td>{{ $r->id}}</td>
    <td>{{ $r->name }}</td>
    <td>{{ $r->email }}</td>
    <td><a href="{{'deletedata/'.$r->id }}">Delete</a></td>
    <td><a href="{{ 'editdata/'.$r->id }}">Update</a></td>

</tr>
@endforeach

</table>




<meta name="csrf-token" content="{{ csrf_token() }}">

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    let lastId = {{ $result->last()->id ?? 0 }};

    function checkNewUsers() {
        $.ajax({
            url: "{{ route('live.users') }}",
            type: "GET",
            success: function(users) {
                $.each(users, function(index, user) {
                    if (user.id > lastId) {
                        let row = `
                            <tr id="row-${user.id}">
                                <td>${user.id}</td>
                                <td>${user.name}</td>
                                <td>${user.email}</td>
                                <td><a href="/deletedata/${user.id}">Delete</a></td>
                                <td><a href="/editdata/${user.id}">Update</a></td>
                            </tr>`;
                        $('table').append(row);
                        lastId = user.id;
                    }
                });
            }
        });
    }

    // ✅ Har 1 second me naye users check karo
    setInterval(checkNewUsers, 3000);
</script>
