<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Donor List</title>
</head>
<body>
    <div class="container">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Blood Group Id</th>
                <th scope="col">Last Donation Date</th>
                <th scope="col">Total Donation Count</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach($donors as $donor)
                <tr>
                    <th scope="row">{{ $donor->id }}</th>
                    <td>{{ $donor->name }}</td>
                    <td>{{ $donor->phone }}</td>
                    <td>{{ $donor->blood_group_id }}</td>
                    <td>{{ $donor->last_donation_date }}</td>
                    <td>{{ $donor->total_donation_count }}</td>
                    <td>
                        <a href="{{ route('donor.edit', $donor->id) }}" class="btn">Edit</a>
                        <a href="" class="btn">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
          </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>