<div>
    <table>
        <thead>
            <tr>
            <th >CODE</th>
            <th >DESCRIPTION</th>
            </tr>
        </thead>
        <tbody >
            @forelse ($types as $type)
                <tr>
                    <td>{{ $type->code }}</td>
                    <td>{{ $type->description }}</td>
                </tr>
            @empty
                <tr >
                    <td>No Existing Data.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>