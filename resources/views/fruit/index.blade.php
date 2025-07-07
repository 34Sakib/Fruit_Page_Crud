<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fruits List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f9f7e8;
            font-family: 'Comic Sans MS', cursive, sans-serif;
            padding: 20px;
        }
        h1 {
            color: #ff6b6b;
            text-align: center;
            margin-bottom: 30px;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
        }
        .fruit-header {
            background: linear-gradient(90deg, #ff9a9e 0%, #fad0c4 100%);
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 20px;
            color: white;
            text-align: center;
        }
        .table-container {
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(255, 165, 0, 0.2);
            padding: 20px;
            overflow-x: auto;
        }
        table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            border-radius: 10px;
            overflow: hidden;
        }
        th {
            background-color: #6b8e23;
            color: white;
            padding: 12px;
            text-align: left;
        }
        td {
            padding: 12px;
            border-bottom: 1px solid #fdcb6e;
            background-color: rgba(253, 203, 110, 0.1);
        }
        tr:hover td {
            background-color: rgba(253, 203, 110, 0.3);
        }
        .btn-edit {
            background-color: #55efc4;
            border: none;
            color: #333;
            padding: 5px 10px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
        }
        .btn-edit:hover {
            background-color: #00b894;
            color: white;
        }
        .btn-delete {
            background-color: #ff7675;
            border: none;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            font-weight: bold;
        }
        .btn-delete:hover {
            background-color: #d63031;
        }
        .add-fruit {
            display: block;
            text-align: center;
            margin-top: 20px;
        }
        .btn-add {
            background-color: #a29bfe;
            border: none;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
        }
        .btn-add:hover {
            background-color: #6c5ce7;
        }
        .fruit-icon {
            margin-right: 5px;
        }
    </style>
</head>
<body>
    <div class="fruit-header">
        <h1>🍎 Fruits List 🍌</h1>
    </div>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Color</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Description</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($fruits as $fruit)
                    <tr>
                        <td>{{ $fruit->id }}</td>
                        <td>{{ $fruit->name }}</td>
                        <td style="color: {{ $fruit->color }}; font-weight: bold;">{{ $fruit->color }}</td>
                        <td>${{ number_format($fruit->price, 2) }}</td>
                        <td>{{ $fruit->quantity }}</td>
                        <td>{{ $fruit->description }}</td>
                        <td>
                            <a href="{{ route('fruits.edit', $fruit->id) }}" class="btn-edit">✏️ Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('fruits.destroy', $fruit->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this fruit?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-delete">🗑️ Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="add-fruit">
        <a href="{{ route('fruits.create') }}" class="btn-add">➕ Add New Fruit</a>
    </div>
</body>
</html>