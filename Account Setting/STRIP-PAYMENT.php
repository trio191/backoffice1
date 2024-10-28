<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Integration</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Inline CSS */
        body {
            background-color: #f5f7fa;
        }
        .payment-container {
            max-width: 900px;
            margin: 50px auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.05);
        }
        .form-control, .form-select {
            margin-bottom: 10px;
        }
        .card-method {
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
        }
        .card-method.active {
            border-color: #007bff;
        }
        .confirm-btn {
            background-color: #007bff;
            color: white;
        }
        .navbar {
            background-color: #fff;
            border-bottom: 1px solid #e0e0e0;
            padding: 10px 20px;
        }
        .navbar-brand img {
            height: 40px;
        }
        .navbar-right {
            font-size: 16px;
        }
        .btn-cancel {
            color: #007bff;
            font-weight: bold;
        }
    </style>
</head>
<body>
     <!-- Navbar -->
     <nav class="navbar navbar-light">
        <a class="navbar-brand" href="#">
            <!-- Logo placeholder (replace with actual logo image) -->
            <img src="https://via.placeholder.com/100x40.png" alt="Logo">
        </a>
        <div class="navbar-right">
            <a href="#" class="btn btn-link btn-cancel">Cancel</a>
        </div>
    </nav>
    <div class="payment-container">
        <div class="row">
            <!-- Payment Method Section -->
            <div class="col-md-7">
                <h4>Change payment method</h4>
                <div class="card-method active">
                    <i class="fas fa-credit-card"></i>
                    <span class="ml-2">Card</span>
                </div>
                <form>
                    <div class="form-group">
                        <label for="cardNumber">Card number</label>
                        <input type="text" id="cardNumber" class="form-control" placeholder="1234 1234 1234 1234">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="expiryDate">Expiration</label>
                            <input type="text" id="expiryDate" class="form-control" placeholder="MM / YY">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="cvc">CVC</label>
                            <input type="text" id="cvc" class="form-control" placeholder="CVC">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="country">Country</label>
                            <select id="country" class="form-control">
                                <option selected>Portugal</option>
                                <option>Other</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="postalCode">Postal Code</label>
                            <input type="text" id="postalCode" class="form-control" placeholder="20125">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="companyInfo">Company Information (optional)</label>
                        <input type="text" id="companyInfo" class="form-control" placeholder="Enter company info">
                    </div>
                    <button class="btn btn-link">Edit company info</button>
                </form>
            </div>

            <!-- Order Summary Section -->
            <div class="col-md-5">
                <div class="card p-3">
                    <h5>Order summary</h5>
                    <hr>
                    <p class="d-flex justify-content-between">
                        <span>Change payment method</span>
                        <span>$0.00</span>
                    </p>
                    <p class="d-flex justify-content-between">
                        <span>Tax (22%)</span>
                        <span>$0.00</span>
                    </p>
                    <hr>
                    <p class="d-flex justify-content-between font-weight-bold">
                        <span>Total</span>
                        <span>$0.00</span>
                    </p>
                    <button class="btn btn-primary btn-block confirm-btn">Confirm</button>
                </div>
                <small class="text-muted">The prorated price reflects the difference between your previous and updated payment method. To learn more, see FAQ.</small>
            </div>
        </div>
    </div>

    <!-- FontAwesome for icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
