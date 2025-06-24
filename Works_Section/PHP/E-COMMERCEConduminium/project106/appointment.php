<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Condominium Booking</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+SC&family=Figtree&display=swap" rel="stylesheet">

  <style>

    h1, h2, h3, h4, h5 {
    font-family: 'Cormorant SC', serif;
    font-weight: 600;
    }

    body {
      background: url('assets/bldg1.jpg') no-repeat center center fixed;
      background-size: cover;
      font-family: 'Figtree', sans-serif;
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 2rem;
    }
    .booking-container {
      background: rgba(214, 227, 213, 0.9);
      border-radius: 12px;
      box-shadow: 0 8px 20px rgb(0 0 0 / 0.2);
      width: 50%;
      max-width: 600px;
      padding: 2rem;
    }
    @media (max-width: 992px) {
      .booking-container {
        width: 75%;
      }
    }
    h2 {
      color: #26392D;
      margin-bottom: 0.5rem;
    }
    .intro-text {
      color: #26392D;
      margin-bottom: 1.5rem;
      font-size: 1.1rem;
      font-weight: 500;
    }
    .btn-primary {
      background-color: #26392D;
      border-color: #26392D;
    }
    .btn-primary:hover, .btn-primary:focus {
      background-color: #1e2b24;
      border-color: #1e2b24;
    }
    label {
      color: #26392D;
      font-weight: 600;
    }
.form-control {
  border: none;
  border-bottom: 2px solid #26392D; /* dark green underline */
  border-radius: 0;
  background-color: transparent;
  box-shadow: none;
  padding-left: 0;
  padding-right: 0;
  transition: border-color 0.3s ease;
}

.form-control:focus {
  border-bottom-color:rgb(255, 255, 255); /* green on focus */
  box-shadow: none;
  outline: none;
  background-color: transparent; /* no white background */
}

  </style>
</head>
<body>
  <div class="booking-container">
    <div class="text-center mb-4">
      <h2>Book Your Condo Appointment</h2>
      <p class="intro-text">
        Schedule a visit or consultation with us. Our team is ready to assist you with your dream condo.
      </p>
    </div>

    <form action="book.php" method="POST" class="needs-validation" novalidate>
      <div class="mb-3">
        <label class="form-label">Full Name</label>
        <input type="text" name="name" class="form-control" required />
      </div>
      <div class="mb-3">
        <label class="form-label">Email address</label>
        <input type="email" name="email" class="form-control" required />
      </div>
      <div class="mb-3">
        <label class="form-label">Phone Number</label>
        <input type="text" name="phone" class="form-control" />
      </div>
      <div class="mb-3">
        <label class="form-label">Preferred Date</label>
        <input type="date" id="dateInput" name="date" class="form-control" required />
      </div>
      <div class="mb-3">
        <label class="form-label">Preferred Time</label>
        <input type="time" name="time" class="form-control" required />
      </div>
      <div class="mb-3">
        <label class="form-label">Message (Optional)</label>
        <textarea name="message" class="form-control"></textarea>
      </div>
      <button type="submit" class="btn btn-primary w-100">Book Appointment</button>
    </form>
  </div>

  <script>
    const dateInput = document.getElementById('dateInput');
    const today = new Date().toISOString().split('T')[0];
    dateInput.setAttribute('min', today);

    // Optional: Bootstrap validation (just UX)
    (() => {
      'use strict'
      const forms = document.querySelectorAll('.needs-validation')
      Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }
          form.classList.add('was-validated')
        }, false)
      })
    })()
  </script>
</body>
</html>
