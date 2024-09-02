<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Viewer</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        #data-list {
            list-style-type: none;
            padding: 0;
        }

        h1 {
            text-align: center;
        }

        #data-list li {
            text-align: center;
            padding: 5px;
            border-bottom: 1px solid #ccc;
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const dataList = document.getElementById('data-list');

            function fetchData() {
                fetch('data.php')
                    .then(response => response.json())
                    .then(data => {
                        dataList.innerHTML = '';
                        data.data.forEach(item => {
                            const li = document.createElement('li');
                            li.textContent = item;
                            dataList.appendChild(li);
                        });
                    })
                    .catch(error => console.error('Error mengambil data:', error));
            }

            // Fetch data setiap 5 seconds
            fetchData();
            setInterval(fetchData, 5000);
        });
    </script>
</head>

<body>
    <h1>Data Viewer</h1>
    <ul id="data-list"></ul>
</body>

</html>