<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>CRUD PHP AJAX</title>
</head>

<body>
    <h1 class="text-center">Database CRUD</h1>
    <div class="container-fluid">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Button Create -->
                        <button type="button" class="btn btn-primary my-2" data-toggle="modal"
                            data-target="#createUser">
                            <i class="fa-solid fa-circle-plus"></i> Create new User
                        </button>
                        <table class="table table-dark  table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Id</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">City</th>
                                    <th scope="col">Action</th>

                                </tr>
                            </thead>
                            <tbody id="dataTable">
                                <!-- Display database here  -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Create -->
    <div class="modal fade" id="createUser" tabindex="-1" aria-labelledby="createUserLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createUserLabel">Create new User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="Enter your username">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" id="phone" placeholder="Enter your phone">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                        <label for="city">City</label>
                        <input type="text" class="form-control" id="city" placeholder="Enter your city">
                    </div>
                    <button type="submit" class="btn btn-primary" id="submit-create"
                        data-dismiss="modal">Create</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>

    <!-- Modal Update -->
    <div class="modal fade" id="updateUser" tabindex="-1" aria-labelledby="updateUserLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="updateUserLabel">Update User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="updateUsername" placeholder="Enter your username">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" id="updatePhone" placeholder="Enter your phone">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="updateEmail" placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                        <label for="city">City</label>
                        <input type="text" class="form-control" id="updateCity" placeholder="Enter your city">
                    </div>
                    <button type="submit" class="btn btn-primary" id="submit-update"
                        data-dismiss="modal">Update</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="hidden" id="hiddenData">
                </div>
            </div>
        </div>
    </div>

    <!-- BOOTSTRAP 4.6  -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous">
    </script>
    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script>
    // Function Display all data
    function displayData() {
        let displayData = "true";
        $.ajax({
            url: "display.php",
            type: "POST",
            data: {
                displaySend: displayData
            },
            success: function(data, status) {
                $('#dataTable').html(manageRow(JSON.parse(data)));
            }
        })
    }

    // Function Create html by data
    function manageRow(data) {
        let html = "";
        for (let i = 0; i < data.length; i++) {
            const element = data[i];
            html += '<tr>';
            html += '<th scope="row">' + (i + 1) + '</th>';
            html += '<td>' + element.id + '</td>';
            html += '<td>' + element.username + '</td>';
            html += '<td>' + element.phone + '</td>';
            html += '<td>' + element.email + '</td>';
            html += '<td>' + element.city + '</td>';
            html += '<td class="text-center d-flex justify-content-around">';
            html +=
                '<a data-toggle="modal" data-target="#updateUser" onclick="getDetails(' + element.id +
                ')" ><i class="fa-solid fa-pen-to-square text-warning"></i></a>';
            html += '<a onclick="deleteUser(' + element.id + ')"><i class="fa-solid fa-trash-can text-danger"></i></a>';
            html += '</td>';
            html += '</tr>';
        }
        return html;
    }

    // Display data for table
    displayData()

    // Create new User
    function addUser() {
        let username = $('#username').val();
        let phone = $('#phone').val();
        let email = $('#email').val();
        let city = $('#city').val();

        $.ajax({
            url: "insert.php",
            type: "POST",
            data: {
                username: username,
                phone: phone,
                email: email,
                city: city
            },
            success: function(data, status) {
                displayData()
            }
        })
    }

    // Add function for Btn create
    $('#submit-create').on('click', addUser);

    // Get info user by id
    function getDetails(updateId) {
        $("#hiddenData").val(updateId);
        $.post("findById.php", {
            updateId: updateId
        }, function(data, status) {
            let user = JSON.parse(data);
            $('#updateUsername').val(user.username);
            $('#updatePhone').val(user.phone);
            $('#updateEmail').val(user.email);
            $('#updateCity').val(user.city);
            $('#hiddenData').val(user.id);
        })
    }

    // Update user
    function updateUserById() {
        let username = $("#updateUsername").val();
        let phone = $("#updatePhone").val();
        let email = $("#updateEmail").val();
        let city = $("#updateCity").val();
        let hiddenData = $('#hiddenData').val();
        $.post("update.php", {
            username: username,
            phone: phone,
            email: email,
            city: city,
            hiddenData: hiddenData,
        }, function(data, status) {
            displayData();
        })
    }

    // Add function for BtnUpdate
    $("#submit-update").on('click', updateUserById)

    // Delete User
    function deleteUser(deleteId) {
        $.ajax({
            url: "delete.php",
            type: "POST",
            data: {
                deleteSend: deleteId
            },
            success: function(data, status) {
                displayData()
            }
        })
    }
    </script>
</body>

</html>