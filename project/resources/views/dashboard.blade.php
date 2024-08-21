<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="{{ asset('images/bit.png') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Memorandum of Understanding</title>
    <link rel="stylesheet" href="{{ asset('css/styleboard.css') }}">
</head>
<body>
    <nav>
        <a href="https://bitsathy.ac.in"><img src="{{ asset('images/bitnav.png') }}" alt="Logo"></a>
        <ul>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('/MoUs') }}">MoUs</a></li>
            <li><a href="{{ url('/departments') }}">Departments</a></li>
            <li><a href="{{ url('/outcomes') }}">Outcomes</a></li>
            <li><a href="#">Logout</a></li>
        </ul>
    </nav>


    <h4>Live MoUs</h4>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Serial Number</th>
                    <th>Name of the MoU</th>
                    <th>Departments</th>
                    <th>Company Name</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($liveMoUs as $mou)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $mou['name'] }}</td>
                    <td>{{ $mou['department'] }}</td>
                    <td>{{ $mou['company_name'] }}</td>
                    <td>{{ $mou['start_date'] }}</td>
                    <td>{{ $mou['end_date'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


    <h4>Expired MoUs</h4>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Serial Number</th>
                    <th>Name of the MoU</th>
                    <th>Company Name</th>
                    <th>Request Renewal</th>
                </tr>
            </thead>
            <tbody>
                @foreach($expiredMoUs as $mou)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $mou['name'] }}</td>
                    <td>{{ $mou['company_name'] }}</td>
                    <td><a href="#">Request Renewal</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>





