/**
 * 2007-2022 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/afl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 *  @author    PrestaShop SA <contact@prestashop.com>
 *  @copyright 2007-2022 PrestaShop SA
 *  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 *  International Registered Trademark & Property of PrestaShop SA
 *
 * Don't forget to prefix your containers with your own identifier
 * to avoid any conflicts with others containers.
 */

$(function () {
  //file input field trigger when the drop box is clicked
  $('#dropBox').click(function () {
    $('#fileInput').click();
  });

  //prevent browsers from opening the file when its dragged and dropped
  $(document).on('drop dragover', function (e) {
    e.preventDefault();
  });

  //call a function to handle file upload on select file
  $('input[type=file]').on('change', fileUpload);
});

function fileUpload(event) {
  //notify user about the file upload status
  $('#dropBox').html(event.target.value + ' uploading...');

  //get selected file
  files = event.target.files;

  //form data check the above bullet for what it is
  var data = new FormData();

  //file data is presented as an array
  for (var i = 0; i < files.length; i++) {
    var file = files[i];
    if (!file.type.match('image.*')) {
      //check file type
      $('#dropBox').html('Please choose an images file.');
    } else if (file.size > 1048576) {
      //check file size (in bytes)
      $('#dropBox').html('Sorry, your file is too large (>1 MB)');
    } else {
      //append the uploadable file to FormData object
      data.append('file', file, file.name);

      //create a new XMLHttpRequest
      var xhr = new XMLHttpRequest();

      //post file data for upload
      xhr.open('POST', 'upload.php', true);
      xhr.send(data);
      xhr.onload = function () {
        //get response and show the uploading status
        var response = JSON.parse(xhr.responseText);
        if (xhr.status === 200 && response.status == 'ok') {
          $('#dropBox').html(
            'File has been uploaded successfully. Click to upload another.'
          );
        } else if (response.status == 'type_err') {
          $('#dropBox').html(
            'Please choose an images file. Click to upload another.'
          );
        } else {
          $('#dropBox').html('Some problem occured, please try again.');
        }
      };
    }
  }
}

$(document).ready(function () {
  var current_fs, next_fs, previous_fs; //fieldsets
  var opacity;

  $('.next').click(function () {
    current_fs = $(this).parent();
    next_fs = $(this).parent().next();

    //Add Class Active
    $('#progressbar li').eq($('fieldset').index(next_fs)).addClass('active');

    //show the next fieldset
    next_fs.show();
    //hide the current fieldset with style
    current_fs.animate(
      { opacity: 0 },
      {
        step: function (now) {
          // for making fielset appear animation
          opacity = 1 - now;

          current_fs.css({
            display: 'none',
            position: 'relative',
          });
          next_fs.css({ opacity: opacity });
        },
        duration: 600,
      }
    );
  });

  $('.previous').click(function () {
    current_fs = $(this).parent();
    previous_fs = $(this).parent().prev();

    //Remove class active
    $('#progressbar li')
      .eq($('fieldset').index(current_fs))
      .removeClass('active');

    //show the previous fieldset
    previous_fs.show();

    //hide the current fieldset with style
    current_fs.animate(
      { opacity: 0 },
      {
        step: function (now) {
          // for making fielset appear animation
          opacity = 1 - now;

          current_fs.css({
            display: 'none',
            position: 'relative',
          });
          previous_fs.css({ opacity: opacity });
        },
        duration: 600,
      }
    );
  });

  $('.radio-group .radio').click(function () {
    $(this).parent().find('.radio').removeClass('selected');
    $(this).addClass('selected');
  });

  $('.submit').click(function () {
    return false;
  });
});

('use strict');

(function (document, window, index) {
  var inputs = document.querySelectorAll('.inputfile');
  Array.prototype.forEach.call(inputs, function (input) {
    var label = input.nextElementSibling,
      labelVal = label.innerHTML;

    input.addEventListener('change', function (e) {
      var fileName = '';
      if (this.files && this.files.length > 1)
        fileName = (this.getAttribute('data-multiple-caption') || '').replace(
          '{count}',
          this.files.length
        );
      else fileName = e.target.value.split('\\').pop();

      if (fileName) label.querySelector('span').innerHTML = fileName;
      else label.innerHTML = labelVal;
    });

    // Firefox bug fix
    input.addEventListener('focus', function () {
      input.classList.add('has-focus');
    });
    input.addEventListener('blur', function () {
      input.classList.remove('has-focus');
    });
  });
})(document, window, 0);
