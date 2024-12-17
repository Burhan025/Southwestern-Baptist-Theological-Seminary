<script src="/numeral.min.js"></script>
    <div class="tuition-calculator container">
        <div class="row">
            <div class="col-12 col-md-7 calc-input-col">
                <h3>Tuition Cost</h3>
                <label class="" for="church-member">Are you a member of a Southern Baptist Church?</label>
                <span class="select-style">
                <select name="church-member" id="church-member" class="calc-input">
                    <option disabled selected>-- Select --</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
                </span>
                <label class="mt-4" for="online-hours">Number of Online Class(es) enrolled:</label>
                <input type="number" id="online-hours" name="online-hours" min="0" max="30" class="calc-input" placeholder="0">
                <p class="font-size--10 mb-0"><em>Not by hours but by number of class(es)</em></p>
                <label class="mt-4" for="calc-degree">Degree:</label>
                <span class="select-style">
                    <select name="calc-degree" id="calc-degree"  class="calc-input">
                        <option disabled selected>-- Select --</option>
                        <option value="undergrad">Undergrad</option>
                        <option value="master">Master</option>
                        <option value="phd">PhD</option>
                    </select>
                </span>
                <label class="mt-4" for="calc-hours">Hours:</label>
                <input type="number" id="calc-hours" name="calc-hours" min="0" max="100000" class="calc-input" placeholder="0">
                <h3 class="mt-4">Income</h3>
                <label for="inst-schol">Institutional Scholarships:</label>
                <span class="currency"><input type="number" id="inst-schol" name="inst-schol" min="0" max="10000" value="0" disabled></span>
                <p class="font-size--10 mb-0"><em>estimated**</em></p>
                <label class="mt-4" for="external-schol">Other Scholarship:</label>
                <span class="currency"><input type="number" id="external-schol" name="external-schol" min="0" max="10000" value="0" class="calc-input" onclick="this.select()"></span>
                <p class="font-size--10 mb-0"><em>per semester</em></p>
                <label class="mt-4" for="other-income">Church, Family, Friends:</label>
                <span class="currency"><input type="number" id="other-income" name="other-income" min="0" max="10000" value="0" class="calc-input" onclick="this.select()"></span>
                <p class="font-size--10 mb-0"><em>per semester</em></p>
            </div>
            <div class="col-12 col-md-5 cal-results-col">
                <div class="result-inner bg-seashell p-4">
                    <h3 class="mt-4 mt-md-0" >Your Cost</h3>
                    <div class="calc-result">Tuition and Fees:</div>
                    <p class="mb-0"><span id="tuition-total">$0.00</span></p>
                    <p class="font-size--10 mb-3"><em>per semester</em></p>
                    <div class="calc-result">Total Income:</div>
                    <p>-<span id="income-total">$0.00</span></p>
                    <div class="calc-result">Total Cost:</div>
                    <p><span id="cost-total">$0.00</span></p>
                    <div class="calc-result">Installment Amount:</div>
                    <p class="mb-0"><span id="installment-total">$0.00</span></p>
                    <p class="font-size--10 mb-3"><em>*4 payments</em></p>
                </div>
                <p class="font-size--10 mt-3 mt-md-5"><em>**Students who apply for scholarship and meet the requirements for scholarships typically receive $900 for Graduate students and $1,000 for College Students. To view the requirements, please visit our website.</em></p>
            </div>
        </div>
    </div>