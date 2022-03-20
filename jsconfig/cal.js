function isEngchar(str, obj) {

    var orgi_text = "1234567890.";
    var str_length = str.length;
    var str_length_end = str_length - 1;
    var isEng = true;
    var Char_At = "";
    for (i = 0; i < str_length; i++) {
        Char_At = str.charAt(i);
        if (orgi_text.indexOf(Char_At) == -1) {
            isEng = false;
        }
    }
    if (str_length >= 1) {
        if (isEng == false) {
            obj.value = str.substr(0, str_length_end);
            obj.value = "";
        }
    }
    return isEng; // ถ้าเป็น true แสดงว่าเป็นภาษาอังกฤษ
}

function sumValue(myForm) {

    cat785D = myForm.elements["cat785D"].value * 1;
    bcmBWE1 = myForm.elements["bcmBWE1"].value * 1;
    bcmBWE2 = myForm.elements["bcmBWE2"].value * 1;

    TotaltripBWE = 0;
    TotalbcmBWE = (bcmBWE1 + bcmBWE2);
    subTotalbcmBWE = (TotalbcmBWE / cat785D);
    myForm.elements["TotaltripBWE"].value = TotaltripBWE;
    myForm.elements["subTotalbcmBWE"].value = subTotalbcmBWE.toFixed(2);
    myForm.elements["TotalbcmBWE"].value = TotalbcmBWE.toFixed(2);

    overSizerCR1 = myForm.elements["overSizerCR1"].value * 1;
    overSizerCR2 = myForm.elements["overSizerCR2"].value * 1;
    overSizerCR3 = myForm.elements["overSizerCR3"].value * 1;
    overSizerCR4 = myForm.elements["overSizerCR4"].value * 1;
    overSizerCR5 = myForm.elements["overSizerCR5"].value * 1;
    overSizerCR6 = myForm.elements["overSizerCR6"].value * 1;

    TotalOverSizer = overSizerCR1 + overSizerCR2 + overSizerCR3 + overSizerCR4 + overSizerCR5 + overSizerCR6;
    myForm.elements["TotalOverSizer"].value = TotalOverSizer;



    cat785D = myForm.elements["cat785D"].value * 1;
    trip785D_CR1_1 = myForm.elements["trip785D_CR1_1"].value * 1;
    trip785D_CR1_2 = myForm.elements["trip785D_CR1_2"].value * 1;
    trip785D_CR1_3 = myForm.elements["trip785D_CR1_3"].value * 1;
    trip785D_CR1_4 = myForm.elements["trip785D_CR1_4"].value * 1;
    trip785D_CR1_5 = myForm.elements["trip785D_CR1_5"].value * 1;
    trip785D_CR1_6 = myForm.elements["trip785D_CR1_6"].value * 1;
    Totaltrip785D_CR1 = (trip785D_CR1_1 + trip785D_CR1_2) + (trip785D_CR1_3 + trip785D_CR1_4) + (trip785D_CR1_5 + trip785D_CR1_6);
    subTotalbcm785D_CR1 = (trip785D_CR1_1 + trip785D_CR1_2) + (trip785D_CR1_3 + trip785D_CR1_4) + (trip785D_CR1_5 + trip785D_CR1_6);
    Totalbcm785D_CR1 = (Totaltrip785D_CR1 * cat785D);

    myForm.elements["Totaltrip785D_CR1"].value = Totaltrip785D_CR1;
    myForm.elements["subTotalbcm785D_CR1"].value = subTotalbcm785D_CR1.toFixed(2);
    myForm.elements["Totalbcm785D_CR1"].value = Totalbcm785D_CR1.toFixed(2);

    // --------------------------------777D---------------------------------------- // 

    cat777D = myForm.elements["cat777D"].value * 1;
    trip777D_CR1_1 = myForm.elements["trip777D_CR1_1"].value * 1;
    trip777D_CR1_2 = myForm.elements["trip777D_CR1_2"].value * 1;
    trip777D_CR1_3 = myForm.elements["trip777D_CR1_3"].value * 1;
    trip777D_CR1_4 = myForm.elements["trip777D_CR1_4"].value * 1;
    trip777D_CR1_5 = myForm.elements["trip777D_CR1_5"].value * 1;
    trip777D_CR1_6 = myForm.elements["trip777D_CR1_6"].value * 1;

    Totaltrip777D_CR1 = (trip777D_CR1_1 + trip777D_CR1_2) + (trip777D_CR1_3 + trip777D_CR1_4) + (trip777D_CR1_5 + trip777D_CR1_6);
    subTotalbcm777D_CR1 = (Totaltrip777D_CR1 * cat777D) / cat785D;
    Totalbcm777D_CR1 = (Totaltrip777D_CR1 * cat777D);

    myForm.elements["Totaltrip777D_CR1"].value = Totaltrip777D_CR1;
    myForm.elements["subTotalbcm777D_CR1"].value = subTotalbcm777D_CR1.toFixed(2);
    myForm.elements["Totalbcm777D_CR1"].value = Totalbcm777D_CR1.toFixed(2);


    // -------------------------------------EGAT-------------------------------- // 

    eGAT = myForm.elements["EGAT"].value * 1;
    tripEGAT_CR1_1 = myForm.elements["tripEGAT_CR1_1"].value * 1;
    tripEGAT_CR1_2 = myForm.elements["tripEGAT_CR1_2"].value * 1;
    tripEGAT_CR1_3 = myForm.elements["tripEGAT_CR1_3"].value * 1;
    tripEGAT_CR1_4 = myForm.elements["tripEGAT_CR1_4"].value * 1;
    tripEGAT_CR1_5 = myForm.elements["tripEGAT_CR1_5"].value * 1;
    tripEGAT_CR1_6 = myForm.elements["tripEGAT_CR1_6"].value * 1;

    TotaltripEGAT_CR1 = (tripEGAT_CR1_1 + tripEGAT_CR1_2) + (tripEGAT_CR1_3 + tripEGAT_CR1_4) + (tripEGAT_CR1_5 + tripEGAT_CR1_6);
    subTotalbcmEGAT_CR1 = (TotaltripEGAT_CR1 * eGAT) / cat785D;
    TotalbcmEGAT_CR1 = (TotaltripEGAT_CR1 * eGAT);

    myForm.elements["TotaltripEGAT_CR1"].value = TotaltripEGAT_CR1;
    myForm.elements["subTotalbcmEGAT_CR1"].value = subTotalbcmEGAT_CR1.toFixed(2);
    myForm.elements["TotalbcmEGAT_CR1"].value = TotalbcmEGAT_CR1.toFixed(2);



    // ----------------------------------12T------------------------------------------ // 


    dum12T = myForm.elements["dum12T"].value * 1;
    trip12T_CR1_1 = myForm.elements["trip12T_CR1_1"].value * 1;
    trip12T_CR1_2 = myForm.elements["trip12T_CR1_2"].value * 1;
    trip12T_CR1_3 = myForm.elements["trip12T_CR1_3"].value * 1;
    trip12T_CR1_4 = myForm.elements["trip12T_CR1_4"].value * 1;
    trip12T_CR1_5 = myForm.elements["trip12T_CR1_5"].value * 1;
    trip12T_CR1_6 = myForm.elements["trip12T_CR1_6"].value * 1;

    Totaltrip12T_CR1 = (trip12T_CR1_1 + trip12T_CR1_2) + (trip12T_CR1_3 + trip12T_CR1_4) + (trip12T_CR1_5 + trip12T_CR1_6);
    subTotalbcm12T_CR1 = (Totaltrip12T_CR1 * dum12T) / cat785D;
    Totalbcm12T_CR1 = (Totaltrip12T_CR1 * dum12T);

    myForm.elements["Totaltrip12T_CR1"].value = Totaltrip12T_CR1;
    myForm.elements["subTotalbcm12T_CR1"].value = subTotalbcm12T_CR1.toFixed(2);
    myForm.elements["Totalbcm12T_CR1"].value = Totalbcm12T_CR1.toFixed(2);


    dum12T = myForm.elements["dum12T"].value * 1;
    trip12T_CR2_1 = myForm.elements["trip12T_CR2_1"].value * 1;
    trip12T_CR2_2 = myForm.elements["trip12T_CR2_2"].value * 1;
    trip12T_CR2_3 = myForm.elements["trip12T_CR2_3"].value * 1;
    trip12T_CR2_4 = myForm.elements["trip12T_CR2_4"].value * 1;
    trip12T_CR2_5 = myForm.elements["trip12T_CR2_5"].value * 1;
    trip12T_CR2_6 = myForm.elements["trip12T_CR2_6"].value * 1;

    Totaltrip12T_CR2 = (trip12T_CR2_1 + trip12T_CR2_2) + (trip12T_CR2_3 + trip12T_CR2_4) + (trip12T_CR2_5 + trip12T_CR2_6);
    subTotalbcm12T_CR2 = (Totaltrip12T_CR2 * dum12T) / cat785D;
    Totalbcm12T_CR2 = (Totaltrip12T_CR2 * dum12T);

    myForm.elements["Totaltrip12T_CR2"].value = Totaltrip12T_CR2;
    myForm.elements["subTotalbcm12T_CR2"].value = subTotalbcm12T_CR2.toFixed(2);
    myForm.elements["Totalbcm12T_CR2"].value = Totalbcm12T_CR2.toFixed(2);




    dum12T = myForm.elements["dum12T"].value * 1;
    trip12T_CR3_1 = myForm.elements["trip12T_CR3_1"].value * 1;
    trip12T_CR3_2 = myForm.elements["trip12T_CR3_2"].value * 1;
    trip12T_CR3_3 = myForm.elements["trip12T_CR3_3"].value * 1;
    trip12T_CR3_4 = myForm.elements["trip12T_CR3_4"].value * 1;
    trip12T_CR3_5 = myForm.elements["trip12T_CR3_5"].value * 1;
    trip12T_CR3_6 = myForm.elements["trip12T_CR3_6"].value * 1;

    Totaltrip12T_CR3 = (trip12T_CR3_1 + trip12T_CR3_2) + (trip12T_CR3_3 + trip12T_CR3_4) + (trip12T_CR3_5 + trip12T_CR3_6);
    subTotalbcm12T_CR3 = (Totaltrip12T_CR3 * dum12T) / cat785D;
    Totalbcm12T_CR3 = (Totaltrip12T_CR3 * dum12T);

    myForm.elements["Totaltrip12T_CR3"].value = Totaltrip12T_CR3;
    myForm.elements["subTotalbcm12T_CR3"].value = subTotalbcm12T_CR3.toFixed(2);
    myForm.elements["Totalbcm12T_CR3"].value = Totalbcm12T_CR3.toFixed(2);

    dum12T = myForm.elements["dum12T"].value * 1;
    trip12T_CR4_1 = myForm.elements["trip12T_CR4_1"].value * 1;
    trip12T_CR4_2 = myForm.elements["trip12T_CR4_2"].value * 1;
    trip12T_CR4_3 = myForm.elements["trip12T_CR4_3"].value * 1;
    trip12T_CR4_4 = myForm.elements["trip12T_CR4_4"].value * 1;
    trip12T_CR4_5 = myForm.elements["trip12T_CR4_5"].value * 1;
    trip12T_CR4_6 = myForm.elements["trip12T_CR4_6"].value * 1;

    Totaltrip12T_CR4 = (trip12T_CR4_1 + trip12T_CR4_2) + (trip12T_CR4_3 + trip12T_CR4_4) + (trip12T_CR4_5 + trip12T_CR4_6);
    subTotalbcm12T_CR4 = (Totaltrip12T_CR4 * dum12T) / cat785D;
    Totalbcm12T_CR4 = (Totaltrip12T_CR4 * dum12T);

    myForm.elements["Totaltrip12T_CR4"].value = Totaltrip12T_CR4;
    myForm.elements["subTotalbcm12T_CR4"].value = subTotalbcm12T_CR4.toFixed(2);
    myForm.elements["Totalbcm12T_CR4"].value = Totalbcm12T_CR4.toFixed(2);

    //-----------------------16T-------------------------//

    dum16T = myForm.elements["dum16T"].value * 1;
    trip16T_CR1_1 = myForm.elements["trip16T_CR1_1"].value * 1;
    trip16T_CR1_2 = myForm.elements["trip16T_CR1_2"].value * 1;
    trip16T_CR1_3 = myForm.elements["trip16T_CR1_3"].value * 1;
    trip16T_CR1_4 = myForm.elements["trip16T_CR1_4"].value * 1;
    trip16T_CR1_5 = myForm.elements["trip16T_CR1_5"].value * 1;
    trip16T_CR1_6 = myForm.elements["trip16T_CR1_6"].value * 1;

    Totaltrip16T_CR1 = (trip16T_CR1_1 + trip16T_CR1_2) + (trip16T_CR1_3 + trip16T_CR1_4) + (trip16T_CR1_5 + trip16T_CR1_6);
    subTotalbcm16T_CR1 = (Totaltrip16T_CR1 * dum16T) / cat785D;
    Totalbcm16T_CR1 = (Totaltrip16T_CR1 * dum16T);

    myForm.elements["Totaltrip16T_CR1"].value = Totaltrip16T_CR1;
    myForm.elements["subTotalbcm16T_CR1"].value = subTotalbcm16T_CR1.toFixed(2);
    myForm.elements["Totalbcm16T_CR1"].value = Totalbcm16T_CR1.toFixed(2);


    dum16T = myForm.elements["dum16T"].value * 1;
    trip16T_CR2_1 = myForm.elements["trip16T_CR2_1"].value * 1;
    trip16T_CR2_2 = myForm.elements["trip16T_CR2_2"].value * 1;
    trip16T_CR2_3 = myForm.elements["trip16T_CR2_3"].value * 1;
    trip16T_CR2_4 = myForm.elements["trip16T_CR2_4"].value * 1;
    trip16T_CR2_5 = myForm.elements["trip16T_CR2_5"].value * 1;
    trip16T_CR2_6 = myForm.elements["trip16T_CR2_6"].value * 1;

    Totaltrip16T_CR2 = (trip16T_CR2_1 + trip16T_CR2_2) + (trip16T_CR2_3 + trip16T_CR2_4) + (trip16T_CR2_5 + trip16T_CR2_6);
    subTotalbcm16T_CR2 = (Totaltrip16T_CR2 * dum16T) / cat785D;
    Totalbcm16T_CR2 = (Totaltrip16T_CR2 * dum16T);

    myForm.elements["Totaltrip16T_CR2"].value = Totaltrip16T_CR2;
    myForm.elements["subTotalbcm16T_CR2"].value = subTotalbcm16T_CR2.toFixed(2);
    myForm.elements["Totalbcm16T_CR2"].value = Totalbcm16T_CR2.toFixed(2);


    dum16T = myForm.elements["dum16T"].value * 1;
    trip16T_CR3_1 = myForm.elements["trip16T_CR3_1"].value * 1;
    trip16T_CR3_2 = myForm.elements["trip16T_CR3_2"].value * 1;
    trip16T_CR3_3 = myForm.elements["trip16T_CR3_3"].value * 1;
    trip16T_CR3_4 = myForm.elements["trip16T_CR3_4"].value * 1;
    trip16T_CR3_5 = myForm.elements["trip16T_CR3_5"].value * 1;
    trip16T_CR3_6 = myForm.elements["trip16T_CR3_6"].value * 1;

    Totaltrip16T_CR3 = (trip16T_CR3_1 + trip16T_CR3_2) + (trip16T_CR3_3 + trip16T_CR3_4) + (trip16T_CR3_5 + trip16T_CR3_5);
    subTotalbcm16T_CR3 = (Totaltrip16T_CR3 * dum16T) / cat785D;
    Totalbcm16T_CR3 = (Totaltrip16T_CR3 * dum16T);

    myForm.elements["Totaltrip16T_CR3"].value = Totaltrip16T_CR3;
    myForm.elements["subTotalbcm16T_CR3"].value = subTotalbcm16T_CR3.toFixed(2);
    myForm.elements["Totalbcm16T_CR3"].value = Totalbcm16T_CR3.toFixed(2);

    dum16T = myForm.elements["dum16T"].value * 1;
    trip16T_CR4_1 = myForm.elements["trip16T_CR4_1"].value * 1;
    trip16T_CR4_2 = myForm.elements["trip16T_CR4_2"].value * 1;
    trip16T_CR4_3 = myForm.elements["trip16T_CR4_3"].value * 1;
    trip16T_CR4_4 = myForm.elements["trip16T_CR4_4"].value * 1;
    trip16T_CR4_5 = myForm.elements["trip16T_CR4_5"].value * 1;
    trip16T_CR4_6 = myForm.elements["trip16T_CR4_6"].value * 1;

    Totaltrip16T_CR4 = (trip16T_CR4_1 + trip16T_CR4_2) + (trip16T_CR4_3 + trip16T_CR4_4) + (trip16T_CR4_5 + trip16T_CR4_6);
    subTotalbcm16T_CR4 = (Totaltrip16T_CR4 * dum16T) / cat785D;
    Totalbcm16T_CR4 = (Totaltrip16T_CR4 * dum16T);

    myForm.elements["Totaltrip16T_CR4"].value = Totaltrip16T_CR4;
    myForm.elements["subTotalbcm16T_CR4"].value = subTotalbcm16T_CR4.toFixed(2);
    myForm.elements["Totalbcm16T_CR4"].value = Totalbcm16T_CR4.toFixed(2);



    //-----------------------25T-------------------------//

    dum25T = myForm.elements["dum25T"].value * 1;
    trip25T_CR1_1 = myForm.elements["trip25T_CR1_1"].value * 1;
    trip25T_CR1_2 = myForm.elements["trip25T_CR1_2"].value * 1;
    trip25T_CR1_3 = myForm.elements["trip25T_CR1_3"].value * 1;
    trip25T_CR1_4 = myForm.elements["trip25T_CR1_4"].value * 1;
    trip25T_CR1_5 = myForm.elements["trip25T_CR1_5"].value * 1;
    trip25T_CR1_6 = myForm.elements["trip25T_CR1_6"].value * 1;

    Totaltrip25T_CR1 = (trip25T_CR1_1 + trip25T_CR1_2) + (trip25T_CR1_3 + trip25T_CR1_4) + (trip25T_CR1_5 + trip25T_CR1_6);
    subTotalbcm25T_CR1 = (Totaltrip25T_CR1 * dum25T) / cat785D;
    Totalbcm25T_CR1 = (Totaltrip25T_CR1 * dum25T);
    myForm.elements["Totaltrip25T_CR1"].value = Totaltrip25T_CR1;
    myForm.elements["subTotalbcm25T_CR1"].value = subTotalbcm25T_CR1.toFixed(2);
    myForm.elements["Totalbcm25T_CR1"].value = Totalbcm25T_CR1.toFixed(2);

    dum25T = myForm.elements["dum25T"].value * 1;
    trip25T_CR2_1 = myForm.elements["trip25T_CR2_1"].value * 1;
    trip25T_CR2_2 = myForm.elements["trip25T_CR2_2"].value * 1;
    trip25T_CR2_3 = myForm.elements["trip25T_CR2_3"].value * 1;
    trip25T_CR2_4 = myForm.elements["trip25T_CR2_4"].value * 1;
    trip25T_CR2_5 = myForm.elements["trip25T_CR2_5"].value * 1;
    trip25T_CR2_6 = myForm.elements["trip25T_CR2_6"].value * 1;

    Totaltrip25T_CR2 = (trip25T_CR2_1 + trip25T_CR2_2) + (trip25T_CR2_3 + trip25T_CR2_4) + (trip25T_CR2_5 + trip25T_CR2_6);
    subTotalbcm25T_CR2 = (Totaltrip25T_CR2 * dum25T) / cat785D;
    Totalbcm25T_CR2 = (Totaltrip25T_CR2 * dum25T);
    myForm.elements["Totaltrip25T_CR2"].value = Totaltrip25T_CR2;
    myForm.elements["subTotalbcm25T_CR2"].value = subTotalbcm25T_CR2.toFixed(2);
    myForm.elements["Totalbcm25T_CR2"].value = Totalbcm25T_CR2.toFixed(2);

    dum25T = myForm.elements["dum25T"].value * 1;
    trip25T_CR3_1 = myForm.elements["trip25T_CR3_1"].value * 1;
    trip25T_CR3_2 = myForm.elements["trip25T_CR3_2"].value * 1;
    trip25T_CR3_3 = myForm.elements["trip25T_CR3_3"].value * 1;
    trip25T_CR3_4 = myForm.elements["trip25T_CR3_4"].value * 1;
    trip25T_CR3_5 = myForm.elements["trip25T_CR3_5"].value * 1;
    trip25T_CR3_6 = myForm.elements["trip25T_CR3_6"].value * 1;

    Totaltrip25T_CR3 = (trip25T_CR3_1 + trip25T_CR3_2) + (trip25T_CR3_3 + trip25T_CR3_4) + (trip25T_CR3_5 + trip25T_CR3_6);
    subTotalbcm25T_CR3 = (Totaltrip25T_CR3 * dum25T) / cat785D;
    Totalbcm25T_CR3 = (Totaltrip25T_CR3 * dum25T);
    myForm.elements["Totaltrip25T_CR3"].value = Totaltrip25T_CR3;
    myForm.elements["subTotalbcm25T_CR3"].value = subTotalbcm25T_CR3.toFixed(2);
    myForm.elements["Totalbcm25T_CR3"].value = Totalbcm25T_CR3.toFixed(2);


    dum25T = myForm.elements["dum25T"].value * 1;
    trip25T_CR4_1 = myForm.elements["trip25T_CR4_1"].value * 1;
    trip25T_CR4_2 = myForm.elements["trip25T_CR4_2"].value * 1;
    trip25T_CR4_3 = myForm.elements["trip25T_CR4_3"].value * 1;
    trip25T_CR4_4 = myForm.elements["trip25T_CR4_4"].value * 1;
    trip25T_CR4_5 = myForm.elements["trip25T_CR4_5"].value * 1;
    trip25T_CR4_6 = myForm.elements["trip25T_CR4_6"].value * 1;

    Totaltrip25T_CR4 = (trip25T_CR4_1 + trip25T_CR4_2) + (trip25T_CR4_3 + trip25T_CR4_4) + (trip25T_CR4_5 + trip25T_CR4_6);
    subTotalbcm25T_CR4 = (Totaltrip25T_CR4 * dum25T) / cat785D;
    Totalbcm25T_CR4 = (Totaltrip25T_CR4 * dum25T);
    myForm.elements["Totaltrip25T_CR4"].value = Totaltrip25T_CR4;
    myForm.elements["subTotalbcm25T_CR4"].value = subTotalbcm25T_CR4.toFixed(2);
    myForm.elements["Totalbcm25T_CR4"].value = Totalbcm25T_CR4.toFixed(2);


    dum25T = myForm.elements["dum25T"].value * 1;
    trip25T_CR5_1 = myForm.elements["trip25T_CR5_1"].value * 1;
    trip25T_CR5_2 = myForm.elements["trip25T_CR5_2"].value * 1;
    trip25T_CR5_3 = myForm.elements["trip25T_CR5_3"].value * 1;
    trip25T_CR5_4 = myForm.elements["trip25T_CR5_4"].value * 1;
    trip25T_CR5_5 = myForm.elements["trip25T_CR5_5"].value * 1;
    trip25T_CR5_6 = myForm.elements["trip25T_CR5_6"].value * 1;

    Totaltrip25T_CR5 = (trip25T_CR5_1 + trip25T_CR5_2) + (trip25T_CR5_3 + trip25T_CR5_4) + (trip25T_CR5_5 + trip25T_CR5_6);
    subTotalbcm25T_CR5 = (Totaltrip25T_CR5 * dum25T) / cat785D;
    Totalbcm25T_CR5 = (Totaltrip25T_CR5 * dum25T);
    myForm.elements["Totaltrip25T_CR5"].value = Totaltrip25T_CR5;
    myForm.elements["subTotalbcm25T_CR5"].value = subTotalbcm25T_CR5.toFixed(2);
    myForm.elements["Totalbcm25T_CR5"].value = Totalbcm25T_CR5.toFixed(2);


    dum25T = myForm.elements["dum25T"].value * 1;
    trip25T_CR6_1 = myForm.elements["trip25T_CR6_1"].value * 1;
    trip25T_CR6_2 = myForm.elements["trip25T_CR6_2"].value * 1;
    trip25T_CR6_3 = myForm.elements["trip25T_CR6_3"].value * 1;
    trip25T_CR6_4 = myForm.elements["trip25T_CR6_4"].value * 1;
    trip25T_CR6_5 = myForm.elements["trip25T_CR6_5"].value * 1;
    trip25T_CR6_6 = myForm.elements["trip25T_CR6_6"].value * 1;

    Totaltrip25T_CR6 = (trip25T_CR6_1 + trip25T_CR6_2) + (trip25T_CR6_3 + trip25T_CR6_4) + (trip25T_CR6_5 + trip25T_CR6_6);
    subTotalbcm25T_CR6 = (Totaltrip25T_CR6 * dum25T) / cat785D;
    Totalbcm25T_CR6 = (Totaltrip25T_CR6 * dum25T);
    myForm.elements["Totaltrip25T_CR6"].value = Totaltrip25T_CR6;
    myForm.elements["subTotalbcm25T_CR6"].value = subTotalbcm25T_CR6.toFixed(2);
    myForm.elements["Totalbcm25T_CR6"].value = Totalbcm25T_CR6.toFixed(2);



    dum25T = myForm.elements["dum25T"].value * 1;
    trip25T_CR7_1 = myForm.elements["trip25T_CR7_1"].value * 1;
    trip25T_CR7_2 = myForm.elements["trip25T_CR7_2"].value * 1;
    trip25T_CR7_3 = myForm.elements["trip25T_CR7_3"].value * 1;
    trip25T_CR7_4 = myForm.elements["trip25T_CR7_4"].value * 1;
    trip25T_CR7_5 = myForm.elements["trip25T_CR7_5"].value * 1;
    trip25T_CR7_6 = myForm.elements["trip25T_CR7_6"].value * 1;

    Totaltrip25T_CR7 = (trip25T_CR7_1 + trip25T_CR7_2) + (trip25T_CR7_3 + trip25T_CR7_4) + (trip25T_CR7_5 + trip25T_CR7_6);
    subTotalbcm25T_CR7 = (Totaltrip25T_CR7 * dum25T) / cat785D;
    Totalbcm25T_CR7 = (Totaltrip25T_CR7 * dum25T);
    myForm.elements["Totaltrip25T_CR7"].value = Totaltrip25T_CR7;
    myForm.elements["subTotalbcm25T_CR7"].value = subTotalbcm25T_CR7.toFixed(2);
    myForm.elements["Totalbcm25T_CR7"].value = Totalbcm25T_CR7.toFixed(2);


    dum25T = myForm.elements["dum25T"].value * 1;
    trip25T_CR8_1 = myForm.elements["trip25T_CR8_1"].value * 1;
    trip25T_CR8_2 = myForm.elements["trip25T_CR8_2"].value * 1;
    trip25T_CR8_3 = myForm.elements["trip25T_CR8_3"].value * 1;
    trip25T_CR8_4 = myForm.elements["trip25T_CR8_4"].value * 1;
    trip25T_CR8_5 = myForm.elements["trip25T_CR8_5"].value * 1;
    trip25T_CR8_6 = myForm.elements["trip25T_CR8_6"].value * 1;

    Totaltrip25T_CR8 = (trip25T_CR8_1 + trip25T_CR8_2) + (trip25T_CR8_3 + trip25T_CR8_4) + (trip25T_CR8_5 + trip25T_CR8_6);
    subTotalbcm25T_CR8 = (Totaltrip25T_CR8 * dum25T) / cat785D;
    Totalbcm25T_CR8 = (Totaltrip25T_CR8 * dum25T);
    myForm.elements["Totaltrip25T_CR8"].value = Totaltrip25T_CR8;
    myForm.elements["subTotalbcm25T_CR8"].value = subTotalbcm25T_CR8.toFixed(2);
    myForm.elements["Totalbcm25T_CR8"].value = Totalbcm25T_CR8.toFixed(2);

    dum25T = myForm.elements["dum25T"].value * 1;
    trip25T_CR9_1 = myForm.elements["trip25T_CR9_1"].value * 1;
    trip25T_CR9_2 = myForm.elements["trip25T_CR9_2"].value * 1;
    trip25T_CR9_3 = myForm.elements["trip25T_CR9_3"].value * 1;
    trip25T_CR9_4 = myForm.elements["trip25T_CR9_4"].value * 1;
    trip25T_CR9_5 = myForm.elements["trip25T_CR9_5"].value * 1;
    trip25T_CR9_6 = myForm.elements["trip25T_CR9_6"].value * 1;

    Totaltrip25T_CR9 = (trip25T_CR9_1 + trip25T_CR9_2) + (trip25T_CR9_3 + trip25T_CR9_4) + (trip25T_CR9_5 + trip25T_CR9_6);
    subTotalbcm25T_CR9 = (Totaltrip25T_CR9 * dum25T) / cat785D;
    Totalbcm25T_CR9 = (Totaltrip25T_CR9 * dum25T);
    myForm.elements["Totaltrip25T_CR9"].value = Totaltrip25T_CR9;
    myForm.elements["subTotalbcm25T_CR9"].value = subTotalbcm25T_CR9.toFixed(2);
    myForm.elements["Totalbcm25T_CR9"].value = Totalbcm25T_CR9.toFixed(2);



    dum25T = myForm.elements["dum25T"].value * 1;
    trip25T_CR10_1 = myForm.elements["trip25T_CR10_1"].value * 1;
    trip25T_CR10_2 = myForm.elements["trip25T_CR10_2"].value * 1;
    trip25T_CR10_3 = myForm.elements["trip25T_CR10_3"].value * 1;
    trip25T_CR10_4 = myForm.elements["trip25T_CR10_4"].value * 1;
    trip25T_CR10_5 = myForm.elements["trip25T_CR10_5"].value * 1;
    trip25T_CR10_6 = myForm.elements["trip25T_CR10_6"].value * 1;

    Totaltrip25T_CR10 = (trip25T_CR10_1 + trip25T_CR10_2) + (trip25T_CR10_3 + trip25T_CR10_4) + (trip25T_CR10_5 + trip25T_CR10_6);
    subTotalbcm25T_CR10 = (Totaltrip25T_CR10 * dum25T) / cat785D;
    Totalbcm25T_CR10 = (Totaltrip25T_CR10 * dum25T);
    myForm.elements["Totaltrip25T_CR10"].value = Totaltrip25T_CR10;
    myForm.elements["subTotalbcm25T_CR10"].value = subTotalbcm25T_CR10.toFixed(2);
    myForm.elements["Totalbcm25T_CR10"].value = Totalbcm25T_CR10.toFixed(2);



    dum25T = myForm.elements["dum25T"].value * 1;
    trip25T_CR11_1 = myForm.elements["trip25T_CR11_1"].value * 1;
    trip25T_CR11_2 = myForm.elements["trip25T_CR11_2"].value * 1;
    trip25T_CR11_3 = myForm.elements["trip25T_CR11_3"].value * 1;
    trip25T_CR11_4 = myForm.elements["trip25T_CR11_4"].value * 1;
    trip25T_CR11_5 = myForm.elements["trip25T_CR11_5"].value * 1;
    trip25T_CR11_6 = myForm.elements["trip25T_CR11_6"].value * 1;

    Totaltrip25T_CR11 = (trip25T_CR11_1 + trip25T_CR11_2) + (trip25T_CR11_3 + trip25T_CR11_4) + (trip25T_CR11_5 + trip25T_CR11_6);
    subTotalbcm25T_CR11 = (Totaltrip25T_CR11 * dum25T) / cat785D;
    Totalbcm25T_CR11 = (Totaltrip25T_CR11 * dum25T);
    myForm.elements["Totaltrip25T_CR11"].value = Totaltrip25T_CR11;
    myForm.elements["subTotalbcm25T_CR11"].value = subTotalbcm25T_CR11.toFixed(2);
    myForm.elements["Totalbcm25T_CR11"].value = Totalbcm25T_CR11.toFixed(2);



    dum25T = myForm.elements["dum25T"].value * 1;
    trip25T_CR12_1 = myForm.elements["trip25T_CR12_1"].value * 1;
    trip25T_CR12_2 = myForm.elements["trip25T_CR12_2"].value * 1;
    trip25T_CR12_3 = myForm.elements["trip25T_CR12_3"].value * 1;
    trip25T_CR12_4 = myForm.elements["trip25T_CR12_4"].value * 1;
    trip25T_CR12_5 = myForm.elements["trip25T_CR12_5"].value * 1;
    trip25T_CR12_6 = myForm.elements["trip25T_CR12_6"].value * 1;

    Totaltrip25T_CR12 = (trip25T_CR12_1 + trip25T_CR12_2) + (trip25T_CR12_3 + trip25T_CR12_4) + (trip25T_CR12_5 + trip25T_CR12_6);
    subTotalbcm25T_CR12 = (Totaltrip25T_CR12 * dum25T) / cat785D;
    Totalbcm25T_CR12 = (Totaltrip25T_CR12 * dum25T);
    myForm.elements["Totaltrip25T_CR12"].value = Totaltrip25T_CR12;
    myForm.elements["subTotalbcm25T_CR12"].value = subTotalbcm25T_CR12.toFixed(2);
    myForm.elements["Totalbcm25T_CR12"].value = Totalbcm25T_CR12.toFixed(2);



    dum25T = myForm.elements["dum25T"].value * 1;
    trip25T_CR13_1 = myForm.elements["trip25T_CR13_1"].value * 1;
    trip25T_CR13_2 = myForm.elements["trip25T_CR13_2"].value * 1;
    trip25T_CR13_3 = myForm.elements["trip25T_CR13_3"].value * 1;
    trip25T_CR13_4 = myForm.elements["trip25T_CR13_4"].value * 1;
    trip25T_CR13_5 = myForm.elements["trip25T_CR13_5"].value * 1;
    trip25T_CR13_6 = myForm.elements["trip25T_CR13_6"].value * 1;

    Totaltrip25T_CR13 = (trip25T_CR13_1 + trip25T_CR13_2) + (trip25T_CR13_3 + trip25T_CR13_4) + (trip25T_CR13_5 + trip25T_CR13_6);
    subTotalbcm25T_CR13 = (Totaltrip25T_CR13 * dum25T) / cat785D;
    Totalbcm25T_CR13 = (Totaltrip25T_CR13 * dum25T);
    myForm.elements["Totaltrip25T_CR13"].value = Totaltrip25T_CR13;
    myForm.elements["subTotalbcm25T_CR13"].value = subTotalbcm25T_CR13.toFixed(2);
    myForm.elements["Totalbcm25T_CR13"].value = Totalbcm25T_CR13.toFixed(2);


    dum25T = myForm.elements["dum25T"].value * 1;
    trip25T_CR14_1 = myForm.elements["trip25T_CR14_1"].value * 1;
    trip25T_CR14_2 = myForm.elements["trip25T_CR14_2"].value * 1;
    trip25T_CR14_3 = myForm.elements["trip25T_CR14_3"].value * 1;
    trip25T_CR14_4 = myForm.elements["trip25T_CR14_4"].value * 1;
    trip25T_CR14_5 = myForm.elements["trip25T_CR14_5"].value * 1;
    trip25T_CR14_6 = myForm.elements["trip25T_CR14_6"].value * 1;

    Totaltrip25T_CR14 = (trip25T_CR14_1 + trip25T_CR14_2) + (trip25T_CR14_3 + trip25T_CR14_4) + (trip25T_CR14_5 + trip25T_CR14_6);
    subTotalbcm25T_CR14 = (Totaltrip25T_CR14 * dum25T) / cat785D;
    Totalbcm25T_CR14 = (Totaltrip25T_CR14 * dum25T);
    myForm.elements["Totaltrip25T_CR14"].value = Totaltrip25T_CR14;
    myForm.elements["subTotalbcm25T_CR14"].value = subTotalbcm25T_CR14.toFixed(2);
    myForm.elements["Totalbcm25T_CR14"].value = Totalbcm25T_CR14.toFixed(2);



    //-----------------------30T-------------------------//

    dum30T = myForm.elements["dum30T"].value * 1;
    trip30T_CR1_1 = myForm.elements["trip30T_CR1_1"].value * 1;
    trip30T_CR1_2 = myForm.elements["trip30T_CR1_2"].value * 1;
    trip30T_CR1_3 = myForm.elements["trip30T_CR1_3"].value * 1;
    trip30T_CR1_4 = myForm.elements["trip30T_CR1_4"].value * 1;
    trip30T_CR1_5 = myForm.elements["trip30T_CR1_5"].value * 1;
    trip30T_CR1_6 = myForm.elements["trip30T_CR1_6"].value * 1;

    Totaltrip30T_CR1 = (trip30T_CR1_1 + trip30T_CR1_2) + (trip30T_CR1_3 + trip30T_CR1_4) + (trip30T_CR1_5 + trip30T_CR1_6);
    subTotalbcm30T_CR1 = (Totaltrip30T_CR1 * dum30T) / cat785D;
    Totalbcm30T_CR1 = (Totaltrip30T_CR1 * dum30T);
    myForm.elements["Totaltrip30T_CR1"].value = Totaltrip30T_CR1;
    myForm.elements["subTotalbcm30T_CR1"].value = subTotalbcm30T_CR1.toFixed(2);
    myForm.elements["Totalbcm30T_CR1"].value = Totalbcm30T_CR1.toFixed(2);


    dum30T = myForm.elements["dum30T"].value * 1;
    trip30T_CR2_1 = myForm.elements["trip30T_CR2_1"].value * 1;
    trip30T_CR2_2 = myForm.elements["trip30T_CR2_2"].value * 1;
    trip30T_CR2_3 = myForm.elements["trip30T_CR2_3"].value * 1;
    trip30T_CR2_4 = myForm.elements["trip30T_CR2_4"].value * 1;
    trip30T_CR2_5 = myForm.elements["trip30T_CR2_5"].value * 1;
    trip30T_CR2_6 = myForm.elements["trip30T_CR2_6"].value * 1;

    Totaltrip30T_CR2 = (trip30T_CR2_1 + trip30T_CR2_2) + (trip30T_CR2_3 + trip30T_CR2_4) + (trip30T_CR2_5 + trip30T_CR2_6);
    subTotalbcm30T_CR2 = (Totaltrip30T_CR2 * dum30T) / cat785D;
    Totalbcm30T_CR2 = (Totaltrip30T_CR2 * dum30T);
    myForm.elements["Totaltrip30T_CR2"].value = Totaltrip30T_CR2;
    myForm.elements["subTotalbcm30T_CR2"].value = subTotalbcm30T_CR2.toFixed(2);
    myForm.elements["Totalbcm30T_CR2"].value = Totalbcm30T_CR2.toFixed(2);

    dum30T = myForm.elements["dum30T"].value * 1;
    trip30T_CR3_1 = myForm.elements["trip30T_CR3_1"].value * 1;
    trip30T_CR3_2 = myForm.elements["trip30T_CR3_2"].value * 1;
    trip30T_CR3_3 = myForm.elements["trip30T_CR3_3"].value * 1;
    trip30T_CR3_4 = myForm.elements["trip30T_CR3_4"].value * 1;
    trip30T_CR3_5 = myForm.elements["trip30T_CR3_5"].value * 1;
    trip30T_CR3_6 = myForm.elements["trip30T_CR3_6"].value * 1;

    Totaltrip30T_CR3 = (trip30T_CR3_1 + trip30T_CR3_2) + (trip30T_CR3_3 + trip30T_CR3_4) + (trip30T_CR3_5 + trip30T_CR3_6);
    subTotalbcm30T_CR3 = (Totaltrip30T_CR3 * dum30T) / cat785D;
    Totalbcm30T_CR3 = (Totaltrip30T_CR3 * dum30T);
    myForm.elements["Totaltrip30T_CR3"].value = Totaltrip30T_CR3;
    myForm.elements["subTotalbcm30T_CR3"].value = subTotalbcm30T_CR3.toFixed(2);
    myForm.elements["Totalbcm30T_CR3"].value = Totalbcm30T_CR3.toFixed(2);

    dum30T = myForm.elements["dum30T"].value * 1;
    trip30T_CR4_1 = myForm.elements["trip30T_CR4_1"].value * 1;
    trip30T_CR4_2 = myForm.elements["trip30T_CR4_2"].value * 1;
    trip30T_CR4_3 = myForm.elements["trip30T_CR4_3"].value * 1;
    trip30T_CR4_4 = myForm.elements["trip30T_CR4_4"].value * 1;
    trip30T_CR4_5 = myForm.elements["trip30T_CR4_5"].value * 1;
    trip30T_CR4_6 = myForm.elements["trip30T_CR4_6"].value * 1;

    Totaltrip30T_CR4 = (trip30T_CR4_1 + trip30T_CR4_2) + (trip30T_CR4_3 + trip30T_CR4_4) + (trip30T_CR4_5 + trip30T_CR4_6);
    subTotalbcm30T_CR4 = (Totaltrip30T_CR4 * dum30T) / cat785D;
    Totalbcm30T_CR4 = (Totaltrip30T_CR4 * dum30T);
    myForm.elements["Totaltrip30T_CR4"].value = Totaltrip30T_CR4;
    myForm.elements["subTotalbcm30T_CR4"].value = subTotalbcm30T_CR4.toFixed(2);
    myForm.elements["Totalbcm30T_CR4"].value = Totalbcm30T_CR4.toFixed(2);



    dum30T = myForm.elements["dum30T"].value * 1;
    trip30T_CR5_1 = myForm.elements["trip30T_CR5_1"].value * 1;
    trip30T_CR5_2 = myForm.elements["trip30T_CR5_2"].value * 1;
    trip30T_CR5_3 = myForm.elements["trip30T_CR5_3"].value * 1;
    trip30T_CR5_4 = myForm.elements["trip30T_CR5_4"].value * 1;
    trip30T_CR5_5 = myForm.elements["trip30T_CR5_5"].value * 1;
    trip30T_CR5_6 = myForm.elements["trip30T_CR5_6"].value * 1;

    Totaltrip30T_CR5 = (trip30T_CR5_1 + trip30T_CR5_2) + (trip30T_CR5_3 + trip30T_CR5_4) + (trip30T_CR5_5 + trip30T_CR5_6);
    subTotalbcm30T_CR5 = (Totaltrip30T_CR5 * dum30T) / cat785D;
    Totalbcm30T_CR5 = (Totaltrip30T_CR5 * dum30T);
    myForm.elements["Totaltrip30T_CR5"].value = Totaltrip30T_CR5;
    myForm.elements["subTotalbcm30T_CR5"].value = subTotalbcm30T_CR5.toFixed(2);
    myForm.elements["Totalbcm30T_CR5"].value = Totalbcm30T_CR5.toFixed(2);


    dum30T = myForm.elements["dum30T"].value * 1;
    trip30T_CR6_1 = myForm.elements["trip30T_CR6_1"].value * 1;
    trip30T_CR6_2 = myForm.elements["trip30T_CR6_2"].value * 1;
    trip30T_CR6_3 = myForm.elements["trip30T_CR6_3"].value * 1;
    trip30T_CR6_4 = myForm.elements["trip30T_CR6_4"].value * 1;
    trip30T_CR6_5 = myForm.elements["trip30T_CR6_5"].value * 1;
    trip30T_CR6_6 = myForm.elements["trip30T_CR6_6"].value * 1;

    Totaltrip30T_CR6 = (trip30T_CR6_1 + trip30T_CR6_2) + (trip30T_CR6_3 + trip30T_CR6_4) + (trip30T_CR6_5 + trip30T_CR6_6);
    subTotalbcm30T_CR6 = (Totaltrip30T_CR6 * dum30T) / cat785D;
    Totalbcm30T_CR6 = (Totaltrip30T_CR6 * dum30T);
    myForm.elements["Totaltrip30T_CR6"].value = Totaltrip30T_CR6;
    myForm.elements["subTotalbcm30T_CR6"].value = subTotalbcm30T_CR6.toFixed(2);
    myForm.elements["Totalbcm30T_CR6"].value = Totalbcm30T_CR6.toFixed(2);


    //จำนวนเที่ยว Job1
    TotalTripJob1 = (Totaltrip12T_CR1 + Totaltrip12T_CR2) + (Totaltrip12T_CR3 + Totaltrip12T_CR4) + (Totaltrip16T_CR1 + Totaltrip16T_CR2) +
        (Totaltrip16T_CR3 + Totaltrip16T_CR4) + (Totaltrip25T_CR1 + Totaltrip25T_CR2) + (Totaltrip25T_CR3 + Totaltrip25T_CR4) +
        (Totaltrip25T_CR5 + Totaltrip25T_CR6) + (Totaltrip25T_CR7 + Totaltrip25T_CR8) + (Totaltrip25T_CR9 + Totaltrip25T_CR10) +
        (Totaltrip25T_CR11 + Totaltrip25T_CR12) + (Totaltrip25T_CR13 + Totaltrip25T_CR14) + (Totaltrip30T_CR1 + Totaltrip30T_CR2) +
        (Totaltrip30T_CR3 + Totaltrip30T_CR4) + (Totaltrip30T_CR5 + Totaltrip30T_CR6) + (Totaltrip785D_CR1 + Totaltrip777D_CR1);
    myForm.elements["TotalTripJob1"].value = TotalTripJob1;

    //จำนวนเที่ยว Job3
    TotalTripJob3 = TotaltripEGAT_CR1;
    myForm.elements["TotalTripJob3"].value = TotalTripJob3;
    //จำนวนเที่ยว Job1+3
    TotalTripJob1_3 = TotalTripJob1 + TotalTripJob3;
    myForm.elements["TotalTripJob1_3"].value = TotalTripJob1_3;


    //จำนวน BCM/785D Job1
    TotalBcmJob1 = (subTotalbcm12T_CR1 + subTotalbcm12T_CR2) + (subTotalbcm12T_CR3 + subTotalbcm12T_CR4) + (subTotalbcm16T_CR1 + subTotalbcm16T_CR2) +
        (subTotalbcm16T_CR3 + subTotalbcm16T_CR4) + (subTotalbcm25T_CR1 + subTotalbcm25T_CR2) + (subTotalbcm25T_CR3 + subTotalbcm25T_CR4) +
        (subTotalbcm25T_CR5 + subTotalbcm25T_CR6) + (subTotalbcm25T_CR7 + subTotalbcm25T_CR8) + (subTotalbcm25T_CR9 + subTotalbcm25T_CR10) +
        (subTotalbcm25T_CR11 + subTotalbcm25T_CR12) + (subTotalbcm25T_CR13 + subTotalbcm25T_CR14) + (subTotalbcm30T_CR1 + subTotalbcm30T_CR2) +
        (subTotalbcm30T_CR3 + subTotalbcm30T_CR4) + (subTotalbcm30T_CR5 + subTotalbcm30T_CR6) + (subTotalbcm785D_CR1 + subTotalbcm777D_CR1) + subTotalbcmBWE;
    myForm.elements["TotalBcmJob1"].value = TotalBcmJob1.toFixed(2);

    //จำนวน BCM/785D Job3
    TotalBcmJob3 = subTotalbcmEGAT_CR1;
    myForm.elements["TotalBcmJob3"].value = TotalBcmJob3.toFixed(2);

    //จำนวนBCM/785D Job1+3
    TotalBcmJob1_3 = TotalBcmJob1 + TotalBcmJob3;
    myForm.elements["TotalBcmJob1_3"].value = TotalBcmJob1_3.toFixed(2);

    //จำนวน BCM Job1
    SumTotalBcmJob1 = (Totalbcm12T_CR1 + Totalbcm12T_CR2) + (Totalbcm12T_CR3 + Totalbcm12T_CR4) + (Totalbcm16T_CR1 + Totalbcm16T_CR2) +
        (Totalbcm16T_CR3 + Totalbcm16T_CR4) + (Totalbcm25T_CR1 + Totalbcm25T_CR2) + (Totalbcm25T_CR3 + Totalbcm25T_CR4) +
        (Totalbcm25T_CR5 + Totalbcm25T_CR6) + (Totalbcm25T_CR7 + Totalbcm25T_CR8) + (Totalbcm25T_CR9 + Totalbcm25T_CR10) +
        (Totalbcm25T_CR11 + Totalbcm25T_CR12) + (Totalbcm25T_CR13 + Totalbcm25T_CR14) + (Totalbcm30T_CR1 + Totalbcm30T_CR2) +
        (Totalbcm30T_CR3 + Totalbcm30T_CR4) + (Totalbcm30T_CR5 + Totalbcm30T_CR6) + (Totalbcm785D_CR1 + Totalbcm777D_CR1) + TotalbcmBWE;
    myForm.elements["SumTotalBcmJob1"].value = SumTotalBcmJob1.toFixed(2);

    //จำนวน BCM Job3
    SumTotalBcmJob3 = TotalbcmEGAT_CR1;
    myForm.elements["SumTotalBcmJob3"].value = SumTotalBcmJob3.toFixed(2);

    //จำนวนBCM Job1+3
    SumTotalBcmJob1_3 = SumTotalBcmJob1 + SumTotalBcmJob3;
    myForm.elements["SumTotalBcmJob1_3"].value = SumTotalBcmJob1_3.toFixed(2);


}