<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Label</th>
        <th scope="col">Role name</th>        
        <th scope="col">Discription</th>
      </tr>
    </thead>
    <tbody>
        @@foreach ($roles as $role)
            <td>{{ $role->label; }}</td>
            <td>{{ $role->role_name; }}</td>
            <td>{{ $role->discription; }}</td>
        @endforeach

    </tbody>
</table>