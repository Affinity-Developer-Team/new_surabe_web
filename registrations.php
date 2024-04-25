<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/test.css" />
  <link rel="stylesheet" href="style.css">

</head>


<body>

  <div class="col-12 container-fluid">
    <div class="row">
      <div class="col-lg-6 col-12 d-flex justify-content-center align-items-center" style="background-color: #0cd268;">
        <div class="col-lg-6 col-12">
          <div class="reg-home">
            <p style="font-size: 70px" class="surabe-reg-1">
              SURABE <span class="surabe-reg">Clinic</span>
            </p>
            <p class="reg-text">Patient</p>
            <p class="reg-text">Registration</p>
            <p class="reg-dis">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi,
              recusandae iste neque eos molestiae impedit animi odit obcaecati
              sed consequuntur, dolores vero tempora possimus. Quae amet nihil
              fa Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Quasi, recusandae iste neque eos molestiae impedit animi odit
              obcaecati sed consequuntur, dolores vero tempora possimus. Quae
              amet nihil facere voluptatem temporecere voluptatem tempore.
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 p-5 logo-home">
        <section>
          <h1>Send Registration</h1>
          <div class="col-12">
            <div class="row">
              <div class="col-lg-6">
                <label class="form-label fw-bold mt-3">First Name:</label>
                <input type="text" class="form-control" id="fname" placeholder="First Name">
              </div>
              <div class="col-lg-6">
                <label class="form-label fw-bold mt-3">Last Name:</label>
                <input type="text" class="form-control" id="lname" placeholder="Last Name">
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <label class="form-label fw-bold mt-3">Email:</label>
                <input type="text" class="form-control" id="email" placeholder="email">
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <label class="form-label fw-bold mt-3">Mobile Number:</label>
                <input type="text" class="form-control" id="mobile" placeholder="mobile">
              </div>
              <div class="col-lg-6">
                <label class="form-label fw-bold mt-3">Whatsapp Number:</label>
                <input type="text" class="form-control" id="whatsapp" placeholder="Whatsapp">
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <label class="form-label fw-bold mt-3">Gender:</label>
                <select name="gender" id="gender" class="form-control form-control-sm">
                  <option value="0">Select Gender</option>
                  <option value="1">Male</option>
                  <option value="2">Female</option>
                </select>
              </div>
              <div class="col-lg-6">
                <label class="form-label fw-bold mt-3">Date Of Birth:</label>
                <input type="date" class="form-control" id="dob">
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <label class="form-label fw-bold mt-3">Country:</label>
                <input type="text" class="form-control" id="country" placeholder="Country">
              </div>
              <div class="col-lg-6">
                <label class="form-label fw-bold mt-3">City:</label>
                <input type="text" class="form-control" id="city" placeholder="City">
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <label class="form-label fw-bold mt-3">Address:</label>
                <input type="text" class="form-control" id="address" placeholder="Address">
              </div>
            </div>
            <div class=" d-flex justify-content-center">
              <button class="btn btn-success mt-3">Register Now</button>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>

</body>

</html>