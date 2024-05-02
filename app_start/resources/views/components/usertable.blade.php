@props(['users'])
<div>
    <table class="table">
        <tr>
            <th>id</th>
            <th>Nom</th>
            <th>Metier</th>
        </tr>
        <tr>
            @foreach($users as $user)
            <td>{{$user['id']}}</td>
            <td>{{$user['nom']}}</td>
            <td>{{$user['metier']}}</td>
        </tr>
        @endforeach
</table>
</div>