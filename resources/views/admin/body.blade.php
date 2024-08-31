<body>
<div class="main-content">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Admin Panel</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Notifications
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Profile</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container-fluid mt-4">
            <div class="row">
                <!-- Cards for key statistics -->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">Total Campaigns</div>
                        <div class="card-body">
                            <h5 class="card-title">123</h5>
                            <p class="card-text">Number of active campaigns.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">Total Users</div>
                        <div class="card-body">
                            <h5 class="card-title">456</h5>
                            <p class="card-text">Number of registered users.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">Pending Requests</div>
                        <div class="card-body">
                            <h5 class="card-title">78</h5>
                            <p class="card-text">Requests awaiting approval.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <!-- Data Table -->
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">Recent Campaigns</div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Campaign 1</td>
                                        <td>Description of campaign 1</td>
                                        <td>Active</td>
                                        <td>
                                            <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                            <button class="btn btn-danger btn-sm">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Campaign 2</td>
                                        <td>Description of campaign 2</td>
                                        <td>Inactive</td>
                                        <td>
                                            <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                            <button class="btn btn-danger btn-sm">Delete</button>
                                        </td>
                                    </tr>
                                    <!-- More rows can be added here -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>