
jQuery(document).ready(function() {

    var calcInput = jQuery(".calc-input");

    calcInput.change(function () {
        updateAll();
        // console.log('-----------------------------------------------------');
    });
    calcInput.keyup(function () {
        updateAll();
        // console.log('-----------------------------------------------------');
    });
});

function updateAll() {
    //input variables
    var churchMember = jQuery('#church-member').val();
        // console.log('churchMember = '+ churchMember);
    var onlineHours = jQuery('#online-hours').val();
        // console.log('onlineHours = ' + onlineHours);
    var calcDegree = jQuery('#calc-degree').val();
        // console.log('calcDegree = ' + calcDegree);
    var calcHours = jQuery('#calc-hours').val();
        // console.log('calcHours = ' + calcHours);
    var externalScholarship = jQuery('#external-schol').val();
        // console.log('otherSchol = ' + otherSchol);
    var otherIncome = jQuery('#other-income').val();
        // console.log('externSchol = ' + externSchol);

    //calc result variables
    var calcTuition = 0;
    var instScholarship = 0;
    var incomeTotal = 0;
    // var costTotal = 0;

    //update tuition total
    if (churchMember === 'yes') {
        if (calcDegree === 'undergrad') {
            calcTuition = (calcHours * 345) + 350;
        }
        if (calcDegree === 'master') {
            calcTuition = (calcHours * 295) + 350;
        }
        if (calcDegree === 'phd') {
            calcTuition = (calcHours * 0) + 3900;
        }
        calcTuition = calcTuition + (onlineHours * 100);
    } else {

        if (calcDegree === 'undergrad') {
            calcTuition = (calcHours * 690) + 350;
        }
        if (calcDegree === 'master') {
            calcTuition = (calcHours * 590) + 350;
        }
        if (calcDegree === 'phd') {
            calcTuition = (calcHours * 0) + 5700;
        }
        calcTuition = calcTuition + (onlineHours * 100);
    }
    // console.log('calcTuition = ' + calcTuition);
    jQuery('#tuition-total').text(numeral(calcTuition).format("$0,0.00"));


    //update scholarship total
    if (churchMember === 'yes') {
        if (calcDegree === 'undergrad' && calcHours >= 12) {
            instScholarship = 1000;
        }
        if (calcDegree === 'master' && calcHours >= 9) {
            instScholarship = 900;
        }
        if (calcDegree === 'phd' && calcHours >= 0) {
            instScholarship = 900;
        }
    } else {
        instScholarship = 0;
    }
    jQuery('#inst-schol').val(instScholarship);


    //change income inputs to a number if the value is the string ''
    if ( externalScholarship === ''){
        externalScholarship = 0;
    }
    if ( otherIncome === ''){
        otherIncome = 0;
    }

    //update income total
    incomeTotal = parseFloat(instScholarship) + parseFloat(externalScholarship) + parseFloat(otherIncome);

    jQuery('#income-total').text(numeral(incomeTotal).format("$0,0.00"));

    //update total cost
    var costTotal = parseFloat(calcTuition) - parseFloat(incomeTotal);
    jQuery('#cost-total').text(numeral(costTotal).format("$0,0.00"));

    var installmentTotal = costTotal / 4;
    jQuery('#installment-total').text(numeral(installmentTotal).format("$0,0.00"));

}