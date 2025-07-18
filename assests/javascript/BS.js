

// --- Request for Call Popup ---
const callBtn = document.getElementById('callBtn');
const popup = document.getElementById('popup');
const closeBtn = document.getElementById('closePopup');

callBtn?.addEventListener('click', () => {
  popup.style.display = 'flex';
});

closeBtn?.addEventListener('click', () => {
  popup.style.display = 'none';
});

window.addEventListener('click', (e) => {
  if (e.target === popup) {
    popup.style.display = 'none';
  }
});

// --- 🔥 Tabs Switch Functionality ---
const tabs = document.querySelectorAll('.tab');
const tabContents = document.querySelectorAll('.tab-content');



// --- Reusable Card Injection: NTN Registration – Salaried ---
const ntnSalariedCard = `
  <div class="card">
    <div class="card-header">
      <h3>NTN Registration – Salaried</h3>
      
    </div>
    <div class="card-body">
      
      <p><strong>Requirements:</strong></p>
      <ul>
        <li><i class="fas fa-check-circle"></i> Color copy of CNIC</li>
        <li><i class="fas fa-check-circle"></i> Latest paid electricity bill</li>
        <li><i class="fas fa-check-circle"></i> Phone Number</li>
        <li><i class="fas fa-check-circle"></i> Email address</li>
      </ul>
    </div>
    <div class="card-footer">
      <button class="call-button">Whatsapp Contact</button>
      <button class="whatsapp-button"><i class="fab fa-whatsapp"></i></button>
    </div>
  </div>
`;

// --- Reusable Card Injection: NTN Registration – Business ---
const ntnBusinessCard = `
  <div class="card">
    <div class="card-header">
      <h3>NTN Registration – Business</h3>
     
    </div>
    <div class="card-body">
      <p><strong>Requirements:</strong></p>
      <ul>
        <li><i class="fas fa-check-circle"></i> Color copy of CNIC</li>
        <li><i class="fas fa-check-circle"></i> Rent agreement/ownership docs of Office premises</li>
        <li><i class="fas fa-check-circle"></i> Letterhead</li>
        <li><i class="fas fa-check-circle"></i> Latest paid electricity bill</li>
        <li><i class="fas fa-check-circle"></i> Email address & Phone Number</li>
      </ul>
    </div>
    <div class="card-footer">
      <button class="call-button">Whatsapp Contact</button>
      <button class="whatsapp-button"><i class="fab fa-whatsapp"></i></button>
    </div>
  </div>
`;



const ntnParticipationCard = `
  <div class="card">
    <div class="card-header">
      <h3>NTN Registration – Partnership or AOP</h3>
      
    </div>
    <div class="card-body">
      
      <p><strong>Requirements:</strong></p>
      <ul>
        <li><i class="fas fa-check-circle"></i> Partnership Deed</li>
        <li><i class="fas fa-check-circle"></i> Partnership registration certificate</li>
        <li><i class="fas fa-check-circle"></i> Authorization of principal Officer</li>
        <li><i class="fas fa-check-circle"></i> Color copy of CNIC's of Partners</li>
        <li><i class="fas fa-check-circle"></i> Rent agreement/ownership docs of Office premises</li>
        <li><i class="fas fa-check-circle"></i> Letterhead</li>
        <li><i class="fas fa-check-circle"></i> Latest paid electricity bill</li>
        <li><i class="fas fa-check-circle"></i> Phone Number</li>
        <li><i class="fas fa-check-circle"></i> Email address</li>
      </ul>
    </div>
    <div class="card-footer">
      <button class="call-button">Whatsapp Contact</button>
      <button class="whatsapp-button"><i class="fab fa-whatsapp"></i></button>
    </div>
  </div>
`;

const ntnCompanyCard = `
  <div class="card">
    <div class="card-header">
      <h3>NTN Registration – Company</h3>
      
    </div>
    <div class="card-body">
      
      <p><strong>Requirements:</strong></p>
      <ul>
        <li><i class="fas fa-check-circle"></i> Incorporation Certificate</li>
        <li><i class="fas fa-check-circle"></i> Memorandum & Articles of Association</li>
        <li><i class="fas fa-check-circle"></i> Partnership registration certificate</li>
        <li><i class="fas fa-check-circle"></i> Authorization of principal Officer</li>
        <li><i class="fas fa-check-circle"></i> Color copy of CNIC's of Partners</li>
        <li><i class="fas fa-check-circle"></i> Rent agreement/ownership docs of Office premises</li>
        <li><i class="fas fa-check-circle"></i> Letterhead</li>
        <li><i class="fas fa-check-circle"></i> Latest paid electricity bill</li>
        <li><i class="fas fa-check-circle"></i> Phone Number</li>
        <li><i class="fas fa-check-circle"></i> Email address</li>
      </ul>
    </div>
    <div class="card-footer">
      <button class="call-button">Whatsapp Contact</button>
      <button class="whatsapp-button"><i class="fab fa-whatsapp"></i></button>
    </div>
  </div>
`;



const ntnNPOCard = `
  <div class="card">
    <div class="card-header">
      <h3>NTN Registration – NPO</h3>
     
    </div>
    <div class="card-body">
      
      <p><strong>Requirements:</strong></p>
      <ul>
        <li><i class="fas fa-check-circle"></i> NTN of all members</li>
        <li><i class="fas fa-check-circle"></i> Registration Certificate</li>
        <li><i class="fas fa-check-circle"></i> Constitution of NPO</li>
        <li><i class="fas fa-check-circle"></i> Authorization of principal Officer</li>
        <li><i class="fas fa-check-circle"></i> Color copy of CNIC's of Partners</li>
        <li><i class="fas fa-check-circle"></i> Rent agreement/ownership docs of Office premises</li>
        <li><i class="fas fa-check-circle"></i> Letterhead</li>
        <li><i class="fas fa-check-circle"></i> Latest paid electricity bill</li>
        <li><i class="fas fa-check-circle"></i> Phone Number</li>
        <li><i class="fas fa-check-circle"></i> Email address</li>
<li><i class="fas fa-check-circle"></i> Any other document as required by the concerned authority</li>
        
      </ul>
    </div>
    <div class="card-footer">
      <button class="call-button">Whatsapp Contact</button>
      <button class="whatsapp-button"><i class="fab fa-whatsapp"></i></button>
    </div>
  </div>
`;

const ntnQuaterCard = `
  <div class="card">
    <div class="card-header">
      <h3>Quarterly Withholding Statements Tax Filing</h3>
      <div class="price-info">
        

      </div>
    </div>
    <div class="card-body">
      
      <p><strong>Requirements:</strong></p>
      <ul>
        <li><i class="fas fa-check-circle"></i> Details of Taxes deducted at source during each quarter</li>
        <li><i class="fas fa-check-circle"></i> Other information as required</li>
        
      </ul>
    </div>
    <div class="card-footer">
      <button class="call-button">Whatsapp Contact</button>
      <button class="whatsapp-button"><i class="fab fa-whatsapp"></i></button>
    </div>
  </div>
`;

const ntnAnnualCard = `
  <div class="card">
    <div class="card-header">
      <h3>Annual Income Tax Filing- Salaried</h3>
    
    </div>
    <div class="card-body">
      
      <p><strong>Requirements:</strong></p>
      <ul>
        <li><i class="fas fa-check-circle"></i> Annual Salary certificate</li>
        <li><i class="fas fa-check-circle"></i> Other Income sources if any</li>
        <li><i class="fas fa-check-circle"></i> Annual personal expense</li>
        <li><i class="fas fa-check-circle"></i> Details of all owned assets</li>
        <li><i class="fas fa-check-circle"></i> Investments during the year</li>
        <li><i class="fas fa-check-circle"></i> Disposals during the year</li>
        <li><i class="fas fa-check-circle"></i> Other inflows/outflows during the year</li>
        <li><i class="fas fa-check-circle"></i> Other information as required</li>
        
      </ul>
    </div>
    <div class="card-footer">
      <button class="call-button">Whatsapp Contact</button>
      <button class="whatsapp-button"><i class="fab fa-whatsapp"></i></button>
    </div>
  </div>
`;

const ntnSoleCard = `
  <div class="card">
    <div class="card-header">
      <h3>Annual Income Tax Filing- Sole Proprietor</h3>
    
    </div>
    <div class="card-body">
      
      <p><strong>Requirements:</strong></p>
      <ul>
        <li><i class="fas fa-check-circle"></i> Annual Accounts</li>
        <li><i class="fas fa-check-circle"></i> Other Income sources if any</li>
        <li><i class="fas fa-check-circle"></i> Annual personal expense</li>
        <li><i class="fas fa-check-circle"></i> Details of all owned assets</li>
        <li><i class="fas fa-check-circle"></i> Investments during the year</li>
        <li><i class="fas fa-check-circle"></i> Disposals during the year</li>
        <li><i class="fas fa-check-circle"></i> Other inflows/outflows during the year</li>
        <li><i class="fas fa-check-circle"></i> Other information as required</li>
        
      </ul>
    </div>
    <div class="card-footer">
      <button class="call-button">Whatsapp Contact</button>
      <button class="whatsapp-button"><i class="fab fa-whatsapp"></i></button>
    </div>
  </div>
`;


const ntnPartnerCard = `
  <div class="card">
    <div class="card-header">
      <h3>Annual Income Tax Filing- Partnership/PVT</h3>
     
    </div>
    <div class="card-body">
      
      <p><strong>Requirements:</strong></p>
      <ul>
        <li><i class="fas fa-check-circle"></i> Annual Audited Accounts</li>
        <li><i class="fas fa-check-circle"></i> Taxes deducted at source</li>
        <li><i class="fas fa-check-circle"></i> Other information as required</li>
        
      </ul>
    </div>
    <div class="card-footer">
      <button class="call-button">Whatsapp Contact</button>
      <button class="whatsapp-button"><i class="fab fa-whatsapp"></i></button>
    </div>
  </div>
`;


const ntnTrustCard = `
  <div class="card">
    <div class="card-header">
      <h3>Annual Income Tax Filing- NPO/Charitable Trusts</h3>
    
    </div>
    <div class="card-body">
      
      <p><strong>Requirements:</strong></p>
      <ul>
        <li><i class="fas fa-check-circle"></i> Annual Audited Accounts</li>
        <li><i class="fas fa-check-circle"></i> Taxes deducted at source</li>
        <li><i class="fas fa-check-circle"></i> Other information as required</li>
        
      </ul>
    </div>
    <div class="card-footer">
      <button class="call-button">Whatsapp Contact</button>
      <button class="whatsapp-button"><i class="fab fa-whatsapp"></i></button>
    </div>
  </div>
`;


const ntnGSTCard = `
  <div class="card">
    <div class="card-header">
      <h3>GST Registration</h3>
      
    </div>
    <div class="card-body">
      
      <p><strong>Requirements:</strong></p>
      <ul>
        <li><i class="fas fa-check-circle"></i> Bank Account Certificate</li>
        <li><i class="fas fa-check-circle"></i> Acquisition Date, Capacity and Business Activity</li>
        <li><i class="fas fa-check-circle"></i> Particulars of all branches (if any)</li>
        <li><i class="fas fa-check-circle"></i> Authorization of principal Officer</li>
        <li><i class="fas fa-check-circle"></i> GPS-tagged photographs of the business premises</li>
        <li><i class="fas fa-check-circle"></i> Consumer number with the gas and electricity supplier along with pictures of utilities meter</li>
        <li><i class="fas fa-check-circle"></i> GPS-tagged photographs of machinery and industrial electricity or gas meter installed (Manufacturer only)</li>
        <li><i class="fas fa-check-circle"></i> Color copy of CNIC's of Partners</li>
        <li><i class="fas fa-check-circle"></i> Rent agreement/ownership docs of Office premises</li>
        <li><i class="fas fa-check-circle"></i> Latest paid electricity bill</li>
        <li><i class="fas fa-check-circle"></i> Biometric Verification</li>
        <li><i class="fas fa-check-circle"></i> Post Verification (Manufacturer only)</li>
        
      </ul>
    </div>
    <div class="card-footer">
      <button class="call-button">Whatsapp Contact</button>
      <button class="whatsapp-button"><i class="fab fa-whatsapp"></i></button>
    </div>
  </div>
`;

const ntnFederalCard = `
  <div class="card">
    <div class="card-header">
      <h3>Monthly Federal / Provincial Sales Tax Return Filing</h3>
     
    </div>
    <div class="card-body">
      
      <p><strong>Requirements:</strong></p>
      <ul>
        <li><i class="fas fa-check-circle"></i> Copies of Sales Invoices</li>
        <li><i class="fas fa-check-circle"></i> Copies of purchases Invoices</li>
        <li><i class="fas fa-check-circle"></i> Bank Statements</li>
        <li><i class="fas fa-check-circle"></i> Other information as required</li>
        
      </ul>
    </div>
    <div class="card-footer">
      <button class="call-button">Whatsapp Contact</button>
      <button class="whatsapp-button"><i class="fab fa-whatsapp"></i></button>
    </div>
  </div>
`;

const ntnPSTCard = `
  <div class="card">
    <div class="card-header">
      <h3>PST Registration - Individual</h3>
      
    <div class="card-body">
      
      <p><strong>Requirements:</strong></p>
      <ul>
        <li><i class="fas fa-check-circle"></i> Color copy of CNIC</li>
        <li><i class="fas fa-check-circle"></i> Rent agreement/ownership docs of Office premises</li>
        <li><i class="fas fa-check-circle"></i> Letterhead</li>
        <li><i class="fas fa-check-circle"></i> Latest paid electricity bill</li>
        <li><i class="fas fa-check-circle"></i> Phone Number</li>
        <li><i class="fas fa-check-circle"></i> Email address</li>
        <li><i class="fas fa-check-circle"></i> Bank Account Certificate</li>
        <li><i class="fas fa-check-circle"></i> Acquisition Date, Capacity and Business Activity</li>
        <li><i class="fas fa-check-circle"></i> Particulars of all branches (if any)</li>
        <li><i class="fas fa-check-circle"></i> Authorization of principal Officer</li>
        <li><i class="fas fa-check-circle"></i> Signed Application Form</li>
        
      </ul>
    </div>
    <div class="card-footer">
      <button class="call-button">Whatsapp Contact</button>
      <button class="whatsapp-button"><i class="fab fa-whatsapp"></i></button>
    </div>
  </div>
`;

const ntnPSTCCard = `
  <div class="card">
    <div class="card-header">
      <h3>PST Registration - Company</h3>
      
    </div>
    <div class="card-body">
      
      <p><strong>Requirements:</strong></p>
      <ul>
      <li><i class="fas fa-check-circle"></i> Incorporation Certificate</li>
      <li><i class="fas fa-check-circle"></i> Memorandum of Association</li>
      <li><i class="fas fa-check-circle"></i> Articles of Association</li>
        <li><i class="fas fa-check-circle"></i> Incorporation Form/ Form A & 29</li>
<li><i class="fas fa-check-circle"></i> Color copy of CNIC</li>
        <li><i class="fas fa-check-circle"></i> Rent agreement/ownership docs of Office premises</li>
        <li><i class="fas fa-check-circle"></i> Letterhead</li>
        <li><i class="fas fa-check-circle"></i> Latest paid electricity bill</li>
        <li><i class="fas fa-check-circle"></i> Phone Number</li>
        <li><i class="fas fa-check-circle"></i> Email address</li>
        <li><i class="fas fa-check-circle"></i> Bank Account Certificate</li>
        <li><i class="fas fa-check-circle"></i> Acquisition Date, Capacity and Business Activity</li>
        <li><i class="fas fa-check-circle"></i> Particulars of all branches (if any)</li>
        <li><i class="fas fa-check-circle"></i> Authorization of principal Officer</li>
        <li><i class="fas fa-check-circle"></i> Signed Application Form</li>
        
      </ul>
    </div>
    <div class="card-footer">
      <button class="call-button">Whatsapp Contact</button>
      <button class="whatsapp-button"><i class="fab fa-whatsapp"></i></button>
    </div>
  </div>
`;

const ntnPSTPCard = `
  <div class="card">
    <div class="card-header">
      <h3>PST Registration - Partnership</h3>
    
    </div>
    <div class="card-body">
      
      <p><strong>Requirements:</strong></p>
      <ul>
      <li><i class="fas fa-check-circle"></i> Partnership Certificate</li>
      <li><i class="fas fa-check-circle"></i> Partnership deed</li>
<li><i class="fas fa-check-circle"></i> Color copy of CNIC</li>
        <li><i class="fas fa-check-circle"></i> Rent agreement/ownership docs of Office premises</li>
        <li><i class="fas fa-check-circle"></i> Letterhead</li>
        <li><i class="fas fa-check-circle"></i> Latest paid electricity bill</li>
        <li><i class="fas fa-check-circle"></i> Phone Number</li>
        <li><i class="fas fa-check-circle"></i> Email address</li>
        <li><i class="fas fa-check-circle"></i> Bank Account Certificate</li>
        <li><i class="fas fa-check-circle"></i> Acquisition Date, Capacity and Business Activity</li>
        <li><i class="fas fa-check-circle"></i> Particulars of all branches (if any)</li>
        <li><i class="fas fa-check-circle"></i> Authorization of principal Officer</li>
        <li><i class="fas fa-check-circle"></i> Signed Application Form</li>
        
      </ul>
    </div>
    <div class="card-footer">
      <button class="call-button">Whatsapp Contact</button>
      <button class="whatsapp-button"><i class="fab fa-whatsapp"></i></button>
    </div>
  </div>
`;

const ntnLimitedCard = `
  <div class="card">
    <div class="card-header">
      <h3>Private Limited Company Registration</h3>
      <p>(Other than Licensed entity)</p>
     
    </div>
    <div class="card-body">
      
      <p><strong>Requirements:</strong></p>
      <ul>
      <li><i class="fas fa-check-circle"></i> Three Names of the proposed company</li>
      <li><i class="fas fa-check-circle"></i> Neat and Clear Scanned copies of CNIC's of all the proposed Directors / subscribers</li>
<li><i class="fas fa-check-circle"></i> Registered address / correspondence address of the proposed Company</li>
        <li><i class="fas fa-check-circle"></i> The principal business of the proposed company</li>
        <li><i class="fas fa-check-circle"></i> Nature of the business activity</li>
        <li><i class="fas fa-check-circle"></i> Authorized Capital</li>
        <li><i class="fas fa-check-circle"></i> Paid up Capital</li>
        <li><i class="fas fa-check-circle"></i> Value per share e.g.Rs. 10, Rs. 50 or Rs. 100 etc</li>
        <li><i class="fas fa-check-circle"></i> A combination of Shares agreed TO be subscribed BY EACH director/subscriber/li>
        <li><i class="fas fa-check-circle"></i> Name of the Chief Executive of the Proposed Company</li>
        <li><i class="fas fa-check-circle"></i> Telephone numbers and email ID of all the proposed directors</li>
        <li><i class="fas fa-check-circle"></i> SECP login details of the proposed directors / subscribers(if any)</li>

      </ul>
    </div>
    <div class="card-footer">
      <button class="call-button">Whatsapp Contact</button>
      <button class="whatsapp-button"><i class="fab fa-whatsapp"></i></button>
    </div>
  </div>
`;

const ntnSingleCard = `
  <div class="card">
    <div class="card-header">
      <h3>Single Member Company Registration</h3>
      <p>(Other than Licensed entity)</p>
      
    </div>
    <div class="card-body">
      
      <p><strong>Requirements:</strong></p>
      <ul>
      <li><i class="fas fa-check-circle"></i> Three Names of the proposed company</li>
      <li><i class="fas fa-check-circle"></i> Neat and Clear Scanned copies of CNIC's of all the proposed Directors / subscribers and Nominee</li>
<li><i class="fas fa-check-circle"></i> Registered address / correspondence address of the proposed Company</li>
        <li><i class="fas fa-check-circle"></i> The principal business of the proposed company</li>
        <li><i class="fas fa-check-circle"></i> Nature of the business activity</li>
        <li><i class="fas fa-check-circle"></i> Authorized Capital</li>
        <li><i class="fas fa-check-circle"></i> Paid up Capital</li>
        <li><i class="fas fa-check-circle"></i> Value per share e.g.Rs. 10, Rs. 50 or Rs. 100 etc</li>
        <li><i class="fas fa-check-circle"></i> Telephone numbers and email ID of all the proposed directors</li>
        <li><i class="fas fa-check-circle"></i> SECP login details of the proposed directors / subscribers(if any)</li>

      </ul>
    </div>
    <div class="card-footer">
      <button class="call-button">Whatsapp Contact</button>
      <button class="whatsapp-button"><i class="fab fa-whatsapp"></i></button>
    </div>
  </div>
`;


const ntnLiabilityCard = `
  <div class="card">
    <div class="card-header">
      <h3>Limited Liability Partnership Registration (LLP)</h3>
      <p>(Other than Licensed entity)</p>
     
    </div>
    <div class="card-body">
      
      <p><strong>Requirements:</strong></p>
      <ul>
      <li><i class="fas fa-check-circle"></i> Three NAMES of the proposed LLP</li>
      <li><i class="fas fa-check-circle"></i> Neat and Clear Scanned copies of CNIC's of all the proposed Partners</li>
<li><i class="fas fa-check-circle"></i> FBR Credentials of the proposed partners</li>
        <li><i class="fas fa-check-circle"></i> Registered address/correspondence address of the proposed LLP</li>
        <li><i class="fas fa-check-circle"></i> Nature of the business activity</li>
        <li><i class="fas fa-check-circle"></i> The principal business of the proposed LLP</li>
        <li><i class="fas fa-check-circle"></i> A combination of Shares agreed TO be subscribed BY EACH partner</li>
        <li><i class="fas fa-check-circle"></i> Telephone numbers and email ID of all the proposed partners of the LLP</li>
        <li><i class="fas fa-check-circle"></i> SECP login details of the proposed partners (IF ANY)</li>

      </ul>
    </div>
    <div class="card-footer">
      <button class="call-button">Whatsapp Contact</button>
      <button class="whatsapp-button"><i class="fab fa-whatsapp"></i></button>
    </div>
  </div>
`;

const ntnAOPCard = `
  <div class="card">
    <div class="card-header">
      <h3>Partnership or AOP Registration</h3>
     
    </div>
    <div class="card-body">
      
      <p><strong>Requirements:</strong></p>
      <ul>
      <li><i class="fas fa-check-circle"></i> Three NAMES of the proposed LLP</li>
      <li><i class="fas fa-check-circle"></i> Neat and Clear Scanned copies of CNIC's of all the proposed Partners</li>
<li><i class="fas fa-check-circle"></i> FBR Credentials of the proposed partners</li>
        <li><i class="fas fa-check-circle"></i> Registered address/correspondence address of the proposed LLP</li>
        <li><i class="fas fa-check-circle"></i> Nature of the business activity</li>
        <li><i class="fas fa-check-circle"></i> The principal business of the proposed LLP</li>
        <li><i class="fas fa-check-circle"></i> A combination of Shares agreed TO be subscribed BY EACH partner</li>
        <li><i class="fas fa-check-circle"></i> Telephone numbers and email ID of all the proposed partners of the LLP</li>
        <li><i class="fas fa-check-circle"></i> SECP login details of the proposed partners (IF ANY)</li>

      </ul>
    </div>
    <div class="card-footer">
      <button class="call-button">Whatsapp Contact</button>
      <button class="whatsapp-button"><i class="fab fa-whatsapp"></i></button>
    </div>
  </div>
`;

const ntnSECPCard = `
  <div class="card">
    <div class="card-header">
      <h3>NPO Registration with SECP</h3>
    
    </div>
    <div class="card-body">
      
      <p><strong>Requirements:</strong></p>
      <ul>
      <li><i class="fas fa-check-circle"></i> Color copy of CNICs of members</li>
      <li><i class="fas fa-check-circle"></i> CVs of ALL members</li>
        <li><i class="fas fa-check-circle"></i> Objects/ Services of NPO</li>
        <li><i class="fas fa-check-circle"></i> Registered address/correspondence address of the NPO</li>
        <li><i class="fas fa-check-circle"></i> NAME of proposed CEO</li>
        <li><i class="fas fa-check-circle"></i> Telephone numbers and email ID of all the proposed members</li>
        <li><i class="fas fa-check-circle"></i> SECP login details of the proposed members (IF ANY)</li>

      </ul>
    </div>
    <div class="card-footer">
      <button class="call-button">Whatsapp Contact</button>
      <button class="whatsapp-button"><i class="fab fa-whatsapp"></i></button>
    </div>
  </div>
`;


const ntnRegistrarCard = `
  <div class="card">
    <div class="card-header">
      <h3>NPO Registration with SECP</h3>

      
    </div>
    <div class="card-body">
      
      <p><strong>Requirements:</strong></p>
      <ul>
      <li><i class="fas fa-check-circle"></i> Color copy of CNICs of members</li>
      <li><i class="fas fa-check-circle"></i> CVs of ALL members</li>
        <li><i class="fas fa-check-circle"></i> Objects/ Services of NPO</li>
        <li><i class="fas fa-check-circle"></i> Registered address/correspondence address of the NPO</li>
        <li><i class="fas fa-check-circle"></i> Name of proposed CEO/Authorized officer</li>
        <li><i class="fas fa-check-circle"></i> Telephone numbers and email ID of all the proposed members</li>

      </ul>
    </div>
    <div class="card-footer">
      <button class="call-button">Whatsapp Contact</button>
      <button class="whatsapp-button"><i class="fab fa-whatsapp"></i></button>
    </div>
  </div>
`;

const ntnTRUSTCard = `
  <div class="card">
    <div class="card-header">
      <h3>TRUST Registration with Registrar</h3>
     
    </div>
    <div class="card-body">
      
      <p><strong>Requirements:</strong></p>
      <ul>
      <li><i class="fas fa-check-circle"></i> Color copy of CNICs of Trustees</li>
      <li><i class="fas fa-check-circle"></i> CVs of ALL Trustees</li>
        <li><i class="fas fa-check-circle"></i> Objects of the Trust</li>
        <li><i class="fas fa-check-circle"></i> Registered address/correspondence address of the Turst</li>
        <li><i class="fas fa-check-circle"></i> Name of proposed CEO/Authorized officer</li>
        <li><i class="fas fa-check-circle"></i> Telephone numbers and email ID of all the proposed Trustees</li>

      </ul>
    </div>
    <div class="card-footer">
      <button class="call-button">Whatsapp Contact</button>
      <button class="whatsapp-button"><i class="fab fa-whatsapp"></i></button>
    </div>
  </div>
`;


const ntnCharitiesCard = `
  <div class="card">
    <div class="card-header">
      <h3>Registration of NPOs/ Charities/ Trusts with Sindh Charity Commission</h3>

     
    </div>
    <div class="card-body">
      
      <p><strong>Requirements:</strong></p>
      <ul>
      <li><i class="fas fa-check-circle"></i> Color copy of CNICs of Trustees</li>
      <li><i class="fas fa-check-circle"></i> CVs of ALL Trustees</li>
        <li><i class="fas fa-check-circle"></i> Objects of the Trust</li>
        <li><i class="fas fa-check-circle"></i> Registered address/correspondence address of the Turst</li>
        <li><i class="fas fa-check-circle"></i> Name of proposed CEO/Authorized officer</li>
        <li><i class="fas fa-check-circle"></i> Telephone numbers and email ID of all the proposed Trustees</li>

      </ul>
    </div>
    <div class="card-footer">
      <button class="call-button">Whatsapp Contact</button>
      <button class="whatsapp-button"><i class="fab fa-whatsapp"></i></button>
    </div>
  </div>
`;

const ntnPhilanthropyCard = `
  <div class="card">
    <div class="card-header">
      <h3>Facilitation of Certification from Pakistan Centre of Philanthropy</h3>
   
     
    </div>
    <div class="card-body">
      
      <p><strong>Requirements:</strong></p>
      <ul>
      <li><i class="fas fa-check-circle"></i> 
List of members of Governing Body/BoD/BoT etc. including names, CNICs, term of office, contact, qualification, and professional profile.</li>
      <li><i class="fas fa-check-circle"></i> License copy, Incorporation, and FBR documents of the entity</li>
        <li><i class="fas fa-check-circle"></i> Purpose for which certification is required from PCP?</li>
        <li><i class="fas fa-check-circle"></i> Programs and Beneficiaries (Vision, Mission and Objectives)</li>
        <li><i class="fas fa-check-circle"></i> List of all Bank Accounts of NPO including title and name of Bank Account</li>
        <li><i class="fas fa-check-circle"></i> Pakistan based Audited Accounts of the organization for the evaluation period signed and stamped by the external auditor</li>
        <li><i class="fas fa-check-circle"></i> Other Documents as may be specified</li>
      </ul>
    </div>
    <div class="card-footer">
      <button class="call-button">Whatsapp Contact</button>
      <button class="whatsapp-button"><i class="fab fa-whatsapp"></i></button>
    </div>
  </div>
`;

const ntnApprovalCard = `
  <div class="card">
    <div class="card-header">
      <h3>FBR NPO Approval</h3>
 
    
    </div>
    <div class="card-body">
      
      <p><strong>Requirements:</strong></p>
      <ul>
      <li><i class="fas fa-check-circle"></i> Constitutive documents of the NPO</li>
      <li><i class="fas fa-check-circle"></i> Color copy of CNICs of members</li>
        <li><i class="fas fa-check-circle"></i> Registered address/correspondence address of the Trust</li>
        <li><i class="fas fa-check-circle"></i> Name of proposed Authorized officer</li>
        <li><i class="fas fa-check-circle"></i> Telephone numbers and email IDs of all the proposed Trustees</li>
        <li><i class="fas fa-check-circle"></i> PCP certificate/ Approval from Commissioner</li>
        <li><i class="fas fa-check-circle"></i> Other Documents as may be specified</li>
      </ul>
    </div>
    <div class="card-footer">
      <button class="call-button">Whatsapp Contact</button>
      <button class="whatsapp-button"><i class="fab fa-whatsapp"></i></button>
    </div>
  </div>
`;

const ntnProvidentCard = `
  <div class="card">
    <div class="card-header">
      <h3>Registration of Provident Fund</h3>
  
     
    </div>
    <div class="card-body">
      
      <p><strong>Requirements:</strong></p>
      <ul>
      <li><i class="fas fa-check-circle"></i> Color copy of CNICs of members</li>
        <li><i class="fas fa-check-circle"></i> Registered address/correspondence address of the Trust</li>
        <li><i class="fas fa-check-circle"></i> Name of proposed Authorized officer</li>
        <li><i class="fas fa-check-circle"></i> Telephone numbers and email IDs of all the proposed Trustees</li>

      </ul>
    </div>
    <div class="card-footer">
      <button class="call-button">Whatsapp Contact</button>
      <button class="whatsapp-button"><i class="fab fa-whatsapp"></i></button>
    </div>
  </div>
`;

const ntnGratuityCard = `
  <div class="card">
    <div class="card-header">
      <h3>Registration of Gratuity Fund</h3>

     
    </div>
    <div class="card-body">
      
      <p><strong>Requirements:</strong></p>
      <ul>
      <li><i class="fas fa-check-circle"></i> Trust Deed with Rules /NTN</li>
          <li><i class="fas fa-check-circle"></i> Color copy of CNICs of members</li>
        <li><i class="fas fa-check-circle"></i> Registered address/correspondence address of the Trust</li>
        <li><i class="fas fa-check-circle"></i> Name of proposed Authorized officer</li>
        <li><i class="fas fa-check-circle"></i> Telephone numbers and email IDs of all the proposed Trustees</li>
        <li><i class="fas fa-check-circle"></i> Other Documents as may be specified</li>

      </ul>
    </div>
    <div class="card-footer">
      <button class="call-button">Whatsapp Contact</button>
      <button class="whatsapp-button"><i class="fab fa-whatsapp"></i></button>
    </div>
  </div>
`;

const ntnRecognitionCard = `
  <div class="card">
    <div class="card-header">
      <h3>Recognition of Provident Fund / Gratuity Fund with FBR</h3>

      
    </div>
    <div class="card-body">
      
      <p><strong>Requirements:</strong></p>
      <ul>
      <li><i class="fas fa-check-circle"></i> Color copy of CNICs of members</li>
            <li><i class="fas fa-check-circle"></i> Trust Deed with Rules and NTN</li>
        <li><i class="fas fa-check-circle"></i> Registered address/correspondence address of the Trust</li>
        <li><i class="fas fa-check-circle"></i> Name of proposed Authorized officer</li>
        <li><i class="fas fa-check-circle"></i> Telephone numbers and email IDs of all the proposed Trustees</li>
        <li><i class="fas fa-check-circle"></i> Other Documents as may be specified</li>
      </ul>
    </div>
    <div class="card-footer">
      <button class="call-button">Whatsapp Contact</button>
      <button class="whatsapp-button"><i class="fab fa-whatsapp"></i></button>
    </div>
  </div>
`;

const ntnFreelancerCard = `
  <div class="card">
    <div class="card-header">
      <h3>PSEB Registration’s (New Freelancer)</h3>

    
    </div>
    <div class="card-body">
      
      <p><strong>Requirements:</strong></p>
      <ul>
      <li><i class="fas fa-check-circle"></i> Personal NTN (With No Business Name)</li>
        <li><i class="fas fa-check-circle"></i> CNIC (Both Sides)</li>
        <li><i class="fas fa-check-circle"></i> Mobile Number and Email Address</li>
        <li><i class="fas fa-check-circle"></i> Personal Bank Account Letter/Certificate</li>
        <li><i class="fas fa-check-circle"></i> Platform Profile Link</li>

      </ul>
    </div>
    <div class="card-footer">
      <button class="call-button">Whatsapp Contact</button>
      <button class="whatsapp-button"><i class="fab fa-whatsapp"></i></button>
    </div>
  </div>
`;

const ntnRenewalCard = `
  <div class="card">
    <div class="card-header">
      <h3>Freelancer Renewal charges</h3>

     
    </div>
    <div class="card-body">
      
      <p><strong>Requirements:</strong></p>
      <ul>
      <li><i class="fas fa-check-circle"></i> Summary of Export Revenue with proper IT/ITeS code defined by SBP (for export-oriented freelancers).</li>
        <li><i class="fas fa-check-circle"></i> Income Tax Return for preceding year. And PRC</li>

      </ul>
    </div>
    <div class="card-footer">
      <button class="call-button">Whatsapp Contact</button>
      <button class="whatsapp-button"><i class="fab fa-whatsapp"></i></button>
    </div>
  </div>
`;

const ntnPSEBCard = `
  <div class="card">
    <div class="card-header">
      <h3>PSEB Registration’s (New Company Registration)</h3>
  
    
    </div>
    <div class="card-body">
      
      <p><strong>Requirements:</strong></p>
      <ul>
      <li><i class="fas fa-check-circle"></i> Business NTN</li>
      <li><i class="fas fa-check-circle"></i> Mobile Number and Email Address</li>
      <li><i class="fas fa-check-circle"></i> CNIC of all Directors / Shareholders / Partners / Proprietor (Both sides)</li>
      <li><i class="fas fa-check-circle"></i> Passports of Directors / Shareholders / Partners (for foreign nationals only)</li>
      <li><i class="fas fa-check-circle"></i> Memorandum and Articles of Association (for SECP registered companies only)</li>
      <li><i class="fas fa-check-circle"></i> Form 29 (for SECP registered companies only)</li>
      <li><i class="fas fa-check-circle"></i> Incorporation certificate (for SECP registered companies only)</li>
      <li><i class="fas fa-check-circle"></i> Partnership deed (for Partnership based firms)</li>
      <li><i class="fas fa-check-circle"></i> Firm registration certificate (for registered firms)</li>
      <li><i class="fas fa-check-circle"></i> Business Bank Statement of the preceding six months OR Business Bank Account Letter/Certificate (In case of new account)</li>

      </ul>
    </div>
    <div class="card-footer">
      <button class="call-button">Whatsapp Contact</button>
      <button class="whatsapp-button"><i class="fab fa-whatsapp"></i></button>
    </div>
  </div>
`;

const ntnFeeCard = `
  <div class="card">
    <div class="card-header">
      <h3>Company Renewal Fee Structure</h3>
    
      
    </div>
    <div class="card-body">
      
      <p><strong>Requirements:</strong></p>
      <ul>
      <li><i class="fas fa-check-circle"></i> Summary of Export Revenue with proper IT/ITeS code defined by SBP (for export-oriented organization).</li>
        <li><i class="fas fa-check-circle"></i> To validate PRC and domestic earnings of IT industry, attach copy of financial statement from audited accounts report or income tax returns for preceding year.</li>

      </ul>
    </div>
    <div class="card-footer">
      <button class="call-button">Whatsapp Contact</button>
      <button class="whatsapp-button"><i class="fab fa-whatsapp"></i></button>
    </div>
  </div>
`;

const ntnCallCard = `
  <div class="card">
    <div class="card-header">
      <h3>PSEB Registration (New Call Center Registration)</h3>

     
    </div>
    <div class="card-body">
      
      <p><strong>Requirements:</strong></p>
      <ul>
      <li><i class="fas fa-check-circle"></i> Business NTN.</li>
      <li><i class="fas fa-check-circle"></i> CNIC of all Directors / Shareholders / Partners / Proprietor (Both Sides)</li>
      <li><i class="fas fa-check-circle"></i> Passports of Directors / Shareholders / Partners (for foreign nationals only).</li>
      <li><i class="fas fa-check-circle"></i> Memorandum and Articles of Association (for SECP registered companies only).</li>
      <li><i class="fas fa-check-circle"></i> Form 29 (for SECP registered companies only).</li>
      <li><i class="fas fa-check-circle"></i> Incorporation certificate (for SECP registered companies only).</li>
      <li><i class="fas fa-check-circle"></i> Partnership deed (for Partnership based firms).</li>
      <li><i class="fas fa-check-circle"></i> Firm registration certificate (for registered firms)</li>
      <li><i class="fas fa-check-circle"></i> Business Bank Statement of the preceding six months. Moreover,</li>
      <li><i class="fas fa-check-circle"></i> Business Bank Account Letter/Certificate (In case of new account).</li>
      </ul>
    </div>
    <div class="card-footer">
      <button class="call-button">Whatsapp Contact</button>
      <button class="whatsapp-button"><i class="fab fa-whatsapp"></i></button>
    </div>
  </div>
`;

const ntnChargesCard = `
  <div class="card">
    <div class="card-header">
      <h3>Call Center Renewal Charges</h3>
  
      
    </div>
    <div class="card-body">
      
      <p><strong>Requirements:</strong></p>
      <ul>
      <li><i class="fas fa-check-circle"></i> Summary of Export Revenue with proper IT/ITeS code defined by SBP.</li>
        <li><i class="fas fa-check-circle"></i> To track PRC and domestic earnings of IT industry, attach copy of financial statement from audited accounts report or income tax returns for preceding year.</li>

      </ul>
    </div>
    <div class="card-footer">
      <button class="call-button">Whatsapp Contact</button>
      <button class="whatsapp-button"><i class="fab fa-whatsapp"></i></button>
    </div>
  </div>
`;

const ntnCCICard = `
  <div class="card">
    <div class="card-header">
      <h3>Chamber of Commerce & Industries (CCI)</h3>
   
      
    </div>
    <div class="card-body">
      
      <p><strong>Requirements:</strong></p>
      <ul>
      <li><i class="fas fa-check-circle"></i> Business NTN.</li>
      <li><i class="fas fa-check-circle"></i> CNIC of all Directors / Shareholders / Partners / Proprietor (Both Sides)</li>
      <li><i class="fas fa-check-circle"></i> Passports of Directors / Shareholders / Partners (for foreign nationals only).</li>
      <li><i class="fas fa-check-circle"></i> Memorandum & Article of Association along with Certificate of incorporation of Private limited, limited companies and Partnership deed should be attested by notary Public.</li>
      <li><i class="fas fa-check-circle"></i> Original bank maintenance certificate.</li>
      <li><i class="fas fa-check-circle"></i> Copy of Sales tax return (If Applicable).</li>
      <li><i class="fas fa-check-circle"></i> Passport size pictures.</li>

      </ul>
    </div>
    <div class="card-footer">
      <button class="call-button">Whatsapp Contact</button>
      <button class="whatsapp-button"><i class="fab fa-whatsapp"></i></button>
    </div>
  </div>
`;

const ntnPashaCard = `
  <div class="card">
    <div class="card-header">
      <h3>P@sha Registration</h3>
    
    
    </div>
    <div class="card-body">
      
      <p><strong>Requirements:</strong></p>
      <ul>
      <li><i class="fas fa-check-circle"></i> CNIC of all Directors / Shareholders / Partners / Proprietor (Both Sides)</li>
      <li><i class="fas fa-check-circle"></i> Company Head, Chief Executive Officer (Name, Contact Number, Email Address).</li>
      <li><i class="fas fa-check-circle"></i> HR, Finance & Marketing Head (Name, Contact Number & Email Address).</li>
      <li><i class="fas fa-check-circle"></i> Company Name.</li>
      <li><i class="fas fa-check-circle"></i> Is Turnover less than 500M or Less. (Domestic Revenue & Export Revenue).</li>
      <li><i class="fas fa-check-circle"></i> Total No. of Employees.</li>
      <li><i class="fas fa-check-circle"></i> Business Nature.</li>
      <li><i class="fas fa-check-circle"></i> Describe your core business (2-3 liner brief)</li>
      <li><i class="fas fa-check-circle"></i> Major Clients, Key Services, Products name and Website.</li>
      <li><i class="fas fa-check-circle"></i> Target Markets (Pakistan and others)</li>
      <li><i class="fas fa-check-circle"></i> Offices in Pakistan (Provide City name)</li>
      <li><i class="fas fa-check-circle"></i> Global Offices (if applicable)</li>
      <li><i class="fas fa-check-circle"></i> All Incorporation Document (MOA, AOA, Form II, Incorporation Certificate).</li>

      </ul>
    </div>
    <div class="card-footer">
      <button class="call-button">Whatsapp Contact</button>
      <button class="whatsapp-button"><i class="fab fa-whatsapp"></i></button>
    </div>
  </div>
`;

const ntnCompliancesCard = `
  <div class="card">
    <div class="card-header">
      <h3>Private Limited Company Compliances</h3>

    </div>
    <div class="card-body">
      
      <p><strong>Requirements:</strong></p>
      <ul>
      <li><i class="fas fa-check-circle"></i> SECP Credentials</li>

      </ul>
    </div>
    <div class="card-footer">
      <button class="call-button">Whatsapp Contact</button>
      <button class="whatsapp-button"><i class="fab fa-whatsapp"></i></button>
    </div>
  </div>
`;

const ntnDirectorCard = `
  <div class="card">
    <div class="card-header">
      <h3>Private Limited Company Director Changes</h3>
    
     
    </div>
    <div class="card-body">
      
      <p><strong>Requirements:</strong></p>
      <ul>
      <li><i class="fas fa-check-circle"></i> SECP Credentials</li>

      </ul>
    </div>
    <div class="card-footer">
      <button class="call-button">Whatsapp Contact</button>
      <button class="whatsapp-button"><i class="fab fa-whatsapp"></i></button>
    </div>
  </div>
`;

const ntnSingle1Card = `
  <div class="card">
    <div class="card-header">
      <h3>Single Member Company Compliances</h3>

          </div>
    <div class="card-body">
      
      <p><strong>Requirements:</strong></p>
      <ul>
      <li><i class="fas fa-check-circle"></i> SECP Credentials</li>

      </ul>
    </div>
    <div class="card-footer">
      <button class="call-button">Whatsapp Contact</button>
      <button class="whatsapp-button"><i class="fab fa-whatsapp"></i></button>
    </div>
  </div>
`;

const ntnTrademarkCard = `
  <div class="card">
    <div class="card-header">
      <h3>Trademark Registration</h3>
  
      
    </div>
    <div class="card-body">
      
      <p><strong>Requirements:</strong></p>
      <ul>
      <li><i class="fas fa-check-circle"></i> TM-1 in duplicate</li>
      <li><i class="fas fa-check-circle"></i> Six representations affixed on a durable paper of 13x8 inch</li>
      <li><i class="fas fa-check-circle"></i> CNIC of the Trademark Holder/partners</li>
      <li><i class="fas fa-check-circle"></i> Specification of goods or services sought to be protected in any class</li>
      <li><i class="fas fa-check-circle"></i> Residential address of holder or Letterhead of the Business</li>
      <li><i class="fas fa-check-circle"></i> Other Information or Documents as required</li>


      </ul>
    </div>
    <div class="card-footer">
      <button class="call-button">Whatsapp Contact</button>
      <button class="whatsapp-button"><i class="fab fa-whatsapp"></i></button>
    </div>
  </div>
`;
const ntnCopyrightCard = `
  <div class="card">
    <div class="card-header">
      <h3>Copyright Registration</h3>

      
    </div>
    <div class="card-body">
      
      <p><strong>Requirements:</strong></p>
      <ul>
     
      <li><i class="fas fa-check-circle"></i> Two Copies of work</li>
      <li><i class="fas fa-check-circle"></i> Demand Draft / Pay order of fee as applicable per work</li>
      <li><i class="fas fa-check-circle"></i> CNIC of the Copyrights Holder / partners</li>
      <li><i class="fas fa-check-circle"></i> NOC from publisher if work has been published and publisher is different from applicant</li>
      <li><i class="fas fa-check-circle"></i> Search certificate from trademark Office if the work is capable of being used on goods</li>
      <li><i class="fas fa-check-circle"></i> Residential address of holder or Letterhead of the Business</li>
      <li><i class="fas fa-check-circle"></i> Power of attorney</li>
      <li><i class="fas fa-check-circle"></i> Other Information or Documents as required</li>

      </ul>
    </div>
    <div class="card-footer">
      <button class="call-button">Whatsapp Contact</button>
      <button class="whatsapp-button"><i class="fab fa-whatsapp"></i></button>
    </div>
  </div>
`;
const ntnPatentCard = `
  <div class="card">
    <div class="card-header">
      <h3>Patent Registration</h3>
 
    
    </div>
    <div class="card-body">
      
      <p><strong>Requirements:</strong></p>
      <ul>

      <li><i class="fas fa-check-circle"></i> Form P - 1 or Form P - 1A application without priority</li>
      <li><i class="fas fa-check-circle"></i> Form P - 2 or Form P - 2A application with priority</li>
      <li><i class="fas fa-check-circle"></i> Form P- 3 for provisional or Form P- 3A for complete specification)</li>
      <li><i class="fas fa-check-circle"></i> Patent Specification</li>
      <li><i class="fas fa-check-circle"></i> Drawing(s), if any</li>
      <li><i class="fas fa-check-circle"></i> Demand Draft / Pay order of fee as applicable per work</li>
      <li><i class="fas fa-check-circle"></i> Form P - 28(power of Attorney) if any</li>
      <li><i class="fas fa-check-circle"></i> Priority document(for convention application)</li>
      <li><i class="fas fa-check-circle"></i> CNIC of the Copyrights applicant</li>
      <li><i class="fas fa-check-circle"></i> Other Information or Documents as required</li>
      </ul>
    </div>
    <div class="card-footer">
      <button class="call-button">Whatsapp Contact</button>
      <button class="whatsapp-button"><i class="fab fa-whatsapp"></i></button>
    </div>
  </div>
`;
document.addEventListener("DOMContentLoaded", function () {
  const allTab = document.getElementById("all");
  const taxTab = document.getElementById("tax");
  const corporateTab = document.getElementById("corporate");
  const bookkeepingTab = document.getElementById("bookkeeping");
  const intellectualTab = document.getElementById("intellectual");
  

  if (allTab) {
    allTab.insertAdjacentHTML("beforeend", ntnSalariedCard);
    allTab.insertAdjacentHTML("beforeend", ntnBusinessCard);
    allTab.insertAdjacentHTML("beforeend", ntnParticipationCard);
    allTab.insertAdjacentHTML("beforeend", ntnCompanyCard);
    allTab.insertAdjacentHTML("beforeend", ntnNPOCard);
    allTab.insertAdjacentHTML("beforeend", ntnQuaterCard);
    allTab.insertAdjacentHTML("beforeend", ntnAnnualCard);
    allTab.insertAdjacentHTML("beforeend", ntnSoleCard);
    allTab.insertAdjacentHTML("beforeend", ntnPartnerCard);
   allTab.insertAdjacentHTML("beforeend", ntnTrustCard);
allTab.insertAdjacentHTML("beforeend", ntnGSTCard);
   allTab.insertAdjacentHTML("beforeend", ntnFederalCard);
   allTab.insertAdjacentHTML("beforeend", ntnPSTCard);
   allTab.insertAdjacentHTML("beforeend", ntnPSTCCard);
   allTab.insertAdjacentHTML("beforeend", ntnPSTPCard);
   allTab.insertAdjacentHTML("beforeend", ntnLimitedCard);
   allTab.insertAdjacentHTML("beforeend", ntnSingleCard);
   allTab.insertAdjacentHTML("beforeend", ntnLiabilityCard);   
    allTab.insertAdjacentHTML("beforeend", ntnAOPCard);   
allTab.insertAdjacentHTML("beforeend", ntnSECPCard);
allTab.insertAdjacentHTML("beforeend", ntnRegistrarCard);
allTab.insertAdjacentHTML("beforeend", ntnTRUSTCard);
allTab.insertAdjacentHTML("beforeend", ntnCharitiesCard);
allTab.insertAdjacentHTML("beforeend", ntnPhilanthropyCard);
allTab.insertAdjacentHTML("beforeend", ntnApprovalCard);
allTab.insertAdjacentHTML("beforeend", ntnProvidentCard);
allTab.insertAdjacentHTML("beforeend", ntnGratuityCard);
allTab.insertAdjacentHTML("beforeend", ntnRecognitionCard);
allTab.insertAdjacentHTML("beforeend", ntnFreelancerCard);
allTab.insertAdjacentHTML("beforeend", ntnRenewalCard);
allTab.insertAdjacentHTML("beforeend", ntnPSEBCard);
allTab.insertAdjacentHTML("beforeend", ntnFeeCard);
allTab.insertAdjacentHTML("beforeend", ntnCallCard);
allTab.insertAdjacentHTML("beforeend", ntnChargesCard);
allTab.insertAdjacentHTML("beforeend", ntnCCICard);
allTab.insertAdjacentHTML("beforeend", ntnPashaCard);
allTab.insertAdjacentHTML("beforeend", ntnCompliancesCard);
allTab.insertAdjacentHTML("beforeend", ntnDirectorCard);
allTab.insertAdjacentHTML("beforeend", ntnSingle1Card);


allTab.insertAdjacentHTML("beforeend", ntnTrademarkCard);
allTab.insertAdjacentHTML("beforeend", ntnCopyrightCard);
allTab.insertAdjacentHTML("beforeend", ntnPatentCard);

  }

  if (taxTab) {
    taxTab.insertAdjacentHTML("beforeend", ntnSalariedCard);
    taxTab.insertAdjacentHTML("beforeend", ntnBusinessCard);
    taxTab.insertAdjacentHTML("beforeend", ntnParticipationCard);
    taxTab.insertAdjacentHTML("beforeend", ntnCompanyCard);
    taxTab.insertAdjacentHTML("beforeend", ntnNPOCard);
    taxTab.insertAdjacentHTML("beforeend", ntnQuaterCard);
    taxTab.insertAdjacentHTML("beforeend", ntnAnnualCard);
    taxTab.insertAdjacentHTML("beforeend", ntnSoleCard);
    taxTab.insertAdjacentHTML("beforeend", ntnPartnerCard);
    taxTab.insertAdjacentHTML("beforeend", ntnTrustCard);
  }
    if (corporateTab) {
    corporateTab.insertAdjacentHTML("beforeend", ntnGSTCard);
    corporateTab.insertAdjacentHTML("beforeend", ntnFederalCard);
    corporateTab.insertAdjacentHTML("beforeend", ntnPSTCard);
       corporateTab.insertAdjacentHTML("beforeend", ntnPSTCCard);
   corporateTab.insertAdjacentHTML("beforeend", ntnPSTPCard);

  }
      if (bookkeepingTab) {
     bookkeepingTab.insertAdjacentHTML("beforeend", ntnLimitedCard);
     bookkeepingTab.insertAdjacentHTML("beforeend", ntnSingleCard);
     bookkeepingTab.insertAdjacentHTML("beforeend", ntnLiabilityCard);   
     bookkeepingTab.insertAdjacentHTML("beforeend", ntnAOPCard);  
     bookkeepingTab.insertAdjacentHTML("beforeend", ntnSECPCard);
     bookkeepingTab.insertAdjacentHTML("beforeend", ntnRegistrarCard);
     bookkeepingTab.insertAdjacentHTML("beforeend", ntnTRUSTCard);
     bookkeepingTab.insertAdjacentHTML("beforeend", ntnCharitiesCard);
     bookkeepingTab.insertAdjacentHTML("beforeend", ntnPhilanthropyCard);
     bookkeepingTab.insertAdjacentHTML("beforeend", ntnApprovalCard);
     bookkeepingTab.insertAdjacentHTML("beforeend", ntnProvidentCard);
     bookkeepingTab.insertAdjacentHTML("beforeend", ntnGratuityCard);
     bookkeepingTab.insertAdjacentHTML("beforeend", ntnRecognitionCard);
     bookkeepingTab.insertAdjacentHTML("beforeend", ntnFreelancerCard);
     bookkeepingTab.insertAdjacentHTML("beforeend", ntnRenewalCard);
     bookkeepingTab.insertAdjacentHTML("beforeend", ntnPSEBCard);
     bookkeepingTab.insertAdjacentHTML("beforeend", ntnFeeCard);
     bookkeepingTab.insertAdjacentHTML("beforeend", ntnCallCard);
     bookkeepingTab.insertAdjacentHTML("beforeend", ntnChargesCard);
     bookkeepingTab.insertAdjacentHTML("beforeend", ntnCCICard);
     bookkeepingTab.insertAdjacentHTML("beforeend", ntnPashaCard);
     bookkeepingTab.insertAdjacentHTML("beforeend", ntnCompliancesCard);
     bookkeepingTab.insertAdjacentHTML("beforeend", ntnDirectorCard );
     bookkeepingTab.insertAdjacentHTML("beforeend", ntnSingle1Card );

  }
        if (intellectualTab) {
  intellectualTab.insertAdjacentHTML("beforeend", ntnTrademarkCard);
intellectualTab.insertAdjacentHTML("beforeend", ntnCopyrightCard);
intellectualTab.insertAdjacentHTML("beforeend", ntnPatentCard);

  }

  // ✅ Attach popup to all .call-button buttons in cards
  const cardCallButtons = document.querySelectorAll('.call-button');
  cardCallButtons.forEach(button => {
    button.addEventListener('click', () => {
      popup.style.display = 'flex';
    });
  });
  const searchInput = document.getElementById('searchInput');
searchInput.addEventListener('input', () => {
  const filter = searchInput.value.toLowerCase();
  const allCards = document.querySelectorAll('.tab-content .card');

  allCards.forEach(card => {
    const title = card.querySelector('h3')?.innerText.toLowerCase();
    if (title && title.includes(filter)) {
      card.style.display = '';
    } else {
      card.style.display = 'none';
    }
  });
});

}); // ✅ only this closing line needed



tabs.forEach(tab => {
  tab.addEventListener('click', () => {
    // Remove active class from all tabs
    tabs.forEach(t => t.classList.remove('active'));
    // Add active to clicked tab
    tab.classList.add('active');

    // Hide all tab contents
    tabContents.forEach(content => content.classList.remove('active'));

    // Show the selected tab content
    const tabId = tab.getAttribute('data-tab');
    const activeContent = document.getElementById(tabId);
    if (activeContent) {
      activeContent.classList.add('active');
    }
  });

});
