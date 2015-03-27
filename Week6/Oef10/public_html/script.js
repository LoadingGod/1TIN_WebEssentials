/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function klik(functie) {
    var eightbitfloat = document.getElementById('eightbitfloat').value;
    var teken = eightbitfloat.substring(0, 1);
    var exponent = eightbitfloat.substring(1, 3);
    var mantissa = eightbitfloat.substring(3);
    var tekenverwerk = "-";
    var exponentverwerk = "";
    if (functie === 'splits') {
        document.getElementById('teken').value = teken;
        document.getElementById('exponent').value = exponent;
        document.getElementById('mantissa').value = mantissa;
    }
    
    if (functie === 'uitleg') {
        if (teken === "1") {
            document.getElementById('tekenuitleg').value = "Het is een negatief getal.";
        } else {
            document.getElementById('tekenuitleg').value = "Het is een positief getal.";
        }
        if (exponent === '00') {
            document.getElementById('exponentuitleg').value = "De exponent is 0, in plus-2 notatie dus -2";
        } else if (exponent === '01') {
            document.getElementById('exponentuitleg').value = "De exponent is 1, in plus-2 notatie dus -1";
        } else if (exponent === '11') {
            document.getElementById('exponentuitleg').value = "De exponent is 3, in plus-2 notatie dus +1";            
        } else if (exponent === '10') {
            document.getElementById('exponentuitleg').value = "De exponent is 2, in plus-2 notatie dus 0";
        }
        
        document.getElementById('mantissauitleg').value = "Met de implicite M0 op 1 geeft dit 1," + mantissa;
    }
    
    if (functie === 'verwerk') {
        if (teken === "1") {
            tekenverwerk = "-";
        } else {
            tekenverwerk = "+";
        }
        exponentuitleg = document.getElementById('exponentuitleg').value;
        exponentverwerk = exponentuitleg.substring(exponentuitleg.length - 2);
        document.getElementById('verwerking').value = "Het binair kommagetal is dus " + tekenverwerk + "1," + mantissa + "x2^" + exponentverwerk;
    }
    
    if (functie === 'decimaal') {
        //
    }
    
    

}