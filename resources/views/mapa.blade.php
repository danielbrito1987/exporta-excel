<style>
    .atendido {
        background-color: #92D050;
    }

    .livre {
        background-color: #FFFF00;
    }

    .não-atende {
        background-color: #FF0000;
    }

    .head {
        color: red;
        border: 1px solid black;
    }
</style>

<table>
    <tbody>
        <tr>
            <td align="center" style="color: red; border: thick solid black;"><strong>SALA</strong></td>
            <td align="left" style="border: thick solid black;">SALA 1-A</td>
        </tr>
        <tr>
            <td align="center" style="color: red; border: thick solid black;"><strong>MANHÃ</strong></td>
            @foreach($exports as $export)
            @if($export->sala === 'SALA 1-A' && $export->turno === 'MANHÃ')
                <td align="left" style="border: thick solid black;">{{ $export->profissional }}</td>
                @break
            @endif
            @endforeach
        </tr>
        <tr>
            <td align="center" style="color: red; border: thick solid black;"><strong>ESPECIALIDADE</strong></td>
            @foreach($exports as $export)
            @if($export->sala === 'SALA 1-A' && $export->turno === 'MANHÃ')
                <td align="left" style="border: thick solid black;">{{ $export->especialidade }}</td>
                @break
            @endif
            @endforeach
        </tr>

        @foreach($exports as $export)
        <tr>
            <td align="center" style="border: 1px solid black;">{{ $export->hora }}</td>
            @if($export->sala === 'SALA 1-A' && $export->turno === 'MANHÃ')
            <td align="center" style="border: 1px solid black; background-color: {{ $export->paciente != null ? '#92D050' : '#FFFF00' }}">{{ $export->paciente }}</td>
            @endif
        </tr>
        @endforeach
    </tbody>
</table>