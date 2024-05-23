<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Filter</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<script>
    document.addEventListener('DOMContentLoaded', () => {
    const searchInput = document.getElementById('searchInput');
    const results = document.getElementById('results');
    const resultItems = Array.from(document.getElementsByClassName('result-item'));

    searchInput.addEventListener('input', () => {
        const query = searchInput.value.toLowerCase();
        resultItems.forEach(item => {
            const text = item.textContent.toLowerCase();
            if (text.includes(query)) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });
    });
});

</script>
<style>
    body {
    background-color: #f3f4f6;
    font-family: 'Arial', sans-serif;
}

.card {
    border: none;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.form-control {
    border: 2px solid #e5e7eb;
    border-radius: 5px;
    padding: 10px;
    font-size: 16px;
}

.result-item {
    transition: transform 0.2s;
}

.result-item:hover {
    transform: scale(1.05);
}

</style>
<body class="bg-gray-100">
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title text-center text-2xl font-bold">Search Filter</h2>
                <div class="mb-3">
                    <input type="text" id="searchInput" class="form-control" placeholder="Search...">
                </div>
                <div id="results" class="grid grid-cols-1 gap-4">
                    <div class="result-item bg-white p-4 rounded shadow">
                        <h3 class="text-xl font-semibold">Example Result 1</h3>
                        <p class="text-gray-700">This is an example result.</p>
                    </div>
                    <div class="result-item bg-white p-4 rounded shadow">
                        <h3 class="text-xl font-semibold">Example Result 2</h3>
                        <p class="text-gray-700">This is another example result.</p>
                    </div>
                    <div class="result-item bg-white p-4 rounded shadow">
                        <h3 class="text-xl font-semibold">Example Result 2</h3>
                        <p class="text-gray-700">This is another example result.</p>
                    </div>
                    <div class="result-item bg-white p-4 rounded shadow">
                        <h3 class="text-xl font-semibold">Example Result 2</h3>
                        <p class="text-gray-700">This is another example result.</p>
                    </div>
                    <!-- Add more result items as needed -->
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
