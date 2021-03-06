<!DOCTYPE html>

<html>

<head>
    <meta name="viewport" content="width=device-width" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Bookstore</title>
</head>

<body>
    <div class="container">

        <br>

        <h1>This is a simple CRUD REST API for a bookstore &emsp; (Laravel/PHP)</h1>

        <br>

        <br>

        <div class="row">
            <span class="border"></span>
            <h5>
                METHOD &emsp;&emsp;&emsp;&emsp;&emsp; GET
            </h5>
        </div>

        <div class="row">
            <span class="border"></span>
            <h5>
                ROUTE &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <a href="/api/books">/api/books</a>
            </h5>
        </div>

        <div class="row">
            <span class="border"></span>
            <h5></h5>
        </div>

        <div class="row">
            <span class="border"></span>
            <h5>
                METHOD &emsp;&emsp;&emsp;&emsp;&emsp; GET
            </h5>
        </div>

        <div class="row">
            <span class="border"></span>
            <h5>
                ROUTE &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; /api/books/{id}
            </h5>
        </div>

        <div class="row">
            <span class="border"></span>
            <h5></h5>
        </div>

        <div class="row">
            <span class="border"></span>
            <h5>
                METHOD &emsp;&emsp;&emsp;&emsp;&emsp; POST
            </h5>
        </div>

        <div class="row">
            <span class="border"></span>
            <h5>
                ROUTE &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; /api/books
            </h5>
        </div>

        <div class="row">
            <span class="border"></span>
            <h5>
                EXAMPLE &emsp;&emsp;&emsp;&emsp;&emsp;
                {"title":"title1","author":"author1","price":1.0}
            </h5>
        </div>

        <div class="row">
            <span class="border"></span>
            <h5></h5>
        </div>

        <div class="row">
            <span class="border"></span>
            <h5>
                METHOD &emsp;&emsp;&emsp;&emsp;&emsp; PUT
            </h5>
        </div>

        <div class="row">
            <span class="border"></span>
            <h5>
                ROUTE &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; /api/books/{id}
            </h5>
        </div>

        <div class="row">
            <span class="border"></span>
            <h5></h5>
        </div>

        <div class="row">
            <span class="border"></span>
            <h5>
                METHOD &emsp;&emsp;&emsp;&emsp;&emsp; DELETE
            </h5>
        </div>

        <div class="row">
            <span class="border"></span>
            <h5>
                ROUTE &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; /api/books/{id}
            </h5>
        </div>

        <div class="row">
            <span class="border"></span>
            <h5></h5>
        </div>

        <br>

        <br>

        <ul>
            <li>
                <h5>
                    When using POST method, do not specify the "id" property because
                    it is autoincremental.
                </h5>
            </li>
            <li>
                <h5>
                    When using POST or PUT method, do not specify "created_at" and "updated_at" properties.
                </h5>
            </li>
        </ul>
        <br>


        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
            crossorigin="anonymous"></script>

    </div>

</body>

</html>
