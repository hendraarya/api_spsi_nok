<table>
    <tr>
        <th colspan="4">List Member SPSI NOK</th>
    </tr>
</table>

<table>
    <thead>
        <tr>
            <th align="center">No</th>
            <th align="center">Employee No</th>
            <th align="center">Employee Name</th>
            <th align="center">Resign Date</th>
            <th align="center">Departement</th>
            <th align="center">Section</th>
            <th align="center">Jenis Kelamin</th>
            <th align="center">Tgl.Masuk</th>
            <th align="center">Kode Golongan</th>
            <th align="center">Jabatan</th>
            <th align="center">Shift</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $row)
            <tr>
                <td align="center">{{ $loop->iteration }}</td>
                <td>{{ $row->employee_no }}</td>
                <td>{{ $row->employee_name }}</td>
                <td>{{ $row->resign_date }}</td>
                <td>{{ $row->departement }}</td>
                <td>{{ $row->section }}</td>
                <td>{{ $row->gender }}</td>
                <td>{{ $row->join_date }}</td>
                <td>{{ $row->group_code}}</td>
                <td>{{ $row->employee_position }}</td>
                <td>{{ $row->shift }}</td>
            </tr>
        @endforeach
    </tbody>
</table>