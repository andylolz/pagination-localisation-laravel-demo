<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Pagination Demo</title>
    <style>
        svg {
            display: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Laravel Pagination Demo</h1>

        <h2>Simple Tailwind</h2>
        {{ $paginatedItems->links('pagination::simple-tailwind') }}
        <hr>
        <h2>Simple Bootstrap 5</h2>
        {{ $paginatedItems->links('pagination::simple-bootstrap-5') }}
        <hr>
        <h2>Tailwind</h2>
        {{ $paginatedItems->links('pagination::tailwind') }}
    </div>
</body>
</html>
