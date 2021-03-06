<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>{{ $title }}</title>

    <!-- Favicon 
    <link rel="icon" href="/favicon.ico">
    -->

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <!-- Custom styles -->
    <link href="/css/main.css" rel="stylesheet">

  </head>
  <body>
    <div class="container">
      <div class="py-5 text-center">
        <h1 class="title">{{ $title }}</h1>
        <p class="lead">This loan calculator will determine how much you can borrow for different payments, interest rates and terms.</p>
      </div>
      
      <form class="form-wrapper" id="loanCalculator" method="post" action="">
        <!-- Monthly Payments -->
        <div class="mb-3">
          <label for="monthlyPayments">Monthly Payments</label>
          <input type="text" class="form-control" id="monthlyPayments" name="monthlyPayments" required>
        </div>
        <!-- Interest Rate -->
        <div class="mb-3">
          <label for="lastName">Interest Rate</label>
          <input type="text" class="form-control" id="interestRate" name="interestRate" required>
        </div>
        <!-- Loan Period -->
        <div class="mb-3">
          <label for="loanTerm">Number of Payments (in months)</label>
          <select class="custom-select d-block w-100" id="loanTerm" name="loanTerm" required>
            <option value="">Choose...</option>
            <option value="12">12</option>
            <option value="24">24</option>
            <option value="36">36</option>
            <option value="48">48</option>
            <option value="60">60</option>
            <option value="72">72</option>
            <option value="84">84</option>
          </select>
        </div>
        <!-- Amortization Schedule checkbox -->
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="amortizationSchedule">
          <label class="custom-control-label" for="amortizationSchedule">Show Amortization Schedule</label>
        </div>
        <!-- Calculate button -->
        <hr class="mb-3">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Calculate Loan Amount</button>
      </form>

      <!-- Output -->
      <hr class="mb-3">
      <div class="text-center">
        <h3 class="display-4">Estimated Loan Amount</h3>
        <h1 class="display-2 text-primary">$20,000</h1>
      </div>
      
    </div>
    <!-- Bootstrap JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>