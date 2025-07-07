<!DOCTYPE html>
<html>
<head>
    <title>Edit Fruit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f9f7e8;
            font-family: 'Comic Sans MS', cursive, sans-serif;
        }
        .container {
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(255, 165, 0, 0.2);
            padding: 30px;
            margin-top: 30px;
        }
        h2 {
            color: #ff6b6b;
            text-align: center;
            margin-bottom: 25px;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
        }
        .form-label {
            color: #6b8e23;
            font-weight: bold;
        }
        .form-control {
            border: 2px solid #fdcb6e;
            border-radius: 10px;
        }
        .form-control:focus {
            border-color: #74b9ff;
            box-shadow: 0 0 0 0.25rem rgba(116, 185, 255, 0.25);
        }
        .btn-primary {
            background-color: #55efc4;
            border-color: #55efc4;
            font-weight: bold;
        }
        .btn-primary:hover {
            background-color: #00b894;
            border-color: #00b894;
        }
        .btn-secondary {
            background-color: #a29bfe;
            border-color: #a29bfe;
            font-weight: bold;
        }
        .btn-secondary:hover {
            background-color: #6c5ce7;
            border-color: #6c5ce7;
        }
        .alert-danger {
            background-color: #ff7675;
            color: white;
            border-radius: 10px;
        }
        .fruit-header {
            background: linear-gradient(90deg, #ff9a9e 0%, #fad0c4 100%);
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 20px;
            color: white;
            text-align: center;
        }
        .fruit-icon {
            font-size: 1.2em;
            margin-right: 5px;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <div class="fruit-header">
        <h2>✏️ Edit Fruit 🍎</h2>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There are some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('fruits.update', $fruits->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label"><span class="fruit-icon">🍓</span>Fruit Name</label>
            <input type="text" name="name" class="form-control" placeholder="Enter fruit name" value="{{ old('name', $fruits->name) }}">
        </div>

        <div class="mb-3">
            <label for="color" class="form-label"><span class="fruit-icon">🎨</span>Color</label>
            <input type="text" name="color" class="form-control" placeholder="Enter color" value="{{ old('color', $fruits->color) }}">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label"><span class="fruit-icon">💰</span>Price</label>
            <input type="number" name="price" class="form-control" placeholder="Enter price" value="{{ old('price', $fruits->price) }}">
        </div>

        <div class="mb-3">
            <label for="quantity" class="form-label"><span class="fruit-icon">🔢</span>Quantity</label>
            <input type="number" name="quantity" class="form-control" placeholder="Enter quantity" value="{{ old('quantity', $fruits->quantity) }}">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label"><span class="fruit-icon">📝</span>Description (optional)</label>
            <textarea name="description" class="form-control" rows="3" placeholder="Enter description">{{ old('description', $fruits->description) }}</textarea>
        </div>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="{{ route('fruits.index') }}" class="btn btn-secondary me-md-2">← Back</a>
            <button type="submit" class="btn btn-primary">💾 Update Fruit</button>
        </div>
    </form>
</div>
</body>
</html>