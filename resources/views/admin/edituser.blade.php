<div>
    <!-- The best way to take care of the future is to take care of the present moment. - Thich Nhat Hanh -->
</div>


{{ $result }}


    <form method="post" action="{{ url('updatedata/' . $result->id) }}">
    @csrf

    @method('PUT')
     <br>
    Name: <input type="text" placeholder="name" name="name" value="{{ $result->name }}">
    <br> <br>
    Email: <input type="email" placeholder="email" name="email" value="{{ $result->email }}">  <br><br>
    Password: <input type="text" placeholder="password" name="password" value="">
    <br><br>
    <button>update</button>

</form>