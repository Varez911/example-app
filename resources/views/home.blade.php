<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Database Relationship</title>
</head>
<body>
    <div class="flex-centre position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                One-to-Many
            </div>
           <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Person</th>
                        <th>Item</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($persons as $p)
                        <tr>
                            <td>{{ $p->person_name }}</td>
                            <td>
                                <ul>
                                    @foreach ($p->items as $i)
                                        <li>{{ $i->name }}</li>                            
                                    @endforeach 
                                </ul>
                            </td>
                    @endforeach
                </tbody>
            </table>

            <div class="title m-b-md">
                Many-to-Many
            </div>
           <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Konsinyasi</th>
                        <th>Item</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($konsinyasis as $k)
                        <tr>
                            <td>{{ $k->invoice }}</td>
                            <td>
                                <ul>
                                    @foreach ($p->items as $i)
                                        <li>{{ $i->name }} ({{ $i->pivot->jumlah_konsinyasi }})</li>                            
                                    @endforeach 
                                </ul>
                            </td>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>