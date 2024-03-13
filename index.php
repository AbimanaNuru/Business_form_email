
<?php include "includes/send_email.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Business Owner Form</title>

    <?php include "includes/header.php" ?>

</head>

<body>
    <br>
    <div class="container mt-5">


        <div class="row justify-content-center">
            <div class="card">
               
                <div class="card-header">Business Owner Form</div>
                <br>
                <div class="card-body">
                    <form id="businessOwnerDetails" action="" method="POST">
                        <p class="title"> Business Owner Details</p>
                        <div class="form-group">
                            <label for="applicant">Applicant citizenship:</label>
                            <select class="form-control" name="applicante_citizenship" id="applicante_citizenship">
                                <option value="">Select Citizenship</option>
                                <option value="Rwanda">Rwanda</option>
                                <option value="Kenya">Kenya</option>
                                <option value="Uganda">Uganda</option>
                                <option value="Tanzania">Tanzania</option>
                                <option value="USA">USA</option>
                            </select>
                            <div class="error-message" id="citizenship-error"></div>

                        </div>
                        <div class="form-group">
                            <label for="idnumber">Identification Document Number:</label>
                            <input type="text" class="form-control" id="idnumber" maxlength="16" minlength="16" placeholder="Enter Identification Document Number" name="idnumber">
                            <div class="error-message" id="idnumber-error"></div>

                        </div>
                        <div class="form-group">
                            <label for="passportnumber">Passport Number:</label>
                            <input type="text" class="form-control" id="passportnumber" placeholder="" name="passportnumber">
                            <div class="error-message" id="passportnumber-error"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="other_name">Other Name:</label>
                                    <input type="text" class="form-control" id="other_name" name="other_name">
                                    <div class="error-message" id="other_name-error"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="surname">Surname:</label>
                                    <input type="text" class="form-control" id="surname" name="surname">
                                    <div class="error-message" id="surname-error"></div>

                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nationality">Nationality:</label>
                            <input type="text" class="form-control" id="nationality" placeholder="" name="nationality">
                            <div class="error-message" id="nationality-error"></div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone">Phone number:</label>
                                    <input type="text" class="form-control" name="phone">

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">E-mail address:</label>
                                    <input type="text" class="form-control" name="email">

                                </div>
                            </div>
                        </div>
                        <p class="title"> Business Owner Address</b>
                        </p>

                        <div class="form-group">
                            <label for="businesslocation">Location:</label>
                            <input type="text" class="form-control" id="businesslocation" placeholder="District: Enter district" name="businesslocation">
                            <div class="error-message" id="businesslocation-error"></div>

                        </div>
                        <div class="card-header">Business Owner Form</div>
                        <br>

                        <p class="title"> Business Details</p>
                        <div class="form-group">
                            <label for="businesstype">Business type:</label>
                            <select class="form-control" name="business_type" id="business_type">
                                <option value="">Enter Business Type</option>
                                <option value="Retailer">Retailer</option>
                                <option value="Wholesale">Wholesale</option>
                                <option value="Manufacturer">Manufacturer</option>
                            </select>
                            <div class="error-message" id="business_type-error"></div>

                        </div>
                        <div class="form-group">
                            <label for="companyname">Company name:</label>
                            <input type="text" class="form-control" id="companyname" placeholder="Enter company namer" name="companyname">
                            <div class="error-message" id="companyname-error"></div>

                        </div>
                        <div class="form-group">
                            <label for="tinnumber">TIN Number:</label>
                            <input type="number" class="form-control" id="tinnumber" placeholder="Enter TIN number" name="tinnumber">
                            <div class="error-message" id="tinnumber-error"></div>
                        </div>
                        <div class="form-group">
                            <label for="registrationdate">Registrationdate:</label>
                            <input type="date" class="form-control" id="registrationdate" placeholder="Select date" name="registrationdate">
                            <div class="error-message" id="registrationdate-error"></div>
                        </div>


                        <p class="title"> Business Owner Address</b>
                        </p>

                        <div class="form-group">
                            <label for="location">BusinessLocation :</label>
                            <input type="text" class="form-control" id="location" placeholder="District: Enter district" name="location">
                            <div class="error-message" id="location-error"></div>

                        </div>




                        <p class="title">Product Details Product</b></p>

                        <div class="form-group">
                            <label for="important">Importationdetails:</label>
                            <select class="form-control" name="important" id="important">
                                <option value="">Select the purpose of importation</option>
                                <option value="Direct sale">Direct sale</option>
                                <option value="Personal use">Personal use</option>
                                <option value="Trial use">Trial use</option>
                                <option value="other">other</option>
                            </select>
                            <div class="error-message" id="important-error"></div>

                        </div>

                        <div class="form-group" >
                            <label for="purpose">Specify purpose of importation:</label>
                            <input type="text" class="form-control" id="other" name="other">
                            <div class="error-message" id="purpose-error"></div>

                        </div>

                        <div class="form-group">
                            <label for="product_category">Productcategory:</label>
                            <select class="form-control" name="product_category" id="product_category">
                                <option value="">Enter Business Type</option>
                                <option value="General purpose">General purpose</option>
                                <option value="Construction Materials">Construction Materials</option>
                                <option value="Chemicals">Chemicals</option>
                            </select>
                            <div class="error-message" id="product_category-error"></div>

                        </div>


                        <div class="form-group">
                            <label for="productname">Product name:</label>
                            <input type="text" class="form-control" id="productname" placeholder="Enter product name" name="productname">
                            <div class="error-message" id="productname-error"></div>

                        </div>
                        <div class="form-group">
                            <label for="Weight(kg)">Weight(kg):</label>
                            <input type="text" class="form-control" id="Weight" name="Weight">

                        </div>
                        <div class="form-group">
                            <label for="description)">Description ofproducts:</label>
                            <textarea type="text" id="description" class="form-control" name="description">
                            </textarea>
                            <div class="error-message" id="description-error"></div>

                        </div>

                        <div class="form-group">
                            <label for="measurement">Unit of measurement:</label>
                            <select class="form-control" name="measurement" id="measurement">
                                <option value="">Enter unit of measurement</option>
                                <option value="kgs">kgs</option>
                                <option value="tons">tons</option>
                            </select>
                            <div class="error-message" id="measurement-error"></div>

                        </div>


                        <div class="form-group">
                            <label for="Qty">Quantity of product(s):</label>
                            <input type="text" class="form-control" placeholder="Enter quantity" id="Qty" name="Qty">
                            <div class="error-message" id="Qty-error"></div>
                        </div>



                        <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>

                    </form>
                </div>
            </div>
        </div>
    </div>


    <?php include "includes/footer.php" ?>

</body>

</html>