<!DOCTYPE html>
<html>

<head>
    <title>Portofolio</title>
    <style>
        .container {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: flex-start;
        }

        .card {
            background-color: #F5F5F5;
            padding: 10px;
            margin: 10px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            width: 300px;
            height: 300px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .card h2 {
            margin: 0;
            font-size: 24px;
        }

        .card p {
            margin: 10px 0 0 0;
            font-size: 16px;
            text-align: center;
        }

        .description {
            width: 50%;
            margin: 10px;
            padding: 10px;
            background-color: #F5F5F5;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .description h3 {
            margin: 0;
            font-size: 24px;
        }

        .description p {
            margin: 10px 0 0 0;
            font-size: 16px;
            line-height: 1.5;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <h2>Proyek 1</h2>
            <a href="https://github.com/ramaapryan/Angkuts">Website Angkuts</a>
        </div>
        <div class="description">
            <h3>Website Angkuts</h3>
            <p>Angkuts is an online platform for trash pick-up focusing in Malang area.
                The platform is made for digitizing the sanitation.
            </p>
        </div>
    </div>
    <div class="container">
        <div class="card">
            <h2>Proyek 2</h2>
            <a href="https://github.com/ramaapryan/Laundry.in">Website Laundry.in</a>
        </div>
        <div class="description">
            <h3>Website Laundry.in</h3>
            <p>Laundry.in
                is a website application as a solution to help efficiency in the laundry service process in the digital
                era.
            </p>
        </div>
    </div>
</body>

</html>