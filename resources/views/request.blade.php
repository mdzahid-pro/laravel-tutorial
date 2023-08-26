<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Video Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <form method="post" action="{{ route("handle-request") }}">
        @csrf
        <div class="mb-3">
            <label for="stringInput" class="form-label">String Input</label>
            <input type="text" class="form-control form-control-sm" id="stringInput" name="string_input">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="booleanInput" name="boolean_input">
            <label class="form-check-label" for="booleanInput">Boolean Input</label>
        </div>
        <div class="mb-3">
            <label for="dateInput" class="form-label">Date Input</label>
            <input type="date" class="form-control form-control-sm" id="dateInput" name="date_input">
        </div>
        <div class="mb-3">
            <label for="hasInput" class="form-label">Has Input</label>
            <input type="text" class="form-control form-control-sm" id="hasInput" name="has_input">
        </div>
        <div class="mb-3">
            <label for="hasAnyInput" class="form-label">Has Any Input</label>
            <input type="text" class="form-control form-control-sm" id="hasAnyInput" name="has_any_input">
        </div>
        <div class="mb-3">
            <label for="numericInput" class="form-label">Numeric Input</label>
            <input type="number" class="form-control form-control-sm" id="numericInput" name="numeric_input">
        </div>
        <div class="mb-3">
            <label for="product0Name" class="form-label">Product 1 Name</label>
            <input type="text" class="form-control form-control-sm" id="product0Name" name="products[0][name]">
        </div>
        <div class="mb-3">
            <label for="product0Price" class="form-label">Product 1 Price</label>
            <input type="number" class="form-control form-control-sm" id="product0Price" name="products[0][price]">
        </div>
        <div class="mb-3">
            <label for="enum_value" class="form-label">Enum Value Test</label>
            <input type="text" class="form-control form-control-sm" id="enum_value" name="enum_input">
        </div>
        <!-- Add more product fields as needed -->

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
