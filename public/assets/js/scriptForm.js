'use strict';

$(document).ready(function () {
   
    $('#exchangeForm').hide();
    $('#rentalForm').hide();

    $('#exchange').click(function () {
        $('#rentalForm').hide();
        $('#exchangeForm').show();
    });

    $('#rental').click(function () {
        $('#exchangeForm').hide();
        $('#rentalForm').show();
    });
});