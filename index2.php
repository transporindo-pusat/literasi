<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Image Cards</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        .media-download {
            border: 1px solid #d8d8db;
        }

        .search-container {
            margin-bottom: 20px;
        }

        .card-img-top {
            width: 100%;
            height: auto;
        }

        .card-img-header {
            position: absolute;
            max-width: 100%;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            object-fit: cover;
        }
    </style>
</head>

<body>
    <div class="container-fluid mt-4">
        <div class="search-container">
            <input type="text" id="searchInput" class="search-input form-control" placeholder="Type to search...">
        </div>
        <div class="row content-loop">
            <!-- Card -->
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>


</body>

</html>
<script>
    let jsonData = []; // Store JSON data globally

    $(document).ready(function() {
        // Load JSON
        $.getJSON("file.json", function(data) {
            jsonData = data; // Store data globally
            displayData(jsonData); // Display all data initially
        }).fail(function() {
            console.error("Failed to load JSON file.");
        });

        // Live search function
        $("#searchInput").on("keyup", function() {
            let searchTerm = $(this).val().toLowerCase();
            let filteredData = jsonData.filter(item =>
                item.title.toLowerCase().includes(searchTerm) ||
                item.description.toLowerCase().includes(searchTerm)
            );
            displayData(filteredData);
        });
    });

    // Function to display data
    function displayData(data) {
        let container = $(".row");
        container.empty();

        if (data.length === 0) {
            container.html("<p>No results found.</p>");
            return;
        }

        $.each(data, function(index, item) {
            let cardHtml = `
            <div class="col-lg-12 mb-4">
                <div class="card">
                    <h5 class="card-header">${item.title}</h5>
                    <div class="card-body d-flex align-items-center">
                        <div class="row">
                            ${item.images.map(img => 
                            `<div class="col-md-2 mb-4">
                                <div class="media-download">
                                    <img
                                    loading="lazy"
                                    src="${img}"
                                    class="card-img-top"
                                    alt="Image"
                                    />
                                </div>
                             </div>`
                        ).join('')}
                        </div>
                    </div>
                    <div class="card-footer text-dark">${item.description}</div>
                </div>
            </div>
        `;

            container.append(cardHtml);
        });
    }
</script>