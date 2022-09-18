<x-layout>
    @include('components.pdf-layout')
    <h1>ITEMS</h1>
    <div id="over-flow">
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
                        <td colspan="4" style="text-align: center; font-size:bold;">No Existing Data.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-layout>