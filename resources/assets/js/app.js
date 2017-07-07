
window.$ = window.jQuery = require('jquery')
import UIkit from 'uikit'
import Icons from 'uikit/dist/js/uikit-icons'
require('trumbowyg/dist/trumbowyg');
require('trumbowyg/dist/langs/ru.min')

// loads the Icon plugin
UIkit.use(Icons)

$(document).ready(function () {

  $('#admin-article').on('click', '.delete', function () {
    const that = $(this)
    UIkit.modal.confirm('Удалить статью?').then(function() {
      that.next().submit()
    }, function () {

    });
  });

  $('textarea').trumbowyg({lang: 'ru'});

});