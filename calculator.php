

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link rel="stylesheet" href="assests/css/navbar.css">
      <link rel="stylesheet" href="assests/css/footer.css">
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <title>KTC Tax Calculator 2025-2026</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f8f9fa;
      color: #333;
      padding-top: 70px;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 40px 20px;
    }

    .main-content {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 40px;
      align-items: start;
    }

    .left-section {
      background: white;
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
    }

    .right-section {
      background: white;
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
    }

    .title {
      font-size: 48px;
      font-weight: 300;
      margin-bottom: 30px;
      line-height: 1.2;
    }

    .title .highlight {
      color: #28a745;
      font-weight: 400;
    }

    .description {
      font-size: 16px;
      line-height: 1.6;
      color: #666;
      margin-bottom: 30px;
    }

    .calculator-form {
      margin-bottom: 30px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-row {
      display: flex;
      gap: 15px;
      margin-bottom: 20px;
    }

    .form-row .form-group {
      flex: 1;
      margin-bottom: 0;
    }

    label {
      display: block;
      margin-bottom: 8px;
      font-weight: 500;
      color: #333;
    }

    input, select {
      width: 100%;
      padding: 12px 16px;
      border: 2px solid #e9ecef;
      border-radius: 8px;
      font-size: 16px;
      transition: border-color 0.3s ease;
      background-color: white;
    }

    input:focus, select:focus {
      outline: none;
      border-color: #28a745;
    }

    .calculate-btn {
      background: linear-gradient(135deg, #28a745, #34ce57);
      color: white;
      border: none;
      padding: 14px 30px;
      font-size: 16px;
      font-weight: 600;
      border-radius: 8px;
      cursor: pointer;
      transition: all 0.3s ease;
      text-transform: uppercase;
      letter-spacing: 0.5px;
      width: 100%;
    }

    .calculate-btn:hover {
      background: linear-gradient(135deg, #218838, #28a745);
      transform: translateY(-2px);
      box-shadow: 0 8px 25px rgba(40, 167, 69, 0.3);
    }

    .calculate-btn:active {
      transform: translateY(0);
    }

    .results-section {
      margin-top: 30px;
    }

    .results-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 1px;
      background-color: #dee2e6;
      border-radius: 8px;
      overflow: hidden;
      margin-top: 20px;
    }

    .result-item {
      background-color: white;
      padding: 20px;
      text-align: center;
    }

    .result-item:hover {
      background-color: #f8f9fa;
    }

    .result-label {
      font-size: 14px;
      color: #666;
      margin-bottom: 8px;
      font-weight: 500;
    }

    .result-value {
      font-size: 24px;
      font-weight: 600;
      color: #333;
    }

    .result-value.highlight {
      color: #dc3545;
    }

    .tax-breakdown {
      background-color: #f8f9fa;
      padding: 20px;
      border-radius: 8px;
      margin-top: 20px;
      border-left: 4px solid #28a745;
    }

    .tax-breakdown h3 {
      color: #28a745;
      margin-bottom: 15px;
      font-size: 18px;
    }

    .breakdown-item {
      display: flex;
      justify-content: space-between;
      margin-bottom: 8px;
      font-size: 14px;
    }

    .breakdown-item:last-child {
      border-top: 1px solid #dee2e6;
      padding-top: 8px;
      margin-top: 8px;
      font-weight: 600;
    }

    .disclaimer {
      background-color: #f8f9fa;
      padding: 20px;
      border-radius: 8px;
      margin-top: 30px;
      border-left: 4px solid #dc3545;
    }

    .disclaimer h3 {
      color: #dc3545;
      margin-bottom: 10px;
      font-size: 16px;
    }

    .disclaimer p {
      font-size: 14px;
      color: #666;
      line-height: 1.5;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
      .main-content {
        grid-template-columns: 1fr;
        gap: 25px;
      }

      .left-section, .right-section {
        padding: 25px;
      }

      .title {
        font-size: 36px;
        text-align: center;
      }

      .form-row {
        flex-direction: column;
        gap: 0;
      }

      .form-row .form-group {
        margin-bottom: 20px;
      }

      .results-grid {
        grid-template-columns: 1fr;
      }
    }

    @media (max-width: 480px) {
      .container {
        padding: 20px 10px;
      }

      .left-section, .right-section {
        padding: 20px;
      }

      .title {
        font-size: 28px;
      }

      .result-item {
        padding: 20px 10px;
      }

      .result-value {
        font-size: 20px;
      }
    }
  </style>
</head>
<body>
 <!-- Navigation -->
     <nav class="navbar" id="navbar">
        <div class="nav-container">
            <div class="logo">
                <span class="logo-text">KTC</span>
            </div>
            <ul class="nav-menu" id="nav-menu">
                <li class="nav-item">
                    <a href="index.php" class="nav-link">
                        <i class="fas fa-home"></i>
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#services" class="nav-link">
                        <i class="fas fa-file-invoice-dollar"></i>
                        Tax Tool
                        <i class="fas fa-chevron-down dropdown-arrow"></i>
                    </a>
                    <div class="dropdown">
                    <div class="dropdown-item">
                        <a href="calculator.php" class="dropdown-link">
                            <i class="fas fa-calculator"></i>
                            Tax Calculator
                        </a>
                    </div>
                    <div class="dropdown-item">
                        <a href="NTN_page.php" class="dropdown-link">
                            <i class="fas fa-id-card"></i>
                            NTN
                        </a>
                    </div>
                    <div class="dropdown-item">
                        <a href="faq.php" class="dropdown-link">
                            <i class="fas fa-question-circle"></i>
                            FAQ
                        </a>
                    </div>
                     <div class="dropdown-item">
                        <a href="blog.php" class="dropdown-link">
                            <i class="fas fa-pen-square"></i>
                            BLog
                        </a>
                    </div>
                </div>
                </li>
                <li class="nav-item">
                    <a href="resources.php" class="nav-link">
                        <i class="fas fa-folder-open"></i>
                        Resources
                    </a>
                </li>
                <li class="nav-item">
                    <a href="BS.php" class="nav-link">
                 <i class="fa fa-university"></i>
                        Business Service
                    </a>
                </li>
                <li class="nav-item">
                    <a href="contactus.php" class="nav-link">
                        <i class="fas fa-envelope"></i>
                       Contact us
                    </a>
                </li>
            </ul>
            <div class="auth-buttons">
             
                <a href="sigupup.php" class="auth-btn signup-btn">
                    <i class="fas fa-user-plus"></i>
                    Sign Up
                </a>
            </div>
            <div class="mobile-menu" id="mobile-menu">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>
<div class="container">
  <div class="main-content">
    <div class="left-section">
      <h1 class="title">
        Salary <span class="highlight">Tax</span><br>
        Calculator
      </h1>
      
      <p class="description">
       Effortlessly estimate your take-home pay with our Salary Tax Calculator
Just enter your gross salary and details to instantly see your net take-home pay after tax deduction. Perfect for employees to plan budgets, evaluate job offers, or understand their true earnings. Fast, free, and completely confidential - get your personalized results in seconds.
      </p>
      
      <div class="tax-breakdown" id="taxBreakdown" style="display: none;">
        <h3>Tax Calculation Breakdown</h3>
        <div id="breakdownDetails"></div>
      </div>
   
      <div class="disclaimer">
        <h3>Disclaimer</h3>
        <p>This calculator provides an estimate based on current tax rates and may not reflect your exact tax liability. Please consult with a qualified tax advisor for precise calculations.</p>
      </div>
    </div>

    <div class="right-section">
      <div class="calculator-form">
        <div class="form-row">
          <div class="form-group">
            <label for="taxYear">Tax Year</label>
            <select id="taxYear">
              <option value="2025-2026">2025-2026 (New Rates)</option>
              <option value="2024-2025">2024-2025 (Current Rates)</option>
            </select>
          </div>
          <div class="form-group">
            <label for="monthlySalary">Monthly Salary (PKR)</label>
            <input type="number" id="monthlySalary" placeholder="Enter your monthly salary" min="0" step="1000">
          </div>
        </div>
        
        <button class="calculate-btn" onclick="calculateTax()">Calculate Tax</button>
      </div>

      <div class="results-section">
        <div class="results-grid" id="resultsGrid">
          <div class="result-item">
            <div class="result-label">Monthly Salary</div>
            <div class="result-value" id="displayMonthlySalary">Rs. 0</div>
          </div>
          <div class="result-item">
            <div class="result-label">Monthly Tax</div>
            <div class="result-value highlight" id="displayMonthlyTax">Rs. 0</div>
          </div>
          <div class="result-item">
            <div class="result-label">Salary After Tax</div>
            <div class="result-value" id="displaySalaryAfterTax">Rs. 0</div>
          </div>
          <div class="result-item">
            <div class="result-label">Yearly Salary</div>
            <div class="result-value" id="displayYearlySalary">Rs. 0</div>
          </div>
          <div class="result-item">
            <div class="result-label">Yearly Tax</div>
            <div class="result-value highlight" id="displayYearlyTax">Rs. 0</div>
          </div>
          <div class="result-item">
            <div class="result-label">Yearly After Tax</div>
            <div class="result-value" id="displayYearlyAfterTax">Rs. 0</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

   <!-- Footer -->
    <footer class="footer" id="contact">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>Contact Information</h3>
                    <!--  <p><i class="fas fa-phone"></i> (555) 123-4567</p> -->
                    <p><i class="fas fa-envelope"></i>keytaxconsultancyofficial@gmail.com</p>
                    <div class="social-links">
                        <a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a>
                        <a href="https://www.instagram.com/keytaxconsultancy?igsh=MTluZzI5OGR2d3RyNA=="><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="footer-section">
                    <h3>Quick Links</h3>
                    <p><a href="index.php">Home</a></p>
                    <p><a href="BS.php">Services</a></p>
                    <p><a href="contactus.php">Contact Us</a></p>
                </div>
                <div class="footer-section">
                    <h3>Services</h3>
                    <p><a href="BS.php">Individual Tax Return</a></p>
                    <p><a href="BS.php">Business Tax Filing</a></p>
                    <p><a href="BS.php">Tax Planning</a></p>
                    <p><a href="BS.php">Audit Protection</a></p>
                </div>
                <div class="footer-section">
                    <h3>Business Hours</h3>
                    <p>Monday - Friday: 9:00 AM - 6:00 PM</p>
                    <p>Saturday: 9:00 AM - 4:00 PM</p>
                    <p>Sunday: Closed</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 TaxPro. All rights reserved. | Privacy Policy | Terms of Service</p>
            </div>
        </div>
    </footer>


<script>
  function calculateTax() {
    const salaryInput = document.getElementById("monthlySalary").value;
    const taxYear = document.getElementById("taxYear").value;
    const salary = parseFloat(salaryInput);
    
    if (isNaN(salary) || salary <= 0) {
      alert("Please enter a valid monthly salary!");
      return;
    }

    const annualSalary = salary * 12;
    let yearlyTax = 0;
    let breakdownHtml = '';
    
    if (taxYear === "2025-2026") {
      // New Tax Rates for 2025-2026
      const result = calculateNewTaxRates(annualSalary);
      yearlyTax = result.tax;
      breakdownHtml = result.breakdown;
    } else {
      // Current Tax Rates for 2024-2025
      const result = calculateCurrentTaxRates(annualSalary);
      yearlyTax = result.tax;
      breakdownHtml = result.breakdown;
    }

    // Calculate all values
    const monthlyTax = yearlyTax / 12;
    const salaryAfterTax = salary - monthlyTax;
    const yearlyAfterTax = annualSalary - yearlyTax;

    // Display results
    document.getElementById("displayMonthlySalary").textContent = formatCurrency(salary);
    document.getElementById("displayMonthlyTax").textContent = formatCurrency(monthlyTax);
    document.getElementById("displaySalaryAfterTax").textContent = formatCurrency(salaryAfterTax);
    document.getElementById("displayYearlySalary").textContent = formatCurrency(annualSalary);
    document.getElementById("displayYearlyTax").textContent = formatCurrency(yearlyTax);
    document.getElementById("displayYearlyAfterTax").textContent = formatCurrency(yearlyAfterTax);

    // Show breakdown
    document.getElementById("breakdownDetails").innerHTML = breakdownHtml;
    document.getElementById("taxBreakdown").style.display = "block";
  }

  function calculateCurrentTaxRates(annualSalary) {
    let tax = 0;
    let breakdown = '';
    
    if (annualSalary <= 600000) {
      tax = 0;
      breakdown = '<div class="breakdown-item"><span>Up to Rs. 600,000:</span><span>Rs. 0 (0%)</span></div>';
    } else if (annualSalary <= 1200000) {
      const taxableAmount = annualSalary - 600000;
      tax = taxableAmount * 0.05; // 5% on excess
      breakdown = `
        <div class="breakdown-item"><span>Up to Rs. 600,000:</span><span>Rs. 0 (0%)</span></div>
        <div class="breakdown-item"><span>Rs. ${formatNumber(taxableAmount)} at 5%:</span><span>Rs. ${formatNumber(tax)}</span></div>
      `;
    } else if (annualSalary <= 2200000) {
      const taxableAmount = annualSalary - 1200000;
      tax = 30000 + (taxableAmount * 0.15); // Rs. 30,000 + 15% on excess
      breakdown = `
        <div class="breakdown-item"><span>Up to Rs. 600,000:</span><span>Rs. 0 (0%)</span></div>
        <div class="breakdown-item"><span>Rs. 600,000 at 5%:</span><span>Rs. 30,000</span></div>
        <div class="breakdown-item"><span>Rs. ${formatNumber(taxableAmount)} at 15%:</span><span>Rs. ${formatNumber(taxableAmount * 0.15)}</span></div>
      `;
    } else if (annualSalary <= 3200000) {
      const taxableAmount = annualSalary - 2200000;
      tax = 180000 + (taxableAmount * 0.25); // Rs. 180,000 + 25% on excess
      breakdown = `
        <div class="breakdown-item"><span>Up to Rs. 600,000:</span><span>Rs. 0 (0%)</span></div>
        <div class="breakdown-item"><span>Rs. 600,000 at 5%:</span><span>Rs. 30,000</span></div>
        <div class="breakdown-item"><span>Rs. 1,000,000 at 15%:</span><span>Rs. 150,000</span></div>
        <div class="breakdown-item"><span>Rs. ${formatNumber(taxableAmount)} at 25%:</span><span>Rs. ${formatNumber(taxableAmount * 0.25)}</span></div>
      `;
    } else if (annualSalary <= 4100000) {
      const taxableAmount = annualSalary - 3200000;
      tax = 430000 + (taxableAmount * 0.30); // Rs. 430,000 + 30% on excess
      breakdown = `
        <div class="breakdown-item"><span>Up to Rs. 600,000:</span><span>Rs. 0 (0%)</span></div>
        <div class="breakdown-item"><span>Rs. 600,000 at 5%:</span><span>Rs. 30,000</span></div>
        <div class="breakdown-item"><span>Rs. 1,000,000 at 15%:</span><span>Rs. 150,000</span></div>
        <div class="breakdown-item"><span>Rs. 1,000,000 at 25%:</span><span>Rs. 250,000</span></div>
        <div class="breakdown-item"><span>Rs. ${formatNumber(taxableAmount)} at 30%:</span><span>Rs. ${formatNumber(taxableAmount * 0.30)}</span></div>
      `;
    } else {
      const taxableAmount = annualSalary - 4100000;
      tax = 700000 + (taxableAmount * 0.35); // Rs. 700,000 + 35% on excess
      breakdown = `
        <div class="breakdown-item"><span>Up to Rs. 600,000:</span><span>Rs. 0 (0%)</span></div>
        <div class="breakdown-item"><span>Rs. 600,000 at 5%:</span><span>Rs. 30,000</span></div>
        <div class="breakdown-item"><span>Rs. 1,000,000 at 15%:</span><span>Rs. 150,000</span></div>
        <div class="breakdown-item"><span>Rs. 1,000,000 at 25%:</span><span>Rs. 250,000</span></div>
        <div class="breakdown-item"><span>Rs. 900,000 at 30%:</span><span>Rs. 270,000</span></div>
        <div class="breakdown-item"><span>Rs. ${formatNumber(taxableAmount)} at 35%:</span><span>Rs. ${formatNumber(taxableAmount * 0.35)}</span></div>
      `;
    }
    
    breakdown += `<div class="breakdown-item"><span><strong>Total Annual Tax:</strong></span><span><strong>Rs. ${formatNumber(tax)}</strong></span></div>`;
    
    return { tax: tax, breakdown: breakdown };
  }

  function calculateNewTaxRates(annualSalary) {
    let tax = 0;
    let breakdown = '';
    
    if (annualSalary <= 600000) {
      tax = 0;
      breakdown = '<div class="breakdown-item"><span>Up to Rs. 600,000:</span><span>Rs. 0 (0%)</span></div>';
    } else if (annualSalary <= 1200000) {
      const taxableAmount = annualSalary - 600000;
      tax = taxableAmount * 0.01; // 1% on excess
      breakdown = `
        <div class="breakdown-item"><span>Up to Rs. 600,000:</span><span>Rs. 0 (0%)</span></div>
        <div class="breakdown-item"><span>Rs. ${formatNumber(taxableAmount)} at 1%:</span><span>Rs. ${formatNumber(tax)}</span></div>
      `;
    } else if (annualSalary <= 2200000) {
      const taxableAmount = annualSalary - 1200000;
      tax = 6000 + (taxableAmount * 0.11); // Rs. 6,000 + 11% on excess
      breakdown = `
        <div class="breakdown-item"><span>Up to Rs. 600,000:</span><span>Rs. 0 (0%)</span></div>
        <div class="breakdown-item"><span>Rs. 600,000 at 1%:</span><span>Rs. 6,000</span></div>
        <div class="breakdown-item"><span>Rs. ${formatNumber(taxableAmount)} at 11%:</span><span>Rs. ${formatNumber(taxableAmount * 0.11)}</span></div>
      `;
    } else if (annualSalary <= 3200000) {
      const taxableAmount = annualSalary - 2200000;
      tax = 116000 + (taxableAmount * 0.23); // Rs. 116,000 + 23% on excess
      breakdown = `
        <div class="breakdown-item"><span>Up to Rs. 600,000:</span><span>Rs. 0 (0%)</span></div>
        <div class="breakdown-item"><span>Rs. 600,000 at 1%:</span><span>Rs. 6,000</span></div>
        <div class="breakdown-item"><span>Rs. 1,000,000 at 11%:</span><span>Rs. 110,000</span></div>
        <div class="breakdown-item"><span>Rs. ${formatNumber(taxableAmount)} at 23%:</span><span>Rs. ${formatNumber(taxableAmount * 0.23)}</span></div>
      `;
    } else if (annualSalary <= 4100000) {
      const taxableAmount = annualSalary - 3200000;
      tax = 346000 + (taxableAmount * 0.30); // Rs. 346,000 + 30% on excess
      breakdown = `
        <div class="breakdown-item"><span>Up to Rs. 600,000:</span><span>Rs. 0 (0%)</span></div>
        <div class="breakdown-item"><span>Rs. 600,000 at 1%:</span><span>Rs. 6,000</span></div>
        <div class="breakdown-item"><span>Rs. 1,000,000 at 11%:</span><span>Rs. 110,000</span></div>
        <div class="breakdown-item"><span>Rs. 1,000,000 at 23%:</span><span>Rs. 230,000</span></div>
        <div class="breakdown-item"><span>Rs. ${formatNumber(taxableAmount)} at 30%:</span><span>Rs. ${formatNumber(taxableAmount * 0.30)}</span></div>
      `;
    } else {
      const taxableAmount = annualSalary - 4100000;
      tax = 616000 + (taxableAmount * 0.35); // Rs. 616,000 + 35% on excess
      breakdown = `
        <div class="breakdown-item"><span>Up to Rs. 600,000:</span><span>Rs. 0 (0%)</span></div>
        <div class="breakdown-item"><span>Rs. 600,000 at 1%:</span><span>Rs. 6,000</span></div>
        <div class="breakdown-item"><span>Rs. 1,000,000 at 11%:</span><span>Rs. 110,000</span></div>
        <div class="breakdown-item"><span>Rs. 1,000,000 at 23%:</span><span>Rs. 230,000</span></div>
        <div class="breakdown-item"><span>Rs. 900,000 at 30%:</span><span>Rs. 270,000</span></div>
        <div class="breakdown-item"><span>Rs. ${formatNumber(taxableAmount)} at 35%:</span><span>Rs. ${formatNumber(taxableAmount * 0.35)}</span></div>
      `;
    }
    
    breakdown += `<div class="breakdown-item"><span><strong>Total Annual Tax:</strong></span><span><strong>Rs. ${formatNumber(tax)}</strong></span></div>`;
    
    return { tax: tax, breakdown: breakdown };
  }

  function formatCurrency(amount) {
    return new Intl.NumberFormat('en-PK', {
      style: 'currency',
      currency: 'PKR',
      minimumFractionDigits: 0,
      maximumFractionDigits: 0
    }).format(Math.round(amount));
  }

  function formatNumber(amount) {
    return new Intl.NumberFormat('en-PK', {
      minimumFractionDigits: 0,
      maximumFractionDigits: 0
    }).format(Math.round(amount));
  }

  // Allow Enter key to calculate
  document.getElementById("monthlySalary").addEventListener("keypress", function(event) {
    if (event.key === "Enter") {
      calculateTax();
    }
  });

  // Calculate on tax year change
  document.getElementById("taxYear").addEventListener("change", function() {
    if (document.getElementById("monthlySalary").value) {
      calculateTax();
    }
  });
</script>

</body>
</html>