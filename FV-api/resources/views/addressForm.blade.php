<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="{{ url('js/app.js') }}"></script>
</head>
<body>
    <div class="container">
        <div class="row justify-content-lg-center">
            <div class="col-xs-12 col-lg-6">
            <form>
                <div class="form-group">
                    <label for="address1">Address 1:</label>
                    <input type="address1" name="address" class="form-control" id="address1" placeholder="Enter address 1" maxlength="30" required="required">
                    <small>Max 30 characters(<span>0</span> / 30)</small>
                </div>
                <div class="form-group">
                    <label for="address2">Address 2:</label>
                    <input type="address2" name="address2" class="form-control" id="address2" placeholder="Enter address 2" maxlength="30">
                    <small>Max 30 characters(<span>0</span> / 30)</small>
                </div>
                <div class="form-group">
                    <label for="address3">Address 3</label>
                    <input type="address3" name="address3" class="form-control" id="address3" placeholder="Enter address 3" maxlength="30">
                    <small>Max 30 characters(<span>0</span> / 30)</small>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>

            <blockquote class="form-response blockquote">
            </blockquote>
        </div>
    </div>
</body>
</html>
