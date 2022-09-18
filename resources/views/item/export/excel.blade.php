<div>
    <table>
        <thead>
            <tr>
            <th>TYPE CODE</th>
            <th>TYPE DESCRIPTION</th>
            <th>CODE</th>
            <th>DESCRIPTION</th>
            </tr>
        </thead>
        <tbody >
            @forelse ($items as $item)
                <tr>
                    <td>{{ $item->type->code }}</td>
                    <td>{{ $item->type->description }}</td>
                    <td>{{ $item->code }}</td>
                    <td>{{ $item->description }}</td>
                </tr>
            @empty
                <tr >
                    <td>No Existing Data.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>