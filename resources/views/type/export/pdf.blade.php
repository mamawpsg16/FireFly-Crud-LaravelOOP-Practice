<x-layout>
    @include('components.pdf-layout')
    <h1>TYPES</h1>
    <div id="over-flow">
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
                        <td colspan="2" style="text-align: center; font-size:bold;">No Existing Data.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-layout>